<?php

/* @LIFOClassif/Platform/upload.html.twig */
class __TwigTemplate_4c3aa0a302672e3696da7497f6ccdf6c090c7c8242d508a96b671890edb717a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/upload.html.twig", 1);
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
        $__internal_37557cb2b90ef6ebd8def97a6297ed68f650c305cc33bdcb9a48a9ffaadbde9d = $this->env->getExtension("native_profiler");
        $__internal_37557cb2b90ef6ebd8def97a6297ed68f650c305cc33bdcb9a48a9ffaadbde9d->enter($__internal_37557cb2b90ef6ebd8def97a6297ed68f650c305cc33bdcb9a48a9ffaadbde9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37557cb2b90ef6ebd8def97a6297ed68f650c305cc33bdcb9a48a9ffaadbde9d->leave($__internal_37557cb2b90ef6ebd8def97a6297ed68f650c305cc33bdcb9a48a9ffaadbde9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96768f61c7d36c5e2d065a66329ae80db0a7bd39656606c491b23a63951aaf6a = $this->env->getExtension("native_profiler");
        $__internal_96768f61c7d36c5e2d065a66329ae80db0a7bd39656606c491b23a63951aaf6a->enter($__internal_96768f61c7d36c5e2d065a66329ae80db0a7bd39656606c491b23a63951aaf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_96768f61c7d36c5e2d065a66329ae80db0a7bd39656606c491b23a63951aaf6a->leave($__internal_96768f61c7d36c5e2d065a66329ae80db0a7bd39656606c491b23a63951aaf6a_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_6dcdb589aa667d6abc4f905d28e0f6c435ad61af80ff1f5a7291b55b583652e8 = $this->env->getExtension("native_profiler");
        $__internal_6dcdb589aa667d6abc4f905d28e0f6c435ad61af80ff1f5a7291b55b583652e8->enter($__internal_6dcdb589aa667d6abc4f905d28e0f6c435ad61af80ff1f5a7291b55b583652e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
<div class=\"well\">
  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
  <fieldset>
    <legend>&nbsp;&nbsp;Description</legend>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Année de la découverte</b>
\t\t<img src= \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Développé</b>
\t\t<img src= \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Lot/Individu</b>
\t\t<img src= \"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Numéro de tombe</b>
\t\t<img src= \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
    \t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Fait</b>
\t\t<img src= \"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Commentaire</b>
    \t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>&nbsp;&nbsp;Dimensions</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Largeur</b>
\t\t<img src= \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Longueur</b>
\t\t<img src= \"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
    \t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'errors');
        echo "
  \t  </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nombre de motifs verticaux</b>
\t\t<img src= \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nombre de motifs horizontaux</b>
\t\t<img src= \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
    \t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'errors');
        echo "
  \t  </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsVerticaux", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsHorizontaux", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>&nbsp;&nbsp;Localisation</legend>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Code INSEE</b>
\t\t<img src= \"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro de site</b>
\t\t<img src= \"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
    \t";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'errors');
        echo "
  \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Zone</b>
\t\t<img src= \"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
    \t";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone", array()), "numero", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-4\">
        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone", array()), "numero", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Nom de l'US</b>
\t\t<img src= \"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Description de l'US</b>
    \t";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'errors');
        echo "
  \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro d'isolation</b>
\t\t<img src= \"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
    \t";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-4\">
        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>Datation</legend>
    <div class=\"form-group\">
      <div class=\"col-sm-2\">
      \t<b>&nbsp;Période</b>
      </div>
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro</b>
\t\t<img src= \"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "numeroPeriode", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "description", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-2\">
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "numeroPeriode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2\">
      \t<b>&nbsp;Phase</b>
      </div>
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro</b>
\t\t<img src= \"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "numeroPhase", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "description", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-2\">
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "numeroPhase", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2\">
      \t<b>&nbsp;Séquence</b>
      </div>
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro</b>
\t\t<img src= \"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align = \"right\">
        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "numeroSequence", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "description", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-2\">
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "numeroSequence", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>Décor</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Position&nbsp;&nbsp;</b>
\t\t<img src= \"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\">
        ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "decor", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Type&nbsp;&nbsp;</b>
\t\t<img src= \"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\"\t>
    \t";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeDecor", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "decor", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeDecor", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>Molette</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nom</b>
\t\t<img src= \"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\" align=\"right\">
        ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "nom", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "description", array()), 'errors');
        echo "
 \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "nom", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "description", array()), 'widget');
        echo "
      </div>
    </div>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Égal ou équivalent&nbsp;&nbsp;</b>
