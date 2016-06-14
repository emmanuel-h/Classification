<?php

/* LIFOClassifBundle:Platform:upload.html.twig */
class __TwigTemplate_e3c9951e46ca23e856866930e596799a13338f9973584571e169b198310075bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:upload.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"well\">
  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "anneeDecouverte", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Année de la découverte"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "anneeDecouverte", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "anneeDecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "developpe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Développé"));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "developpe", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "developpe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lotIndividu", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "lot/Individu"));
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lotIndividu", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lotIndividu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numTombe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro de tombe"));
        echo "
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numTombe", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numTombe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fait", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Fait"));
        echo "
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fait", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fait", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "largeur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Largeur"));
        echo "
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "largeur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ordreLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  </div>
    <div class=\"col-sm-9\">
      ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "largeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longueur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Longueur"));
        echo "
    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longueur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ordreLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Commentaire"));
        echo "
    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentaire", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreMotifsVerticaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs verticaux"));
        echo "
    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreMotifsVerticaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ordreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreMotifsHorizontaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs horizontaux"));
        echo "
    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreMotifsHorizontaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ordreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numIsolation", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro d'isolation"));
        echo "
    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numIsolation", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numIsolation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <fieldset>
  <legend></legend>
  ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "site", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "US", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sequence", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "periode", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phase", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "decor", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "typeDecor", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
\t";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numerisation", array()), 'row');
        echo "
  <a href=\"#\" id=\"add_numerisation\" class=\"btn btn-default\">Ajouter une numérisation</a>
</fieldset>
<br/>
  <fieldset>
  <legend></legend>
  ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tessonMolette", array()), 'row');
        echo "
  </fieldset>
  <br/>
  <br/>

  ";
        // line 144
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 148
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

  ";
        // line 151
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>







<script src=\" ";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#tesson_numerisation');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_numerisation').click(function(e) {
      addNumerisation(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un.
    if (index == 0) {
      addNumerisation(\$container);
    } else {
      // S'il existe déjà des champs on ajoute un lien de suppression pour chacune d'entre eux
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire
    function addNumerisation(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      // On ajoute au prototype un lien pour pouvoir supprimer
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>







";
    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 160,  334 => 151,  328 => 148,  322 => 144,  314 => 138,  305 => 132,  298 => 128,  291 => 124,  284 => 120,  277 => 116,  270 => 112,  263 => 108,  256 => 104,  248 => 99,  243 => 97,  239 => 96,  232 => 92,  226 => 89,  221 => 87,  217 => 86,  210 => 82,  204 => 79,  199 => 77,  195 => 76,  188 => 72,  183 => 70,  179 => 69,  172 => 65,  166 => 62,  161 => 60,  157 => 59,  150 => 55,  144 => 52,  139 => 50,  135 => 49,  128 => 45,  123 => 43,  119 => 42,  112 => 38,  107 => 36,  103 => 35,  96 => 31,  91 => 29,  87 => 28,  80 => 24,  75 => 22,  71 => 21,  64 => 17,  59 => 15,  55 => 14,  48 => 11,  43 => 8,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*   {# Les erreurs générales du formulaire. #}*/
/*   {{ form_errors(form) }}*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.anneeDecouverte, "Année de la découverte", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.anneeDecouverte) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.anneeDecouverte, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.developpe, "Développé", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.developpe) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.developpe, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.lotIndividu, "lot/Individu", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.lotIndividu) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.lotIndividu, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.numTombe, "Numéro de tombe", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.numTombe) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.numTombe, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.fait, "Fait", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.fait) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.fait, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.largeur, "Largeur", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.largeur) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreLargeur, {'attr': {'class': 'form-control'}}) }}*/
/* 	  </div>*/
/*     <div class="col-sm-9">*/
/*       {{ form_widget(form.largeur, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.longueur, "Longueur", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.longueur) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreLongueur, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*     <div class="col-sm-9">*/
/*       {{ form_widget(form.longueur, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.commentaire, "Commentaire", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.commentaire) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.commentaire, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.nombreMotifsVerticaux, "Nombre de motifs verticaux", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.nombreMotifsVerticaux) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreMotifsVerticaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*     <div class="col-sm-9">*/
/*       {{ form_widget(form.nombreMotifsVerticaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.nombreMotifsHorizontaux, "Nombre de motifs horizontaux", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.nombreMotifsHorizontaux) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreMotifsHorizontaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*     <div class="col-sm-9">*/
/*       {{ form_widget(form.nombreMotifsHorizontaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.numIsolation, "Numéro d'isolation", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.numIsolation) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.numIsolation, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.site) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.US) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.sequence) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.periode) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.phase) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.decor) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.typeDecor) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/* 	{{ form_row(form.numerisation)	}}*/
/*   <a href="#" id="add_numerisation" class="btn btn-default">Ajouter une numérisation</a>*/
/* </fieldset>*/
/* <br/>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/*   {{ form_row(form.tessonMolette) }}*/
/*   </fieldset>*/
/*   <br/>*/
/*   <br/>*/
/* */
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.enregistrer, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*   {{ form_rest(form) }}*/
/* */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* <script src=" {{ asset('bootstrap/js/jquery.min.js') }}"></script>*/
/* */
/* <script type="text/javascript">*/
/*   $(document).ready(function() {*/
/*     // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.*/
/*     var $container = $('div#tesson_numerisation');*/
/* */
/*     // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*     var index = $container.find(':input').length;*/
/* */
/*     // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*     $('#add_numerisation').click(function(e) {*/
/*       addNumerisation($container);*/
/* */
/*       e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*       return false;*/
/*     });*/
/* */
/*     // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un.*/
/*     if (index == 0) {*/
/*       addNumerisation($container);*/
/*     } else {*/
/*       // S'il existe déjà des champs on ajoute un lien de suppression pour chacune d'entre eux*/
/*       $container.children('div').each(function() {*/
/*         addDeleteLink($(this));*/
/*       });*/
/*     }*/
/* */
/*     // La fonction qui ajoute un formulaire*/
/*     function addNumerisation($container) {*/
/*       // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*       // - le texte "__name__label__" qu'il contient par le label du champ*/
/*       // - le texte "__name__" qu'il contient par le numéro du champ*/
/*       var template = $container.attr('data-prototype')*/
/*         .replace(/__name__label__/g, 'n°' + (index+1))*/
/*         .replace(/__name__/g,        index)*/
/*       ;*/
/* */
/*       // On crée un objet jquery qui contient ce template*/
/*       var $prototype = $(template);*/
/* */
/*       // On ajoute au prototype un lien pour pouvoir supprimer*/
/*       addDeleteLink($prototype);*/
/* */
/*       // On ajoute le prototype modifié à la fin de la balise <div>*/
/*       $container.append($prototype);*/
/* */
/*       // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*       index++;*/
/*     }*/
/* */
/*     // La fonction qui ajoute un lien de suppression*/
/*     function addDeleteLink($prototype) {*/
/*       // Création du lien*/
/*       var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/*       // Ajout du lien*/
/*       $prototype.append($deleteLink);*/
/* */
/*       // Ajout du listener sur le clic du lien pour effectivement supprimer*/
/*       $deleteLink.click(function(e) {*/
/*         $prototype.remove();*/
/* */
/*         e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*         return false;*/
/*       });*/
/*     }*/
/*   });*/
/* </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
