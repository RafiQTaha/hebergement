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

/* parametre/element/modals/ajouter.html.twig */
class __TwigTemplate_6975cc12959c7e0c847ad8c22d7f6947 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/element/modals/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/element/modals/ajouter.html.twig"));

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
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />
            <label for=\"nature\">Nature:</label>
            <select class=\"form-control\" name=\"nature\" id=\"nature\">
                <option value=\"\">Choix Nature</option>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["natures"]) || array_key_exists("natures", $context) ? $context["natures"] : (function () { throw new RuntimeError('Variable "natures" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nature"]) {
            // line 19
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "designation", [], "any", false, false, false, 19), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "            </select>
            <label for=\"coefficient\">Coefficient Epreuve CC : (*)</label>
            <input type=\"float\" class=\"form-control\" name=\"coefficient\" id=\"coefficient\" />
            <label for=\"coefficient_cc\">Coefficient:</label>
            <select class=\"form-control\" name=\"coefficient_cc\" id=\"coefficient_cc\">
                <option value=\"\">Choix Coefficient Epreuve CC </option>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            </select>
            <label for=\"coefficient_tp\">Coefficient Epreuve TP: (*)</label>
            <select class=\"form-control\" name=\"coefficient_tp\" id=\"coefficient_tp\">
                <option value=\"\">Choix Coefficient Epreuve TP </option>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            </select>
            <label for=\"coefficient_ef\">Coefficient Epreuve EF (*)</label>
            <select class=\"form-control\" name=\"coefficient_ef\" id=\"coefficient_ef\">
                <option value=\"\">Choix Coefficient Epreuve EF </option>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </select>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"active\" >Active:</label>
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
            </div>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"cours_document\" >cours_document:</label>
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"cours_document\" id=\"cours_document\" />
            </div>
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            ";
        // line 55
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
        return "parametre/element/modals/ajouter.html.twig";
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
        return array (  155 => 55,  143 => 44,  132 => 42,  128 => 41,  122 => 37,  111 => 35,  107 => 34,  101 => 30,  90 => 28,  86 => 27,  78 => 21,  67 => 19,  63 => 18,  44 => 1,);
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
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />
            <label for=\"nature\">Nature:</label>
            <select class=\"form-control\" name=\"nature\" id=\"nature\">
                <option value=\"\">Choix Nature</option>
                {% for nature in natures %}
                    <option value=\"{{nature.id}}\">{{nature.designation}}</option>
                {% endfor %}
            </select>
            <label for=\"coefficient\">Coefficient Epreuve CC : (*)</label>
            <input type=\"float\" class=\"form-control\" name=\"coefficient\" id=\"coefficient\" />
            <label for=\"coefficient_cc\">Coefficient:</label>
            <select class=\"form-control\" name=\"coefficient_cc\" id=\"coefficient_cc\">
                <option value=\"\">Choix Coefficient Epreuve CC </option>
                {% for i in 0..20 %}
                    <option value=\"{{ i }}\">{{ i }}</option>
                {% endfor %}
            </select>
            <label for=\"coefficient_tp\">Coefficient Epreuve TP: (*)</label>
            <select class=\"form-control\" name=\"coefficient_tp\" id=\"coefficient_tp\">
                <option value=\"\">Choix Coefficient Epreuve TP </option>
                {% for i in 0..20 %}
                    <option value=\"{{ i }}\">{{ i }}</option>
                {% endfor %}
            </select>
            <label for=\"coefficient_ef\">Coefficient Epreuve EF (*)</label>
            <select class=\"form-control\" name=\"coefficient_ef\" id=\"coefficient_ef\">
                <option value=\"\">Choix Coefficient Epreuve EF </option>
                {% for i in 0..20 %}
                    <option value=\"{{ i }}\">{{ i }}</option>
                {% endfor %}
            </select>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"active\" >Active:</label>
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
            </div>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"cours_document\" >cours_document:</label>
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"cours_document\" id=\"cours_document\" />
            </div>
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            {# <button type=\"button\" id=\"save_document\" class=\"btn btn-success mt-2\"><i class=\"fas fa-check-circle\"></i> Enregistrer</button> #}
        </form>
      </div>
    </div>
  </div>
</div>", "parametre/element/modals/ajouter.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\element\\modals\\ajouter.html.twig");
    }
}
