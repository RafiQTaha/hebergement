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

/* etudiant/modals/annee_extraction.html.twig */
class __TwigTemplate_fbf31c7a1d1041709d028ce6bfdb06ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/modals/annee_extraction.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/modals/annee_extraction.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"annee_extraction_inscription\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal_annee_extraction_inscription\" role=\"document\">
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
                          <input type='text' placeholder='2021' class=\"form-control\" name=\"annee_export\" id=\"annee_export\" style=\"width: 50%;\">
                          <p class=\"\"  style=\"margin-left: 10px;\">/ <span id=\"year_plus_one\"></span></p>
                        </div>
                                                </select>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"export_inscription\"><i class=\"fas fa-check-circle\"></i> Exporter</button>
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
        return "etudiant/modals/annee_extraction.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"annee_extraction_inscription\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal_annee_extraction_inscription\" role=\"document\">
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
                          <input type='text' placeholder='2021' class=\"form-control\" name=\"annee_export\" id=\"annee_export\" style=\"width: 50%;\">
                          <p class=\"\"  style=\"margin-left: 10px;\">/ <span id=\"year_plus_one\"></span></p>
                        </div>
                        {# <input type='text' placeholder='2021' class=\"form-control\" name=\"annee_export\" id=\"annee_export\"> #}
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"export_inscription\"><i class=\"fas fa-check-circle\"></i> Exporter</button>
            </div>
        </form>
      </div>


    </div>
  </div>
</div>", "etudiant/modals/annee_extraction.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\etudiant\\modals\\annee_extraction.html.twig");
    }
}
