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

/* facture/pdfs/footer.html.twig */
class __TwigTemplate_151d7d03c76b56177df11e00e0cec7f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdfs/footer.html.twig"));

        yield "<div style=\"position: relative;left: 5%;width:100%;border-top:1px solid gray;padding:5px;text-align: center;font-size: 11px;line-height:14px\">
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
        return "facture/pdfs/footer.html.twig";
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
        return new Source("<div style=\"position: relative;left: 5%;width:100%;border-top:1px solid gray;padding:5px;text-align: center;font-size: 11px;line-height:14px\">
  <p>
    B.P. 6533, Avenue Allal El Fassi,Madinat Al Irfane, Rabat 10 000. Maroc -
    Web : www.uiass.ma - Contact : contact@uiass.ma
    <br />Tel : +212 5 37 68 70 20 / 21 / 22 - Fax : +212 5 37 77 01 06 &nbsp;
    &nbsp; IF: 03333477 &nbsp;&nbsp; ICE: 001713416000075
  </p>
</div>
", "facture/pdfs/footer.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pdfs\\footer.html.twig");
    }
}
