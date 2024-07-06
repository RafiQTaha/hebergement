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

/* parametre/etage/modals/ajouter.html.twig */
class __TwigTemplate_aa09487a4881d16e1582df7b58055a28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/etage/modals/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/etage/modals/ajouter.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Etage</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />
        
            <label for=\"abreviation\">Abréviation:</label>
            <input  type=\"text\"  class=\"form-control\" name=\"abreviation\" id=\"abreviation\" />        
          
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"active\" >Active:</label>
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
            </div>

            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
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
        return "parametre/etage/modals/ajouter.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Etage</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />
        
            <label for=\"abreviation\">Abréviation:</label>
            <input  type=\"text\"  class=\"form-control\" name=\"abreviation\" id=\"abreviation\" />        
          
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"active\" >Active:</label>
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
            </div>

            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            {# <button type=\"button\" id=\"save_document\" class=\"btn btn-success mt-2\"><i class=\"fas fa-check-circle\"></i> Enregistrer</button> #}
        </form>
      </div>
    </div>
  </div>
</div>", "parametre/etage/modals/ajouter.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\etage\\modals\\ajouter.html.twig");
    }
}
