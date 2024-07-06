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

/* parametre/programmation/index.html.twig */
class __TwigTemplate_db1cb427c60bfba4d65ccd31bee619a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/programmation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/programmation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parametre/programmation/index.html.twig", 1);
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

        yield "Univ - Paramétre - Programmation";
        
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
          <h1>Programmation</h1>
          <div class=\"section-header-breadcrumb\">
              ";
        // line 13
        yield "              ";
        // line 14
        yield "              ";
        // line 15
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 16
            yield "              <a href=\"";
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
            <div class=\"card-header justify-content-between\">
            <h4>Tableau des Programmations</h4>
            <h4 id=\"a-ouverte\" style=\"color:green\"></h4>
            </div>
            <div class=\"card-body\">
            <div class=\"card-search\" style=\"margin-bottom: 1.5rem;\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <label for=\"etablissement\">Etablissement:</label>
                        <select class=\"form-control\" name=\"etablissement\" id=\"etablissement\">
                            <option value=\"\">Choix etablissement</option>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etablissements"]) || array_key_exists("etablissements", $context) ? $context["etablissements"] : (function () { throw new RuntimeError('Variable "etablissements" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 35
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "designation", [], "any", false, false, false, 35), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"formation\">Formation:</label>
                        <select class=\"form-control\" name=\"formation\" id=\"formation\">
                            <option value=\"\">Choix formation</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"annee\">Annee:</label>
                        <select class=\"form-control\" name=\"annee\" id=\"annee\">
                            <option value=\"\">Choix Annee</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"promotion\">Promotion:</label>
                        <select class=\"form-control\" name=\"promotion\" id=\"promotion\">
                            <option value=\"\">Choix Promotion</option>
                           
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"semestre\">Semestre:</label>
                        <select class=\"form-control\" name=\"semestre\" id=\"semestre\">
                            <option value=\"\">Choix Semestre</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"module\">Module:</label>
                        <select class=\"form-control\" name=\"module\" id=\"module\">
                            <option value=\"\">Choix Module</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"module\">Element:</label>
                        <select class=\"form-control\" name=\"element\" id=\"element\">
                            <option value=\"\">Choix Element</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <table id=\"datatables_gestion_programmation\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>etab</th>
                        <th>form</th>
                        <th>Annee</th>
                        <th>Promotion</th>
                        <th>Semestre</th>
                        <th>Module</th>
                        <th>Element</th>
                        <th>Nature</th>
                        <th>Volume</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>etab</th>
                        <th>form</th>
                        <th>Annee</th>
                        <th>Promotion</th>
                        <th>Semestre</th>
                        <th>Module</th>
                        <th>Element</th>
                        <th>Nature</th>
                        <th>Volume</th>
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
        // line 122
        yield from         $this->loadTemplate("parametre/programmation/modals/ajouter.html.twig", "parametre/programmation/index.html.twig", 122)->unwrap()->yield($context);
        // line 123
        yield from         $this->loadTemplate("parametre/programmation/modals/modifier.html.twig", "parametre/programmation/index.html.twig", 123)->unwrap()->yield($context);
        // line 124
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 129
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("programmation");
        yield "

";
        // line 132
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
        return "parametre/programmation/index.html.twig";
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
        return array (  279 => 132,  274 => 129,  270 => 128,  260 => 127,  248 => 124,  246 => 123,  244 => 122,  157 => 37,  146 => 35,  142 => 34,  124 => 18,  107 => 16,  102 => 15,  100 => 14,  98 => 13,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Paramétre - Programmation{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Programmation</h1>
          <div class=\"section-header-breadcrumb\">
              {# <a href=\"#\" class=\"btn btn-success ml-1\" id=\"modifier\"><i class=\"fas fa-edit\"></i>  Modifier</a> #}
              {# <a href=\"#\" class=\"btn btn-success ml-1\" id=\"ajouter\"><i class=\"fas fa-plus\"></i>  Ajouter</a> #}
              {# <a href=\"#\" class=\"btn btn-success ml-1\" id=\"ajouter\"><i class=\"fas fa-plus\"></i>  Aouter</a> #}
              {% for operation in operations %}
              <a href=\"{{operation.link}}\" class=\"{{operation.classTag}}\" id=\"{{operation.idTag}}\"><i class=\"{{operation.icon}}\"></i>  {{operation.designation}}</a>
              {% endfor %}
          </div>
        </div>

        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header justify-content-between\">
            <h4>Tableau des Programmations</h4>
            <h4 id=\"a-ouverte\" style=\"color:green\"></h4>
            </div>
            <div class=\"card-body\">
            <div class=\"card-search\" style=\"margin-bottom: 1.5rem;\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <label for=\"etablissement\">Etablissement:</label>
                        <select class=\"form-control\" name=\"etablissement\" id=\"etablissement\">
                            <option value=\"\">Choix etablissement</option>
                            {% for etablissement in etablissements %}
                                <option value=\"{{etablissement.id}}\">{{etablissement.designation}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"formation\">Formation:</label>
                        <select class=\"form-control\" name=\"formation\" id=\"formation\">
                            <option value=\"\">Choix formation</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"annee\">Annee:</label>
                        <select class=\"form-control\" name=\"annee\" id=\"annee\">
                            <option value=\"\">Choix Annee</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"promotion\">Promotion:</label>
                        <select class=\"form-control\" name=\"promotion\" id=\"promotion\">
                            <option value=\"\">Choix Promotion</option>
                           
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"semestre\">Semestre:</label>
                        <select class=\"form-control\" name=\"semestre\" id=\"semestre\">
                            <option value=\"\">Choix Semestre</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"module\">Module:</label>
                        <select class=\"form-control\" name=\"module\" id=\"module\">
                            <option value=\"\">Choix Module</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"module\">Element:</label>
                        <select class=\"form-control\" name=\"element\" id=\"element\">
                            <option value=\"\">Choix Element</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <table id=\"datatables_gestion_programmation\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>etab</th>
                        <th>form</th>
                        <th>Annee</th>
                        <th>Promotion</th>
                        <th>Semestre</th>
                        <th>Module</th>
                        <th>Element</th>
                        <th>Nature</th>
                        <th>Volume</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>etab</th>
                        <th>form</th>
                        <th>Annee</th>
                        <th>Promotion</th>
                        <th>Semestre</th>
                        <th>Module</th>
                        <th>Element</th>
                        <th>Nature</th>
                        <th>Volume</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
{% include 'parametre/programmation/modals/ajouter.html.twig' %}
{% include 'parametre/programmation/modals/modifier.html.twig' %}

{% endblock %}

{% block javascripts %}
{{parent()}}
{{ encore_entry_script_tags('programmation') }}

{# <script src=\"/assets/js/parametre/formation.js\"></script> #}

{% endblock %}

", "parametre/programmation/index.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\programmation\\index.html.twig");
    }
}
