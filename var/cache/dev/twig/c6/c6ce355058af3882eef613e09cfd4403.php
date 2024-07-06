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

/* facture/pdfs/creance.html.twig */
class __TwigTemplate_f752f7721043a824c9bdda7c42bda638 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/creance.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/creance.html.twig"));

        // line 1
        yield "<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">

<style type=\"text/Css\">
    body{
        font-family: 'Source Sans Pro', sans-serif;
    }
    .footer_style {
        position: relative;left: 5%;width:90%;border-top:1px solid graytext;padding:5px;text-align: center;font-size: 11px;line-height:14px
    }
    .titre-reb{
        width: 100%;
        background: #1f4f7a;
        font-size: 9px ;
        padding:3px 10px;
        color: #f1f1f1;
        font-weight: bold
    }
    div.zone_over
    {
        display: block;
        width: 40%;
        word-wrap:break-word !important;
    }
    .slh tr td {
        border-bottom: 1px solid #292929;
    }
    .head-file {
        width: 100% ; 

    }
    .head-file p{
        font-size: 10px;
        width: 100%;
        margin: 3px 0px 3px 5px;
    }
    .head-file b{

    }
    h2{
        font-size: 15px; 
        margin: 5px
    }
    .brd td{
        border: 0.1px solid #555 ;   
    }