\t\t<img src= \"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\">
        ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "egal", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Référence&nbsp;&nbsp;</b>
\t\t<img src= \"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\">
    \t";
        // line 291
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "reference", array()), 'errors');
        echo "
 \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "egal", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 297
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "reference", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  
  <fieldset>
    <legend>Numérisations</legend>
    ";
        // line 304
        if ( !twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerisation", array()))) {
            // line 305
            echo "  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Fichier&nbsp;&nbsp;</b>
\t\t<img src= \"";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
            echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\">
        ";
            // line 309
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerisation", array()), "file", array()), 'errors');
            echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Type&nbsp;&nbsp;</b>
\t\t<img src= \"";
            // line 313
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("info.png"), "html", null, true);
            echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'bite')\">
    \t";
            // line 314
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerisation", array()), "typeNumerisation", array()), 'errors');
            echo "
 \t  </div>
      <div class=\"col-sm-6\">
        ";
            // line 317
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerisation", array()), "file", array()), 'widget');
            echo "
      </div>
      <div class=\"col-sm-6\">
        ";
            // line 320
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "numerisation", array()), "typeNumerisation", array()), 'widget');
            echo "
      </div>
  \t<a href=\"#\" id=\"add_numerisation\" class=\"btn btn-default\">Ajouter une numérisation</a>
    </div>
    ";
        }
        // line 325
        echo "  </fieldset>
  <br />
  <br />

  ";
        // line 330
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 334
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 337
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>







