<?php

namespace App\Controller\Facture;

use DateTime;
use Mpdf\Mpdf;
use App\Entity\PFrais;
use App\Entity\AcAnnee;
use App\Entity\PStatut;
use App\Entity\XBanque;
use App\Entity\POrganisme;
use App\Entity\TAdmission;
use App\Entity\TReglement;
use App\Entity\XModalites;
use App\Entity\AcFormation;
use App\Entity\AcPromotion;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as reader;
use App\Entity\TInscription;
use App\Entity\TOperationcab;
use App\Entity\TOperationdet;
use App\Entity\AcEtablissement;
use App\Entity\TPreinscription;
use App\Controller\ApiController;
use App\Controller\DatatablesController;
// use App\Entity\Grille;
use App\Entity\Pec;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/facture/factures')]
class GestionFactureController extends AbstractController
{
    private $em;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
    }
    #[Route('/', name: 'gestion_facture')]
    public function index(Request $request): Response
    {

        $operations = ApiController::check($this->getUser(), 'gestion_facture', $this->em, $request);
        if (!$operations) {
            return $this->render("errors/403.html.twig");
        }
        $etablissements = $this->em->getRepository(AcEtablissement::class)->findBy(['active' => 1]);
        $organismes = $this->em->getRepository(POrganisme::class)->findBy(['active' => 1]);
        $banques = $this->em->getRepository(XBanque::class)->findAll();
        $paiements = $this->em->getRepository(XModalites::class)->findBy(['active' => 1]);
        $reglements = $this->em->getRepository(TReglement::class)->findAll();
        $annees = $this->em->getRepository(AcAnnee::class)->findBy([], ['designation' => 'DESC'], ['designation']);
        $pecs = $this->em->getRepository(Pec::class)->findBy(['active' => 1], ['designation' => 'ASC']);

        return $this->render('facture/gestion_facture.html.twig', [
            'etablissements' => $etablissements,
            'reglements' => $reglements,
            'operations' => $operations,
            'banques' => $banques,
            'paiements' => $paiements,
            'organismes' => $organismes,
            'annees' => $annees,
            'pecs' => $pecs,
        ]);
    }

    #[Route('/list', name: 'list_facture_factures')]
    public function list_facture_factures(Request $request): Response
    {

        $params = $request->query;
        $where = $totalRows = $sqlRequest = "";
        // $filtre = " where preins.active = 1 and preins.inscriptionValide = 1 ";
        $filtre = " where opcab.annuler = 0 ";
        // $filtre = " where 1=1 ";

        if (!empty($params->all('columns')[0]['search']['value'])) {
            $filtre .= " and etab.id = '" . $params->all('columns')[0]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[1]['search']['value'])) {
            $filtre .= " and frma.id = '" . $params->all('columns')[1]['search']['value'] . "' ";
        }
        if (!empty($params->all('columns')[2]['search']['value'])) {
            switch ($params->all('columns')[2]['search']['value']) {
                case 'SD':
                    $filtre .= " and opdet.montant_facture = reg.montant_regle ";
                    break;
                case 'SE':
                    $filtre .= " and opdet.montant_facture < reg.montant_regle ";
                    break;

                default:
                    $filtre .= " and opdet.montant_facture > reg.montant_regle ";
                    break;
            }
            // if ($params->all('columns')[2]['search']['value'] == 'SD'){
            //     $filtre .= " and opdet.montant_facture = reg.montant_regle ";
            // }
            // else if($params->all('columns')[2]['search']['value'] == 'SE'){
            //     $filtre .= " and opdet.montant_facture < reg.montant_regle ";
            // }
            // else {
            //     $filtre .= " and opdet.montant_facture > reg.montant_regle ";
            // }
        }
        if (!empty($params->all('columns')[3]['search']['value'])) {
            $filtre .= " and org.id = '" . $params->all('columns')[3]['search']['value'] . "' ";
        }

        $columns = array(
            array('db' => 'opcab.id', 'dt' => 0),
            array('db' => 'opcab.code', 'dt' => 1),
            array('db' => 'Upper(pre.code)', 'dt' => 2),
            array('db' => 'etu.nom', 'dt' => 3),
            array('db' => 'etu.prenom', 'dt' => 4),
            array('db' => 'etu.cin', 'dt' => 5),
            array('db' => 'etab.abreviation', 'dt' => 6),
            array('db' => 'Upper(stat.designation)', 'dt' => 7),
            array('db' => 'upper(etu.nationalite)', 'dt' => 8),
            array('db' => 'opcab.categorie', 'dt' => 9),
            array('db' => 'opcab.active', 'dt' => 10),
        );
        $sql = "SELECT DISTINCT " . implode(", ", DatatablesController::Pluck($columns, 'db')) . "
        FROM `toperationcab` opcab
        INNER JOIN ac_annee an on an.id = opcab.annee_id
        INNER JOIN tpreinscription pre on pre.id = opcab.preinscription_id
        LEFT JOIN tadmission adm on pre.id = adm.preinscription_id
        LEFT JOIN tinscription ins on adm.id = ins.admission_id
        LEFT JOIN pstatut stat on stat.id = ins.statut_id
        INNER JOIN tetudiant etu on etu.id = pre.etudiant_id
        INNER JOIN ac_formation frma on frma.id = an.formation_id
        INNER JOIN ac_etablissement etab on etab.id = frma.etablissement_id
        $filtre ";
        // dd($sql);
        $totalRows .= $sql;
        $sqlRequest .= $sql;
        // $stmt = $this->em->getConnection()->prepare($sql);
        // $newstmt = $stmt->executeQuery();
        // $totalRecords = count($newstmt->fetchAll());

        $my_columns = DatatablesController::Pluck($columns, 'db');
        // unset($columns[12]);
        $where = DatatablesController::Search($request, $columns);
        if (isset($where) && $where != '') {
            $sqlRequest .= $where;
        }

        // dd($my_columns,$columns);
        // $columns[12]['db'] = 'diff';
        $sqlRequest .= DatatablesController::Order($request, $columns);
        // dd($sqlRequest);

        $stmt = $this->em->getConnection()->prepare($sqlRequest);
        $resultSet = $stmt->executeQuery();
        $result = $resultSet->fetchAll();
        $data = array();

        $i = 1;
        foreach ($result as $key => $row) {
            $nestedData = array();
            $cd = $row['id'];
            $nestedData[] = $i;
            $etat_bg = "";
            foreach (array_values($row) as $key => $value) {
                if ($key > 0) {
                    if ($key == 10) {
                        $operationTotal = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFacture($cd)['total'];
                        $nestedData[] = $operationTotal;
                        $reglementTotal = $this->em->getRepository(TReglement::class)->getSumMontantByCodeFacture($cd)['total'];
                        $nestedData[] = $reglementTotal;
                        $nestedData[] = $operationTotal - $reglementTotal;
                        $orgpyt = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $cd, 'active' => 1, 'organisme' => 103]);
                        if ($orgpyt) {
                            $org = 'O/P';
                        } else {
                            $operationCab = $this->em->getRepository(TOperationcab::class)->find($cd);
                            if ($operationCab->getOrganisme() ==  'Payant') {
                                $org = 'PYT';
                            } elseif ($operationCab->getOrganisme() ==  'Organisme') {
                                $org = 'ORG';
                            } else {
                                $pyt = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $cd, 'active' => 1, 'organisme' => 7]);
                                $org = $this->em->getRepository(TOperationdet::class)->FindDetNotPayant($cd);
                                if ($pyt && $org) {
                                    $org = 'O/P';
                                } elseif (!$pyt && $org) {
                                    $org = 'ORG';
                                } elseif ($pyt && !$org) {
                                    $org = 'PYT';
                                } else {
                                    $org = '-';
                                }
                            }
                        }
                        $nestedData[] = $org;
                        $value = $value == 0 ? 'Cloture' : 'Ouverte';
                    }
                    $nestedData[] = $value;
                }
            }
            $nestedData["DT_RowId"] = $cd;
            $nestedData["DT_RowClass"] = "";
            $data[] = $nestedData;
            $i++;
        }
        // $allOPERATIONCAB = $this->em->getRepository(TOperationcab::class)->findAll();
        $json_data = array(
            "draw" => intval($params->get('draw')),
            // "recordsTotal" => intval(count($allOPERATIONCAB)),
            // "recordsFiltered" => intval(count($allOPERATIONCAB)),
            "data" => $data
        );
        return new Response(json_encode($json_data));
    }

    #[Route('/ajouter_reglement/{id}', name: 'facture_ajouter_reglement')]
    public function ajouter_reglement(Request $request, TOperationcab $operationcab): Response
    {
        if (
            empty($request->get('d_reglement')) || $request->get('montant') == "" || empty($request->get('banque')) ||
            empty($request->get('paiement'))  ||  empty($request->get('reference'))
        ) {
            return new JsonResponse('Veuillez renseigner tous les champs!', 500);
        }
        // elseif ($request->get('montant') <= 0 && empty($request->get('montant_provisoir'))) {
        //     return new JsonResponse('Le montant ne peut pas étre égale ou inferieur à 0', 500);
        // }
        // elseif ($request->get('montant') > $request->get('montant2')) {
        //     return new JsonResponse('Le montant a réglé est '.$request->get('montant2').'DH', 500);
        // }
        // if ($operationcab->getOrganisme() == 'Organisme') {
        //     return new JsonResponse('Vous ne pouvez pas reglé une Facture Organisme', 500);
        // }
        // $org = $operationcab->getOrganisme() == 'Payant' ? 1 : 0;
        $org = 1;
        $etablissement = $operationcab->getPreinscription()->getAnnee()->getFormation()->getEtablissement()->getAbreviation();
        $reglement = new TReglement();
        $reglement->setOperation($operationcab);
        $reglement->setCreated(new DateTime('now'));
        $reglement->setMontant($request->get('montant'));
        $reglement->setIce($request->get('ice'));
        // $reglement->setMProvisoir($request->get('montant_provisoir'));
        $reglement->setMDevis($request->get('montant_devis'));
        $reglement->setRemise(0);
        $reglement->setBanque($request->get('banque') == "" ? Null : $this->em->getRepository(XBanque::class)->find($request->get('banque')));
        $reglement->setPaiement($this->em->getRepository(XModalites::class)->find($request->get('paiement')));
        $reglement->setDateReglement(new DateTime($request->get('d_reglement')));
        $reglement->setReference($request->get('reference'));
        $reglement->setPayant($org);
        $reglement->setUserCreated($this->getUser());
        $this->em->persist($reglement);
        $this->em->flush();
        $reglement->setCode('HEB-REG' . str_pad($reglement->getId(), 8, '0', STR_PAD_LEFT) . '/' . date('Y'));
        $this->em->flush();
        return new JsonResponse($reglement->getId(), 200);
    }

    #[Route('/getMontant/{id}', name: 'getMontant')]
    public function getMontant(Request $request, TOperationcab $operationcab): Response
    {
        $operationdet = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $operationcab, 'active' => 1]);
        if ($operationdet == NULL) {
            // if($operationdet == NULL || $operationcab->getActive() == 0){
            return new JsonResponse('vide', 200);
        }
        $reglementTotal = $this->em->getRepository(TReglement::class)->getSumMontantByCodeFacture($operationcab);
        $operationTotal = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFacture($operationcab);
        $operationTotal = $operationTotal == Null ? 0 : $operationTotal['total'];
        $reglementTotal = $reglementTotal == Null ? 0 : $reglementTotal['total'];
        // dd($operationTotal['total'], $reglementTotal['total']);
        $montant = $operationTotal - $reglementTotal;

        return new JsonResponse(['montant' => $montant, 'montant_facture' => $operationTotal], 200);
    }
    #[Route('/facture/{operationcab}/{reglement}', name: 'imprimer_facture_reglement')]
    public function imprimer_facture_reglement(TOperationcab $operationcab, TReglement $reglement)
    {
        // dd($operationcab->getPreinscription()->getAnnee()->getFormation());
        $reglementTotal = $this->em->getRepository(TReglement::class)->getSumMontantByCodeFacture($operationcab);
        $operationTotal = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFacture($operationcab);
        $inscription = $this->em->getRepository(TInscription::class)->findOneBy([
            'admission' => $this->em->getRepository(TAdmission::class)->findBy([
                'preinscription' => $operationcab->getPreinscription()
            ])
        ], ['id' => 'DESC']);
        // dd($inscription);
        $promotion = $inscription == NULL ? "" : $inscription->getPromotion()->getDesignation();
        $inscription = $inscription == NULL ? "" : $inscription->getCode();
        $html = "";
        for ($i = 0; $i < 3; $i++) {
            $html .= $this->render("facture/pdfs/facture_reglement.html.twig", [
                'reglementTotal' => $reglementTotal,
                'operationTotal' => $operationTotal,
                'operationcab' => $operationcab,
                'reglement' => $reglement,
                'inscription' => $inscription,
                'promotion' => $promotion,
            ])->getContent();
        }
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [250, 350],
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 5,
            'margin_bottom' => 5,
        ]);
        $mpdf->SetTitle('Facture Reglée');
        $mpdf->WriteHTML($html);
        $mpdf->Output("facture.pdf", "I");
    }

    // #[Route('/modifier_organisme_facture/{id}', name: 'modifier_organisme_facture')]
    // public function modifier_organisme_facture(Request $request,TOperationcab $operationcab): Response
    // { 
    //     if (empty($request->get('organisme')) ) {
    //         return new JsonResponse('Veuillez Choisir Une Organisme!', 500);
    //     }
    //     $operationcab->setOrganisme($this->em->getRepository(POrganisme::class)->find($request->get('organisme')));
    //     $this->em->flush();
    //     return new JsonResponse('Organisme Modifier', 200);        
    // }
    #[Route('/printfacture/{operationcab}', name: 'imprimerfacture')]
    public function imprimerfacture(TOperationcab $operationcab)
    {
        $operationdets = $this->em->getRepository(TOperationdet::class)->FindDetGroupByFrais($operationcab);
        $operationdetslist = [];
        $source = "";
        foreach ($operationdets as $operationdet) {
            if ($source != "") {
                if (!str_contains($source, $operationdet->getOrganisme()->getDesignation())) {
                    $source .= " - ";
                    $source .= $operationdet->getOrganisme()->getDesignation();
                }
            } else {
                $source .= $operationdet->getOrganisme()->getDesignation();
            }
            $frais = $operationdet->getFrais();
            // dd($frais);
            $SumByOrg = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFactureAndOrganisme($operationcab, $frais);
            $SumByPayant = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFactureAndPayant($operationcab, $frais);
            $list['dateOperation'] = "";
            $created = $this->em->getRepository(TOperationdet::class)->findOneBy(['operationcab' => $operationcab, 'frais' => $frais], ['created' => 'DESC'])->getCreated();
            if ($created != null) {
                $list['dateOperation'] = $this->em->getRepository(TOperationdet::class)->findOneBy(['operationcab' => $operationcab, 'frais' => $frais], ['created' => 'DESC'])->getCreated()->format('d/m/Y');
            }
            // $list['dateOperation'] = $operationdet->getCreated()->format('d/m/Y h:m:s');
            $list['designation'] = $operationdet->getFrais()->getDesignation();
            $list['SumByOrg'] = $SumByOrg;
            $list['SumByPayant'] = $SumByPayant;
            $list['total'] = $SumByPayant + $SumByOrg;
            array_push($operationdetslist, $list);
        }
        // dd($source);
        $inscription = $this->em->getRepository(TInscription::class)->findOneBy([
            'admission' => $this->em->getRepository(TAdmission::class)->findBy([
                'preinscription' => $operationcab->getPreinscription()
            ]),
            'annee' => $operationcab->getAnnee()
        ]);
        // dd($inscription);
        $promotion = $inscription == NULL ? "" : $inscription->getPromotion()->getDesignation();
        $reglementOrg = $this->em->getRepository(TReglement::class)->getReglementSumMontantByCodeFactureByOrganisme($operationcab)['total'];
        $reglementPyt = $this->em->getRepository(TReglement::class)->getReglementSumMontantByCodeFactureByPayant($operationcab)['total'];
        // dd($reglementOrg,$reglementPyt);
        $html = $this->render("facture/pdfs/facture_facture.html.twig", [
            'reglementOrg' => $reglementOrg,
            'reglementPyt' => $reglementPyt,
            'source' => $source,
            // 'reglementTotal' => $reglementTotal,
            // 'operationTotal' => $operationTotal,
            'operationcab' => $operationcab,
            'promotion' => $promotion,
            // 'total' => $total,
            'operationdets' => $operationdetslist
        ])->getContent();
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'margin_top' => 5,
        ]);
        $mpdf->SetTitle('Facture');
        $mpdf->SetHTMLFooter(
            $this->render("facture/pdfs/footer.html.twig")->getContent()
        );
        $mpdf->showImageErrors = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output("facture.pdf", "I");
    }


    #[Route('/releve/{operationcab}', name: 'imprimerreleve')]
    public function imprimerreleve(TOperationcab $operationcab)
    {
        $facture_infos = [];
        $operationcabs = $this->em->getRepository(TOperationcab::class)->findBy(['preinscription' => $operationcab->getPreinscription()]);
        foreach ($operationcabs as $operationcab) {
            $organisme = "";
            $orgpyt = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $operationcab, 'active' => 1, 'organisme' => 103]);
            if (count($orgpyt)) {
                $organisme = 'O/P';
            } else {
                $pyt = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $operationcab, 'active' => 1, 'organisme' => 7]);
                $org = $this->em->getRepository(TOperationdet::class)->FindDetNotPayant($operationcab);
                if (count($pyt) && count($org)) {
                    $organisme = 'Org & Pyt';
                } elseif (!count($pyt) && count($org)) {
                    $organisme = 'Organisme';
                } else {
                    $organisme = 'Payant';
                }
            }
            $totalfacture = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFacture($operationcab)['total'];
            $totalreglement = $this->em->getRepository(TReglement::class)->getSumMontantByCodeFacture($operationcab)['total'];
            $all = [
                'operationcab' => $operationcab,
                'totalfacture' => $totalfacture,
                'totalreglement' => $totalreglement,
                'diffirence' => $totalfacture - $totalreglement,
                'organisme' => $organisme,
            ];
            array_push($facture_infos, $all);
        }
        // dd($facture_info);
        $inscription = $this->em->getRepository(TInscription::class)->findOneBy([
            'admission' => $operationcab->getPreinscription()->getAdmissions()[0],
            'statut' => $this->em->getRepository(PStatut::class)->find(13)
        ], ['code' => 'DESC']);
        $html = $this->render("facture/pdfs/facture_releve.html.twig", [
            'facture_infos' => $facture_infos,
            'inscription' => $inscription,
            'preinscription' => $operationcab->getPreinscription()
        ])->getContent();
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'margin_top' => 5,
        ]);
        $mpdf->SetTitle('Facture');
        $mpdf->SetHTMLFooter(
            $this->render("facture/pdfs/footer.html.twig")->getContent()
        );
        $mpdf->showImageErrors = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output("facture.pdf", "I");
    }

    #[Route('/article_frais/{id}', name: 'article_frais_facture')]
    public function article_frais(Request $request, TOperationCab $operationcab): Response
    {
        $typeChambre = $operationcab->getLitInscription()->getLit()->getChambre()->getTypeChambre();
        $frais = $this->em->getRepository(PFrais::class)->findBy(['typeChambre' => $typeChambre, 'active' => 1]);
        $data = "<option selected enabled value=''>Choix Fraix</option>";
        foreach ($frais as $frs) {
            $data .= "<option value=" . $frs->getId() . " data-id=" . $frs->getmontant() . ">" . $frs->getDesignation() . "</option>";
        }
        $check = $operationcab->getOrganisme() == "Organisme" ? 0 : 1;
        return new JsonResponse([$check, $data], 200);
    }

    #[Route('/detaille_facture/{id}', name: 'detaille_facture')]
    public function detaille_facture(Request $request, TOperationcab $operationcab): Response
    {
        $operationdets = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $operationcab]);

        $cloture = $operationcab->getActive();
        $html = "";
        $i = 1;
        $active = "";
        foreach ($operationdets as $operationdet) {
            $tr = '';
            if ($cloture == 1) {
                if ($operationdet->getActive() == 1) {
                    $active = '<button class="detaille_cloture btn btn-danger" id=' . $operationdet->getId() . '><i class="fas fa-window-close"></i></button>';
                } else {
                    $active = '<button class="detaille_clotured btn btn-secondary" id=' . $operationdet->getId() . '><i class="fas fa-window-close"></i></i></button>';
                }
                $tr = '<th scope="col">' . $active . '</th>';
            }
            $organisme = $operationdet->getOrganisme()->getAbreviation();
            if (!in_array($operationdet->getOrganisme()->getAbreviation(), ['PYT', 'FCZ-PYT'])) {
                $organisme = 'ORG';
            }
            $html .= '<tr><th scope="col">' . $i++ . '</th>
            <th scope="col" style="width:25rem">' . $operationdet->getFrais()->getDesignation() . '</th>
            <th scope="col">' . $organisme . '</th>
            <th scope="col">' . $operationdet->getMontant() . '</th>
            <th scope="col">' . $operationdet->getRemise() . '</th>' . $tr . '</tr>';
        }
        $data = [$cloture, $html];
        return new JsonResponse($data, 200);
    }

    #[Route('/add_detaille/{id}', name: 'add_detaille')]
    public function add_detaille(Request $request, TOperationcab $operationcab): Response
    {
        // dd($request);
        if ($operationcab->getActive() == 0) {
            return new JsonResponse('Cette Facture Est Cloture', 500);
        }
        // dd($request);
        if (empty($request->get('montant'))  || $request->get('montant') == ' ' || empty($request->get('frais')) || $request->get('frais') == "" || ($operationcab->getOrganisme() == "Organisme" and empty($request->get('organisme_id')))) {
            return new JsonResponse('Merci de renseigner tous les champs!', 500);
        }
        // if ($operationcab->getOrganisme() == "Organisme" && empty($request->get('organisme_id')) ) {
        //     return new JsonResponse('Merci de choisir une Organisme!', 500);    
        // }
        $frais =  $this->em->getRepository(PFrais::class)->find($request->get('frais'));
        if ($frais == null) {
            return new JsonResponse('Merci de verifier le frais!', 500);
        }
        $org = $operationcab->getOrganisme() == 'Payant' ? 7 : 1;
        $org = $this->em->getRepository(POrganisme::class)->find($org);

        $operationDet = new TOperationdet();
        $operationDet->setOperationcab($operationcab);
        $operationDet->setFrais($frais);
        $operationDet->setMontant($request->get('montant'));
        $operationDet->setIce($request->get('ice'));
        $operationDet->setCreated(new \DateTime("now"));
        $operationDet->setRemise(0);
        $operationDet->setActive(1);
        $operationDet->setUserCreated($this->getUser());
        // $operationDet->setOrganisme($this->em->getRepository(POrganisme::class)->find($request->get('organisme_id')));
        $operationDet->setOrganisme($org);
        $this->em->persist($operationDet);
        $this->em->flush();
        $operationDet->setCode(
            "OPD" . str_pad($operationDet->getId(), 8, '0', STR_PAD_LEFT)
        );
        $operationDet->getOperationcab()->setSynFlag(0);
        $this->em->flush();
        return new JsonResponse(1, 200);
    }

    #[Route('/cloture_detaille/{id}', name: 'cloture_detaille')]
    public function cloture_detaille(TOperationdet $operationdet): Response
    {
        $operationdet->setActive(0);
        $operationdet->setUpdated(new \DateTime("now"));
        $operationdet->setUserUpdated($this->getUser());
        $noperationdet = clone $operationdet;
        $noperationdet->setMontant($operationdet->getMontant() * -1);
        $noperationdet->setCreated(new DateTime('now'));
        $noperationdet->setUserCreated($this->getUser());
        $this->em->persist($noperationdet);
        $this->em->flush();
        $noperationdet->setCode(
            "OPD" . str_pad($noperationdet->getId(), 8, '0', STR_PAD_LEFT)
        );
        $this->em->flush();
        return new JsonResponse(1, 200);
    }

    #[Route('/cloture_all_detaille/{id}', name: 'cloture_all_detaille')]
    public function cloture_all_detaille(TOperationcab $operationcab): Response
    {
        if ($operationcab->getActive() == 0) {
            return new JsonResponse('Facture deja Cloturé!', 500);
        }
        foreach ($operationcab->getOperationdets() as $operationdet) {
            if ($operationdet->getActive() == 1) {
                $operationdet->setActive(0);
                $operationdet->setUpdated(new \DateTime("now"));
                $operationdet->setUserUpdated($this->getUser());
                $noperationdet = clone $operationdet;
                $noperationdet->setMontant($operationdet->getMontant() * -1);
                $noperationdet->setCreated(new DateTime('now'));
                $noperationdet->setUserCreated($this->getUser());
                $this->em->persist($noperationdet);
                $this->em->flush();
                $noperationdet->setCode(
                    "OPD" . str_pad($noperationdet->getId(), 8, '0', STR_PAD_LEFT)
                );
                $this->em->flush();
            }
        }
        return new JsonResponse(1, 200);
    }

    #[Route('/extraction_factures', name: 'extraction_factures')]
    public function extraction_factures()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ORD');
        $sheet->setCellValue('B1', 'CODE CONDIDAT');
        $sheet->setCellValue('C1', 'CODE PRE-INSCRIPTION');
        $sheet->setCellValue('D1', 'CODE ADMISSION');
        $sheet->setCellValue('E1', 'CODE INSCRIPTION');
        $sheet->setCellValue('F1', 'ID FACTURE');
        $sheet->setCellValue('G1', 'CODE FACTURE');
        $sheet->setCellValue('H1', 'ANNEE UNIVERSITAIRE');
        $sheet->setCellValue('I1', 'NOM');
        $sheet->setCellValue('J1', 'PRENOM');
        $sheet->setCellValue('K1', 'NATIONALITE');
        $sheet->setCellValue('L1', 'ETABLISSEMENT');
        $sheet->setCellValue('M1', 'FORMATION');
        $sheet->setCellValue('N1', 'PROMOTION');
        $sheet->setCellValue('O1', 'SOURCE');
        $sheet->setCellValue('P1', 'MT FACTURE');
        $sheet->setCellValue('Q1', 'MT REGLE');
        $sheet->setCellValue('R1', 'REST');
        $sheet->setCellValue('S1', 'ORG');
        $sheet->setCellValue('T1', 'Statut');
        $sheet->setCellValue('U1', 'D-Created');
        $sheet->setCellValue('V1', 'ID HEBERGEMENT');
        $sheet->setCellValue('w1', 'Departement');
        $sheet->setCellValue('X1', 'Etage');
        $sheet->setCellValue('Y1', 'Chambre');
        $sheet->setCellValue('Z1', 'T-Chambre');
        $sheet->setCellValue('AA1', 'Position');
        $sheet->setCellValue('AB1', 'Debut');
        $sheet->setCellValue('AC1', 'Fin');
        $sheet->setCellValue('AD1', 'Etat');
        $i = 2;
        $j = 1;
        // $currentyear = '2022/2023';
        $currentyear = date('m') >= 7 ? date('Y') . '/' . date('Y') + 1 : date('Y') - 1 . '/' . date('Y');
        $operationcabs = $this->em->getRepository(TOperationcab::class)->getFacturesByCurrentYear($currentyear);
        // dd($operationcabs);
        foreach ($operationcabs as $operationcab) {
            // dd($operationcab);
            $montant = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFacture($operationcab['id']);
            $montant_reglement = $this->em->getRepository(TReglement::class)->getSumMontantByCodeFacture($operationcab['id']);
            $sheet->setCellValue('A' . $i, $j);
            $sheet->setCellValue('B' . $i, $operationcab['code_etu']);
            $sheet->setCellValue('C' . $i, $operationcab['code_preins']);
            $sheet->setCellValue('D' . $i, $operationcab['code_adm']);
            $sheet->setCellValue('E' . $i, $operationcab['code_ins']);
            $sheet->setCellValue('F' . $i, $operationcab['id']);
            $sheet->setCellValue('G' . $i, $operationcab['code_facture']);
            $sheet->setCellValue('H' . $i, $operationcab['annee']);
            $sheet->setCellValue('I' . $i, $operationcab['nom']);
            $sheet->setCellValue('J' . $i, $operationcab['prenom']);
            $sheet->setCellValue('K' . $i, $operationcab['nationalite']);
            $sheet->setCellValue('L' . $i, $operationcab['etablissement']);
            $sheet->setCellValue('M' . $i, $operationcab['formation']);
            $sheet->setCellValue('N' . $i, $operationcab['promotion']);
            $sheet->setCellValue('O' . $i, $operationcab['categorie']);
            $sheet->setCellValue('P' . $i, $montant['total']);
            $sheet->setCellValue('Q' . $i, $montant_reglement['total']);
            $sheet->setCellValue('R' . $i, $montant['total'] - $montant_reglement['total']);
            $value = "";
            $opCab = $this->em->getRepository(TOperationcab::class)->find($operationcab['id']);
            if ($opCab->getOrganisme() == "Payant") {
                $value = 'PYT';
            } elseif ($opCab->getOrganisme() == "Organisme") {
                $value = 'ORG';
            } else {
                $orgpyt = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $operationcab['id'], 'active' => 1, 'organisme' => 103]);
                if (count($orgpyt)) {
                    $value = 'O/P';
                } else {
                    $pyt = $this->em->getRepository(TOperationdet::class)->findBy(['operationcab' => $operationcab['id'], 'active' => 1, 'organisme' => 7]);
                    $org = $this->em->getRepository(TOperationdet::class)->FindDetNotPayant($operationcab['id']);
                    if (count($pyt) && count($org)) {
                        $value = 'O/P';
                    } elseif (!count($pyt) && count($org)) {
                        $value = 'ORG';
                    } else {
                        $value = 'PYT';
                    }
                }
            }
            $sheet->setCellValue('S' . $i, $value);
            $sheet->setCellValue('T' . $i, $operationcab['statut']);
            if ($operationcab['created'] != "") {
                $sheet->setCellValue('U' . $i, $operationcab['created']->format('d-m-Y'));
            }
            $sheet->setCellValue('V' . $i, $operationcab['id_hebergement']);
            $sheet->setCellValue('W' . $i, $operationcab['departement']);
            $sheet->setCellValue('X' . $i, $operationcab['etage']);
            $sheet->setCellValue('Y' . $i, $operationcab['nchambre']);
            $sheet->setCellValue('Z' . $i, $operationcab['tchambre']);
            $sheet->setCellValue('AA' . $i, $operationcab['position']);
            $sheet->setCellValue('AB' . $i, $operationcab['debut']->format('d-m-Y'));
            $sheet->setCellValue('AC' . $i, $operationcab['fin']->format('d-m-Y'));
            $sheet->setCellValue('AD' . $i, $operationcab['etat'] == 1 ? "En Cours" : "Annulée");
            $i++;
            $j++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Extraction Facture Hebergement.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    // #[Route('/extraction_factures_by_annee_provis/{annee}', name: 'extraction_factures_by_annee_provis')]
    #[Route('/extraction_factures_by_annee/{annee}', name: 'extraction_factures_by_annee')]
    public function extraction_factures_by_annee($annee)
    {
        // dd($annee.'/'.$annee+1);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ORD');
        $sheet->setCellValue('B1', 'CODE PRE-INSCRIPTION');
        $sheet->setCellValue('C1', 'CODE FACTURE');
        $sheet->setCellValue('D1', 'ANNEE UNIVERSITAIRE');
        $sheet->setCellValue('E1', 'NOM');
        $sheet->setCellValue('F1', 'PRENOM');
        $sheet->setCellValue('G1', 'NATIONALITE');
        $sheet->setCellValue('H1', 'ETABLISSEMENT');
        $sheet->setCellValue('I1', 'FORMATION');
        $sheet->setCellValue('J1', 'PROMOTION');
        $sheet->setCellValue('K1', 'statut');
        $sheet->setCellValue('L1', 'SOURCE');
        $sheet->setCellValue('M1', 'FRAIS');
        $sheet->setCellValue('N1', 'MT FACTURE PYT');
        $sheet->setCellValue('O1', 'MT FACTURE ORG');
        $sheet->setCellValue('P1', 'MT REGLE');
        $sheet->setCellValue('Q1', 'REST');
        $sheet->setCellValue('R1', 'D-CREATION');
        $i = 2;
        $j = 1;
        // $currentyear = '2022/2023';
        $currentyear = $annee . '/' . $annee + 1;
        $operationcabs = $this->em->getRepository(TOperationcab::class)->getFacturesByCurrentYear($currentyear);
        // dd($operationcabs);
        foreach ($operationcabs as $operationcab) {
            // if ($operationcab['id'] == 48912) {
            $montant = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFacture($operationcab['id']);
            $operationdets = $this->em->getRepository(TOperationdet::class)->FindDetGroupByFrais($operationcab['id']);
            $montant_reglement = $this->em->getRepository(TReglement::class)->getSumMontantByCodeFacture($operationcab['id']);
            $regcount = 0;
            foreach ($operationdets as $operationdet) {
                // dd($operationdet);
                $sheet->setCellValue('A' . $i, $j);
                $sheet->setCellValue('B' . $i, $operationcab['code_preins']);
                $sheet->setCellValue('C' . $i, $operationcab['code_facture']);
                $sheet->setCellValue('D' . $i, $operationcab['annee']);
                $sheet->setCellValue('E' . $i, $operationcab['nom']);
                $sheet->setCellValue('F' . $i, $operationcab['prenom']);
                $sheet->setCellValue('G' . $i, $operationcab['nationalite']);
                $sheet->setCellValue('H' . $i, $operationcab['etablissement']);
                $sheet->setCellValue('I' . $i, $operationcab['formation']);
                $sheet->setCellValue('J' . $i, $operationcab['promotion']);
                $sheet->setCellValue('K' . $i, $operationcab['statut']);
                $frais = $operationdet->getFrais();
                $SumByOrg = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFactureAndOrganisme($operationcab['id'], $frais);
                $SumByPayant = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFactureAndPayant($operationcab['id'], $frais);
                if ($SumByPayant != 0 && $SumByOrg != 0) {
                    $source = "O/P";
                } elseif ($SumByPayant != 0 && $SumByOrg == 0) {
                    $source = "PYT";
                } else {
                    $source = "ORG";
                }
                $total = $SumByPayant + $SumByOrg;
                $sheet->setCellValue('L' . $i, $source);
                $sheet->setCellValue('M' . $i, $operationdet->getFrais()->getDesignation());
                $sheet->setCellValue('N' . $i, $SumByPayant);
                $sheet->setCellValue('O' . $i, $SumByOrg);
                if ($regcount == 0) {
                    $sheet->setCellValue('P' . $i, $montant_reglement['total']);
                    $sheet->setCellValue('Q' . $i, $montant['total'] - $montant_reglement['total']);
                }
                if ($operationcab['created'] != "") {
                    $sheet->setCellValue('R' . $i, $operationcab['created']->format('d-m-Y'));
                }
                $i++;
                $j++;
                $regcount++;
            }
            // }
        }
        $writer = new Xlsx($spreadsheet);
        $now = date('Y-m-d h:m:s');
        $year = $annee . '-' . $annee + 1;
        $fileName = "Extraction Des Articles $year -- $now.xlsx";
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }


    #[Route('/extraction_factures_nonInscrits/{annee}', name: 'extraction_factures_nonInscrits')]
    public function extraction_factures_nonInscrits($annee)
    {
        // dd($annee.'/'.$annee+1);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ORD');
        $sheet->setCellValue('B1', 'CODE PRE-INSCRIPTION');
        $sheet->setCellValue('C1', 'CODE FACTURE');
        $sheet->setCellValue('D1', 'ANNEE UNIVERSITAIRE');
        $sheet->setCellValue('E1', 'NOM');
        $sheet->setCellValue('F1', 'PRENOM');
        $sheet->setCellValue('G1', 'NATIONALITE');
        $sheet->setCellValue('H1', 'ETABLISSEMENT');
        $sheet->setCellValue('I1', 'FORMATION');
        $sheet->setCellValue('J1', 'PROMOTION');
        $sheet->setCellValue('K1', 'statut');
        $sheet->setCellValue('L1', 'SOURCE');
        $sheet->setCellValue('M1', 'FRAIS');
        $sheet->setCellValue('N1', 'MT FACTURE PYT');
        $sheet->setCellValue('O1', 'MT FACTURE ORG');
        $sheet->setCellValue('P1', 'MT REGLE');
        $sheet->setCellValue('Q1', 'REST');
        $sheet->setCellValue('R1', 'D-CREATION');
        $i = 2;
        $j = 1;
        // $currentyear = '2022/2023';
        $currentyear = $annee . '/' . $annee + 1;
        $operationcabs = $this->em->getRepository(TOperationcab::class)->getFacturesByCurrentYearNonInscrits($currentyear);
        // dd($operationcabs);
        foreach ($operationcabs as $operationcab) {
            // if ($operationcab['id'] == 48912) {
            $montant = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFacture($operationcab['id']);
            $operationdets = $this->em->getRepository(TOperationdet::class)->FindDetGroupByFrais($operationcab['id']);
            $montant_reglement = $this->em->getRepository(TReglement::class)->getSumMontantByCodeFacture($operationcab['id']);
            $regcount = 0;
            foreach ($operationdets as $operationdet) {
                // dd($operationdet);
                $sheet->setCellValue('A' . $i, $j);
                $sheet->setCellValue('B' . $i, $operationcab['code_preins']);
                $sheet->setCellValue('C' . $i, $operationcab['code_facture']);
                $sheet->setCellValue('D' . $i, $operationcab['annee']);
                $sheet->setCellValue('E' . $i, $operationcab['nom']);
                $sheet->setCellValue('F' . $i, $operationcab['prenom']);
                $sheet->setCellValue('G' . $i, $operationcab['nationalite']);
                $sheet->setCellValue('H' . $i, $operationcab['etablissement']);
                $sheet->setCellValue('I' . $i, $operationcab['formation']);
                $sheet->setCellValue('J' . $i, $operationcab['promotion']);
                $sheet->setCellValue('K' . $i, $operationcab['statut']);
                $frais = $operationdet->getFrais();
                $SumByOrg = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFactureAndOrganisme($operationcab['id'], $frais);
                $SumByPayant = $this->em->getRepository(TOperationdet::class)->getSumMontantByCodeFactureAndPayant($operationcab['id'], $frais);
                if ($SumByPayant != 0 && $SumByOrg != 0) {
                    $source = "O/P";
                } elseif ($SumByPayant != 0 && $SumByOrg == 0) {
                    $source = "PYT";
                } else {
                    $source = "ORG";
                }
                $total = $SumByPayant + $SumByOrg;
                $sheet->setCellValue('L' . $i, $source);
                $sheet->setCellValue('M' . $i, $operationdet->getFrais()->getDesignation());
                $sheet->setCellValue('N' . $i, $SumByPayant);
                $sheet->setCellValue('O' . $i, $SumByOrg);
                if ($regcount == 0) {
                    $sheet->setCellValue('P' . $i, $montant_reglement['total']);
                    $sheet->setCellValue('Q' . $i, $montant['total'] - $montant_reglement['total']);
                }
                if ($operationcab['created'] != "") {
                    $sheet->setCellValue('R' . $i, $operationcab['created']->format('d-m-Y'));
                }
                $i++;
                $j++;
                $regcount++;
            }
            // }
        }
        $writer = new Xlsx($spreadsheet);
        $now = date('Y-m-d h:m:s');
        $year = $annee . '-' . $annee + 1;
        $fileName = "Extraction Des Articles $year -- $now (non Inscrits).xlsx";
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    #[Route('/valider', name: 'valider_facture')]
    public function valider_facture(Request $request): Response
    {
        if (!$request->get('facture')) {
            return new JsonResponse('Veuillez selection une facture!', 500);
        }
        $operationcab = $this->em->getRepository(TOperationcab::class)->find($request->get('facture'));
        if (!$operationcab) {
            return new JsonResponse('Facture Introuvable!', 500);
        }
        if ($operationcab->getActive() == 0) {
            return new JsonResponse('Facture Déja Cloturée!', 500);
        }
        // if (!in_array($operationcab->getCategorie(), ['inscription','inscription organisme'])) {
        //     return new JsonResponse('Veuillez selection une facture "Inscription"!', 500); 
        // }
        // if (in_array($operationcab->getCategorie(), ['inscription','inscription organisme'])) {
        $operationcab->setActive(0);
        // $year = $operationcab->getDateContable() + 1;

        // $operationCabHorsIns = new TOperationcab();
        // $operationCabHorsIns->setPreinscription($operationcab->getPreinscription());
        // $operationCabHorsIns->setAnnee($operationcab->getAnnee());
        // $operationCabHorsIns->setActive(1);
        // $operationCabHorsIns->setDateContable($year);
        // $categorie = $operationcab->getCategorie() == 'inscription' ? 'hors inscription' : 'hors inscription org';
        // $organisme = $operationcab->getCategorie() == 'inscription' ? 'Payant' : 'Organisme';
        // $operationCabHorsIns->setCategorie($categorie);
        // $operationCabHorsIns->setOrganisme($organisme);
        // $operationCabHorsIns->setUserCreated($this->getUser());
        // $operationCabHorsIns->setCreated(new \DateTime("now"));
        // $this->em->persist($operationCabHorsIns);
        // $this->em->flush();
        // $operationCabHorsIns->setCode(
        //     $operationcab->getAnnee()->getFormation()->getEtablissement()->getAbreviation()."-FAC".str_pad($operationCabHorsIns->getId(), 8, '0', STR_PAD_LEFT)."/".date('Y')
        // );
        $this->em->flush();
        // }
        // if ($operationcab->getCategorie() == 'inscription') {
        //     $operationCabHorsIns = $this->em->getRepository(TOperationcab::class)->findOneBy(['categorie'=>'hors inscription','preinscription'=>$operationcab->getPreinscription()]);
        //     $operationCabHorsIns->setActive(1);
        // }
        // $operationcab->setActive(0);
        // $this->em->flush();
        return new JsonResponse('La facture est bien Valider!', 200);
    }

    #[Route('/new_fac_organisme', name: 'new_fac_organisme')]
    public function new_fac_organisme(Request $request): Response
    {
        // dd($request->get('facture'));
        if (!$request->get('facture')) {
            return new JsonResponse('Veuillez selection une Facture Inscription "Payant"!', 500);
        }
        $operationcab = $this->em->getRepository(TOperationcab::class)->find($request->get('facture'));
        if (!$operationcab) {
            return new JsonResponse('Facture Introuvable!', 500);
        }
        if ($operationcab->getActive() == 1 and $operationcab->getOrganisme() == "Organisme") {
            return new JsonResponse('Cette Facture est Ouverte', 500);
        }
        // if (!in_array($operationcab->getCategorie(), ['inscription','hors inscription'])) {
        //     return new JsonResponse('Veuillez selection une Facture "Inscription"', 500); 
        // }
        $check = $this->em->getRepository(TOperationcab::class)->findBy([
            'preinscription' => $operationcab->getPreinscription(),
            'annee' => $operationcab->getAnnee(),
            'litInscription' => $operationcab->getLitInscription(),
            'dateContable' => date('Y'),
            'organisme' => 'Organisme',
            'categorie' => 'inscription organisme',
            'active' => 1
        ]);
        if ($check) {
            return new JsonResponse('la Facture Organisme est déja crée!', 500);
        }
        $OrganismeOrganisme = clone $operationcab;
        $OrganismeOrganisme->setCategorie('inscription organisme');
        $OrganismeOrganisme->setCreated(new \Datetime('now'));
        $OrganismeOrganisme->setuserCreated($this->getUser());
        $OrganismeOrganisme->setActive(1);
        $OrganismeOrganisme->setSynFlag(0);
        $OrganismeOrganisme->setDateContable(date('Y'));
        $OrganismeOrganisme->setOrganisme('Organisme');
        $this->em->persist($OrganismeOrganisme);
        $this->em->flush();
        $etab = $OrganismeOrganisme->getAnnee()->getFormation()->getEtablissement()->getAbreviation();
        $OrganismeOrganisme->setCode('HEB-FAC' . str_pad($OrganismeOrganisme->getId(), 8, '0', STR_PAD_LEFT) . '/' . date('Y'));
        $this->em->flush();
        // dd($OrganismeOrganisme);
        return new JsonResponse('La facture organisme est bien Cree!', 200);
    }

    #[Route('/new_fac_payant', name: 'new_fac_payant')]
    public function new_fac_payant(Request $request): Response
    {
        // dd($request->get('facture'));
        if (!$request->get('facture')) {
            return new JsonResponse('Veuillez selection une Facture', 500);
        }
        $operationcab = $this->em->getRepository(TOperationcab::class)->find($request->get('facture'));
        if (!$operationcab) {
            return new JsonResponse('Facture Introuvable!', 500);
        }
        if ($operationcab->getActive() == 1 and $operationcab->getOrganisme() == "Payant") {
            return new JsonResponse('Cette Facture est Ouverte', 500);
        }
        // if (!in_array($operationcab->getCategorie(), ['inscription','hors inscription'])) {
        //     return new JsonResponse('Veuillez selection une Facture "Inscription"', 500); 
        // }
        $check = $this->em->getRepository(TOperationcab::class)->findBy([
            'preinscription' => $operationcab->getPreinscription(),
            'annee' => $operationcab->getAnnee(),
            'litInscription' => $operationcab->getLitInscription(),
            'dateContable' => date('Y'),
            'organisme' => 'Payant',
            'categorie' => 'inscription',
            'active' => 1,
        ]);
        if ($check) {
            return new JsonResponse('la Facture Payant est déja crée!', 500);
        }
        $OrganismePayant = clone $operationcab;
        $OrganismePayant->setCategorie('inscription');
        $OrganismePayant->setCreated(new \Datetime('now'));
        $OrganismePayant->setuserCreated($this->getUser());
        $OrganismePayant->setActive(1);
        $OrganismePayant->setSynFlag(0);
        $OrganismePayant->setDateContable(date('Y'));
        $OrganismePayant->setOrganisme('Payant');
        $this->em->persist($OrganismePayant);
        $this->em->flush();
        $etab = $OrganismePayant->getAnnee()->getFormation()->getEtablissement()->getAbreviation();
        $OrganismePayant->setCode('HEB-FAC' . str_pad($OrganismePayant->getId(), 8, '0', STR_PAD_LEFT) . '/' . date('Y'));
        $this->em->flush();
        // dd($OrganismePayant);
        return new JsonResponse('La facture payant est bien Cree!', 200);
    }

    #[Route('/facturation_reinscription', name: 'facturation_reinscription')]
    public function facturation_reinscription(Request $request, SluggerInterface $slugger): Response
    {
        $file = $request->files->get('file');
        // dd($file);
        if (!$file) {
            return new JsonResponse('Prière d\'importer le fichier', 500);
        }
        if ($file->guessExtension() !== 'xlsx') {
            return new JsonResponse('Prière d\'enregister un fichier xlsx', 500);
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        // this is needed to safely include the file name as part of the URL
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '_' . $this->getUser()->getId() . '.' . $file->guessExtension();

        // Move the file to the directory where brochures are stored
        try {
            $file->move(
                $this->getParameter('facturation_reinscription'),
                $newFilename
            );
        } catch (FileException $e) {
            throw new \Exception($e);
        }

        $reader = new reader();
        $spreadsheet = $reader->load($this->getParameter('facturation_reinscription') . '/' . $newFilename);
        $worksheet = $spreadsheet->getActiveSheet();
        $spreadSheetArys = $worksheet->toArray();

        unset($spreadSheetArys[0]);
        $sheetCount = 0;

        foreach ($spreadSheetArys as $arr) {
            $id_facture = $arr[0];
            $id_frais = $arr[1];
            $montant = $arr[2];
            // dd($id_facture, $id_frais,$montant);
            $operationcab =  $this->em->getRepository(TOperationcab::class)->find($id_facture);
            $frais =  $this->em->getRepository(PFrais::class)->find($id_frais);
            if ($frais != null and $operationcab) {
                if ($operationcab->getOrganisme() == 'Payant') {
                    $org = $this->em->getRepository(POrganisme::class)->find(7);
                } else {
                    $org = $this->em->getRepository(POrganisme::class)->find(1);
                }
                $operationDet = new TOperationdet();
                $operationDet->setOperationcab($operationcab);
                $operationDet->setFrais($frais);
                $operationDet->setMontant($montant);
                $operationDet->setCreated(new \DateTime("now"));
                $operationDet->setRemise(0);
                $operationDet->setActive(1);
                $operationDet->setUserCreated($this->getUser());
                $operationDet->setOrganisme($org);
                $operationDet->setSynFlag(0);
                $this->em->persist($operationDet);
                $this->em->flush();
                $operationDet->setCode(
                    "OPD" . str_pad($operationDet->getId(), 8, '0', STR_PAD_LEFT)
                );
                $operationDet->getOperationcab()->setSynFlag(0);
                $this->em->flush();
                $sheetCount++;
            }
        }
        return new JsonResponse(['message' => "Total des factures facturé est " . $sheetCount, 'count' => $sheetCount]);
    }

    #[Route('/canvas', name: 'facture_canvas')]
    public function facturationCanvas()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'id_facture');
        $sheet->setCellValue('B1', 'id_frais');
        $sheet->setCellValue('C1', 'montant');

        $writer = new Xlsx($spreadsheet);
        $fileName = 'canvas_facturation.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);

        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }



    #[Route('/ouverture_facture', name: 'ouverture_facture')]
    public function ouverture_facture(Request $request): Response
    {
        // dd($request->get('facture'));
        if (!$request->get('facture')) {
            return new JsonResponse('Veuillez selection une Facture', 500);
        }
        $operationcab = $this->em->getRepository(TOperationcab::class)->find($request->get('facture'));
        if (!$operationcab) {
            return new JsonResponse('Facture Introuvable!', 500);
        }
        if ($operationcab->getActive() == 1) {
            return new JsonResponse('Cette facture est déja ouverte!', 500);
        }

        $operationcab->setActive(0);
        $operationcab->setAnnuler(1);
        // dd($operationcab);
        $operationcabA = clone $operationcab;
        $operationcabA->setCreated(new \Datetime('now'));
        $operationcabA->setuserCreated($this->getUser());
        $operationcabA->setSynFlag(0);
        $operationcabA->setDateContable(date('Y'));
        $operationcabA->setCode($operationcab->getCode() . '_A');
        $this->em->persist($operationcabA);
        // $this->em->flush();

        $operationcabN = clone $operationcab;
        $operationcabN->setCreated(new \Datetime('now'));
        $operationcabN->setuserCreated($this->getUser());
        $operationcabN->setActive(1);
        $operationcabN->setSynFlag(0);
        $operationcabN->setAnnuler(0);
        $operationcabN->setDateContable(date('Y'));
        $operationcabN->setFacAnnuler($operationcab->getId());
        $this->em->persist($operationcabN);
        $this->em->flush();
        $operationcabN->setCode('HEB-FAC' . str_pad($operationcabN->getId(), 8, '0', STR_PAD_LEFT) . '/' . date('Y'));

        foreach ($operationcab->getOperationDets() as $det) {
            // dd($det);
            if ($det->getActive() == 1) {
                $operationdetA = clone $det;
                $operationdetA->setCreated(new \Datetime('now'));
                $operationdetA->setCode($det->getCode() . '_A');
                $operationdetA->setSynFlag(0);
                $operationdetA->setMontant(-1 * $det->getMontant());
                $operationdetA->setOperationcab($operationcabA);

                $operationdetN = clone $det;
                $operationdetN->setCreated(new \Datetime('now'));
                $operationdetN->setSynFlag(0);
                $operationdetN->setMontant($det->getMontant());
                $operationdetN->setOperationcab($operationcabN);

                $this->em->persist($operationdetA);
                $this->em->persist($operationdetN);
                $this->em->flush();

                $operationdetN->setCode(
                    "OPD" . str_pad($operationdetN->getId(), 8, '0', STR_PAD_LEFT)
                );
                $this->em->flush();
            }
        }

        $reglements = $this->em->getRepository(TReglement::class)->findBy(['operation' => $operationcab, 'annuler' => 0, 'synFlag' => 0]);
        foreach ($reglements as $reglement) {
            $reglement->setOperation($operationcabN);
        }
        $this->em->flush();
        // dd($operationcab);
        return new JsonResponse('La facture est ouverte', 200);
    }



    #[Route('/facturationAvoirEnMasse', name: 'facturationAvoirEnMasse')]
    public function facturationAvoirEnMasse(Request $request): Response
    {
        // dd($request->get('facture'));
        // if (!$request->get('facture')) {
        //     return new JsonResponse('Veuillez selection une Facture', 500);
        // }
        $codeOperations = [];
        $operationcabs = $this->em->getRepository(TOperationcab::class)->findBy(['code' => $codeOperations]);
        dd($operationcabs);
        $counter = 0;
        $total = 0;
        foreach ($operationcabs as $operationcab) {
            $operationcabN = clone $operationcab;
            $operationcabN->setCreated(new \Datetime('now'));
            $operationcabN->setuserCreated($this->getUser());
            $operationcabN->setActive(1);
            $operationcabN->setSynFlag(0);
            $operationcabN->setAnnuler(0);
            $operationcabN->setDateContable(date('Y'));
            $operationcabN->setOrganisme('Payant');
            $this->em->persist($operationcabN);
            $this->em->flush();
            // $etab = $operationcab->getAnnee()->getFormation()->getEtablissement()->getAbreviation();
            $operationcabN->setCode('HEB-FAC' . str_pad($operationcabN->getId(), 8, '0', STR_PAD_LEFT) . '/' . date('Y'));
            $this->em->flush();

            //     foreach ($operationcab->getOperationDets() as $det) {
            //         // dd($det);
            //         if ($det->getActive() == 1) {

            //             $operationdetN = clone $det;
            //             $operationdetN->setCreated(new \Datetime('now')); 
            //             $operationdetN->setuserCreated($this->getUser()); 
            //             $operationdetN->setSynFlag(0); 
            //             // $operationdetN->setMontant($det->getMontant()); 
            //             // $operationdetN->setMontant(-1 * $det->getMontant()); 


            // // if ($operationcab->getOrganisme() == 'Payant' ) {
            // //     $org = $this->em->getRepository(POrganisme::class)->find(7);
            // // }else {
            // //     $org = $this->em->getRepository(POrganisme::class)->find(1);
            // // }
            // // $operationDet->setOrganisme($this->em->getRepository(POrganisme::class)->find($request->get('organisme_id')));
            // // $operationDet->setOrganisme($org);
            //             $operationdetN->setOrganisme($this->em->getRepository(POrganisme::class)->find(1));
            //             $operationdetN->setOperationcab($operationcabN); 

            //             $this->em->persist($operationdetN);
            //             $this->em->flush();

            //             $operationdetN->setCode(
            //                 "OPD".str_pad($operationdetN->getId(), 8, '0', STR_PAD_LEFT)
            //             );
            //             $this->em->flush();
            //             $total += $det->getMontant();
            //         }
            //     }
            $counter++;
        }

        return new JsonResponse($counter . ' Facture Bien Crée', 200);
        return new JsonResponse('Montant Total: ' . $total . ' Pour ' . $counter . ' Facture Bien Crée', 200);
    }


    #[Route('/getFacturePec/{id}', name: 'getFacturePec')]
    public function getFacturePec(Request $request, TOperationcab $facture): Response
    {

        $pecs = $this->em->getRepository(Pec::class)->findBy(['active' => 1], ['designation' => 'ASC']);
        $html =  $this->render('facture/pages/pec.html.twig', [
            'facture' => $facture,
            'pecs' => $pecs,
        ])->getContent();
        return new JsonResponse($html, 200);
    }


    #[Route('/ajouter_pec/{id}', name: 'ajouter_pec')]
    public function ajouter_pec(Request $request, TOperationcab $operationcab): Response
    {
        if ($request->get('n-pec') == "" or $request->get('n-pec') == "") {
            return new JsonResponse('Veuillez renseigner tous les champs!', 500);
        }
        $operationcab->setPec($this->em->getRepository(Pec::class)->find($request->get('pec')));
        $operationcab->setNPec($request->get('n-pec'));
        $this->em->flush();
        return new JsonResponse('Pec Bien Ajouter!', 200);
    }
}
