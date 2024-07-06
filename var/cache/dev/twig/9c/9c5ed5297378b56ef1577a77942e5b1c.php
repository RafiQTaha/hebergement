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

/* facture/pdfs/facture_reglement.html.twig */
class __TwigTemplate_8fa759e746e751d907f0309a6a493d6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture_reglement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/facture_reglement.html.twig"));

        // line 1
        yield "<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
<style type=\"text/Css\">
    body{
        font-family: 'Source Sans Pro', sans-serif;
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
</style>
<br>
<table style=\"width: 100%;\" cellspacing=\"0\">
    <tbody>
        <tr>
            <td style=\"width:25%; text-align:center\"><img style=\"width:80px;margin: 0 auto;\" src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" alt=\"Logo\"></td>
            <td style=\"width:1%;\"></td>
            <td style=\"width:70%;\"><p style=\"margin-left:10px;margin-top:25px;width:5px;text-align:center;font-weight:bold;\">UNIVERSITE INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTE</p></td>
        </tr>
    
    </tbody>

</table>
<table style=\"width: 100% ;text-align: center;border: 1px solid #292929; border-bottom: none;\" cellspacing=\"0\">
<tr>
    <td style=\"width: 30% ; border-bottom: 1px solid #292929 ;\">
        <table style=\"width: 100% ;\" cellspacing=\"0\">
            <tr>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:2px;color:rgb(3, 35, 68);\">CODE REGLEMENT </th>
            </tr>
            <tr>

                <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
            </tr>

            <tr>
                <td style=\"width: 100% ; font-size: 11px ;padding:2px;color:rgb(31, 79, 122);\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 49, $this->source); })()), "code", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
            </tr>
        </table>
    </td>
    <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">QUITTANCE </td>
    <td style=\"width: 30% ;border-bottom: 1px solid #292929 ;\">
        <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
            <tr>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:2px;color:rgb(3, 35, 68);\">DATE</th>
            </tr>
            <tr>
                <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
            </tr>

            <tr>
                <td style=\"width: 100% ; font-size: 11px ;padding:2px;color:rgb(3, 35, 68);\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 64, $this->source); })()), "created", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
        yield "</td>
            </tr>
        </table>
    </td>

</tr>


</table>
<table style=\"width: 100%;border-top: 1px solid#292929\">
    <tr>
        <td style=\"width: 100% ; height: 10px;\"></td>
    </tr>
</table>

<table style=\"width: 100%;\">

<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:2px;font-size:8px\">ETABLISSEMENT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:2px;font-size:8px\">
        ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 85, $this->source); })()), "preinscription", [], "any", false, false, false, 85), "annee", [], "any", false, false, false, 85), "formation", [], "any", false, false, false, 85), "etablissement", [], "any", false, false, false, 85), "designation", [], "any", false, false, false, 85), "html", null, true);
        yield "
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:2px;font-size:8px\">FORMATION</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:2px;font-size:8px\">
        ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 91, $this->source); })()), "annee", [], "any", false, false, false, 91), "formation", [], "any", false, false, false, 91), "designation", [], "any", false, false, false, 91), "html", null, true);
        yield "
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:2px;font-size:8px\">NIVEAU</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16.67%;border:1px solid #ddd;background:white;padding:2px;font-size:8px\">
        ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 97, $this->source); })()), "html", null, true);
        yield "
    </td>

</tr>


</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">CODE CANDIDAT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 110, $this->source); })()), "preinscription", [], "any", false, false, false, 110), "etudiant", [], "any", false, false, false, 110), "code", [], "any", false, false, false, 110), "html", null, true);
        yield "
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">CODE PRE INSCRIPTION</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 116, $this->source); })()), "preinscription", [], "any", false, false, false, 116), "code", [], "any", false, false, false, 116), "html", null, true);
        yield "
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">CODE INSCRIPTION</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16.67%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 122, $this->source); })()), "html", null, true);
        yield "
    </td>

</tr>

</table>


<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">NOM</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 135, $this->source); })()), "preinscription", [], "any", false, false, false, 135), "etudiant", [], "any", false, false, false, 135), "nom", [], "any", false, false, false, 135), "html", null, true);
        yield "
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">PRENOM</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 141, $this->source); })()), "preinscription", [], "any", false, false, false, 141), "etudiant", [], "any", false, false, false, 141), "prenom", [], "any", false, false, false, 141), "html", null, true);
        yield "
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">DATE DE REGLEMENT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16.67%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 146, $this->source); })()), "DateReglement", [], "any", false, false, false, 146), "d/m/Y"), "html", null, true);
        yield "</td>

</tr>

