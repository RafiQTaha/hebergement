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

/* facture/modals/facture_masse.html.twig */
class __TwigTemplate_928adb8b327063a3e6f5c066d6fc68db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/facture_masse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/facture_masse.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"facture_en_masse\" aria-modal=\"true\" >
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Facturation reinscription</h5>
        <button
          type=\"button\"
          class=\"close\"
          data-dismiss=\"modal\"
          aria-label=\"Close\"
        >
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Please check your browser console</div> -->
        <form id=\"facture_masse_save\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label>Fichier xlsx</label>
            <div class=\"input-group\">
              <div class=\"input-group-prepend\">
                <div class=\"input-group-text\">
                  <i class=\"fas fa-file-excel\"></i>
                </div>
              </div>
              <input
                id=\"file\"
                type=\"file\"
                class=\"form-control myfile\"
                name=\"file\"
                style=\"padding: 0\"
              />
            </div>
          </div>
          <a href=\"#\" class=\"btn btn-primary\" id=\"facture_canvas\"><i class=\"fas fa-download\"></i> Canvas</a>
          <button class=\"btn btn-success\" type=\"submit\" id=\"facture_masse_enregistre\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
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
        return "facture/modals/facture_masse.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"facture_en_masse\" aria-modal=\"true\" >
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Facturation reinscription</h5>
        <button
          type=\"button\"
          class=\"close\"
          data-dismiss=\"modal\"
          aria-label=\"Close\"
        >
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Please check your browser console</div> -->
        <form id=\"facture_masse_save\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label>Fichier xlsx</label>
            <div class=\"input-group\">
              <div class=\"input-group-prepend\">
                <div class=\"input-group-text\">
                  <i class=\"fas fa-file-excel\"></i>
                </div>
              </div>
              <input
                id=\"file\"
                type=\"file\"
                class=\"form-control myfile\"
                name=\"file\"
                style=\"padding: 0\"
              />
            </div>
          </div>
          <a href=\"#\" class=\"btn btn-primary\" id=\"facture_canvas\"><i class=\"fas fa-download\"></i> Canvas</a>
          <button class=\"btn btn-success\" type=\"submit\" id=\"facture_masse_enregistre\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
        </form>
      </div>
    </div>
  </div>
</div>", "facture/modals/facture_masse.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\modals\\facture_masse.html.twig");
    }
}
