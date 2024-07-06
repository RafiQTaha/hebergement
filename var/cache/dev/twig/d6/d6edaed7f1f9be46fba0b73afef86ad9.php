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

/* facture/modals/modifier_organisme.html.twig */
class __TwigTemplate_cf80e3717c0d53f88de00d2153535bc3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/modifier_organisme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/modifier_organisme.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"modifier_org-modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal_modifier_org-facture\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Réglement</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
                    <div class=\"col-md-12 row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"org\">Organisme (*) :</label>
                        <select class=\"form-control\" name=\"org\" id=\"org\">
                                                    </select>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"modifier_org\"><i class=\"fas fa-check-circle\"></i> Modifier</button>
            </div>
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
        return "facture/modals/modifier_organisme.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"modifier_org-modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal_modifier_org-facture\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Réglement</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        {# <form id=\"modifier_org-form\"> #}
            <div class=\"col-md-12 row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"org\">Organisme (*) :</label>
                        <select class=\"form-control\" name=\"org\" id=\"org\">
                            {# <option value=\"\">Choix Organisme</option>
                            {% for organisme in organismes %}
                                <option value=\"{{organisme.id}}\">{{organisme.designation}}</option>
                            {% endfor %} #}
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"modifier_org\"><i class=\"fas fa-check-circle\"></i> Modifier</button>
            </div>
        {# </form> #}
      </div>


    </div>
  </div>
</div>", "facture/modals/modifier_organisme.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\modals\\modifier_organisme.html.twig");
    }
}
