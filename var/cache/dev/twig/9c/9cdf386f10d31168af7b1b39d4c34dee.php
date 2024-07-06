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

/* facture/pages/pec.html.twig */
class __TwigTemplate_559eacbf24ba010e11ae6a8d5c8fd061 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pages/pec.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pages/pec.html.twig"));

        // line 1
        yield "<div class=\"pec\">
    <label for=\"pec\">Pec:</label>
    <select class=\"form-control\" name=\"pec\" id=\"pec\">
        <option value=\"\" selected disabled>Choix De Pec</option>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pecs"]) || array_key_exists("pecs", $context) ? $context["pecs"] : (function () { throw new RuntimeError('Variable "pecs" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pec"]) {
            // line 6
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 6, $this->source); })()), "pec", [], "any", false, false, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 6, $this->source); })()), "pec", [], "any", false, false, false, 6) == $context["pec"]))) {
                // line 7
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pec"], "id", [], "any", false, false, false, 7), "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pec"], "designation", [], "any", false, false, false, 7), "html", null, true);
                yield "</option>
                ";
            } else {
                // line 9
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pec"], "id", [], "any", false, false, false, 9), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pec"], "designation", [], "any", false, false, false, 9), "html", null, true);
                yield "</option>
            ";
            }
            // line 11
            yield "            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "    </select>
</div>
    
<div class=\"n-pec\">
    <label for=\"n-pec\">Numero de Pec:</label>
    <input type=\"text\" class=\"form-control\" name=\"n-pec\" id=\"n-pec\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 18, $this->source); })()), "npec", [], "any", false, false, false, 18), "html", null, true);
        yield "\" placeholder=\"Numero de Pec\"/>
</div>
";
        // line 21
        yield "    <div class=\"d-flex mt-5\">
        <button type=\"submit\" class=\"btn btn-success ml-auto\" id=\"enregistrer\"> <i class=\"fas fa-check-circle\"></i>  Enregistrer</button>
    </div>
";
        // line 25
        yield "    
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
        return "facture/pages/pec.html.twig";
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
        return array (  97 => 25,  92 => 21,  87 => 18,  80 => 13,  73 => 11,  65 => 9,  57 => 7,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pec\">
    <label for=\"pec\">Pec:</label>
    <select class=\"form-control\" name=\"pec\" id=\"pec\">
        <option value=\"\" selected disabled>Choix De Pec</option>
        {% for pec in pecs %}
            {% if facture.pec and facture.pec == pec %}
                <option value=\"{{pec.id}}\" selected>{{pec.designation}}</option>
                {% else %}
                <option value=\"{{pec.id}}\">{{pec.designation}}</option>
            {% endif %}
            
        {% endfor %}
    </select>
</div>
    
<div class=\"n-pec\">
    <label for=\"n-pec\">Numero de Pec:</label>
    <input type=\"text\" class=\"form-control\" name=\"n-pec\" id=\"n-pec\" value=\"{{facture.npec}}\" placeholder=\"Numero de Pec\"/>
</div>
{# {% if facture.pec == null %} #}
    <div class=\"d-flex mt-5\">
        <button type=\"submit\" class=\"btn btn-success ml-auto\" id=\"enregistrer\"> <i class=\"fas fa-check-circle\"></i>  Enregistrer</button>
    </div>
{# {% endif %} #}
    
", "facture/pages/pec.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pages\\pec.html.twig");
    }
}
