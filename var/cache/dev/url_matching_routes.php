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
                    .'|f(?'
                        .'|rais/([^/]++)(*:507)'
                        .'|acture/([^/]++)(*:530)'
                    .')'
                    .'|info/([^/]++)(*:552)'
                    .'|addfrais/([^/]++)(*:577)'
                    .'|extraction_ins_annee/([^/]++)(*:614)'
                .')'
                .'|/facture/(?'
                    .'|bordereau/(?'
                        .'|print_borderaux/([^/]++)(*:672)'
                        .'|supprimer_borderaux/([^/]++)(*:708)'
                        .'|extraction_borderaux/([^/]++)(*:745)'
                    .')'
                    .'|factures/(?'
                        .'|a(?'
                            .'|jouter_(?'
                                .'|reglement/([^/]++)(*:798)'
                                .'|pec/([^/]++)(*:818)'
                            .')'
                            .'|rticle_frais/([^/]++)(*:848)'
                            .'|dd_detaille/([^/]++)(*:876)'
                        .')'
                        .'|get(?'
                            .'|Montant/([^/]++)(*:907)'
                            .'|FacturePec/([^/]++)(*:934)'
                        .')'
                        .'|facture/([^/]++)/([^/]++)(*:968)'
                        .'|printfacture/([^/]++)(*:997)'
                        .'|releve/([^/]++)(*:1020)'
                        .'|detaille_facture/([^/]++)(*:1054)'
                        .'|cloture_(?'
                            .'|detaille/([^/]++)(*:1091)'
                            .'|all_detaille/([^/]++)(*:1121)'
                        .')'
                        .'|extraction_factures_(?'
                            .'|by_annee/([^/]++)(*:1171)'
                            .'|nonInscrits/([^/]++)(*:1200)'
                        .')'
                    .')'
                    .'|reglements/(?'
                        .'|reglementprint/([^/]++)(*:1248)'
                        .'|borderaux/([^/]++)/([^/]++)(*:1284)'
                        .'|printborderaux/([^/]++)(*:1316)'
                        .'|annuler_reglement/([^/]++)(*:1351)'
                        .'|getReglementInfos/([^/]++)(*:1386)'
                        .'|modifier_reglement/([^/]++)(*:1422)'
                    .')'
                .')'
                .'|/parametre/(?'
                    .'|a(?'
                        .'|cademie/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:1481)'
                                .'|lete/([^/]++)(*:1503)'
                            .')'
                            .'|update/([^/]++)(*:1528)'
                        .')'
                        .'|nnee/(?'
                            .'|active_annee/([^/]++)(*:1567)'
                            .'|de(?'
                                .'|tails/([^/]++)(*:1595)'
                                .'|lete/([^/]++)(*:1617)'
                            .')'
                            .'|update/([^/]++)(*:1642)'
                        .')'
                    .')'
                    .'|banque/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:1682)'
                            .'|lete/([^/]++)(*:1704)'
                        .')'
                        .'|update/([^/]++)(*:1729)'
                    .')'
                    .'|chambre/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:1769)'
                            .'|lete/([^/]++)(*:1791)'
                        .')'
                        .'|update/([^/]++)(*:1816)'
                    .')'
                    .'|departement/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:1860)'
                            .'|lete/([^/]++)(*:1882)'
                        .')'
                        .'|update/([^/]++)(*:1907)'
                    .')'
                    .'|e(?'
                        .'|lement/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:1950)'
                                .'|lete/([^/]++)(*:1972)'
                            .')'
                            .'|update/([^/]++)(*:1997)'
                        .')'
                        .'|nseignant/(?'
                            .'|de(?'
                                .'|tailles/([^/]++)(*:2041)'
                                .'|lete/([^/]++)(*:2063)'
                            .')'
                            .'|update/([^/]++)(*:2088)'
                        .')'
                        .'|tage/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2125)'
                                .'|lete/([^/]++)(*:2147)'
                            .')'
                            .'|update/([^/]++)(*:2172)'
                        .')'
                    .')'
                    .'|f(?'
                        .'|iliere/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2216)'
                                .'|lete/([^/]++)(*:2238)'
                            .')'
                            .'|update/([^/]++)(*:2263)'
                        .')'
                        .'|rais/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2300)'
                                .'|lete/([^/]++)(*:2322)'
                            .')'
                            .'|update/([^/]++)(*:2347)'
                        .')'
                    .')'
                    .'|l(?'
                        .'|angues/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2391)'
                                .'|lete/([^/]++)(*:2413)'
                            .')'
                            .'|update/([^/]++)(*:2438)'
                        .')'
                        .'|it/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2473)'
                                .'|lete/([^/]++)(*:2495)'
                            .')'
                            .'|update/([^/]++)(*:2520)'
                        .')'
                    .')'
                    .'|mod(?'
                        .'|alites/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2566)'
                                .'|lete/([^/]++)(*:2588)'
                            .')'
                            .'|update/([^/]++)(*:2613)'
                        .')'
                        .'|ule/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2649)'
                                .'|lete/([^/]++)(*:2671)'
                            .')'
                            .'|update/([^/]++)(*:2696)'
                        .')'
                    .')'
                    .'|programmation/(?'
                        .'|details/([^/]++)(*:2740)'
                        .'|update/([^/]++)(*:2764)'
                    .')'
                    .'|s(?'
                        .'|alles/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2806)'
                                .'|lete/([^/]++)(*:2828)'
                            .')'
                            .'|update/([^/]++)(*:2853)'
                        .')'
                        .'|eriebac/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:2893)'
                                .'|lete/([^/]++)(*:2915)'
                            .')'
                            .'|update/([^/]++)(*:2940)'
                        .')'
                    .')'
                    .'|typebac/(?'
                        .'|de(?'
                            .'|tails/([^/]++)(*:2981)'
                            .'|lete/([^/]++)(*:3003)'
                        .')'
                        .'|update/([^/]++)(*:3028)'
                    .')'
                    .'|user/(?'
                        .'|getoperations/([^/]++)(*:3068)'
                        .'|a(?'
                            .'|ll/([^/]++)/([^/]++)(*:3101)'
                            .'|ctive/([^/]++)/([^/]++)(*:3133)'
                        .')'
                        .'|sousmodule/([^/]++)/([^/]++)/([^/]++)(*:3180)'
                        .'|module/([^/]++)/([^/]++)/([^/]++)(*:3222)'
                        .'|operation/([^/]++)/([^/]++)/([^/]++)(*:3267)'
                    .')'
                .')'
                .'|/reinitialiser/([^/]++)(*:3301)'
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
        507 => [[['_route' => 'getFraisByInscription', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::getFraisByInscription'], ['inscription'], null, null, false, true, null]],
        530 => [[['_route' => 'inscription_facture', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::factureInscription'], ['operationcab'], null, null, false, true, null]],
        552 => [[['_route' => 'getInformationByInscription', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::getFraisByFormation'], ['inscription'], null, null, false, true, null]],
        577 => [[['_route' => 'inscription_addfrais', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::inscriptionAddFrais'], ['inscription'], null, null, false, true, null]],
        614 => [[['_route' => 'extraction_ins_annee', '_controller' => 'App\\Controller\\Etudiant\\GestionInscriptionController::extraction_ins_annee'], ['annee'], null, null, false, true, null]],
        672 => [[['_route' => 'print_borderaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::printborderaux'], ['borderaux'], null, null, false, true, null]],
        708 => [[['_route' => 'supprimer_borderau', '_controller' => 'App\\Controller\\Facture\\BordereauController::supprimerborderau'], ['bordereau'], null, null, false, true, null]],
        745 => [[['_route' => 'extraction_borderaux', '_controller' => 'App\\Controller\\Facture\\BordereauController::extraction_borderaux'], ['bordereau'], null, null, false, true, null]],
        798 => [[['_route' => 'facture_ajouter_reglement', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::ajouter_reglement'], ['id'], null, null, false, true, null]],
        818 => [[['_route' => 'ajouter_pec', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::ajouter_pec'], ['id'], null, null, false, true, null]],
        848 => [[['_route' => 'article_frais_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::article_frais'], ['id'], null, null, false, true, null]],
        876 => [[['_route' => 'add_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::add_detaille'], ['id'], null, null, false, true, null]],
        907 => [[['_route' => 'getMontant', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::getMontant'], ['id'], null, null, false, true, null]],
        934 => [[['_route' => 'getFacturePec', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::getFacturePec'], ['id'], null, null, false, true, null]],
        968 => [[['_route' => 'imprimer_facture_reglement', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimer_facture_reglement'], ['operationcab', 'reglement'], null, null, false, true, null]],
        997 => [[['_route' => 'imprimerfacture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimerfacture'], ['operationcab'], null, null, false, true, null]],
        1020 => [[['_route' => 'imprimerreleve', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::imprimerreleve'], ['operationcab'], null, null, false, true, null]],
        1054 => [[['_route' => 'detaille_facture', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::detaille_facture'], ['id'], null, null, false, true, null]],
        1091 => [[['_route' => 'cloture_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::cloture_detaille'], ['id'], null, null, false, true, null]],
        1121 => [[['_route' => 'cloture_all_detaille', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::cloture_all_detaille'], ['id'], null, null, false, true, null]],
        1171 => [[['_route' => 'extraction_factures_by_annee', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::extraction_factures_by_annee'], ['annee'], null, null, false, true, null]],
        1200 => [[['_route' => 'extraction_factures_nonInscrits', '_controller' => 'App\\Controller\\Facture\\GestionFactureController::extraction_factures_nonInscrits'], ['annee'], null, null, false, true, null]],
        1248 => [[['_route' => 'imprimer_reglement_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::imprimer_reglement_reglement'], ['reglement'], null, null, false, true, null]],
        1284 => [[['_route' => 'reglement_borderaux', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::reglement_borderaux'], ['formation', 'paiement'], null, null, false, true, null]],
        1316 => [[['_route' => 'printborderaux', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::printborderaux'], ['borderaux'], null, null, false, true, null]],
        1351 => [[['_route' => 'annuler_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::annuler_reglement'], ['reglement'], null, null, false, true, null]],
        1386 => [[['_route' => 'getReglementInfos', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::getReglementInfos'], ['reglement'], null, null, false, true, null]],
        1422 => [[['_route' => 'modifier_reglement', '_controller' => 'App\\Controller\\Facture\\GestionReglementsController::ajouter_reglement'], ['id'], null, null, false, true, null]],
        1481 => [[['_route' => 'parametre_academie_details', '_controller' => 'App\\Controller\\Parametre\\AcademieController::details'], ['academie'], null, null, false, true, null]],
        1503 => [[['_route' => 'parametre_academie_delete', '_controller' => 'App\\Controller\\Parametre\\AcademieController::delete'], ['academie'], null, null, false, true, null]],
        1528 => [[['_route' => 'parametre_academie_update', '_controller' => 'App\\Controller\\Parametre\\AcademieController::update'], ['academie'], null, null, false, true, null]],
        1567 => [[['_route' => 'parametre_active_annee', '_controller' => 'App\\Controller\\Parametre\\AnneeController::parametre_active_annee'], ['annee'], null, null, false, true, null]],
        1595 => [[['_route' => 'parametre_annee_details', '_controller' => 'App\\Controller\\Parametre\\AnneeController::details'], ['annee'], null, null, false, true, null]],
        1617 => [[['_route' => 'parametre_annee_delete', '_controller' => 'App\\Controller\\Parametre\\AnneeController::delete'], ['annee'], null, null, false, true, null]],
        1642 => [[['_route' => 'parametre_annee_update', '_controller' => 'App\\Controller\\Parametre\\AnneeController::update'], ['annee'], null, null, false, true, null]],
        1682 => [[['_route' => 'parametre_banque_details', '_controller' => 'App\\Controller\\Parametre\\BanqueController::details'], ['banque'], null, null, false, true, null]],
        1704 => [[['_route' => 'parametre_banque_delete', '_controller' => 'App\\Controller\\Parametre\\BanqueController::delete'], ['banque'], null, null, false, true, null]],
        1729 => [[['_route' => 'parametre_banque_update', '_controller' => 'App\\Controller\\Parametre\\BanqueController::update'], ['banque'], null, null, false, true, null]],
        1769 => [[['_route' => 'parametre_chambre_details', '_controller' => 'App\\Controller\\Parametre\\ChambreController::details'], ['chambre'], null, null, false, true, null]],
        1791 => [[['_route' => 'parametre_chambre_delete', '_controller' => 'App\\Controller\\Parametre\\ChambreController::delete'], ['chambre'], null, null, false, true, null]],
        1816 => [[['_route' => 'parametre_chambre_update', '_controller' => 'App\\Controller\\Parametre\\ChambreController::update'], ['chambre'], null, null, false, true, null]],
        1860 => [[['_route' => 'parametre_departement_details', '_controller' => 'App\\Controller\\Parametre\\DepartementController::details'], ['departement'], null, null, false, true, null]],
        1882 => [[['_route' => 'parametre_departement_delete', '_controller' => 'App\\Controller\\Parametre\\DepartementController::delete'], ['departement'], null, null, false, true, null]],
        1907 => [[['_route' => 'parametre_departement_update', '_controller' => 'App\\Controller\\Parametre\\DepartementController::update'], ['departement'], null, null, false, true, null]],
        1950 => [[['_route' => 'parametre_element_details', '_controller' => 'App\\Controller\\Parametre\\ElementController::details'], ['element'], null, null, false, true, null]],
        1972 => [[['_route' => 'parametre_element_delete', '_controller' => 'App\\Controller\\Parametre\\ElementController::delete'], ['element'], null, null, false, true, null]],
        1997 => [[['_route' => 'parametre_element_update', '_controller' => 'App\\Controller\\Parametre\\ElementController::update'], ['element'], null, null, false, true, null]],
        2041 => [[['_route' => 'parametre_enseignant_detailles', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::detailles'], ['enseignant'], null, null, false, true, null]],
        2063 => [[['_route' => 'parametre_enseignant_delete', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::delete'], ['enseignant'], null, null, false, true, null]],
        2088 => [[['_route' => 'parametre_enseignant_update', '_controller' => 'App\\Controller\\Parametre\\EnseignantController::update'], ['enseignant'], null, null, false, true, null]],
        2125 => [[['_route' => 'parametre_etage_details', '_controller' => 'App\\Controller\\Parametre\\EtageController::details'], ['etage'], null, null, false, true, null]],
        2147 => [[['_route' => 'parametre_etage_delete', '_controller' => 'App\\Controller\\Parametre\\EtageController::delete'], ['etage'], null, null, false, true, null]],
        2172 => [[['_route' => 'parametre_etage_update', '_controller' => 'App\\Controller\\Parametre\\EtageController::update'], ['etage'], null, null, false, true, null]],
        2216 => [[['_route' => 'parametre_filiere_details', '_controller' => 'App\\Controller\\Parametre\\FiliereController::details'], ['filiere'], null, null, false, true, null]],
        2238 => [[['_route' => 'parametre_filiere_delete', '_controller' => 'App\\Controller\\Parametre\\FiliereController::delete'], ['filiere'], null, null, false, true, null]],
        2263 => [[['_route' => 'parametre_filiere_update', '_controller' => 'App\\Controller\\Parametre\\FiliereController::update'], ['filiere'], null, null, false, true, null]],
        2300 => [[['_route' => 'parametre_frais_details', '_controller' => 'App\\Controller\\Parametre\\FraisController::details'], ['frais'], null, null, false, true, null]],
        2322 => [[['_route' => 'parametre_frais_delete', '_controller' => 'App\\Controller\\Parametre\\FraisController::delete'], ['frais'], null, null, false, true, null]],
        2347 => [[['_route' => 'parametre_frais_update', '_controller' => 'App\\Controller\\Parametre\\FraisController::update'], ['frais'], null, null, false, true, null]],
        2391 => [[['_route' => 'parametre_langue_details', '_controller' => 'App\\Controller\\Parametre\\LanguesController::details'], ['langue'], null, null, false, true, null]],
        2413 => [[['_route' => 'parametre_langue_delete', '_controller' => 'App\\Controller\\Parametre\\LanguesController::delete'], ['langue'], null, null, false, true, null]],
        2438 => [[['_route' => 'parametre_langue_update', '_controller' => 'App\\Controller\\Parametre\\LanguesController::update'], ['langue'], null, null, false, true, null]],
        2473 => [[['_route' => 'parametre_lit_details', '_controller' => 'App\\Controller\\Parametre\\LitController::details'], ['lit'], null, null, false, true, null]],
        2495 => [[['_route' => 'parametre_lit_delete', '_controller' => 'App\\Controller\\Parametre\\LitController::delete'], ['lit'], null, null, false, true, null]],
        2520 => [[['_route' => 'parametre_lit_update', '_controller' => 'App\\Controller\\Parametre\\LitController::update'], ['lit'], null, null, false, true, null]],
        2566 => [[['_route' => 'parametre_modalites_details', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::details'], ['modalites'], null, null, false, true, null]],
        2588 => [[['_route' => 'parametre_modalites_delete', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::delete'], ['modalites'], null, null, false, true, null]],
        2613 => [[['_route' => 'parametre_modalites_update', '_controller' => 'App\\Controller\\Parametre\\ModalitesController::update'], ['modalites'], null, null, false, true, null]],
        2649 => [[['_route' => 'parametre_module_details', '_controller' => 'App\\Controller\\Parametre\\ModuleController::details'], ['module'], null, null, false, true, null]],
        2671 => [[['_route' => 'parametre_module_delete', '_controller' => 'App\\Controller\\Parametre\\ModuleController::delete'], ['module'], null, null, false, true, null]],
        2696 => [[['_route' => 'parametre_module_update', '_controller' => 'App\\Controller\\Parametre\\ModuleController::update'], ['module'], null, null, false, true, null]],
        2740 => [[['_route' => 'parametre_programmation_details', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::details'], ['programmation'], null, null, false, true, null]],
        2764 => [[['_route' => 'parametre_programmation_update', '_controller' => 'App\\Controller\\Parametre\\ProgrammationController::update'], ['programmation'], null, null, false, true, null]],
        2806 => [[['_route' => 'parametre_salle_details', '_controller' => 'App\\Controller\\Parametre\\SallesController::details'], ['salle'], null, null, false, true, null]],
        2828 => [[['_route' => 'parametre_salle_delete', '_controller' => 'App\\Controller\\Parametre\\SallesController::delete'], ['salle'], null, null, false, true, null]],
        2853 => [[['_route' => 'parametre_salle_update', '_controller' => 'App\\Controller\\Parametre\\SallesController::update'], ['salle'], null, null, false, true, null]],
        2893 => [[['_route' => 'parametre_seriebac_details', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::details'], ['seriebac'], null, null, false, true, null]],
        2915 => [[['_route' => 'parametre_seriebac_delete', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::delete'], ['seriebac'], null, null, false, true, null]],
        2940 => [[['_route' => 'parametre_seriebac_update', '_controller' => 'App\\Controller\\Parametre\\SerieBacController::update'], ['seriebac'], null, null, false, true, null]],
        2981 => [[['_route' => 'parametre_typebac_details', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::details'], ['typebac'], null, null, false, true, null]],
        3003 => [[['_route' => 'parametre_typebac_delete', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::delete'], ['typebac'], null, null, false, true, null]],
        3028 => [[['_route' => 'parametre_typebac_update', '_controller' => 'App\\Controller\\Parametre\\TypeBacController::update'], ['typebac'], null, null, false, true, null]],
        3068 => [[['_route' => 'parametre_user_operations', '_controller' => 'App\\Controller\\Parametre\\UserController::operations'], ['user'], null, null, false, true, null]],
        3101 => [[['_route' => 'parametre_user_all', '_controller' => 'App\\Controller\\Parametre\\UserController::all'], ['user', 'type'], null, null, false, true, null]],
        3133 => [[['_route' => 'parametre_user_active', '_controller' => 'App\\Controller\\Parametre\\UserController::active'], ['user', 'type'], null, null, false, true, null]],
        3180 => [[['_route' => 'parametre_user_sousmodule', '_controller' => 'App\\Controller\\Parametre\\UserController::sousmodule'], ['sousModule', 'user', 'type'], null, null, false, true, null]],
        3222 => [[['_route' => 'parametre_user_module', '_controller' => 'App\\Controller\\Parametre\\UserController::module'], ['module', 'user', 'type'], null, null, false, true, null]],
        3267 => [[['_route' => 'parametre_user_operation', '_controller' => 'App\\Controller\\Parametre\\UserController::operation'], ['operation', 'user', 'type'], null, null, false, true, null]],
        3301 => [
            [['_route' => 'app_reinitialiser', '_controller' => 'App\\Controller\\SecurityController::reinitialiser'], ['user'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
