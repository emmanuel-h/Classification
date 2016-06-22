<?php

/* LIFOClassifBundle:Platform:upload.html.twig */
class __TwigTemplate_180ba4bf573390925e85048c281516c6908dfc7556968addf2f6096655740c46 extends Twig_Template
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
        $__internal_6f0630ba03c72ac5ad2e6c245e28254496f73c2d8088c40b5395829383adeb53 = $this->env->getExtension("native_profiler");
        $__internal_6f0630ba03c72ac5ad2e6c245e28254496f73c2d8088c40b5395829383adeb53->enter($__internal_6f0630ba03c72ac5ad2e6c245e28254496f73c2d8088c40b5395829383adeb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0630ba03c72ac5ad2e6c245e28254496f73c2d8088c40b5395829383adeb53->leave($__internal_6f0630ba03c72ac5ad2e6c245e28254496f73c2d8088c40b5395829383adeb53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f7c38f843b0ca5d0d1cbc45e43e3556eff30295c5d05127bed6c44c506072a7 = $this->env->getExtension("native_profiler");
        $__internal_2f7c38f843b0ca5d0d1cbc45e43e3556eff30295c5d05127bed6c44c506072a7->enter($__internal_2f7c38f843b0ca5d0d1cbc45e43e3556eff30295c5d05127bed6c44c506072a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_2f7c38f843b0ca5d0d1cbc45e43e3556eff30295c5d05127bed6c44c506072a7->leave($__internal_2f7c38f843b0ca5d0d1cbc45e43e3556eff30295c5d05127bed6c44c506072a7_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_cad84c8ae58ed3e691019fdac668f1ad09e97a1a4ec6a275ffe227a5c14a1b91 = $this->env->getExtension("native_profiler");
        $__internal_cad84c8ae58ed3e691019fdac668f1ad09e97a1a4ec6a275ffe227a5c14a1b91->enter($__internal_cad84c8ae58ed3e691019fdac668f1ad09e97a1a4ec6a275ffe227a5c14a1b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Année durant laquelle le tesson a été découvert')\" align = \"right\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Développé</b>
    \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDecouverte", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "developpe", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Lot/Individu</b>
\t\t<img src= \"";
        // line 34
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Y a-t-il un ou plusieurs tessons recevant ce même décor ?')\" align = \"right\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Numéro de tombe</b>
\t\t<img src= \"";
        // line 39
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'A renseigner s\\'il a été trouvé dans une sépulture')\" align = \"right\">
    \t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lotIndividu", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTombe", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Fait</b>
\t\t<img src= \"";
        // line 52
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Numéro de structure où le tesson a été trouvé,<br />regroupant un ensemble chrono-stratigraphique')\" align = \"right\">
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Commentaire</b>
    \t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fait", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
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
        // line 72
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Hauteur en centimètres du décor')\" align = \"right\">
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Longueur</b>
\t\t<img src= \"";
        // line 77
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Longueur en centimètres du décor')\" align = \"right\">
    \t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'errors');
        echo "
  \t  </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLargeur", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'widget');
        echo "
      </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreLongueur", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget');
        echo "
      </div>
    </div>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nombre de motifs verticaux</b>
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nombre de motifs horizontaux</b>
    \t";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'errors');
        echo "
  \t  </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsVerticaux", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsVerticaux", array()), 'widget');
        echo "
      </div>
  \t  <div class=\"col-sm-1\">
  \t  \t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordreMotifsHorizontaux", array()), 'widget');
        echo "
  \t  </div>
      <div class=\"col-sm-5\">
        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreMotifsHorizontaux", array()), 'widget');
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
        // line 121
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Code INSEE à 5 chiffres de la commune')\" align = \"right\">
        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro de site</b>
\t\t<img src= \"";
        // line 126
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Numéro du site fouillé de la commune')\" align = \"right\">
    \t";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'errors');
        echo "
  \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Zone</b>
\t\t<img src= \"";
        // line 131
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Zone du site fouillée')\" align = \"right\">
    \t";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone", array()), "numero", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-4\">
        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "codeINSEE", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), "numSiteCommune", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone", array()), "numero", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-group\">
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Nom de l'US</b>
\t\t<img src= \"";
        // line 147
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Unité stratigraphique')\" align = \"right\">
        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Description de l'US</b>
    \t";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'errors');
        echo "
  \t  </div>
 \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro d'isolation</b>
\t\t<img src= \"";
        // line 156
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Permet l\\'unicité d\\'un tesson<br />une fois couplé à un site et un us')\" align = \"right\">
    \t";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-4\">
        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "nom", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "US", array()), "description", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIsolation", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>&nbsp;&nbsp;Datation</legend>
    <div class=\"form-group\">
      <div class=\"col-sm-2\">
      \t<b>&nbsp;Période</b>
      </div>
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro</b>
        ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "numeroPeriode", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "description", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-2\">
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "numeroPeriode", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode", array()), "description", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2\">
      \t<b>&nbsp;Phase</b>
      </div>
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro</b>
        ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "numeroPhase", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "description", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-2\">
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "numeroPhase", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phase", array()), "description", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2\">
      \t<b>&nbsp;Séquence</b>
      </div>
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Numéro</b>
        ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "numeroSequence", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "description", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-2\">
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "numeroSequence", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), "description", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>&nbsp;&nbsp;Décor</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Position&nbsp;&nbsp;</b>
        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "decor", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Type&nbsp;&nbsp;</b>
    \t";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeDecor", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "decor", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeDecor", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>&nbsp;&nbsp;Molette</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nom</b>