</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">REFERENCE FACTURE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:32.80%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["operationcab"]) || array_key_exists("operationcab", $context) ? $context["operationcab"] : (function () { throw new RuntimeError('Variable "operationcab" does not exist.', 157, $this->source); })()), "code", [], "any", false, false, false, 157), "html", null, true);
        yield "
    </td>
    ";
        // line 160
        yield "    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">TYPE ORGANISME</td>
    <td style=\"width:0.67%;\"></td>
    ";
        // line 163
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 163, $this->source); })()), "payant", [], "any", false, false, false, 163) == 1)) {
            // line 164
            yield "        <td style=\"width:33.3%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">PAYANT</td>
    ";
        } else {
            // line 166
            yield "        <td style=\"width:33.3%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">ORGANISME</td>
    ";
        }
        // line 168
        yield "    
    ";
        // line 170
        yield "
</tr>

</table>
<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">TYPE DE PAIEMENT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 179, $this->source); })()), "paiement", [], "any", false, false, false, 179), "designation", [], "any", false, false, false, 179), "html", null, true);
        yield "
    </td>

</tr>

</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">BANQUE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:32.80%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 191, $this->source); })()), "banque", [], "any", false, false, false, 191), "designation", [], "any", false, false, false, 191), "html", null, true);
        yield "
    </td>
    ";
        // line 194
        yield "    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">REFERENCE DE CHEQUE </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:33.3%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 197, $this->source); })()), "reference", [], "any", false, false, false, 197), "html", null, true);
        yield "</td>
    
    ";
        // line 200
        yield "
</tr>

</table>
";
        // line 215
        yield "<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">MONTANT A PAYER</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["operationTotal"]) || array_key_exists("operationTotal", $context) ? $context["operationTotal"] : (function () { throw new RuntimeError('Variable "operationTotal" does not exist.', 220, $this->source); })())), "html", null, true);
        yield "
    </td>

</tr>

</table>
<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">MONTANT REGLE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 231, $this->source); })()), "montant", [], "any", false, false, false, 231), "html", null, true);
        yield "
    </td>

</tr>

</table>
<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">ICE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
       ";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 242, $this->source); })()), "ice", [], "any", false, false, false, 242), "html", null, true);
        yield "
    </td>
    ";
        // line 245
        yield "    ";
        // line 249
        yield "
</tr>

</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
<td style=\"width:100%;border:1px solid #ddd;background:white;padding:5px;font-size:7px;text-align:justify;font-weight:bold\">
    NB:ll est à noter que le seuil de dépôt de dossier défini annuellement par l'Université ne constitue en aucun cas une convocation au concours d'accès. En cas d'absence de convocation, les frais engagés ne sont pas remboursables.
</td>

</tr>

