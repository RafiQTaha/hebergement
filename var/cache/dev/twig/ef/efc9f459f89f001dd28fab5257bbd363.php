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

/* facture/pdfs/header_creance.html.twig */
class __TwigTemplate_855b1ad60c74b559a10b72e96db5078e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/header_creance.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/header_creance.html.twig"));

        // line 1
        yield "<table style=\"width: 100%;\" align=\"center\" cellspacing=\"0\" >
    <tr>
        <td style=\"width: 30%\">
            <img style=\" margin-right: auto;margin-left:auto; float: left ; width: 25%; height: 10%\" src=\"./assets/img/logo/Logo UIASS_bkack2.png\" alt=\"Logo\">
        </td>
        <td style=\"width: 60%;text-align:center;font-size:13px;\">
            UNIVERSITE INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTE<br/>
            <span style=\"color:red;margin-top: 5px;padding-bottom: 5px;\">ETAT DES CREANCES DES PAYANTS</span><br/>
            <span style=\"margin-top: 10px;\">ANNEE UNIVERSITAIRE 2022/2023 </span><br/>
            <span style=\"margin-top: 10px;font-size:10px;\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</span>
        </td>
        <td style=\"width: 40%;\"></td>
    </tr>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "facture/pdfs/header_creance.html.twig";
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
        return array (  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table style=\"width: 100%;\" align=\"center\" cellspacing=\"0\" >
    <tr>
        <td style=\"width: 30%\">
            <img style=\" margin-right: auto;margin-left:auto; float: left ; width: 25%; height: 10%\" src=\"./assets/img/logo/Logo UIASS_bkack2.png\" alt=\"Logo\">
        </td>
        <td style=\"width: 60%;text-align:center;font-size:13px;\">
            UNIVERSITE INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTE<br/>
            <span style=\"color:red;margin-top: 5px;padding-bottom: 5px;\">ETAT DES CREANCES DES PAYANTS</span><br/>
            <span style=\"margin-top: 10px;\">ANNEE UNIVERSITAIRE 2022/2023 </span><br/>
            <span style=\"margin-top: 10px;font-size:10px;\">{{ \"now\"|date(\"d/m/Y\") }}</span>
        </td>
        <td style=\"width: 40%;\"></td>
    </tr>
</table>", "facture/pdfs/header_creance.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\header_creance.html.twig");
    }
}
