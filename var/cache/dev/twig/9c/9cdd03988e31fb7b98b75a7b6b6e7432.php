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

/* parametre/chambre/index.html.twig */
class __TwigTemplate_0d297a42cd15178e3c20e4386cb8da43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/chambre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/chambre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parametre/chambre/index.html.twig", 1);
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

        yield "Univ - Paramétre - Chambres";
        
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
          <h1>Chambre</h1>
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
            <div class=\"card-header\">
            <h4>Tableau des chambres</h4>
            </div>
            <div class=\"card-body\">
            <div class=\"card-search\" style=\"margin-bottom: 1.5rem;\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <label for=\"departement\">Département:</label>
                        <select class=\"form-control\" name=\"departement\" id=\"departement\">
                            <option value=\"\">Choix département</option>
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["departements"]) || array_key_exists("departements", $context) ? $context["departements"] : (function () { throw new RuntimeError('Variable "departements" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 34
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["departement"], "designation", [], "any", false, false, false, 34), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"etage\">Etage:</label>
                        <select class=\"form-control\" name=\"etage\" id=\"etage\">
                           
                        </select>
                    </div>
                </div>
            </div>
            
            <table id=\"datatables_gestion_chambre\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Département</th>
                        <th>Etage</th>
                        <th>Type Chambre</th>
                        <th>Statut</th>
                        <th>N° Chambre</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Département</th>
                        <th>Etage</th>
                        <th>Type Chambre</th>
                        <th>Statut</th>
                        <th>N° Chambre</th>
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
        // line 84
        yield from         $this->loadTemplate("parametre/chambre/modals/ajouter.html.twig", "parametre/chambre/index.html.twig", 84)->unwrap()->yield(CoreExtension::merge($context, ["typechambres" => (isset($context["typechambres"]) || array_key_exists("typechambres", $context) ? $context["typechambres"] : (function () { throw new RuntimeError('Variable "typechambres" does not exist.', 84, $this->source); })()), "statutchambres" => (isset($context["statutchambres"]) || array_key_exists("statutchambres", $context) ? $context["statutchambres"] : (function () { throw new RuntimeError('Variable "statutchambres" does not exist.', 84, $this->source); })())]));
        // line 85
        yield from         $this->loadTemplate("parametre/chambre/modals/modifier.html.twig", "parametre/chambre/index.html.twig", 85)->unwrap()->yield(CoreExtension::merge($context, ["typechambres" => (isset($context["typechambres"]) || array_key_exists("typechambres", $context) ? $context["typechambres"] : (function () { throw new RuntimeError('Variable "typechambres" does not exist.', 85, $this->source); })()), "statutchambres" => (isset($context["statutchambres"]) || array_key_exists("statutchambres", $context) ? $context["statutchambres"] : (function () { throw new RuntimeError('Variable "statutchambres" does not exist.', 85, $this->source); })())]));
        // line 86
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 91
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chambre");
        yield "

";
        // line 94
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
        return "parametre/chambre/index.html.twig";
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
        return array (  239 => 94,  234 => 91,  230 => 90,  220 => 89,  208 => 86,  206 => 85,  204 => 84,  154 => 36,  143 => 34,  139 => 33,  122 => 18,  105 => 16,  100 => 15,  98 => 14,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Paramétre - Chambres{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Chambre</h1>
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
            <h4>Tableau des chambres</h4>
            </div>
            <div class=\"card-body\">
            <div class=\"card-search\" style=\"margin-bottom: 1.5rem;\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <label for=\"departement\">Département:</label>
                        <select class=\"form-control\" name=\"departement\" id=\"departement\">
                            <option value=\"\">Choix département</option>
                            {% for departement in departements %}
                                <option value=\"{{departement.id}}\">{{departement.designation}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"etage\">Etage:</label>
                        <select class=\"form-control\" name=\"etage\" id=\"etage\">
                           
                        </select>
                    </div>
                </div>
            </div>
            
            <table id=\"datatables_gestion_chambre\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Département</th>
                        <th>Etage</th>
                        <th>Type Chambre</th>
                        <th>Statut</th>
                        <th>N° Chambre</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Département</th>
                        <th>Etage</th>
                        <th>Type Chambre</th>
                        <th>Statut</th>
                        <th>N° Chambre</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
{% include 'parametre/chambre/modals/ajouter.html.twig' with {'typechambres': typechambres,'statutchambres':statutchambres} %}
{% include 'parametre/chambre/modals/modifier.html.twig'  with {'typechambres': typechambres,'statutchambres':statutchambres} %}

{% endblock %}

{% block javascripts %}
{{parent()}}
{{ encore_entry_script_tags('chambre') }}

{# <script src=\"/assets/js/parametre/etage.js\"></script> #}

{% endblock %}

", "parametre/chambre/index.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\chambre\\index.html.twig");
    }
}
