<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* parametre/synchronisation/synchronisation.html.twig */
class __TwigTemplate_205e15b95e9c2123645a32c382a45694 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/synchronisation/synchronisation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/synchronisation/synchronisation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parametre/synchronisation/synchronisation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Univ - Paramétre - Département";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Synchronisation</h1>
          <div class=\"section-header-breadcrumb\">
                                                    </div>
        </div>

        <div class=\"section-body\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t
\t\t\t\t\t<style>
\t\t\t\t\t\t.checked-icon {
\t\t\t\t\t\t\tcolor: green;
\t\t\t\t\t\t}

\t\t\t\t\t\t.unchecked-icon {
\t\t\t\t\t\t\tcolor: red;
\t\t\t\t\t\t}

\t\t\t\t\t\th3.smaller {
\t\t\t\t\t\t\tfont-size: 21px
\t\t\t\t\t\t}

\t\t\t\t\t\t.lighter {
\t\t\t\t\t\t\tfont-weight: lighter
\t\t\t\t\t\t}

\t\t\t\t\t\t.blue {
\t\t\t\t\t\t\tcolor: #478FCA !important
\t\t\t\t\t\t}

\t\t\t\t\t\t.header.blue {
\t\t\t\t\t\t\tborder-bottom-color: #d5e3ef
\t\t\t\t\t\t}

