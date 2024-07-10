<?php

namespace App\Controller\Parametre;

use App\Controller\ApiController;
use App\Entity\Lit;
use App\Controller\DatatablesController;
use App\Entity\AcDepartement;
use App\Entity\TChambre;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/parametre/lit')]
class LitController extends AbstractController
{
    private $em;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
    }
    #[Route('/', name: 'parametre_lit')]
    public function index(Request $request): Response
    {
        $operations = ApiController::check($this->getUser(), 'parametre_lit', $this->em, $request);
        if(!$operations) {
            return $this->render("errors/403.html.twig");
        }
        return $this->render('parametre/lit/index.html.twig', [
            'departements' => $this->em->getRepository(AcDepartement::class)->findBy(['active' => 1]),
            'chambre' => $this->em->getRepository(TChambre::class)->findBy(['active' => 1]),
            'operations' => $operations
        ]);
    }
    #[Route('/list', name: 'parametre_lit_list')]
    public function list(Request $request): Response
    {
        $params = $request->query;
        // dd($params);
        $where = $totalRows = $sqlRequest = "";
        $filtre = "where 1 = 1 and lit.active = 1";   
        // dd($params->all('columns')[0]);
        if (!empty($params->all('columns')[0]['search']['value'])) {
            // dd("in");
            $filtre .= " and dep.id = '" . $params->all('columns')[0]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[1]['search']['value'])) {
            // dd("in");
            $filtre .= " and etg.id = '" . $params->all('columns')[1]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[2]['search']['value'])) {
            // dd("in");
            $filtre .= " and chm.id = '" . $params->all('columns')[2]['search']['value'] . "' ";
        }
        $columns = array(
            array( 'db' => 'lit.id','dt' => 0),
            array( 'db' => 'UPPER(dep.designation)','dt' => 1),
            array( 'db' => 'UPPER(etg.designation)','dt' => 2),
            array( 'db' => 'upper(tc.designation)','dt' => 3),
            array( 'db' => 'upper(st.designation)','dt' => 4),
            array( 'db' => 'chm.designation','dt' => 5),
            array( 'db' => 'lit.position','dt' => 6),
        );
        $sql = "SELECT " . implode(", ", DatatablesController::Pluck($columns, 'db')) . "
        from lit
        inner join tchambre chm on chm.id = lit.chambre_id
        inner join petages etg on etg.id = chm.etage_id
        inner join ac_departement dep on dep.id = etg.departement_id
        inner join type_chambre tc on tc.id = chm.type_chambre_id
        inner join statut_chambre st on st.id = chm.statut_chambre_id
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
    #[Route('/new', name: 'parametre_lit_new')]
    public function new(Request $request): Response
    {
        if ($request->get('position') == "" || $request->get('chambre_id') == "" ) {
            return new JsonResponse('Merci de choisir une chambre et une position !',500);
        }
        $chambre = $this->em->getRepository(TChambre::class)->find($request->get('chambre_id'));
        if (!$chambre)  return new JsonResponse('Merci de choisir une chambre valide!',500);

        $position=$chambre->getDesignation()."-".trim($request->get('position'));
        $existLit = $this->em->getRepository(Lit::class)->findOneBy(['chambre'=>$chambre,'position'=>$position,'active'=>1]);
        if ($existLit)  return new JsonResponse('Cette Position deja exist dans cette chambre !',500);

        $lit = new Lit();
        $lit->setPosition($position);
        $lit->setActive($request->get('active') == "on" ? true : false);
        $lit->setCreated(new \DateTime("now"));
        $lit->setUserCreated($this->getUser());
        $lit->setChambre($chambre);
        $this->em->persist($lit);
        $this->em->flush();

        return new JsonResponse(1);
    }
    #[Route('/details/{lit}', name: 'parametre_lit_details')]
    public function details(Lit $lit): Response
    {
        $html = $this->render("parametre/lit/pages/modifier.html.twig", [
            'lit' => $lit,
        ])->getContent();
       return new JsonResponse($html);
    }
    
    #[Route('/update/{lit}', name: 'parametre_lit_update')]
    public function update(Request $request, Lit $lit): Response
    {
        if ($request->get('position') == "" ) {
            return new JsonResponse('Merci de choisir une chambre et une position !',500);
        }

        $position=$lit->getChambre()->getDesignation()."-".trim($request->get('position'));
        $existLit = $this->em->getRepository(Lit::class)->findOneBy(['chambre'=>$lit->getChambre(),'position'=>$position,'active'=>1]);
        if ($existLit && $position != $lit->getPosition())  return new JsonResponse('Cette Position deja exist dans cette chambre !',500);

        $lit->setPosition($position);
        $lit->setActive($request->get('active') == "on" ? true : false);
        $lit->setUpdated(new \DateTime("now"));
        $lit->setUserUpdated($this->getUser());
        $this->em->flush();

        return new JsonResponse(1);
    }

    #[Route('/delete/{lit}', name: 'parametre_lit_delete')]
    public function delete(Request $request, Lit $lit): Response
    {
        $lit->setActive(false);
        $lit->setUpdated(new \DateTime("now"));
        $lit->setUserUpdated($this->getUser());
        $this->em->flush();
 
        return new JsonResponse(1);
    }
    
}
