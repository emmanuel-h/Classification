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
        $__internal_141ff21ebe26e6daec89e848bdba5c5ac443b5c820f4fcfb790566ce0dfefd88 = $this->env->getExtension("native_profiler");
        $__internal_141ff21ebe26e6daec89e848bdba5c5ac443b5c820f4fcfb790566ce0dfefd88->enter($__internal_141ff21ebe26e6daec89e848bdba5c5ac443b5c820f4fcfb790566ce0dfefd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141ff21ebe26e6daec89e848bdba5c5ac443b5c820f4fcfb790566ce0dfefd88->leave($__internal_141ff21ebe26e6daec89e848bdba5c5ac443b5c820f4fcfb790566ce0dfefd88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bfbd402ab9ed2f95a86acfac8c5a862d42f725c8cadc5ec113df115273b54b5 = $this->env->getExtension("native_profiler");
        $__internal_2bfbd402ab9ed2f95a86acfac8c5a862d42f725c8cadc5ec113df115273b54b5->enter($__internal_2bfbd402ab9ed2f95a86acfac8c5a862d42f725c8cadc5ec113df115273b54b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_2bfbd402ab9ed2f95a86acfac8c5a862d42f725c8cadc5ec113df115273b54b5->leave($__internal_2bfbd402ab9ed2f95a86acfac8c5a862d42f725c8cadc5ec113df115273b54b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77677001d07df1a6b9fc86f107b864d97265dcfd23e8826a17a07b5d480b34a = $this->env->getExtension("native_profiler");
        $__internal_f77677001d07df1a6b9fc86f107b864d97265dcfd23e8826a17a07b5d480b34a->enter($__internal_f77677001d07df1a6b9fc86f107b864d97265dcfd23e8826a17a07b5d480b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"well\">
  ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 12
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<fieldset>
\t<legend> Tesson </legend>
  <div class=\"form-group\">
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Année de découverte"));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  
  <div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Developpé"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 28
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
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro de tombe"));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  
  <div class=\"form-group\">
    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Fait"));
        echo "
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  
  <div class=\"form-group\">
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro d'isolation"));
        echo "
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  
  <div class=\"form-group\">
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Largeur"));
        echo "
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
\t<div class=\"col-sm-1\">
      ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  
  <div class=\"form-group\">
    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Longueur"));
        echo "
    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
\t<div class=\"col-sm-1\">
      ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  
  <div class=\"form-group\">
    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Commentaires"));
        echo "
    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
    <div class=\"col-sm-2\">
      ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  
  
  <div class=\"form-group\">
    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsHorizontaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Motifs Horizontaux"));
        echo "
    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsHorizontaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
\t<div class=\"col-sm-1\">
      ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  
  <div class=\"form-group\">
    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsVerticaux", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Motifs Verticaux"));
        echo "
    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsVerticaux", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
\t<div class=\"col-sm-1\">
      ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  </fieldset>

<fieldset> 
    <legend> US</legend> 
  <div class=\"form-group\">
    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Description"));
        echo "
    ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'errors');
        echo "
        <div class=\"col-sm-2\">
      ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
  
</fieldset>
  
<fieldset>
\t<legend>Site</legend>
  <div class=\"form-group\">
    ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Code INSEE"));
        echo "
    ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'errors');
        echo "
    <div class=\"col-sm-1\">
      ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Numéro de commune"));
        echo "
    ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'errors');
        echo "
        <div class=\"col-sm-1\">
      ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
</fieldset>

  ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 160
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 163
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_f77677001d07df1a6b9fc86f107b864d97265dcfd23e8826a17a07b5d480b34a->leave($__internal_f77677001d07df1a6b9fc86f107b864d97265dcfd23e8826a17a07b5d480b34a_prof);

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
        return array (  373 => 163,  367 => 160,  362 => 157,  354 => 152,  349 => 150,  345 => 149,  337 => 144,  332 => 142,  328 => 141,  316 => 132,  311 => 130,  307 => 129,  299 => 124,  294 => 122,  290 => 121,  279 => 113,  273 => 110,  268 => 108,  264 => 107,  256 => 102,  250 => 99,  245 => 97,  241 => 96,  232 => 90,  227 => 88,  223 => 87,  215 => 82,  209 => 79,  204 => 77,  200 => 76,  192 => 71,  186 => 68,  181 => 66,  177 => 65,  169 => 60,  164 => 58,  160 => 57,  152 => 52,  147 => 50,  143 => 49,  135 => 44,  130 => 42,  126 => 41,  118 => 36,  113 => 34,  109 => 33,  101 => 28,  96 => 26,  92 => 25,  84 => 20,  79 => 18,  75 => 17,  66 => 12,  61 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*   {# Les erreurs générales du formulaire. #}*/
/*   {{ form_errors(form) }}*/
/* */
/* <fieldset>*/
/* 	<legend> Tesson </legend>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.anneeDecouverte, "Année de découverte", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.anneeDecouverte) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.anneeDecouverte, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.developpe, "Developpé", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.developpe) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.developpe, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.lotIndividu, "Lot / Individu", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.lotIndividu) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.lotIndividu, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.numTombe, "Numéro de tombe", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.numTombe) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.numTombe, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.fait, "Fait", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.fait) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.fait, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.numIsolation, "Numéro d'isolation", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.numIsolation) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.numIsolation, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   */
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
/*   */
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
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.commentaire, "Commentaires", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.commentaire) }}*/
/*     <div class="col-sm-2">*/
/*       {{ form_widget(form.commentaire, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/*   */
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.ordreMotifsHorizontaux, "Motifs Horizontaux", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.ordreMotifsHorizontaux) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreMotifsHorizontaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/* 	<div class="col-sm-1">*/
/*       {{ form_widget(form.nombreMotifsHorizontaux, {'attr': {'class': 'form-control'}}) }}*/
/* 	</div>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     {{ form_label(form.ordreMotifsVerticaux, "Motifs Verticaux", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.ordreMotifsVerticaux) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.ordreMotifsVerticaux, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/* 	<div class="col-sm-1">*/
/*       {{ form_widget(form.nombreMotifsVerticaux, {'attr': {'class': 'form-control'}}) }}*/
/* 	</div>*/
/*   </div>*/
/*   </fieldset>*/
/* */
/* <fieldset> */
/*     <legend> US</legend> */
/*   <div class="form-group">*/
/*     {{ form_label(form.US.nom, "Nom", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.US.nom) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.US.nom, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.US.description, "Description", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.US.description) }}*/
/*         <div class="col-sm-2">*/
/*       {{ form_widget(form.US.description, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*     </div>*/
/*   */
/* </fieldset>*/
/*   */
/* <fieldset>*/
/* 	<legend>Site</legend>*/
/*   <div class="form-group">*/
/*     {{ form_label(form.site.codeINSEE, "Code INSEE", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.site.codeINSEE) }}*/
/*     <div class="col-sm-1">*/
/*       {{ form_widget(form.site.codeINSEE, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.site.numSiteCommune, "Numéro de commune", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.site.numSiteCommune) }}*/
/*         <div class="col-sm-1">*/
/*       {{ form_widget(form.site.numSiteCommune, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* </fieldset>*/
/* */
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*   {# Génération automatique des champs pas encore écrits #}*/
/*   {{ form_rest(form) }}*/
/* */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
