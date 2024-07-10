<?php

namespace App\Controller\Parametre;

use App\Controller\ApiController;
use App\Entity\TInscription;
use App\Entity\Users;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('parametre/synchronisation')]
class SynchronisationController extends AbstractController
{
    private $em;
    private $api_univ;

    public function __construct(ManagerRegistry $doctrine, ApiController $api)
    {
        $this->em = $doctrine->getManager();
        $this->api = $api;
        $this->api_univ = HttpClient::create();
        ini_set('max_execution_time', 6000);
    }
    #[Route('/', name: 'parametre_Synchronisation', options: ['expose' => true])]
    public function synchronisation(Request $request): Response
    {
        // dd(ini_get('max_execution_time'));
        $operations = $this->api->check($this->getUser(), 'parametre_Synchronisation', $this->em, $request);
        if (!$operations) {
            return new AccessDeniedException();
        }
        return $this->render('parametre/synchronisation/synchronisation.html.twig', [
            'operations' => $operations,
        ]);
    }
    #[Route('/api_etablissement', name: 'api_etablissement', options: ['expose' => true])]
    public function api_etablissement()
    {
        // dd('test');
        // return $this->InsertOrUpdateMydatabase('ac_etablissement','etablissement');
        // // return new JsonResponse('Erreur de connection..!!',500);
        try {
            return $this->InsertOrUpdateMydatabase('ac_etablissement', 'etablissement');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_formation', name: 'api_formation', options: ['expose' => true])]
    public function api_formation()
    {
        // dd('tt');
        // return $this->InsertOrUpdateMydatabase('ac_formation', 'formation');
        try {
            return $this->InsertOrUpdateMydatabase('ac_formation', 'formation');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_annee', name: 'api_annee', options: ['expose' => true])]
    public function api_annee()
    {
        // return $this->InsertOrUpdateMydatabase('ac_annee', 'annee');
        try {
            return $this->InsertOrUpdateMydatabase('ac_annee', 'annee');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_promotion', name: 'api_promotion', options: ['expose' => true])]
    public function api_promotion()
    {
        // return $this->InsertOrUpdateMydatabase('ac_promotion', 'promotion');
        try {
            return $this->InsertOrUpdateMydatabase('ac_promotion', 'promotion');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_semestre', name: 'api_semestre', options: ['expose' => true])]
    public function api_semestre()
    {
        try {
            return $this->InsertOrUpdateMydatabase('ac_semestre', 'semestre');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_organisme', name: 'api_organisme', options: ['expose' => true])]
    public function api_organisme()
    {
        // return $this->InsertOrUpdateMydatabase('porganisme', 'organisme');
        try {
            return $this->InsertOrUpdateMydatabase('porganisme', 'organisme');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_banque', name: 'api_banque', options: ['expose' => true])]
    public function api_banque()
    {
        // return $this->InsertOrUpdateMydatabase('xbanque', 'banque');
        try {
            return $this->InsertOrUpdateMydatabase('xbanque', 'banque');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_modalite', name: 'api_modalite', options: ['expose' => true])]
    public function api_modalite()
    {
        try {
            return $this->InsertOrUpdateMydatabase('xmodalites', 'modalite');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_naturedemande', name: 'api_naturedemande', options: ['expose' => true])]
    public function api_naturedemande()
    {
        try {
            return $this->InsertOrUpdateMydatabase('nature_demande', 'naturedemande');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_etudiant', name: 'api_etudiant', options: ['expose' => true])]
    public function api_etudiant()
    {
        // dd('test');
        // return $this->InsertOrUpdateMydatabase('tetudiant','etudiant');
        try {
            return $this->InsertOrUpdateMydatabase('tetudiant', 'etudiant');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_preinscription', name: 'api_preinscription', options: ['expose' => true])]
    public function api_preinscription()
    {
        // return $this->InsertOrUpdateMydatabase('tpreinscription', 'preinscription');
        try {
            return $this->InsertOrUpdateMydatabase('tpreinscription', 'preinscription');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_admission', name: 'api_admission', options: ['expose' => true])]
    public function api_admission()
    {
        // return $this->InsertOrUpdateMydatabase('tadmission', 'admission');
        try {
            return $this->InsertOrUpdateMydatabase('tadmission', 'admission');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_statut', name: 'api_statut', options: ['expose' => true])]
    public function api_statut()
    {
        try {
            return $this->InsertOrUpdateMydatabase('pstatut', 'statut');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_groupe', name: 'api_groupe', options: ['expose' => true])]
    public function api_groupe()
    {
        // return $this->InsertOrUpdateMydatabase('pgroupe','groupe');
        try {
            return $this->InsertOrUpdateMydatabase('pgroupe', 'groupe');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }
    #[Route('/api_inscription', name: 'api_inscription', options: ['expose' => true])]
    public function api_inscription()
    {
        // return $this->InsertOrUpdateMydatabase('tinscription','inscription');
        try {
            return $this->InsertOrUpdateMydatabase('tinscription', 'inscription');
        } catch (\Throwable $th) {
            return new JsonResponse('Erreur de connection..!!', 500);
        }
    }

    public function InsertOrUpdateMydatabase($table, $link)
    {
        $from_id = 0;
        // dd($this->getParameter('api_univ') . $link . '/' . $from_id);
        $responseUNiv = $this->api_univ->request('GET', $this->getParameter('api_univ') . $link . '/' . $from_id);
        $arraydata = $responseUNiv->toArray();
        // dd($arraydata);
        // dd($this->getParameter('api_univ').$link.'/'.$from_id);
        $newRow = 0;
        $updatedRow = 0;
        foreach ($arraydata as $data) {
            $query = "select * from " . $table . " where id = " . $data['id'] . " limit 1";
            $current_row = $this->selectQuery($query);
            if ($current_row) {
                $commonKeys = array_intersect_key($data, $current_row);
                $data = array_intersect_key($data, $commonKeys);
                $current_row = array_intersect_key($current_row, $commonKeys);
                $differences = array_diff_assoc($data, $current_row);
                if ($differences) {
                    $updated = $this->makeUpdateQuery($data, $table);
                    // dd($data, $current_row);
                    // dd($data, $current_row);
                    // $updated = $this->selectQuery($updatequery);
                    // dd('test');
                    if ($updated) {
                        // dd($data, $current_row);
                        $updatedRow++;
                    }
                }
                
                // dd('$data, $current_row');
            } else {
                // dd($data);
                $inserted = $this->makeInsertQuery($data, $table);
                if ($inserted) {
                    $newRow++;
                }
            }
        }
        return new JsonResponse(['newRow' => $newRow, 'updated' => $updatedRow], 200);
    }

    function makeUpdateQuery($dataArray, $table)
    {
        // Assuming you have a common key to identify the rows (e.g., 'id')
        $commonKey = 'id';

        $commonKeyValue = $dataArray[$commonKey];

        // Build the SET part of the SQL query
        $setClause = [];
        foreach ($dataArray as $key => $value) {
            // Skip the common key
            if ($key !== $commonKey) {
                if ($value == null) {
                    $setClause[] = "`$key` = " . (is_numeric($value) ? "'".$value."'" : "null");
                    // dd($setClause);
                } else {
                    $value = str_contains($value, "'") ? str_replace("'", "\'", $value) : $value; 
                    // $setClause[] = "`$key` = " . (is_numeric($value) ? "'".$value."'" : '"' . $value . '"');
                    $setClause[] = "`$key` = '".$value."'";
                }
            }
        }
        // dump($setClause);

        // Combine the SET clause into a string
        $setClauseString = implode(', ', $setClause);
        // Build the SQL query for the specific row
        $sql = "UPDATE $table SET $setClauseString WHERE $commonKey = $commonKeyValue";
        // dd($sql);
        $stmt = $this->em->getConnection()->prepare($sql);
        // dd('done');
        $stmt->executeQuery();
        return true;
    }
    function makeInsertQuery($data, $table)
    {
        $keys = array_keys($data);
        $values = array_values($data);

        $insertClause = [];
        // Quote string values and leave numeric values unquoted
        foreach ($values as $key => $value) {
            // $insertClause[] = "`$key` = " . (is_numeric($value) ? $value : '"'.$value.'"');
            // dd($values);
            if (!is_numeric($value)) {
                $value = $value == null ? "null" : '"' . $value . '"';
                $values[$key] = $value;
            }
        }
        // dd(implode(', ', $values));
        // Build the SQL query dynamically
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(', ', $keys),
            implode(', ', $values)
        );
        // dd($sql);
        $stmt = $this->em->getConnection()->prepare($sql);
        $stmt->executeQuery();
        // dd('done');
        return true;
    }

    public function selectQuery($sqlRequest)
    {
        $stmt = $this->em->getConnection()->prepare($sqlRequest);
        return $stmt->executeQuery()->fetch();
        // return $stmt
    }
}
