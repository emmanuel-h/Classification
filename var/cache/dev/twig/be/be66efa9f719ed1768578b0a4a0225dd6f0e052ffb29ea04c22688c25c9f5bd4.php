<?php

/* LIFOClassifBundle:Admin:utilisateurAfficher.html.twig */
class __TwigTemplate_55af234e97703f30f36ba0bd0789536d7f05cb71cc0952de9de105596fc56ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig", 1);
        $this->blocks = array(
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32656aae7389a11c69a4868baafb27c13a82346a6e89673e8b3281a603f77bb9 = $this->env->getExtension("native_profiler");
        $__internal_32656aae7389a11c69a4868baafb27c13a82346a6e89673e8b3281a603f77bb9->enter($__internal_32656aae7389a11c69a4868baafb27c13a82346a6e89673e8b3281a603f77bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32656aae7389a11c69a4868baafb27c13a82346a6e89673e8b3281a603f77bb9->leave($__internal_32656aae7389a11c69a4868baafb27c13a82346a6e89673e8b3281a603f77bb9_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c12a7eafb43c0411593149d08b3e44fc712d214412f3bc746d219ed5656eae9f = $this->env->getExtension("native_profiler");
        $__internal_c12a7eafb43c0411593149d08b3e44fc712d214412f3bc746d219ed5656eae9f->enter($__internal_c12a7eafb43c0411593149d08b3e44fc712d214412f3bc746d219ed5656eae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "<h1> Utilisateur&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1>
";
        // line 5
        if (((isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")) != "")) {
            // line 6
            echo "  <div class=\"alert alert-danger\" align=\"center\" id=\"parametresClassif\">
  ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
            echo "
  </div>
";
        }
        // line 10
        echo "<div class=\"well\">
  ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), 'errors');
        echo "
  <fieldset>
  \t<legend>&nbsp;&nbsp;Rôle</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Rôle actuel&nbsp;&nbsp;</b>
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nouveau rôle&nbsp;&nbsp;</b>
    \t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), "nouveauRole", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rolesToString", array()), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), "nouveauRole", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  <fieldset>
  \t<legend>&nbsp;&nbsp;Mot de passe</legend>
  \t<div class=\"form-group\">
      <div class=\"col-sm-6\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), "changePasswd", array()), "first", array()), 'errors');
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), "changePasswd", array()), "first", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), "changePasswd", array()), "second", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), "changePasswd", array()), "second", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), 'rest');
        echo "
  ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formModifierUser"]) ? $context["formModifierUser"] : $this->getContext($context, "formModifierUser")), 'form_end');
        echo "
</div>
<a class=\"btn btn-primary\" href=\"#null\" onclick=\"javascript:history.back();\">Page précédente</a>

";
        
        $__internal_c12a7eafb43c0411593149d08b3e44fc712d214412f3bc746d219ed5656eae9f->leave($__internal_c12a7eafb43c0411593149d08b3e44fc712d214412f3bc746d219ed5656eae9f_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  123 => 45,  119 => 44,  112 => 40,  108 => 39,  102 => 36,  98 => 35,  87 => 27,  81 => 24,  75 => 21,  63 => 12,  59 => 11,  56 => 10,  50 => 7,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* <h1> Utilisateur&nbsp;{{ user.username }}</h1>*/
/* {%  if messageImportant != "" %}*/
/*   <div class="alert alert-danger" align="center" id="parametresClassif">*/
/*   {{messageImportant}}*/
/*   </div>*/
/* {% endif %}*/
/* <div class="well">*/
/*   {{ form_start(formModifierUser, {'attr': {'class': 'form-horizontal'}}) }}*/
/*   {{ form_errors(formModifierUser) }}*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Rôle</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Rôle actuel&nbsp;&nbsp;</b>*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nouveau rôle&nbsp;&nbsp;</b>*/
/*     	{{ form_errors(formModifierUser.nouveauRole) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ user.rolesToString }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(formModifierUser.nouveauRole) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Mot de passe</legend>*/
/*   	<div class="form-group">*/
/*       <div class="col-sm-6">*/
/*         {{ form_errors(formModifierUser.changePasswd.first) }}*/
/*         {{ form_widget(formModifierUser.changePasswd.first) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_errors(formModifierUser.changePasswd.second) }}*/
/*         {{ form_widget(formModifierUser.changePasswd.second) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   {{ form_widget(formModifierUser.valider, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   {{ form_rest(formModifierUser) }}*/
/*   {{ form_end(formModifierUser) }}*/
/* </div>*/
/* <a class="btn btn-primary" href="#null" onclick="javascript:history.back();">Page précédente</a>*/
/* */
/* {% endblock %}*/
