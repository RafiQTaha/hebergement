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

/* facture/pdfs/borderaux.html.twig */
class __TwigTemplate_53e041f1b24d6671dc2fd810cc430f52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/borderaux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/borderaux.html.twig"));

        // line 1
        yield "<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">

<style type=\"text/Css\">
    body{
        font-family: 'Source Sans Pro', sans-serif;
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
</style>
    <br/>
    <br/>
    <br/>
    <table style=\"width: 100% ;text-align: center;border: 1px solid #292929; \" cellspacing=\"0\">
        <tr>
            <td style=\"width: 30% ;\">
                <table style=\"width: 100% ;\" cellspacing=\"0\">
                    <tr>
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Code bordereau</th>
                    </tr>
                    <tr>
                        <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
                    </tr>
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(31, 79, 122);\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["borderaux"]) || array_key_exists("borderaux", $context) ? $context["borderaux"] : (function () { throw new RuntimeError('Variable "borderaux" does not exist.', 31, $this->source); })()), "code", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-right: 1px;border-left: 1px;color:rgb(3, 35, 68);\">BORDEREAU </td>
            <td style=\"width: 30% ;\">
                <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
                    <tr>

                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Date</th>
                    </tr>
                    <tr>

                        <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
                    </tr>

                    <tr>

                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(3, 35, 68);\">";
        // line 49
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
    <br/>
    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"width: 100% ;background: rgb(31, 79, 122); color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 15px;\">Informations sur le Bordereau</td> 
        </tr>
        <tr>

        </tr>
    </table>
    <table style=\"width: 100%; text-align: left; font-size:12px\">
        <tr style=\"width: 100%\"> 
            <td style=\"width: 50% ;\">
                <table style=\"width: 100% ;\">
                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\">Etablissement   : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">
                                        ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["borderaux"]) || array_key_exists("borderaux", $context) ? $context["borderaux"] : (function () { throw new RuntimeError('Variable "borderaux" does not exist.', 88, $this->source); })()), "etablissement", [], "any", false, false, false, 88), "designation", [], "any", false, false, false, 88), "html", null, true);
        yield "
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\">Formation   : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">
                                        ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglements"]) || array_key_exists("reglements", $context) ? $context["reglements"] : (function () { throw new RuntimeError('Variable "reglements" does not exist.', 107, $this->source); })()), 0, [], "array", false, false, false, 107), "operation", [], "any", false, false, false, 107), "annee", [], "any", false, false, false, 107), "formation", [], "any", false, false, false, 107), "designation", [], "any", false, false, false, 107), "html", null, true);
        yield "
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\"> Modalité : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">
                                        ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["borderaux"]) || array_key_exists("borderaux", $context) ? $context["borderaux"] : (function () { throw new RuntimeError('Variable "borderaux" does not exist.', 128, $this->source); })()), "modalite", [], "any", false, false, false, 128), "designation", [], "any", false, false, false, 128), "html", null, true);
        yield "
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\">Date de création : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["borderaux"]) || array_key_exists("borderaux", $context) ? $context["borderaux"] : (function () { throw new RuntimeError('Variable "borderaux" does not exist.', 148, $this->source); })()), "created", [], "any", false, false, false, 148), "d/m/Y"), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\"> Crée par: </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    ";
        // line 168
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["borderaux"]) || array_key_exists("borderaux", $context) ? $context["borderaux"] : (function () { throw new RuntimeError('Variable "borderaux" does not exist.', 168, $this->source); })()), "userCreated", [], "any", false, false, false, 168) != null)) {
            // line 169
            yield "                                        <td style=\"width: 100%;text-transform: uppercase;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["borderaux"]) || array_key_exists("borderaux", $context) ? $context["borderaux"] : (function () { throw new RuntimeError('Variable "borderaux" does not exist.', 169, $this->source); })()), "UserCreated", [], "any", false, false, false, 169), "nom", [], "any", false, false, false, 169), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["borderaux"]) || array_key_exists("borderaux", $context) ? $context["borderaux"] : (function () { throw new RuntimeError('Variable "borderaux" does not exist.', 169, $this->source); })()), "UserCreated", [], "any", false, false, false, 169), "prenom", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
                                    ";
        }
        // line 171
        yield "                                    
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>
            </td>


        </tr>   
    </table>


  
    <!--End II-  Informations Fournisseur-->
    <br/>
    <!--End III-  Détails commande-->


    <br/>
    <table style=\"width: 100% ; background: #FFFFFF;font-size: 9.2px\" cellspacing=\"0\" class=\"slh\">
        <thead>
            <tr style=\"background-color: rgb(31, 79, 122);color:white;font-size: 9px;\">
                <th style=\"width: 60px;  padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">ORDRE</th>
                <th style=\"width: 100px; padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Code Réglement</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Code Facture</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Code prèinscription</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Nom</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Prenom</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">BQ</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Référence</th>
                <th style=\"width: 90px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Montant</th>
                <th style=\"width: 90px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Date Réglement</th>

            </tr>
        </thead>
        <tbody>
                ";
        // line 209
        $context["i"] = 1;
        // line 210
        yield "                ";
        $context["somme"] = 0;
        // line 211
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reglements"]) || array_key_exists("reglements", $context) ? $context["reglements"] : (function () { throw new RuntimeError('Variable "reglements" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reglement"]) {
            // line 212
            yield "                    <tr>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 213, $this->source); })()), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "code", [], "any", false, false, false, 214), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: right;\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "operation", [], "any", false, false, false, 215), "code", [], "any", false, false, false, 215), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "operation", [], "any", false, false, false, 216), "preinscription", [], "any", false, false, false, 216), "code", [], "any", false, false, false, 216), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "operation", [], "any", false, false, false, 217), "preinscription", [], "any", false, false, false, 217), "etudiant", [], "any", false, false, false, 217), "nom", [], "any", false, false, false, 217), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "operation", [], "any", false, false, false, 218), "preinscription", [], "any", false, false, false, 218), "etudiant", [], "any", false, false, false, 218), "prenom", [], "any", false, false, false, 218), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "banque", [], "any", false, false, false, 219), "designation", [], "any", false, false, false, 219), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "reference", [], "any", false, false, false, 220), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: right;\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "montant", [], "any", false, false, false, 221), 2, ",", " "), "html", null, true);
            yield "</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: right;\">";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "DateReglement", [], "any", false, false, false, 222), "d/m/Y"), "html", null, true);
            yield "</td>
                    </tr>
                    ";
            // line 224
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 224, $this->source); })()) + 1);
            // line 225
            yield "                    ";
            $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 225, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["reglement"], "montant", [], "any", false, false, false, 225));
            // line 226
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reglement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "                
                
        </tbody>
    </table>

    <br/><br/>
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px;\" >
        <tr>
            <td style=\"width: 60% ;\"></td> 
            <td style=\"width: 20% ;background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;\">Total </td> 
            <td style=\"width: 20% ;background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 237, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td> 
        </tr>



    </table>
    <br/><br/>
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px;font-weight: bold;border:1px solid gray\" >
        <tr>

            <td style=\"width: 100% ;padding:15px\">
                arrêté la présente facture à la somme de :  ";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 248, $this->source); })()), "html", null, true);
        yield "
            </td> 

        </tr>



    </table>
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
        return "facture/pdfs/borderaux.html.twig";
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
        return array (  372 => 248,  358 => 237,  346 => 227,  340 => 226,  337 => 225,  335 => 224,  330 => 222,  326 => 221,  322 => 220,  318 => 219,  314 => 218,  310 => 217,  306 => 216,  302 => 215,  298 => 214,  294 => 213,  291 => 212,  286 => 211,  283 => 210,  281 => 209,  241 => 171,  233 => 169,  230 => 168,  208 => 148,  185 => 128,  161 => 107,  139 => 88,  97 => 49,  76 => 31,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">

<style type=\"text/Css\">
    body{
        font-family: 'Source Sans Pro', sans-serif;
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
</style>
    <br/>
    <br/>
    <br/>
    <table style=\"width: 100% ;text-align: center;border: 1px solid #292929; \" cellspacing=\"0\">
        <tr>
            <td style=\"width: 30% ;\">
                <table style=\"width: 100% ;\" cellspacing=\"0\">
                    <tr>
                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Code bordereau</th>
                    </tr>
                    <tr>
                        <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
                    </tr>
                    <tr>
                        <td style=\"width: 100% ; font-size: 11px ;padding:4px;color:rgb(31, 79, 122);\">{{borderaux.code}}</td>
                    </tr>
                </table>
            </td>
            <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-right: 1px;border-left: 1px;color:rgb(3, 35, 68);\">BORDEREAU </td>
            <td style=\"width: 30% ;\">
                <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
                    <tr>

                        <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:4px;color:rgb(3, 35, 68);\">Date</th>
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
    <br/>
    
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px\" >
        <tr>
            <td style=\"width: 100% ;background: rgb(31, 79, 122); color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 15px;\">Informations sur le Bordereau</td> 
        </tr>
        <tr>

        </tr>
    </table>
    <table style=\"width: 100%; text-align: left; font-size:12px\">
        <tr style=\"width: 100%\"> 
            <td style=\"width: 50% ;\">
                <table style=\"width: 100% ;\">
                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\">Etablissement   : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">
                                        {{borderaux.etablissement.designation}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\">Formation   : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">
                                        {{reglements[0].operation.annee.formation.designation}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\"> Modalité : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">
                                        {{borderaux.modalite.designation}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\">Date de création : </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    <td style=\"width: 100%\">{{borderaux.created|date(\"d/m/Y\") }}</td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <tr>
                        <td style=\"width: 35% ;font-weight: bold;\">
                            <table style=\"width: 100% ; \">
                                <tr>
                                    <td style=\"width: 100%\"> Crée par: </td>
                                </tr>
                            </table>
                        </td>

                        <td style=\"width: 65%;\">
                            <table style=\"width: 100% ;\">
                                <tr>
                                    {# <td style=\"width: 100%;text-transform: uppercase;\">{{borderaux.UserCreated.nom}} {{borderaux.UserCreated.prenom}}</td> #}
                                    {% if borderaux.userCreated != null %}
                                        <td style=\"width: 100%;text-transform: uppercase;\">{{borderaux.UserCreated.nom}} {{borderaux.UserCreated.prenom}}</td>
                                    {% endif %}
                                    
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>
            </td>


        </tr>   
    </table>


  
    <!--End II-  Informations Fournisseur-->
    <br/>
    <!--End III-  Détails commande-->


    <br/>
    <table style=\"width: 100% ; background: #FFFFFF;font-size: 9.2px\" cellspacing=\"0\" class=\"slh\">
        <thead>
            <tr style=\"background-color: rgb(31, 79, 122);color:white;font-size: 9px;\">
                <th style=\"width: 60px;  padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">ORDRE</th>
                <th style=\"width: 100px; padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Code Réglement</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Code Facture</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Code prèinscription</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Nom</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Prenom</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">BQ</th>
                <th style=\"width: 100px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Référence</th>
                <th style=\"width: 90px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Montant</th>
                <th style=\"width: 90px;padding:6px;border-right:1px solid white;font-weight: bold;color:white;\">Date Réglement</th>

            </tr>
        </thead>
        <tbody>
                {% set i = 1 %}
                {% set somme = 0 %}
                {% for reglement in reglements %}
                    <tr>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">{{i}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">{{reglement.code}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: right;\">{{reglement.operation.code}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">{{reglement.operation.preinscription.code}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">{{reglement.operation.preinscription.etudiant.nom}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">{{reglement.operation.preinscription.etudiant.prenom}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">{{reglement.banque.designation}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: left;\">{{reglement.reference}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: right;\">{{reglement.montant|number_format(2, ',', ' ')}}</td>
                        <td style=\"padding:6px;border-right:1px solid white;text-align: right;\">{{reglement.DateReglement|date(\"d/m/Y\")}}</td>
                    </tr>
                    {% set i = i + 1 %}
                    {% set somme = somme + reglement.montant %}
                {% endfor %}
                
                
        </tbody>
    </table>

    <br/><br/>
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px;\" >
        <tr>
            <td style=\"width: 60% ;\"></td> 
            <td style=\"width: 20% ;background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;padding-left: 25px;font-weight: bold;\">Total </td> 
            <td style=\"width: 20% ;background: rgb(23, 132, 112);; color: #fff ;height: 17px;padding: 4px ;font-weight: bold;padding-left: 25px;\">{{somme|number_format(2, ',', ' ')}}</td> 
        </tr>



    </table>
    <br/><br/>
    <table cellspacing=\"0\" style=\"width: 100%; text-align: left; font-size: 12px;font-weight: bold;border:1px solid gray\" >
        <tr>

            <td style=\"width: 100% ;padding:15px\">
                arrêté la présente facture à la somme de :  {{ text }}
            </td> 

        </tr>



    </table>
", "facture/pdfs/borderaux.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\borderaux.html.twig");
    }
}
