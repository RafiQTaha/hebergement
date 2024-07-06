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

/* parametre/frais/modals/ajouter.html.twig */
class __TwigTemplate_6b352a634f5e14c80b13682e48efd35e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/frais/modals/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/frais/modals/ajouter.html.twig"));

        // line 1
        yield "<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
  <div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Promotion</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />

            <label for=\"categorie\">Categorie:</label>
            <select class=\"form-control\" name=\"categorie\" id=\"categorie\">
                <option value=\"\">Choix Categorie </option>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 20
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "            </select>
        
            <label for=\"montant\">montant:</label>
            <input  type=\"number\" step=\"0.01\" min=\"0\" class=\"form-control\" name=\"montant\" id=\"montant\" />
            
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
        return "parametre/frais/modals/ajouter.html.twig";
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
        return array (  79 => 22,  68 => 20,  64 => 19,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"ajout_modal\" aria-modal=\"true\"> 
  <div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Promotion</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save\">
            <label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" />

            <label for=\"categorie\">Categorie:</label>
            <select class=\"form-control\" name=\"categorie\" id=\"categorie\">
                <option value=\"\">Choix Categorie </option>
                {% for categorie in categories %}
                    <option value=\"{{ categorie }}\">{{ categorie }}</option>
                {% endfor %}
            </select>
        
            <label for=\"montant\">montant:</label>
            <input  type=\"number\" step=\"0.01\" min=\"0\" class=\"form-control\" name=\"montant\" id=\"montant\" />
            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
        </form>
      </div>
    </div>
  </div>
</div>", "parametre/frais/modals/ajouter.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\frais\\modals\\ajouter.html.twig");
    }
}
