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

/* facture/gestion_facture.html.twig */
class __TwigTemplate_be367378d33eaf606adac3c01c10ad09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/gestion_facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/gestion_facture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/gestion_facture.html.twig", 1);
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

        yield "Univ - Gestions Factures";
        
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
          <h1>Gestions Des Factures</h1>
          <div class=\"section-header-breadcrumb\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 13
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "designation", [], "any", false, false, false, 13) == "Ajouter")) {
                // line 14
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "link", [], "any", false, false, false, 14), "html", null, true);
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "classTag", [], "any", false, false, false, 14), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "idTag", [], "any", false, false, false, 14), "html", null, true);
                yield "\" disabled><i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "icon", [], "any", false, false, false, 14), "html", null, true);
                yield "\"></i>  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "designation", [], "any", false, false, false, 14), "html", null, true);
                yield "</a>
                  ";
            } else {
                // line 16
                yield "                    <a href=\"";
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
            // line 18
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "          </div>
        </div>
        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4>Tableau des Factures</h4>
            </div>
            <div class=\"card-body\">
                <div class=\"card-search\" style=\"margin-bottom: 1.5rem;\">
                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            <label for=\"etablissement\">Etablissement:</label>
                            <select class=\"form-control\" name=\"etablissement\" id=\"etablissement\">
                                <option value=\"\">Choix Etablissement</option>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etablissements"]) || array_key_exists("etablissements", $context) ? $context["etablissements"] : (function () { throw new RuntimeError('Variable "etablissements" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 34
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "designation", [], "any", false, false, false, 34), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield " 
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label for=\"formation\">Formation:</label>
                            <select class=\"form-control\" name=\"formation\" id=\"formation\">
                                <option value=\"\">Choix Formation</option>
                            </select>
                        </div>
                        ";
        // line 64
        yield "                    </div>
                </div>
            <table id=\"datables_facture\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>Ord</th>
                        <th>Code</th>
                        <th>Code Pré-inscription</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Etablissement</th>
                        ";
        // line 77
        yield "                        <th>Statut</th>
                        ";
        // line 79
        yield "                        <th>Nationalite</th>
                        <th>Source</th>
                        <th>M-Facture</th>
                        <th>M-Régle</th>
                        <th>Diff</th>
                        <th>Org</th>
                        <th>Active</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Ord</th>
                        <th>Code</th>
                        <th>Code Pré-inscription</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Etablissement</th>
                        ";
        // line 101
        yield "                        <th>Statut</th>
                        ";
        // line 103
        yield "                        <th>Nationalite</th>
                        <th>Source</th>
                        <th>M-Facture</th>
                        <th>M-Régle</th>
                        <th>Diff</th>
                        <th>Org</th>
                        <th>Active</th>
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
        // line 123
        yield from         $this->loadTemplate("facture/modals/add_reglement_facture.html.twig", "facture/gestion_facture.html.twig", 123)->unwrap()->yield($context);
        // line 124
        yield from         $this->loadTemplate("facture/modals/facture_masse.html.twig", "facture/gestion_facture.html.twig", 124)->unwrap()->yield($context);
        // line 125
        yield from         $this->loadTemplate("facture/modals/modifier_organisme.html.twig", "facture/gestion_facture.html.twig", 125)->unwrap()->yield($context);
        // line 126
        yield from         $this->loadTemplate("facture/modals/detail_facture.html.twig", "facture/gestion_facture.html.twig", 126)->unwrap()->yield($context);
        // line 127
        yield from         $this->loadTemplate("facture/modals/annee_extraction_frais.html.twig", "facture/gestion_facture.html.twig", 127)->unwrap()->yield($context);
        // line 128
        yield from         $this->loadTemplate("facture/modals/pec.html.twig", "facture/gestion_facture.html.twig", 128)->unwrap()->yield($context);
        // line 129
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 135
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("facture");
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
        return "facture/gestion_facture.html.twig";
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
        return array (  284 => 135,  280 => 133,  270 => 132,  258 => 129,  256 => 128,  254 => 127,  252 => 126,  250 => 125,  248 => 124,  246 => 123,  224 => 103,  221 => 101,  198 => 79,  195 => 77,  181 => 64,  170 => 35,  159 => 34,  155 => 33,  139 => 19,  133 => 18,  119 => 16,  105 => 14,  102 => 13,  98 => 12,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Gestions Factures{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Gestions Des Factures</h1>
          <div class=\"section-header-breadcrumb\">
            {% for operation in operations %}
                {% if operation.designation == 'Ajouter' %}
                    <a href=\"{{operation.link}}\" class=\"{{operation.classTag}}\" id=\"{{operation.idTag}}\" disabled><i class=\"{{operation.icon}}\"></i>  {{operation.designation}}</a>
                  {% else %}
                    <a href=\"{{operation.link}}\" class=\"{{operation.classTag}}\" id=\"{{operation.idTag}}\"><i class=\"{{operation.icon}}\"></i>  {{operation.designation}}</a>
                {% endif %}
            {% endfor %}
          </div>
        </div>
        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4>Tableau des Factures</h4>
            </div>
            <div class=\"card-body\">
                <div class=\"card-search\" style=\"margin-bottom: 1.5rem;\">
                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            <label for=\"etablissement\">Etablissement:</label>
                            <select class=\"form-control\" name=\"etablissement\" id=\"etablissement\">
                                <option value=\"\">Choix Etablissement</option>
                                {% for etablissement in etablissements %}
                                    <option value=\"{{etablissement.id}}\">{{etablissement.designation}}</option>
                                {% endfor %} 
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label for=\"formation\">Formation:</label>
                            <select class=\"form-control\" name=\"formation\" id=\"formation\">
                                <option value=\"\">Choix Formation</option>
                            </select>
                        </div>
                        {# {% if reglements|length > 0 %}
                            <div class=\"col-md-2\">
                                <label for=\"reglement\">Reglement:</label>
                                <select class=\"form-control\" name=\"reglement\" id=\"reglement\">
                                    <option value=\"\">Choix Reglement</option>
                                    <option value=\"SD\">Soldée</option>
                                    <option value=\"SE\">Sur Ens</option>
                                    <option value=\"SON\">Sous Ens</option>
                                </select>
                            </div>
                        {% endif %}
                        <div class=\"col-md-2\">
                            <label for=\"organisme\">Organisme:</label>
                            <select class=\"form-control\" name=\"organisme\" id=\"organisme\">
                                <option value=\"\">Choix Organisme</option>
                                {% for organisme in organismes %}
                                    <option value=\"{{organisme.id}}\">{{organisme.designation}}</option>
                                {% endfor %} 
                            </select>
                        </div> #}
                    </div>
                </div>
            <table id=\"datables_facture\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>Ord</th>
                        <th>Code</th>
                        <th>Code Pré-inscription</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Etablissement</th>
                        {# <th>Formation</th> #}
                        <th>Statut</th>
                        {# <th>Catégorie</th> #}
                        <th>Nationalite</th>
                        <th>Source</th>
                        <th>M-Facture</th>
                        <th>M-Régle</th>
                        <th>Diff</th>
                        <th>Org</th>
                        <th>Active</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Ord</th>
                        <th>Code</th>
                        <th>Code Pré-inscription</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Etablissement</th>
                        {# <th>Formation</th> #}
                        <th>Statut</th>
                        {# <th>Catégorie</th> #}
                        <th>Nationalite</th>
                        <th>Source</th>
                        <th>M-Facture</th>
                        <th>M-Régle</th>
                        <th>Diff</th>
                        <th>Org</th>
                        <th>Active</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
{% include 'facture/modals/add_reglement_facture.html.twig' %}
{% include 'facture/modals/facture_masse.html.twig' %}
{% include 'facture/modals/modifier_organisme.html.twig' %}
{% include 'facture/modals/detail_facture.html.twig' %}
{% include 'facture/modals/annee_extraction_frais.html.twig' %}
{% include 'facture/modals/pec.html.twig' %}

{% endblock %}

{% block javascripts %}
{{parent()}}
{# <script src=\"/assets/js/facture/facture.js\"></script> #}
{{ encore_entry_script_tags('facture') }}

{% endblock %}

", "facture/gestion_facture.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\gestion_facture.html.twig");
    }
}
