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

/* facture/pages/edit_reglement.html.twig */
class __TwigTemplate_25289a3bff681f9bfaa9b4c834c110ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pages/edit_reglement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pages/edit_reglement.html.twig"));

        // line 1
        yield "<div class=\"col-md-12 row\">
    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label for=\"d_reglement\" style=\"margin-top: 1rem;\">date de Reglement (*):</label>
            <input type=\"date\" class=\"form-control\" name=\"d_reglement\" id=\"d_reglement\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 5, $this->source); })()), "datereglement", [], "any", false, false, false, 5), "Y-m-d"), "html", null, true);
        yield "\">
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label for=\"montant\" style=\"margin-top: 1rem;\">Regle (*) :</label>
            <input type=\"text\" class=\"form-control\" name=\"montant\" id=\"montant\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 11, $this->source); })()), "montant", [], "any", false, false, false, 11), "html", null, true);
        yield "\" disabled>
        </div>
    </div> 
    ";
        // line 20
        yield "    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label for=\"montant_devis\" style=\"margin-top: 1rem;\">Montant en devise:</label>
            <input type=\"text\" class=\"form-control\" name=\"montant_devis\" id=\"montant_devis\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 23, $this->source); })()), "mdevis", [], "any", false, false, false, 23), "html", null, true);
        yield "\" disabled>
        </div>
    </div>  
    ";
        // line 35
        yield "</div>
<div class=\"col-md-12 row\">
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"banque\">Banque (*) :</label>
                        <select class=\"form-control\" name=\"banque\" id=\"banque\">
                            <option value=\"\">Choix Banque</option>
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["banques"]) || array_key_exists("banques", $context) ? $context["banques"] : (function () { throw new RuntimeError('Variable "banques" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["banque"]) {
            // line 43
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 43, $this->source); })()), "banque", [], "any", false, false, false, 43) == $context["banque"])) {
                // line 44
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banque"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banque"], "designation", [], "any", false, false, false, 44), "html", null, true);
                yield "</option>
                                ";
            } else {
                // line 45
                yield " 
                                    <option value=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banque"], "id", [], "any", false, false, false, 46), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banque"], "designation", [], "any", false, false, false, 46), "html", null, true);
                yield "</option>
                                ";
            }
            // line 48
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"paiement\">Paiement (*) :</label>
                        <select class=\"form-control\" name=\"paiement\" id=\"paiement\">
                            <option value=\"\">Choix Type De Paiement</option>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new RuntimeError('Variable "paiements" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 58
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 58, $this->source); })()), "paiement", [], "any", false, false, false, 58) == $context["paiement"])) {
                // line 59
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "id", [], "any", false, false, false, 59), "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "designation", [], "any", false, false, false, 59), "html", null, true);
                yield "</option>
                                ";
            } else {
                // line 61
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "id", [], "any", false, false, false, 61), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "designation", [], "any", false, false, false, 61), "html", null, true);
                yield "</option>
                                ";
            }
            // line 63
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                        </select>
                    </div>
                </div> 
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"reference\">Référence (*) :</label>
                        <input type=\"text\" class=\"form-control\" name=\"reference\" id=\"reference\" value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 70, $this->source); })()), "reference", [], "any", false, false, false, 70), "html", null, true);
        yield "\">
                    </div>
                </div> 
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"ice\">Ice :</label>
                        <input type=\"text\" class=\"form-control\" name=\"ice\" id=\"ice\" value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 76, $this->source); })()), "ice", [], "any", false, false, false, 76), "html", null, true);
        yield "\">
                    </div>
                </div> 
</div>
<div class=\"modal-footer\">
    <button class=\"btn btn-success\" id=\"save_reglement\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
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
        return "facture/pages/edit_reglement.html.twig";
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
        return array (  172 => 76,  163 => 70,  155 => 64,  149 => 63,  141 => 61,  133 => 59,  130 => 58,  126 => 57,  116 => 49,  110 => 48,  103 => 46,  100 => 45,  92 => 44,  89 => 43,  85 => 42,  76 => 35,  70 => 23,  65 => 20,  59 => 11,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-12 row\">
    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label for=\"d_reglement\" style=\"margin-top: 1rem;\">date de Reglement (*):</label>
            <input type=\"date\" class=\"form-control\" name=\"d_reglement\" id=\"d_reglement\" value=\"{{reglement.datereglement | date('Y-m-d') }}\">
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label for=\"montant\" style=\"margin-top: 1rem;\">Regle (*) :</label>
            <input type=\"text\" class=\"form-control\" name=\"montant\" id=\"montant\" value=\"{{reglement.montant}}\" disabled>
        </div>
    </div> 
    {# <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label for=\"montant_provisoir\" style=\"margin-top: 1rem;\">Montant provisoir:</label>
            <input type=\"text\" class=\"form-control\" name=\"montant_provisoir\" id=\"montant_provisoir\" value=\"{{reglement.mprovisoir}}\" disabled>
        </div>
    </div> #}
    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label for=\"montant_devis\" style=\"margin-top: 1rem;\">Montant en devise:</label>
            <input type=\"text\" class=\"form-control\" name=\"montant_devis\" id=\"montant_devis\" value=\"{{reglement.mdevis}}\" disabled>
        </div>
    </div>  
    {# <div class=\"col-md-4\">
        <div class=\"form-group\">
            <label style=\"margin-top: 1rem;\"> Type Organisme:</label><br> 
            <input type=\"radio\" name=\"organisme\" id=\"organ\" value=\"1\" checked=\"\"> 
            <label style=\"margin:5px\" for=\"organ\"> Payant </label>  
            <input type=\"radio\" name=\"organisme\" id=\"norgan\" value=\"0\"> 
            <label style=\"margin: 0px 5px 0px 0px;\"  for=\"norgan\"> Organisme </label>  
        </div>
    </div> #}
</div>
<div class=\"col-md-12 row\">
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"banque\">Banque (*) :</label>
                        <select class=\"form-control\" name=\"banque\" id=\"banque\">
                            <option value=\"\">Choix Banque</option>
                            {% for banque in banques %}
                                {% if reglement.banque == banque %}
                                    <option value=\"{{banque.id}}\" selected>{{banque.designation}}</option>
                                {% else %} 
                                    <option value=\"{{banque.id}}\">{{banque.designation}}</option>
                                {% endif %}
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"paiement\">Paiement (*) :</label>
                        <select class=\"form-control\" name=\"paiement\" id=\"paiement\">
                            <option value=\"\">Choix Type De Paiement</option>
                            {% for paiement in paiements %}
                                {% if reglement.paiement == paiement %}
                                    <option value=\"{{paiement.id}}\" selected>{{paiement.designation}}</option>
                                {% else %}
                                    <option value=\"{{paiement.id}}\">{{paiement.designation}}</option>
                                {% endif %}
                            {% endfor %}
                        </select>
                    </div>
                </div> 
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"reference\">Référence (*) :</label>
                        <input type=\"text\" class=\"form-control\" name=\"reference\" id=\"reference\" value=\"{{reglement.reference}}\">
                    </div>
                </div> 
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"ice\">Ice :</label>
                        <input type=\"text\" class=\"form-control\" name=\"ice\" id=\"ice\" value=\"{{reglement.ice}}\">
                    </div>
                </div> 
</div>
<div class=\"modal-footer\">
    <button class=\"btn btn-success\" id=\"save_reglement\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
</div>", "facture/pages/edit_reglement.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\pages\\edit_reglement.html.twig");
    }
}
