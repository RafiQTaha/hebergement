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

/* facture/modals/add_reglement_facture.html.twig */
class __TwigTemplate_a75deaa34f764a362f27c72744e4a48e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/add_reglement_facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/add_reglement_facture.html.twig"));

        // line 1
        yield "<div class=\"modal\" role=\"dialog\" id=\"ajouter_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal-facture\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Réglement</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form class=\"new_facture-form\">
            <div class=\"col-md-12 row\">
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"d_reglement\" style=\"margin-top: 1rem;\">date de Reglement (*):</label>
                        <input type=\"date\"  class=\"form-control\" name=\"d_reglement\" id=\"d_reglement\" >
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"montant_facture\" style=\"margin-top: 1rem;\">Montant :</label>
                        <input type=\"text\" class=\"form-control\" name=\"montant_facture\" id=\"montant_facture\" value=\"\" disabled>
                    </div>
                </div> 
                ";
        // line 32
        yield "                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"montant_devis\" style=\"margin-top: 1rem;\">Montant en devise:</label>
                        <input type=\"text\" class=\"form-control\" name=\"montant_devis\" id=\"montant_devis\" value=\"\">
                    </div>
                </div>  
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"montant\" style=\"margin-top: 1rem;\">Regle (*) :</label>
                        <input type=\"text\" class=\"form-control\" name=\"montant\" id=\"montant\" value=\"\">
                        <input type=\"text\" name=\"montant2\" id=\"montant2\" value=\"\" hidden>
                    </div>
                </div> 
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"banque\">Banque (*) :</label>
                        <select class=\"form-control\" name=\"banque\" id=\"banque\">
                            <option value=\"\">Choix Banque</option>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["banques"]) || array_key_exists("banques", $context) ? $context["banques"] : (function () { throw new RuntimeError('Variable "banques" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["banque"]) {
            // line 51
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banque"], "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banque"], "designation", [], "any", false, false, false, 51), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                        </select>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"paiement\">Paiement (*) :</label>
                        <select class=\"form-control\" name=\"paiement\" id=\"paiement\">
                            <option value=\"\">Choix Type De Paiement</option>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new RuntimeError('Variable "paiements" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 62
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "designation", [], "any", false, false, false, 62), "html", null, true);
            yield "</option>
                            ";
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
                        <input type=\"text\" class=\"form-control\" name=\"reference\" id=\"reference\">
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"ice\">Ice :</label>
                        <input type=\"text\" class=\"form-control\" name=\"ice\" id=\"ice\">
                    </div>
                </div> 
                ";
        // line 86
        yield "            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"save_reglement\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
            </div>
        </form>
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
        return "facture/modals/add_reglement_facture.html.twig";
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
        return array (  148 => 86,  131 => 64,  120 => 62,  116 => 61,  106 => 53,  95 => 51,  91 => 50,  71 => 32,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"ajouter_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal-facture\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Réglement</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form class=\"new_facture-form\">
            <div class=\"col-md-12 row\">
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"d_reglement\" style=\"margin-top: 1rem;\">date de Reglement (*):</label>
                        <input type=\"date\"  class=\"form-control\" name=\"d_reglement\" id=\"d_reglement\" >
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"montant_facture\" style=\"margin-top: 1rem;\">Montant :</label>
                        <input type=\"text\" class=\"form-control\" name=\"montant_facture\" id=\"montant_facture\" value=\"\" disabled>
                    </div>
                </div> 
                {# <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"montant_provisoir\" style=\"margin-top: 1rem;\">Montant provisoir:</label>
                        <input type=\"text\" class=\"form-control\" name=\"montant_provisoir\" id=\"montant_provisoir\" value=\"\">
                    </div>
                </div> #}
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"montant_devis\" style=\"margin-top: 1rem;\">Montant en devise:</label>
                        <input type=\"text\" class=\"form-control\" name=\"montant_devis\" id=\"montant_devis\" value=\"\">
                    </div>
                </div>  
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"montant\" style=\"margin-top: 1rem;\">Regle (*) :</label>
                        <input type=\"text\" class=\"form-control\" name=\"montant\" id=\"montant\" value=\"\">
                        <input type=\"text\" name=\"montant2\" id=\"montant2\" value=\"\" hidden>
                    </div>
                </div> 
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"banque\">Banque (*) :</label>
                        <select class=\"form-control\" name=\"banque\" id=\"banque\">
                            <option value=\"\">Choix Banque</option>
                            {% for banque in banques %}
                                <option value=\"{{banque.id}}\">{{banque.designation}}</option>
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
                                <option value=\"{{paiement.id}}\">{{paiement.designation}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div> 
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"reference\">Référence (*) :</label>
                        <input type=\"text\" class=\"form-control\" name=\"reference\" id=\"reference\">
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label for=\"ice\">Ice :</label>
                        <input type=\"text\" class=\"form-control\" name=\"ice\" id=\"ice\">
                    </div>
                </div> 
                {# <div class=\"col-md-4\">
                      <label> Type Organisme:</label><br> 
                      <input type=\"radio\" name=\"organisme\" id=\"organ\" value=\"1\" checked=\"\"> 
                      <label style=\"margin:5px\" for=\"organ\"> Payant </label>  
                      <input type=\"radio\" name=\"organisme\" id=\"norgan\" value=\"0\"> 
                      <label style=\"margin: 0px 5px 0px 0px;\"  for=\"norgan\"> Organisme </label>  
                </div> #}
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-success\" id=\"save_reglement\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
            </div>
        </form>
      </div>


    </div>
  </div>
</div>", "facture/modals/add_reglement_facture.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\modals\\add_reglement_facture.html.twig");
    }
}
