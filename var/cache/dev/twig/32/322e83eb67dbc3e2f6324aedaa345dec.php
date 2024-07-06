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

/* parametre/module/pages/modifier.html.twig */
class __TwigTemplate_bc407154d16d5ac9c6da5403d8b7e080 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/module/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/module/pages/modifier.html.twig"));

        // line 1
        yield "<label for=\"designation\">Désignation:</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 2, $this->source); })()), "designation", [], "any", false, false, false, 2), "html", null, true);
        yield "\"/>
<label for=\"coefficient\">Coefficient:</label>
<input type=\"float\" class=\"form-control\" name=\"coefficient\" id=\"coefficient\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 4, $this->source); })()), "coefficient", [], "any", false, false, false, 4), "html", null, true);
        yield "\" />
<label for=\"coefficient_ef\">Coefficient Epreuve EF (*)</label>
<select class=\"form-control\" name=\"type\" id=\"type\">
    <option value=\"\" selected>Choix Type </option>
    ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8) == "A")) {
            // line 9
            yield "        <option value=\"A\" selected>A</option>
        <option value=\"N\">N</option>
        <option value=\"S\">S</option>
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12) == "N")) {
            // line 13
            yield "        <option value=\"A\">A</option>
        <option value=\"N\" selected>N</option>
        <option value=\"S\">S</option>
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16) == "S")) {
            // line 17
            yield "        <option value=\"A\">A</option>
        <option value=\"N\">N</option>
        <option value=\"S\" selected>S</option>
    ";
        } else {
            // line 21
            yield "        <option value=\"A\">A</option>
        <option value=\"N\">N</option>
        <option value=\"S\">S</option>
    ";
        }
        // line 25
        yield "</select>
<div class=\"d-flex align-items-center mt-2\">
    <label for=\"color\" >Couleur :</label>
    ";
        // line 29
        yield "    <input  type=\"color\"  class=\"mb-2 ml-4\" name=\"color\" id=\"color\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "color", [], "any", false, false, false, 29), "html", null, true);
        yield "\" />
</div>
<div class=\"d-flex align-items-center mt-2\">
    <label for=\"active\" >Active:</label>
    ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "active", [], "any", false, false, false, 33) == 1)) {
            // line 34
            yield "        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked/>
    ";
        } else {
            // line 36
            yield "        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\"/>
    ";
        }
        // line 38
        yield "</div>
<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
";
        // line 41
        yield "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parametre/module/pages/modifier.html.twig";
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
        return array (  114 => 41,  110 => 38,  106 => 36,  102 => 34,  100 => 33,  92 => 29,  87 => 25,  81 => 21,  75 => 17,  73 => 16,  68 => 13,  66 => 12,  61 => 9,  59 => 8,  52 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label for=\"designation\">Désignation:</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"{{module.designation}}\"/>
<label for=\"coefficient\">Coefficient:</label>
<input type=\"float\" class=\"form-control\" name=\"coefficient\" id=\"coefficient\" value=\"{{module.coefficient}}\" />
<label for=\"coefficient_ef\">Coefficient Epreuve EF (*)</label>
<select class=\"form-control\" name=\"type\" id=\"type\">
    <option value=\"\" selected>Choix Type </option>
    {% if module.type == \"A\" %}
        <option value=\"A\" selected>A</option>
        <option value=\"N\">N</option>
        <option value=\"S\">S</option>
    {% elseif module.type == \"N\" %}
        <option value=\"A\">A</option>
        <option value=\"N\" selected>N</option>
        <option value=\"S\">S</option>
    {% elseif module.type == \"S\" %}
        <option value=\"A\">A</option>
        <option value=\"N\">N</option>
        <option value=\"S\" selected>S</option>
    {% else %}
        <option value=\"A\">A</option>
        <option value=\"N\">N</option>
        <option value=\"S\">S</option>
    {% endif %}
</select>
<div class=\"d-flex align-items-center mt-2\">
    <label for=\"color\" >Couleur :</label>
    {# <input  type=\"color\"  class=\"mb-2 ml-4\" name=\"color\" id=\"color\" value=\"\" /> #}
    <input  type=\"color\"  class=\"mb-2 ml-4\" name=\"color\" id=\"color\" value=\"{{module.color}}\" />
</div>
<div class=\"d-flex align-items-center mt-2\">
    <label for=\"active\" >Active:</label>
    {% if module.active == 1 %}
        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked/>
    {% else %}
        <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\"/>
    {% endif %}
</div>
<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
{# <button type=\"button\" id=\"save_document\" class=\"btn btn-success mt-2\"><i class=\"fas fa-check-circle\"></i> Enregistrer</button> #}
        ", "parametre/module/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\module\\pages\\modifier.html.twig");
    }
}
