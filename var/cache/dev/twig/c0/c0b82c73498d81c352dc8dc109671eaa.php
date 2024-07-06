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

/* facture/pdfs/facture.html.twig */
class __TwigTemplate_bf421eaf305a12256b0d1b4e608e5477 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture.html.twig"));

        // line 1
        yield "
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
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
<br/>
<br/>
<br/>
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
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 45, $this->source); })()), "code", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">FACTURE </td>
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
        // line 63
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
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"width: 100% ;background: rgb(31, 79, 122); color: #fff ;height: 17px;padding: 8px ;font-weight: bold;padding-left: 15px;\"> Informations sur l'établissement</td> 
        </tr>  
    </table>

    <table style=\"width: 70% ; font-size: 12px;\">
        <tr>
            <td >
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Etablissement   : </td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 97, $this->source); })()), "preinscription", [], "any", false, false, false, 97), "annee", [], "any", false, false, false, 97), "formation", [], "any", false, false, false, 97), "etablissement", [], "any", false, false, false, 97), "designation", [], "any", false, false, false, 97), "html", null, true);
        yield "
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold; width: 30%;\">
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Formation          :</td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 118, $this->source); })()), "preinscription", [], "any", false, false, false, 118), "annee", [], "any", false, false, false, 118), "formation", [], "any", false, false, false, 118), "designation", [], "any", false, false, false, 118), "html", null, true);
        yield "
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold;\">
                <table >
                    <tr>
                        <td style=\" font-weight: bold;\">Source               : </td>
                    </tr>
                </table>
            </td>

            <td>
                <table >
                    <tr>
                        <td >
                            ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 139, $this->source); })()), "categorie", [], "any", false, false, false, 139), "html", null, true);
        yield "
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"width: 100% ;background: rgb(31, 79, 122); color: #fff ;height: 17px;padding: 8px ;font-weight: bold;padding-left: 15px;\">Informations sur le candidat</td> 
        </tr>
        <tr>
        </tr>
    </table>
    <table style=\"width: 70% ; font-size: 12px;\">
        <tr>
            <td >
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Référence   : </td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 169, $this->source); })()), "preinscription", [], "any", false, false, false, 169), "code", [], "any", false, false, false, 169), "html", null, true);
        yield "
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold;\">
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Nom :</td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 190, $this->source); })()), "preinscription", [], "any", false, false, false, 190), "etudiant", [], "any", false, false, false, 190), "nom", [], "any", false, false, false, 190), "html", null, true);
        yield "
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold; width: 30%;\">
                <table >
                    <tr>
                        <td style=\" font-weight: bold;\">Prénom : </td>
                    </tr>
                </table>
            </td>

            <td>
                <table >
                    <tr>
                        <td >
                            ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 211, $this->source); })()), "preinscription", [], "any", false, false, false, 211), "etudiant", [], "any", false, false, false, 211), "prenom", [], "any", false, false, false, 211), "html", null, true);
        yield "
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style=\"font-weight: bold;\">
                <table >
                    <tr>
                        <td style=\" font-weight: bold;\">Organisme de prise
                           <br> en charge: </td>
                    </tr>
                </table>
            </td>

            <td>
                <table >
                    <tr>
                        <td >";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 230, $this->source); })()), "organisme", [], "any", false, false, false, 230), "designation", [], "any", false, false, false, 230), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br/>
    <table style=\"width: 100% ; background: #FFFFFF;\" cellspacing=\"0\" class=\"slh\">
        <thead>
            <tr style=\"background-color: rgb(31, 79, 122);font-size: 9px;\">
                <th style=\"width: 10%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">ORDRE</th>
                <th style=\"width: 40%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">DESTINATION</th>
                <th style=\"width: 30%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">ICE</th>
                <th style=\"width: 20%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">Prix</th>
            </tr>
        </thead>
        <tbody>
                ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 247, $this->source); })()), "operationdets", [], "any", false, false, false, 247));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["operationdet"]) {
            // line 248
            yield "                <tr>
                    <td style=\"width: 10%;padding:6px;border-right:1px solid white;text-align: left; font-size: 12px\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 249), "html", null, true);
            yield "</td>
                    <td style=\"width: 40%;padding:6px;border-right:1px solid white;text-align: left;font-size: 12px\">";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "frais", [], "any", false, false, false, 250), "designation", [], "any", false, false, false, 250), "html", null, true);
            yield "</td>
                    <td style=\"width: 30%;padding:6px;border-right:1px solid white;text-align: left;font-size: 12px\">";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "ice", [], "any", false, false, false, 251), "html", null, true);
            yield "</td>
                    <td style=\"width: 20%;padding:6px;border-right:1px solid white;text-align: right;font-size: 12px\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["operationdet"], "montant", [], "any", false, false, false, 252), 2, ",", " "), "html", null, true);
            yield "</td>
                </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operationdet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        yield "
        </tbody>
    </table>

    
    <br/><br/>
    <div style=\"text-align: end !important; width: 100%; position: relative; right: 0; \">
        <table  cellspacing=\"0\" style=\"margin-left: 50%; width: 100%; font-size: 10px !important;\" >
            <tr>
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;font-size: 11px \">Total </td> 
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;font-size: 11px \">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["operationTotal"]) || array_key_exists("operationTotal", $context) ? $context["operationTotal"] : (function () { throw new RuntimeError('Variable "operationTotal" does not exist.', 265, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
    
            <tr>
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;font-size: 11px \">Total Encaissement </td> 
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;font-size: 11px \">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reglementTotal"]) || array_key_exists("reglementTotal", $context) ? $context["reglementTotal"] : (function () { throw new RuntimeError('Variable "reglementTotal" does not exist.', 270, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
            <tr>
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;font-size: 11px \">Solde </td> 
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;font-size: 11px \">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 274, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
            </tr>
    
        </table>
    </div>
    <br/><br/>
    <br/>
    <br/>


    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 10px;\" >
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 10px 30px \"> <b>Délai de paiement :</b> </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px \">Période 1 ( Premier semestre) </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px\">Tarif normal-deux dernières semaines de Juillet  </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 10px 70px\">Tarif majoré - première semaine du mois d'Août </td> 
        </tr>
        
        
        
        
        
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px \">Période 2 ( Deuxième semestre) </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px\">Tarif normal-deux dernières semaines de Janvier  </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 20px 70px\">Tarif majoré - première semaine du mois Février </td> 
        </tr>





        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 30px\"> <b>Pourcentage de la majoration :</b> 10% </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 30px\"><b>RIB UIASS :</b> <!--007 810 001240400300234 15 --> 007 810 0012404000300234 15</td> 
        </tr>
    </table>


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
        return "facture/pdfs/facture.html.twig";
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
        return array (  395 => 274,  388 => 270,  380 => 265,  368 => 255,  351 => 252,  347 => 251,  343 => 250,  339 => 249,  336 => 248,  319 => 247,  299 => 230,  277 => 211,  253 => 190,  229 => 169,  196 => 139,  172 => 118,  148 => 97,  111 => 63,  90 => 45,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
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
<br/>
<br/>
<br/>
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
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">FACTURE </td>
            <td style=\"width: 30% ;border-bottom: 1px solid #292929 ;\">
                <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
                    <tr>
    
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Date   </th>
                    </tr>
                    <tr>
    
                        <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
                    </tr>
    
                    <tr>
    
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">{{ \"now\"|date(\"d/m/Y\") }}</td>
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
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"width: 100% ;background: rgb(31, 79, 122); color: #fff ;height: 17px;padding: 8px ;font-weight: bold;padding-left: 15px;\"> Informations sur l'établissement</td> 
        </tr>  
    </table>

    <table style=\"width: 70% ; font-size: 12px;\">
        <tr>
            <td >
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Etablissement   : </td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            {{operationcab.preinscription.annee.formation.etablissement.designation}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold; width: 30%;\">
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Formation          :</td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            {{operationcab.preinscription.annee.formation.designation}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold;\">
                <table >
                    <tr>
                        <td style=\" font-weight: bold;\">Source               : </td>
                    </tr>
                </table>
            </td>

            <td>
                <table >
                    <tr>
                        <td >
                            {{operationcab.categorie}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"width: 100% ;background: rgb(31, 79, 122); color: #fff ;height: 17px;padding: 8px ;font-weight: bold;padding-left: 15px;\">Informations sur le candidat</td> 
        </tr>
        <tr>
        </tr>
    </table>
    <table style=\"width: 70% ; font-size: 12px;\">
        <tr>
            <td >
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Référence   : </td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            {{operationcab.preinscription.code}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold;\">
                <table >
                    <tr>
                        <td style=\"font-weight: bold;\">Nom :</td>
                    </tr>
                </table>
            </td>

            <td >
                <table >
                    <tr>
                        <td >
                            {{operationcab.preinscription.etudiant.nom}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td style=\"font-weight: bold; width: 30%;\">
                <table >
                    <tr>
                        <td style=\" font-weight: bold;\">Prénom : </td>
                    </tr>
                </table>
            </td>

            <td>
                <table >
                    <tr>
                        <td >
                            {{operationcab.preinscription.etudiant.prenom}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style=\"font-weight: bold;\">
                <table >
                    <tr>
                        <td style=\" font-weight: bold;\">Organisme de prise
                           <br> en charge: </td>
                    </tr>
                </table>
            </td>

            <td>
                <table >
                    <tr>
                        <td >{{operationcab.organisme.designation}}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br/>
    <table style=\"width: 100% ; background: #FFFFFF;\" cellspacing=\"0\" class=\"slh\">
        <thead>
            <tr style=\"background-color: rgb(31, 79, 122);font-size: 9px;\">
                <th style=\"width: 10%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">ORDRE</th>
                <th style=\"width: 40%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">DESTINATION</th>
                <th style=\"width: 30%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">ICE</th>
                <th style=\"width: 20%;text-align: left; padding:6px;border-right:1px solid white;font-weight: bold;color: white;font-size: 9px\">Prix</th>
            </tr>
        </thead>
        <tbody>
                {% for operationdet in operationcab.operationdets %}
                <tr>
                    <td style=\"width: 10%;padding:6px;border-right:1px solid white;text-align: left; font-size: 12px\">{{loop.index }}</td>
                    <td style=\"width: 40%;padding:6px;border-right:1px solid white;text-align: left;font-size: 12px\">{{operationdet.frais.designation}}</td>
                    <td style=\"width: 30%;padding:6px;border-right:1px solid white;text-align: left;font-size: 12px\">{{operationdet.ice}}</td>
                    <td style=\"width: 20%;padding:6px;border-right:1px solid white;text-align: right;font-size: 12px\">{{operationdet.montant|number_format(2, ',', ' ')}}</td>
                </tr>
                {% endfor %}

        </tbody>
    </table>

    
    <br/><br/>
    <div style=\"text-align: end !important; width: 100%; position: relative; right: 0; \">
        <table  cellspacing=\"0\" style=\"margin-left: 50%; width: 100%; font-size: 10px !important;\" >
            <tr>
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;font-size: 11px \">Total </td> 
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;font-size: 11px \">{{operationTotal|number_format(2, ',', ' ')}}</td> 
            </tr>
    
            <tr>
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;font-size: 11px \">Total Encaissement </td> 
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;font-size: 11px \">{{reglementTotal|number_format(2, ',', ' ')}}</td> 
            </tr>
            <tr>
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;font-size: 11px \">Solde </td> 
                <td style=\"background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;font-size: 11px \">{{total|number_format(2, ',', ' ')}}</td> 
            </tr>
    
        </table>
    </div>
    <br/><br/>
    <br/>
    <br/>


    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 10px;\" >
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 10px 30px \"> <b>Délai de paiement :</b> </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px \">Période 1 ( Premier semestre) </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px\">Tarif normal-deux dernières semaines de Juillet  </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 10px 70px\">Tarif majoré - première semaine du mois d'Août </td> 
        </tr>
        
        
        
        
        
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px \">Période 2 ( Deuxième semestre) </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 70px\">Tarif normal-deux dernières semaines de Janvier  </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 20px 70px\">Tarif majoré - première semaine du mois Février </td> 
        </tr>





        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 30px\"> <b>Pourcentage de la majoration :</b> 10% </td> 
        </tr>
        <tr>
            <td style=\"width: 100% ;padding:2px 2px 2px 30px\"><b>RIB UIASS :</b> <!--007 810 001240400300234 15 --> 007 810 0012404000300234 15</td> 
        </tr>
    </table>


</div>", "facture/pdfs/facture.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\facture.html.twig");
    }
}
