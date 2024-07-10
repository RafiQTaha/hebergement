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

/* facture/pdfs/facture_facture.html.twig */
class __TwigTemplate_2cb2cbeddca2e6cee1c2b4099766288f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture_facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture_facture.html.twig"));

        // line 1
        yield "<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
<style type=\"text/Css\">
   
    body{
        font-family: 'Source Sans Pro', sans-serif;
    }
    .slh tr td {
        border-bottom: 1px solid #292929;
        text-align: left;
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

</style>
<div style=\"text-align: center; margin-bottom: 60px !important;\">
        <table style=\"width: 100% ;\" cellspacing=\"0\">
            <tr>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                    <img src=\"./assets/img/logo/logo-hebergement.png\" style=\" width: 800px; margin: 0 auto;\">
                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                </th>                    
            </tr>
        </table>
    ";
        // line 40
        yield "    ";
        // line 41
        yield "</div>
<div >
    <table style=\"width: 100% ;text-align: center;border: 1px solid #292929; border-bottom: none;\" cellspacing=\"0\">        <tr>
            <td style=\"width: 30% ; border-bottom: 1px solid #292929 ;\">
                <table style=\"width: 100% ;\" cellspacing=\"0\">
                    <tr>
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Code Facture </th>
                    </tr>
                    <tr>
                        <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(31, 79, 122);\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 54, $this->source); })()), "code", [], "any", false, false, false, 54), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 58, $this->source); })()), "active", [], "any", false, false, false, 58) == 0)) {
            yield " FACTURE ";
        } else {
            yield " FACTURE PRO FORMAT
                 ";
        }
        // line 60
        yield "              </td>
            <td style=\"width: 30% ;border-bottom: 1px solid #292929 ;\">
                <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
                    <tr>
    
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Date   </th>
                    </tr>
                    <tr>
    
                        <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        ";
        // line 74
        yield "                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 74, $this->source); })()), "created", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </td>
    
        </tr>
    </table>
    <table style=\"width: 100%;border-top: 1px solid#292929\" cellspacing=\"0\">
        <tr>
            <td style=\"width: 100% ; height: 10px;\"></td>
        </tr>
    </table>

    ";
        // line 88
        yield "    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;width:70%\"> INFORMATIONS SUR L'ETABLISSEMENT</td> 
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;\"> INFORMATIONS SUR L'ETUDIANT</td> 
        </tr> 
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ETABLISSEMENT   :   ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 95, $this->source); })()), "annee", [], "any", false, false, false, 95), "formation", [], "any", false, false, false, 95), "etablissement", [], "any", false, false, false, 95), "designation", [], "any", false, false, false, 95), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">REFERENCE   :   ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 96, $this->source); })()), "preinscription", [], "any", false, false, false, 96), "code", [], "any", false, false, false, 96), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ANNEE UNIVERSITAIRE :  ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 99, $this->source); })()), "annee", [], "any", false, false, false, 99), "designation", [], "any", false, false, false, 99), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NOM & PRENOM :  ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 100, $this->source); })()), "preinscription", [], "any", false, false, false, 100), "etudiant", [], "any", false, false, false, 100), "nom", [], "any", false, false, false, 100), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 100, $this->source); })()), "preinscription", [], "any", false, false, false, 100), "etudiant", [], "any", false, false, false, 100), "prenom", [], "any", false, false, false, 100), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">PERIODE De: ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 103, $this->source); })()), "litInscription", [], "any", false, false, false, 103), "start", [], "any", false, false, false, 103), "Y-m-d"), "html", null, true);
        yield " Au: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 103, $this->source); })()), "litInscription", [], "any", false, false, false, 103), "end", [], "any", false, false, false, 103), "Y-m-d"), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">CHAMBRE   :   ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 104, $this->source); })()), "litInscription", [], "any", false, false, false, 104), "lit", [], "any", false, false, false, 104), "chambre", [], "any", false, false, false, 104), "designation", [], "any", false, false, false, 104), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 104, $this->source); })()), "litInscription", [], "any", false, false, false, 104), "lit", [], "any", false, false, false, 104), "chambre", [], "any", false, false, false, 104), "typeChambre", [], "any", false, false, false, 104), "designation", [], "any", false, false, false, 104), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
            ";
        // line 107
        if (((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 107, $this->source); })()) == "Payant")) {
            // line 108
            yield "                <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">Source :  Payant</td>
            ";
        } else {
            // line 110
            yield "                <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">Source :  Fondation Cheikh Zaid</td>
            ";
        }
        // line 112
        yield "            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">Structure   :   ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "</td>
        </tr>  
    </table>
    <br/>

    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 11px;\" >
        <tr style='background: #C9C5A5; color: #fff ;'>
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:20%;text-align:center;font-size: 10px\"> DATE OPERATION </td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:30%;text-align:center;font-size: 10px\"> DESIGNATION</td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:20%;text-align:center;font-size: 10px\"> ORGANISME </td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:20%;text-align:center;font-size: 10px\"> PART PAYANT</td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:15%;text-align:center;font-size: 10px\"> MONTANT TOTAL</td> 
        </tr> 
        ";
        // line 125
        $context["i"] = 1;
        // line 126
        yield "        ";
        $context["SommeOrganisme"] = 0;
        // line 127
        yield "        ";
        $context["SommePayant"] = 0;
        // line 128
        yield "        ";
        $context["SommeToTal"] = 0;
        // line 129
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["operationdets"]) || array_key_exists("operationdets", $context) ? $context["operationdets"] : (function () { throw new RuntimeError('Variable "operationdets" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operationdet"]) {
            // line 130
            yield "                <tr>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:20%;text-align:center\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "dateOperation", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:30%;text-align:center\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "designation", [], "any", false, false, false, 132), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:20%;text-align:center\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByOrg", [], "any", false, false, false, 133), 2, ",", " "), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:15%;text-align:center\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByPayant", [], "any", false, false, false, 134), 2, ",", " "), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:15%;text-align:center\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "total", [], "any", false, false, false, 135), 2, ",", " "), "html", null, true);
            yield "</td>
                </tr>
            ";
            // line 137
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 137, $this->source); })()) + 1);
            // line 138
            yield "            ";
            $context["SommeOrganisme"] = ((isset($context["SommeOrganisme"]) || array_key_exists("SommeOrganisme", $context) ? $context["SommeOrganisme"] : (function () { throw new RuntimeError('Variable "SommeOrganisme" does not exist.', 138, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByOrg", [], "any", false, false, false, 138));
            // line 139
            yield "            ";
            $context["SommePayant"] = ((isset($context["SommePayant"]) || array_key_exists("SommePayant", $context) ? $context["SommePayant"] : (function () { throw new RuntimeError('Variable "SommePayant" does not exist.', 139, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByPayant", [], "any", false, false, false, 139));
            // line 140
            yield "            ";
            $context["SommeToTal"] = ((isset($context["SommeToTal"]) || array_key_exists("SommeToTal", $context) ? $context["SommeToTal"] : (function () { throw new RuntimeError('Variable "SommeToTal" does not exist.', 140, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "total", [], "any", false, false, false, 140));
            // line 141
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operationdet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " 
    </table>

    
    <br/><br/>
    
        <table  cellspacing=\"0\" style=\" width: 100%; font-size: 15px !important; text-align: left\" >
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td>
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Total </td>
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["SommeOrganisme"]) || array_key_exists("SommeOrganisme", $context) ? $context["SommeOrganisme"] : (function () { throw new RuntimeError('Variable "SommeOrganisme" does not exist.', 151, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["SommePayant"]) || array_key_exists("SommePayant", $context) ? $context["SommePayant"] : (function () { throw new RuntimeError('Variable "SommePayant" does not exist.', 152, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["SommeToTal"]) || array_key_exists("SommeToTal", $context) ? $context["SommeToTal"] : (function () { throw new RuntimeError('Variable "SommeToTal" does not exist.', 153, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
    
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Total Encaissement </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reglementOrg"]) || array_key_exists("reglementOrg", $context) ? $context["reglementOrg"] : (function () { throw new RuntimeError('Variable "reglementOrg" does not exist.', 159, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reglementPyt"]) || array_key_exists("reglementPyt", $context) ? $context["reglementPyt"] : (function () { throw new RuntimeError('Variable "reglementPyt" does not exist.', 160, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["reglementOrg"]) || array_key_exists("reglementOrg", $context) ? $context["reglementOrg"] : (function () { throw new RuntimeError('Variable "reglementOrg" does not exist.', 161, $this->source); })()) + (isset($context["reglementPyt"]) || array_key_exists("reglementPyt", $context) ? $context["reglementPyt"] : (function () { throw new RuntimeError('Variable "reglementPyt" does not exist.', 161, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Solde </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \"></td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \"></td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["SommeToTal"]) || array_key_exists("SommeToTal", $context) ? $context["SommeToTal"] : (function () { throw new RuntimeError('Variable "SommeToTal" does not exist.', 168, $this->source); })()) - ((isset($context["reglementOrg"]) || array_key_exists("reglementOrg", $context) ? $context["reglementOrg"] : (function () { throw new RuntimeError('Variable "reglementOrg" does not exist.', 168, $this->source); })()) + (isset($context["reglementPyt"]) || array_key_exists("reglementPyt", $context) ? $context["reglementPyt"] : (function () { throw new RuntimeError('Variable "reglementPyt" does not exist.', 168, $this->source); })()))), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
    
        </table>
    <br/><br/>
    
        <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 9px;margin-top:100px;\" >
        
            ";
        // line 176
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 176, $this->source); })()), "preinscription", [], "any", false, false, false, 176), "annee", [], "any", false, false, false, 176), "formation", [], "any", false, false, false, 176), "etablissement", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176) == 25)) {
            // line 177
            yield "                <tr>
                        <td style=\"width: 100% ;padding:2px 2px 2px 30px;\"><b>RIB CFC : 007 810 0012408000301574 49</b></td> 
                </tr>
            ";
        } else {
            // line 181
            yield "                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 10px 30px \"> <b>Délai de paiement :</b> </td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 2px 30px \">* PAIEMENT ANNUEL : AVANT LE 15 SEPTEMBRE DE CHAQUE ANNEE</td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 2px 30px\">* PAIEMENT SEMESTRIEL : SEMESTRE 01 (AVANT LE 30 SEPTEMBRE DE CHAQUE ANNEE) </td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 10px 70px\">SEMESTRE 02 (AVANT LE 28 FEVRIER DE CHAQUE ANNEE)</td> 
                </tr>
                <tr>
                    <td></td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:15px 2px 2px 30px \">NB : EN CAS DE DEPASSEMENT DES DELAIS DE PAIEMENT,UNE PENALITE DE RETARD EST APPLIQUEE. </td> 
                </tr>
                <tr>
                    ";
            // line 200
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 200, $this->source); })()), "preinscription", [], "any", false, false, false, 200), "annee", [], "any", false, false, false, 200), "formation", [], "any", false, false, false, 200), "etablissement", [], "any", false, false, false, 200), "id", [], "any", false, false, false, 200) == 28) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 200, $this->source); })()), "preinscription", [], "any", false, false, false, 200), "annee", [], "any", false, false, false, 200), "formation", [], "any", false, false, false, 200), "etablissement", [], "any", false, false, false, 200), "id", [], "any", false, false, false, 200) == 5))) {
                // line 201
                yield "                        <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS - LEZ : 007 810 0012405000301617 32</b></td>
                        ";
            } else {
                // line 203
                yield "                        <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS : 007 810 0012404000300234 15</b></td>
                    ";
            }
            // line 205
            yield "                </tr>
                <tr>
                    ";
            // line 207
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 207, $this->source); })()), "preinscription", [], "any", false, false, false, 207), "annee", [], "any", false, false, false, 207), "formation", [], "any", false, false, false, 207), "etablissement", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207) != 28) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 207, $this->source); })()), "preinscription", [], "any", false, false, false, 207), "annee", [], "any", false, false, false, 207), "formation", [], "any", false, false, false, 207), "etablissement", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207) != 5))) {
                // line 208
                yield "                        <td style=\"width: 100% ;padding:2px 2px 2px 30px;\"><b>RIB UIASS - EAS : 007 810 0012405000301616 35</b></td> 
                    ";
            }
            // line 210
            yield "                </tr>
            ";
        }
        // line 212
        yield "        </table>


