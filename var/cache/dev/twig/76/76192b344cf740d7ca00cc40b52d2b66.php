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

/* parametre/element/pages/modifier.html.twig */
class __TwigTemplate_7c62f903d00efa8ef84a2dcee1b28ff1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/element/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/element/pages/modifier.html.twig"));

        // line 1
        yield "<label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 2, $this->source); })()), "designation", [], "any", false, false, false, 2), "html", null, true);
        yield "\"/>
            <label for=\"nature\">Nature:</label>
            <select class=\"form-control\" name=\"nature\" id=\"nature\">
                <option value=\"\">Choix Nature</option>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["natures"]) || array_key_exists("natures", $context) ? $context["natures"] : (function () { throw new RuntimeError('Variable "natures" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nature"]) {
            // line 7
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 7, $this->source); })()), "nature", [], "any", false, false, false, 7) == $context["nature"])) {
                // line 8
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "id", [], "any", false, false, false, 8), "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "designation", [], "any", false, false, false, 8), "html", null, true);
                yield "</option>
                    ";
            } else {
                // line 10
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "id", [], "any", false, false, false, 10), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "designation", [], "any", false, false, false, 10), "html", null, true);
                yield "</option>
                    ";
            }
            // line 12
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            </select>
            <label for=\"coefficient\">Coefficient Epreuve CC : (*)</label>
            <input type=\"float\" class=\"form-control\" name=\"coefficient\" id=\"coefficient\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 15, $this->source); })()), "Coefficient", [], "any", false, false, false, 15), "html", null, true);
        yield "\" />
            <label for=\"coefficient_cc\">Coefficient:</label>
            <select class=\"form-control\" name=\"coefficient_cc\" id=\"coefficient_cc\">
                <option value=\"\">Choix Coefficient Epreuve CC </option>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 20, $this->source); })()), "CoefficientEpreuve", [], "any", false, false, false, 20), "NAT000000001", [], "any", false, false, false, 20) == $context["i"])) {
                // line 21
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                    ";
            } else {
                // line 23
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" >";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                    ";
            }
            // line 25
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            </select>
            <label for=\"coefficient_tp\">Coefficient Epreuve TP: (*)</label>
            <select class=\"form-control\" name=\"coefficient_tp\" id=\"coefficient_tp\">
                <option value=\"\">Choix Coefficient Epreuve TP </option>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 31, $this->source); })()), "CoefficientEpreuve", [], "any", false, false, false, 31), "NAT000000002", [], "any", false, false, false, 31) == $context["i"])) {
                // line 32
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                    ";
            } else {
                // line 34
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" >";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                    ";
            }
            // line 36
            yield "                ";
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
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 42, $this->source); })()), "CoefficientEpreuve", [], "any", false, false, false, 42), "NAT000000003", [], "any", false, false, false, 42) == $context["i"])) {
                // line 43
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                    ";
            } else {
                // line 45
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" >";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                    ";
            }
            // line 47
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "            </select>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"active\" >Active:</label>
                ";
        // line 51
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 51, $this->source); })()), "active", [], "any", false, false, false, 51) == 1)) {
            // line 52
            yield "                    <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked/>
                ";
        } else {
            // line 54
            yield "                    <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
                ";
        }
        // line 56
        yield "            </div>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"cours_document\" >cours_document:</label>
                ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 59, $this->source); })()), "CoursDocument", [], "any", false, false, false, 59) == 1)) {
            // line 60
            yield "                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"cours_document\" id=\"cours_document\" checked/>
                ";
        } else {
            // line 62
            yield "                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"cours_document\" id=\"cours_document\" />
                ";
        }
        // line 64
        yield "            </div>
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parametre/element/pages/modifier.html.twig";
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
        return array (  223 => 64,  219 => 62,  215 => 60,  213 => 59,  208 => 56,  204 => 54,  200 => 52,  198 => 51,  193 => 48,  187 => 47,  179 => 45,  171 => 43,  168 => 42,  164 => 41,  158 => 37,  152 => 36,  144 => 34,  136 => 32,  133 => 31,  129 => 30,  123 => 26,  117 => 25,  109 => 23,  101 => 21,  98 => 20,  94 => 19,  87 => 15,  83 => 13,  77 => 12,  69 => 10,  61 => 8,  58 => 7,  54 => 6,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label for=\"designation\">Désignation:</label>
            <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"{{element.designation}}\"/>
            <label for=\"nature\">Nature:</label>
            <select class=\"form-control\" name=\"nature\" id=\"nature\">
                <option value=\"\">Choix Nature</option>
                {% for nature in natures %}
                    {% if element.nature == nature %}
                        <option value=\"{{nature.id}}\" selected>{{nature.designation}}</option>
                    {% else %}
                        <option value=\"{{nature.id}}\">{{nature.designation}}</option>
                    {% endif %}
                {% endfor %}
            </select>
            <label for=\"coefficient\">Coefficient Epreuve CC : (*)</label>
            <input type=\"float\" class=\"form-control\" name=\"coefficient\" id=\"coefficient\" value=\"{{element.Coefficient}}\" />
            <label for=\"coefficient_cc\">Coefficient:</label>
            <select class=\"form-control\" name=\"coefficient_cc\" id=\"coefficient_cc\">
                <option value=\"\">Choix Coefficient Epreuve CC </option>
                {% for i in 0..20 %}
                    {% if element.CoefficientEpreuve.NAT000000001 == i %}
                        <option value=\"{{ i }}\" selected>{{ i }}</option>
                    {% else %}
                        <option value=\"{{ i }}\" >{{ i }}</option>
                    {% endif %}
                {% endfor %}
            </select>
            <label for=\"coefficient_tp\">Coefficient Epreuve TP: (*)</label>
            <select class=\"form-control\" name=\"coefficient_tp\" id=\"coefficient_tp\">
                <option value=\"\">Choix Coefficient Epreuve TP </option>
                {% for i in 0..20 %}
                    {% if element.CoefficientEpreuve.NAT000000002 == i %}
                        <option value=\"{{ i }}\" selected>{{ i }}</option>
                    {% else %}
                        <option value=\"{{ i }}\" >{{ i }}</option>
                    {% endif %}
                {% endfor %}
            </select>
            <label for=\"coefficient_ef\">Coefficient Epreuve EF (*)</label>
            <select class=\"form-control\" name=\"coefficient_ef\" id=\"coefficient_ef\">
                <option value=\"\">Choix Coefficient Epreuve EF </option>
                {% for i in 0..20 %}
                    {% if element.CoefficientEpreuve.NAT000000003 == i %}
                        <option value=\"{{ i }}\" selected>{{ i }}</option>
                    {% else %}
                        <option value=\"{{ i }}\" >{{ i }}</option>
                    {% endif %}
                {% endfor %}
            </select>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"active\" >Active:</label>
                {% if element.active == 1 %}
                    <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" checked/>
                {% else %}
                    <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"active\" id=\"active\" />
                {% endif %}
            </div>
            <div class=\"d-flex align-items-center mt-2\">
                <label for=\"cours_document\" >cours_document:</label>
                {% if element.CoursDocument == 1 %}
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"cours_document\" id=\"cours_document\" checked/>
                {% else %}
                <input  type=\"checkbox\"  class=\"mb-2 ml-4\" name=\"cours_document\" id=\"cours_document\" />
                {% endif %}
            </div>
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            {# <button type=\"button\" id=\"save_document\" class=\"btn btn-success mt-2\"><i class=\"fas fa-check-circle\"></i> Enregistrer</button> #}", "parametre/element/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\element\\pages\\modifier.html.twig");
    }
}
