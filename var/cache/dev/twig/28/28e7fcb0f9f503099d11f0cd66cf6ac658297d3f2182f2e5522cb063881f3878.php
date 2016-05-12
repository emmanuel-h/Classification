<?php

/* LIFOClassifBundle:Platform:upload.html.twig */
class __TwigTemplate_180ba4bf573390925e85048c281516c6908dfc7556968addf2f6096655740c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:upload.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42357ab86e744989424042096d32debae4ee60b4b418a084d2ac1e7aba8c17c7 = $this->env->getExtension("native_profiler");
        $__internal_42357ab86e744989424042096d32debae4ee60b4b418a084d2ac1e7aba8c17c7->enter($__internal_42357ab86e744989424042096d32debae4ee60b4b418a084d2ac1e7aba8c17c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42357ab86e744989424042096d32debae4ee60b4b418a084d2ac1e7aba8c17c7->leave($__internal_42357ab86e744989424042096d32debae4ee60b4b418a084d2ac1e7aba8c17c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3f6b2a125c7a9ca0a45cfa8fd29c9383d5c44858ef56665ef32e604da129758 = $this->env->getExtension("native_profiler");
        $__internal_b3f6b2a125c7a9ca0a45cfa8fd29c9383d5c44858ef56665ef32e604da129758->enter($__internal_b3f6b2a125c7a9ca0a45cfa8fd29c9383d5c44858ef56665ef32e604da129758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_b3f6b2a125c7a9ca0a45cfa8fd29c9383d5c44858ef56665ef32e604da129758->leave($__internal_b3f6b2a125c7a9ca0a45cfa8fd29c9383d5c44858ef56665ef32e604da129758_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_64e98051eb5fd3b1782b6624e16f73c7d7a9d5f0fdbb1c0dfafa8e3e071f4f92 = $this->env->getExtension("native_profiler");
        $__internal_64e98051eb5fd3b1782b6624e16f73c7d7a9d5f0fdbb1c0dfafa8e3e071f4f92->enter($__internal_64e98051eb5fd3b1782b6624e16f73c7d7a9d5f0fdbb1c0dfafa8e3e071f4f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "




";
        // line 12
        echo "






";
        // line 20
        echo "
<div class=\"well\">
  ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 25
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Année de la découverte"));
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Développé"));
        echo "
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "lot/Individu"));
        echo "
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro de tombe"));
        echo "
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Fait"));
        echo "
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Largeur"));
        echo "
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  </div>
    <div class=\"col-sm-9\">
      ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Longueur"));
        echo "
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Commentaire"));
        echo "
    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs verticaux"));
        echo "
    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs horizontaux"));
        echo "
    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-sm-9\">
      ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro d'isolation"));
        echo "
    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <fieldset>
\t<legend> US </legend>
  <div class=\"form-group\">
    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Description"));
        echo "
    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  </fieldset>
  <fieldset>
\t<legend> Site </legend>
  <div class=\"form-group\">
    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "CodeINSEE"));
        echo "
    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro de la commune"));
        echo "
    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  </fieldset>
  <fieldset>
  <legend>Décor</legend>
  ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "decor", array()), 'row');
        echo "
  </fieldset>
  <fieldset>
  <legend></legend>
\t";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerisation", array()), 'row');
        echo "
  <a href=\"#\" id=\"add_numerisation\" class=\"btn btn-default\">Ajouter une numérisation</a>
</fieldset>
  <br/>
  <br/>

  ";
        // line 163
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 168
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 171
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>







";
        // line 182
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 185
        echo "<script type=\"text/javascript\">
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

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addNumerisation(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire CategoryType
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

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>







";
        
        $__internal_64e98051eb5fd3b1782b6624e16f73c7d7a9d5f0fdbb1c0dfafa8e3e071f4f92->leave($__internal_64e98051eb5fd3b1782b6624e16f73c7d7a9d5f0fdbb1c0dfafa8e3e071f4f92_prof);

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
        return array (  402 => 185,  398 => 182,  385 => 171,  379 => 168,  373 => 163,  364 => 156,  357 => 152,  348 => 146,  343 => 144,  339 => 143,  332 => 139,  327 => 137,  323 => 136,  313 => 129,  308 => 127,  304 => 126,  297 => 122,  292 => 120,  288 => 119,  279 => 113,  274 => 111,  270 => 110,  263 => 106,  257 => 103,  252 => 101,  248 => 100,  241 => 96,  235 => 93,  230 => 91,  226 => 90,  219 => 86,  214 => 84,  210 => 83,  203 => 79,  197 => 76,  192 => 74,  188 => 73,  181 => 69,  175 => 66,  170 => 64,  166 => 63,  159 => 59,  154 => 57,  150 => 56,  143 => 52,  138 => 50,  134 => 49,  127 => 45,  122 => 43,  118 => 42,  111 => 38,  106 => 36,  102 => 35,  95 => 31,  90 => 29,  86 => 28,  79 => 25,  74 => 22,  70 => 20,  61 => 12,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* */
/* */
/* */
/* */
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
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
/* 	<legend> US </legend>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.US.nom, "Nom", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.US.nom) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.US.nom, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.US.description, "Description", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.US.description) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.US.description, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/* 	<legend> Site </legend>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.site.codeINSEE, "CodeINSEE", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.site.codeINSEE) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.site.codeINSEE, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.site.numSiteCommune, "Numéro de la commune", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.site.numSiteCommune) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.site.numSiteCommune, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend>Décor</legend>*/
/*   {{ form_row(form.decor) }}*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   <legend></legend>*/
/* 	{{ form_row(form.numerisation)	}}*/
/*   <a href="#" id="add_numerisation" class="btn btn-default">Ajouter une numérisation</a>*/
/* </fieldset>*/
/*   <br/>*/
/*   <br/>*/
/* */
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
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
/* {# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google*/
/*    mais si vous l'avez en local, changez simplement l'adresse. #}*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/* {# Voici le script en question : #}*/
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
/*     // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).*/
/*     if (index == 0) {*/
/*       addNumerisation($container);*/
/*     } else {*/
/*       // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles*/
/*       $container.children('div').each(function() {*/
/*         addDeleteLink($(this));*/
/*       });*/
/*     }*/
/* */
/*     // La fonction qui ajoute un formulaire CategoryType*/
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
/*       // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*       addDeleteLink($prototype);*/
/* */
/*       // On ajoute le prototype modifié à la fin de la balise <div>*/
/*       $container.append($prototype);*/
/* */
/*       // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*       index++;*/
/*     }*/
/* */
/*     // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*     function addDeleteLink($prototype) {*/
/*       // Création du lien*/
/*       var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/*       // Ajout du lien*/
/*       $prototype.append($deleteLink);*/
/* */
/*       // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie*/
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
