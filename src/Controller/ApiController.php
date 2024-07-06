<?php

namespace App\Controller;

use DateTime;
use App\Entity\PFrais;
use App\Entity\AcAnnee;
use App\Entity\AcDepartement;
use App\Entity\PGroupe;
use App\Entity\XBanque;
use App\Entity\AcModule;
use App\Entity\Mouchard;
use App\Entity\Sanction;
use App\Entity\UsModule;
use App\Entity\AcElement;
use App\Entity\Agression;
use App\Entity\AcSemestre;
use App\Entity\POrganisme;
use App\Entity\TAdmission;
use App\Entity\AcFormation;
use App\Entity\AcPromotion;
use App\Entity\UsOperation;
use App\Entity\TInscription;
use App\Entity\UsSousModule;
use App\Entity\NatureDemande;
use App\Entity\SousAgression;
use App\Entity\TOperationcab;
use App\Entity\PNatureEpreuve;
use App\Entity\AcEtablissement;
use App\Entity\PAnonymatActuel;
use App\Entity\PEtages;
use App\Entity\PrProgrammation;
use App\Entity\XModalites;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api')]
class ApiController extends AbstractController
{
    private $em;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
        // $this->emUniv = $doctrine->getManager("univ");
        // $em = $this->getDoctrine()->getManager();
    }
    #[Route('/etablissement', name: 'getetablissement')]
    public function getetbalissement(): Response
    {
        $etbalissements = $this->em->getRepository(AcEtablissement::class)->findBy(['active'=>1]);
        $data = self::dropdown($etbalissements,'Etablissement');
        return new JsonResponse($data);
    }
    #[Route('/formation/{id}', name: 'getformation')]
    public function getformation($id): Response
    {
        $formations = $this->em->getRepository(AcFormation::class)->findBy(['etablissement'=>$id, 'active' => 1],['id'=>'ASC']);
        $data = self::dropdown($formations,'Formation');
        return new JsonResponse($data);
    }

    
    #[Route('/promotion/{formation}', name: 'getPromotion')]
    public function getPromotion(AcFormation $formation): Response
    {   
        $promotions = $this->em->getRepository(AcPromotion::class)->findBy(['formation'=>$formation, 'active' => 1],['id'=>'ASC']);
        $data = self::dropdown($promotions,'promotion');
        return new JsonResponse($data);
    }
    #[Route('/annee/{id}', name: 'getAnnee')]
    public function getAnnee($id): Response
    {   
        $annee = $this->em->getRepository(AcAnnee::class)->findBy(['formation'=>$id, 'active' => 1],['designation'=>'DESC']);
        $data = self::dropdown($annee,'Annee');
        return new JsonResponse($data);
    }
    
    #[Route('/semestre/{id}', name: 'getSemestre')]
    public function getSemestre($id): Response
    {   
        $semestre = $this->em->getRepository(AcSemestre::class)->findBy(['promotion'=>$id, 'active' => 1],['designation'=>'ASC']);
        $data = self::dropdown($semestre,'Semestre');
        return new JsonResponse($data);
    }
    #[Route('/etage/{departement}', name: 'getPromotion')]
    public function getEtage(AcDepartement $departement): Response
    {   
        $etages = $this->em->getRepository(PEtages::class)->findBy(['departement'=>$departement, 'active' => 1],['id'=>'ASC']);
        $data = self::dropdown($etages,'etage');
        return new JsonResponse($data);
    }
    
    #[Route('/nature_demande', name: 'nature_demande')]
    public function getnature_demande(): Response
    {
        $nature = $this->em->getRepository(NatureDemande::class)->findBy(['active' => 1]);
        $data = self::dropdown($nature,'Nature De Demande');
        return new JsonResponse($data);
    }
    
    #[Route('/formationAndanneeOuverte/{formation}', name: 'formationAndanneeOuverte')]
    public function formationAndanneeOuverte(AcFormation $formation): Response
    {   
        $annee = $this->em->getRepository(AcAnnee::class)->getActiveAnneeByFormation($formation);
        $data = [   'formation' => $formation->getDesignation(),
                    'annee' => $annee->getDesignation()];
        return new JsonResponse($data);
    }
    
    #[Route('/anneeresidanat/{id}', name: 'anneeResidanat')]
    public function anneeResidanat(AcFormation $formation): Response
    {   
        // if((strpos($formation->getDesignation(), 'Résidanat') === false) && $formation->getEtablissement()->getId() != 25){
        if((strpos($formation->getDesignation(), 'Résidanat') === false) && $formation->getEtablissement()->getId() != 25){
            return new JsonResponse(1);
        }else{
            $annee = $this->em->getRepository(AcAnnee::class)->findBy(['formation'=>$formation],['id'=>'DESC'],3);
            $data = self::dropdown($annee,'Annee');
            return new JsonResponse($data);
        }
        
    }

    #[Route('/organisme', name: 'getorganisme')]
    public function getOrganisme(): Response
    {   
        $organisme = $this->em->getRepository(POrganisme::class)->findBy(['active'=>1]);
        $data = self::dropdown($organisme,'organisme');
        return new JsonResponse($data);        
    }
    
    #[Route('/getorganismepasPayant', name: 'getorganismepasPayant')]
    public function getOrganismepasPayant(): Response
    {  
        //  dd('test');
        $organisme = $this->em->getRepository(POrganisme::class)->getorganismepasPayant();
        // dd($organisme);
        $data = self::dropdown($organisme,'organisme');
        return new JsonResponse($data);        
    }
    
    #[Route('/nature_etudiant/{admission}', name: 'getnatureetudiant')]
    public function getNatureEtudiant(TAdmission $admission): Response
    {   
        $nature = $admission->getPreinscription()->getEtudiant()->getNatureDemande()->getDesignation();
        // dd($nature);
        if ($nature !== 'Payant') {
            $organisme = $this->em->getRepository(POrganisme::class)->findAll();
        }else {
            $organisme = [];
        }
        $data = self::dropdown($organisme,'organisme');
        return new JsonResponse($data);        
    }
    
    #[Route('/frais/{admission}', name: 'getFraisByFormation')]
    public function getFraisByFormation(TAdmission $admission): Response
    {   
        $formation = $admission->getPreinscription()->getAnnee()->getFormation();
        $operationcab = $this->em->getRepository(TOperationcab::class)->findOneBy(['preinscription'=>$admission->getPreinscription(),'categorie'=>'admission']);
        $frais = $this->em->getRepository(PFrais::class)->findBy(["formation" => $formation, 'categorie' => "admission",'active'=>1]);
        $data = self::dropdownData($frais,'frais');
                
        return new JsonResponse(['list' => $data, 'codefacture' => $operationcab->getCode()]);        
    }
  
    #[Route('/banque', name: 'getbanque')]
    public function getbanque(): Response
    {
        $banques = $this->em->getRepository(XBanque::class)->findAll();
        $data = self::dropdown($banques,'Banque');
        return new JsonResponse($data);
    }
  
    #[Route('/paiement', name: 'getpaiement')]
    public function getpaiement(): Response
    {
        $paiements = $this->em->getRepository(XModalites::class)->findAll();
        $data = self::dropdown($paiements,'Type De Paiement');
        return new JsonResponse($data);
    }

    static function dropdown($objects,$choix)
    {
        $data = "<option selected enabled value=''>Choix ".$choix."</option>";
        foreach ($objects as $object) {
            $data .="<option value=".$object->getId().">".$object->getDesignation()."</option>";
         }
         return $data;
    }
    static function dropdownData($objects,$choix)
    {
        $data = "<option selected enabled value=''>Choix ".$choix."</option>";
        foreach ($objects as $object) {
            $data .="<option value=".$object->getId()." data-frais=".$object->getMontant().">".$object->getDesignation()."</option>";
         }
         return $data;
    }
    static function dropDownSelected($objects,$choix, $value)
    {
        $data = "<option selected enabled value=''>Choix ".$choix."</option>";
        foreach ($objects as $object) {
            if($object->getId() === $value->getId()) {
                $data .="<option value=".$object->getId()." selected>".$object->getDesignation()."</option>";
            } else {
                $data .="<option value=".$object->getId()." >".$object->getDesignation()."</option>";
            }
         }
         return $data;
    }

    static function check($user, $link, $em, $request) {
        if(!$request->getSession()->get("modules")){
            if(in_array('ROLE_ADMIN', $user->getRoles())){
                $sousModules = $em->getRepository(UsSousModule::class)->findBy([],['ordre'=>'ASC']);
            } else {
                $sousModules = $em->getRepository(UsSousModule::class)->findByUserOperations($user);
            }
            $modules = $em->getRepository(UsModule::class)->getModuleBySousModule($sousModules);
            $data = [];
            foreach($modules as $module) {
                $sousModuleArray = [];
                foreach ($sousModules as $sousModule) {
                    if($sousModule->getModule()->getId() == $module->getId()) {
                        array_push($sousModuleArray,$sousModule);
                    }
                }
                array_push($data, [
                    'module' => $module,
                    'sousModule' => $sousModuleArray
                ]);
            }
            // dd($data);
            $request->getSession()->set('modules', $data);
            
        }
        if(in_array('ROLE_ADMIN', $user->getRoles())) {
            $operations = $em->getRepository(UsOperation::class)->findAllBySousModule($link);
            return $operations;
        }
        $operations = $em->getRepository(UsOperation::class)->getOperationByLinkSousModule($user, $link);
        return $operations;
    }
    
    static function mouchard($user,$em,$object,$table,$action)
    {
        $entity = "App\Entity\\".$table;
        $array = (array) $object;
        foreach ($array as $key => $value) {
            if (!is_object($value)) {
                $nkey = str_replace($entity, '', $key) ;
                $nkey = preg_replace('/[\x00-\x1F\x7F]/u', '', $nkey);
                $array[$nkey] = $array[$key];
            }
            unset($array[$key]);
        }
        $mouchard = new Mouchard();
        $mouchard->setCreated(new \DateTime('now'));
        $mouchard->setUserCreated($user);
        $mouchard->setObservation($array);
        $mouchard->setFromTable($table);
        $mouchard->setAction($action);
        $em->persist($mouchard);
        $em->flush();
    }

    
}
