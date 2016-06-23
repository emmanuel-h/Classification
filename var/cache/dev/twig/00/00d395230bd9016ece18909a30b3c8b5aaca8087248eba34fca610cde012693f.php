<?php

/* @LIFOClassif/Admin/utilisateur.html.twig */
class __TwigTemplate_4c8b2d984ee1b1f2bd5cedd854bb29438911455a861ea81b86eac893b6131031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/utilisateur.html.twig", 1);
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
        $__internal_ae107e9944550c16479760fddf9d9cf409867046199477302807a26ae84be45b = $this->env->getExtension("native_profiler");
        $__internal_ae107e9944550c16479760fddf9d9cf409867046199477302807a26ae84be45b->enter($__internal_ae107e9944550c16479760fddf9d9cf409867046199477302807a26ae84be45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae107e9944550c16479760fddf9d9cf409867046199477302807a26ae84be45b->leave($__internal_ae107e9944550c16479760fddf9d9cf409867046199477302807a26ae84be45b_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_10f4c00d420d3b59d5982a9613447cda5bc8e81097c41e7ddcb6ccf091abe77f = $this->env->getExtension("native_profiler");
        $__internal_10f4c00d420d3b59d5982a9613447cda5bc8e81097c41e7ddcb6ccf091abe77f->enter($__internal_10f4c00d420d3b59d5982a9613447cda5bc8e81097c41e7ddcb6ccf091abe77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
";
        // line 6
        if (((isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")) != "")) {
            // line 7
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
\t<strong>Attention ! </strong>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
            echo "
  </div>
";
        }
        // line 11
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), 'errors');
        echo "
  <fieldset>
  \t<legend>&nbsp;&nbsp;Ajouter un utilisateur</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Nom d'utilisateur&nbsp;&nbsp;</b>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "utilisateur", array()), "username", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Role&nbsp;&nbsp;</b>
    \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "role", array()), 'errors');
        echo "
  \t  </div>
      <div class=\"col-sm-6\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "utilisateur", array()), "username", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "role", array()), 'widget');
        echo "
      </div>
    </div>
  \t<div class=\"form-group\">
      <div class=\"col-sm-6\">
\t    <b>&nbsp;Mot de passe&nbsp;&nbsp;</b>
      </div>
      <div class=\"col-sm-6\">
\t    <b>&nbsp;Répéter le mot de passe&nbsp;&nbsp;</b>
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "utilisateur", array()), "password", array()), "first", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "utilisateur", array()), "password", array()), "first", array()), 'widget');
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "utilisateur", array()), "password", array()), "second", array()), 'errors');
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "utilisateur", array()), "password", array()), "second", array()), 'widget');
        echo "
      </div>
    </div>
  </fieldset>
  ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), 'rest');
        echo "
  ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), 'form_end');
        echo "
</div>

";
        
        $__internal_10f4c00d420d3b59d5982a9613447cda5bc8e81097c41e7ddcb6ccf091abe77f->leave($__internal_10f4c00d420d3b59d5982a9613447cda5bc8e81097c41e7ddcb6ccf091abe77f_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  127 => 49,  123 => 48,  116 => 44,  112 => 43,  106 => 40,  102 => 39,  88 => 28,  82 => 25,  76 => 22,  69 => 18,  60 => 12,  55 => 11,  49 => 8,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* {%  if messageImportant != "" %}*/
/*   <div class="alert alert-warning" role="alert">*/
/* 	<strong>Attention ! </strong>{{messageImportant}}*/
/*   </div>*/
/* {%  endif %}*/
/*   {{ form_start(formAddUser, {'attr': {'class': 'form-horizontal'}}) }}*/
/*   {{ form_errors(formAddUser) }}*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Ajouter un utilisateur</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Nom d'utilisateur&nbsp;&nbsp;</b>*/
/*         {{ form_errors(formAddUser.utilisateur.username) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Role&nbsp;&nbsp;</b>*/
/*     	{{ form_errors(formAddUser.role) }}*/
/*   	  </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(formAddUser.utilisateur.username) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_widget(formAddUser.role) }}*/
/*       </div>*/
/*     </div>*/
/*   	<div class="form-group">*/
/*       <div class="col-sm-6">*/
/* 	    <b>&nbsp;Mot de passe&nbsp;&nbsp;</b>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/* 	    <b>&nbsp;Répéter le mot de passe&nbsp;&nbsp;</b>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_errors(formAddUser.utilisateur.password.first) }}*/
/*         {{ form_widget(formAddUser.utilisateur.password.first) }}*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         {{ form_errors(formAddUser.utilisateur.password.second) }}*/
/*         {{ form_widget(formAddUser.utilisateur.password.second) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   {{ form_widget(formAddUser.valider, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   {{ form_rest(formAddUser) }}*/
/*   {{ form_end(formAddUser) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
