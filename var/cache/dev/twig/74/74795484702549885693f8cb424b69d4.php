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

/* parametre/seriebac/pages/modifier.html.twig */
class __TwigTemplate_02ab1608bd9715666c67ea0f8107a459 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/seriebac/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/seriebac/pages/modifier.html.twig"));

        // line 1
        yield "<label for=\"designation\">Désignation:</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 2, $this->source); })()), "designation", [], "any", false, false, false, 2), "html", null, true);
        yield "\" />

<label for=\"categorie\">Categorie:</label>
<select class=\"form-control\" name=\"categorie\" id=\"categorie\">
    <option value=\"\" selected>Choix Categorie </option>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 8
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 8, $this->source); })()), "categorie", [], "any", false, false, false, 8) == $context["categorie"])) {
                // line 9
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
                yield "</option>
        ";
            } else {
                // line 11
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
                yield "</option>                    
        ";
            }
            // line 13
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "</select>

<label for=\"montant\">montant:</label>
<input  type=\"number\" step=\"0.01\" min=\"0\" class=\"form-control\" name=\"montant\" id=\"montant\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 17, $this->source); })()), "montant", [], "any", false, false, false, 17), "html", null, true);
        yield "\" />

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
        return "parametre/seriebac/pages/modifier.html.twig";
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
        return array (  89 => 17,  84 => 14,  78 => 13,  70 => 11,  62 => 9,  59 => 8,  55 => 7,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label for=\"designation\">Désignation:</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" value=\"{{frais.designation}}\" />

<label for=\"categorie\">Categorie:</label>
<select class=\"form-control\" name=\"categorie\" id=\"categorie\">
    <option value=\"\" selected>Choix Categorie </option>
    {% for categorie in categories %}
        {% if frais.categorie == categorie %}
        <option value=\"{{ categorie }}\" selected>{{ categorie }}</option>
        {% else %}
        <option value=\"{{ categorie }}\">{{ categorie }}</option>                    
        {% endif %}
    {% endfor %}
</select>

<label for=\"montant\">montant:</label>
<input  type=\"number\" step=\"0.01\" min=\"0\" class=\"form-control\" name=\"montant\" id=\"montant\" value=\"{{frais.montant}}\" />

<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>", "parametre/seriebac/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\seriebac\\pages\\modifier.html.twig");
    }
}
