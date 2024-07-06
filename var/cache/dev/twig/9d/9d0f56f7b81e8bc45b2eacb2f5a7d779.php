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

/* facture/pdfs/facture_releve.html.twig */
class __TwigTemplate_1e4b784df14795db864ba59a0d28a2dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture_releve.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture_releve.html.twig"));

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
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preinscription"]) || array_key_exists("preinscription", $context) ? $context["preinscription"] : (function () { throw new RuntimeError('Variable "preinscription" does not exist.', 36, $this->source); })()), "annee", [], "any", false, false, false, 36), "formation", [], "any", false, false, false, 36), "etablissement", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) == 28)) {
            // line 37
            yield "                            <img src=\"./assets/img/logo/cpge.svg\" style=\" width: 800px; margin: 20 auto;\"> 
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["preinscription"]) || array_key_exists("preinscription", $context) ? $context["preinscription"] : (function () { throw new RuntimeError('Variable "preinscription" does not exist.', 38, $this->source); })()), "annee", [], "any", false, false, false, 38), "formation", [], "any", false, false, false, 38), "etablissement", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38) == 5)) {
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
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Code Preinscription </th>
                    </tr>
                    <tr>
                        <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(31, 79, 122);\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preinscription"]) || array_key_exists("preinscription", $context) ? $context["preinscription"] : (function () { throw new RuntimeError('Variable "preinscription" does not exist.', 67, $this->source); })()), "code", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">RELEVE </td>
            <td style=\"width: 30% ;border-bottom: 1px solid #292929 ;\">
                <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
                    <tr>
    
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Date   </th>
                    </tr>
                    <tr>
    
                        <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
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
        // line 98
        yield "    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;width:70%\"> INFORMATIONS SUR L'ETABLISSEMENT</td> 
            <td style=\"font-weight: bold;padding:2px 0px 5px 2px;\"> INFORMATIONS SUR L'ETUDIANT</td> 
        </tr> 
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ETABLISSEMENT   :   ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 105, $this->source); })()), "annee", [], "any", false, false, false, 105), "formation", [], "any", false, false, false, 105), "etablissement", [], "any", false, false, false, 105), "designation", [], "any", false, false, false, 105), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">REFERENCE   :   ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 106, $this->source); })()), "admission", [], "any", false, false, false, 106), "preinscription", [], "any", false, false, false, 106), "code", [], "any", false, false, false, 106), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">FORMATION   :   ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 109, $this->source); })()), "annee", [], "any", false, false, false, 109), "formation", [], "any", false, false, false, 109), "designation", [], "any", false, false, false, 109), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NOM & PRENOM :  ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 110, $this->source); })()), "admission", [], "any", false, false, false, 110), "preinscription", [], "any", false, false, false, 110), "etudiant", [], "any", false, false, false, 110), "nom", [], "any", false, false, false, 110), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 110, $this->source); })()), "admission", [], "any", false, false, false, 110), "preinscription", [], "any", false, false, false, 110), "etudiant", [], "any", false, false, false, 110), "prenom", [], "any", false, false, false, 110), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ANNEE :  ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 113, $this->source); })()), "annee", [], "any", false, false, false, 113), "designation", [], "any", false, false, false, 113), "html", null, true);
        yield "</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">PROMOTION :  ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 114, $this->source); })()), "promotion", [], "any", false, false, false, 114), "designation", [], "any", false, false, false, 114), "html", null, true);
        yield "</td>
        </tr>  
        <tr>
        </tr>  
    </table>
    <br/><br/><br/>

    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 11px;\" >
        <tr style='background: #C9C5A5; color: #fff ;'>
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:10%;text-align:center;font-size: 11px\"> DATE </td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> CODE</td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:8%;text-align:center;font-size: 11px\"> ORGANISME </td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> MONTANT TOTAL</td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> MONTANT REGLE</td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> MONTANT RESTE</td> 
        </tr> 
        ";
        // line 130
        $context["i"] = 1;
        // line 131
        yield "        ";
        $context["SommeTotal"] = 0;
        // line 132
        yield "        ";
        $context["SommeRegle"] = 0;
        // line 133
        yield "        ";
        $context["Diffirence"] = 0;
        // line 134
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["facture_infos"]) || array_key_exists("facture_infos", $context) ? $context["facture_infos"] : (function () { throw new RuntimeError('Variable "facture_infos" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture_info"]) {
            // line 135
            yield "                <tr>
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:10%;text-align:center;font-size: 11px\"> ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "operationcab", [], "any", false, false, false, 136), "created", [], "any", false, false, false, 136), "d/m/Y"), "html", null, true);
            yield " </td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "operationcab", [], "any", false, false, false, 137), "code", [], "any", false, false, false, 137), "html", null, true);
            yield "</td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:8%;text-align:center;font-size: 11px\"> ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "organisme", [], "any", false, false, false, 138), "html", null, true);
            yield " </td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "totalfacture", [], "any", false, false, false, 139), 2, ",", " "), "html", null, true);
            yield "</td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "totalreglement", [], "any", false, false, false, 140), 2, ",", " "), "html", null, true);
            yield "</td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "diffirence", [], "any", false, false, false, 141), 2, ",", " "), "html", null, true);
            yield "</td> 
                </tr>
            ";
            // line 143
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 143, $this->source); })()) + 1);
            // line 144
            yield "            ";
            $context["SommeTotal"] = ((isset($context["SommeTotal"]) || array_key_exists("SommeTotal", $context) ? $context["SommeTotal"] : (function () { throw new RuntimeError('Variable "SommeTotal" does not exist.', 144, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "totalfacture", [], "any", false, false, false, 144));
            // line 145
            yield "            ";
            $context["SommeRegle"] = ((isset($context["SommeRegle"]) || array_key_exists("SommeRegle", $context) ? $context["SommeRegle"] : (function () { throw new RuntimeError('Variable "SommeRegle" does not exist.', 145, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "totalreglement", [], "any", false, false, false, 145));
            // line 146
            yield "            ";
            $context["Diffirence"] = ((isset($context["Diffirence"]) || array_key_exists("Diffirence", $context) ? $context["Diffirence"] : (function () { throw new RuntimeError('Variable "Diffirence" does not exist.', 146, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["facture_info"], "diffirence", [], "any", false, false, false, 146));
            // line 147
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " 
    </table>

    
    <br/><br/>
    
        <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 11px;\" >
            <tr style='  color: #fff ;'>
                <td> </td> 
                <td></td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:40%;text-align:center;font-size: 11px;\"> </td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px;background: #DBDBDB;\"> MONTANT TOTAL</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px;background: #DBDBDB;\"> MONTANT REGLE</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px;background: #DBDBDB;\"> MONTANT RESTE</td> 
            </tr> 
            <tr style=' color: #fff;'>
                <td></td> 
                <td></td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:40%;text-align:center;font-size: 11px; \"> </td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px; color: #fff;background: #5F5A58;\"> ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["SommeTotal"]) || array_key_exists("SommeTotal", $context) ? $context["SommeTotal"] : (function () { throw new RuntimeError('Variable "SommeTotal" does not exist.', 166, $this->source); })()), "html", null, true);
        yield "</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px; color: #fff;background: #5F5A58;\"> ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["SommeRegle"]) || array_key_exists("SommeRegle", $context) ? $context["SommeRegle"] : (function () { throw new RuntimeError('Variable "SommeRegle" does not exist.', 167, $this->source); })()), "html", null, true);
        yield "</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px; color: #fff;background: #5F5A58;\"> ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["Diffirence"]) || array_key_exists("Diffirence", $context) ? $context["Diffirence"] : (function () { throw new RuntimeError('Variable "Diffirence" does not exist.', 168, $this->source); })()), "html", null, true);
        yield "</td> 
            </tr> 
        </table>
    <br/><br/> 
    
    ";
        // line 205
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "facture/pdfs/facture_releve.html.twig";
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
        return array (  311 => 205,  303 => 168,  299 => 167,  295 => 166,  269 => 147,  266 => 146,  263 => 145,  260 => 144,  258 => 143,  253 => 141,  249 => 140,  245 => 139,  241 => 138,  237 => 137,  233 => 136,  230 => 135,  225 => 134,  222 => 133,  219 => 132,  216 => 131,  214 => 130,  195 => 114,  191 => 113,  183 => 110,  179 => 109,  173 => 106,  169 => 105,  160 => 98,  144 => 84,  124 => 67,  109 => 54,  107 => 53,  102 => 49,  98 => 44,  96 => 43,  91 => 40,  87 => 39,  85 => 38,  82 => 37,  80 => 36,  76 => 34,  44 => 1,);
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
                    {% if preinscription.annee.formation.etablissement.id == 28 %}
                            <img src=\"./assets/img/logo/cpge.svg\" style=\" width: 800px; margin: 20 auto;\"> 
                    {% elseif preinscription.annee.formation.etablissement.id == 5 %}
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
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Code Preinscription </th>
                    </tr>
                    <tr>
                        <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(31, 79, 122);\">{{preinscription.code}}</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">RELEVE </td>
            <td style=\"width: 30% ;border-bottom: 1px solid #292929 ;\">
                <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
                    <tr>
    
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Date   </th>
                    </tr>
                    <tr>
    
                        <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">{{ ('now')|date(\"d/m/Y\") }}</td>
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
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ETABLISSEMENT   :   {{inscription.annee.formation.etablissement.designation}}</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">REFERENCE   :   {{inscription.admission.preinscription.code}}</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">FORMATION   :   {{inscription.annee.formation.designation}}</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">NOM & PRENOM :  {{inscription.admission.preinscription.etudiant.nom}} {{inscription.admission.preinscription.etudiant.prenom}}</td>
        </tr>  
        <tr>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;width:70%\">ANNEE :  {{inscription.annee.designation}}</td>
            <td style=\"font-size:10px;padding:2px 0px 5px 2px;\">PROMOTION :  {{inscription.promotion.designation}}</td>
        </tr>  
        <tr>
        </tr>  
    </table>
    <br/><br/><br/>

    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 11px;\" >
        <tr style='background: #C9C5A5; color: #fff ;'>
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:10%;text-align:center;font-size: 11px\"> DATE </td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> CODE</td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:8%;text-align:center;font-size: 11px\"> ORGANISME </td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> MONTANT TOTAL</td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> MONTANT REGLE</td> 
            <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> MONTANT RESTE</td> 
        </tr> 
        {% set i = 1 %}
        {% set SommeTotal = 0 %}
        {% set SommeRegle = 0 %}
        {% set Diffirence = 0 %}
        {% for facture_info in facture_infos %}
                <tr>
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:10%;text-align:center;font-size: 11px\"> {{facture_info.operationcab.created|date(\"d/m/Y\") }} </td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> {{facture_info.operationcab.code}}</td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:8%;text-align:center;font-size: 11px\"> {{facture_info.organisme}} </td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> {{facture_info.totalfacture|number_format(2, ',', ' ')}}</td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> {{facture_info.totalreglement|number_format(2, ',', ' ')}}</td> 
                    <td style=\"padding:1.5px 0px 1.5px 2px;width:15%;text-align:center;font-size: 11px\"> {{facture_info.diffirence|number_format(2, ',', ' ')}}</td> 
                </tr>
            {% set i = i + 1 %}
            {% set SommeTotal = SommeTotal + facture_info.totalfacture  %}
            {% set SommeRegle = SommeRegle + facture_info.totalreglement %}
            {% set Diffirence = Diffirence  + facture_info.diffirence %}
        {% endfor %} 
    </table>

    
    <br/><br/>
    
        <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 11px;\" >
            <tr style='  color: #fff ;'>
                <td> </td> 
                <td></td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:40%;text-align:center;font-size: 11px;\"> </td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px;background: #DBDBDB;\"> MONTANT TOTAL</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px;background: #DBDBDB;\"> MONTANT REGLE</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px;background: #DBDBDB;\"> MONTANT RESTE</td> 
            </tr> 
            <tr style=' color: #fff;'>
                <td></td> 
                <td></td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:40%;text-align:center;font-size: 11px; \"> </td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px; color: #fff;background: #5F5A58;\"> {{SommeTotal}}</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px; color: #fff;background: #5F5A58;\"> {{SommeRegle}}</td> 
                <td style=\"font-weight: bold;padding:1.5px 0px 1.5px 2px;width:17%;text-align:center;font-size: 11px; color: #fff;background: #5F5A58;\"> {{Diffirence}}</td> 
            </tr> 
        </table>
    <br/><br/> 
    
    {# <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 9px\" >
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
            {% if preinscription.annee.formation.etablissement.id == 28 or preinscription.annee.formation.etablissement.id == 5 %}
                <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS - LEZ : 007 810 0012405000301617 32</b></td>
                {% else %}
                <td style=\"width: 100% ;padding:40px 2px 2px 30px;\"><b>RIB UIASS : 007 810 0012404000300234 15</b></td>
            {% endif %}
        </tr>
        <tr>
            {% if preinscription.annee.formation.etablissement.id != 28 and preinscription.annee.formation.etablissement.id != 5 %}
                <td style=\"width: 100% ;padding:2px 2px 2px 30px;\"><b>RIB UIASS - EAS : 007 810 0012405000301616 35</b></td> 
            {% endif %}
        </tr>
    </table> #}
</div>", "facture/pdfs/facture_releve.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\facture_releve.html.twig");
    }
}
