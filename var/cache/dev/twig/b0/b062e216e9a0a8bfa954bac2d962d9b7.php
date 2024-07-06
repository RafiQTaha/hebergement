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

/* security/login.html.twig */
class __TwigTemplate_89064ac245f07a77fa53523d4ba9dc5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t";
        // line 8
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        yield "
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js\"></script>
\t";
        // line 10
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("login");
        yield "
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/apple-touch-icon.png"), "html", null, true);
        yield "\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon-32x32.png"), "html", null, true);
        yield "\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon-16x16.png"), "html", null, true);
        yield "\">
\t<link rel=\"manifest\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/site.webmanifest"), "html", null, true);
        yield "\">
\t<title>Univ - Login</title>
</head>
<body>
\t<div class=\"login\">
\t\t<h2>
\t\t\t";
        // line 20
        $context["currentHour"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H");
        // line 21
        yield "
\t\t\t";
        // line 23
        yield "\t\t\t";
        if (CoreExtension::inFilter((isset($context["currentHour"]) || array_key_exists("currentHour", $context) ? $context["currentHour"] : (function () { throw new RuntimeError('Variable "currentHour" does not exist.', 23, $this->source); })()), range(8, 17))) {
            yield " 
\t\t\t\tBonjour !
\t\t\t";
        } else {
            // line 26
            yield "\t\t\t\tBonsoir !
\t\t\t";
        }
        // line 28
        yield "\t\t</h2>
\t\t<div class=\"container\" id=\"container\">
\t\t\t<div class=\"form-container sign-up-container\">
\t\t\t\t<form id=\"singup\">
\t\t\t\t\t<h1>Crée un compte</h1>
\t\t\t\t\t
\t\t\t\t\t<span class=\"singup__error\"></span>
\t\t\t\t\t<span class=\"singup__success\"></span>
\t\t
\t\t\t\t\t<input type=\"text\" id=\"singup_username\" placeholder=\"Username\" required/>
\t\t\t\t\t<input type=\"email\" id=\"singup_email\" placeholder=\"Email\" />
\t\t\t\t\t<input type=\"text\" id=\"singup_nom\" placeholder=\"Nom\" required/>
\t\t\t\t\t<input type=\"text\" id=\"singup_prenom\" placeholder=\"Prenom\" required/>
\t\t\t\t\t<input type=\"password\" id=\"singup_password\" placeholder=\"Mot de passe\" required/>
\t\t\t\t\t<input type=\"password\" id=\"singup_cpassword\" placeholder=\"Confirme le mot de passe\" required/>
\t\t\t\t\t<button type=\"submit\">Crée</button>
\t\t\t\t</form>
\t\t\t\t";
        // line 46
        yield "
\t\t\t</div>
\t\t\t<div class=\"form-container sign-in-container\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t";
        // line 51
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 51, $this->source); })())) {
            // line 52
            yield "\t\t\t\t\t\t<div class=\"login__error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageKey", [], "any", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageData", [], "any", false, false, false, 52), "security"), "html", null, true);
            yield "</div>
\t\t\t\t\t";
        }
        // line 54
        yield "\t\t\t\t\t
\t\t\t\t\t<input value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "\" name=\"username\" placeholder=\"Username\" />
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" />
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
\t\t\t\t\t";
        // line 59
        yield "\t\t\t\t\t<button type=\"submit\">Connexion</button>
\t\t\t\t</form>
\t\t\t\t<span class=\"footer\" >FCZ - MTSI - Solutions Universitaires</span>
\t\t\t</div>
\t\t\t<div class=\"overlay-container\">
\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t<div class=\"overlay-panel overlay-left\">
\t\t\t\t\t\t";
        // line 68
        yield "\t\t\t\t\t\t<button class=\"ghost\" id=\"signIn\">Connexion</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overlay-panel overlay-right\">
