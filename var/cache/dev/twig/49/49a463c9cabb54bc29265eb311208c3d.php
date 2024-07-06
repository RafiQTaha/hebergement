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

/* parametre/user/modals/privilege.html.twig */
class __TwigTemplate_9b5a4341a1371f8cd795ee2d9994a3d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/user/modals/privilege.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parametre/user/modals/privilege.html.twig"));

        // line 1
        yield "<div class=\"modal\" role=\"dialog\" id=\"privillege-modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 400px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Ajouter privilege</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <div class=\"privilege\">
            <ul>
                <span><input type=\"checkbox\" class=\"tous\"/> Tous</span>
                <div class=\"privilege__list\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 17
            yield "                <li><h4 class=\"Collapsable modules\"> <input type=\"checkbox\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "\" class=\"inputModule\" /> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "designation", [], "any", false, false, false, 17), "html", null, true);
            yield "</h4>
                    <ul style=\"display:none\">
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "sousModule", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["sousModule"]) {
                // line 20
                yield "                        <li>
                            <span class=\"Collapsable sousModules\" style=\"font-size:14px\"><input type=\"checkbox\" data-module=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sousModule"], "id", [], "any", false, false, false, 21), "html", null, true);
                yield "\" class=\"inputSousModule\" /> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sousModule"], "designation", [], "any", false, false, false, 21), "html", null, true);
                yield "</span>
                            <ul style=\"display:none\" class=\"listOfButtons\">
                                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["sousModule"], "operations", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
                    // line 24
                    yield "                                <li>  <span class=\"Collapsable buttons\"> <input type=\"checkbox\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 24), "html", null, true);
                    yield " inputOperation\" data-operation=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 24), "html", null, true);
                    yield "\" /> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["operation"], "designation", [], "any", false, false, false, 24), "html", null, true);
                    yield "</span></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "                            </ul>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousModule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "
                    </ul>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                </div>
                
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parametre/user/modals/privilege.html.twig";
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
        return array (  121 => 33,  112 => 29,  104 => 26,  91 => 24,  87 => 23,  80 => 21,  77 => 20,  73 => 19,  65 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"privillege-modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md\" style=\"max-width: 400px !important;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Ajouter privilege</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- <div class=\"alert alert-info\">Veuillez selectionner un ligne Pour Continuer Cette opération !!</div> -->
        <div class=\"privilege\">
            <ul>
                <span><input type=\"checkbox\" class=\"tous\"/> Tous</span>
                <div class=\"privilege__list\">
                {% for module in modules %}
                <li><h4 class=\"Collapsable modules\"> <input type=\"checkbox\" data-id=\"{{module.id}}\" class=\"inputModule\" /> {{module.designation}}</h4>
                    <ul style=\"display:none\">
                        {% for sousModule in module.sousModule %}
                        <li>
                            <span class=\"Collapsable sousModules\" style=\"font-size:14px\"><input type=\"checkbox\" data-module=\"{{sousModule.id}}\" class=\"inputSousModule\" /> {{sousModule.designation}}</span>
                            <ul style=\"display:none\" class=\"listOfButtons\">
                                {% for operation in sousModule.operations %}
                                <li>  <span class=\"Collapsable buttons\"> <input type=\"checkbox\" class=\"{{operation.id}} inputOperation\" data-operation=\"{{operation.id}}\" /> {{operation.designation}}</span></li>
                                {% endfor %}
                            </ul>
                        </li>
                        {% endfor %}

                    </ul>
                </li>
                {% endfor %}
                </div>
                
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>", "parametre/user/modals/privilege.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\parametre\\user\\modals\\privilege.html.twig");
    }
}
