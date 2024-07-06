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

/* parametre/user/index.html.twig */
class __TwigTemplate_4cacaa38d96c5dd1fcf36c582e41aa5c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parametre/user/index.html.twig", 1);
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

        yield "Univ - Paramétre - Users";
        
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
          <h1>Users</h1>
          <div class=\"section-header-breadcrumb\">
              <a href=\"#\" class=\"btn btn-success ml-1\" id=\"privillege\"><i class=\"fas fa-plus\"></i>  Privilége</a>
              
          </div>
        </div>

        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Tableau des users</h4>
            </div>
            <div class=\"card-body\">
            
            <table id=\"datatables_gestion_users\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Login</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Role</th>
                        <th>Active</th>
                        <th>Reinitialiser MDP</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Login</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Role</th>
                        <th>Active</th>
                        <th>Reinitialiser MDP</th>
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
        yield from         $this->loadTemplate("parametre/user/modals/privilege.html.twig", "parametre/user/index.html.twig", 61)->unwrap()->yield(CoreExtension::merge($context, ["modules" => (isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 61, $this->source); })())]));
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
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("user");
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
        return "parametre/user/index.html.twig";
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
        return array (  180 => 71,  175 => 68,  171 => 67,  161 => 66,  149 => 63,  147 => 61,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Univ - Paramétre - Users{% endblock %}


{% block body %}
<div class=\"main-content\">
    <section class=\"section\">
        <div class=\"section-header\">
          <h1>Users</h1>
          <div class=\"section-header-breadcrumb\">
              <a href=\"#\" class=\"btn btn-success ml-1\" id=\"privillege\"><i class=\"fas fa-plus\"></i>  Privilége</a>
              
          </div>
        </div>

        <div class=\"section-body\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Tableau des users</h4>
            </div>
            <div class=\"card-body\">
            
            <table id=\"datatables_gestion_users\" class=\"table table-striped\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Login</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Role</th>
                        <th>Active</th>
                        <th>Reinitialiser MDP</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Login</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Role</th>
                        <th>Active</th>
                        <th>Reinitialiser MDP</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            
        </div>
        </div>
    </section>
</div>



<!--Modal Import Group-->
{% include 'parametre/user/modals/privilege.html.twig' with {'modules': modules}%}
{# {% include 'inscription/modals/frais.html.twig' %} #}

{% endblock %}

{% block javascripts %}
{{parent()}}
{{ encore_entry_script_tags('user') }}

{# <script src=\"/assets/js/parametre/user.js\"></script> #}

{% endblock %}

", "parametre/user/index.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\user\\index.html.twig");
    }
}
