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

/* parametre/enseignant/modals/ajouter.html.twig */
class __TwigTemplate_4dcf93db8ec25a7a69418caa5a37ef97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/enseignant/modals/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/enseignant/modals/ajouter.html.twig"));

        // line 1
        yield "<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Enseignant</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"nom\">Nom : (*)</label>
            <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Nom d'enseignant\"/>
        
            <label for=\"prenom\">Prénom : (*)</label>
            <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom  d'enseignant\" />

            <label for=\"grade\">Grade : (*)</label>
            <select class=\"form-control\" name=\"grade\" id=\"grade\">
                <option value=\"\">Choix Grade </option>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["grades"]) || array_key_exists("grades", $context) ? $context["grades"] : (function () { throw new RuntimeError('Variable "grades" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 23
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["grade"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["grade"], "designation", [], "any", false, false, false, 23), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "            </select>
        
            <label for=\"cin\">CIN : (*)</label>
            <input type=\"text\" class=\"form-control\" name=\"cin\" id=\"cin\" placeholder=\"Cin  d'enseignant\" />
        
            <label for=\"rib\">Rib : (*)</label>
            <div class=\"rib d-flex align-items-center\">
              <input type=\"text\" class=\"form-control\" name=\"rib\" id=\"rib\" placeholder=\"Rib  d'enseignant\" maxlength=\"24\"/>
              <span class=\"rib_icon\"><i class=\"fas fa-check-circle\"></i></span>
            </div>
            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            ";
        // line 38
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
        return "parametre/enseignant/modals/ajouter.html.twig";
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
        return array (  96 => 38,  82 => 25,  71 => 23,  67 => 22,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Enseignant</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"nom\">Nom : (*)</label>
            <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Nom d'enseignant\"/>
        
            <label for=\"prenom\">Prénom : (*)</label>
            <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom  d'enseignant\" />

            <label for=\"grade\">Grade : (*)</label>
            <select class=\"form-control\" name=\"grade\" id=\"grade\">
                <option value=\"\">Choix Grade </option>
                {% for grade in grades %}
                    <option value=\"{{ grade.id }}\">{{ grade.designation }}</option>
                {% endfor %}
            </select>
        
            <label for=\"cin\">CIN : (*)</label>
            <input type=\"text\" class=\"form-control\" name=\"cin\" id=\"cin\" placeholder=\"Cin  d'enseignant\" />
        
            <label for=\"rib\">Rib : (*)</label>
            <div class=\"rib d-flex align-items-center\">
              <input type=\"text\" class=\"form-control\" name=\"rib\" id=\"rib\" placeholder=\"Rib  d'enseignant\" maxlength=\"24\"/>
              <span class=\"rib_icon\"><i class=\"fas fa-check-circle\"></i></span>
            </div>
            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            {# <button type=\"button\" id=\"save_document\" class=\"btn btn-success mt-2\"><i class=\"fas fa-check-circle\"></i> Enregistrer</button> #}
        </form>
      </div>
    </div>
  </div>
</div>", "parametre/enseignant/modals/ajouter.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\enseignant\\modals\\ajouter.html.twig");
    }
}