</style>
<div class=\"head-file\" style=\"width:100%;text-align:center;margin-top:200px;\">
    <table cellspacing=\"0\" style=\"text-align:center;vertical-align : middle;font-size:9px;\" class=\"STable\" align=\"center\">
        <thead>
            <tr>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-left:0.5px solid black;border-top:0.5px solid black;width:40px;\">ORD</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-left:0.5px solid black;border-top:0.5px solid black;width:120px;\">ID Pré-inscription</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-left:0.5px solid black;border-top:0.5px solid black;width:120px;\">Nom</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:120px;\">Prénom</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Etablissement</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:170px;\">Formation</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Niveau</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Type</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Organisme</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">CA</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Réglement</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Créances</th>
            </tr>
        </thead>
        <tbody cellspacing=\"0\" class=\"Btable\" >
                ";
        // line 66
        $context["i"] = 1;
        // line 67
        yield "                ";
        $context["total_det"] = 0;
        // line 68
        yield "                ";
        $context["total_reg"] = 0;
        // line 69
        yield "                ";
        $context["cr"] = 0;
        // line 70
        yield "                ";
        $context["etab"] = "";
        // line 71
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creances"]) || array_key_exists("creances", $context) ? $context["creances"] : (function () { throw new RuntimeError('Variable "creances" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creance"]) {
            // line 72
            yield "                    ";
            if ((((isset($context["etab"]) || array_key_exists("etab", $context) ? $context["etab"] : (function () { throw new RuntimeError('Variable "etab" does not exist.', 72, $this->source); })()) != CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "etab", [], "any", false, false, false, 72)) && ((isset($context["etab"]) || array_key_exists("etab", $context) ? $context["etab"] : (function () { throw new RuntimeError('Variable "etab" does not exist.', 72, $this->source); })()) != ""))) {
                // line 73
                yield "                        <tr style=\"background-color:lightgrey; \">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style=\"color:red;padding:4.5px 0px;font-size:10.5px;\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["etab"]) || array_key_exists("etab", $context) ? $context["etab"] : (function () { throw new RuntimeError('Variable "etab" does not exist.', 78, $this->source); })()), "html", null, true);
                yield "</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style=\"color:red;font-size:10.5px;\">";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_det"]) || array_key_exists("total_det", $context) ? $context["total_det"] : (function () { throw new RuntimeError('Variable "total_det" does not exist.', 83, $this->source); })()), 2, ",", " "), "html", null, true);
                yield "</td>
                            <td style=\"color:red;font-size:10.5px;\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_reg"]) || array_key_exists("total_reg", $context) ? $context["total_reg"] : (function () { throw new RuntimeError('Variable "total_reg" does not exist.', 84, $this->source); })()), 2, ",", " "), "html", null, true);
                yield "</td>
                            <td style=\"color:red;font-size:10.5px;\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cr"]) || array_key_exists("cr", $context) ? $context["cr"] : (function () { throw new RuntimeError('Variable "cr" does not exist.', 85, $this->source); })()), 2, ",", " "), "html", null, true);
                yield "</td>
                        </tr>
                        ";
                // line 87
                $context["i"] = 1;
                // line 88
                yield "                        ";
                $context["total_det"] = 0;
                // line 89
                yield "                        ";
                $context["total_reg"] = 0;
                // line 90
                yield "                        ";
                $context["cr"] = 0;
                // line 91
                yield "                    ";
            }
            // line 92
            yield "                    <tr style=\"line-height:10px ;\">
                        <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 93, $this->source); })()), "html", null, true);
            yield "</td>
                        <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "code_pre", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                        <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                        <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "prenom", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                        <td style=\"color:red;padding:4.5px 0px;font-size:10.5px;\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "etab", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                        <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "forma", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                        <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "niveau", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                        <td";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "type", [], "any", false, false, false, 100), "html", null, true);
            yield "></td>
                        <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "org", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                        <td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "montant_det", [], "any", false, false, false, 102), 2, ",", " "), "html", null, true);
            yield "</td>
                        <td>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "montant_reg", [], "any", false, false, false, 103), 2, ",", " "), "html", null, true);
            yield "</td>
                        <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "creance", [], "any", false, false, false, 104), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                        ";
            // line 106
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 106, $this->source); })()) + 1);
            // line 107
            yield "                        ";
            $context["total_det"] = ((isset($context["total_det"]) || array_key_exists("total_det", $context) ? $context["total_det"] : (function () { throw new RuntimeError('Variable "total_det" does not exist.', 107, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "montant_det", [], "any", false, false, false, 107));
            // line 108
            yield "                        ";
            $context["total_reg"] = ((isset($context["total_reg"]) || array_key_exists("total_reg", $context) ? $context["total_reg"] : (function () { throw new RuntimeError('Variable "total_reg" does not exist.', 108, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "montant_reg", [], "any", false, false, false, 108));
            // line 109
            yield "                        ";
            $context["cr"] = ((isset($context["cr"]) || array_key_exists("cr", $context) ? $context["cr"] : (function () { throw new RuntimeError('Variable "cr" does not exist.', 109, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "creance", [], "any", false, false, false, 109));
            // line 110
            yield "                        ";
            $context["etab"] = CoreExtension::getAttribute($this->env, $this->source, $context["creance"], "etab", [], "any", false, false, false, 110);
            // line 111
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                <tr style=\"background-color:lightgrey; \">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"color:red;padding:4.5px 0px;font-size:10.5px;\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["etab"]) || array_key_exists("etab", $context) ? $context["etab"] : (function () { throw new RuntimeError('Variable "etab" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"color:red;font-size:10.5px;\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_det"]) || array_key_exists("total_det", $context) ? $context["total_det"] : (function () { throw new RuntimeError('Variable "total_det" does not exist.', 122, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                    <td style=\"color:red;font-size:10.5px;\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_reg"]) || array_key_exists("total_reg", $context) ? $context["total_reg"] : (function () { throw new RuntimeError('Variable "total_reg" does not exist.', 123, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                    <td style=\"color:red;font-size:10.5px;\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cr"]) || array_key_exists("cr", $context) ? $context["cr"] : (function () { throw new RuntimeError('Variable "cr" does not exist.', 124, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                </tr>
        </tbody>
    </table>
</div>
<div style=\"position: absolute;bottom:0;width:100%;border-top:1px solid gray;padding:5px;text-align: center;font-size: 11px;line-height:14px\">
  <p>
    B.P. 6533, Avenue Allal El Fassi,Madinat Al Irfane, Rabat 10 000. Maroc -
    Web : www.uiass.ma - Contact : contact@uiass.ma
    <br />Tel : +212 5 37 68 70 20 / 21 / 22 - Fax : +212 5 37 77 01 06 &nbsp;
    &nbsp; IF: 03333477 &nbsp;&nbsp; ICE: 001713416000075
  </p>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "facture/pdfs/creance.html.twig";
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
        return array (  270 => 124,  266 => 123,  262 => 122,  254 => 117,  247 => 112,  241 => 111,  238 => 110,  235 => 109,  232 => 108,  229 => 107,  227 => 106,  222 => 104,  218 => 103,  214 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  190 => 96,  186 => 95,  182 => 94,  178 => 93,  175 => 92,  172 => 91,  169 => 90,  166 => 89,  163 => 88,  161 => 87,  156 => 85,  152 => 84,  148 => 83,  140 => 78,  133 => 73,  130 => 72,  125 => 71,  122 => 70,  119 => 69,  116 => 68,  113 => 67,  111 => 66,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">

<style type=\"text/Css\">
    body{
        font-family: 'Source Sans Pro', sans-serif;
    }
    .footer_style {
        position: relative;left: 5%;width:90%;border-top:1px solid graytext;padding:5px;text-align: center;font-size: 11px;line-height:14px
    }
    .titre-reb{
        width: 100%;
        background: #1f4f7a;
        font-size: 9px ;
        padding:3px 10px;
        color: #f1f1f1;
        font-weight: bold
    }
    div.zone_over
    {
        display: block;
        width: 40%;
        word-wrap:break-word !important;
    }
    .slh tr td {
        border-bottom: 1px solid #292929;
    }
    .head-file {
        width: 100% ; 

    }
    .head-file p{
        font-size: 10px;
        width: 100%;
        margin: 3px 0px 3px 5px;
    }
    .head-file b{

    }
    h2{
        font-size: 15px; 
        margin: 5px
    }
    .brd td{
        border: 0.1px solid #555 ;   
    }
</style>
<div class=\"head-file\" style=\"width:100%;text-align:center;margin-top:200px;\">
    <table cellspacing=\"0\" style=\"text-align:center;vertical-align : middle;font-size:9px;\" class=\"STable\" align=\"center\">
        <thead>
            <tr>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-left:0.5px solid black;border-top:0.5px solid black;width:40px;\">ORD</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-left:0.5px solid black;border-top:0.5px solid black;width:120px;\">ID Pré-inscription</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-left:0.5px solid black;border-top:0.5px solid black;width:120px;\">Nom</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:120px;\">Prénom</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Etablissement</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:170px;\">Formation</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Niveau</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Type</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Organisme</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">CA</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Réglement</th>
                <th style=\"background-color:rgb(51,63,79);color:white;padding:7px 10px;border-right:0.5px solid black;border-top:0.5px solid black;width:80px;\">Créances</th>
            </tr>
        </thead>
        <tbody cellspacing=\"0\" class=\"Btable\" >
                {% set i = 1 %}
                {% set total_det = 0 %}
                {% set total_reg = 0 %}
                {% set cr = 0 %}
                {% set etab = \"\" %}
                {% for creance in creances %}
                    {% if etab != creance.etab and etab != \"\" %}
                        <tr style=\"background-color:lightgrey; \">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style=\"color:red;padding:4.5px 0px;font-size:10.5px;\">{{etab}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style=\"color:red;font-size:10.5px;\">{{total_det|number_format(2, ',', ' ')}}</td>
                            <td style=\"color:red;font-size:10.5px;\">{{total_reg|number_format(2, ',', ' ')}}</td>
                            <td style=\"color:red;font-size:10.5px;\">{{cr|number_format(2, ',', ' ')}}</td>
                        </tr>
                        {% set i = 1 %}
                        {% set total_det = 0 %}
                        {% set total_reg = 0 %}
                        {% set cr = 0 %}
                    {% endif %}
                    <tr style=\"line-height:10px ;\">
                        <td>{{i}}</td>
                        <td>{{creance.code_pre}}</td>
                        <td>{{creance.nom}}</td>
                        <td>{{creance.prenom}}</td>
                        <td style=\"color:red;padding:4.5px 0px;font-size:10.5px;\">{{creance.etab}}</td>
                        <td>{{creance.forma}}</td>
                        <td>{{creance.niveau}}</td>
                        <td{{creance.type}}></td>
                        <td>{{creance.org}}</td>
                        <td>{{creance.montant_det|number_format(2, ',', ' ')}}</td>
                        <td>{{creance.montant_reg|number_format(2, ',', ' ')}}</td>
                        <td>{{creance.creance|number_format(2, ',', ' ')}}</td>
                    </tr>
                        {% set i = i + 1 %}
                        {% set total_det = total_det + creance.montant_det %}
                        {% set total_reg = total_reg + creance.montant_reg %}
                        {% set cr = cr + creance.creance %}
                        {% set etab = creance.etab %}
                {% endfor %}
                <tr style=\"background-color:lightgrey; \">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"color:red;padding:4.5px 0px;font-size:10.5px;\">{{etab}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"color:red;font-size:10.5px;\">{{total_det|number_format(2, ',', ' ')}}</td>
                    <td style=\"color:red;font-size:10.5px;\">{{total_reg|number_format(2, ',', ' ')}}</td>
                    <td style=\"color:red;font-size:10.5px;\">{{cr|number_format(2, ',', ' ')}}</td>
                </tr>
        </tbody>
    </table>
</div>
<div style=\"position: absolute;bottom:0;width:100%;border-top:1px solid gray;padding:5px;text-align: center;font-size: 11px;line-height:14px\">
  <p>
    B.P. 6533, Avenue Allal El Fassi,Madinat Al Irfane, Rabat 10 000. Maroc -
    Web : www.uiass.ma - Contact : contact@uiass.ma
    <br />Tel : +212 5 37 68 70 20 / 21 / 22 - Fax : +212 5 37 77 01 06 &nbsp;
    &nbsp; IF: 03333477 &nbsp;&nbsp; ICE: 001713416000075
  </p>
</div>
", "facture/pdfs/creance.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\creance.html.twig");
    }
}
