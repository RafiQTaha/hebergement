<?php

namespace App\Controller\Etudiant;

use Mpdf\Mpdf;
use App\Entity\PFrais;
use App\Entity\PStatut;
use App\Entity\POrganisme;
use App\Entity\TReglement;
use App\Entity\TInscription;
use App\Entity\TOperationcab;
use App\Entity\TOperationdet;
use App\Entity\AcEtablissement;
use App\Controller\ApiController;
use App\Controller\DatatablesController;
use App\Entity\AcDepartement;
use App\Entity\LitInscription;
use App\Entity\TAdmission;
use App\Entity\Lit;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[Route('/etudiant/hebergement')]
class GestionHebergementController extends AbstractController
{
    private $em;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
    }
    #[Route('/', name: 'gestion_hebergement')]
    public function index(Request $request): Response
    {
        //check if user has access to this page
        $operations = ApiController::check($this->getUser(), 'gestion_hebergement', $this->em, $request);
        if (!$operations) {
            return $this->render("errors/403.html.twig");
        }
        return $this->render('etudiant/gestion_hebergement.html.twig', [
            'etablissements' =>  $this->em->getRepository(AcEtablissement::class)->findBy(['active' => 1]),
            'departements' =>  $this->em->getRepository(AcDepartement::class)->findBy(['active' => 1]),
            'operations' => $operations
        ]);
    }

    #[Route('/list', name: 'gestion_hebergement_list')]
    public function gestionHebergementList(Request $request): Response
    {
        $params = $request->query;
        // dd($params);
        $where = $totalRows = $sqlRequest = "";
        $filtre = "where 1 = 1 and pre.inscription_valide = 1 ";
        // dd($params->all('columns')[0]);

        if (!empty($params->all('columns')[0]['search']['value'])) {
            // dd("in");
            $filtre .= " and etab.id = '" . $params->all('columns')[0]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[1]['search']['value'])) {
            $filtre .= " and form.id = '" . $params->all('columns')[1]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[2]['search']['value'])) {
            $filtre .= " and prom.id = '" . $params->all('columns')[2]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[3]['search']['value'])) {
            $filtre .= " and an.id = '" . $params->all('columns')[3]['search']['value'] . "' ";
        }
        $columns = array(
            array('db' => 'lins.id', 'dt' => 0),
            array('db' => 'ins.code', 'dt' => 1),
            array('db' => 'etu.nom', 'dt' => 2),
            array('db' => 'etu.prenom', 'dt' => 3),
            array('db' => 'etu.cin', 'dt' => 4),
            array('db' => 'st.designation', 'dt' => 5),
            array('db' => 'UPPER(dep.designation)', 'dt' => 6),
            array('db' => 'UPPER(etg.designation)', 'dt' => 7),
            array('db' => 'upper(tc.designation)', 'dt' => 8),
            array('db' => 'upper(stchm.designation)', 'dt' => 9),
            array('db' => 'UPPER(chm.designation)', 'dt' => 10),
            array('db' => 'lit.position', 'dt' => 11),
            array('db' => 'CONCAT("DE ",lins.start," AU ",lins.end)', 'dt' => 12),
            array('db' => 'lins.active', 'dt' => 13),
        );
        $sql = "SELECT " . implode(", ", DatatablesController::Pluck($columns, 'db')) . "
        FROM lit_inscription lins
        inner join tinscription ins on lins.inscription_id = ins.id
        inner join tadmission ad on ad.id = ins.admission_id
        inner join tpreinscription pre on pre.id = ad.preinscription_id
        inner join tetudiant etu on etu.id = pre.etudiant_id
        inner join ac_annee an on an.id = ins.annee_id
        inner join ac_formation form on form.id = an.formation_id              
        inner join ac_etablissement etab on etab.id = form.etablissement_id 
        INNER JOIN pstatut st ON st.id = ins.statut_id
        inner join ac_promotion prom on prom.id = ins.promotion_id
        inner join lit on lit.id = lins.lit_id
        inner join tchambre chm on chm.id = lit.chambre_id
        inner join petages etg on etg.id = chm.etage_id
        inner join ac_departement dep on dep.id = etg.departement_id
        inner join type_chambre tc on tc.id = chm.type_chambre_id
        inner join statut_chambre stchm on stchm.id = chm.statut_chambre_id
        $filtre ";
        // dd($sql);
        $totalRows .= $sql;
        $sqlRequest .= $sql;
        $stmt = $this->em->getConnection()->prepare($sql);
        $newstmt = $stmt->executeQuery();
        $totalRecords = count($newstmt->fetchAll());
        // dd($sql);
        $my_columns = DatatablesController::Pluck($columns, 'db');

        // search 
        $pre = [
            "db" => "pre.code",
            "dt" => 14
        ];
        array_push($columns, $pre);
        $where = DatatablesController::Search($request, $columns);
        if (isset($where) && $where != '') {
            $sqlRequest .= $where;
        }
        $changed_column = $params->all('order')[0]['column'] > 0 ? $params->all('order')[0]['column'] - 1 : 0;
        $sqlRequest .= " ORDER BY " . DatatablesController::Pluck($columns, 'db')[$changed_column] . "   " . $params->all('order')[0]['dir'] . "  LIMIT " . $params->get('start') . " ," . $params->get('length') . " ";
        // $sqlRequest .= DatatablesController::Order($request, $columns);

        $stmt = $this->em->getConnection()->prepare($sqlRequest);
        $resultSet = $stmt->executeQuery();
        $result = $resultSet->fetchAll();


        $data = array();
        // dd($result);
        $i = 1;
        foreach ($result as $key => $row) {
            $nestedData = array();
            $cd = $row['id'];
            $nestedData[] = "<input type ='checkbox' class='check_admissible' id ='$cd' >";
            $nestedData[] = $cd;
            // dd($row);

            foreach (array_values($row) as $key => $value) {
                if ($key > 0) {
                    if ($key == 13) {
                        $value = $value == 1 ? "En Cours" : "Anullé";
                    }
                    $nestedData[] = $value;
                }
            }
            $nestedData["DT_RowId"] = $cd;
            $nestedData["DT_RowClass"] = "";
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
    #[Route('/supprimer', name: 'supprimer_hebergement')]
    public function supprimer_hebergement(Request $request): Response
    {
        $ids = json_decode($request->get('ids_hebergement'));
        if (count($ids) == 0) {
            return new Response('Merci de choisir Au moins une Seance!', 500);
        }
        foreach ($ids as $id) {
            $litInscripiton = $this->em->getRepository(LitInscription::class)->find($id);
            if ($litInscripiton) {
                $litInscripiton->setActive(false);
                $litInscripiton->setUpdated(new DateTime('now'));
                $litInscripiton->setUserUpdated($this->getUser());
            }
        }
        $this->em->flush();
        return new Response('Seances Bien Supprimer', 200);
    }

    #[Route('/modifier', name: 'modifier')]
    public function modifier(Request $request)
    {
        $litInscription = $this->em->getRepository(LitInscription::class)->find($request->get('hebergement_id'));

        if ($litInscription->getActive() == 0) {
            return new JsonResponse('Cette affectation est déja annulée !', 500);
        }
        $oldLit = $this->em->getRepository(Lit::class)->find($litInscription->getLit());
        $nvLit = $this->em->getRepository(Lit::class)->find($request->get('lit'));

        if (!$nvLit) {
            return new JsonResponse('Lit Introuvable !', 500);
        }

        if ($oldLit->getChambre()->getTypeChambre() != $nvLit->getChambre()->getTypeChambre()) {
            return new JsonResponse("Le type de chambre du nouveau lit doit être du même type que l'ancien!", 500);
        }


        $litInscription->setLit($nvLit);
        $litInscription->setUpdated(new DateTime('now'));
        $litInscription->setUserUpdated($this->getUser());
        $this->em->flush();
        return new JsonResponse("Bien Modifié", 200);
    }

    #[Route('/extraction_hebergement', name: 'extraction_hebergement')]
    public function extraction_hebergement()
    {
        // echo('Cration en cours!!');die;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ORD');
        $sheet->setCellValue('B1', 'CODE CONDIDAT');
        $sheet->setCellValue('C1', 'CODE PREINSCRIPTION');
        $sheet->setCellValue('D1', 'CODE ADMISSION');
        $sheet->setCellValue('E1', 'ID INSCRIPTION');
        $sheet->setCellValue('F1', 'CODE INSCRIPTION');
        $sheet->setCellValue('G1', 'STATUT');
        $sheet->setCellValue('H1', 'NOM');
        $sheet->setCellValue('I1', 'PRENOM');
        $sheet->setCellValue('J1', 'SEXE');
        $sheet->setCellValue('K1', 'DATE NAISSANCE');
        $sheet->setCellValue('L1', 'CIN');
        $sheet->setCellValue('M1', 'PASSEPORT');
        $sheet->setCellValue('N1', 'NATIONALITE');
        $sheet->setCellValue('O1', 'TEL CANDIDAT');
        $sheet->setCellValue('P1', 'MAIL CANDIDAT');
        $sheet->setCellValue('Q1', 'ETABLISSEMENT');
        $sheet->setCellValue('R1', 'CODE_ETAB');
        $sheet->setCellValue('S1', 'FORMATION');
        $sheet->setCellValue('T1', 'CODE_FORMATION');
        $sheet->setCellValue('U1', "PROMOTION");
        $sheet->setCellValue('V1', "CODE_PROMO");
        $sheet->setCellValue('W1', 'ANNEE BAC');
        $sheet->setCellValue('X1', 'MOYENNE GENERALE');
        $sheet->setCellValue('Y1', 'MOYENNE NATIONALE');
        $sheet->setCellValue('Z1', 'MOYENNE REGIONALE');
        $sheet->setCellValue('AA1', 'D-INSCRIPTION');
        $sheet->setCellValue('AB1', 'STATUT');
        $sheet->setCellValue('AC1', 'CODE ASSURANCE');
        $sheet->setCellValue('AD1', 'CNE');
        $sheet->setCellValue('AE1', 'EMAIL');
        $sheet->setCellValue('AF1', 'DEPARTEMENT');
        $sheet->setCellValue('AG1', 'ETAGE');
        $sheet->setCellValue('AH1', 'TYPE');
        $sheet->setCellValue('AI1', 'CHAMBRE');
        $sheet->setCellValue('AJ1', 'POSITION');
        $sheet->setCellValue('AK1', 'DATE DEBUT');
        $sheet->setCellValue('AL1', 'DATE FIN');
        $sheet->setCellValue('AM1', 'ETAT');
        $i = 2;
        $j = 1;
        $current_year = date('m') >= 7 ? date('Y') . '/' . date('Y') + 1 : date('Y') - 1 . '/' . date('Y');
        // $current_year = "2023/2024";
        // dd($current_year);
        $listInscriptions = $this->em->getRepository(LitInscription::class)->getLitInscriptionByYear($current_year);
        // dd($listInscriptions);
        foreach ($listInscriptions as $litIns) {
            $sheet->setCellValue('A' . $i, $j);
            $sheet->setCellValue('B' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getCode());
            $sheet->setCellValue('C' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getCode());
            $sheet->setCellValue('D' . $i, $litIns->getInscription()->getAdmission()->getCode());
            $sheet->setCellValue('E' . $i, $litIns->getInscription()->getId());
            $sheet->setCellValue('F' . $i, $litIns->getInscription()->getCode());
            if ($litIns->getInscription()->getAdmission()->getPreinscription()->getNature() != null) {
                $sheet->setCellValue('G' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getNature()->getDesignation());
            }
            $sheet->setCellValue('H' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getNom());
            $sheet->setCellValue('I' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getPrenom());
            $sheet->setCellValue('J' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getSexe());
            $sheet->setCellValue('K' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getDateNaissance());
            $sheet->setCellValue('L' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getCin());
            $sheet->setCellValue('M' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getPasseport());
            $sheet->setCellValue('N' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getNationalite());
            $sheet->setCellValue('O' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getTel1());
            $sheet->setCellValue('P' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getMail1());
            $sheet->setCellValue('Q' . $i, $litIns->getInscription()->getAnnee()->getFormation()->getEtablissement()->getDesignation());

            $sheet->setCellValue('R' . $i, $litIns->getInscription()->getAnnee()->getFormation()->getEtablissement()->getCode());
            $sheet->setCellValue('S' . $i, $litIns->getInscription()->getAnnee()->getFormation()->getDesignation());
            $sheet->setCellValue('T' . $i, $litIns->getInscription()->getAnnee()->getFormation()->getCode());
            $sheet->setCellValue('U' . $i, $litIns->getInscription()->getPromotion()->getDesignation());
            $sheet->setCellValue('V' . $i, $litIns->getInscription()->getPromotion()->getCode());
            $sheet->setCellValue('W' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getAnneeBac());
            $sheet->setCellValue('X' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getMoyenneBac());
            $sheet->setCellValue('Y' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getMoyenNational());
            $sheet->setCellValue('Z' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getMoyenRegional());
            $sheet->setCellValue('AA' . $i, $litIns->getInscription()->getCreated());
            $sheet->setCellValue('AB' . $i, $litIns->getInscription()->getStatut()->GetDesignation());
            $sheet->setCellValue('AC' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getCodeAssurance());
            $sheet->setCellValue('AD' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getCne());
            $sheet->setCellValue('AE' . $i, $litIns->getInscription()->getAdmission()->getPreinscription()->getEtudiant()->getMail1());
            $sheet->setCellValue('AF' . $i, $litIns->getLit()->getChambre()->getEtage()->getDepartement()->getDesignation());
            $sheet->setCellValue('AG' . $i, $litIns->getLit()->getChambre()->getEtage()->getDesignation());
            $sheet->setCellValue('AH' . $i, $litIns->getLit()->getChambre()->getTypeChambre()->getDesignation());
            $sheet->setCellValue('AI' . $i, $litIns->getLit()->getChambre()->getDesignation());
            $sheet->setCellValue('AJ' . $i, $litIns->getLit()->getPosition());
            $sheet->setCellValue('AK' . $i, $litIns->getStart()->format('Y-m-d'));
            $sheet->setCellValue('AL' . $i, $litIns->getEnd()->format('Y-m-d'));
            $sheet->setCellValue('AM' . $i, $litIns->getActive() == 1 ? 'En cours' : 'Annulé');
            $i++;
            $j++;
        }
        $writer = new Xlsx($spreadsheet);
        $current_year = date('m') > 7 ? date('Y') . '-' . date('Y') + 1 : date('Y') - 1 . '-' . date('Y');
        $fileName = "Extraction Inscription $current_year.xlsx";
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }
    // #[Route('/extraction_ins_annee/{annee}', name: 'extraction_ins_annee')]
    // public function extraction_ins_annee($annee)
    // {   
    //     // dd($annee);
    //     // echo('Cration en cours!!');die;
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    //     $sheet->setCellValue('A1', 'ORD');
    //     $sheet->setCellValue('B1', 'CODE CONDIDAT');
    //     $sheet->setCellValue('C1', 'CODE PREINSCRIPTION');
    //     $sheet->setCellValue('D1', 'CODE ADMISSION');
    //     $sheet->setCellValue('E1', 'ID INSCRIPTION');
    //     $sheet->setCellValue('F1', 'CODE INSCRIPTION');
    //     $sheet->setCellValue('G1', 'STATUT');
    //     $sheet->setCellValue('H1', 'NOM');
    //     $sheet->setCellValue('I1', 'PRENOM');
    //     $sheet->setCellValue('J1', 'SEXE');
    //     $sheet->setCellValue('K1', 'DATE NAISSANCE');
    //     $sheet->setCellValue('L1', 'CIN');
    //     $sheet->setCellValue('M1', 'PASSEPORT');
    //     $sheet->setCellValue('N1', 'NATIONALITE');
    //     $sheet->setCellValue('O1', 'TEL CANDIDAT');
    //     $sheet->setCellValue('P1', 'MAIL CANDIDAT');
    //     $sheet->setCellValue('Q1', 'ETABLISSEMENT');
    //     $sheet->setCellValue('R1', 'CODE_ETAB');
    //     $sheet->setCellValue('S1', 'FORMATION');
    //     $sheet->setCellValue('T1', 'CODE_FORMATION');
    //     $sheet->setCellValue('U1', "PROMOTION");
    //     $sheet->setCellValue('V1', "CODE_PROMO");
    //     $sheet->setCellValue('W1', 'TYPE DE BAC');
    //     $sheet->setCellValue('X1', 'ANNEE BAC');
    //     $sheet->setCellValue('Y1', 'FILIERE');
    //     $sheet->setCellValue('Z1', 'MOYENNE GENERALE');
    //     $sheet->setCellValue('AA1', 'MOYENNE NATIONALE');
    //     $sheet->setCellValue('AB1', 'MOYENNE REGIONALE');
    //     $sheet->setCellValue('AC1', 'D-INSCRIPTION');
    //     $sheet->setCellValue('AD1', 'STATUT');
    //     $sheet->setCellValue('AE1', 'CODE ASSURANCE');
    //     $sheet->setCellValue('AF1', 'CNE');
    //     $i=2;
    //     $j=1;
    //     // $current_year = date('m') > 7 ? date('Y').'/'.date('Y')+1 : date('Y') - 1 .'/' .date('Y');
    //     $current_year = $annee.'/'.$annee+1;
    //     // dd($current_year);
    //     // $current_year = "2022/2023";
    //     $inscriptions = $this->em->getRepository(TInscription::class)->getActiveInscriptionByCurrentAnnee($current_year);
    //     // dd($inscriptions);
    //     foreach ($inscriptions as $inscription) {
    //         $sheet->setCellValue('A'.$i, $j);
    //         $sheet->setCellValue('B'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCode());
    //         $sheet->setCellValue('C'.$i, $inscription->getAdmission()->getPreinscription()->getCode());
    //         $sheet->setCellValue('D'.$i, $inscription->getAdmission()->getCode());
    //         $sheet->setCellValue('E'.$i, $inscription->getId());
    //         $sheet->setCellValue('F'.$i, $inscription->getCode());
    //         if ($inscription->getAdmission()->getPreinscription()->getNature() != null) {
    //             $sheet->setCellValue('G'.$i, $inscription->getAdmission()->getPreinscription()->getNature()->getDesignation());
    //         }
    //         $sheet->setCellValue('H'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getNom());
    //         $sheet->setCellValue('I'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getPrenom());
    //         $sheet->setCellValue('J'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getSexe());
    //         $sheet->setCellValue('K'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getDateNaissance());
    //         $sheet->setCellValue('L'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCin());
    //         $sheet->setCellValue('M'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getPasseport());
    //         $sheet->setCellValue('N'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getNationalite());
    //         $sheet->setCellValue('O'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getTel1());
    //         $sheet->setCellValue('P'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMail1());
    //         $sheet->setCellValue('Q'.$i, $inscription->getAnnee()->getFormation()->getEtablissement()->getDesignation());

    //         $sheet->setCellValue('R'.$i, $inscription->getAnnee()->getFormation()->getEtablissement()->getCode());
    //         $sheet->setCellValue('S'.$i, $inscription->getAnnee()->getFormation()->getDesignation());
    //         $sheet->setCellValue('T'.$i, $inscription->getAnnee()->getFormation()->getCode());
    //         $sheet->setCellValue('U'.$i, $inscription->getPromotion()->getDesignation());
    //         $sheet->setCellValue('V'.$i, $inscription->getPromotion()->getCode());
    //         $sheet->setCellValue('W'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getTypeBac() == Null ? "" : $inscription->getAdmission()->getPreinscription()->getEtudiant()->getTypeBac()->getDesignation());
    //         $sheet->setCellValue('X'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getAnneeBac());
    //         $filiere = $inscription->getAdmission()->getPreinscription()->getEtudiant()->getFiliere();
    //         $sheet->setCellValue('Y'.$i, $filiere != null ? $filiere->getDesignation() : "");
    //         $sheet->setCellValue('Z'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenneBac());
    //         $sheet->setCellValue('AA'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenNational());
    //         $sheet->setCellValue('AB'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenRegional());
    //         $sheet->setCellValue('AC'.$i, $inscription->getCreated());
    //         $sheet->setCellValue('AD'.$i, $inscription->getStatut()->GetDesignation());
    //         $sheet->setCellValue('AE'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCodeAssurance());
    //         $sheet->setCellValue('AF'.$i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCne());
    //         $i++;
    //         $j++;
    //     }
    //     $writer = new Xlsx($spreadsheet);
    //     $year = $annee.'-'.$annee+1;
    //     $fileName = "Extraction Inscription $year.xlsx";
    //     $temp_file = tempnam(sys_get_temp_dir(), $fileName);
    //     $writer->save($temp_file);
    //     return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    // }

}
