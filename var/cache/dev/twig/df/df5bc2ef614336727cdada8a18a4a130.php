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

/* parametre/programmation/pages/modifier.html.twig */
class __TwigTemplate_32711cec5157b51c59ff37e3a0336f97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/programmation/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/programmation/pages/modifier.html.twig"));

        // line 1
        yield "
<label for=\"observation\">Observation:</label>
<input type=\"text\" class=\"form-control\" name=\"observation\" id=\"observation\" placeholder=\"Observation\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmation"]) || array_key_exists("programmation", $context) ? $context["programmation"] : (function () { throw new RuntimeError('Variable "programmation" does not exist.', 3, $this->source); })()), "observation", [], "any", false, false, false, 3), "html", null, true);
        yield "\"/>
<label for=\"volume\">Volume:</label>
<input type=\"text\" class=\"form-control\" name=\"volume\" id=\"volume\" placeholder=\"Volume\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmation"]) || array_key_exists("programmation", $context) ? $context["programmation"] : (function () { throw new RuntimeError('Variable "programmation" does not exist.', 5, $this->source); })()), "volume", [], "any", false, false, false, 5), "html", null, true);
        yield "\"/>
<label for=\"nature\">Nature:</label>
<select class=\"form-control\" name=\"nature\" id=\"nature\">
    <option value=\"\">Choix Nature Epreuve</option>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["natures"]) || array_key_exists("natures", $context) ? $context["natures"] : (function () { throw new RuntimeError('Variable "natures" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nature"]) {
            // line 10
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmation"]) || array_key_exists("programmation", $context) ? $context["programmation"] : (function () { throw new RuntimeError('Variable "programmation" does not exist.', 10, $this->source); })()), "natureEpreuve", [], "any", false, false, false, 10) == $context["nature"])) {
                // line 11
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "id", [], "any", false, false, false, 11), "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "designation", [], "any", false, false, false, 11), "html", null, true);
                yield "</option>
            ";
            } else {
                // line 13
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "id", [], "any", false, false, false, 13), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["nature"], "designation", [], "any", false, false, false, 13), "html", null, true);
                yield "</option>
        ";
            }
            // line 15
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</select>
<label for=\"enseignant\">enseignants:</label>
<select class=\"form-control chosen-select\" name=\"enseignants[]\" id=\"enseignants\" multiple=\"multiple\">
    <option value=\"\" disabled=\"disabled\">Choix Enseignant</option>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 21
            yield "        ";
            if (CoreExtension::inFilter($context["enseignant"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmation"]) || array_key_exists("programmation", $context) ? $context["programmation"] : (function () { throw new RuntimeError('Variable "programmation" does not exist.', 21, $this->source); })()), "Enseignants", [], "any", false, false, false, 21))) {
                // line 22
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 22), "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "nom", [], "any", false, false, false, 22), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "prenom", [], "any", false, false, false, 22), "html", null, true);
                yield "</option>
            ";
            } else {
                // line 24
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 24), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "nom", [], "any", false, false, false, 24), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "prenom", [], "any", false, false, false, 24), "html", null, true);
                yield "</option>
        ";
            }
            // line 26
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "</select>
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
        return "parametre/programmation/pages/modifier.html.twig";
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
        return array (  128 => 27,  122 => 26,  112 => 24,  102 => 22,  99 => 21,  95 => 20,  89 => 16,  83 => 15,  75 => 13,  67 => 11,  64 => 10,  60 => 9,  53 => 5,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<label for=\"observation\">Observation:</label>
<input type=\"text\" class=\"form-control\" name=\"observation\" id=\"observation\" placeholder=\"Observation\" value=\"{{programmation.observation}}\"/>
<label for=\"volume\">Volume:</label>
<input type=\"text\" class=\"form-control\" name=\"volume\" id=\"volume\" placeholder=\"Volume\" value=\"{{programmation.volume}}\"/>
<label for=\"nature\">Nature:</label>
<select class=\"form-control\" name=\"nature\" id=\"nature\">
    <option value=\"\">Choix Nature Epreuve</option>
    {% for nature in natures %}
        {% if programmation.natureEpreuve == nature %}
            <option value=\"{{nature.id}}\" selected>{{nature.designation}}</option>
            {% else %}
            <option value=\"{{nature.id}}\">{{nature.designation}}</option>
        {% endif %}
    {% endfor %}
</select>
<label for=\"enseignant\">enseignants:</label>
<select class=\"form-control chosen-select\" name=\"enseignants[]\" id=\"enseignants\" multiple=\"multiple\">
    <option value=\"\" disabled=\"disabled\">Choix Enseignant</option>
    {% for enseignant in enseignants %}
        {% if enseignant in programmation.Enseignants %}
            <option value=\"{{enseignant.id}}\" selected>{{enseignant.nom}} {{enseignant.prenom}}</option>
            {% else %}
            <option value=\"{{enseignant.id}}\">{{enseignant.nom}} {{enseignant.prenom}}</option>
        {% endif %}
    {% endfor %}
</select>
<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            ", "parametre/programmation/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\programmation\\pages\\modifier.html.twig");
    }
}
