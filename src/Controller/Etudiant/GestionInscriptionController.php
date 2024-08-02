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

#[Route('/etudiant/inscription')]
class GestionInscriptionController extends AbstractController
{
    private $em;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
    }
    #[Route('/', name: 'gestion_inscription')]
    public function index(Request $request): Response
    {
        //check if user has access to this page
        $operations = ApiController::check($this->getUser(), 'gestion_inscription', $this->em, $request);
        if (!$operations) {
            return $this->render("errors/403.html.twig");
        }
        return $this->render('etudiant/gestion_inscription.html.twig', [
            'etablissements' =>  $this->em->getRepository(AcEtablissement::class)->findBy(['active' => 1]),
            'departements' =>  $this->em->getRepository(AcDepartement::class)->findBy(['active' => 1]),
            'operations' => $operations
        ]);
    }

    #[Route('/list', name: 'gestion_inscription_list')]
    public function gestionInscriptionList(Request $request): Response
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
            array('db' => 'ins.id', 'dt' => 0),
            array('db' => 'ins.code', 'dt' => 1),
            array('db' => 'etu.nom', 'dt' => 2),
            array('db' => 'etu.prenom', 'dt' => 3),
            array('db' => 'etu.cne', 'dt' => 4),
            array('db' => 'etu.cin', 'dt' => 5),
            array('db' => 'etab.abreviation', 'dt' => 6),
            array('db' => 'UPPER(form.abreviation)', 'dt' => 7),
            array('db' => 'UPPER(prom.designation)', 'dt' => 8),
            array('db' => 'LOWER(an.designation)', 'dt' => 9),
            array('db' => 'st.designation', 'dt' => 10),
        );
        $sql = "SELECT " . implode(", ", DatatablesController::Pluck($columns, 'db')) . "
        FROM tinscription ins
        inner join tadmission ad on ad.id = ins.admission_id
        inner join tpreinscription pre on pre.id = ad.preinscription_id
        inner join tetudiant etu on etu.id = pre.etudiant_id
        inner join ac_annee an on an.id = ins.annee_id
        inner join ac_formation form on form.id = an.formation_id              
        inner join ac_etablissement etab on etab.id = form.etablissement_id 
        INNER JOIN pstatut st ON st.id = ins.statut_id
        inner join ac_promotion prom on prom.id = ins.promotion_id
        $filtre and etu.sexe is not null";
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
            "dt" => 11
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
            // $nestedData[] = "<input type ='checkbox' class='check_admissible' id ='$cd' >";
            $nestedData[] = $cd;
            // dd($row);

            foreach (array_values($row) as $key => $value) {
                if ($key > 0) {
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
    #[Route('/getstatut/{inscription}', name: 'gestion_statut')]
    public function inscriptionStatut(TInscription $inscription): Response
    {
        $status = $this->em->getRepository(PStatut::class)->findBy(['table0' => 'Inscription']);
        $statutsHtml = ApiController::dropDownSelected($status, "statut", $inscription->getStatut());

        return new JsonResponse($statutsHtml);
    }

    #[Route('/getEtudiantInfos/{inscription}', name: 'getEtudiantInfos')]
    public function getEtudiantInfos(Request $request, TInscription $inscription)
    {
        $sexe = $inscription->getAdmission()->getPreinscription()->getEtudiant()->getSexe();
        if ($sexe == "homme") {
            $departement = $this->em->getRepository(AcDepartement::class)->find(2);
        } elseif ($sexe == "femme") {
            $departement = $this->em->getRepository(AcDepartement::class)->find(1);
        }
        $affectation_infos = $this->render("etudiant/pages/affectation_infos.html.twig", [
            'departement' =>  $departement,
        ])->getContent();

        return new JsonResponse($affectation_infos);
    }

    #[Route('/affectation', name: 'affectation')]
    public function affectation(Request $request)
    {

        $dateDebut = new DateTime($request->get('date_debut'));
        $dateFin = new DateTime($request->get('date_fin'));

        $inscription = $this->em->getRepository(TInscription::class)->find($request->get('inscription_id'));
        if ($inscription->getStatut()->getId() != 13) {
            return new JsonResponse("Cet Etudiant n'est plus inscrit sur systeme !", 500);
        }
        $exist = $this->em->getRepository(LitInscription::class)->FindAffectationByPeriode($inscription, $dateDebut, $dateFin);
        if ($exist) {
            return new JsonResponse("Cet étudiant a déjà une réservation pour cette période !", 500);
        }
        // dd($exist);
        $lit = $this->em->getRepository(Lit::class)->find($request->get('lit'));
        if (!$inscription || !$lit) {
            return new JsonResponse('inscription ou Lit Introuvable !', 500);
        }
        if ($request->get('date_debut') == "" or $request->get('date_fin') == "") {
            return new JsonResponse('Merci de remplir tout les champs!!', 500);
        }
        $dateDebut = new DateTime($request->get('date_debut'));
        $dateFin = new DateTime($request->get('date_fin'));
        if ($dateDebut >= $dateFin) {
            return new JsonResponse('La date Fin doit etre superieur au Date Debut!!', 500);
        }



        $litInscription = new LitInscription();
        $litInscription->setLit($lit);
        $litInscription->setInscription($inscription);
        $litInscription->setStart($dateDebut);
        $litInscription->setEnd($dateFin);
        $litInscription->setActive(1);
        $litInscription->setCreated(new DateTime('now'));
        $litInscription->setUserCreated($this->getUser());
        $this->em->persist($litInscription);
        $this->em->flush();

        $isBoursier = 0;
        if ($inscription->getAdmission()->getPreinscription()->getNature() and $inscription->getAdmission()->getPreinscription()->getNature()->getId() != 1) {
            $isBoursier = 1;
        }
        $k = $isBoursier == 0 ? 1 : 2;
        $operationCab = new TOperationcab();
        $operationCab->setPreinscription($inscription->getAdmission()->getPreinscription());
        $operationCab->setUserCreated($this->getUser());
        $operationCab->setAnnee($inscription->getAnnee());
        $operationCab->setLitInscription($litInscription);
        $operationCab->setActive(1);
        $operationCab->setDateContable(date('Y'));
        $categorie = $k == 1 ? 'caution' : 'caution organisme';
        $organisme = $k == 1 ? 'Payant' : 'Organisme';
        $operationCab->setCategorie($categorie);
        $operationCab->setOrganisme($organisme);
        $operationCab->setCreated(new \DateTime("now"));
        $this->em->persist($operationCab);
        $this->em->flush();
        $operationCab->setCode(
            "HEB-FAC" . str_pad($operationCab->getId(), 8, '0', STR_PAD_LEFT) . "/" . date('Y')
        );
        $this->em->flush();
        for ($i = 1; $i <= $k; $i++) {
            $operationCab = new TOperationcab();
            $operationCab->setPreinscription($inscription->getAdmission()->getPreinscription());
            $operationCab->setUserCreated($this->getUser());
            $operationCab->setAnnee($inscription->getAnnee());
            $operationCab->setLitInscription($litInscription);
            $operationCab->setActive(1);
            $operationCab->setDateContable(date('Y'));
            $categorie = $i == 1 ? 'inscription' : 'inscription organisme';
            $organisme = $i == 1 ? 'Payant' : 'Organisme';
            $operationCab->setCategorie($categorie);
            $operationCab->setOrganisme($organisme);
            $operationCab->setCreated(new \DateTime("now"));
            $this->em->persist($operationCab);
            $this->em->flush();
            $operationCab->setCode(
                "HEB-FAC" . str_pad($operationCab->getId(), 8, '0', STR_PAD_LEFT) . "/" . date('Y')
            );
            $this->em->flush();
        }
        return new JsonResponse("Bien Enregistre", 200);
    }



    #[Route('/extraction_ins', name: 'extraction_ins')]
    public function extraction_ins()
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
        $i = 2;
        $j = 1;
        $current_year = date('m') >= 7 ? date('Y') . '/' . date('Y') + 1 : date('Y') - 1 . '/' . date('Y');
        $inscriptions = $this->em->getRepository(TInscription::class)->getActiveInscriptionByCurrentAnnee($current_year);
        // dd($inscriptions);
        foreach ($inscriptions as $inscription) {
            $sheet->setCellValue('A' . $i, $j);
            $sheet->setCellValue('B' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCode());
            $sheet->setCellValue('C' . $i, $inscription->getAdmission()->getPreinscription()->getCode());
            $sheet->setCellValue('D' . $i, $inscription->getAdmission()->getCode());
            $sheet->setCellValue('E' . $i, $inscription->getId());
            $sheet->setCellValue('F' . $i, $inscription->getCode());
            if ($inscription->getAdmission()->getPreinscription()->getNature() != null) {
                $sheet->setCellValue('G' . $i, $inscription->getAdmission()->getPreinscription()->getNature()->getDesignation());
            }
            $sheet->setCellValue('H' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getNom());
            $sheet->setCellValue('I' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getPrenom());
            $sheet->setCellValue('J' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getSexe());
            $sheet->setCellValue('K' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getDateNaissance());
            $sheet->setCellValue('L' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCin());
            $sheet->setCellValue('M' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getPasseport());
            $sheet->setCellValue('N' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getNationalite());
            $sheet->setCellValue('O' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getTel1());
            $sheet->setCellValue('P' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMail1());
            $sheet->setCellValue('Q' . $i, $inscription->getAnnee()->getFormation()->getEtablissement()->getDesignation());

            $sheet->setCellValue('R' . $i, $inscription->getAnnee()->getFormation()->getEtablissement()->getCode());
            $sheet->setCellValue('S' . $i, $inscription->getAnnee()->getFormation()->getDesignation());
            $sheet->setCellValue('T' . $i, $inscription->getAnnee()->getFormation()->getCode());
            $sheet->setCellValue('U' . $i, $inscription->getPromotion()->getDesignation());
            $sheet->setCellValue('V' . $i, $inscription->getPromotion()->getCode());
            $sheet->setCellValue('W' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getAnneeBac());
            $sheet->setCellValue('X' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenneBac());
            $sheet->setCellValue('Y' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenNational());
            $sheet->setCellValue('Z' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenRegional());
            $sheet->setCellValue('AA' . $i, $inscription->getCreated());
            $sheet->setCellValue('AB' . $i, $inscription->getStatut()->GetDesignation());
            $sheet->setCellValue('AC' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCodeAssurance());
            $sheet->setCellValue('AD' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCne());
            $sheet->setCellValue('AE' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMail1());
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
    #[Route('/extraction_ins_annee/{annee}', name: 'extraction_ins_annee')]
    public function extraction_ins_annee($annee)
    {
        // dd($annee);
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
        $sheet->setCellValue('X1', 'FILIERE');
        $sheet->setCellValue('Y1', 'MOYENNE GENERALE');
        $sheet->setCellValue('Z1', 'MOYENNE NATIONALE');
        $sheet->setCellValue('AA1', 'MOYENNE REGIONALE');
        $sheet->setCellValue('AB1', 'D-INSCRIPTION');
        $sheet->setCellValue('AC1', 'STATUT');
        $sheet->setCellValue('AD1', 'CODE ASSURANCE');
        $sheet->setCellValue('AE1', 'CNE');
        $i = 2;
        $j = 1;
        // $current_year = date('m') > 7 ? date('Y').'/'.date('Y')+1 : date('Y') - 1 .'/' .date('Y');
        $current_year = $annee . '/' . $annee + 1;
        // dd($current_year);
        // $current_year = "2022/2023";
        $inscriptions = $this->em->getRepository(TInscription::class)->getActiveInscriptionByCurrentAnnee($current_year);
        // dd($inscriptions);
        foreach ($inscriptions as $inscription) {
            $sheet->setCellValue('A' . $i, $j);
            $sheet->setCellValue('B' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCode());
            $sheet->setCellValue('C' . $i, $inscription->getAdmission()->getPreinscription()->getCode());
            $sheet->setCellValue('D' . $i, $inscription->getAdmission()->getCode());
            $sheet->setCellValue('E' . $i, $inscription->getId());
            $sheet->setCellValue('F' . $i, $inscription->getCode());
            if ($inscription->getAdmission()->getPreinscription()->getNature() != null) {
                $sheet->setCellValue('G' . $i, $inscription->getAdmission()->getPreinscription()->getNature()->getDesignation());
            }
            $sheet->setCellValue('H' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getNom());
            $sheet->setCellValue('I' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getPrenom());
            $sheet->setCellValue('J' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getSexe());
            $sheet->setCellValue('K' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getDateNaissance());
            $sheet->setCellValue('L' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCin());
            $sheet->setCellValue('M' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getPasseport());
            $sheet->setCellValue('N' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getNationalite());
            $sheet->setCellValue('O' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getTel1());
            $sheet->setCellValue('P' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMail1());
            $sheet->setCellValue('Q' . $i, $inscription->getAnnee()->getFormation()->getEtablissement()->getDesignation());

            $sheet->setCellValue('R' . $i, $inscription->getAnnee()->getFormation()->getEtablissement()->getCode());
            $sheet->setCellValue('S' . $i, $inscription->getAnnee()->getFormation()->getDesignation());
            $sheet->setCellValue('T' . $i, $inscription->getAnnee()->getFormation()->getCode());
            $sheet->setCellValue('U' . $i, $inscription->getPromotion()->getDesignation());
            $sheet->setCellValue('V' . $i, $inscription->getPromotion()->getCode());
            $sheet->setCellValue('W' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getAnneeBac());
            $filiere = $inscription->getAdmission()->getPreinscription()->getEtudiant()->getFiliere();
            $sheet->setCellValue('X' . $i, $filiere != null ? $filiere->getDesignation() : "");
            $sheet->setCellValue('Y' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenneBac());
            $sheet->setCellValue('Z' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenNational());
            $sheet->setCellValue('AA' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getMoyenRegional());
            $sheet->setCellValue('AB' . $i, $inscription->getCreated());
            $sheet->setCellValue('AC' . $i, $inscription->getStatut()->GetDesignation());
            $sheet->setCellValue('AD' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCodeAssurance());
            $sheet->setCellValue('AE' . $i, $inscription->getAdmission()->getPreinscription()->getEtudiant()->getCne());
            $i++;
            $j++;
        }
        $writer = new Xlsx($spreadsheet);
        $year = $annee . '-' . $annee + 1;
        $fileName = "Extraction Inscription $year.xlsx";
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