\t\t\t\t\t\t.header {
\t\t\t\t\t\t\t/* line-height: 28px;
\t\t\t\t\t\t\tmargin-bottom: 16px;
\t\t\t\t\t\t\tmargin-top: 18px; */
\t\t\t\t\t\t\tpadding-bottom: 4px;
\t\t\t\t\t\t\tborder-bottom: 1px solid #CCC
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-dragel>li>.dd2-handle,
\t\t\t\t\t\t.dd2-handle {
\t\t\t\t\t\t\tleft: 0;
\t\t\t\t\t\t\ttop: 0;
\t\t\t\t\t\t\twidth: 36px;
\t\t\t\t\t\t\tmargin: 0 !important;
\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\tpadding: 0 !important;
\t\t\t\t\t\t\tline-height: 38px;
\t\t\t\t\t\t\theight: 38px;
\t\t\t\t\t\t\tbackground: #EBEDF2;
\t\t\t\t\t\t\tborder: 1px solid #DEE4EA;
\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\tz-index: 1
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle,
\t\t\t\t\t\t.dd2-content {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tmin-height: 38px;
\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\tpadding: 8px 12px;
\t\t\t\t\t\t\tbackground: #F8FAFF;
\t\t\t\t\t\t\tborder: 1px solid #DAE2EA;
\t\t\t\t\t\t\tcolor: #7C9EB2;
\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\t\tbox-sizing: border-box
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-empty,
\t\t\t\t\t\t.dd-handle,
\t\t\t\t\t\t.dd-placeholder,
\t\t\t\t\t\t.dd2-content {
\t\t\t\t\t\t\t-webkit-box-sizing: border-box;
\t\t\t\t\t\t\t-moz-box-sizing: border-box
\t\t\t\t\t\t}

\t\t\t\t\t\t.bigger-130 {
\t\t\t\t\t\t\tfont-size: 130% !important
\t\t\t\t\t\t}

\t\t\t\t\t\t.grey {
\t\t\t\t\t\t\tcolor: #777 !important
\t\t\t\t\t\t}

\t\t\t\t\t\t.ace-icon {
\t\t\t\t\t\t\ttext-align: center
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd,
\t\t\t\t\t\t.dd-list {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\tlist-style: none
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd,
\t\t\t\t\t\t.dd-item>button,
\t\t\t\t\t\t.dd-list {
\t\t\t\t\t\t\tposition: relative
\t\t\t\t\t\t}

\t\t\t\t\t\t@media only screen and(max-width:767px) and(-webkit-min-device-pixel-ratio:0) {
\t\t\t\t\t\t\t.ui-jqgrid .ui-jqgrid-pager>.ui-pager-control>.ui-pg-table>tbody>tr>td#grid-pager_center>.ui-pg-table {
\t\t\t\t\t\t\t\twidth: 300px
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd {
\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\tmax-width: 600px;
\t\t\t\t\t\t\tline-height: 20px
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-list {
\t\t\t\t\t\t\tmargin: 0
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-list .dd-list {
\t\t\t\t\t\t\tpadding-left: 30px
\t\t\t\t\t\t}


\t\t\t\t\t\t.dd2-handle+.dd2-content,
\t\t\t\t\t\t.dd2-handle+.dd2-content[class*=btn-] {
\t\t\t\t\t\t\tpadding-left: 44px
\t\t\t\t\t\t}


\t\t\t\t\t\t.dd-empty,
\t\t\t\t\t\t.dd-item,
\t\t\t\t\t\t.dd-placeholder {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\tmargin: 2px 0;
\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\tmin-height: 20px;
\t\t\t\t\t\t\tline-height: 20px
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle:hover,
\t\t\t\t\t\t.dd2-content:hover {
\t\t\t\t\t\t\tcolor: #438EB9;
\t\t\t\t\t\t\tbackground: #F4F6F7;
\t\t\t\t\t\t\tborder-color: #DCE2E8
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle[class*=btn-],
\t\t\t\t\t\t.dd2-content[class*=btn-] {
\t\t\t\t\t\t\tcolor: #FFF;
\t\t\t\t\t\t\tborder: none;
\t\t\t\t\t\t\tpadding: 9px 12px
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle[class*=btn-]:hover,
\t\t\t\t\t\t.dd2-content[class*=btn-]:hover {
\t\t\t\t\t\t\topacity: .85;
\t\t\t\t\t\t\tcolor: #FFF
\t\t\t\t\t\t}

\t\t\t\t\t\t.row_ {
\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\tcolor: #FFF !important;
\t\t\t\t\t\t\ttext-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
\t\t\t\t\t\t\tbackground-image: none !important;
\t\t\t\t\t\t\t/* border: 5px solid #FFF; */
\t\t\t\t\t\t\tborder-radius: 0;
\t\t\t\t\t\t\tbox-shadow: none !important;
\t\t\t\t\t\t\t-webkit-transition: background-color 0.15s, border-color 0.15s, opacity 0.15s;
\t\t\t\t\t\t\t-o-transition: background-color 0.15s, border-color 0.15s, opacity 0.15s;
\t\t\t\t\t\t\ttransition: background-color 0.15s, border-color 0.15s, opacity 0.15s;
\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\tbackground-color: #ABBAC3 !important;
\t\t\t\t\t\t\tborder-color: #ABBAC3;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<a class=\"btn btn-primary synchnisation_academique\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-refresh align-top bigger-125\"></i>
\t\t\t\t\t\t\t\tSychronisation-Informations Académique (Étape - 1)
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Informations Académique</h3>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"dd dd-draghandle\">
\t\t\t\t\t\t\t\t<ol class=\"dd-list\">
\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_etablissement normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tEtablissement
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_etablissement_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_formation normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tFormation
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_formation_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_annee normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tAnnée
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_annee_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_promotion normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tPromotion
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_promotion_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_semestre normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tSemestre
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_semestre_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_organisme normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tOrganisme
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_organisme_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_banque normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tBanque
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_banque_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_modalite normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tModalité
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_modalite_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_naturedemande normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tNature Demande
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_naturedemande_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t\t<div class=\"row_\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-secondary disabled synchnisation_etudiant\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-refresh align-top bigger-125\"></i>
\t\t\t\t\t\t\t\t\tSychronisation-Données Etudiant (Étape - 2)
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Données Etudiant</h3>


\t\t\t\t\t\t\t<div class=\"dd dd-draghandle\">
\t\t\t\t\t\t\t<ol class=\"dd-list\">

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_etudiant normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Etudiant<span class=\"syn_t_etudiant_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_preinscription normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Preinscription<span class=\"syn_t_preinscription_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_admission normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Admission<span class=\"syn_t_admission_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_inscription normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Inscription<span class=\"syn_t_inscription_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_p_statut normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Statut<span class=\"syn_p_statut_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_p_groupe normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">groupe<span class=\"syn_p_groupe_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </section>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 425
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 426
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 427
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("synchronisation");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parametre/synchronisation/synchronisation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  495 => 427,  491 => 426,  481 => 425,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Paramétre - Département{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Synchronisation</h1>
          <div class=\"section-header-breadcrumb\">
              {# <a href=\"#\" class=\"btn btn-success ml-1\" id=\"modifier\"><i class=\"fas fa-edit\"></i>  Modifier</a>
              <a href=\"#\" class=\"btn btn-success ml-1\" id=\"ajouter\"><i class=\"fas fa-plus\"></i>  Aouter</a> #}
              {# <a href=\"#\" class=\"btn btn-success ml-1\" id=\"ajouter\"><i class=\"fas fa-plus\"></i>  Aouter</a> #}
              {# {% for operation in operations %}
                <a href=\"{{operation.link}}\" class=\"{{operation.classTag}}\" id=\"{{operation.idTag}}\"><i class=\"{{operation.icon}}\"></i>  {{operation.designation}}</a>
              {% endfor %} #}
          </div>
        </div>

        <div class=\"section-body\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t
\t\t\t\t\t<style>
\t\t\t\t\t\t.checked-icon {
\t\t\t\t\t\t\tcolor: green;
\t\t\t\t\t\t}

\t\t\t\t\t\t.unchecked-icon {
\t\t\t\t\t\t\tcolor: red;
\t\t\t\t\t\t}

\t\t\t\t\t\th3.smaller {
\t\t\t\t\t\t\tfont-size: 21px
\t\t\t\t\t\t}

\t\t\t\t\t\t.lighter {
\t\t\t\t\t\t\tfont-weight: lighter
\t\t\t\t\t\t}

\t\t\t\t\t\t.blue {
\t\t\t\t\t\t\tcolor: #478FCA !important
\t\t\t\t\t\t}

\t\t\t\t\t\t.header.blue {
\t\t\t\t\t\t\tborder-bottom-color: #d5e3ef
\t\t\t\t\t\t}

\t\t\t\t\t\t.header {
\t\t\t\t\t\t\t/* line-height: 28px;
\t\t\t\t\t\t\tmargin-bottom: 16px;
\t\t\t\t\t\t\tmargin-top: 18px; */
\t\t\t\t\t\t\tpadding-bottom: 4px;
\t\t\t\t\t\t\tborder-bottom: 1px solid #CCC
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-dragel>li>.dd2-handle,
\t\t\t\t\t\t.dd2-handle {
\t\t\t\t\t\t\tleft: 0;
\t\t\t\t\t\t\ttop: 0;
\t\t\t\t\t\t\twidth: 36px;
\t\t\t\t\t\t\tmargin: 0 !important;
\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\tpadding: 0 !important;
\t\t\t\t\t\t\tline-height: 38px;
\t\t\t\t\t\t\theight: 38px;
\t\t\t\t\t\t\tbackground: #EBEDF2;
\t\t\t\t\t\t\tborder: 1px solid #DEE4EA;
\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\tz-index: 1
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle,
\t\t\t\t\t\t.dd2-content {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tmin-height: 38px;
\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\tpadding: 8px 12px;
\t\t\t\t\t\t\tbackground: #F8FAFF;
\t\t\t\t\t\t\tborder: 1px solid #DAE2EA;
\t\t\t\t\t\t\tcolor: #7C9EB2;
\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\t\tbox-sizing: border-box
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-empty,
\t\t\t\t\t\t.dd-handle,
\t\t\t\t\t\t.dd-placeholder,
\t\t\t\t\t\t.dd2-content {
\t\t\t\t\t\t\t-webkit-box-sizing: border-box;
\t\t\t\t\t\t\t-moz-box-sizing: border-box
\t\t\t\t\t\t}

\t\t\t\t\t\t.bigger-130 {
\t\t\t\t\t\t\tfont-size: 130% !important
\t\t\t\t\t\t}

\t\t\t\t\t\t.grey {
\t\t\t\t\t\t\tcolor: #777 !important
\t\t\t\t\t\t}

\t\t\t\t\t\t.ace-icon {
\t\t\t\t\t\t\ttext-align: center
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd,
\t\t\t\t\t\t.dd-list {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\tlist-style: none
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd,
\t\t\t\t\t\t.dd-item>button,
\t\t\t\t\t\t.dd-list {
\t\t\t\t\t\t\tposition: relative
\t\t\t\t\t\t}

\t\t\t\t\t\t@media only screen and(max-width:767px) and(-webkit-min-device-pixel-ratio:0) {
\t\t\t\t\t\t\t.ui-jqgrid .ui-jqgrid-pager>.ui-pager-control>.ui-pg-table>tbody>tr>td#grid-pager_center>.ui-pg-table {
\t\t\t\t\t\t\t\twidth: 300px
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd {
\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\tmax-width: 600px;
\t\t\t\t\t\t\tline-height: 20px
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-list {
\t\t\t\t\t\t\tmargin: 0
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-list .dd-list {
\t\t\t\t\t\t\tpadding-left: 30px
\t\t\t\t\t\t}


\t\t\t\t\t\t.dd2-handle+.dd2-content,
\t\t\t\t\t\t.dd2-handle+.dd2-content[class*=btn-] {
\t\t\t\t\t\t\tpadding-left: 44px
\t\t\t\t\t\t}


\t\t\t\t\t\t.dd-empty,
\t\t\t\t\t\t.dd-item,
\t\t\t\t\t\t.dd-placeholder {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\tmargin: 2px 0;
\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\tmin-height: 20px;
\t\t\t\t\t\t\tline-height: 20px
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle:hover,
\t\t\t\t\t\t.dd2-content:hover {
\t\t\t\t\t\t\tcolor: #438EB9;
\t\t\t\t\t\t\tbackground: #F4F6F7;
\t\t\t\t\t\t\tborder-color: #DCE2E8
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle[class*=btn-],
\t\t\t\t\t\t.dd2-content[class*=btn-] {
\t\t\t\t\t\t\tcolor: #FFF;
\t\t\t\t\t\t\tborder: none;
\t\t\t\t\t\t\tpadding: 9px 12px
\t\t\t\t\t\t}

\t\t\t\t\t\t.dd-handle[class*=btn-]:hover,
\t\t\t\t\t\t.dd2-content[class*=btn-]:hover {
\t\t\t\t\t\t\topacity: .85;
\t\t\t\t\t\t\tcolor: #FFF
\t\t\t\t\t\t}

\t\t\t\t\t\t.row_ {
\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\tcolor: #FFF !important;
\t\t\t\t\t\t\ttext-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
\t\t\t\t\t\t\tbackground-image: none !important;
\t\t\t\t\t\t\t/* border: 5px solid #FFF; */
\t\t\t\t\t\t\tborder-radius: 0;
\t\t\t\t\t\t\tbox-shadow: none !important;
\t\t\t\t\t\t\t-webkit-transition: background-color 0.15s, border-color 0.15s, opacity 0.15s;
\t\t\t\t\t\t\t-o-transition: background-color 0.15s, border-color 0.15s, opacity 0.15s;
\t\t\t\t\t\t\ttransition: background-color 0.15s, border-color 0.15s, opacity 0.15s;
\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\tbackground-color: #ABBAC3 !important;
\t\t\t\t\t\t\tborder-color: #ABBAC3;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<a class=\"btn btn-primary synchnisation_academique\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-refresh align-top bigger-125\"></i>
\t\t\t\t\t\t\t\tSychronisation-Informations Académique (Étape - 1)
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Informations Académique</h3>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"dd dd-draghandle\">
\t\t\t\t\t\t\t\t<ol class=\"dd-list\">
\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_etablissement normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tEtablissement
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_etablissement_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_formation normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tFormation
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_formation_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_annee normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tAnnée
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_annee_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_promotion normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tPromotion
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_promotion_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_ac_semestre normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tSemestre
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_ac_semestre_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_organisme normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tOrganisme
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_organisme_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_banque normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tBanque
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_banque_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_modalite normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tModalité
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_modalite_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"syn_naturedemande normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">
\t\t\t\t\t\t\t\t\t\t\tNature Demande
\t\t\t\t\t\t\t\t\t\t\t<span class=\"syn_naturedemande_content\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t\t<div class=\"row_\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-secondary disabled synchnisation_etudiant\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-refresh align-top bigger-125\"></i>
\t\t\t\t\t\t\t\t\tSychronisation-Données Etudiant (Étape - 2)
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Données Etudiant</h3>


\t\t\t\t\t\t\t<div class=\"dd dd-draghandle\">
\t\t\t\t\t\t\t<ol class=\"dd-list\">

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_etudiant normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Etudiant<span class=\"syn_t_etudiant_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_preinscription normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Preinscription<span class=\"syn_t_preinscription_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_admission normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Admission<span class=\"syn_t_admission_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_t_inscription normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Inscription<span class=\"syn_t_inscription_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_p_statut normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Statut<span class=\"syn_p_statut_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_p_groupe normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">groupe<span class=\"syn_p_groupe_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t{# <div class=\"col-md-4\">
\t\t\t\t\t\t


\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t\t<div class=\"row_\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-secondary disabled synchnisation_comptes\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-refresh align-top bigger-125\"></i>
\t\t\t\t\t\t\t\t\tSychronisation-Données Comptes utilisateurs (Étape - 3)
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Données Compte utilisateurs</h3>
\t\t\t\t\t\t<div class=\"dd dd-draghandle\">
\t\t\t\t\t\t\t<ol class=\"dd-list\">

\t\t\t\t\t\t\t\t<li class=\"dd-item dd2-item\">
\t\t\t\t\t\t\t\t\t<div class=\"dd-handle dd2-handle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"syn_compte normal-icon ace-icon fa fas fa-edit grey bigger-130\"></i>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dd2-content\">Utilisateurs
\t\t\t\t\t\t\t\t\t\t<span class=\"syn_compte_content\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div> #}
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </section>
</div>

{% endblock %}

{% block javascripts %}
{{parent()}}
{{ encore_entry_script_tags('synchronisation') }}
{# {{ encore_entry_script_tags('salarie_salarie') }} #}
{% endblock %}

", "parametre/synchronisation/synchronisation.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\synchronisation\\synchronisation.html.twig");
    }
}
