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

/* inc/nationalite.html.twig */
class __TwigTemplate_f9c0bd37a0601dffc7c9cc702aa7c87d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/nationalite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/nationalite.html.twig"));

        // line 1
        $context["natinalites"] = ["Afghane", "Albanaise", "Algérienne", "Américaine", "Andorrane", "Angolaise", "Anguillaise", "Antiguaise et Barbudienne", "Argentine", "Arménienne", "Arubaise", "Australienne", "Autrichienne", "Azérie", "Bahaméenne", "Bahreïnienne", "Bangladaise", "Barbadienne", "Biélorusse", "Belge", "Bélizienne", "Béninoise", "Bermudienne", "Bhoutanaise", "Bolivienne", "Bonaire", "Bosniaque", "Botswanaise", "Brésilienne", "Britannique", "Brunéienne", "Bulgare", "Burkinabé", "Burundaise", "Cambodgienne", "Camerounaise", "Canadienne", "Canarienne", "Cap-Verdienne", "Caïmanaise", "Centrafricaine", "Tchadiene", "Anglo-Normande", "Chilienne", "Chinoise", "Christmas", "Cocosienne", "Colombienne", "Comorienne", "Congolaise", "Cookienne", "Costaricienne", "Ivoirienne", "Croate", "Cubaine", "Curaçao", "Chypriote", "Tchèque", "Danoise", "Djiboutienne", "Dominicaine", "Dominicaine", "Timoraise", "Équatorienne", "Égyptienne", "Salvadorienne", "Équato-guinéenne", "Érythréenne", "Estonienne", "Éthiopienne", "Malouine", "Féroïenne", "Fidjienne", "Finlandaise", "Française", "Française", "Française", "Française", "Gabonaise", "Gambienne", "Géorgienne", "Allemande", "Ghanéene", "Gibraltarienne", "Britannique", "Grecque", "Groenlandaise", "Grenadienne", "Guadeloupéene", "Guamanienne", "Guatémaltèque", "Guinéenne", "Guyanaise", "Haïtienne", "Hawaïenne", "Hondurienne", "Hongkongaise", "Hongroise", "Islandaise", "Indonésienne", "Indienne", "Iranienne", "Irakienne", "Irlandaise", "Manx", "Italienne", "Jamaïcaine", "Japonaise", "Jordanienne", "Kazakhe", "Kényane", "Kiribatienne", "Nord-Coréenne", "Sud-Coréenne", "Koweïtienne", "Kirghize", "Laotienne", "Lettone", "Libanaise", "Lesothane", "Libérienne", "Libyenne", "Liechtensteinoise", "Lituanienbne", "Luxembourgeoise", "Macanaise", "Macédonienne", "Malgache", "Malaisienne", "Malawienne", "Maldivienne", "Malienne", "Maltaise", "Marshallaise", "Martiniquaise", "Mauritanienne", "Mauricienne", "Mahoraise", "Mexicaine", "Midway", "Moldave", "Monégasque", "Mongole", "Montserratan", "Marocainne", "Mozambicaine", "Birmane", "Namibienne", "Nauruane", "Népalaise", "Néerlandaise", "Néerlandaise", "Saint-Christophe-et-Niévès", "Néo-Calédonienne", "Néo-Zélandaise", "Nicaraguayenne", "Nigérienne", "Nigériane", "Niuéene", "Norfolkienne", "Norvégienne", "Omanaise", "Pakistanaise", "Paluan", "Palestinienne", "Panaméenne", "Papouan-Néo-Guinéenne", "Paraguayenne", "Péruvienne", "Philippine", "Pitcairnienne", "Polonaise", "Portugaise", "Portoricaine", "Qatarienne", "Monténégrine", "Serbe", "Réunionnaise", "Roumaine", "Russe", "Rwandaise", "Saint-Barthélémy", "Saint-Eustachien", "Saint-Hélène", "Saint-Christophe-et-Niévésien", "Saint-Lucienne", "Saint-Martinoise", "Saint-Pierraise et Miquelonnaise", "Saint-Vincentaise et Grenadine", "Saipanaise", "Samoane", "Américaine", "Saint-Marinaise", "Santoméene", "Saoudienne", "Sénégalaise", "Seychelloise", "Sierra-Léonaise", "Singapourienne", "Slovaque", "Slovène", "Salomonaise", "Somalienne", "Sud-Africaine", "Espagnole", "Sri-Lankaise", "Soudanaise", "Surinamienne", "Swazie", "Suédoise", "Suisse", "Syrienne", "Tahitienne", "Taïwanaise", "Tadjike", "Tanzanienne", "Thaïlandaise", "Togolaise", "Tokelauan", "Tongienne", "Trinidadienne et Tobagonienne", "Tunisienne", "Turque", "Turkmène", "Turque-et-Caïques", "Tuvaluane", "Ougandaise", "Britannique", "Ukrainienne", "Émiratie", "Américaine", "Uruguayenne", "Ouzbèke", "Vanuatuane", "Vaticanaise", "Vénézuélienne", "Vietnamienne", "Britannique", "Américaine", "Wake", "Wallisienne et Futunienne", "Yéménite", "Zaïroise", "Zambienne", "Zimbabwéenne"];
        // line 2
        yield "<select class=\"form-control\" type=\"text\" name=\"nationalite\" placeholder=\"Nationalite\">
    <option value=\"\" selected>Choix Nationalite</option>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["natinalites"]) || array_key_exists("natinalites", $context) ? $context["natinalites"] : (function () { throw new RuntimeError('Variable "natinalites" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["natinalite"]) {
            // line 5
            yield "        <option value=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["natinalite"], "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["natinalite"], "html", null, true);
            yield "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['natinalite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "    ";
        // line 252
        yield "</select>
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
        return "inc/nationalite.html.twig";
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
        return array (  67 => 252,  65 => 7,  54 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set natinalites = ['Afghane','Albanaise','Algérienne','Américaine','Andorrane','Angolaise','Anguillaise','Antiguaise et Barbudienne','Argentine','Arménienne','Arubaise','Australienne','Autrichienne','Azérie','Bahaméenne','Bahreïnienne','Bangladaise','Barbadienne','Biélorusse','Belge','Bélizienne','Béninoise','Bermudienne','Bhoutanaise','Bolivienne','Bonaire','Bosniaque','Botswanaise','Brésilienne','Britannique','Brunéienne','Bulgare','Burkinabé','Burundaise','Cambodgienne','Camerounaise','Canadienne','Canarienne','Cap-Verdienne','Caïmanaise','Centrafricaine','Tchadiene','Anglo-Normande','Chilienne','Chinoise','Christmas','Cocosienne','Colombienne','Comorienne','Congolaise','Cookienne','Costaricienne','Ivoirienne','Croate','Cubaine','Curaçao','Chypriote','Tchèque','Danoise','Djiboutienne','Dominicaine','Dominicaine','Timoraise','Équatorienne','Égyptienne','Salvadorienne','Équato-guinéenne','Érythréenne','Estonienne','Éthiopienne','Malouine','Féroïenne','Fidjienne','Finlandaise','Française','Française','Française','Française','Gabonaise','Gambienne','Géorgienne','Allemande','Ghanéene','Gibraltarienne','Britannique','Grecque','Groenlandaise','Grenadienne','Guadeloupéene','Guamanienne','Guatémaltèque','Guinéenne','Guyanaise','Haïtienne','Hawaïenne','Hondurienne','Hongkongaise','Hongroise','Islandaise','Indonésienne','Indienne','Iranienne','Irakienne','Irlandaise','Manx','Italienne','Jamaïcaine','Japonaise','Jordanienne','Kazakhe','Kényane','Kiribatienne','Nord-Coréenne','Sud-Coréenne','Koweïtienne','Kirghize','Laotienne','Lettone','Libanaise','Lesothane','Libérienne','Libyenne','Liechtensteinoise','Lituanienbne','Luxembourgeoise','Macanaise','Macédonienne','Malgache','Malaisienne','Malawienne','Maldivienne','Malienne','Maltaise','Marshallaise','Martiniquaise','Mauritanienne','Mauricienne','Mahoraise','Mexicaine','Midway','Moldave','Monégasque','Mongole','Montserratan','Marocainne','Mozambicaine','Birmane','Namibienne','Nauruane','Népalaise','Néerlandaise','Néerlandaise','Saint-Christophe-et-Niévès','Néo-Calédonienne','Néo-Zélandaise','Nicaraguayenne','Nigérienne','Nigériane','Niuéene','Norfolkienne','Norvégienne','Omanaise','Pakistanaise','Paluan','Palestinienne','Panaméenne','Papouan-Néo-Guinéenne','Paraguayenne','Péruvienne','Philippine','Pitcairnienne','Polonaise','Portugaise','Portoricaine','Qatarienne','Monténégrine','Serbe','Réunionnaise','Roumaine','Russe','Rwandaise','Saint-Barthélémy','Saint-Eustachien','Saint-Hélène','Saint-Christophe-et-Niévésien','Saint-Lucienne','Saint-Martinoise','Saint-Pierraise et Miquelonnaise','Saint-Vincentaise et Grenadine','Saipanaise','Samoane','Américaine','Saint-Marinaise','Santoméene','Saoudienne','Sénégalaise','Seychelloise','Sierra-Léonaise','Singapourienne','Slovaque','Slovène','Salomonaise','Somalienne','Sud-Africaine','Espagnole','Sri-Lankaise','Soudanaise','Surinamienne','Swazie','Suédoise','Suisse','Syrienne','Tahitienne','Taïwanaise','Tadjike','Tanzanienne','Thaïlandaise','Togolaise','Tokelauan','Tongienne','Trinidadienne et Tobagonienne','Tunisienne','Turque','Turkmène','Turque-et-Caïques','Tuvaluane','Ougandaise','Britannique','Ukrainienne','Émiratie','Américaine','Uruguayenne','Ouzbèke','Vanuatuane','Vaticanaise','Vénézuélienne','Vietnamienne','Britannique','Américaine','Wake','Wallisienne et Futunienne','Yéménite','Zaïroise','Zambienne','Zimbabwéenne'] %}