<script src=\" ";
        // line 346
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
        
        $__internal_6dcdb589aa667d6abc4f905d28e0f6c435ad61af80ff1f5a7291b55b583652e8->leave($__internal_6dcdb589aa667d6abc4f905d28e0f6c435ad61af80ff1f5a7291b55b583652e8_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 346,  666 => 337,  660 => 334,  654 => 330,  648 => 325,  640 => 320,  634 => 317,  628 => 314,  624 => 313,  617 => 309,  613 => 308,  608 => 305,  606 => 304,  596 => 297,  590 => 294,  584 => 291,  580 => 290,  573 => 286,  569 => 285,  560 => 279,  554 => 276,  548 => 273,  541 => 269,  537 => 268,  525 => 259,  519 => 256,  513 => 253,  509 => 252,  502 => 248,  498 => 247,  486 => 238,  480 => 235,  472 => 230,  465 => 226,  461 => 225,  449 => 216,  443 => 213,  435 => 208,  428 => 204,  424 => 203,  412 => 194,  406 => 191,  398 => 186,  391 => 182,  387 => 181,  372 => 169,  366 => 166,  360 => 163,  354 => 160,  350 => 159,  343 => 155,  336 => 151,  332 => 150,  323 => 144,  317 => 141,  311 => 138,  305 => 135,  301 => 134,  294 => 130,  290 => 129,  283 => 125,  279 => 124,  267 => 115,  261 => 112,  255 => 109,  249 => 106,  243 => 103,  239 => 102,  232 => 98,  228 => 97,  219 => 91,  213 => 88,  207 => 85,  201 => 82,  195 => 79,  191 => 78,  184 => 74,  180 => 73,  168 => 64,  162 => 61,  156 => 58,  149 => 54,  145 => 53,  136 => 47,  130 => 44,  124 => 41,  120 => 40,  113 => 36,  109 => 35,  100 => 29,  94 => 26,  88 => 23,  84 => 22,  77 => 18,  73 => 17,  63 => 11,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/*   <fieldset>*/
/*     <legend>&nbsp;&nbsp;Description</legend>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Année de la découverte</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.anneeDecouverte) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Développé</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*     	{{ form_errors(form.developpe) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.anneeDecouverte, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.developpe, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Lot/Individu</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.lotIndividu) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Numéro de tombe</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*     	{{ form_errors(form.numTombe) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.lotIndividu, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.numTombe, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Fait</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.fait) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Commentaire</b>*/
/*     	{{ form_errors(form.commentaire) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.fait, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.commentaire, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Dimensions</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Largeur</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.largeur) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Longueur</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*     	{{ form_errors(form.longueur) }}*/
/*   	  </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreLargeur) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.largeur, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreLongueur) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.longueur, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nombre de motifs verticaux</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.nombreMotifsVerticaux) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nombre de motifs horizontaux</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*     	{{ form_errors(form.nombreMotifsHorizontaux) }}*/
/*   	  </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreMotifsVerticaux) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.nombreMotifsVerticaux, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreMotifsHorizontaux) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.nombreMotifsHorizontaux, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Localisation</legend>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Code INSEE</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.site.codeINSEE) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro de site</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*     	{{ form_errors(form.site.numSiteCommune) }}*/
/*   	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Zone</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*     	{{ form_errors(form.zone.numero) }}*/
/*   	  </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.site.codeINSEE, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.site.numSiteCommune, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.zone.numero, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Nom de l'US</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.US.nom) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Description de l'US</b>*/
/*     	{{ form_errors(form.US.description) }}*/
/*   	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro d'isolation</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*     	{{ form_errors(form.numIsolation) }}*/
/*   	  </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.US.nom, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.US.description, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.numIsolation, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>Datation</legend>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2">*/
/*       	<b>&nbsp;Période</b>*/
/*       </div>*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.periode.numeroPeriode) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Description</b>*/
/*     	{{ form_errors(form.periode.description) }}*/
/*   	  </div>*/
/*       <div class="col-sm-2">*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.periode.numeroPeriode, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.periode.description, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2">*/
/*       	<b>&nbsp;Phase</b>*/
/*       </div>*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.phase.numeroPhase) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Description</b>*/
/*     	{{ form_errors(form.phase.description) }}*/
/*   	  </div>*/
/*       <div class="col-sm-2">*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.phase.numeroPhase, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.phase.description, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2">*/
/*       	<b>&nbsp;Séquence</b>*/
/*       </div>*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align = "right">*/
/*         {{ form_errors(form.sequence.numeroSequence) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Description</b>*/
/*     	{{ form_errors(form.sequence.description) }}*/
/*   	  </div>*/
/*       <div class="col-sm-2">*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.sequence.numeroSequence, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.sequence.description, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>Décor</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Position&nbsp;&nbsp;</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')">*/
/*         {{ form_errors(form.decor) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Type&nbsp;&nbsp;</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')"	>*/
/*     	{{ form_errors(form.typeDecor) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.decor) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.typeDecor) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>Molette</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nom</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')" align="right">*/
/*         {{ form_errors(form.tessonMolette.molette.nom) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Description</b>*/
/*     	{{ form_errors(form.tessonMolette.molette.description) }}*/
/*  	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.tessonMolette.molette.nom) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.tessonMolette.molette.description) }}*/
/*       </div>*/
/*     </div>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Égal ou équivalent&nbsp;&nbsp;</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')">*/
/*         {{ form_errors(form.tessonMolette.egal) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Référence&nbsp;&nbsp;</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')">*/
/*     	{{ form_errors(form.tessonMolette.molette.reference) }}*/
/*  	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.tessonMolette.egal) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.tessonMolette.molette.reference) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   */
/*   <fieldset>*/
/*     <legend>Numérisations</legend>*/
/*     {% if form.numerisation is not empty %}*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Fichier&nbsp;&nbsp;</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')">*/
/*         {{ form_errors(form.numerisation.file) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Type&nbsp;&nbsp;</b>*/
/* 		<img src= "{{ asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'bite')">*/
/*     	{{ form_errors(form.numerisation.typeNumerisation) }}*/
/*  	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.numerisation.file) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.tessonMolette.numerisation.typeNumerisation) }}*/
/*       </div>*/
/*   	<a href="#" id="add_numerisation" class="btn btn-default">Ajouter une numérisation</a>*/
/*     </div>*/
/*     {% endif %}*/
/*   </fieldset>*/
/*   <br />*/
/*   <br />*/
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
/* */
/* */
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
