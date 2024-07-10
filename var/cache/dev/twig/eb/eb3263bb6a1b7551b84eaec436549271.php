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

/* etudiant/modals/affectation.html.twig */
class __TwigTemplate_d676ab63f4a59466c12c2df949d1deee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/modals/affectation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/modals/affectation.html.twig"));

        // line 1
        yield "<div class=\"modal\" role=\"dialog\" id=\"affectation_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 400px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Hébérger un etudiant</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"affectation_save\">
            <label for=\"departement\">Département:</label>
            <select class=\"form-control\" name=\"departement\" id=\"departement\">
              <option value=\"\">Choix de département</option>
              ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["departements"]) || array_key_exists("departements", $context) ? $context["departements"] : (function () { throw new RuntimeError('Variable "departements" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            yield "    
                  <option value=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "\" >";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["departement"], "designation", [], "any", false, false, false, 17), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "            </select>

            <label for=\"etage\">Etage:</label>
            <select class=\"form-control\" name=\"etage\" id=\"etage\">
                
            </select>

            <label for=\"chambre\">Chambre:</label>
            <select class=\"form-control\" name=\"chambre\" id=\"chambre\">
                
            </select>
            
            <label for=\"lit\">Lit:</label>
            <select class=\"form-control\" name=\"lit\" id=\"lit\">
                
            </select>
            
            <label for=\"periode\">Periode de:</label>
\t\t\t\t\t\t<input type=\"date\" name=\"date_debut\" class=\"form-control\" placeholder=\"Date Debut\" id=\"date_debut\"  >
            
            <label for=\"periode\">Periode au:</label>
            <input type=\"date\" name=\"date_fin\" class=\"form-control\" placeholder=\"Date Fin\" id=\"date_fin\" >

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
        return "etudiant/modals/affectation.html.twig";
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
        return array (  77 => 19,  67 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"affectation_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 400px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Hébérger un etudiant</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"affectation_save\">
            <label for=\"departement\">Département:</label>
            <select class=\"form-control\" name=\"departement\" id=\"departement\">
              <option value=\"\">Choix de département</option>
              {% for departement in departements %}    
                  <option value=\"{{departement.id}}\" >{{departement.designation}}</option>
              {% endfor %}
            </select>

            <label for=\"etage\">Etage:</label>
            <select class=\"form-control\" name=\"etage\" id=\"etage\">
                
            </select>

            <label for=\"chambre\">Chambre:</label>
            <select class=\"form-control\" name=\"chambre\" id=\"chambre\">
                
            </select>
            
            <label for=\"lit\">Lit:</label>
            <select class=\"form-control\" name=\"lit\" id=\"lit\">
                
            </select>
            
            <label for=\"periode\">Periode de:</label>
\t\t\t\t\t\t<input type=\"date\" name=\"date_debut\" class=\"form-control\" placeholder=\"Date Debut\" id=\"date_debut\"  >
            
            <label for=\"periode\">Periode au:</label>
            <input type=\"date\" name=\"date_fin\" class=\"form-control\" placeholder=\"Date Fin\" id=\"date_fin\" >

            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
        </form>
      </div>
    </div>
  </div>
</div>", "etudiant/modals/affectation.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\etudiant\\modals\\affectation.html.twig");
    }
}
