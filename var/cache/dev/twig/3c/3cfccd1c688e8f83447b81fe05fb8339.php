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

/* inscription/modals/affect.html.twig */
class __TwigTemplate_f16298f874493dd9e52ca385213fc046 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/modals/affect.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/modals/affect.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"import_affectation\" aria-modal=\"true\" >
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Import Groupes</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form id=\"import_groupes_save\" method=\"post\">
          <div class=\"form-group\">
            <label>Fichier xlsx</label>
            <div class=\"input-group\">
              <div class=\"input-group-prepend\">
                <div class=\"input-group-text\">
                  <i class=\"fas fa-file-excel\"></i>
                </div>
              </div>
              <input type=\"file\" class=\"form-control myfile\" name=\"file\" style=\"padding: 0\" />
            </div>
          </div>
          <a href=\"#\" class=\"btn btn-primary\" id=\"affectation_canvas\"><i class=\"fas fa-download\"></i> Canvas</a>
          <a href=\"#\" class=\"btn btn-primary\" id=\"groupes_canvas\"><i class=\"fas fa-download\"></i> Groupes Canvas</a>
          <button class=\"btn btn-success\" type=\"submit\" id=\"affectation_enregistre\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
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
        return "inscription/modals/affect.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"import_affectation\" aria-modal=\"true\" >
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Import Groupes</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form id=\"import_groupes_save\" method=\"post\">
          <div class=\"form-group\">
            <label>Fichier xlsx</label>
            <div class=\"input-group\">
              <div class=\"input-group-prepend\">
                <div class=\"input-group-text\">
                  <i class=\"fas fa-file-excel\"></i>
                </div>
              </div>
              <input type=\"file\" class=\"form-control myfile\" name=\"file\" style=\"padding: 0\" />
            </div>
          </div>
          <a href=\"#\" class=\"btn btn-primary\" id=\"affectation_canvas\"><i class=\"fas fa-download\"></i> Canvas</a>
          <a href=\"#\" class=\"btn btn-primary\" id=\"groupes_canvas\"><i class=\"fas fa-download\"></i> Groupes Canvas</a>
          <button class=\"btn btn-success\" type=\"submit\" id=\"affectation_enregistre\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
        </form>
      </div>
    </div>  
  </div>
</div>", "inscription/modals/affect.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\inscription\\modals\\affect.html.twig");
    }
}
