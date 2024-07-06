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

/* parametre/programmation/modals/ajouter.html.twig */
class __TwigTemplate_cbf72e2d3fb5934299bbae59526391cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/programmation/modals/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/programmation/modals/ajouter.html.twig"));

        // line 1
        yield "<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Element</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"observation\">Observation:</label>
            <input type=\"text\" class=\"form-control\" name=\"observation\" id=\"observation\" placeholder=\"Observation\"/>
            <label for=\"volume\">Volume:</label>
            <input type=\"text\" class=\"form-control\" name=\"volume\" id=\"volume\" placeholder=\"Volume\"/>
            <label for=\"nature\">Nature:</label>
            <select class=\"form-control\" name=\"nature\" id=\"nature\">
                <option value=\"\">Choix Nature Epreuve</option>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["natures"]) || array_key_exists("natures", $context) ? $context["natures"] : (function () { throw new RuntimeError('Variable "natures" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nature"]) {
            // line 21
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "designation", [], "any", false, false, false, 21), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "            </select>
            <label for=\"enseignant\">enseignants:</label>
            <select class=\"form-control chosen-select\" name=\"enseignant[]\" id=\"enseignant\" multiple=\"multiple\">
                <option value=\"\" disabled=\"disabled\">Choix Enseignant</option>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 28
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "prenom", [], "any", false, false, false, 28), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            </select>
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            ";
        // line 33
        yield "        </form>
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
        return "parametre/programmation/modals/ajouter.html.twig";
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
        return array (  107 => 33,  103 => 30,  90 => 28,  86 => 27,  80 => 23,  69 => 21,  65 => 20,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Element</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"observation\">Observation:</label>
            <input type=\"text\" class=\"form-control\" name=\"observation\" id=\"observation\" placeholder=\"Observation\"/>
            <label for=\"volume\">Volume:</label>
            <input type=\"text\" class=\"form-control\" name=\"volume\" id=\"volume\" placeholder=\"Volume\"/>
            <label for=\"nature\">Nature:</label>
            <select class=\"form-control\" name=\"nature\" id=\"nature\">
                <option value=\"\">Choix Nature Epreuve</option>
                {% for nature in natures %}
                    <option value=\"{{nature.id}}\">{{nature.designation}}</option>
                {% endfor %}
            </select>
            <label for=\"enseignant\">enseignants:</label>
            <select class=\"form-control chosen-select\" name=\"enseignant[]\" id=\"enseignant\" multiple=\"multiple\">
                <option value=\"\" disabled=\"disabled\">Choix Enseignant</option>
                {% for enseignant in enseignants %}
                    <option value=\"{{enseignant.id}}\">{{enseignant.nom}} {{enseignant.prenom}}</option>
                {% endfor %}
            </select>
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            {# <button type=\"button\" id=\"save_document\" class=\"btn btn-success mt-2\"><i class=\"fas fa-check-circle\"></i> Enregistrer</button> #}
        </form>
      </div>
    </div>
  </div>
</div>", "parametre/programmation/modals/ajouter.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\programmation\\modals\\ajouter.html.twig");
    }
}
