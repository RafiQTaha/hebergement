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
                    ";
        // line 34
        yield "                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                    ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 36, $this->source); })()), "preinscription", [], "any", false, false, false, 36), "annee", [], "any", false, false, false, 36), "formation", [], "any", false, false, false, 36), "etablissement", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) == 28)) {
            // line 37
            yield "                            <img src=\"./assets/img/logo/cpge.svg\" style=\" width: 800px; margin: 20 auto;\"> 
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 38, $this->source); })()), "preinscription", [], "any", false, false, false, 38), "annee", [], "any", false, false, false, 38), "formation", [], "any", false, false, false, 38), "etablissement", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38) == 5)) {
            // line 39
            yield "                            <img src=\"./assets/img/logo/logo_lez.png\" style=\" width: 800px; margin: 0 auto;\">
                    ";
        } else {
            // line 40
            yield "                
                            <img src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" style=\" width: 500px; margin: 0 auto;\">
                    ";
        }
        // line 43
        yield "                    ";
        // line 44
        yield "                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                    ";
        // line 49
        yield "                </th>                    
            </tr>
        </table>
    ";
        // line 53
        yield "    ";
        // line 54
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
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 67, $this->source); })()), "code", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 71, $this->source); })()), "active", [], "any", false, false, false, 71) == 0)) {
            yield " FACTURE ";
        } else {
            yield " FACTURE PRO FORMAT
                 ";
        }
        // line 73
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
        // line 87
        yield "                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 87, $this->source); })()), "created", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true);
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
        // line 101
        yield "    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;width:70%\"> INFORMATIONS SUR L'ETABLISSEMENT</td> 
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;\"> INFORMATIONS SUR L'ETUDIANT</td> 
        </tr> 
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ETABLISSEMENT   :   ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 108, $this->source); })()), "annee", [], "any", false, false, false, 108), "formation", [], "any", false, false, false, 108), "etablissement", [], "any", false, false, false, 108), "designation", [], "any", false, false, false, 108), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">REFERENCE   :   ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 109, $this->source); })()), "preinscription", [], "any", false, false, false, 109), "code", [], "any", false, false, false, 109), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">FORMATION   :   ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 112, $this->source); })()), "annee", [], "any", false, false, false, 112), "formation", [], "any", false, false, false, 112), "designation", [], "any", false, false, false, 112), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NOM & PRENOM :  ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 113, $this->source); })()), "preinscription", [], "any", false, false, false, 113), "etudiant", [], "any", false, false, false, 113), "nom", [], "any", false, false, false, 113), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 113, $this->source); })()), "preinscription", [], "any", false, false, false, 113), "etudiant", [], "any", false, false, false, 113), "prenom", [], "any", false, false, false, 113), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ANNEE UNIVERSITAIRE :  ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 116, $this->source); })()), "annee", [], "any", false, false, false, 116), "designation", [], "any", false, false, false, 116), "html", null, true);
        yield "</td>
                ";
        // line 117
        $context["codes"] = ["FMA-FAC00016175/2017", "FMA-FAC00028745/2019", "FMA-FAC00042874/2021", "FMA-FAC00028744/2019", "FMA-FAC00042872/2021"];
        // line 118
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 118, $this->source); })()), "code", [], "any", false, false, false, 118), (isset($context["codes"]) || array_key_exists("codes", $context) ? $context["codes"] : (function () { throw new RuntimeError('Variable "codes" does not exist.', 118, $this->source); })()))) {
            // line 119
            yield "                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;\"></td>
                ";
        } else {
            // line 121
            yield "                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NIVEAU   :   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 121, $this->source); })()), "html", null, true);
            yield "</td>
                ";
        }
        // line 123
        yield "        </tr>  
        <tr>
            ";
        // line 125
        if (((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 125, $this->source); })()) == "Payant")) {
            // line 126
            yield "                <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">Source :  Payant</td>
            ";
        } else {
            // line 128
            yield "                <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">Source :  Fondation Cheikh Zaid</td>
            ";
        }
        // line 130
        yield "            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">Structure   :   ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 130, $this->source); })()), "html", null, true);
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
        // line 143
        $context["i"] = 1;
        // line 144
        yield "        ";
        $context["SommeOrganisme"] = 0;
        // line 145
        yield "        ";
        $context["SommePayant"] = 0;
        // line 146
        yield "        ";
        $context["SommeToTal"] = 0;
        // line 147
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["operationdets"]) || array_key_exists("operationdets", $context) ? $context["operationdets"] : (function () { throw new RuntimeError('Variable "operationdets" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operationdet"]) {
            // line 148
            yield "                <tr>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:20%;text-align:center\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "dateOperation", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:30%;text-align:center\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "designation", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:20%;text-align:center\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByOrg", [], "any", false, false, false, 151), 2, ",", " "), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:15%;text-align:center\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByPayant", [], "any", false, false, false, 152), 2, ",", " "), "html", null, true);
            yield "</td>
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:15%;text-align:center\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "total", [], "any", false, false, false, 153), 2, ",", " "), "html", null, true);
            yield "</td>
                </tr>
            ";
            // line 155
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 155, $this->source); })()) + 1);
            // line 156
            yield "            ";
            $context["SommeOrganisme"] = ((isset($context["SommeOrganisme"]) || array_key_exists("SommeOrganisme", $context) ? $context["SommeOrganisme"] : (function () { throw new RuntimeError('Variable "SommeOrganisme" does not exist.', 156, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByOrg", [], "any", false, false, false, 156));
            // line 157
            yield "            ";
            $context["SommePayant"] = ((isset($context["SommePayant"]) || array_key_exists("SommePayant", $context) ? $context["SommePayant"] : (function () { throw new RuntimeError('Variable "SommePayant" does not exist.', 157, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "SumByPayant", [], "any", false, false, false, 157));
            // line 158
            yield "            ";
            $context["SommeToTal"] = ((isset($context["SommeToTal"]) || array_key_exists("SommeToTal", $context) ? $context["SommeToTal"] : (function () { throw new RuntimeError('Variable "SommeToTal" does not exist.', 158, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "total", [], "any", false, false, false, 158));
            // line 159
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
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["SommeOrganisme"]) || array_key_exists("SommeOrganisme", $context) ? $context["SommeOrganisme"] : (function () { throw new RuntimeError('Variable "SommeOrganisme" does not exist.', 169, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["SommePayant"]) || array_key_exists("SommePayant", $context) ? $context["SommePayant"] : (function () { throw new RuntimeError('Variable "SommePayant" does not exist.', 170, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["SommeToTal"]) || array_key_exists("SommeToTal", $context) ? $context["SommeToTal"] : (function () { throw new RuntimeError('Variable "SommeToTal" does not exist.', 171, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
    
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Total Encaissement </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reglementOrg"]) || array_key_exists("reglementOrg", $context) ? $context["reglementOrg"] : (function () { throw new RuntimeError('Variable "reglementOrg" does not exist.', 177, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reglementPyt"]) || array_key_exists("reglementPyt", $context) ? $context["reglementPyt"] : (function () { throw new RuntimeError('Variable "reglementPyt" does not exist.', 178, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["reglementOrg"]) || array_key_exists("reglementOrg", $context) ? $context["reglementOrg"] : (function () { throw new RuntimeError('Variable "reglementOrg" does not exist.', 179, $this->source); })()) + (isset($context["reglementPyt"]) || array_key_exists("reglementPyt", $context) ? $context["reglementPyt"] : (function () { throw new RuntimeError('Variable "reglementPyt" does not exist.', 179, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
            <tr>
                <td style=\"color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:20%\"> </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-weight: bold;font-size: 11px;width:30%\">Solde </td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:20% \"></td> 
                <td style=\"background: #DBDBDB; color: #000;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \"></td> 
                <td style=\"background: #5F5A58; color: #fff;height: 15px;padding: 2px ;padding-left: 25px;font-size: 11px;width:15% \">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["SommeToTal"]) || array_key_exists("SommeToTal", $context) ? $context["SommeToTal"] : (function () { throw new RuntimeError('Variable "SommeToTal" does not exist.', 186, $this->source); })()) - ((isset($context["reglementOrg"]) || array_key_exists("reglementOrg", $context) ? $context["reglementOrg"] : (function () { throw new RuntimeError('Variable "reglementOrg" does not exist.', 186, $this->source); })()) + (isset($context["reglementPyt"]) || array_key_exists("reglementPyt", $context) ? $context["reglementPyt"] : (function () { throw new RuntimeError('Variable "reglementPyt" does not exist.', 186, $this->source); })()))), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
    
        </table>
    <br/><br/>
    
        <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 9px;margin-top:100px;\" >
        
            ";
        // line 194
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 194, $this->source); })()), "preinscription", [], "any", false, false, false, 194), "annee", [], "any", false, false, false, 194), "formation", [], "any", false, false, false, 194), "etablissement", [], "any", false, false, false, 194), "id", [], "any", false, false, false, 194) == 25)) {
            // line 195
            yield "                <tr>
                        <td style=\"width: 100% ;padding:2px 2px 2px 30px;\"><b>RIB CFC : 007 810 0012408000301574 49</b></td> 
                </tr>
            ";
        } else {
            // line 199
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
            // line 218
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 218, $this->source); })()), "preinscription", [], "any", false, false, false, 218), "annee", [], "any", false, false, false, 218), "formation", [], "any", false, false, false, 218), "etablissement", [], "any", false, false, false, 218), "id", [], "any", false, false, false, 218) == 28) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 218, $this->source); })()), "preinscription", [], "any", false, false, false, 218), "annee", [], "any", false, false, false, 218), "formation", [], "any", false, false, false, 218), "etablissement", [], "any", false, false, false, 218), "id", [], "any", false, false, false, 218) == 5))) {
                // line 219
                yield "                        <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS - LEZ : 007 810 0012405000301617 32</b></td>
                        ";
            } else {
                // line 221
                yield "                        <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS : 007 810 0012404000300234 15</b></td>
                    ";
            }
            // line 223
            yield "                </tr>
                <tr>
                    ";
            // line 225
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 225, $this->source); })()), "preinscription", [], "any", false, false, false, 225), "annee", [], "any", false, false, false, 225), "formation", [], "any", false, false, false, 225), "etablissement", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225) != 28) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 225, $this->source); })()), "preinscription", [], "any", false, false, false, 225), "annee", [], "any", false, false, false, 225), "formation", [], "any", false, false, false, 225), "etablissement", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225) != 5))) {
                // line 226
                yield "                        <td style=\"width: 100% ;padding:2px 2px 2px 30px;\"><b>RIB UIASS - EAS : 007 810 0012405000301616 35</b></td> 
                    ";
            }
            // line 228
            yield "                </tr>
            ";
        }
        // line 230
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
        return array (  418 => 230,  414 => 228,  410 => 226,  408 => 225,  404 => 223,  400 => 221,  396 => 219,  394 => 218,  373 => 199,  367 => 195,  365 => 194,  354 => 186,  344 => 179,  340 => 178,  336 => 177,  327 => 171,  323 => 170,  319 => 169,  302 => 159,  299 => 158,  296 => 157,  293 => 156,  291 => 155,  286 => 153,  282 => 152,  278 => 151,  274 => 150,  270 => 149,  267 => 148,  262 => 147,  259 => 146,  256 => 145,  253 => 144,  251 => 143,  234 => 130,  230 => 128,  226 => 126,  224 => 125,  220 => 123,  214 => 121,  210 => 119,  207 => 118,  205 => 117,  201 => 116,  193 => 113,  189 => 112,  183 => 109,  179 => 108,  170 => 101,  153 => 87,  138 => 73,  131 => 71,  124 => 67,  109 => 54,  107 => 53,  102 => 49,  98 => 44,  96 => 43,  91 => 40,  87 => 39,  85 => 38,  82 => 37,  80 => 36,  76 => 34,  44 => 1,);
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
                    {# {% if operationcab.preinscription.annee.formation.etablissement.id == 28 %}
                        <img src=\"./assets/img/logo/cpge.jpg\" style=\" width: 400px; margin: 0 auto;\">                
                    {% endif %} #}
                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                    {% if operationcab.preinscription.annee.formation.etablissement.id == 28 %}
                            <img src=\"./assets/img/logo/cpge.svg\" style=\" width: 800px; margin: 20 auto;\"> 
                    {% elseif operationcab.preinscription.annee.formation.etablissement.id == 5 %}
                            <img src=\"./assets/img/logo/logo_lez.png\" style=\" width: 800px; margin: 0 auto;\">
                    {% else %}                
                            <img src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" style=\" width: 500px; margin: 0 auto;\">
                    {% endif %}
                    {# <img src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" style=\" width: 400px; margin: 0 auto;\"> #}
                </th>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">
                    {# {% if operationcab.preinscription.annee.formation.etablissement.id == 28 %}               
                        <img src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" style=\" width: 400px; margin: 0 auto;\">
                    {% endif %} #}
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
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">FORMATION   :   {{operationcab.annee.formation.designation}}</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NOM & PRENOM :  {{operationcab.preinscription.etudiant.nom}} {{operationcab.preinscription.etudiant.prenom}}</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ANNEE UNIVERSITAIRE :  {{operationcab.annee.designation}}</td>
                {% set codes = ['FMA-FAC00016175/2017','FMA-FAC00028745/2019','FMA-FAC00042874/2021','FMA-FAC00028744/2019','FMA-FAC00042872/2021'] %}
                {% if operationcab.code in codes %}
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;\"></td>
                {% else %}
                    <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NIVEAU   :   {{promotion}}</td>
                {% endif %}
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
