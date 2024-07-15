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
        '/etudiant/hebergement' => [[['_route' => 'gestion_hebergement', '_controller' => 'App\\Controller\\Etudiant\\GestionHebergementController::index'], null, null, null, true, false, null]],
        '/etudiant/hebergement/list' => [[['_route' => 'gestion_hebergement_list', '_controller' => 'App\\Controller\\Etudiant\\GestionHebergementController::gestionHebergementList'], null, null, null, false, false, null]],
        '/etudiant/hebergement/supprimer' => [[['_route' => 'supprimer_hebergement', '_controller' => 'App\\Controller\\Etudiant\\GestionHebergementController::supprimer_hebergement'], null, null, null, false, false, null]],
        '/etudiant/inscription' => [[['_route' => 'gestion_inscription', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::index'], null, null, null, true, false, null]],
        '/etudiant/inscription/list' => [[['_route' => 'gestion_inscription_list', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::gestionInscriptionList'], null, null, null, false, false, null]],
        '/etudiant/inscription/affectation' => [[['_route' => 'affectation', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::affectation'], null, null, null, false, false, null]],
        '/etudiant/inscription/extraction_ins' => [[['_route' => 'extraction_ins', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::extraction_ins'], null, null, null, false, false, null]],
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
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
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
        '/parametre/lit' => [[['_route' => 'parametre_lit', '_controller' => 'App\\Controller\\Parametre\\LitController::index'], null, null, null, true, false, null]],
        '/parametre/lit/list' => [[['_route' => 'parametre_lit_list', '_controller' => 'App\\Controller\\Parametre\\LitController::list'], null, null, null, false, false, null]],
        '/parametre/lit/new' => [[['_route' => 'parametre_lit_new', '_controller' => 'App\\Controller\\Parametre\\LitController::new'], null, null, null, false, false, null]],
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
        '/parametre/seriebac' => [[['_route' => 'parametre_seriebac', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::index'], null, null, null, true, false, null]],
        '/parametre/seriebac/list' => [[['_route' => 'parametre_seriebac_list', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::list'], null, null, null, false, false, null]],
        '/parametre/seriebac/new' => [[['_route' => 'parametre_seriebac_new', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::new'], null, null, null, false, false, null]],
        '/parametre/synchronisation' => [[['_route' => 'parametre_Synchronisation', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::synchronisation'], null, null, null, true, false, null]],
        '/parametre/synchronisation/api_etablissement' => [[['_route' => 'api_etablissement', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_etablissement'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_formation' => [[['_route' => 'api_formation', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_formation'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_annee' => [[['_route' => 'api_annee', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_annee'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_promotion' => [[['_route' => 'api_promotion', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_promotion'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_semestre' => [[['_route' => 'api_semestre', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_semestre'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_organisme' => [[['_route' => 'api_organisme', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_organisme'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_banque' => [[['_route' => 'api_banque', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_banque'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_modalite' => [[['_route' => 'api_modalite', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_modalite'], null, null, null, false, false, null]],
        '/parametre/synchronisation/api_naturedemande' => [[['_route' => 'api_naturedemande', '_controller' => 'App\\Controller\\Parametre\\SynchronisationController::api_naturedemande'], null, null, null, false, false, null]],
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
                    .'|chambre/([^/]++)(*:378)'
                    .'|lit/([^/]++)(*:398)'
                    .'|nature_etudiant/([^/]++)(*:430)'
                .')'
                .'|/etudiant/inscription/(?'
                    .'|getstatut/([^/]++)(*:482)'
                    .'|extraction_ins_annee/([^/]++)(*:519)'
                .')'
                .'|/facture/(?'
                    .'|bordereau/(?'
                        .'|print_borderaux/([^/]++)(*:577)'
                        .'|supprimer_borderaux/([^/]++)(*:613)'
                        .'|extraction_borderaux/([^/]++)(*:650)'
                    .')'
                    .'|factures/(?'
                        .'|a(?'
                            .'|jouter_(?'
                                .'|reglement/([^/]++)(*:703)'
                                .'|pec/([^/]++)(*:723)'
                            .')'
                            .'|rticle_frais/([^/]++)(*:753)'
                            .'|dd_detaille/([^/]++)(*:781)'
                        .')'
                        .'|get(?'
                            .'|Montant/([^/]++)(*:812)'
                            .'|FacturePec/([^/]++)(*:839)'
                        .')'
                        .'|facture/([^/]++)/([^/]++)(*:873)'
                        .'|printfacture/([^/]++)(*:902)'
                        .'|releve/([^/]++)(*:925)'
                        .'|detaille_facture/([^/]++)(*:958)'
                        .'|cloture_(?'
                            .'|detaille/([^/]++)(*:994)'
                            .'|all_detaille/([^/]++)(*:1023)'
                        .')'
                        .'|extraction_factures_(?'
                            .'|by_annee/([^/]++)(*:1073)'
                            .'|nonInscrits/([^/]++)(*:1102)'
                        .')'
                    .')'
                    .'|reglements/(?'
                        .'|reglementprint/([^/]++)(*:1150)'
                        .'|borderaux/([^/]++)/([^/]++)(*:1186)'
                        .'|printborderaux/([^/]++)(*:1218)'
                        .'|annuler_reglement/([^/]++)(*:1253)'
                        .'|getReglementInfos/([^/]++)(*:1288)'
                        .'|modifier_reglement/([^/]++)(*:1324)'
                    .')'
                .')'
                .'|/parametre/(?'
                    .'|a(?'
                        .'|cademie/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:1383)'
                                .'|lete/([^/]++)(*:1405)'
                            .')'
                            .'|update/([^/]++)(*:1430)'
                        .')'
                        .'|nnee/(?'
                            .'|active_annee/([^/]++)(*:1469)'
                            .'|de(?'
                                .'|tails/([^/]++)(*:1497)'
                                .'|lete/([^/]++)(*:1519)'
                            .')'
                            .'|update/([^/]++)(*:1544)'
                        .')'
                    .')'
                    .'|banque/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:1584)'
                            .'|lete/([^/]++)(*:1606)'
                        .')'
                        .'|update/([^/]++)(*:1631)'
                    .')'
                    .'|chambre/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:1671)'
                            .'|lete/([^/]++)(*:1693)'
                        .')'
                        .'|update/([^/]++)(*:1718)'
                    .')'
                    .'|departement/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:1762)'
                            .'|lete/([^/]++)(*:1784)'
                        .')'
                        .'|update/([^/]++)(*:1809)'
                    .')'
                    .'|e(?'
                        .'|lement/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:1852)'
                                .'|lete/([^/]++)(*:1874)'
                            .')'
                            .'|update/([^/]++)(*:1899)'
                        .')'
                        .'|nseignant/(?'
                            .'|de(?'
                                .'|tailles/([^/]++)(*:1943)'
                                .'|lete/([^/]++)(*:1965)'
                            .')'
                            .'|update/([^/]++)(*:1990)'
                        .')'
                        .'|tage/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2027)'
                                .'|lete/([^/]++)(*:2049)'
                            .')'
                            .'|update/([^/]++)(*:2074)'
                        .')'
                    .')'
                    .'|f(?'
                        .'|iliere/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2118)'
                                .'|lete/([^/]++)(*:2140)'
                            .')'
                            .'|update/([^/]++)(*:2165)'
                        .')'
                        .'|rais/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2202)'
                                .'|lete/([^/]++)(*:2224)'
                            .')'
                            .'|update/([^/]++)(*:2249)'
                        .')'
                    .')'
                    .'|l(?'
                        .'|angues/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2293)'
                                .'|lete/([^/]++)(*:2315)'
                            .')'
                            .'|update/([^/]++)(*:2340)'
                        .')'
                        .'|it/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2375)'
                                .'|lete/([^/]++)(*:2397)'
                            .')'
                            .'|update/([^/]++)(*:2422)'
                        .')'
                    .')'
                    .'|mod(?'
                        .'|alites/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2468)'
                                .'|lete/([^/]++)(*:2490)'
                            .')'
                            .'|update/([^/]++)(*:2515)'
                        .')'
                        .'|ule/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2551)'
                                .'|lete/([^/]++)(*:2573)'
                            .')'
                            .'|update/([^/]++)(*:2598)'
                        .')'
                    .')'
                    .'|programmation/(?'
                        .'|details/([^/]++)(*:2642)'
                        .'|update/([^/]++)(*:2666)'
                    .')'
                    .'|s(?'
                        .'|alles/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2708)'
                                .'|lete/([^/]++)(*:2730)'
                            .')'
                            .'|update/([^/]++)(*:2755)'
                        .')'
                        .'|eriebac/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2795)'
                                .'|lete/([^/]++)(*:2817)'
                            .')'
                            .'|update/([^/]++)(*:2842)'
                        .')'
                    .')'
                    .'|typebac/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:2883)'
                            .'|lete/([^/]++)(*:2905)'
                        .')'
                        .'|update/([^/]++)(*:2930)'
                    .')'
                    .'|user/(?'
                        .'|getoperations/([^/]++)(*:2970)'
                        .'|a(?'
                            .'|ll/([^/]++)/([^/]++)(*:3003)'
                            .'|ctive/([^/]++)/([^/]++)(*:3035)'
                        .')'
                        .'|sousmodule/([^/]++)/([^/]++)/([^/]++)(*:3082)'
                        .'|module/([^/]++)/([^/]++)/([^/]++)(*:3124)'
                        .'|operation/([^/]++)/([^/]++)/([^/]++)(*:3169)'
                    .')'
                .')'
                .'|/reinitialiser/([^/]++)(*:3203)'
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
        378 => [[['_route' => 'getchambre', '_controller' => 'App\\Controller\\ApiController::getChambre'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'getlit', '_controller' => 'App\\Controller\\ApiController::getLit'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'getnatureetudiant', '_controller' => 'App\\Controller\\ApiController::getNatureEtudiant'], ['admission'], null, null, false, true, null]],
        482 => [[['_route' => 'gestion_statut', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::inscriptionStatut'], ['inscription'], null, null, false, true, null]],
        519 => [[['_route' => 'extraction_ins_annee', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::extraction_ins_annee'], ['annee'], null, null, false, true, null]],
        577 => [[['_route' => 'print_borderaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::printborderaux'], ['borderaux'], null, null, false, true, null]],
        613 => [[['_route' => 'supprimer_borderau', '_controller' => 'App\\Controller\\Facture\\BordereauController::supprimerborderau'], ['bordereau'], null, null, false, true, null]],
        650 => [[['_route' => 'extraction_borderaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::extraction_borderaux'], ['bordereau'], null, null, false, true, null]],
        703 => [[['_route' => 'facture_ajouter_reglement', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::ajouter_reglement'], ['id'], null, null, false, true, null]],
        723 => [[['_route' => 'ajouter_pec', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::ajouter_pec'], ['id'], null, null, false, true, null]],
        753 => [[['_route' => 'article_frais_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::article_frais'], ['id'], null, null, false, true, null]],
        781 => [[['_route' => 'add_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::add_detaille'], ['id'], null, null, false, true, null]],
        812 => [[['_route' => 'getMontant', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::getMontant'], ['id'], null, null, false, true, null]],
        839 => [[['_route' => 'getFacturePec', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::getFacturePec'], ['id'], null, null, false, true, null]],
        873 => [[['_route' => 'imprimer_facture_reglement', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimer_facture_reglement'], ['operationcab', 'reglement'], null, null, false, true, null]],
        902 => [[['_route' => 'imprimerfacture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimerfacture'], ['operationcab'], null, null, false, true, null]],
        925 => [[['_route' => 'imprimerreleve', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimerreleve'], ['operationcab'], null, null, false, true, null]],
        958 => [[['_route' => 'detaille_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::detaille_facture'], ['id'], null, null, false, true, null]],
        994 => [[['_route' => 'cloture_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::cloture_detaille'], ['id'], null, null, false, true, null]],
        1023 => [[['_route' => 'cloture_all_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::cloture_all_detaille'], ['id'], null, null, false, true, null]],
        1073 => [[['_route' => 'extraction_factures_by_annee', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::extraction_factures_by_annee'], ['annee'], null, null, false, true, null]],
        1102 => [[['_route' => 'extraction_factures_nonInscrits', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::extraction_factures_nonInscrits'], ['annee'], null, null, false, true, null]],
        1150 => [[['_route' => 'imprimer_reglement_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::imprimer_reglement_reglement'], ['reglement'], null, null, false, true, null]],
        1186 => [[['_route' => 'reglement_borderaux', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::reglement_borderaux'], ['formation', 'paiement'], null, null, false, true, null]],
        1218 => [[['_route' => 'printborderaux', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::printborderaux'], ['borderaux'], null, null, false, true, null]],
        1253 => [[['_route' => 'annuler_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::annuler_reglement'], ['reglement'], null, null, false, true, null]],
        1288 => [[['_route' => 'getReglementInfos', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::getReglementInfos'], ['reglement'], null, null, false, true, null]],
        1324 => [[['_route' => 'modifier_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::ajouter_reglement'], ['id'], null, null, false, true, null]],
        1383 => [[['_route' => 'parametre_academie_details', '_controller' => 'App\\Controller\\Parametre\\AcademieController::details'], ['academie'], null, null, false, true, null]],
        1405 => [[['_route' => 'parametre_academie_delete', '_controller' => 'App\\Controller\\Parametre\\AcademieController::delete'], ['academie'], null, null, false, true, null]],
        1430 => [[['_route' => 'parametre_academie_update', '_controller' => 'App\\Controller\\Parametre\\AcademieController::update'], ['academie'], null, null, false, true, null]],
        1469 => [[['_route' => 'parametre_active_annee', '_controller' => 'App\\Controller\\Parametre\\AnneeController::parametre_active_annee'], ['annee'], null, null, false, true, null]],
        1497 => [[['_route' => 'parametre_annee_details', '_controller' => 'App\\Controller\\Parametre\\AnneeController::details'], ['annee'], null, null, false, true, null]],
        1519 => [[['_route' => 'parametre_annee_delete', '_controller' => 'App\\Controller\\Parametre\\AnneeController::delete'], ['annee'], null, null, false, true, null]],
        1544 => [[['_route' => 'parametre_annee_update', '_controller' => 'App\\Controller\\Parametre\\AnneeController::update'], ['annee'], null, null, false, true, null]],
        1584 => [[['_route' => 'parametre_banque_details', '_controller' => 'App\\Controller\\Parametre\\BanqueController::details'], ['banque'], null, null, false, true, null]],
        1606 => [[['_route' => 'parametre_banque_delete', '_controller' => 'App\\Controller\\Parametre\\BanqueController::delete'], ['banque'], null, null, false, true, null]],
        1631 => [[['_route' => 'parametre_banque_update', '_controller' => 'App\\Controller\\Parametre\\BanqueController::update'], ['banque'], null, null, false, true, null]],
        1671 => [[['_route' => 'parametre_chambre_details', '_controller' => 'App\\Controller\\Parametre\\ChambreController::details'], ['chambre'], null, null, false, true, null]],
        1693 => [[['_route' => 'parametre_chambre_delete', '_controller' => 'App\\Controller\\Parametre\\ChambreController::delete'], ['chambre'], null, null, false, true, null]],
        1718 => [[['_route' => 'parametre_chambre_update', '_controller' => 'App\\Controller\\Parametre\\ChambreController::update'], ['chambre'], null, null, false, true, null]],
        1762 => [[['_route' => 'parametre_departement_details', '_controller' => 'App\\Controller\\Parametre\\DepartementController::details'], ['departement'], null, null, false, true, null]],
        1784 => [[['_route' => 'parametre_departement_delete', '_controller' => 'App\\Controller\\Parametre\\DepartementController::delete'], ['departement'], null, null, false, true, null]],
        1809 => [[['_route' => 'parametre_departement_update', '_controller' => 'App\\Controller\\Parametre\\DepartementController::update'], ['departement'], null, null, false, true, null]],
        1852 => [[['_route' => 'parametre_element_details', '_controller' => 'App\\Controller\\Parametre\\ElementController::details'], ['element'], null, null, false, true, null]],
        1874 => [[['_route' => 'parametre_element_delete', '_controller' => 'App\\Controller\\Parametre\\ElementController::delete'], ['element'], null, null, false, true, null]],
        1899 => [[['_route' => 'parametre_element_update', '_controller' => 'App\\Controller\\Parametre\\ElementController::update'], ['element'], null, null, false, true, null]],
        1943 => [[['_route' => 'parametre_enseignant_detailles', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::detailles'], ['enseignant'], null, null, false, true, null]],
        1965 => [[['_route' => 'parametre_enseignant_delete', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::delete'], ['enseignant'], null, null, false, true, null]],
        1990 => [[['_route' => 'parametre_enseignant_update', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::update'], ['enseignant'], null, null, false, true, null]],
        2027 => [[['_route' => 'parametre_etage_details', '_controller' => 'App\\Controller\\Parametre\\EtageController::details'], ['etage'], null, null, false, true, null]],
        2049 => [[['_route' => 'parametre_etage_delete', '_controller' => 'App\\Controller\\Parametre\\EtageController::delete'], ['etage'], null, null, false, true, null]],
        2074 => [[['_route' => 'parametre_etage_update', '_controller' => 'App\\Controller\\Parametre\\EtageController::update'], ['etage'], null, null, false, true, null]],
        2118 => [[['_route' => 'parametre_filiere_details', '_controller' => 'App\\Controller\\Parametre\\FiliereController::details'], ['filiere'], null, null, false, true, null]],
        2140 => [[['_route' => 'parametre_filiere_delete', '_controller' => 'App\\Controller\\Parametre\\FiliereController::delete'], ['filiere'], null, null, false, true, null]],
        2165 => [[['_route' => 'parametre_filiere_update', '_controller' => 'App\\Controller\\Parametre\\FiliereController::update'], ['filiere'], null, null, false, true, null]],
        2202 => [[['_route' => 'parametre_frais_details', '_controller' => 'App\\Controller\\Parametre\\FraisController::details'], ['frais'], null, null, false, true, null]],
        2224 => [[['_route' => 'parametre_frais_delete', '_controller' => 'App\\Controller\\Parametre\\FraisController::delete'], ['frais'], null, null, false, true, null]],
        2249 => [[['_route' => 'parametre_frais_update', '_controller' => 'App\\Controller\\Parametre\\FraisController::update'], ['frais'], null, null, false, true, null]],
        2293 => [[['_route' => 'parametre_langue_details', '_controller' => 'App\\Controller\\Parametre\\LanguesController::details'], ['langue'], null, null, false, true, null]],
        2315 => [[['_route' => 'parametre_langue_delete', '_controller' => 'App\\Controller\\Parametre\\LanguesController::delete'], ['langue'], null, null, false, true, null]],
        2340 => [[['_route' => 'parametre_langue_update', '_controller' => 'App\\Controller\\Parametre\\LanguesController::update'], ['langue'], null, null, false, true, null]],
        2375 => [[['_route' => 'parametre_lit_details', '_controller' => 'App\\Controller\\Parametre\\LitController::details'], ['lit'], null, null, false, true, null]],
        2397 => [[['_route' => 'parametre_lit_delete', '_controller' => 'App\\Controller\\Parametre\\LitController::delete'], ['lit'], null, null, false, true, null]],
        2422 => [[['_route' => 'parametre_lit_update', '_controller' => 'App\\Controller\\Parametre\\LitController::update'], ['lit'], null, null, false, true, null]],
        2468 => [[['_route' => 'parametre_modalites_details', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::details'], ['modalites'], null, null, false, true, null]],
        2490 => [[['_route' => 'parametre_modalites_delete', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::delete'], ['modalites'], null, null, false, true, null]],
        2515 => [[['_route' => 'parametre_modalites_update', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::update'], ['modalites'], null, null, false, true, null]],
        2551 => [[['_route' => 'parametre_module_details', '_controller' => 'App\\Controller\\Parametre\\ModuleController::details'], ['module'], null, null, false, true, null]],
        2573 => [[['_route' => 'parametre_module_delete', '_controller' => 'App\\Controller\\Parametre\\ModuleController::delete'], ['module'], null, null, false, true, null]],
        2598 => [[['_route' => 'parametre_module_update', '_controller' => 'App\\Controller\\Parametre\\ModuleController::update'], ['module'], null, null, false, true, null]],
        2642 => [[['_route' => 'parametre_programmation_details', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::details'], ['programmation'], null, null, false, true, null]],
        2666 => [[['_route' => 'parametre_programmation_update', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::update'], ['programmation'], null, null, false, true, null]],
        2708 => [[['_route' => 'parametre_salle_details', '_controller' => 'App\\Controller\\Parametre\\SallesController::details'], ['salle'], null, null, false, true, null]],
        2730 => [[['_route' => 'parametre_salle_delete', '_controller' => 'App\\Controller\\Parametre\\SallesController::delete'], ['salle'], null, null, false, true, null]],
        2755 => [[['_route' => 'parametre_salle_update', '_controller' => 'App\\Controller\\Parametre\\SallesController::update'], ['salle'], null, null, false, true, null]],
        2795 => [[['_route' => 'parametre_seriebac_details', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::details'], ['seriebac'], null, null, false, true, null]],
        2817 => [[['_route' => 'parametre_seriebac_delete', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::delete'], ['seriebac'], null, null, false, true, null]],
        2842 => [[['_route' => 'parametre_seriebac_update', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::update'], ['seriebac'], null, null, false, true, null]],
        2883 => [[['_route' => 'parametre_typebac_details', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::details'], ['typebac'], null, null, false, true, null]],
        2905 => [[['_route' => 'parametre_typebac_delete', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::delete'], ['typebac'], null, null, false, true, null]],
        2930 => [[['_route' => 'parametre_typebac_update', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::update'], ['typebac'], null, null, false, true, null]],
        2970 => [[['_route' => 'parametre_user_operations', '_controller' => 'App\\Controller\\Parametre\\UserController::operations'], ['user'], null, null, false, true, null]],
        3003 => [[['_route' => 'parametre_user_all', '_controller' => 'App\\Controller\\Parametre\\UserController::all'], ['user', 'type'], null, null, false, true, null]],
        3035 => [[['_route' => 'parametre_user_active', '_controller' => 'App\\Controller\\Parametre\\UserController::active'], ['user', 'type'], null, null, false, true, null]],
        3082 => [[['_route' => 'parametre_user_sousmodule', '_controller' => 'App\\Controller\\Parametre\\UserController::sousmodule'], ['sousModule', 'user', 'type'], null, null, false, true, null]],
        3124 => [[['_route' => 'parametre_user_module', '_controller' => 'App\\Controller\\Parametre\\UserController::module'], ['module', 'user', 'type'], null, null, false, true, null]],
        3169 => [[['_route' => 'parametre_user_operation', '_controller' => 'App\\Controller\\Parametre\\UserController::operation'], ['operation', 'user', 'type'], null, null, false, true, null]],
        3203 => [
            [['_route' => 'app_reinitialiser', '_controller' => 'App\\Controller\\SecurityController::reinitialiser'], ['user'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