<select class=\"form-control\" type=\"text\" name=\"nationalite\" placeholder=\"Nationalite\">
    <option value=\"\" selected>Choix Nationalite</option>
    {% for natinalite in natinalites %}
        <option value={{natinalite}}>{{natinalite}}</option>
    {% endfor %}
    {# <option value=\"Afganistan\">Afghanistan</option>
    <option value=\"Albania\">Albania</option>
    <option value=\"Algeria\">Algeria</option>
    <option value=\"American Samoa\">American Samoa</option>
    <option value=\"Andorra\">Andorra</option>
    <option value=\"Angola\">Angola</option>
    <option value=\"Anguilla\">Anguilla</option>
    <option value=\"Antigua Barbuda\">Antigua Barbuda</option>
    <option value=\"Argentina\">Argentina</option>
    <option value=\"Armenia\">Armenia</option>
    <option value=\"Aruba\">Aruba</option>
    <option value=\"Australia\">Australia</option>
    <option value=\"Austria\">Austria</option>
    <option value=\"Azerbaijan\">Azerbaijan</option>
    <option value=\"Bahamas\">Bahamas</option>
    <option value=\"Bahrain\">Bahrain</option>
    <option value=\"Bangladesh\">Bangladesh</option>
    <option value=\"Barbados\">Barbados</option>
    <option value=\"Belarus\">Belarus</option>
    <option value=\"Belgium\">Belgium</option>
    <option value=\"Belize\">Belize</option>
    <option value=\"Benin\">Benin</option>
    <option value=\"Bermuda\">Bermuda</option>
    <option value=\"Bhutan\">Bhutan</option>
    <option value=\"Bolivia\">Bolivia</option>
    <option value=\"Bonaire\">Bonaire</option>
    <option value=\"Bosnia Herzegovina\">Bosnia Herzegovina</option>
    <option value=\"Botswana\">Botswana</option>
    <option value=\"Brazil\">Brazil</option>
    <option value=\"British Indian Ocean Ter\">British Indian Ocean Ter</option>
    <option value=\"Brunei\">Brunei</option>
    <option value=\"Bulgaria\">Bulgaria</option>
    <option value=\"Burkina Faso\">Burkina Faso</option>
    <option value=\"Burundi\">Burundi</option>
    <option value=\"Cambodia\">Cambodia</option>
    <option value=\"Cameroon\">Cameroon</option>
    <option value=\"Canada\">Canada</option>
    <option value=\"Canary Islands\">Canary Islands</option>
    <option value=\"Cape Verde\">Cape Verde</option>
    <option value=\"Cayman Islands\">Cayman Islands</option>
    <option value=\"Central African Republic\">Central African Republic</option>
    <option value=\"Chad\">Chad</option>
    <option value=\"Channel Islands\">Channel Islands</option>
    <option value=\"Chile\">Chile</option>
    <option value=\"China\">China</option>
    <option value=\"Christmas Island\">Christmas Island</option>
    <option value=\"Cocos Island\">Cocos Island</option>
    <option value=\"Colombia\">Colombia</option>
    <option value=\"Comoros\">Comoros</option>
    <option value=\"Congo\">Congo</option>
    <option value=\"Cook Islands\">Cook Islands</option>
    <option value=\"Costa Rica\">Costa Rica</option>
    <option value=\"Cote DIvoire\">Cote DIvoire</option>
    <option value=\"Croatia\">Croatia</option>
    <option value=\"Cuba\">Cuba</option>
    <option value=\"Curaco\">Curacao</option>
    <option value=\"Cyprus\">Cyprus</option>
    <option value=\"Czech Republic\">Czech Republic</option>
    <option value=\"Denmark\">Denmark</option>
    <option value=\"Djibouti\">Djibouti</option>
    <option value=\"Dominica\">Dominica</option>
    <option value=\"Dominican Republic\">Dominican Republic</option>
    <option value=\"East Timor\">East Timor</option>
    <option value=\"Ecuador\">Ecuador</option>
    <option value=\"Egypt\">Egypt</option>
    <option value=\"El Salvador\">El Salvador</option>
    <option value=\"Equatorial Guinea\">Equatorial Guinea</option>
    <option value=\"Eritrea\">Eritrea</option>
    <option value=\"Estonia\">Estonia</option>
    <option value=\"Ethiopia\">Ethiopia</option>
    <option value=\"Falkland Islands\">Falkland Islands</option>
    <option value=\"Faroe Islands\">Faroe Islands</option>
    <option value=\"Fiji\">Fiji</option>
    <option value=\"Finland\">Finland</option>
    <option value=\"France\">France</option>
    <option value=\"French Guiana\">French Guiana</option>
    <option value=\"French Polynesia\">French Polynesia</option>
    <option value=\"French Southern Ter\">French Southern Ter</option>
    <option value=\"Gabon\">Gabon</option>
    <option value=\"Gambia\">Gambia</option>
    <option value=\"Georgia\">Georgia</option>
    <option value=\"Germany\">Germany</option>
    <option value=\"Ghana\">Ghana</option>
    <option value=\"Gibraltar\">Gibraltar</option>
    <option value=\"Great Britain\">Great Britain</option>
    <option value=\"Greece\">Greece</option>
    <option value=\"Greenland\">Greenland</option>
    <option value=\"Grenada\">Grenada</option>
    <option value=\"Guadeloupe\">Guadeloupe</option>
    <option value=\"Guam\">Guam</option>
    <option value=\"Guatemala\">Guatemala</option>
    <option value=\"Guinea\">Guinea</option>
    <option value=\"Guyana\">Guyana</option>
    <option value=\"Haiti\">Haiti</option>
    <option value=\"Hawaii\">Hawaii</option>
    <option value=\"Honduras\">Honduras</option>
    <option value=\"Hong Kong\">Hong Kong</option>
    <option value=\"Hungary\">Hungary</option>
    <option value=\"Iceland\">Iceland</option>
    <option value=\"Indonesia\">Indonesia</option>
    <option value=\"India\">India</option>
    <option value=\"Iran\">Iran</option>
    <option value=\"Iraq\">Iraq</option>
    <option value=\"Ireland\">Ireland</option>
    <option value=\"Isle of Man\">Isle of Man</option>
    <option value=\"Italy\">Italy</option>
    <option value=\"Jamaica\">Jamaica</option>
    <option value=\"Japan\">Japan</option>
    <option value=\"Jordan\">Jordan</option>
    <option value=\"Kazakhstan\">Kazakhstan</option>
    <option value=\"Kenya\">Kenya</option>
    <option value=\"Kiribati\">Kiribati</option>
    <option value=\"Korea North\">Korea North</option>
    <option value=\"Korea Sout\">Korea South</option>
    <option value=\"Kuwait\">Kuwait</option>
    <option value=\"Kyrgyzstan\">Kyrgyzstan</option>
    <option value=\"Laos\">Laos</option>
    <option value=\"Latvia\">Latvia</option>
    <option value=\"Lebanon\">Lebanon</option>
    <option value=\"Lesotho\">Lesotho</option>
    <option value=\"Liberia\">Liberia</option>
    <option value=\"Libya\">Libya</option>
    <option value=\"Liechtenstein\">Liechtenstein</option>
    <option value=\"Lithuania\">Lithuania</option>
    <option value=\"Luxembourg\">Luxembourg</option>
    <option value=\"Macau\">Macau</option>
    <option value=\"Macedonia\">Macedonia</option>
    <option value=\"Madagascar\">Madagascar</option>
    <option value=\"Malaysia\">Malaysia</option>
    <option value=\"Malawi\">Malawi</option>
    <option value=\"Maldives\">Maldives</option>
    <option value=\"Mali\">Mali</option>
    <option value=\"Malta\">Malta</option>
    <option value=\"Marshall Islands\">Marshall Islands</option>
    <option value=\"Martinique\">Martinique</option>
    <option value=\"Mauritania\">Mauritania</option>
    <option value=\"Mauritius\">Mauritius</option>
    <option value=\"Mayotte\">Mayotte</option>
    <option value=\"Mexico\">Mexico</option>
    <option value=\"Midway Islands\">Midway Islands</option>
    <option value=\"Moldova\">Moldova</option>
    <option value=\"Monaco\">Monaco</option>
    <option value=\"Mongolia\">Mongolia</option>
    <option value=\"Montserrat\">Montserrat</option>
    <option value=\"Morocco\">Morocco</option>
    <option value=\"Mozambique\">Mozambique</option>
    <option value=\"Myanmar\">Myanmar</option>
    <option value=\"Nambia\">Nambia</option>
    <option value=\"Nauru\">Nauru</option>
    <option value=\"Nepal\">Nepal</option>
    <option value=\"Netherland Antilles\">Netherland Antilles</option>
    <option value=\"Netherlands\">Netherlands (Holland, Europe)</option>
    <option value=\"Nevis\">Nevis</option>
    <option value=\"New Caledonia\">New Caledonia</option>
    <option value=\"New Zealand\">New Zealand</option>
    <option value=\"Nicaragua\">Nicaragua</option>
    <option value=\"Niger\">Niger</option>
    <option value=\"Nigeria\">Nigeria</option>
    <option value=\"Niue\">Niue</option>
    <option value=\"Norfolk Island\">Norfolk Island</option>
    <option value=\"Norway\">Norway</option>
    <option value=\"Oman\">Oman</option>
    <option value=\"Pakistan\">Pakistan</option>
    <option value=\"Palau Island\">Palau Island</option>
    <option value=\"Palestine\">Palestine</option>
    <option value=\"Panama\">Panama</option>
    <option value=\"Papua New Guinea\">Papua New Guinea</option>
    <option value=\"Paraguay\">Paraguay</option>
    <option value=\"Peru\">Peru</option>
    <option value=\"Phillipines\">Philippines</option>
    <option value=\"Pitcairn Island\">Pitcairn Island</option>
    <option value=\"Poland\">Poland</option>
    <option value=\"Portugal\">Portugal</option>
    <option value=\"Puerto Rico\">Puerto Rico</option>
    <option value=\"Qatar\">Qatar</option>
    <option value=\"Republic of Montenegro\">Republic of Montenegro</option>
    <option value=\"Republic of Serbia\">Republic of Serbia</option>
    <option value=\"Reunion\">Reunion</option>
    <option value=\"Romania\">Romania</option>
    <option value=\"Russia\">Russia</option>
    <option value=\"Rwanda\">Rwanda</option>
    <option value=\"St Barthelemy\">St Barthelemy</option>
    <option value=\"St Eustatius\">St Eustatius</option>
    <option value=\"St Helena\">St Helena</option>
    <option value=\"St Kitts-Nevis\">St Kitts-Nevis</option>
    <option value=\"St Lucia\">St Lucia</option>
    <option value=\"St Maarten\">St Maarten</option>
    <option value=\"St Pierre Miquelon\">St Pierre Miquelon</option>
    <option value=\"St Vincent Grenadines\">St Vincent Grenadines</option>
    <option value=\"Saipan\">Saipan</option>
    <option value=\"Samoa\">Samoa</option>
    <option value=\"Samoa American\">Samoa American</option>
    <option value=\"San Marino\">San Marino</option>
    <option value=\"Sao Tome Principe\">Sao Tome Principe</option>
    <option value=\"Saudi Arabia\">Saudi Arabia</option>
    <option value=\"Senegal\">Senegal</option>
    <option value=\"Seychelles\">Seychelles</option>
    <option value=\"Sierra Leone\">Sierra Leone</option>
    <option value=\"Singapore\">Singapore</option>
    <option value=\"Slovakia\">Slovakia</option>
    <option value=\"Slovenia\">Slovenia</option>
    <option value=\"Solomon Islands\">Solomon Islands</option>
    <option value=\"Somalia\">Somalia</option>
    <option value=\"South Africa\">South Africa</option>
    <option value=\"Spain\">Spain</option>
    <option value=\"Sri Lanka\">Sri Lanka</option>
    <option value=\"Sudan\">Sudan</option>
    <option value=\"Suriname\">Suriname</option>
    <option value=\"Swaziland\">Swaziland</option>
    <option value=\"Sweden\">Sweden</option>
    <option value=\"Switzerland\">Switzerland</option>
    <option value=\"Syria\">Syria</option>
    <option value=\"Tahiti\">Tahiti</option>
    <option value=\"Taiwan\">Taiwan</option>
    <option value=\"Tajikistan\">Tajikistan</option>
    <option value=\"Tanzania\">Tanzania</option>
    <option value=\"Thailand\">Thailand</option>
    <option value=\"Togo\">Togo</option>
    <option value=\"Tokelau\">Tokelau</option>
    <option value=\"Tonga\">Tonga</option>
    <option value=\"Trinidad Tobago\">Trinidad Tobago</option>
    <option value=\"Tunisia\">Tunisia</option>
    <option value=\"Turkey\">Turkey</option>
    <option value=\"Turkmenistan\">Turkmenistan</option>
    <option value=\"Turks Caicos Is\">Turks Caicos Is</option>
    <option value=\"Tuvalu\">Tuvalu</option>
    <option value=\"Uganda\">Uganda</option>
    <option value=\"United Kingdom\">United Kingdom</option>
    <option value=\"Ukraine\">Ukraine</option>
    <option value=\"United Arab Erimates\">United Arab Emirates</option>
    <option value=\"United States of America\">United States of America</option>
    <option value=\"Uraguay\">Uruguay</option>
    <option value=\"Uzbekistan\">Uzbekistan</option>
    <option value=\"Vanuatu\">Vanuatu</option>
    <option value=\"Vatican City State\">Vatican City State</option>
    <option value=\"Venezuela\">Venezuela</option>
    <option value=\"Vietnam\">Vietnam</option>
    <option value=\"Virgin Islands (Brit)\">Virgin Islands (Brit)</option>
    <option value=\"Virgin Islands (USA)\">Virgin Islands (USA)</option>
    <option value=\"Wake Island\">Wake Island</option>
    <option value=\"Wallis Futana Is\">Wallis Futana Is</option>
    <option value=\"Yemen\">Yemen</option>
    <option value=\"Zaire\">Zaire</option>
    <option value=\"Zambia\">Zambia</option>
    <option value=\"Zimbabwe\">Zimbabwe</option> #}
</select>
", "inc/nationalite.html.twig", "C:\\xampp\\htdocs\\all\\hebergement\\templates\\inc\\nationalite.html.twig");
    }
}
