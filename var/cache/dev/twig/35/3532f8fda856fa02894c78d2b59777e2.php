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

/* inc/navbar.html.twig */
class __TwigTemplate_2c8577ce9363abdab97984d2d124c17e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        yield "
<div class=\"navbar-bg\"></div>
<nav class=\"navbar navbar-expand-lg main-navbar\">
  <form class=\"form-inline mr-auto\">
    <ul class=\"navbar-nav mr-3\">
      <li>
        <a href=\"#\" data-toggle=\"sidebar\" class=\"nav-link nav-link-lg\"
          ><i class=\"fas fa-bars\"></i
        ></a>
      </li>
      
    </ul>
    
  </form>
  <ul class=\"navbar-nav navbar-right\">
    <li class=\"dropdown\">
      <a
        href=\"#\"
        data-toggle=\"dropdown\"
        class=\"nav-link dropdown-toggle nav-link-lg nav-link-user\"
      >
        <img
          alt=\"image\"
          src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar/avatar-1.png"), "html", null, true);
        yield "\"
          class=\"rounded-circle mr-1\"
        />
        <div class=\"d-sm-none d-lg-inline-block\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
        yield "</div></a
      >
      <div class=\"dropdown-menu dropdown-menu-right\">
        <a href=\"#\" class=\"dropdown-item has-icon text-primary password_change\">
          <i class=\"fas fa-lock\"></i> Changer mot de passe
        </a>
        <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item has-icon text-danger\">
          <i class=\"fas fa-sign-out-alt\"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>

<div class=\"modal\" role=\"dialog\" id=\"password_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Formulaire mot de passe</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save_password_change\">
            <label for=\"an_password\">Ancien mot de passe:</label>
            <input type=\"password\" class=\"form-control\" name=\"an_password\" id=\"an_password\" />
            <label for=\"nv_password\">Nouveau mot de passe:</label>
            <input type=\"password\" class=\"form-control\" name=\"nv_password\" id=\"nv_password\" />          

            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            ";
        // line 61
        yield "        </form>
      </div>
    </div>
  </div>
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
        return "inc/navbar.html.twig";
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
        return array (  114 => 61,  84 => 33,  75 => 27,  69 => 24,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"navbar-bg\"></div>
<nav class=\"navbar navbar-expand-lg main-navbar\">
  <form class=\"form-inline mr-auto\">
    <ul class=\"navbar-nav mr-3\">
      <li>
        <a href=\"#\" data-toggle=\"sidebar\" class=\"nav-link nav-link-lg\"
          ><i class=\"fas fa-bars\"></i
        ></a>
      </li>
      
    </ul>
    
  </form>
  <ul class=\"navbar-nav navbar-right\">
    <li class=\"dropdown\">
      <a
        href=\"#\"
        data-toggle=\"dropdown\"
        class=\"nav-link dropdown-toggle nav-link-lg nav-link-user\"
      >
        <img
          alt=\"image\"
          src=\"{{asset('assets/img/avatar/avatar-1.png')}}\"
          class=\"rounded-circle mr-1\"
        />
        <div class=\"d-sm-none d-lg-inline-block\">{{app.user.username}}</div></a
      >
      <div class=\"dropdown-menu dropdown-menu-right\">
        <a href=\"#\" class=\"dropdown-item has-icon text-primary password_change\">
          <i class=\"fas fa-lock\"></i> Changer mot de passe
        </a>
        <a href=\"{{path('app_logout')}}\" class=\"dropdown-item has-icon text-danger\">
          <i class=\"fas fa-sign-out-alt\"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>

<div class=\"modal\" role=\"dialog\" id=\"password_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 200px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Formulaire mot de passe</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <form id=\"save_password_change\">
            <label for=\"an_password\">Ancien mot de passe:</label>
            <input type=\"password\" class=\"form-control\" name=\"an_password\" id=\"an_password\" />
            <label for=\"nv_password\">Nouveau mot de passe:</label>
            <input type=\"password\" class=\"form-control\" name=\"nv_password\" id=\"nv_password\" />          

            
            <button type=\"submit\" class=\"btn btn-success mt-4\"><i class=\"fas fa-check-circle\"></i> Enregister</button>
            {# <button type=\"button\" id=\"save_document\" class=\"btn btn-success mt-2\"><i class=\"fas fa-check-circle\"></i> Enregistrer</button> #}
        </form>
      </div>
    </div>
  </div>
</div>
", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\inc\\navbar.html.twig");
    }
}
