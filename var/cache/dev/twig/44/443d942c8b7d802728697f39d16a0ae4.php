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

/* parametre/lit/pages/modifier.html.twig */
class __TwigTemplate_35b1d32064bb7d05859369166834ee73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/lit/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/lit/pages/modifier.html.twig"));

        // line 1
        yield "<label for=\"Position\">Position:</label>
<select class=\"form-control\" name=\"position\" id=\"position\">
    <option value=\"\" disabled selected >Choix de Chambre</option>
        ";
        // line 4
        if (CoreExtension::inFilter("A", CoreExtension::getAttribute($this->env, $this->source, (isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 4, $this->source); })()), "position", [], "any", false, false, false, 4))) {
            // line 5
            yield "            <option value=\"A\" selected>A</option>
            <option value=\"B\">B</option>
            <option value=\"C\">C</option>
            ";
        } elseif (CoreExtension::inFilter("B", CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 8, $this->source); })()), "position", [], "any", false, false, false, 8))) {
            // line 9
            yield "            <option value=\"A\">A</option>
            <option value=\"B\" selected>B</option>
            <option value=\"C\">C</option>
            ";
        } elseif (CoreExtension::inFilter("C", CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 12, $this->source); })()), "position", [], "any", false, false, false, 12))) {
            // line 13
            yield "            <option value=\"A\">A</option>
            <option value=\"B\">B</option>
            <option value=\"C\" selected>C</option>
        ";
        }
        // line 17
        yield "</select>
<div class=\"d-flex align-items-center mt-2\">
    <label for=\"active\" >Active:</label>
    ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 20, $this->source); })()), "active", [], "any", false, false, false, 20) == 1)) {
            // line 21
            yield "        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked />
        ";
        } else {
            // line 23
            yield "        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
    ";
        }
        // line 25
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
        return "parametre/lit/pages/modifier.html.twig";
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
        return array (  86 => 25,  82 => 23,  78 => 21,  76 => 20,  71 => 17,  65 => 13,  63 => 12,  58 => 9,  56 => 8,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label for=\"Position\">Position:</label>
<select class=\"form-control\" name=\"position\" id=\"position\">
    <option value=\"\" disabled selected >Choix de Chambre</option>
        {% if \"A\" in lit.position %}
            <option value=\"A\" selected>A</option>
            <option value=\"B\">B</option>
            <option value=\"C\">C</option>
            {% elseif \"B\" in lit.position %}
            <option value=\"A\">A</option>
            <option value=\"B\" selected>B</option>
            <option value=\"C\">C</option>
            {% elseif \"C\" in lit.position %}
            <option value=\"A\">A</option>
            <option value=\"B\">B</option>
            <option value=\"C\" selected>C</option>
        {% endif %}
</select>
<div class=\"d-flex align-items-center mt-2\">
    <label for=\"active\" >Active:</label>
    {% if lit.active == 1 %}
        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked />
        {% else %}
        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
    {% endif %}
</div>


<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>", "parametre/lit/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\lit\\pages\\modifier.html.twig");
    }
}
