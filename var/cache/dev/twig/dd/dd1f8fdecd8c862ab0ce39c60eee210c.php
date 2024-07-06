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

/* facture/gestion_reglement.html.twig */
class __TwigTemplate_1360857635fce249b285e2f357bd9e17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/gestion_reglement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/gestion_reglement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/gestion_reglement.html.twig", 1);
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

        yield "Univ - Gestions Reglements";
        
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
          <h1>Gestions Des Reglements</h1>
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
                <h4>Tableau des Reglements</h4>
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
                        <div class=\"col-md-2\">
                            <label for=\"paiement\">Mode de Paiement:</label>
                            <select class=\"form-control\" name=\"paiement\" id=\"paiement\">
                                <option value=\"\">Choix Mode de Paiement</option>
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new RuntimeError('Variable "paiements" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 49
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "designation", [], "any", false, false, false, 49), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield " 
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label for=\"bordereaux\">Bordereaux:</label>
                            <select class=\"form-control\" name=\"bordereaux\" id=\"bordereaux\">
                                <option value=\"\">Choix bordereaux</option>
                                <option value=\"oui\">Avec bordereau</option>
                                <option value=\"non\">Sans bordereau</option>
                            </select>
                        </div>
                    </div>
                </div>
            <table id=\"datables_reglement\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>Ord</th>
                        <th>#</th>
                        <th>Code Pré-inscription</th>
                        <th>Code Facture</th>
                        <th>Code Reglement</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Formation</th>
                        <th>Montant</th>
                        <th>Reference</th>
                        <th>Date Reglement</th>
                        <th>Mode Paiement</th>
                        <th>Banque</th>
                        <th>Num Brd</th>
                        <th>A-Motif</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Ord</th>
                        <th>#</th>
                        <th>Code Pré-inscription</th>
                        <th>Code Facture</th>
                        <th>Code Reglement</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Formation</th>
                        <th>Montant</th>
                        <th>Reference</th>
                        <th>Date Reglement</th>
                        <th>Mode Paiement</th>
                        <th>Banque</th>
                        <th>Num Brd</th>
                        <th>A-Motif</th>
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
        // line 118
        yield from         $this->loadTemplate("facture/modals/edit_reglement.html.twig", "facture/gestion_reglement.html.twig", 118)->unwrap()->yield($context);
        // line 119
        yield from         $this->loadTemplate("facture/modals/annuler_reglement.html.twig", "facture/gestion_reglement.html.twig", 119)->unwrap()->yield($context);
        // line 121
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 124
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 127
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("reglement");
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
        return "facture/gestion_reglement.html.twig";
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
        return array (  300 => 127,  296 => 125,  286 => 124,  274 => 121,  272 => 119,  270 => 118,  200 => 50,  189 => 49,  185 => 48,  170 => 35,  159 => 34,  155 => 33,  139 => 19,  133 => 18,  119 => 16,  105 => 14,  102 => 13,  98 => 12,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Gestions Reglements{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Gestions Des Reglements</h1>
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
                <h4>Tableau des Reglements</h4>
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
                        <div class=\"col-md-2\">
                            <label for=\"paiement\">Mode de Paiement:</label>
                            <select class=\"form-control\" name=\"paiement\" id=\"paiement\">
                                <option value=\"\">Choix Mode de Paiement</option>
                                {% for paiement in paiements %}
                                    <option value=\"{{paiement.id}}\">{{paiement.designation}}</option>
                                {% endfor %} 
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label for=\"bordereaux\">Bordereaux:</label>
                            <select class=\"form-control\" name=\"bordereaux\" id=\"bordereaux\">
                                <option value=\"\">Choix bordereaux</option>
                                <option value=\"oui\">Avec bordereau</option>
                                <option value=\"non\">Sans bordereau</option>
                            </select>
                        </div>
                    </div>
                </div>
            <table id=\"datables_reglement\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>Ord</th>
                        <th>#</th>
                        <th>Code Pré-inscription</th>
                        <th>Code Facture</th>
                        <th>Code Reglement</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Formation</th>
                        <th>Montant</th>
                        <th>Reference</th>
                        <th>Date Reglement</th>
                        <th>Mode Paiement</th>
                        <th>Banque</th>
                        <th>Num Brd</th>
                        <th>A-Motif</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Ord</th>
                        <th>#</th>
                        <th>Code Pré-inscription</th>
                        <th>Code Facture</th>
                        <th>Code Reglement</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Formation</th>
                        <th>Montant</th>
                        <th>Reference</th>
                        <th>Date Reglement</th>
                        <th>Mode Paiement</th>
                        <th>Banque</th>
                        <th>Num Brd</th>
                        <th>A-Motif</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
{% include 'facture/modals/edit_reglement.html.twig' %}
{% include 'facture/modals/annuler_reglement.html.twig' %}
{# {% include 'facture/modals/modifier_organisme.html.twig' %} #}

{% endblock %}

{% block javascripts %}
{{parent()}}
{# <script src=\"/assets/js/facture/reglement.js\"></script> #}
{{ encore_entry_script_tags('reglement') }}

{% endblock %}

", "facture/gestion_reglement.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\gestion_reglement.html.twig");
    }
}