\t\t<img src= \"";
        // line 260
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Code alphanumérique de la molette')\" align=\"right\">
        ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "nom", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Description</b>
    \t";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "description", array()), 'errors');
        echo "
 \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "nom", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "description", array()), 'widget');
        echo "
      </div>
    </div>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Égal ou équivalent&nbsp;&nbsp;</b>
\t\t<img src= \"";
        // line 277
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'<b>egal</b> est une correspondance sur le répertoire<br />tandis qu\\'<b>equi</b> s\\'en rapproche seulement')\">
        ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "egal", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Référence&nbsp;&nbsp;</b>
\t\t<img src= \"";
        // line 282
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("info.png")), "html", null, true);
        echo "\" width=\"18\" height=\"18\" onmouseover=\"FoToolTip.show(this,'Matrice complète ou réputée comme telle<br />qui servira de référence pour l\\'appariement')\">
    \t";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "reference", array()), 'errors');
        echo "
 \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "egal", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tessonMolette", array()), "molette", array()), "reference", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>

  <fieldset>
  \t<legend>&nbsp;&nbsp;Numérisations</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-4\" align=\"center\">
\t    <b>&nbsp;Fichier&nbsp;&nbsp;</b>
   \t  </div>
 \t  <div class=\"col-sm-8\" align=\"center\">
