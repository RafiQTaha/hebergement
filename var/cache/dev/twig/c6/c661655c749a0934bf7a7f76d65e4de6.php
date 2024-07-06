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

/* inscription/gestion_inscription.html.twig */
class __TwigTemplate_74b5884076a92c603a5c01c55833e084 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/gestion_inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/gestion_inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription/gestion_inscription.html.twig", 1);
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

        yield "Univ - Gestion Inscription";
        
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
          <h1>Gestion Des inscriptions</h1>
          <div class=\"section-header-breadcrumb\">
              ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 13
            yield "              <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "link", [], "any", false, false, false, 13), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "classTag", [], "any", false, false, false, 13), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "idTag", [], "any", false, false, false, 13), "html", null, true);
            yield "\"><i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "icon", [], "any", false, false, false, 13), "html", null, true);
            yield "\"></i>  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "designation", [], "any", false, false, false, 13), "html", null, true);
            yield "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "          </div>
        </div>

        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Tableau des inscriptions</h4>
            </div>
            <div class=\"card-body\">
            <div class=\"card-search\" style=\"margin-bottom: 1.5rem;\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <label for=\"etablissement\">Etablissement:</label>
                        <select class=\"form-control\" name=\"etablissement\" id=\"etablissement\">
                            <option value=\"\">Choix etablissement</option>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etablissements"]) || array_key_exists("etablissements", $context) ? $context["etablissements"] : (function () { throw new RuntimeError('Variable "etablissements" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 31
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "designation", [], "any", false, false, false, 31), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"formation\">Formation:</label>
                        <select class=\"form-control\" name=\"formation\" id=\"formation\">
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"promotion\">Promotion:</label>
                        <select class=\"form-control\" name=\"promotion\" id=\"promotion\">
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"frais\">Annee:</label>
                        <select class=\"form-control\" name=\"annee\" id=\"annee\">
                        </select>
                    </div>
                </div>
            </div>
            <table id=\"datatables_gestion_inscription\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th width=\"1%\">#</th>
                        <th>id</th>
                        <th>C.Ins</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>CNE</th>
                        <th>CIN</th>
                        <th>Etablissement</th>
                        <th>Formation</th>
                        <th>Promotion</th>
                        <th>Année</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>C.Ins</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>CNE</th>
                        <th>CIN</th>
                        <th>Etablissement</th>
                        <th>Formation</th>
                        <th>Promotion</th>
                        <th>Année</th>
                        <th>Statut</th>
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
        // line 99
        yield from         $this->loadTemplate("inscription/modals/statut.html.twig", "inscription/gestion_inscription.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield from         $this->loadTemplate("inscription/modals/frais.html.twig", "inscription/gestion_inscription.html.twig", 100)->unwrap()->yield($context);
        // line 101
        yield from         $this->loadTemplate("inscription/modals/annee_extraction.html.twig", "inscription/gestion_inscription.html.twig", 101)->unwrap()->yield($context);
        // line 102
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 107
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("inscription");
        yield "

";
        // line 110
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
        return "inscription/gestion_inscription.html.twig";
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
        return array (  256 => 110,  251 => 107,  247 => 106,  237 => 105,  225 => 102,  223 => 101,  221 => 100,  219 => 99,  151 => 33,  140 => 31,  136 => 30,  119 => 15,  102 => 13,  98 => 12,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Gestion Inscription{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Gestion Des inscriptions</h1>
          <div class=\"section-header-breadcrumb\">
              {% for operation in operations %}
              <a href=\"{{operation.link}}\" class=\"{{operation.classTag}}\" id=\"{{operation.idTag}}\"><i class=\"{{operation.icon}}\"></i>  {{operation.designation}}</a>
              {% endfor %}
          </div>
        </div>

        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Tableau des inscriptions</h4>
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
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"promotion\">Promotion:</label>
                        <select class=\"form-control\" name=\"promotion\" id=\"promotion\">
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label for=\"frais\">Annee:</label>
                        <select class=\"form-control\" name=\"annee\" id=\"annee\">
                        </select>
                    </div>
                </div>
            </div>
            <table id=\"datatables_gestion_inscription\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th width=\"1%\">#</th>
                        <th>id</th>
                        <th>C.Ins</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>CNE</th>
                        <th>CIN</th>
                        <th>Etablissement</th>
                        <th>Formation</th>
                        <th>Promotion</th>
                        <th>Année</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>C.Ins</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>CNE</th>
                        <th>CIN</th>
                        <th>Etablissement</th>
                        <th>Formation</th>
                        <th>Promotion</th>
                        <th>Année</th>
                        <th>Statut</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
{% include 'inscription/modals/statut.html.twig' %}
{% include 'inscription/modals/frais.html.twig' %}
{% include 'inscription/modals/annee_extraction.html.twig' %}

{% endblock %}

{% block javascripts %}
{{parent()}}
{{ encore_entry_script_tags('inscription') }}

{# <script src=\"/assets/js/inscription/gestioninscription.js\"></script> #}

{% endblock %}

", "inscription/gestion_inscription.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\inscription\\gestion_inscription.html.twig");
    }
}
