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

/* facture/modals/annee_extraction_frais.html.twig */
class __TwigTemplate_c492ae91b25cac66e731e85cf2687959 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/annee_extraction_frais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/annee_extraction_frais.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"annee_extraction_frais\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal_annee_extraction_frais\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Annee D'extraction</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form id=\"export-form\">
            <div class=\"col-md-12 row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"annee\">Annee D'extraction (*) :</label>
                        <div class=\"d-flex\">
                            <input type='text' placeholder='2021' class=\"form-control\" name=\"annee\" id=\"annee\" style=\"width: 50%;\">
                            <p class=\"\" style=\"margin-left: 10px;\">/ <span id=\"year_plus_one\"></span></p>
                        </div>
                                            </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"export_frais\"><i class=\"fas fa-check-circle\"></i> Exporter</button>
                <button class=\"btn btn-success\" id=\"export_non_inscrit\"><i class=\"fas fa-check-circle\"></i> Extraction des non Inscrits</button>
            </div>
        </form>
      </div>


    </div>
  </div>
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
        return "facture/modals/annee_extraction_frais.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"annee_extraction_frais\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal_annee_extraction_frais\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Annee D'extraction</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form id=\"export-form\">
            <div class=\"col-md-12 row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"annee\">Annee D'extraction (*) :</label>
                        <div class=\"d-flex\">
                            <input type='text' placeholder='2021' class=\"form-control\" name=\"annee\" id=\"annee\" style=\"width: 50%;\">
                            <p class=\"\" style=\"margin-left: 10px;\">/ <span id=\"year_plus_one\"></span></p>
                        </div>
                        {# <input type='text' placeholder='2021' class=\"form-control\" name=\"annee\" id=\"annee\"> #}
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"export_frais\"><i class=\"fas fa-check-circle\"></i> Exporter</button>
                <button class=\"btn btn-success\" id=\"export_non_inscrit\"><i class=\"fas fa-check-circle\"></i> Extraction des non Inscrits</button>
            </div>
        </form>
      </div>


    </div>
  </div>
</div>", "facture/modals/annee_extraction_frais.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\modals\\annee_extraction_frais.html.twig");
    }
}