\t\t\t\t\t\t";
        // line 72
        yield "\t\t\t\t\t\t";
        // line 73
        yield "\t\t\t\t\t\t<button class=\"ghost\" id=\"signUp\">Crée un compte</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
</body>
</html>


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
        return "security/login.html.twig";
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
        return array (  161 => 73,  159 => 72,  154 => 68,  145 => 59,  141 => 57,  136 => 55,  133 => 54,  127 => 52,  125 => 51,  118 => 46,  99 => 28,  95 => 26,  88 => 23,  85 => 21,  83 => 20,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t{{ encore_entry_link_tags('login') }}
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js\"></script>
\t{{ encore_entry_script_tags('login') }}
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{asset('assets/img/favicon/apple-touch-icon.png')}}\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{asset('assets/img/favicon/favicon-32x32.png')}}\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('assets/img/favicon/favicon-16x16.png')}}\">
\t<link rel=\"manifest\" href=\"{{asset('assets/img/favicon/site.webmanifest')}}\">
\t<title>Univ - Login</title>
</head>
<body>
\t<div class=\"login\">
\t\t<h2>
\t\t\t{% set currentHour = 'now'|date('H') %}

\t\t\t{# {{dump(currentHour)}} #}
\t\t\t{% if currentHour in range(8,17) %} 
\t\t\t\tBonjour !
\t\t\t{% else %}
\t\t\t\tBonsoir !
\t\t\t{% endif %}
\t\t</h2>
\t\t<div class=\"container\" id=\"container\">
\t\t\t<div class=\"form-container sign-up-container\">
\t\t\t\t<form id=\"singup\">
\t\t\t\t\t<h1>Crée un compte</h1>
\t\t\t\t\t
\t\t\t\t\t<span class=\"singup__error\"></span>
\t\t\t\t\t<span class=\"singup__success\"></span>
\t\t
\t\t\t\t\t<input type=\"text\" id=\"singup_username\" placeholder=\"Username\" required/>
\t\t\t\t\t<input type=\"email\" id=\"singup_email\" placeholder=\"Email\" />
\t\t\t\t\t<input type=\"text\" id=\"singup_nom\" placeholder=\"Nom\" required/>
\t\t\t\t\t<input type=\"text\" id=\"singup_prenom\" placeholder=\"Prenom\" required/>
\t\t\t\t\t<input type=\"password\" id=\"singup_password\" placeholder=\"Mot de passe\" required/>
\t\t\t\t\t<input type=\"password\" id=\"singup_cpassword\" placeholder=\"Confirme le mot de passe\" required/>
\t\t\t\t\t<button type=\"submit\">Crée</button>
\t\t\t\t</form>
\t\t\t\t{# <span class=\"footer\" >FCZ - MTSI - Solutions Universitaires</span> #}

\t\t\t</div>
\t\t\t<div class=\"form-container sign-in-container\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"login__error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t<input value=\"{{ last_username }}\" name=\"username\" placeholder=\"Username\" />
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" />
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t{# <a href=\"#\">Forgot your password?</a> #}
\t\t\t\t\t<button type=\"submit\">Connexion</button>
\t\t\t\t</form>
\t\t\t\t<span class=\"footer\" >FCZ - MTSI - Solutions Universitaires</span>
\t\t\t</div>
\t\t\t<div class=\"overlay-container\">
\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t<div class=\"overlay-panel overlay-left\">
\t\t\t\t\t\t{# <h1>Welcome Back!</h1>
\t\t\t\t\t\t<p>To keep connected with us please login with your personal info</p> #}
\t\t\t\t\t\t<button class=\"ghost\" id=\"signIn\">Connexion</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overlay-panel overlay-right\">
\t\t\t\t\t\t{# <h1>Creation de compte</h1> #}
\t\t\t\t\t\t{# <p>Enter your personal details and start journey with us</p> #}
\t\t\t\t\t\t<button class=\"ghost\" id=\"signUp\">Crée un compte</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
</body>
</html>


", "security/login.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\security\\login.html.twig");
    }
}
