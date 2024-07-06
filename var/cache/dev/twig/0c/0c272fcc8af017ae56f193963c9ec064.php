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

/* parametre/enseignant/pages/modifier.html.twig */
class __TwigTemplate_718b53d8f6b9add87061b4781a47fd24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/enseignant/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/enseignant/pages/modifier.html.twig"));

        // line 1
        yield "<label for=\"nom\">Nom : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Nom d'enseignant\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        yield "\"/>

<label for=\"prenom\">Prénom : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom  d'enseignant\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 5, $this->source); })()), "prenom", [], "any", false, false, false, 5), "html", null, true);
        yield "\" />

<label for=\"grade\">Grade : (*)</label>
<select class=\"form-control\" name=\"grade\" id=\"grade\">
    <option value=\"\">Choix Grade </option>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["grades"]) || array_key_exists("grades", $context) ? $context["grades"] : (function () { throw new RuntimeError('Variable "grades" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 11
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 11, $this->source); })()), "grade", [], "any", false, false, false, 11) == $context["grade"])) {
                // line 12
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["grade"], "id", [], "any", false, false, false, 12), "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["grade"], "designation", [], "any", false, false, false, 12), "html", null, true);
                yield "</option>
            ";
            } else {
                // line 14
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["grade"], "id", [], "any", false, false, false, 14), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["grade"], "designation", [], "any", false, false, false, 14), "html", null, true);
                yield "</option>
        ";
            }
            // line 16
            yield "        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "</select>
        
<label for=\"cin\">CIN : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"cin\" id=\"cin\" placeholder=\"Cin  d'enseignant\"  value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 21, $this->source); })()), "cin", [], "any", false, false, false, 21), "html", null, true);
        yield "\" />

<label for=\"rib\">Rib : (*)</label>
<div class=\"rib d-flex align-items-center\">
    <input type=\"text\" class=\"form-control\" name=\"rib\" id=\"rib\" placeholder=\"Rib  d'enseignant\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 25, $this->source); })()), "rib", [], "any", false, false, false, 25), "html", null, true);
        yield "\" maxlength=\"24\" />
    <span class=\"rib_icon\"><i class=\"fas fa-check-circle\"></i></span>
</div>

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
        return "parametre/enseignant/pages/modifier.html.twig";
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
        return array (  103 => 25,  96 => 21,  91 => 18,  84 => 16,  76 => 14,  68 => 12,  65 => 11,  61 => 10,  53 => 5,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label for=\"nom\">Nom : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Nom d'enseignant\" value=\"{{enseignant.nom}}\"/>

<label for=\"prenom\">Prénom : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom  d'enseignant\" value=\"{{enseignant.prenom}}\" />

<label for=\"grade\">Grade : (*)</label>
<select class=\"form-control\" name=\"grade\" id=\"grade\">
    <option value=\"\">Choix Grade </option>
    {% for grade in grades %}
        {% if enseignant.grade == grade %}
            <option value=\"{{ grade.id }}\" selected>{{ grade.designation }}</option>
            {% else %}
            <option value=\"{{ grade.id }}\">{{ grade.designation }}</option>
        {% endif %}
        
    {% endfor %}
</select>
        
<label for=\"cin\">CIN : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"cin\" id=\"cin\" placeholder=\"Cin  d'enseignant\"  value=\"{{enseignant.cin}}\" />

<label for=\"rib\">Rib : (*)</label>
<div class=\"rib d-flex align-items-center\">
    <input type=\"text\" class=\"form-control\" name=\"rib\" id=\"rib\" placeholder=\"Rib  d'enseignant\" value=\"{{enseignant.rib}}\" maxlength=\"24\" />
    <span class=\"rib_icon\"><i class=\"fas fa-check-circle\"></i></span>
</div>

<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
", "parametre/enseignant/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\enseignant\\pages\\modifier.html.twig");
    }
}
