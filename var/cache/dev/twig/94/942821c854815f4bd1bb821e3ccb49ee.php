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

/* parametre/chambre/modals/ajouter.html.twig */
class __TwigTemplate_72ef99615b0b418ec6ae18b20a294940 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/chambre/modals/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/chambre/modals/ajouter.html.twig"));

        // line 1
        yield "<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Chambre</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"TypeChambre\">Type de Chambre:</label>
            <select class=\"form-control\" name=\"typechambre\" id=\"typechambre\">
                <option value=\"\">Choix de Chambre</option>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typechambres"]) || array_key_exists("typechambres", $context) ? $context["typechambres"] : (function () { throw new RuntimeError('Variable "typechambres" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typechambre"]) {
            // line 17
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typechambre"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typechambre"], "designation", [], "any", false, false, false, 17), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typechambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "            </select>

            <label for=\"statutchambre\">Statut de Chambre:</label>
            <select class=\"form-control\" name=\"statutchambre\" id=\"statutchambre\">
                <option value=\"\">Choix de Nature</option>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statutchambres"]) || array_key_exists("statutchambres", $context) ? $context["statutchambres"] : (function () { throw new RuntimeError('Variable "statutchambres" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statutchambre"]) {
            // line 25
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statutchambre"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statutchambre"], "designation", [], "any", false, false, false, 25), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statutchambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "            </select>
            
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />

            <label for=\"abreviation\">Abreviation:</label>
            <input type=\"text\" class=\"form-control\" name=\"abreviation\" id=\"abreviation\" />        
           
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"active\" >Active:</label>
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
            </div>

            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            ";
        // line 43
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
        return "parametre/chambre/modals/ajouter.html.twig";
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
        return array (  115 => 43,  98 => 27,  87 => 25,  83 => 24,  76 => 19,  65 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Chambre</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"TypeChambre\">Type de Chambre:</label>
            <select class=\"form-control\" name=\"typechambre\" id=\"typechambre\">
                <option value=\"\">Choix de Chambre</option>
                {% for typechambre in typechambres %}
                    <option value=\"{{typechambre.id}}\">{{typechambre.designation}}</option>
                {% endfor %}
            </select>

            <label for=\"statutchambre\">Statut de Chambre:</label>
            <select class=\"form-control\" name=\"statutchambre\" id=\"statutchambre\">
                <option value=\"\">Choix de Nature</option>
                {% for statutchambre in statutchambres %}
                    <option value=\"{{statutchambre.id}}\">{{statutchambre.designation}}</option>
                {% endfor %}
            </select>
            
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />

            <label for=\"abreviation\">Abreviation:</label>
            <input type=\"text\" class=\"form-control\" name=\"abreviation\" id=\"abreviation\" />        
           
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
</div>", "parametre/chambre/modals/ajouter.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\chambre\\modals\\ajouter.html.twig");
    }
}
