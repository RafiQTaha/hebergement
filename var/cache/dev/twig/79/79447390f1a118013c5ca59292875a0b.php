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

/* inscription/modals/frais.html.twig */
class __TwigTemplate_a1c74e26b944db0e6e972ad181707903 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/modals/frais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/modals/frais.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"frais_inscription-modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal-preins\" role=\"document\" style=\"max-width: 1100px !important\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Frais d'inscriprion</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"etudiant_info\">
          <p><span>Etablissement</span> : xx</p>
          <p><span>Formation</span> : xx</p>
          <p><span>Categorie</span> : xx</p>
          <p><span>Nom</span> : xx</p>
          <p><span>Prenom</span> : xx</p>
          <p><span>Cin</span> : xx</p>
          <p><span>Cne</span> : xx</p>
        </div>
        <div class=\"frais_info\" style=\"margin-top:1rem\">
            <h5 class=\"title-article\">Code Facture : <span id=\"code-facture\"> </span></h5>
            <div>
              <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-5\">
                            <label for=\"frais\">Frais de scolarité (*):</label>
                            <select class=\"form-control\" name=\"frais\" id=\"frais\">
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label for=\"montant\">Montant(*):</label>
                            <input type=\"text\" class=\"form-control\" id='montant'>
                        </div>
                        <div class=\"col-md-4\">
                            <label for=\"frais\">ICE:</label>
                            <input type=\"number\" class=\"form-control\" id=\"ice\" maxlength=\"15\" placeholder=\"15 Chiffres\">
                        </div>
                        <div class=\"field col-md-6\">
                            <label> Type Organisme:</label><br> 
                            <input type=\"radio\" name=\"organ\" id=\"organ\" value=\"1\" checked=\"\"> 
                            <label style=\"margin:5px\" for=\"organ\"> Payant </label>  
                            <input type=\"radio\" name=\"organ\" id=\"norgan\" value=\"0\"> 
                            <label style=\"margin: 0px 5px 0px 0px;\"  for=\"norgan\"> Organisme </label>  
                        </div>
                        <div class=\"field frais col-md-6 select-organ\">
                          <label for=\"org\">Organisme (*)</label>
                          <select class=\"form-control\" name=\"org\" id=\"org\">
                          </select>
                        </div>
                    </div>
                    <button class=\"btn btn-primary\" id=\"add_frais_gestion\"><i class=\"fas fa-plus\"></i> Ajouter</button>
                </div>
                <div class=\"col-md-6\">
                    <table class=\"table\">
                    <thead>
                        <tr>
                        <th scope=\"col\">Ord</th>
                        <th scope=\"col\">Designation</th>
                        <th scope=\"col\">Montant</th>
                        <th scope=\"col\">ICE</th>
                        <th scope=\"col\">Organisme</th>
                        <th scope=\"col\">Sup</th>
                        </tr>
                    </thead>
                    <tbody class=\"table_frais_inscription\">
                    
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        <div class=\"modal-footer\">
        <button class=\"btn btn-success\" id=\"save_frais_gestion\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
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
        return "inscription/modals/frais.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"frais_inscription-modal\" aria-modal=\"true\"> 
<div class=\"modal-dialog modal-md modal-preins\" role=\"document\" style=\"max-width: 1100px !important\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Données Frais d'inscriprion</h5>
        </hr>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> 
        <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"etudiant_info\">
          <p><span>Etablissement</span> : xx</p>
          <p><span>Formation</span> : xx</p>
          <p><span>Categorie</span> : xx</p>
          <p><span>Nom</span> : xx</p>
          <p><span>Prenom</span> : xx</p>
          <p><span>Cin</span> : xx</p>
          <p><span>Cne</span> : xx</p>
        </div>
        <div class=\"frais_info\" style=\"margin-top:1rem\">
            <h5 class=\"title-article\">Code Facture : <span id=\"code-facture\"> </span></h5>
            <div>
              <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-5\">
                            <label for=\"frais\">Frais de scolarité (*):</label>
                            <select class=\"form-control\" name=\"frais\" id=\"frais\">
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label for=\"montant\">Montant(*):</label>
                            <input type=\"text\" class=\"form-control\" id='montant'>
                        </div>
                        <div class=\"col-md-4\">
                            <label for=\"frais\">ICE:</label>
                            <input type=\"number\" class=\"form-control\" id=\"ice\" maxlength=\"15\" placeholder=\"15 Chiffres\">
                        </div>
                        <div class=\"field col-md-6\">
                            <label> Type Organisme:</label><br> 
                            <input type=\"radio\" name=\"organ\" id=\"organ\" value=\"1\" checked=\"\"> 
                            <label style=\"margin:5px\" for=\"organ\"> Payant </label>  
                            <input type=\"radio\" name=\"organ\" id=\"norgan\" value=\"0\"> 
                            <label style=\"margin: 0px 5px 0px 0px;\"  for=\"norgan\"> Organisme </label>  
                        </div>
                        <div class=\"field frais col-md-6 select-organ\">
                          <label for=\"org\">Organisme (*)</label>
                          <select class=\"form-control\" name=\"org\" id=\"org\">
                          </select>
                        </div>
                    </div>
                    <button class=\"btn btn-primary\" id=\"add_frais_gestion\"><i class=\"fas fa-plus\"></i> Ajouter</button>
                </div>
                <div class=\"col-md-6\">
                    <table class=\"table\">
                    <thead>
                        <tr>
                        <th scope=\"col\">Ord</th>
                        <th scope=\"col\">Designation</th>
                        <th scope=\"col\">Montant</th>
                        <th scope=\"col\">ICE</th>
                        <th scope=\"col\">Organisme</th>
                        <th scope=\"col\">Sup</th>
                        </tr>
                    </thead>
                    <tbody class=\"table_frais_inscription\">
                    
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        <div class=\"modal-footer\">
        <button class=\"btn btn-success\" id=\"save_frais_gestion\"><i class=\"fas fa-check-circle\"></i> Enregistre</button>
        </div>
      </div>


    </div>
  </div>
</div>", "inscription/modals/frais.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\inscription\\modals\\frais.html.twig");
    }
}
