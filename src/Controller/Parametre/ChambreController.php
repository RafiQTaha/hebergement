<?php

namespace App\Controller\Parametre;

use App\Controller\ApiController;
use App\Entity\AcDepartement;
use App\Entity\PEtages;
use App\Entity\TChambre;
use App\Controller\DatatablesController;
use App\Entity\StatutChambre;
use App\Entity\TypeChambre;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/parametre/chambre')]

class ChambreController extends AbstractController
{
    private $em;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
    }
    #[Route('/', name: 'parametre_chambre')]
    public function index(Request $request)
    {
        $operations = ApiController::check($this->getUser(), 'parametre_chambre', $this->em, $request);
        if(!$operations) {
            return $this->render("errors/403.html.twig");
        }
        return $this->render('parametre/chambre/index.html.twig', [
            'departements' => $this->em->getRepository(AcDepartement::class)->findBy(['active' => 1]),
            'typechambres' => $this->em->getRepository(TypeChambre::class)->findBy(['active' => 1]),
            'statutchambres' => $this->em->getRepository(StatutChambre::class)->findBy(['active' => 1]),
            'operations' => $operations
        ]);
    }
    #[Route('/list', name: 'parametre_chambre_list')]
    public function list(Request $request): Response
    {
        
        $params = $request->query;
        // dd($params);
        $where = $totalRows = $sqlRequest = "";
        $filtre = "where 1 = 1 and chm.active = 1";   
        // dd($params->all('columns')[0]);
        if (!empty($params->all('columns')[0]['search']['value'])) {
            // dd("in");
            $filtre .= " and dep.id = '" . $params->all('columns')[0]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[1]['search']['value'])) {
            // dd("in");
            $filtre .= " and etg.id = '" . $params->all('columns')[1]['search']['value'] . "' ";
        }
        $columns = array(
            array( 'db' => 'chm.id','dt' => 0),
            array( 'db' => 'chm.code','dt' => 1),
            array( 'db' => 'UPPER(dep.designation)','dt' => 2),
            array( 'db' => 'UPPER(etg.designation)','dt' => 3),
            array( 'db' => 'upper(tc.designation)','dt' => 4),
            array( 'db' => 'upper(st.designation)','dt' => 5),
            array( 'db' => 'chm.designation','dt' => 6),
        );
        $sql = "SELECT " . implode(", ", DatatablesController::Pluck($columns, 'db')) . "
        from tchambre chm
        inner join petages etg on etg.id = chm.etage_id
        inner join ac_departement dep on dep.id = etg.departement_id
        inner join type_chambre tc on tc.id = chm.type_chambre_id
        left join statut_chambre st on st.id = chm.statut_chambre_id
        $filtre ";
        // dd($sql);
        $totalRows .= $sql;
        $sqlRequest .= $sql;
        $stmt = $this->em->getConnection()->prepare($sql);
        $newstmt = $stmt->executeQuery();
        $totalRecords = count($newstmt->fetchAll());
        // dd($sql);
            
        // search 
        $where = DatatablesController::Search($request, $columns);
        if (isset($where) && $where != '') {
            $sqlRequest .= $where;
        }
        $sqlRequest .= DatatablesController::Order($request, $columns);
        // dd($sqlRequest);
        $stmt = $this->em->getConnection()->prepare($sqlRequest);
        $resultSet = $stmt->executeQuery();
        $result = $resultSet->fetchAll();
        
        
        $data = array();
        // dd($result);
        $i = 1;
        foreach ($result as $key => $row) {
            $nestedData = array();
            $cd = $row['id'];
            // dd($row);
            
            $etat_bg="";
            foreach (array_values($row) as $key => $value) {
               if ($key == 4) {
                $etat_bg = $value == "PROBLEME" ? "etat_bg_nf" : "";
               }
                $nestedData[] = $value;
                
            }
            $nestedData["DT_RowId"] = $cd;
            $nestedData["DT_RowClass"] = $etat_bg;
            $data[] = $nestedData;
            $i++;
        }
        // dd($data);
        $json_data = array(
            "draw" => intval($params->get('draw')),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data   
        );
        // die;
        return new Response(json_encode($json_data));
    }
    #[Route('/new', name: 'parametre_chambre_new')]
    public function new(Request $request): Response
    {
        // dd($request);
       $chambre = new TChambre();
       $chambre->setDesignation($request->get('designation'));
       $chambre->setAbreviation($request->get('abreviation'));
       $chambre->setActive($request->get('active') == "on" ? true : false);
       $chambre->setCreated(new \DateTime("now"));
       $chambre->setUserCreated($this->getUser());
       $chambre->setEtage(
           $this->em->getRepository(PEtages::class)->find($request->get("etage_id"))
       );
       $chambre->setStatutChambre(
           $this->em->getRepository(StatutChambre::class)->find($request->get("statutchambre"))
       );
       $chambre->setTypeChambre(
           $this->em->getRepository(TypeChambre::class)->find($request->get("typechambre"))
       );
       $this->em->persist($chambre);
       $this->em->flush();
       $chambre->setCode("CH".str_pad($chambre->getId(), 5, '0', STR_PAD_LEFT));
       $this->em->flush();

       return new JsonResponse(1);
    }
    #[Route('/details/{chambre}', name: 'parametre_chambre_details')]
    public function details(TChambre $chambre): Response
    {
        $html = $this->render("parametre/chambre/pages/modifier.html.twig", [
            'typechambres' => $this->em->getRepository(TypeChambre::class)->findBy(['active' => 1]),
            'statutchambres' => $this->em->getRepository(StatutChambre::class)->findBy(['active' => 1]),
            'chambre' => $chambre,
        ])->getContent();

       return new JsonResponse($html);
    }
    #[Route('/update/{chambre}', name: 'parametre_chambre_update')]
    public function update(Request $request, TChambre $chambre): Response
    {
        $chambre->setDesignation($request->get('designation'));
        $chambre->setAbreviation($request->get('abreviation'));
        $chambre->setStatutChambre(
            $this->em->getRepository(StatutChambre::class)->find($request->get("statutchambre"))
        );
        $chambre->setTypeChambre(
            $this->em->getRepository(TypeChambre::class)->find($request->get("typechambre"))
        );
        $chambre->setUserUpdated($this->getUser());
        $chambre->setUpdated(new \DateTime("now"));
        $chambre->setActive($request->get('active') == "on" ? true : false);
        $this->em->flush();
 
        return new JsonResponse(1);
    }

    #[Route('/delete/{chambre}', name: 'parametre_chambre_delete')]
    public function delete(Request $request, TChambre $chambre): Response
    {
        $chambre->setActive('0');
        $this->em->flush();
 
        return new JsonResponse(1);
    }
}
