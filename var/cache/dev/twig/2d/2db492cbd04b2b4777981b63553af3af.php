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

/* facture/pdfs/header_borderaux.html.twig */
class __TwigTemplate_557505bfc1864f36de773a439111037a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/header_borderaux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/header_borderaux.html.twig"));

        yield "<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
<table style=\"width:100%\">
    <tr style=\"width:100%\">
        <td style=\"width:25%;text-align:center\"> <img src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" style=\"width:100px;margin: 0 auto;\" > </td>
        <td style=\"width:70%;font-family: 'Source Sans Pro', sans-serif;\"> <b>UNIVERSITE INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTE</b> </td>
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
        return "facture/pdfs/header_borderaux.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
<table style=\"width:100%\">
    <tr style=\"width:100%\">
        <td style=\"width:25%;text-align:center\"> <img src=\"./assets/img/logo/Logo_UIASS_bkack2.png\" style=\"width:100px;margin: 0 auto;\" > </td>
        <td style=\"width:70%;font-family: 'Source Sans Pro', sans-serif;\"> <b>UNIVERSITE INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTE</b> </td>
    </tr>
</table>", "facture/pdfs/header_borderaux.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\header_borderaux.html.twig");
    }
}
