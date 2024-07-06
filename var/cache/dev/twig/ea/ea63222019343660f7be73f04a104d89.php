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

/* facture/modals/detail_facture.html.twig */
class __TwigTemplate_82ed71e87e6484c97216ea14cc7ae16d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/detail_facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/detail_facture.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"detail_facture_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal-facture\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Detaille Facture</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
            <div class=\"row mb-4 \" id=\"add\">
                <div class=\"col-md-4\" id=\"orgDiv\">
                    <label for=\"organismeType\">Organisme (*):</label>
                    <select class=\"form-control\" name=\"organismeType\" id=\"organismeType\">
                      <option value=\"\">Choix Organisme</option>
                      <option value=\"Payant\">Payant</option>
                      <option value=\"Organisme\">Organisme</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"frais\">Frais (*):</label>
                    <select class=\"form-control\" name=\"frais\" id=\"frais\">
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"montant\">Montant(*):</label>
                    <input type=\"text\" class=\"form-control\" id='montantt' value=\"\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"ice\">ICE:</label>
                    <input type=\"number\" class=\"form-control\" id=\"ice\" maxlength=\"15\" placeholder=\"15 Chiffres\">
                </div>
                            </div>
            <button class=\"btn btn-primary mb-4 float-right \" id=\"add_detaille\"><i class=\"fas fa-plus\"></i> Ajouter</button>
            <button class=\"btn btn-danger mb-4 mr-4 float-right\" id=\"delete_detaille\"><i class=\"fas fa-window-close\"></i> Desactiver Tout</button>
            <table class=\"table table-fee table_detaille_facture\">
                <thead>
                    <tr>
                        <th scope=\"col\">Ord</th>
                        <th scope=\"col\" style=\"width:25rem\">Designation</th>
                        <th scope=\"col\">Organisme</th>
                        <th scope=\"col\">Montant</th>
                        <th scope=\"col\">Remise</th>
                        <th scope=\"col\" id='detaille_active'>Desactive</th>
                    </tr>
                </thead>
                <tbody >
                </tbody>
              </table>

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
        return "facture/modals/detail_facture.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"detail_facture_modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal-facture\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Detaille Facture</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
            <div class=\"row mb-4 \" id=\"add\">
                <div class=\"col-md-4\" id=\"orgDiv\">
                    <label for=\"organismeType\">Organisme (*):</label>
                    <select class=\"form-control\" name=\"organismeType\" id=\"organismeType\">
                      <option value=\"\">Choix Organisme</option>
                      <option value=\"Payant\">Payant</option>
                      <option value=\"Organisme\">Organisme</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"frais\">Frais (*):</label>
                    <select class=\"form-control\" name=\"frais\" id=\"frais\">
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"montant\">Montant(*):</label>
                    <input type=\"text\" class=\"form-control\" id='montantt' value=\"\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"ice\">ICE:</label>
                    <input type=\"number\" class=\"form-control\" id=\"ice\" maxlength=\"15\" placeholder=\"15 Chiffres\">
                </div>
                {# <div class=\"col-md-6\">
                    <label> Type Organisme:</label><br> 
                    <input type=\"radio\" name=\"organ\" id=\"organ\" value=\"1\" checked=\"\"> 
                    <label style=\"margin:5px\" for=\"organ\"> Payant </label>  
                    <input type=\"radio\" name=\"organ\" id=\"norgan\" value=\"0\"> 
                    <label style=\"margin: 0px 5px 0px 0px;\"  for=\"norgan\"> Organisme </label>  
                </div>
                <div class=\"col-md-6 select-organ\">
                  <label for=\"org\">Organisme (*)</label>
                  <select class=\"form-control\" name=\"org\" id=\"org\">
                  </select>
                </div> #}
            </div>
            <button class=\"btn btn-primary mb-4 float-right \" id=\"add_detaille\"><i class=\"fas fa-plus\"></i> Ajouter</button>
            <button class=\"btn btn-danger mb-4 mr-4 float-right\" id=\"delete_detaille\"><i class=\"fas fa-window-close\"></i> Desactiver Tout</button>
            <table class=\"table table-fee table_detaille_facture\">
                <thead>
                    <tr>
                        <th scope=\"col\">Ord</th>
                        <th scope=\"col\" style=\"width:25rem\">Designation</th>
                        <th scope=\"col\">Organisme</th>
                        <th scope=\"col\">Montant</th>
                        <th scope=\"col\">Remise</th>
                        <th scope=\"col\" id='detaille_active'>Desactive</th>
                    </tr>
                </thead>
                <tbody >
                </tbody>
              </table>

      </div>



    </div>
  </div>
</div>", "facture/modals/detail_facture.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\modals\\detail_facture.html.twig");
    }
}
