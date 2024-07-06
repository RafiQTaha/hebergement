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

/* inc/sidebar.html.twig */
class __TwigTemplate_4d48a2e966d422febc3e778ca2695792 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/sidebar.html.twig"));

        // line 1
        $context["getCurrentUrl"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "pathinfo", [], "any", false, false, false, 1), "/"), 1, [], "array", false, false, false, 1);
        // line 2
        $context["secondCurrentUrl"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "pathinfo", [], "any", false, false, false, 2), "/"), 2, [], "array", false, false, false, 2);
        // line 3
        yield "
<div class=\"main-sidebar\">
  <aside id=\"sidebar-wrapper\">
    <div class=\"sidebar-brand\">
      <a href=\"#\">HEBERGEMENT</a>
      <span>FCZ MTSI - Solution Universitaire</span>
    </div>
    <div class=\"sidebar-brand sidebar-brand-sm\">
      <a href=\"#\">UV</a>
    </div>
    <ul class=\"sidebar-menu\">
      <li class=\"menu-header\">Dashboard</li>
        ";
        // line 16
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "get", ["modules"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 17
            yield "      
      <li class=\"nav-item dropdown ";
            // line 18
            if (((isset($context["getCurrentUrl"]) || array_key_exists("getCurrentUrl", $context) ? $context["getCurrentUrl"] : (function () { throw new RuntimeError('Variable "getCurrentUrl" does not exist.', 18, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "module", [], "any", false, false, false, 18), "prefix", [], "any", false, false, false, 18))) {
                yield " active ";
            }
            yield "\">
        <a href=\"#\" class=\"nav-link has-dropdown\"
          ><i class=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "module", [], "any", false, false, false, 20), "icon", [], "any", false, false, false, 20), "html", null, true);
            yield "\"></i><span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "module", [], "any", false, false, false, 20), "designation", [], "any", false, false, false, 20), "html", null, true);
            yield "</span></a
        >
        <ul class=\"dropdown-menu\">
          ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "sousModule", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["sousModule"]) {
                // line 24
                yield "            <li><a class=\"nav-link ";
                if ((((isset($context["getCurrentUrl"]) || array_key_exists("getCurrentUrl", $context) ? $context["getCurrentUrl"] : (function () { throw new RuntimeError('Variable "getCurrentUrl" does not exist.', 24, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "module", [], "any", false, false, false, 24), "prefix", [], "any", false, false, false, 24)) && ((isset($context["secondCurrentUrl"]) || array_key_exists("secondCurrentUrl", $context) ? $context["secondCurrentUrl"] : (function () { throw new RuntimeError('Variable "secondCurrentUrl" does not exist.', 24, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["sousModule"], "prefix", [], "any", false, false, false, 24)))) {
                    yield " activeSecondUrl ";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["sousModule"], "link", [], "any", false, false, false, 24));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sousModule"], "designation", [], "any", false, false, false, 24), "html", null, true);
                yield "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousModule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        </ul>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "      ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            yield "      <li class=\"nav-item dropdown ";
            if (((isset($context["getCurrentUrl"]) || array_key_exists("getCurrentUrl", $context) ? $context["getCurrentUrl"] : (function () { throw new RuntimeError('Variable "getCurrentUrl" does not exist.', 30, $this->source); })()) == "parametre")) {
                yield " active ";
            }
            yield "\">
        <a href=\"#\" class=\"nav-link has-dropdown\">
          <i class=\"fas fa-users-cog\"></i><span>Adminstration</span>
        </a>
        <ul class=\"dropdown-menu\">
            <li><a class=\"nav-link ";
            // line 35
            if ((((isset($context["getCurrentUrl"]) || array_key_exists("getCurrentUrl", $context) ? $context["getCurrentUrl"] : (function () { throw new RuntimeError('Variable "getCurrentUrl" does not exist.', 35, $this->source); })()) == "parametre") && ((isset($context["secondCurrentUrl"]) || array_key_exists("secondCurrentUrl", $context) ? $context["secondCurrentUrl"] : (function () { throw new RuntimeError('Variable "secondCurrentUrl" does not exist.', 35, $this->source); })()) == "user"))) {
                yield " activeSecondUrl ";
            }
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre_user");
            yield "\">Users</a></li>
        </ul>
      </li>
      ";
        }
        // line 39
        yield "    </ul>
  </aside>
</div>
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
        return "inc/sidebar.html.twig";
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
        return array (  137 => 39,  126 => 35,  115 => 30,  112 => 29,  104 => 26,  89 => 24,  85 => 23,  77 => 20,  70 => 18,  67 => 17,  62 => 16,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%set getCurrentUrl = app.request.pathinfo|split('/')[1]%}
{%set secondCurrentUrl = app.request.pathinfo|split('/')[2]%}

<div class=\"main-sidebar\">
  <aside id=\"sidebar-wrapper\">
    <div class=\"sidebar-brand\">
      <a href=\"#\">HEBERGEMENT</a>
      <span>FCZ MTSI - Solution Universitaire</span>
    </div>
    <div class=\"sidebar-brand sidebar-brand-sm\">
      <a href=\"#\">UV</a>
    </div>
    <ul class=\"sidebar-menu\">
      <li class=\"menu-header\">Dashboard</li>
        {# {{dump(app.session.get('modules'))}} #}
      {% for module in app.session.get('modules') %}
      
      <li class=\"nav-item dropdown {% if getCurrentUrl == module.module.prefix %} active {% endif %}\">
        <a href=\"#\" class=\"nav-link has-dropdown\"
          ><i class=\"{{module.module.icon}}\"></i><span>{{module.module.designation}}</span></a
        >
        <ul class=\"dropdown-menu\">
          {% for sousModule in module.sousModule %}
            <li><a class=\"nav-link {% if getCurrentUrl == module.module.prefix and secondCurrentUrl == sousModule.prefix %} activeSecondUrl {% endif %}\" href=\"{{path(sousModule.link)}}\">{{sousModule.designation}}</a></li>
          {% endfor %}
        </ul>
      </li>
      {% endfor %}
      {% if is_granted('ROLE_ADMIN') %}
      <li class=\"nav-item dropdown {% if getCurrentUrl == \"parametre\" %} active {% endif %}\">
        <a href=\"#\" class=\"nav-link has-dropdown\">
          <i class=\"fas fa-users-cog\"></i><span>Adminstration</span>
        </a>
        <ul class=\"dropdown-menu\">
            <li><a class=\"nav-link {% if getCurrentUrl == \"parametre\" and secondCurrentUrl == \"user\" %} activeSecondUrl {% endif %}\" href=\"{{path('parametre_user')}}\">Users</a></li>
        </ul>
      </li>
      {% endif %}
    </ul>
  </aside>
</div>
", "inc/sidebar.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\inc\\sidebar.html.twig");
    }
}
