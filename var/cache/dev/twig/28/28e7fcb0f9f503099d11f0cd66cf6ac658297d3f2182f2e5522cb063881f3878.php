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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382937cd3318d3dfe33495f84663d08254c3b3d31614d7f9dedd1192fe9d4a3b = $this->env->getExtension("native_profiler");
        $__internal_382937cd3318d3dfe33495f84663d08254c3b3d31614d7f9dedd1192fe9d4a3b->enter($__internal_382937cd3318d3dfe33495f84663d08254c3b3d31614d7f9dedd1192fe9d4a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382937cd3318d3dfe33495f84663d08254c3b3d31614d7f9dedd1192fe9d4a3b->leave($__internal_382937cd3318d3dfe33495f84663d08254c3b3d31614d7f9dedd1192fe9d4a3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53467dafa1b0d0d2fba801359f367285930f0134f6bae6f9756a9b4ba5dfb328 = $this->env->getExtension("native_profiler");
        $__internal_53467dafa1b0d0d2fba801359f367285930f0134f6bae6f9756a9b4ba5dfb328->enter($__internal_53467dafa1b0d0d2fba801359f367285930f0134f6bae6f9756a9b4ba5dfb328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_53467dafa1b0d0d2fba801359f367285930f0134f6bae6f9756a9b4ba5dfb328->leave($__internal_53467dafa1b0d0d2fba801359f367285930f0134f6bae6f9756a9b4ba5dfb328_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48119289508e6cfc7fbab307f2bb993e9bc640b89be53401b367ee99e8ec4cb5 = $this->env->getExtension("native_profiler");
        $__internal_48119289508e6cfc7fbab307f2bb993e9bc640b89be53401b367ee99e8ec4cb5->enter($__internal_48119289508e6cfc7fbab307f2bb993e9bc640b89be53401b367ee99e8ec4cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t
\t

<h3>Tesson</h3>

<div class=\"well\">
  ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 16
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Année de découverte"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Developpé"));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Lot / Individu"));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro de tombe"));
        echo "
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Fait"));
        echo "
    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Largeur"));
        echo "
    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
\t<div class=\"col-sm-1\">
      ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  <div class=\"form-group\">
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Longueur"));
        echo "
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
\t<div class=\"col-sm-1\">
      ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  <div class=\"form-group\">
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Commentaires"));
        echo "
    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
    <div class=\"col-sm-2\">
      ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs verticaux"));
        echo "
    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de motifs horizontaux"));
        echo "
    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 100
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 103
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_48119289508e6cfc7fbab307f2bb993e9bc640b89be53401b367ee99e8ec4cb5->leave($__internal_48119289508e6cfc7fbab307f2bb993e9bc640b89be53401b367ee99e8ec4cb5_prof);

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
        return array (  260 => 103,  254 => 100,  249 => 95,  242 => 91,  237 => 89,  233 => 88,  226 => 84,  221 => 82,  217 => 81,  210 => 77,  205 => 75,  201 => 74,  194 => 70,  188 => 67,  183 => 65,  179 => 64,  172 => 60,  166 => 57,  161 => 55,  157 => 54,  150 => 50,  145 => 48,  141 => 47,  134 => 43,  129 => 41,  125 => 40,  118 => 36,  113 => 34,  109 => 33,  102 => 29,  97 => 27,  93 => 26,  86 => 22,  81 => 20,  77 => 19,  70 => 16,  65 => 13,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	*/
/* 	*/
/* */
/* <h3>Tesson</h3>*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*   {# Les erreurs générales du formulaire. #}*/
/*   {{ form_errors(form) }}*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.anneeDecouverte, "Année de découverte", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.anneeDecouverte) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.anneeDecouverte, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.developpe, "Developpé", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.developpe) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.developpe, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.lotIndividu, "Lot / Individu", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.lotIndividu) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.lotIndividu, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.numTombe, "Numéro de tombe", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.numTombe) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.numTombe, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.fait, "Fait", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.fait) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.fait, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.ordreLargeur, "Largeur", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.ordreLargeur) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreLargeur, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/* 	<div class="col-sm-1">*/
/*       {{ form_widget(form.largeur, {'attr': {'class': 'form-control'}}) }}*/
/* 	</div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.ordreLongueur, "Longueur", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.ordreLongueur) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreLongueur, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/* 	<div class="col-sm-1">*/
/*       {{ form_widget(form.longueur, {'attr': {'class': 'form-control'}}) }}*/
/* 	</div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.commentaire, "Commentaires", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.commentaire) }}*/
/*     <div class="col-sm-2">*/
/*       {{ form_widget(form.commentaire, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.nombreMotifsVerticaux, "Nombre de motifs verticaux", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.nombreMotifsVerticaux) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.nombreMotifsVerticaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.nombreMotifsHorizontaux, "Nombre de motifs horizontaux", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.nombreMotifsHorizontaux) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.nombreMotifsHorizontaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
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
/* {% endblock %}*/
