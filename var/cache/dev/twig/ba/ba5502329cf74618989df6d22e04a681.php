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

/* facture/modals/annuler_reglement.html.twig */
class __TwigTemplate_20423c805ede4b054a21e6fcac7677ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/annuler_reglement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/modals/annuler_reglement.html.twig"));

        yield "<div class=\"modal\" role=\"dialog\" id=\"annuler_reglement_modal\" aria-modal=\"true\" >
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Anuller Plannification</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
          <div class=\"form-group\">
            <label>Motif Annulation</label>
            <select class=\"form-control\" name=\"motif_annuler\" id=\"motif_annuler\">
                <option value=\"\" selected>Choix de motif</option>
                <option value=\"Basculement universitaire\">Basculement universitaire</option>
                <option value=\"Chèque remplacer par virement\">Chèque remplacer par virement</option>
                <option value=\"Chéque remplacer par versement\">Chéque remplacer par versement</option>
                <option value=\"Chéque remplacer par chèque\">Chéque remplacer par chèque</option>
                <option value=\"Transfert à l'hébergement\">Transfert à l'hébergement</option>
                <option value=\"Objet de remboursement\">Objet de remboursement</option>
                <option value=\"Autre\">Autre</option>
            </select>
          </div>
          <button class=\"btn btn-danger\" type=\"submit\" id=\"Annuler_reglement\"><i class=\"fas fa-times-circle\"></i> Anuuler</button>
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
        return "facture/modals/annuler_reglement.html.twig";
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
        return new Source("<div class=\"modal\" role=\"dialog\" id=\"annuler_reglement_modal\" aria-modal=\"true\" >
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Anuller Plannification</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <div class=\"modal-body\">
          <div class=\"form-group\">
            <label>Motif Annulation</label>
            <select class=\"form-control\" name=\"motif_annuler\" id=\"motif_annuler\">
                <option value=\"\" selected>Choix de motif</option>
                <option value=\"Basculement universitaire\">Basculement universitaire</option>
                <option value=\"Chèque remplacer par virement\">Chèque remplacer par virement</option>
                <option value=\"Chéque remplacer par versement\">Chéque remplacer par versement</option>
                <option value=\"Chéque remplacer par chèque\">Chéque remplacer par chèque</option>
                <option value=\"Transfert à l'hébergement\">Transfert à l'hébergement</option>
                <option value=\"Objet de remboursement\">Objet de remboursement</option>
                <option value=\"Autre\">Autre</option>
            </select>
          </div>
          <button class=\"btn btn-danger\" type=\"submit\" id=\"Annuler_reglement\"><i class=\"fas fa-times-circle\"></i> Anuuler</button>
      </div>
    </div>
  </div>
</div>", "facture/modals/annuler_reglement.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\facture\\modals\\annuler_reglement.html.twig");
    }
}