\t    <b>&nbsp;Type&nbsp;&nbsp;</b>
  \t  </div>
      ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerisation", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
            // line 304
            echo "      <div class=\"col-sm-4\">
        ";
            // line 305
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["numerisation"], "file", array()), 'widget');
            echo "
    \t";
            // line 306
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["numerisation"], "file", array()), 'errors');
            echo "
      </div>
      <div class=\"col-sm-8\">
        ";
            // line 309
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["numerisation"], "typeNumerisation", array()), 'widget');
            echo "
        ";
            // line 310
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["numerisation"], "typeNumerisation", array()), 'errors');
            echo "
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "    </div>
  </fieldset>

  <br />
  <br />

  ";
        // line 320
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 324
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 327
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_cad84c8ae58ed3e691019fdac668f1ad09e97a1a4ec6a275ffe227a5c14a1b91->leave($__internal_cad84c8ae58ed3e691019fdac668f1ad09e97a1a4ec6a275ffe227a5c14a1b91_prof);

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
        return array (  631 => 327,  625 => 324,  619 => 320,  611 => 313,  602 => 310,  598 => 309,  592 => 306,  588 => 305,  585 => 304,  581 => 303,  564 => 289,  558 => 286,  552 => 283,  548 => 282,  541 => 278,  537 => 277,  528 => 271,  522 => 268,  516 => 265,  509 => 261,  505 => 260,  493 => 251,  487 => 248,  481 => 245,  474 => 241,  462 => 232,  456 => 229,  448 => 224,  441 => 220,  429 => 211,  423 => 208,  415 => 203,  408 => 199,  396 => 190,  390 => 187,  382 => 182,  375 => 178,  360 => 166,  354 => 163,  348 => 160,  342 => 157,  338 => 156,  331 => 152,  324 => 148,  320 => 147,  311 => 141,  305 => 138,  299 => 135,  293 => 132,  289 => 131,  282 => 127,  278 => 126,  271 => 122,  267 => 121,  255 => 112,  249 => 109,  243 => 106,  237 => 103,  231 => 100,  224 => 96,  215 => 90,  209 => 87,  203 => 84,  197 => 81,  191 => 78,  187 => 77,  180 => 73,  176 => 72,  164 => 63,  158 => 60,  152 => 57,  145 => 53,  141 => 52,  132 => 46,  126 => 43,  120 => 40,  116 => 39,  109 => 35,  105 => 34,  96 => 28,  90 => 25,  84 => 22,  77 => 18,  73 => 17,  63 => 11,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Année durant laquelle le tesson a été découvert')" align = "right">*/
/*         {{ form_errors(form.anneeDecouverte) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Développé</b>*/
/*     	{{ form_errors(form.developpe) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.anneeDecouverte) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.developpe) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Lot/Individu</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Y a-t-il un ou plusieurs tessons recevant ce même décor ?')" align = "right">*/
/*         {{ form_errors(form.lotIndividu) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Numéro de tombe</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'A renseigner s\'il a été trouvé dans une sépulture')" align = "right">*/
/*     	{{ form_errors(form.numTombe) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.lotIndividu) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.numTombe) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Fait</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Numéro de structure où le tesson a été trouvé,<br />regroupant un ensemble chrono-stratigraphique')" align = "right">*/
/*         {{ form_errors(form.fait) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Commentaire</b>*/
/*     	{{ form_errors(form.commentaire) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.fait) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.commentaire) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Dimensions</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Largeur</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Hauteur en centimètres du décor')" align = "right">*/
/*         {{ form_errors(form.largeur) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Longueur</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Longueur en centimètres du décor')" align = "right">*/
/*     	{{ form_errors(form.longueur) }}*/
/*   	  </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreLargeur) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.largeur) }}*/
/*       </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreLongueur) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.longueur) }}*/
/*       </div>*/
/*     </div>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nombre de motifs verticaux</b>*/
/*         {{ form_errors(form.nombreMotifsVerticaux) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nombre de motifs horizontaux</b>*/
/*     	{{ form_errors(form.nombreMotifsHorizontaux) }}*/
/*   	  </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreMotifsVerticaux) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.nombreMotifsVerticaux) }}*/
/*       </div>*/
/*   	  <div class="col-sm-1">*/
/*   	  	{{ form_widget(form.ordreMotifsHorizontaux) }}*/
/*   	  </div>*/
/*       <div class="col-sm-5">*/
/*         {{ form_widget(form.nombreMotifsHorizontaux) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Localisation</legend>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Code INSEE</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Code INSEE à 5 chiffres de la commune')" align = "right">*/
/*         {{ form_errors(form.site.codeINSEE) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro de site</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Numéro du site fouillé de la commune')" align = "right">*/
/*     	{{ form_errors(form.site.numSiteCommune) }}*/
/*   	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Zone</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Zone du site fouillée')" align = "right">*/
/*     	{{ form_errors(form.zone.numero) }}*/
/*   	  </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.site.codeINSEE) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.site.numSiteCommune) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.zone.numero) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Nom de l'US</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Unité stratigraphique')" align = "right">*/
/*         {{ form_errors(form.US.nom) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Description de l'US</b>*/
/*     	{{ form_errors(form.US.description) }}*/
/*   	  </div>*/
/*  	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro d'isolation</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Permet l\'unicité d\'un tesson<br />une fois couplé à un site et un us')" align = "right">*/
/*     	{{ form_errors(form.numIsolation) }}*/
/*   	  </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.US.nom) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.US.description) }}*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.numIsolation) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Datation</legend>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2">*/
/*       	<b>&nbsp;Période</b>*/
/*       </div>*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro</b>*/
/*         {{ form_errors(form.periode.numeroPeriode) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Description</b>*/
/*     	{{ form_errors(form.periode.description) }}*/
/*   	  </div>*/
/*       <div class="col-sm-2">*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.periode.numeroPeriode) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.periode.description) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2">*/
/*       	<b>&nbsp;Phase</b>*/
/*       </div>*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro</b>*/
/*         {{ form_errors(form.phase.numeroPhase) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Description</b>*/
/*     	{{ form_errors(form.phase.description) }}*/
/*   	  </div>*/
/*       <div class="col-sm-2">*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.phase.numeroPhase) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.phase.description) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2">*/
/*       	<b>&nbsp;Séquence</b>*/
/*       </div>*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Numéro</b>*/
/*         {{ form_errors(form.sequence.numeroSequence) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Description</b>*/
/*     	{{ form_errors(form.sequence.description) }}*/
/*   	  </div>*/
/*       <div class="col-sm-2">*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.sequence.numeroSequence) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(form.sequence.description) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Décor</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Position&nbsp;&nbsp;</b>*/
/*         {{ form_errors(form.decor) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Type&nbsp;&nbsp;</b>*/
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
/*   	<legend>&nbsp;&nbsp;Molette</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nom</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Code alphanumérique de la molette')" align="right">*/
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
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'<b>egal</b> est une correspondance sur le répertoire<br />tandis qu\'<b>equi</b> s\'en rapproche seulement')">*/
/*         {{ form_errors(form.tessonMolette.egal) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Référence&nbsp;&nbsp;</b>*/
/* 		<img src= "{{ base_url ~asset ('info.png') }}" width="18" height="18" onmouseover="FoToolTip.show(this,'Matrice complète ou réputée comme telle<br />qui servira de référence pour l\'appariement')">*/
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
/* */
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Numérisations</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-4" align="center">*/
/* 	    <b>&nbsp;Fichier&nbsp;&nbsp;</b>*/
/*    	  </div>*/
/*  	  <div class="col-sm-8" align="center">*/
/* 	    <b>&nbsp;Type&nbsp;&nbsp;</b>*/
/*   	  </div>*/
/*       {% for numerisation in form.numerisation %}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(numerisation.file) }}*/
/*     	{{ form_errors(numerisation.file) }}*/
/*       </div>*/
/*       <div class="col-sm-8">*/
/*         {{ form_widget(numerisation.typeNumerisation) }}*/
/*         {{ form_errors(numerisation.typeNumerisation) }}*/
/*       </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </fieldset>*/
/* */
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
/* {% endblock %}*/
