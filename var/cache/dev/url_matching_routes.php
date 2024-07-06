<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/etablissement' => [[['_route' => 'getetablissement', '_controller' => 'App\\Controller\\ApiController::getetbalissement'], null, null, null, false, false, null]],
        '/api/nature_demande' => [[['_route' => 'nature_demande', '_controller' => 'App\\Controller\\ApiController::getnature_demande'], null, null, null, false, false, null]],
        '/api/organisme' => [[['_route' => 'getorganisme', '_controller' => 'App\\Controller\\ApiController::getOrganisme'], null, null, null, false, false, null]],
        '/api/getorganismepasPayant' => [[['_route' => 'getorganismepasPayant', '_controller' => 'App\\Controller\\ApiController::getOrganismepasPayant'], null, null, null, false, false, null]],
        '/api/banque' => [[['_route' => 'getbanque', '_controller' => 'App\\Controller\\ApiController::getbanque'], null, null, null, false, false, null]],
        '/api/paiement' => [[['_route' => 'getpaiement', '_controller' => 'App\\Controller\\ApiController::getpaiement'], null, null, null, false, false, null]],
        '/etudiant/appel' => [[['_route' => 'centre_appel_index', '_controller' => 'App\\Controller\\Etudiant\\CentreDappelController::index'], null, null, null, true, false, null]],
        '/etudiant/appel/list' => [[['_route' => 'appel_list', '_controller' => 'App\\Controller\\Etudiant\\CentreDappelController::list'], null, null, null, false, false, null]],
        '/etudiant/appel/extraction_appels' => [[['_route' => 'extraction_appels', '_controller' => 'App\\Controller\\Etudiant\\CentreDappelController::extraction_appels'], null, null, null, false, false, null]],
        '/etudiant/etudiants' => [[['_route' => 'etudiant_index', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::index'], null, null, null, true, false, null]],
        '/etudiant/etudiants/list' => [[['_route' => 'etudiant_list', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::list'], null, null, null, false, false, null]],
        '/etudiant/etudiants/import' => [[['_route' => 'etudiant_import', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::etudiantImport'], null, null, null, false, false, null]],
        '/etudiant/etudiants/download' => [[['_route' => 'etudiant_exist', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::download'], null, null, null, false, false, null]],
        '/etudiant/etudiants/add_infos' => [[['_route' => 'add_infos', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::add_infos'], null, null, null, false, false, null]],
        '/etudiant/rechercheavance' => [[['_route' => 'etudiant_recherche_avance', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::index'], null, null, null, true, false, null]],
        '/etudiant/rechercheavance/find' => [[['_route' => 'etudiant_recherche_avance_find', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::find'], null, null, null, false, false, null]],
        '/facture/bordereau' => [[['_route' => 'gestion_bordereaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::index'], null, null, null, true, false, null]],
        '/facture/bordereau/list' => [[['_route' => 'list_facture_borderaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::list_facture_borderaux'], null, null, null, false, false, null]],
        '/facture/factures' => [[['_route' => 'gestion_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::index'], null, null, null, true, false, null]],
        '/facture/factures/list' => [[['_route' => 'list_facture_factures', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::list_facture_factures'], null, null, null, false, false, null]],
        '/facture/factures/extraction_factures' => [[['_route' => 'extraction_factures', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::extraction_factures'], null, null, null, false, false, null]],
        '/facture/factures/valider' => [[['_route' => 'valider_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::valider_facture'], null, null, null, false, false, null]],
        '/facture/factures/new_fac_organisme' => [[['_route' => 'new_fac_organisme', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::new_fac_organisme'], null, null, null, false, false, null]],
        '/facture/factures/new_fac_payant' => [[['_route' => 'new_fac_payant', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::new_fac_payant'], null, null, null, false, false, null]],
        '/facture/factures/facturation_reinscription' => [[['_route' => 'facturation_reinscription', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::facturation_reinscription'], null, null, null, false, false, null]],
        '/facture/factures/canvas' => [[['_route' => 'facture_canvas', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::facturationCanvas'], null, null, null, false, false, null]],
        '/facture/factures/ouverture_facture' => [[['_route' => 'ouverture_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::ouverture_facture'], null, null, null, false, false, null]],
        '/facture/factures/facturationAvoirEnMasse' => [[['_route' => 'facturationAvoirEnMasse', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::facturationAvoirEnMasse'], null, null, null, false, false, null]],
        '/facture/reglements' => [[['_route' => 'gestion_reglements', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::index'], null, null, null, true, false, null]],
        '/facture/reglements/list' => [[['_route' => 'list_facture_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::list_facture_reglement'], null, null, null, false, false, null]],
        '/facture/reglements/creanceprint' => [[['_route' => 'creanceprint', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::creanceprint'], null, null, null, false, false, null]],
        '/facture/reglements/extraction_reglement' => [[['_route' => 'extraction_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::extraction_reglement'], null, null, null, false, false, null]],
        '/facture/reglements/annuler_temp' => [[['_route' => 'annuler_temp', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::annuler_temp'], null, null, null, false, false, null]],
        '/administrateur/synchronisation/synchronisation' => [[['_route' => 'synchronisation', '_controller' => 'App\\Controller\\Administrateur\\SynchronisationController::synchronisation'], null, null, null, false, false, null]],
        '/administrateur/synchronisation/api_compte' => [[['_route' => 'api_compte', '_controller' => 'App\\Controller\\Administrateur\\SynchronisationController::api_compte'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/facturaction/inscription' => [[['_route' => 'gestion_inscription', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::index'], null, null, null, true, false, null]],
        '/facturaction/inscription/list' => [[['_route' => 'gestion_inscription_list', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::gestionInscriptionList'], null, null, null, false, false, null]],
        '/facturaction/inscription/extraction_ins' => [[['_route' => 'extraction_ins', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::extraction_ins'], null, null, null, false, false, null]],
        '/parametre/academie' => [[['_route' => 'parametre_academie', '_controller' => 'App\\Controller\\Parametre\\AcademieController::index'], null, null, null, true, false, null]],
        '/parametre/academie/list' => [[['_route' => 'parametre_academie_list', '_controller' => 'App\\Controller\\Parametre\\AcademieController::list'], null, null, null, false, false, null]],
        '/parametre/academie/new' => [[['_route' => 'parametre_academie_new', '_controller' => 'App\\Controller\\Parametre\\AcademieController::new'], null, null, null, false, false, null]],
        '/parametre/annee' => [[['_route' => 'parametre_annee', '_controller' => 'App\\Controller\\Parametre\\AnneeController::index'], null, null, null, true, false, null]],
        '/parametre/annee/list' => [[['_route' => 'parametre_annee_list', '_controller' => 'App\\Controller\\Parametre\\AnneeController::list'], null, null, null, false, false, null]],
        '/parametre/annee/new' => [[['_route' => 'parametre_annee_new', '_controller' => 'App\\Controller\\Parametre\\AnneeController::new'], null, null, null, false, false, null]],
        '/parametre/banque' => [[['_route' => 'parametre_banque', '_controller' => 'App\\Controller\\Parametre\\BanqueController::index'], null, null, null, true, false, null]],
        '/parametre/banque/list' => [[['_route' => 'parametre_banque_list', '_controller' => 'App\\Controller\\Parametre\\BanqueController::list'], null, null, null, false, false, null]],
        '/parametre/banque/new' => [[['_route' => 'parametre_banque_new', '_controller' => 'App\\Controller\\Parametre\\BanqueController::new'], null, null, null, false, false, null]],
        '/parametre/chambre' => [[['_route' => 'parametre_chambre', '_controller' => 'App\\Controller\\Parametre\\ChambreController::index'], null, null, null, true, false, null]],
        '/parametre/chambre/list' => [[['_route' => 'parametre_chambre_list', '_controller' => 'App\\Controller\\Parametre\\ChambreController::list'], null, null, null, false, false, null]],
        '/parametre/chambre/new' => [[['_route' => 'parametre_chambre_new', '_controller' => 'App\\Controller\\Parametre\\ChambreController::new'], null, null, null, false, false, null]],
        '/parametre/departement' => [[['_route' => 'parametre_departement', '_controller' => 'App\\Controller\\Parametre\\DepartementController::index'], null, null, null, true, false, null]],
        '/parametre/departement/list' => [[['_route' => 'parametre_departement_list', '_controller' => 'App\\Controller\\Parametre\\DepartementController::list'], null, null, null, false, false, null]],
        '/parametre/departement/new' => [[['_route' => 'parametre_departement_new', '_controller' => 'App\\Controller\\Parametre\\DepartementController::new'], null, null, null, false, false, null]],
        '/parametre/element' => [[['_route' => 'parametre_element', '_controller' => 'App\\Controller\\Parametre\\ElementController::index'], null, null, null, true, false, null]],
        '/parametre/element/list' => [[['_route' => 'parametre_element_list', '_controller' => 'App\\Controller\\Parametre\\ElementController::list'], null, null, null, false, false, null]],
        '/parametre/element/new' => [[['_route' => 'parametre_element_new', '_controller' => 'App\\Controller\\Parametre\\ElementController::new'], null, null, null, false, false, null]],
        '/parametre/element/extraction_architecture' => [[['_route' => 'extraction_architecture', '_controller' => 'App\\Controller\\Parametre\\ElementController::extraction_architecture'], null, null, null, false, false, null]],
        '/parametre/enseignant' => [[['_route' => 'parametre_enseignant', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::index'], null, null, null, true, false, null]],
        '/parametre/enseignant/list' => [[['_route' => 'parametre_enseignant_list', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::list'], null, null, null, false, false, null]],
        '/parametre/enseignant/new' => [[['_route' => 'parametre_enseignant_news', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::new'], null, null, null, false, false, null]],
        '/parametre/enseignant/extraction' => [[['_route' => 'parametre_enseignant_extraction', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::extraction'], null, null, null, false, false, null]],
        '/parametre/enseignantexcept' => [[['_route' => 'parametre_enseignantexcept', '_controller' => 'App\\Controller\\Parametre\\EnseignantExceptController::index'], null, null, null, true, false, null]],
        '/parametre/enseignantexcept/list' => [[['_route' => 'parametre_enseignantexcept_list', '_controller' => 'App\\Controller\\Parametre\\EnseignantExceptController::list'], null, null, null, false, false, null]],
        '/parametre/enseignantexcept/new' => [[['_route' => 'parametre_enseignantexcept_new', '_controller' => 'App\\Controller\\Parametre\\EnseignantExceptController::new'], null, null, null, false, false, null]],
        '/parametre/enseignantexcept/delete' => [[['_route' => 'parametre_enseignantexcept_delete', '_controller' => 'App\\Controller\\Parametre\\EnseignantExceptController::delete'], null, null, null, false, false, null]],
        '/parametre/etage' => [[['_route' => 'parametre_etage', '_controller' => 'App\\Controller\\Parametre\\EtageController::index'], null, null, null, true, false, null]],
        '/parametre/etage/list' => [[['_route' => 'parametre_etage_list', '_controller' => 'App\\Controller\\Parametre\\EtageController::list'], null, null, null, false, false, null]],
        '/parametre/etage/new' => [[['_route' => 'parametre_etage_new', '_controller' => 'App\\Controller\\Parametre\\EtageController::new'], null, null, null, false, false, null]],
        '/parametre/filiere' => [[['_route' => 'parametre_filiere', '_controller' => 'App\\Controller\\Parametre\\FiliereController::index'], null, null, null, true, false, null]],
        '/parametre/filiere/list' => [[['_route' => 'parametre_filiere_list', '_controller' => 'App\\Controller\\Parametre\\FiliereController::list'], null, null, null, false, false, null]],
        '/parametre/filiere/new' => [[['_route' => 'parametre_filiere_new', '_controller' => 'App\\Controller\\Parametre\\FiliereController::new'], null, null, null, false, false, null]],
        '/parametre/frais' => [[['_route' => 'parametre_frais', '_controller' => 'App\\Controller\\Parametre\\FraisController::index'], null, null, null, true, false, null]],
        '/parametre/frais/list' => [[['_route' => 'parametre_frais_list', '_controller' => 'App\\Controller\\Parametre\\FraisController::list'], null, null, null, false, false, null]],
        '/parametre/frais/new' => [[['_route' => 'parametre_frais_new', '_controller' => 'App\\Controller\\Parametre\\FraisController::new'], null, null, null, false, false, null]],
        '/parametre/frais/ExtractionFrais' => [[['_route' => 'extraction_frais', '_controller' => 'App\\Controller\\Parametre\\FraisController::extraction_frais'], null, null, null, false, false, null]],
        '/parametre/langues' => [[['_route' => 'parametre_langues', '_controller' => 'App\\Controller\\Parametre\\LanguesController::index'], null, null, null, true, false, null]],
        '/parametre/langues/list' => [[['_route' => 'parametre_langue_list', '_controller' => 'App\\Controller\\Parametre\\LanguesController::list'], null, null, null, false, false, null]],
        '/parametre/langues/new' => [[['_route' => 'parametre_langue_new', '_controller' => 'App\\Controller\\Parametre\\LanguesController::new'], null, null, null, false, false, null]],
        '/parametre/modalites' => [[['_route' => 'parametre_modalites', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::index'], null, null, null, true, false, null]],
        '/parametre/modalites/list' => [[['_route' => 'parametre_modalites_list', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::list'], null, null, null, false, false, null]],
        '/parametre/modalites/new' => [[['_route' => 'parametre_modalites_new', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::new'], null, null, null, false, false, null]],
        '/parametre/module' => [[['_route' => 'parametre_module', '_controller' => 'App\\Controller\\Parametre\\ModuleController::index'], null, null, null, true, false, null]],
        '/parametre/module/list' => [[['_route' => 'parametre_module_list', '_controller' => 'App\\Controller\\Parametre\\ModuleController::list'], null, null, null, false, false, null]],
        '/parametre/module/new' => [[['_route' => 'parametre_module_new', '_controller' => 'App\\Controller\\Parametre\\ModuleController::new'], null, null, null, false, false, null]],
        '/parametre/programmation' => [[['_route' => 'parametre_programmation', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::index'], null, null, null, true, false, null]],
        '/parametre/programmation/list' => [[['_route' => 'parametre_programmation_list', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::list'], null, null, null, false, false, null]],
        '/parametre/programmation/new' => [[['_route' => 'parametre_programmation_new', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::new'], null, null, null, false, false, null]],
        '/parametre/programmation/delete' => [[['_route' => 'parametre_programmation_delete', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::delete'], null, null, null, false, false, null]],
        '/parametre/programmation/duplication' => [[['_route' => 'parametre_programmation_duplication', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::duplication'], null, null, null, false, false, null]],
        '/parametre/salles' => [[['_route' => 'parametre_salles', '_controller' => 'App\\Controller\\Parametre\\SallesController::index'], null, null, null, true, false, null]],
        '/parametre/salles/list' => [[['_route' => 'parametre_salles_list', '_controller' => 'App\\Controller\\Parametre\\SallesController::list'], null, null, null, false, false, null]],
        '/parametre/salles/new' => [[['_route' => 'parametre_salle_new', '_controller' => 'App\\Controller\\Parametre\\SallesController::new'], null, null, null, false, false, null]],
        '/parametre/salles/extraction' => [[['_route' => 'parametre_salle_extraction', '_controller' => 'App\\Controller\\Parametre\\SallesController::extraction'], null, null, null, false, false, null]],
        '/parametre/semaines' => [[['_route' => 'parametre_semaines', '_controller' => 'App\\Controller\\Parametre\\SemainesController::index'], null, null, null, true, false, null]],
        '/parametre/semaines/list' => [[['_route' => 'parametre_semaines_list', '_controller' => 'App\\Controller\\Parametre\\SemainesController::list'], null, null, null, false, false, null]],
        '/parametre/semaines/duplication' => [[['_route' => 'parametre_semaine_duplication', '_controller' => 'App\\Controller\\Parametre\\SemainesController::duplication'], null, null, null, false, false, null]],
        '/parametre/semaines/extractionSemaine' => [[['_route' => 'parametre_semaine_extraction', '_controller' => 'App\\Controller\\Parametre\\SemainesController::extractionSemaine'], null, null, null, false, false, null]],
        '/parametre/semestre' => [[['_route' => 'parametre_semestre', '_controller' => 'App\\Controller\\Parametre\\SemestreController::index'], null, null, null, true, false, null]],
        '/parametre/semestre/list' => [[['_route' => 'parametre_semestre_list', '_controller' => 'App\\Controller\\Parametre\\SemestreController::list'], null, null, null, false, false, null]],
        '/parametre/semestre/new' => [[['_route' => 'parametre_semestre_new', '_controller' => 'App\\Controller\\Parametre\\SemestreController::new'], null, null, null, false, false, null]],
        '/parametre/seriebac' => [[['_route' => 'parametre_seriebac', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::index'], null, null, null, true, false, null]],
        '/parametre/seriebac/list' => [[['_route' => 'parametre_seriebac_list', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::list'], null, null, null, false, false, null]],
        '/parametre/seriebac/new' => [[['_route' => 'parametre_seriebac_new', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::new'], null, null, null, false, false, null]],
        '/parametre/synchronisation' => [[['_route' => 'parametre_Synchronisation', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::synchronisation'], null, null, null, true, false, null]],
        '/parametre/synchronisation/api_etablissement' => [[['_route' => 'api_etablissement', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_etablissement'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_formation' => [[['_route' => 'api_formation', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_formation'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_annee' => [[['_route' => 'api_annee', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_annee'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_promotion' => [[['_route' => 'api_promotion', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_promotion'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_semestre' => [[['_route' => 'api_semestre', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_semestre'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_etudiant' => [[['_route' => 'api_etudiant', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_etudiant'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_preinscription' => [[['_route' => 'api_preinscription', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_preinscription'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_admission' => [[['_route' => 'api_admission', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_admission'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_statut' => [[['_route' => 'api_statut', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_statut'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_groupe' => [[['_route' => 'api_groupe', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_groupe'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_inscription' => [[['_route' => 'api_inscription', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_inscription'], null, null, null, false, false, null]],
        '/parametre/typebac' => [[['_route' => 'parametre_typebac', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::index'], null, null, null, true, false, null]],
        '/parametre/typebac/list' => [[['_route' => 'parametre_typebac_list', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::list'], null, null, null, false, false, null]],
        '/parametre/typebac/new' => [[['_route' => 'parametre_typebac_new', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::new'], null, null, null, false, false, null]],
        '/parametre/user' => [[['_route' => 'parametre_user', '_controller' => 'App\\Controller\\Parametre\\UserController::index'], null, null, null, true, false, null]],
        '/parametre/user/list' => [[['_route' => 'parametre_user_list', '_controller' => 'App\\Controller\\Parametre\\UserController::gestionInscriptionList'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/passwordchange' => [[['_route' => 'app_passwordchange', '_controller' => 'App\\Controller\\SecurityController::passwordchange'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/api/(?'
                    .'|f(?'
                        .'|ormation(?'
                            .'|/([^/]++)(*:200)'
                            .'|AndanneeOuverte/([^/]++)(*:232)'
                        .')'
                        .'|rais/([^/]++)(*:254)'
                    .')'
                    .'|annee(?'
                        .'|/([^/]++)(*:280)'
                        .'|residanat/([^/]++)(*:306)'
                    .')'
                    .'|semestre/([^/]++)(*:332)'
                    .'|etage/([^/]++)(*:354)'
                    .'|nature_etudiant/([^/]++)(*:386)'
                .')'
                .'|/etudiant/(?'
                    .'|appel/(?'
                        .'|getAppelRdv_appel/([^/]++)(*:443)'
                        .'|rdvappel/([^/]++)(*:468)'
                    .')'
                    .'|etudiants/(?'
                        .'|e(?'
                            .'|tudiant_valider/([^/]++)(*:518)'
                            .'|dit_infos/([^/]++)(*:544)'
                        .')'
                        .'|list/preinscription/([^/]++)(*:581)'
                        .'|matiere/(?'
                            .'|([^/]++)(*:608)'
                            .'|delete/([^/]++)(*:631)'
                        .')'
                        .'|addmatiere/([^/]++)(*:659)'
                        .'|get(?'
                            .'|AppelRdv/([^/]++)(*:690)'
                            .'|EtudiantInfos/([^/]++)(*:720)'
                        .')'
                        .'|datedernierappel/([^/]++)(*:754)'
                        .'|statut/(?'
                            .'|([^/]++)(*:780)'
                            .'|persist/([^/]++)(*:804)'
                        .')'
                    .')'
                    .'|rechercheavance/(?'
                        .'|findAnnee/([^/]++)(*:851)'
                        .'|recherche/([^/]++)(*:877)'
                        .'|a(?'
                            .'|ttestation/(?'
                                .'|inscription/([^/]++)(*:923)'
                                .'|s(?'
                                    .'|colarite(?'
                                        .'|/([^/]++)(*:955)'
                                        .'|Laz/([^/]++)(*:975)'
                                        .'|Anglais(?'
                                            .'|/([^/]++)(*:1002)'
                                            .'|Laz/([^/]++)(*:1023)'
                                        .')'
                                    .')'
                                    .'|uiviFr/([^/]++)(*:1049)'
                                .')'
                                .'|c(?'
                                    .'|erificat/([^/]++)(*:1080)'
                                    .'|ursus/([^/]++)(*:1103)'
                                .')'
                                .'|re(?'
                                    .'|ussite(?'
                                        .'|/([^/]++)(*:1136)'
                                        .'|All/([^/]++)(*:1157)'
                                        .'|note/([^/]++)(*:1179)'
                                    .')'
                                    .'|leve(?'
                                        .'|/(?'
                                            .'|module/([^/]++)/([^/]++)/([^/]++)(*:1233)'
                                            .'|annee/([^/]++)/([^/]++)(*:1265)'
                                        .')'
                                        .'|All/annee/([^/]++)/([^/]++)(*:1302)'
                                    .')'
                                .')'
                                .'|bonne_conduite/([^/]++)(*:1336)'
                                .'|hebergement/([^/]++)(*:1365)'
                            .')'
                            .'|vc/([^/]++)(*:1386)'
                        .')'
                    .')'
                .')'
                .'|/factur(?'
                    .'|e/(?'
                        .'|bordereau/(?'
                            .'|print_borderaux/([^/]++)(*:1450)'
                            .'|supprimer_borderaux/([^/]++)(*:1487)'
                            .'|extraction_borderaux/([^/]++)(*:1525)'
                        .')'
                        .'|factures/(?'
                            .'|a(?'
                                .'|jouter_(?'
                                    .'|reglement/([^/]++)(*:1579)'
                                    .'|pec/([^/]++)(*:1600)'
                                .')'
                                .'|rticle_frais/([^/]++)(*:1631)'
                                .'|dd_detaille/([^/]++)(*:1660)'
                            .')'
                            .'|get(?'
                                .'|Montant/([^/]++)(*:1692)'
                                .'|FacturePec/([^/]++)(*:1720)'
                            .')'
                            .'|facture/([^/]++)/([^/]++)(*:1755)'
                            .'|printfacture/([^/]++)(*:1785)'
                            .'|releve/([^/]++)(*:1809)'
                            .'|detaille_facture/([^/]++)(*:1843)'
                            .'|cloture_(?'
                                .'|detaille/([^/]++)(*:1880)'
                                .'|all_detaille/([^/]++)(*:1910)'
                            .')'
                            .'|extraction_factures_(?'
                                .'|by_annee/([^/]++)(*:1960)'
                                .'|nonInscrits/([^/]++)(*:1989)'
                            .')'
                        .')'
                        .'|reglements/(?'
                            .'|reglementprint/([^/]++)(*:2037)'
                            .'|borderaux/([^/]++)/([^/]++)(*:2073)'
                            .'|printborderaux/([^/]++)(*:2105)'
                            .'|annuler_reglement/([^/]++)(*:2140)'
                            .'|getReglementInfos/([^/]++)(*:2175)'
                            .'|modifier_reglement/([^/]++)(*:2211)'
                        .')'
                    .')'
                    .'|action/inscription/(?'
                        .'|getstatut/([^/]++)(*:2262)'
                        .'|updatestatut/([^/]++)(*:2292)'
                        .'|f(?'
                            .'|rais/([^/]++)(*:2318)'
                            .'|acture/([^/]++)(*:2342)'
                        .')'
                        .'|info/([^/]++)(*:2365)'
                        .'|addfrais/([^/]++)(*:2391)'
                        .'|extraction_ins_annee/([^/]++)(*:2429)'
                    .')'
                .')'
                .'|/parametre/(?'
                    .'|a(?'
                        .'|cademie/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2488)'
                                .'|lete/([^/]++)(*:2510)'
                            .')'
                            .'|update/([^/]++)(*:2535)'
                        .')'
                        .'|nnee/(?'
                            .'|active_annee/([^/]++)(*:2574)'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2602)'
                                .'|lete/([^/]++)(*:2624)'
                            .')'
                            .'|update/([^/]++)(*:2649)'
                        .')'
                    .')'
                    .'|banque/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:2689)'
                            .'|lete/([^/]++)(*:2711)'
                        .')'
                        .'|update/([^/]++)(*:2736)'
                    .')'
                    .'|chambre/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:2776)'
                            .'|lete/([^/]++)(*:2798)'
                        .')'
                        .'|update/([^/]++)(*:2823)'
                    .')'
                    .'|departement/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:2867)'
                            .'|lete/([^/]++)(*:2889)'
                        .')'
                        .'|update/([^/]++)(*:2914)'
                    .')'
                    .'|e(?'
                        .'|lement/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2957)'
                                .'|lete/([^/]++)(*:2979)'
                            .')'
                            .'|update/([^/]++)(*:3004)'
                        .')'
                        .'|nseignant/(?'
                            .'|de(?'
                                .'|tailles/([^/]++)(*:3048)'
                                .'|lete/([^/]++)(*:3070)'
                            .')'
                            .'|update/([^/]++)(*:3095)'
                        .')'
                        .'|tage/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:3132)'
                                .'|lete/([^/]++)(*:3154)'
                            .')'
                            .'|update/([^/]++)(*:3179)'
                        .')'
                    .')'
                    .'|f(?'
                        .'|iliere/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:3223)'
                                .'|lete/([^/]++)(*:3245)'
                            .')'
                            .'|update/([^/]++)(*:3270)'
                        .')'
                        .'|rais/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:3307)'
                                .'|lete/([^/]++)(*:3329)'
                            .')'
                            .'|update/([^/]++)(*:3354)'
                        .')'
                    .')'
                    .'|langues/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:3395)'
                            .'|lete/([^/]++)(*:3417)'
                        .')'
                        .'|update/([^/]++)(*:3442)'
                    .')'
                    .'|mod(?'
                        .'|alites/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:3487)'
                                .'|lete/([^/]++)(*:3509)'
                            .')'
                            .'|update/([^/]++)(*:3534)'
                        .')'
                        .'|ule/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:3570)'
                                .'|lete/([^/]++)(*:3592)'
                            .')'
                            .'|update/([^/]++)(*:3617)'
                        .')'
                    .')'
                    .'|programmation/(?'
                        .'|details/([^/]++)(*:3661)'
                        .'|update/([^/]++)(*:3685)'
                    .')'
                    .'|s(?'
                        .'|alles/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:3727)'
                                .'|lete/([^/]++)(*:3749)'
                            .')'
                            .'|update/([^/]++)(*:3774)'
                        .')'
                        .'|e(?'
                            .'|mestre/(?'
                                .'|de(?'
                                    .'|tails/([^/]++)(*:3817)'
                                    .'|lete/([^/]++)(*:3839)'
                                .')'
                                .'|update/([^/]++)(*:3864)'
                            .')'
                            .'|riebac/(?'
                                .'|de(?'
                                    .'|tails/([^/]++)(*:3903)'
                                    .'|lete/([^/]++)(*:3925)'
                                .')'
                                .'|update/([^/]++)(*:3950)'
                            .')'
                        .')'
                    .')'
                    .'|typebac/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:3992)'
                            .'|lete/([^/]++)(*:4014)'
                        .')'
                        .'|update/([^/]++)(*:4039)'
                    .')'
                    .'|user/(?'
                        .'|getoperations/([^/]++)(*:4079)'
                        .'|a(?'
                            .'|ll/([^/]++)/([^/]++)(*:4112)'
                            .'|ctive/([^/]++)/([^/]++)(*:4144)'
                        .')'
                        .'|sousmodule/([^/]++)/([^/]++)/([^/]++)(*:4191)'
                        .'|module/([^/]++)/([^/]++)/([^/]++)(*:4233)'
                        .'|operation/([^/]++)/([^/]++)/([^/]++)(*:4278)'
                    .')'
                .')'
                .'|/reinitialiser/([^/]++)(*:4312)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        200 => [[['_route' => 'getformation', '_controller' => 'App\\Controller\\ApiController::getformation'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'formationAndanneeOuverte', '_controller' => 'App\\Controller\\ApiController::formationAndanneeOuverte'], ['formation'], null, null, false, true, null]],
        254 => [[['_route' => 'getFraisByFormation', '_controller' => 'App\\Controller\\ApiController::getFraisByFormation'], ['admission'], null, null, false, true, null]],
        280 => [[['_route' => 'getAnnee', '_controller' => 'App\\Controller\\ApiController::getAnnee'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'anneeResidanat', '_controller' => 'App\\Controller\\ApiController::anneeResidanat'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'getSemestre', '_controller' => 'App\\Controller\\ApiController::getSemestre'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'getPromotion', '_controller' => 'App\\Controller\\ApiController::getEtage'], ['departement'], null, null, false, true, null]],
        386 => [[['_route' => 'getnatureetudiant', '_controller' => 'App\\Controller\\ApiController::getNatureEtudiant'], ['admission'], null, null, false, true, null]],
        443 => [[['_route' => 'getAppelRdv_appel', '_controller' => 'App\\Controller\\Etudiant\\CentreDappelController::getAppelRdv_appel'], ['etudiant'], null, null, false, true, null]],
        468 => [[['_route' => 'rdvappel', '_controller' => 'App\\Controller\\Etudiant\\CentreDappelController::rdvappel'], ['etudiant'], null, null, false, true, null]],
        518 => [[['_route' => 'etudiant_valider', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::etudiant_valider'], ['etudiant'], null, null, false, true, null]],
        544 => [[['_route' => 'edit_infos', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::edit_infos'], ['etudiant'], null, null, false, true, null]],
        581 => [[['_route' => 'list_etudiant_preinscription', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::listPreinscription'], ['etudiant'], null, null, false, true, null]],
        608 => [[['_route' => 'etudiant_exist_matiere', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::getMatiere'], ['etudiant'], null, null, false, true, null]],
        631 => [[['_route' => 'etudiant_remove_matiere', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::removeMatiere'], ['preinscriptionnote'], null, null, false, true, null]],
        659 => [[['_route' => 'etudiant_add_matiere', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::addMatiere'], ['etudiant'], null, null, false, true, null]],
        690 => [[['_route' => 'getAppelRdv', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::getAppelRdv'], ['etudiant'], null, null, false, true, null]],
        720 => [[['_route' => 'getEtudiantInfos', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::getEtudiantInfos'], ['etudiant'], null, null, false, true, null]],
        754 => [[['_route' => 'etudiant_dernier_appele', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::dateDernierAppele'], ['etudiant'], null, null, false, true, null]],
        780 => [[['_route' => 'etudiant_statut', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::statutEtudiant'], ['etudiant'], null, null, false, true, null]],
        804 => [[['_route' => 'etudiant_statut_persist', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::persistStatutEtudiant'], ['etudiant'], null, null, false, true, null]],
        851 => [[['_route' => 'etudiant_recherche_avance_findannee', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::findAnnee'], ['admission'], null, null, false, true, null]],
        877 => [[['_route' => 'etudiant_recherche_avance_recherche', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::recherche'], ['inscription'], null, null, false, true, null]],
        923 => [[['_route' => 'etudiant_recherche_attestation_inscription', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationInscription'], ['inscription'], null, null, false, true, null]],
        955 => [[['_route' => 'etudiant_recherche_attestation_scolarite', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationScolarite'], ['inscription'], null, null, false, true, null]],
        975 => [[['_route' => 'etudiant_recherche_attestation_scolarite_laz', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationScolariteLaz'], ['inscription'], null, null, false, true, null]],
        1002 => [[['_route' => 'etudiant_recherche_attestation_scolarite_anglais', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationScolariteAngalis'], ['inscription'], null, null, false, true, null]],
        1023 => [[['_route' => 'etudiant_recherche_attestation_scolarite_anglais_laz', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationScolariteAngalisLaz'], ['inscription'], null, null, false, true, null]],
        1049 => [[['_route' => 'etudiant_recherche_attestation_suivi', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationSiuvi'], ['inscription'], null, null, false, true, null]],
        1080 => [[['_route' => 'etudiant_recherche_attestation_cerificat', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationcerificat'], ['inscription'], null, null, false, true, null]],
        1103 => [[['_route' => 'etudiant_recherche_attestation_cursus', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestation_cursus'], ['inscription'], null, null, false, true, null]],
        1136 => [[['_route' => 'etudiant_recherche_attestation_reussite', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationReussite'], ['inscription'], null, null, false, true, null]],
        1157 => [[['_route' => 'etudiant_recherche_attestation_reussite_all', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationReussiteAll'], ['inscription'], null, null, false, true, null]],
        1179 => [[['_route' => 'etudiant_recherche_attestation_reussite_note', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationReussiteNote'], ['inscription'], null, null, false, true, null]],
        1233 => [[['_route' => 'etudiant_recherche_releve_module', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationReleveModule'], ['inscription', 'semestre', 'assiduite'], null, null, false, true, null]],
        1265 => [[['_route' => 'etudiant_recherche_releve_annee', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationReleveAnnee'], ['inscription', 'assiduite'], null, null, false, true, null]],
        1302 => [[['_route' => 'etudiant_recherche_releve_annee_all', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestationReleveAllAnnee'], ['inscription', 'assiduite'], null, null, false, true, null]],
        1336 => [[['_route' => 'etudiant_recherche_attestation_bonne_conduite', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestation_bonne_conduite'], ['inscription'], null, null, false, true, null]],
        1365 => [[['_route' => 'etudiant_recherche_attestation_hebergement', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::attestation_hebergement'], ['inscription'], null, null, false, true, null]],
        1386 => [[['_route' => 'etudiant_recherche_attestation_avc', '_controller' => 'App\\Controller\\Etudiant\\RechercheAvanceController::evaluationAnneeAvc'], ['inscription'], null, null, false, true, null]],
        1450 => [[['_route' => 'print_borderaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::printborderaux'], ['borderaux'], null, null, false, true, null]],
        1487 => [[['_route' => 'supprimer_borderau', '_controller' => 'App\\Controller\\Facture\\BordereauController::supprimerborderau'], ['bordereau'], null, null, false, true, null]],
        1525 => [[['_route' => 'extraction_borderaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::extraction_borderaux'], ['bordereau'], null, null, false, true, null]],
        1579 => [[['_route' => 'facture_ajouter_reglement', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::ajouter_reglement'], ['id'], null, null, false, true, null]],
        1600 => [[['_route' => 'ajouter_pec', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::ajouter_pec'], ['id'], null, null, false, true, null]],
        1631 => [[['_route' => 'article_frais_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::article_frais'], ['id'], null, null, false, true, null]],
        1660 => [[['_route' => 'add_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::add_detaille'], ['id'], null, null, false, true, null]],
        1692 => [[['_route' => 'getMontant', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::getMontant'], ['id'], null, null, false, true, null]],
        1720 => [[['_route' => 'getFacturePec', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::getFacturePec'], ['id'], null, null, false, true, null]],
        1755 => [[['_route' => 'imprimer_facture_reglement', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimer_facture_reglement'], ['operationcab', 'reglement'], null, null, false, true, null]],
        1785 => [[['_route' => 'imprimerfacture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimerfacture'], ['operationcab'], null, null, false, true, null]],
        1809 => [[['_route' => 'imprimerreleve', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimerreleve'], ['operationcab'], null, null, false, true, null]],
        1843 => [[['_route' => 'detaille_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::detaille_facture'], ['id'], null, null, false, true, null]],
        1880 => [[['_route' => 'cloture_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::cloture_detaille'], ['id'], null, null, false, true, null]],
        1910 => [[['_route' => 'cloture_all_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::cloture_all_detaille'], ['id'], null, null, false, true, null]],
        1960 => [[['_route' => 'extraction_factures_by_annee', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::extraction_factures_by_annee'], ['annee'], null, null, false, true, null]],
        1989 => [[['_route' => 'extraction_factures_nonInscrits', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::extraction_factures_nonInscrits'], ['annee'], null, null, false, true, null]],
        2037 => [[['_route' => 'imprimer_reglement_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::imprimer_reglement_reglement'], ['reglement'], null, null, false, true, null]],
        2073 => [[['_route' => 'reglement_borderaux', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::reglement_borderaux'], ['formation', 'paiement'], null, null, false, true, null]],
        2105 => [[['_route' => 'printborderaux', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::printborderaux'], ['borderaux'], null, null, false, true, null]],
        2140 => [[['_route' => 'annuler_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::annuler_reglement'], ['reglement'], null, null, false, true, null]],
        2175 => [[['_route' => 'getReglementInfos', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::getReglementInfos'], ['reglement'], null, null, false, true, null]],
        2211 => [[['_route' => 'modifier_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::ajouter_reglement'], ['id'], null, null, false, true, null]],
        2262 => [[['_route' => 'gestion_statut', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::inscriptionStatut'], ['inscription'], null, null, false, true, null]],
        2292 => [[['_route' => 'gestion_statut_update', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::inscriptionStatutUpdate'], ['inscription'], null, null, false, true, null]],
        2318 => [[['_route' => 'getFraisByInscription', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::getFraisByInscription'], ['inscription'], null, null, false, true, null]],
        2342 => [[['_route' => 'inscription_facture', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::factureInscription'], ['operationcab'], null, null, false, true, null]],
        2365 => [[['_route' => 'getInformationByInscription', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::getFraisByFormation'], ['inscription'], null, null, false, true, null]],
        2391 => [[['_route' => 'inscription_addfrais', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::inscriptionAddFrais'], ['inscription'], null, null, false, true, null]],
        2429 => [[['_route' => 'extraction_ins_annee', '_controller' => 'App\\Controller\\Inscription\\GestionInscriptionController::extraction_ins_annee'], ['annee'], null, null, false, true, null]],
        2488 => [[['_route' => 'parametre_academie_details', '_controller' => 'App\\Controller\\Parametre\\AcademieController::details'], ['academie'], null, null, false, true, null]],
        2510 => [[['_route' => 'parametre_academie_delete', '_controller' => 'App\\Controller\\Parametre\\AcademieController::delete'], ['academie'], null, null, false, true, null]],
        2535 => [[['_route' => 'parametre_academie_update', '_controller' => 'App\\Controller\\Parametre\\AcademieController::update'], ['academie'], null, null, false, true, null]],
        2574 => [[['_route' => 'parametre_active_annee', '_controller' => 'App\\Controller\\Parametre\\AnneeController::parametre_active_annee'], ['annee'], null, null, false, true, null]],
        2602 => [[['_route' => 'parametre_annee_details', '_controller' => 'App\\Controller\\Parametre\\AnneeController::details'], ['annee'], null, null, false, true, null]],
        2624 => [[['_route' => 'parametre_annee_delete', '_controller' => 'App\\Controller\\Parametre\\AnneeController::delete'], ['annee'], null, null, false, true, null]],
        2649 => [[['_route' => 'parametre_annee_update', '_controller' => 'App\\Controller\\Parametre\\AnneeController::update'], ['annee'], null, null, false, true, null]],
        2689 => [[['_route' => 'parametre_banque_details', '_controller' => 'App\\Controller\\Parametre\\BanqueController::details'], ['banque'], null, null, false, true, null]],
        2711 => [[['_route' => 'parametre_banque_delete', '_controller' => 'App\\Controller\\Parametre\\BanqueController::delete'], ['banque'], null, null, false, true, null]],
        2736 => [[['_route' => 'parametre_banque_update', '_controller' => 'App\\Controller\\Parametre\\BanqueController::update'], ['banque'], null, null, false, true, null]],
        2776 => [[['_route' => 'parametre_chambre_details', '_controller' => 'App\\Controller\\Parametre\\ChambreController::details'], ['chambre'], null, null, false, true, null]],
        2798 => [[['_route' => 'parametre_chambre_delete', '_controller' => 'App\\Controller\\Parametre\\ChambreController::delete'], ['chambre'], null, null, false, true, null]],
        2823 => [[['_route' => 'parametre_chambre_update', '_controller' => 'App\\Controller\\Parametre\\ChambreController::update'], ['chambre'], null, null, false, true, null]],
        2867 => [[['_route' => 'parametre_departement_details', '_controller' => 'App\\Controller\\Parametre\\DepartementController::details'], ['departement'], null, null, false, true, null]],
        2889 => [[['_route' => 'parametre_departement_delete', '_controller' => 'App\\Controller\\Parametre\\DepartementController::delete'], ['departement'], null, null, false, true, null]],
        2914 => [[['_route' => 'parametre_departement_update', '_controller' => 'App\\Controller\\Parametre\\DepartementController::update'], ['departement'], null, null, false, true, null]],
        2957 => [[['_route' => 'parametre_element_details', '_controller' => 'App\\Controller\\Parametre\\ElementController::details'], ['element'], null, null, false, true, null]],
        2979 => [[['_route' => 'parametre_element_delete', '_controller' => 'App\\Controller\\Parametre\\ElementController::delete'], ['element'], null, null, false, true, null]],
        3004 => [[['_route' => 'parametre_element_update', '_controller' => 'App\\Controller\\Parametre\\ElementController::update'], ['element'], null, null, false, true, null]],
        3048 => [[['_route' => 'parametre_enseignant_detailles', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::detailles'], ['enseignant'], null, null, false, true, null]],
        3070 => [[['_route' => 'parametre_enseignant_delete', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::delete'], ['enseignant'], null, null, false, true, null]],
        3095 => [[['_route' => 'parametre_enseignant_update', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::update'], ['enseignant'], null, null, false, true, null]],
        3132 => [[['_route' => 'parametre_etage_details', '_controller' => 'App\\Controller\\Parametre\\EtageController::details'], ['etage'], null, null, false, true, null]],
        3154 => [[['_route' => 'parametre_etage_delete', '_controller' => 'App\\Controller\\Parametre\\EtageController::delete'], ['etage'], null, null, false, true, null]],
        3179 => [[['_route' => 'parametre_etage_update', '_controller' => 'App\\Controller\\Parametre\\EtageController::update'], ['etage'], null, null, false, true, null]],
        3223 => [[['_route' => 'parametre_filiere_details', '_controller' => 'App\\Controller\\Parametre\\FiliereController::details'], ['filiere'], null, null, false, true, null]],
        3245 => [[['_route' => 'parametre_filiere_delete', '_controller' => 'App\\Controller\\Parametre\\FiliereController::delete'], ['filiere'], null, null, false, true, null]],
        3270 => [[['_route' => 'parametre_filiere_update', '_controller' => 'App\\Controller\\Parametre\\FiliereController::update'], ['filiere'], null, null, false, true, null]],
        3307 => [[['_route' => 'parametre_frais_details', '_controller' => 'App\\Controller\\Parametre\\FraisController::details'], ['frais'], null, null, false, true, null]],
        3329 => [[['_route' => 'parametre_frais_delete', '_controller' => 'App\\Controller\\Parametre\\FraisController::delete'], ['frais'], null, null, false, true, null]],
        3354 => [[['_route' => 'parametre_frais_update', '_controller' => 'App\\Controller\\Parametre\\FraisController::update'], ['frais'], null, null, false, true, null]],
        3395 => [[['_route' => 'parametre_langue_details', '_controller' => 'App\\Controller\\Parametre\\LanguesController::details'], ['langue'], null, null, false, true, null]],
        3417 => [[['_route' => 'parametre_langue_delete', '_controller' => 'App\\Controller\\Parametre\\LanguesController::delete'], ['langue'], null, null, false, true, null]],
        3442 => [[['_route' => 'parametre_langue_update', '_controller' => 'App\\Controller\\Parametre\\LanguesController::update'], ['langue'], null, null, false, true, null]],
        3487 => [[['_route' => 'parametre_modalites_details', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::details'], ['modalites'], null, null, false, true, null]],
        3509 => [[['_route' => 'parametre_modalites_delete', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::delete'], ['modalites'], null, null, false, true, null]],
        3534 => [[['_route' => 'parametre_modalites_update', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::update'], ['modalites'], null, null, false, true, null]],
        3570 => [[['_route' => 'parametre_module_details', '_controller' => 'App\\Controller\\Parametre\\ModuleController::details'], ['module'], null, null, false, true, null]],
        3592 => [[['_route' => 'parametre_module_delete', '_controller' => 'App\\Controller\\Parametre\\ModuleController::delete'], ['module'], null, null, false, true, null]],
        3617 => [[['_route' => 'parametre_module_update', '_controller' => 'App\\Controller\\Parametre\\ModuleController::update'], ['module'], null, null, false, true, null]],
        3661 => [[['_route' => 'parametre_programmation_details', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::details'], ['programmation'], null, null, false, true, null]],
        3685 => [[['_route' => 'parametre_programmation_update', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::update'], ['programmation'], null, null, false, true, null]],
        3727 => [[['_route' => 'parametre_salle_details', '_controller' => 'App\\Controller\\Parametre\\SallesController::details'], ['salle'], null, null, false, true, null]],
        3749 => [[['_route' => 'parametre_salle_delete', '_controller' => 'App\\Controller\\Parametre\\SallesController::delete'], ['salle'], null, null, false, true, null]],
        3774 => [[['_route' => 'parametre_salle_update', '_controller' => 'App\\Controller\\Parametre\\SallesController::update'], ['salle'], null, null, false, true, null]],
        3817 => [[['_route' => 'parametre_semestre_details', '_controller' => 'App\\Controller\\Parametre\\SemestreController::details'], ['semestre'], null, null, false, true, null]],
        3839 => [[['_route' => 'parametre_semestre_delete', '_controller' => 'App\\Controller\\Parametre\\SemestreController::delete'], ['semestre'], null, null, false, true, null]],
        3864 => [[['_route' => 'parametre_semestre_update', '_controller' => 'App\\Controller\\Parametre\\SemestreController::update'], ['semestre'], null, null, false, true, null]],
        3903 => [[['_route' => 'parametre_seriebac_details', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::details'], ['seriebac'], null, null, false, true, null]],
        3925 => [[['_route' => 'parametre_seriebac_delete', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::delete'], ['seriebac'], null, null, false, true, null]],
        3950 => [[['_route' => 'parametre_seriebac_update', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::update'], ['seriebac'], null, null, false, true, null]],
        3992 => [[['_route' => 'parametre_typebac_details', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::details'], ['typebac'], null, null, false, true, null]],
        4014 => [[['_route' => 'parametre_typebac_delete', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::delete'], ['typebac'], null, null, false, true, null]],
        4039 => [[['_route' => 'parametre_typebac_update', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::update'], ['typebac'], null, null, false, true, null]],
        4079 => [[['_route' => 'parametre_user_operations', '_controller' => 'App\\Controller\\Parametre\\UserController::operations'], ['user'], null, null, false, true, null]],
        4112 => [[['_route' => 'parametre_user_all', '_controller' => 'App\\Controller\\Parametre\\UserController::all'], ['user', 'type'], null, null, false, true, null]],
        4144 => [[['_route' => 'parametre_user_active', '_controller' => 'App\\Controller\\Parametre\\UserController::active'], ['user', 'type'], null, null, false, true, null]],
        4191 => [[['_route' => 'parametre_user_sousmodule', '_controller' => 'App\\Controller\\Parametre\\UserController::sousmodule'], ['sousModule', 'user', 'type'], null, null, false, true, null]],
        4233 => [[['_route' => 'parametre_user_module', '_controller' => 'App\\Controller\\Parametre\\UserController::module'], ['module', 'user', 'type'], null, null, false, true, null]],
        4278 => [[['_route' => 'parametre_user_operation', '_controller' => 'App\\Controller\\Parametre\\UserController::operation'], ['operation', 'user', 'type'], null, null, false, true, null]],
        4312 => [
            [['_route' => 'app_reinitialiser', '_controller' => 'App\\Controller\\SecurityController::reinitialiser'], ['user'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
