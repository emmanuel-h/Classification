<?php

/* LIFOClassifBundle:Platform:tessonModifie.html.twig */
class __TwigTemplate_214a158b7aca69a0f72324bdd1dab61bfbb9d6570080b121e531d47294540dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:tessonModifie.html.twig", 1);
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
        $__internal_cfb2516f7c33ee495c13f579e21e1889a2b82905977c285c5b1e7ac1a895e8a9 = $this->env->getExtension("native_profiler");
        $__internal_cfb2516f7c33ee495c13f579e21e1889a2b82905977c285c5b1e7ac1a895e8a9->enter($__internal_cfb2516f7c33ee495c13f579e21e1889a2b82905977c285c5b1e7ac1a895e8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tessonModifie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb2516f7c33ee495c13f579e21e1889a2b82905977c285c5b1e7ac1a895e8a9->leave($__internal_cfb2516f7c33ee495c13f579e21e1889a2b82905977c285c5b1e7ac1a895e8a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_243710d8f9a0c098dda52572afa4e48b381d71c17c04865af3e90e184c603bec = $this->env->getExtension("native_profiler");
        $__internal_243710d8f9a0c098dda52572afa4e48b381d71c17c04865af3e90e184c603bec->enter($__internal_243710d8f9a0c098dda52572afa4e48b381d71c17c04865af3e90e184c603bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_243710d8f9a0c098dda52572afa4e48b381d71c17c04865af3e90e184c603bec->leave($__internal_243710d8f9a0c098dda52572afa4e48b381d71c17c04865af3e90e184c603bec_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_37b967e2de13741d13df72f934ddeb3b429af547c5a48ba37c871f60fd746677 = $this->env->getExtension("native_profiler");
        $__internal_37b967e2de13741d13df72f934ddeb3b429af547c5a48ba37c871f60fd746677->enter($__internal_37b967e2de13741d13df72f934ddeb3b429af547c5a48ba37c871f60fd746677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
";
        // line 7
        if (((isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")) != "")) {
            // line 8
            echo "<div class=\"alert alert-warning\" role=\"alert\">
\t<strong>Attention ! </strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
            echo "
</div>
";
        }
        // line 12
        echo "
<div class=\"well\">
  ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 17
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Année de la découverte"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Développé"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "lot/Individu"));
        echo "
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro de tombe"));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Fait"));
        echo "
    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Largeur"));
        echo "
    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  </div>
    <div class=\"col-sm-9\">
      ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Longueur"));
        echo "
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Commentaire"));
        echo "
    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs verticaux"));
        echo "
    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs horizontaux"));
        echo "
    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro d'isolation"));
        echo "
    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <fieldset>
  <legend></legend>
  ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "decor", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
  ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeDecor", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
\t";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerisation", array()), 'row');
        echo "
  <a href=\"#\" id=\"add_numerisation\" class=\"btn btn-default\">Ajouter une numérisation</a>
</fieldset>
<br/>
  <fieldset>
  <legend></legend>
  ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), 'row');
        echo "
  </fieldset>
  <br/>
  <br/>

  ";
        // line 150
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 154
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 157
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>







<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

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
        
        $__internal_37b967e2de13741d13df72f934ddeb3b429af547c5a48ba37c871f60fd746677->leave($__internal_37b967e2de13741d13df72f934ddeb3b429af547c5a48ba37c871f60fd746677_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tessonModifie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 157,  357 => 154,  351 => 150,  343 => 144,  334 => 138,  327 => 134,  320 => 130,  313 => 126,  306 => 122,  299 => 118,  292 => 114,  285 => 110,  277 => 105,  272 => 103,  268 => 102,  261 => 98,  255 => 95,  250 => 93,  246 => 92,  239 => 88,  233 => 85,  228 => 83,  224 => 82,  217 => 78,  212 => 76,  208 => 75,  201 => 71,  195 => 68,  190 => 66,  186 => 65,  179 => 61,  173 => 58,  168 => 56,  164 => 55,  157 => 51,  152 => 49,  148 => 48,  141 => 44,  136 => 42,  132 => 41,  125 => 37,  120 => 35,  116 => 34,  109 => 30,  104 => 28,  100 => 27,  93 => 23,  88 => 21,  84 => 20,  77 => 17,  72 => 14,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* {%  if messageImportant != "" %}*/
/* <div class="alert alert-warning" role="alert">*/
/* 	<strong>Attention ! </strong>{{messageImportant}}*/
/* </div>*/
/* {%  endif %}*/
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
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
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
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
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
