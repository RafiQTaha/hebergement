<?php

namespace App\Controller\Parametre;

use App\Controller\ApiController;
use App\Controller\DatatablesController;
use App\Entity\AcDepartement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/parametre/departement')]
class DepartementController extends AbstractController
{
    private $em;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
    }
    #[Route('/', name: 'parametre_departement')]
    public function index(Request $request)
    {
        $operations = ApiController::check($this->getUser(), 'parametre_departement', $this->em, $request);
        if(!$operations) {
            return $this->render("errors/403.html.twig");
        }
        return $this->render('parametre/departement/index.html.twig',[
            'operations' => $operations
        ]);
    }
    #[Route('/list', name: 'parametre_departement_list')]
    public function list(Request $request): Response
    {
        
        $params = $request->query;
        // dd($params);
        $where = $totalRows = $sqlRequest = "";
        $filtre = "where 1 = 1 and active = 1";   
        // dd($params->all('columns')[0]);
            
        $columns = array(
            array( 'db' => 'dep.id','dt' => 0),
            array( 'db' => 'dep.designation','dt' => 1),
            array( 'db' => 'dep.abreviation','dt' => 2),
        );
        $sql = "SELECT " . implode(", ", DatatablesController::Pluck($columns, 'db')) . "
        
        FROM ac_departement dep
        
        $filtre "
        ;
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
            
            foreach (array_values($row) as $key => $value) {
               
                $nestedData[] = $value;
                
            }
            $nestedData["DT_RowId"] = $cd;
            // $nestedData["DT_RowClass"] = $cd;
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
    #[Route('/new', name: 'parametre_departement_new')]
    public function new(Request $request): Response
    {
        // dd($request);
       $departement = new AcDepartement();
       $departement->setDesignation($request->get('designation'));
       $departement->setAbreviation($request->get('abreviation'));
       $departement->setActive($request->get('active') == "on" ? true : false);
       $departement->setCreated(new \DateTime('now'));
       $departement->setUserCreated($this->getUser());
       $this->em->persist($departement);
       $this->em->flush();
       $departement->setCode("DEP".str_pad($departement->getId(), 4, '0', STR_PAD_LEFT));
       $this->em->flush();
       
       return new JsonResponse(1);
    }
    #[Route('/details/{departement}', name: 'parametre_departement_details')]
    public function details(AcDepartement $departement): Response
    {
       return new JsonResponse([
           'designation' => $departement->getDesignation(),
           'abreviation' => $departement->getAbreviation(),
           'active' => $departement->getActive()
       ]);
    }
    #[Route('/update/{departement}', name: 'parametre_departement_update')]
    public function update(Request $request, AcDepartement $departement): Response
    {
        $departement->setDesignation($request->get('designation'));
        $departement->setAbreviation($request->get('abreviation'));
        $departement->setActive($request->get('active') == "on" ? true : false);
        $departement->setUpdated(new \DateTime('now'));
        $departement->setUserUpdated($this->getUser());
        $this->em->flush();
 
        return new JsonResponse(1);
    }

    #[Route('/delete/{departement}', name: 'parametre_departement_delete')]
    public function delete(Request $request, AcDepartement $departement): Response
    {
        $departement->setActive('0');
        $this->em->flush();
 
        return new JsonResponse(1);
    }
}
