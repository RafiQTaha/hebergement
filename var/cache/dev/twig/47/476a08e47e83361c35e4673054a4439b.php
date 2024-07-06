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

/* parametre/semaines/pages/modifier.html.twig */
class __TwigTemplate_17eb78c7c7ef825fa1cce9fc0edf02c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/semaines/pages/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/semaines/pages/modifier.html.twig"));

        // line 1
        yield "<label for=\"designation\">Designation : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" placeholder=\"Designation\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 2, $this->source); })()), "designation", [], "any", false, false, false, 2), "html", null, true);
        yield "\"/>

<label for=\"abreviation\">Abreviation : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"abreviation\" id=\"abreviation\" placeholder=\"Abreviation\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 5, $this->source); })()), "abreviation", [], "any", false, false, false, 5), "html", null, true);
        yield "\" />


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
        return "parametre/semaines/pages/modifier.html.twig";
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
        return array (  53 => 5,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<label for=\"designation\">Designation : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\" placeholder=\"Designation\" value=\"{{salle.designation}}\"/>

<label for=\"abreviation\">Abreviation : (*)</label>
<input type=\"text\" class=\"form-control\" name=\"abreviation\" id=\"abreviation\" placeholder=\"Abreviation\" value=\"{{salle.abreviation}}\" />


<button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
", "parametre/semaines/pages/modifier.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\semaines\\pages\\modifier.html.twig");
    }
}