</table>
";
        // line 264
        yield "<br><br><br><br><br><br><br><br><br><br><br><br>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "facture/pdfs/facture_reglement.html.twig";
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
        return array (  363 => 264,  347 => 249,  345 => 245,  340 => 242,  326 => 231,  312 => 220,  305 => 215,  299 => 200,  294 => 197,  289 => 194,  284 => 191,  269 => 179,  258 => 170,  255 => 168,  251 => 166,  247 => 164,  245 => 163,  240 => 160,  235 => 157,  221 => 146,  213 => 141,  204 => 135,  188 => 122,  179 => 116,  170 => 110,  154 => 97,  145 => 91,  136 => 85,  112 => 64,  94 => 49,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
<style type=\"text/Css\">
    body{
        font-family: 'Source Sans Pro', sans-serif;
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
</style>
<br>
<table style=\"width: 100%;\" cellspacing=\"0\">
    <tbody>
        <tr>
            <td style=\"width:25%; text-align:center\"><img style=\"width:80px;margin: 0 auto;\" src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" alt=\"Logo\"></td>
            <td style=\"width:1%;\"></td>
            <td style=\"width:70%;\"><p style=\"margin-left:10px;margin-top:25px;width:5px;text-align:center;font-weight:bold;\">UNIVERSITE INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTE</p></td>
        </tr>
    
    </tbody>

</table>
<table style=\"width: 100% ;text-align: center;border: 1px solid #292929; border-bottom: none;\" cellspacing=\"0\">
<tr>
    <td style=\"width: 30% ; border-bottom: 1px solid #292929 ;\">
        <table style=\"width: 100% ;\" cellspacing=\"0\">
            <tr>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:2px;color:rgb(3, 35, 68);\">CODE REGLEMENT </th>
            </tr>
            <tr>

                <td style=\"border-bottom: 1px solid #292929 ;width: 100%\"></td>
            </tr>

            <tr>
                <td style=\"width: 100% ; font-size: 11px ;padding:2px;color:rgb(31, 79, 122);\">{{reglement.code}}</td>
            </tr>
        </table>
    </td>
    <td style=\"width: 40% ;font-size: 20px;font-weight: bold ; border-left: 1px solid #292929 ;border-right: 1px solid #292929; border-bottom: 1px solid #292929 ;color:rgb(3, 35, 68);\">QUITTANCE </td>
    <td style=\"width: 30% ;border-bottom: 1px solid #292929 ;\">
        <table style=\"width: 100% ; background: #FFFFFF; text-align: center\" cellspacing=\"0\">
            <tr>
                <th style=\"width: 100% ; font-size: 13px ;font-weight: 200;font-weight: bold;padding:2px;color:rgb(3, 35, 68);\">DATE</th>
            </tr>
            <tr>
                <td style=\"border-bottom: 1px solid  #292929 ;width: 100%\"></td>
            </tr>

            <tr>
                <td style=\"width: 100% ; font-size: 11px ;padding:2px;color:rgb(3, 35, 68);\">{{ reglement.created|date(\"d/m/Y\") }}</td>
            </tr>
        </table>
    </td>

</tr>


</table>
<table style=\"width: 100%;border-top: 1px solid#292929\">
    <tr>
        <td style=\"width: 100% ; height: 10px;\"></td>
    </tr>
</table>

<table style=\"width: 100%;\">

<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:2px;font-size:8px\">ETABLISSEMENT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:2px;font-size:8px\">
        {{operationcab.preinscription.annee.formation.etablissement.designation}}
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:2px;font-size:8px\">FORMATION</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:2px;font-size:8px\">
        {{operationcab.annee.formation.designation}}
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:2px;font-size:8px\">NIVEAU</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16.67%;border:1px solid #ddd;background:white;padding:2px;font-size:8px\">
        {{promotion}}
    </td>

</tr>


</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">CODE CANDIDAT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{operationcab.preinscription.etudiant.code}}
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">CODE PRE INSCRIPTION</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{operationcab.preinscription.code}}
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">CODE INSCRIPTION</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16.67%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{inscription}}
    </td>

</tr>

</table>


<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">NOM</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{operationcab.preinscription.etudiant.nom}}
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">PRENOM</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{operationcab.preinscription.etudiant.prenom}}
    </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">DATE DE REGLEMENT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16.67%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">{{reglement.DateReglement|date(\"d/m/Y\")}}</td>

</tr>

</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">REFERENCE FACTURE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:32.80%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{operationcab.code}}
    </td>
    {# /////////////////////////////// #}
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">TYPE ORGANISME</td>
    <td style=\"width:0.67%;\"></td>
    {% if reglement.payant == 1 %}
        <td style=\"width:33.3%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">PAYANT</td>
    {% else %}
        <td style=\"width:33.3%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">ORGANISME</td>
    {% endif %}
    
    {# /////////////////////////////// #}

</tr>

</table>
<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">TYPE DE PAIEMENT</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{reglement.paiement.designation}}
    </td>

</tr>

</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">BANQUE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:32.80%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{reglement.banque.designation}}
    </td>
    {# /////////////////////////////// #}
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">REFERENCE DE CHEQUE </td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:33.3%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">{{reglement.reference}}</td>
    
    {# /////////////////////////////// #}

</tr>

</table>
{# <table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">BANQUE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{reglement.banque.designation}}
    </td>

</tr>

</table> #}
<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">MONTANT A PAYER</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{operationTotal | first}}
    </td>

</tr>

</table>
<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">MONTANT REGLE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
        {{reglement.montant}}
    </td>

</tr>

</table>
<table style=\"width: 100%;margin-top:.5px;\">
<tr>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">ICE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:83.33%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\">
       {{reglement.ice}}
    </td>
    {# /////////////////////////////// #}
    {# <td style=\"width:0.67%;\"></td>
    <td style=\"width:16%;border:1px solid #ddd;background:#eee;padding:5px;font-size:8px\">ICE</td>
    <td style=\"width:0.67%;\"></td>
    <td style=\"width:33.3%;border:1px solid #ddd;background:white;padding:5px;font-size:8px\"></td> #}

</tr>

</table>

<table style=\"width: 100%;margin-top:.5px;\">
<tr>
<td style=\"width:100%;border:1px solid #ddd;background:white;padding:5px;font-size:7px;text-align:justify;font-weight:bold\">
    NB:ll est à noter que le seuil de dépôt de dossier défini annuellement par l'Université ne constitue en aucun cas une convocation au concours d'accès. En cas d'absence de convocation, les frais engagés ne sont pas remboursables.
</td>

</tr>

</table>
{# <br> #}
<br><br><br><br><br><br><br><br><br><br><br><br>", "facture/pdfs/facture_reglement.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\facture_reglement.html.twig");
    }
}
