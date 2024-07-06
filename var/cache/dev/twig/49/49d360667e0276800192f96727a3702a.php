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

/* parametre/salles/index.html.twig */
class __TwigTemplate_70583596e6fd9d42184fb4b19705690b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/salles/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/salles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parametre/salles/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Univ - Paramétre - Salles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Salles</h1>
          <div class=\"section-header-breadcrumb\">
              ";
        // line 14
        yield "              ";
        // line 15
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 16
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "link", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "classTag", [], "any", false, false, false, 16), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "idTag", [], "any", false, false, false, 16), "html", null, true);
            yield "\"><i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "icon", [], "any", false, false, false, 16), "html", null, true);
            yield "\"></i>  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "designation", [], "any", false, false, false, 16), "html", null, true);
            yield "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "          </div>
        </div>

        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Tableau des salles</h4>
            </div>
            <div class=\"card-body\">
            
            <table id=\"datatables_gestion_salles\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CODE</th>
                        <th>DESIGNATION</th>
                        <th>ABREVIATION</th>
                        <th>AFFICHAGE</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>CODE</th>
                        <th>DESIGNATION</th>
                        <th>ABREVIATION</th>
                        <th>AFFICHAGE</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
";
        // line 61
        yield from         $this->loadTemplate("parametre/salles/modals/ajouter.html.twig", "parametre/salles/index.html.twig", 61)->unwrap()->yield($context);
        // line 62
        yield from         $this->loadTemplate("parametre/salles/modals/modifier.html.twig", "parametre/salles/index.html.twig", 62)->unwrap()->yield($context);
        // line 63
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 68
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("salles");
        yield "

";
        // line 71
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parametre/salles/index.html.twig";
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
        return array (  202 => 71,  197 => 68,  193 => 67,  183 => 66,  171 => 63,  169 => 62,  167 => 61,  122 => 18,  105 => 16,  100 => 15,  98 => 14,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Paramétre - Salles{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Salles</h1>
          <div class=\"section-header-breadcrumb\">
              {# <a href=\"#\" class=\"btn btn-success ml-1\" id=\"modifier\"><i class=\"fas fa-edit\"></i>  Modifier</a>
              <a href=\"#\" class=\"btn btn-success ml-1\" id=\"ajouter\"><i class=\"fas fa-plus\"></i>  Aouter</a> #}
              {# <a href=\"#\" class=\"btn btn-success ml-1\" id=\"ajouter\"><i class=\"fas fa-plus\"></i>  Aouter</a> #}
              {% for operation in operations %}
                <a href=\"{{operation.link}}\" class=\"{{operation.classTag}}\" id=\"{{operation.idTag}}\"><i class=\"{{operation.icon}}\"></i>  {{operation.designation}}</a>
              {% endfor %}
          </div>
        </div>

        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Tableau des salles</h4>
            </div>
            <div class=\"card-body\">
            
            <table id=\"datatables_gestion_salles\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CODE</th>
                        <th>DESIGNATION</th>
                        <th>ABREVIATION</th>
                        <th>AFFICHAGE</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>CODE</th>
                        <th>DESIGNATION</th>
                        <th>ABREVIATION</th>
                        <th>AFFICHAGE</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
{% include 'parametre/salles/modals/ajouter.html.twig' %}
{% include 'parametre/salles/modals/modifier.html.twig' %}

{% endblock %}

{% block javascripts %}
{{parent()}}
{{ encore_entry_script_tags('salles') }}

{# <script src=\"/assets/js/parametre/enseignant.js\"></script> #}

{% endblock %}

", "parametre/salles/index.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\salles\\index.html.twig");
    }
}
