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

/* parametre/chambre/pages/modifier.html.twig */
class __TwigTemplate_ba631c6c27adfa84cc5e602ee47ffbf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/chambre/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/chambre/pages/modifier.html.twig"));

        // line 1
        yield "<label for=\"TypeChambre\">Type de Chambre:</label>
<select class=\"form-control\" name=\"typechambre\" id=\"typechambre\">
    <option value=\"\">Choix de Chambre</option>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typechambres"]) || array_key_exists("typechambres", $context) ? $context["typechambres"] : (function () { throw new RuntimeError('Variable "typechambres" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typechambre"]) {
            // line 5
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typechambre"], "id", [], "any", false, false, false, 5), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 5, $this->source); })()), "typechambre", [], "any", false, false, false, 5) == $context["typechambre"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typechambre"], "designation", [], "any", false, false, false, 5), "html", null, true);
            yield "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typechambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "</select>

<label for=\"statutChambre\">Statut de Chambre:</label>
<select class=\"form-control\" name=\"statutchambre\" id=\"statutchambre\">
    <option value=\"\">Choix de statut</option>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statutchambres"]) || array_key_exists("statutchambres", $context) ? $context["statutchambres"] : (function () { throw new RuntimeError('Variable "statutchambres" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statutchambre"]) {
            yield "    
        <option value=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statutchambre"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 13, $this->source); })()), "statutChambre", [], "any", false, false, false, 13) == $context["statutchambre"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statutchambre"], "designation", [], "any", false, false, false, 13), "html", null, true);
            yield "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statutchambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "</select>

<label for=\"designation\">Désignation:</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 18, $this->source); })()), "designation", [], "any", false, false, false, 18), "html", null, true);
        yield "\" />

<label for=\"abreviation\">Abreviation:</label>
<input type=\"text\" class=\"form-control\" name=\"abreviation\" id=\"abreviation\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 21, $this->source); })()), "abreviation", [], "any", false, false, false, 21), "html", null, true);
        yield "\"  />  

<div class=\"d-flex align-items-center mt-2\">
    <label for=\"active\" >Active:</label>
    ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 25, $this->source); })()), "active", [], "any", false, false, false, 25) == 1)) {
            // line 26
            yield "      <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked />
      ";
        } else {
            // line 28
            yield "      <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
    ";
        }
        // line 30
        yield "</div>

<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parametre/chambre/pages/modifier.html.twig";
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
        return array (  123 => 30,  119 => 28,  115 => 26,  113 => 25,  106 => 21,  100 => 18,  95 => 15,  81 => 13,  75 => 12,  68 => 7,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label for=\"TypeChambre\">Type de Chambre:</label>
<select class=\"form-control\" name=\"typechambre\" id=\"typechambre\">
    <option value=\"\">Choix de Chambre</option>
    {% for typechambre in typechambres %}
        <option value=\"{{typechambre.id}}\" {% if chambre.typechambre == typechambre %}selected{% endif %}>{{typechambre.designation}}</option>
    {% endfor %}
</select>

<label for=\"statutChambre\">Statut de Chambre:</label>
<select class=\"form-control\" name=\"statutchambre\" id=\"statutchambre\">
    <option value=\"\">Choix de statut</option>
    {% for statutchambre in statutchambres %}    
        <option value=\"{{statutchambre.id}}\" {% if chambre.statutChambre == statutchambre %}selected{% endif %}>{{statutchambre.designation}}</option>
    {% endfor %}
</select>

<label for=\"designation\">Désignation:</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"{{chambre.designation}}\" />

<label for=\"abreviation\">Abreviation:</label>
<input type=\"text\" class=\"form-control\" name=\"abreviation\" id=\"abreviation\" value=\"{{chambre.abreviation}}\"  />  

<div class=\"d-flex align-items-center mt-2\">
    <label for=\"active\" >Active:</label>
    {% if chambre.active == 1 %}
      <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked />
      {% else %}
      <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
    {% endif %}
</div>

<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>", "parametre/chambre/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\chambre\\pages\\modifier.html.twig");
    }
}