</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "facture/pdfs/facture_facture.html.twig";
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
        return array (  386 => 212,  382 => 210,  378 => 208,  376 => 207,  372 => 205,  368 => 203,  364 => 201,  362 => 200,  341 => 181,  335 => 177,  333 => 176,  322 => 168,  312 => 161,  308 => 160,  304 => 159,  295 => 153,  291 => 152,  287 => 151,  270 => 141,  267 => 140,  264 => 139,  261 => 138,  259 => 137,  254 => 135,  250 => 134,  246 => 133,  242 => 132,  238 => 131,  235 => 130,  230 => 129,  227 => 128,  224 => 127,  221 => 126,  219 => 125,  202 => 112,  198 => 110,  194 => 108,  192 => 107,  184 => 104,  178 => 103,  170 => 100,  166 => 99,  160 => 96,  156 => 95,  147 => 88,  130 => 74,  115 => 60,  108 => 58,  101 => 54,  86 => 41,  84 => 40,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
<style type=\"text/Css\">
   
    body{
        font-family: 'Source Sans Pro', sans-serif;
    }
    .slh tr td {
        border-bottom: 1px solid #292929;
        text-align: left;
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

</style>
<div style=\"text-align: center; margin-bottom: 60px !important;\">
        <table style=\"width: 100% ;\" cellspacing=\"0\">
            <tr>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                    <img src=\"./assets/img/logo/logo-hebergement.png\" style=\" width: 800px; margin: 0 auto;\">
                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                </th>                    
            </tr>
        </table>
    {# <img src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" style=\" width: 180px; margin: 0 auto;\"> #}
    {# <img src=\"./assets/img/logo/cpge.jpg\" style=\" width: 250px; margin: 0 auto;\"> #}
</div>
<div >
    <table style=\"width: 100% ;text-align: center;border: 1px solid #292929; border-bottom: none;\" cellspacing=\"0\">        <tr>
            <td style=\"width: 30% ; border-bottom: 1px solid #292929 ;\">
                <table style=\"width: 100% ;\" cellspacing=\"0\">
                    <tr>
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Code Facture </th>
                    </tr>
                    <tr>
                        <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(31, 79, 122);\">{{operationcab.code}}</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">{% if operationcab.active == 0 %} FACTURE {% else %} FACTURE PRO FORMAT
                 {% endif %}
              </td>
            <td style=\"width: 30% ;border-bottom: 1px solid #292929 ;\">
                <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
                    <tr>
    
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Date   </th>
                    </tr>
                    <tr>
    
                        <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        {# <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">{{ \"now\"|date(\"d/m/Y\") }}</td> #}
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">{{ operationcab.created|date(\"d/m/Y\") }}</td>
                    </tr>
                </table>
            </td>
    
        </tr>
    </table>
    <table style=\"width: 100%;border-top: 1px solid#292929\" cellspacing=\"0\">
        <tr>
            <td style=\"width: 100% ; height: 10px;\"></td>
        </tr>
    </table>

    {# ///////////////////////////////////////// #}
    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;width:70%\"> INFORMATIONS SUR L'ETABLISSEMENT</td> 
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;\"> INFORMATIONS SUR L'ETUDIANT</td> 
        </tr> 
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ETABLISSEMENT   :   {{operationcab.annee.formation.etablissement.designation}}</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">REFERENCE   :   {{operationcab.preinscription.code}}</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ANNEE UNIVERSITAIRE :  {{operationcab.annee.designation}}</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NOM & PRENOM :  {{operationcab.preinscription.etudiant.nom}} {{operationcab.preinscription.etudiant.prenom}}</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">PERIODE De: {{operationcab.litInscription.start | date('Y-m-d')}} Au: {{operationcab.litInscription.end | date('Y-m-d')}}</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">CHAMBRE   :   {{operationcab.litInscription.lit.chambre.designation}} - {{operationcab.litInscription.lit.chambre.typeChambre.designation}}</td>
        </tr>  
        <tr>
            {% if source == 'Payant' %}
                <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">Source :  Payant</td>
            {% else %}
                <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">Source :  Fondation Cheikh Zaid</td>
            {% endif %}
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">Structure   :   {{source}}</td>
        </tr>  
    </table>
    <br/>

    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 11px;\" >
        <tr style='background: #C9C5A5; color: #fff ;'>
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:20%;text-align:center;font-size: 10px\"> DATE OPERATION </td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:30%;text-align:center;font-size: 10px\"> DESIGNATION</td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:20%;text-align:center;font-size: 10px\"> ORGANISME </td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:20%;text-align:center;font-size: 10px\"> PART PAYANT</td> 
            <td style=\"font-weight: bold;padding:3px 0px 3px 2px;width:15%;text-align:center;font-size: 10px\"> MONTANT TOTAL</td> 
        </tr> 
        {% set i = 1 %}
        {% set SommeOrganisme = 0 %}
        {% set SommePayant = 0 %}
        {% set SommeToTal = 0 %}
        {% for operationdet in operationdets %}
                <tr>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:20%;text-align:center\">{{operationdet.dateOperation}}</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:30%;text-align:center\">{{operationdet.designation}}</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:20%;text-align:center\">{{operationdet.SumByOrg|number_format(2, ',', ' ')}}</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:15%;text-align:center\">{{operationdet.SumByPayant|number_format(2, ',', ' ')}}</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:15%;text-align:center\">{{operationdet.total|number_format(2, ',', ' ')}}</td>
                </tr>
            {% set i = i + 1 %}
            {% set SommeOrganisme = SommeOrganisme + operationdet.SumByOrg  %}
            {% set SommePayant = SommePayant + operationdet.SumByPayant %}
            {% set SommeToTal = SommeToTal + operationdet.total %}
        {% endfor %} 
    </table>

    
    <br/><br/>
    
        <table  cellspacing=\"0\" style=\" width: 100%; font-size: 15px !important; text-align: left\" >
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td>
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Total </td>
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \">{{SommeOrganisme|number_format(2, ',', ' ')}}</td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">{{SommePayant|number_format(2, ',', ' ')}}</td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">{{SommeToTal|number_format(2, ',', ' ')}}</td> 
            </tr>
    
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Total Encaissement </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \">{{reglementOrg|number_format(2, ',', ' ')}}</td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">{{reglementPyt|number_format(2, ',', ' ')}}</td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">{{(reglementOrg + reglementPyt)|number_format(2, ',', ' ')}}</td> 
            </tr>
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Solde </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \"></td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \"></td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">{{(SommeToTal - (reglementOrg + reglementPyt ))|number_format(2, ',', ' ')}}</td> 
            </tr>
    
        </table>
    <br/><br/>
    
        <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 9px;margin-top:100px;\" >
        
            {% if operationcab.preinscription.annee.formation.etablissement.id == 25 %}
                <tr>
                        <td style=\"width: 100% ;padding:2px 2px 2px 30px;\"><b>RIB CFC : 007 810 0012408000301574 49</b></td> 
                </tr>
            {% else %}
                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 10px 30px \"> <b>Délai de paiement :</b> </td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 2px 30px \">* PAIEMENT ANNUEL : AVANT LE 15 SEPTEMBRE DE CHAQUE ANNEE</td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 2px 30px\">* PAIEMENT SEMESTRIEL : SEMESTRE 01 (AVANT LE 30 SEPTEMBRE DE CHAQUE ANNEE) </td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:2px 2px 10px 70px\">SEMESTRE 02 (AVANT LE 28 FEVRIER DE CHAQUE ANNEE)</td> 
                </tr>
                <tr>
                    <td></td> 
                </tr>
                <tr>
                    <td style=\"width: 100% ;padding:15px 2px 2px 30px \">NB : EN CAS DE DEPASSEMENT DES DELAIS DE PAIEMENT,UNE PENALITE DE RETARD EST APPLIQUEE. </td> 
                </tr>
                <tr>
                    {% if operationcab.preinscription.annee.formation.etablissement.id == 28 or operationcab.preinscription.annee.formation.etablissement.id == 5 %}
                        <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS - LEZ : 007 810 0012405000301617 32</b></td>
                        {% else %}
                        <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS : 007 810 0012404000300234 15</b></td>
                    {% endif %}
                </tr>
                <tr>
                    {% if operationcab.preinscription.annee.formation.etablissement.id != 28 and operationcab.preinscription.annee.formation.etablissement.id != 5 %}
                        <td style=\"width: 100% ;padding:2px 2px 2px 30px;\"><b>RIB UIASS - EAS : 007 810 0012405000301616 35</b></td> 
                    {% endif %}
                </tr>
            {% endif %}
        </table>


</div>", "facture/pdfs/facture_facture.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\facture_facture.html.twig");
    }
}
