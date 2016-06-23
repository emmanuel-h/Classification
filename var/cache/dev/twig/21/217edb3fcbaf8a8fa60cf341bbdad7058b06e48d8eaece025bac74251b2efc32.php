<?php

/* LIFOClassifBundle:Admin:utilisateurRechercher.html.twig */
class __TwigTemplate_4b8304847d92efd0c472d3f95d125d36a1042b969463dce651e4cb95762fc0e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateurRechercher.html.twig", 1);
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
        $__internal_4d488d9e43c19a692291914853a62363afb108638e9d4a782dd86d808604625e = $this->env->getExtension("native_profiler");
        $__internal_4d488d9e43c19a692291914853a62363afb108638e9d4a782dd86d808604625e->enter($__internal_4d488d9e43c19a692291914853a62363afb108638e9d4a782dd86d808604625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateurRechercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d488d9e43c19a692291914853a62363afb108638e9d4a782dd86d808604625e->leave($__internal_4d488d9e43c19a692291914853a62363afb108638e9d4a782dd86d808604625e_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_37538789763103daf9157752f8176000d1be21a29aa16ab420669a07564e3154 = $this->env->getExtension("native_profiler");
        $__internal_37538789763103daf9157752f8176000d1be21a29aa16ab420669a07564e3154->enter($__internal_37538789763103daf9157752f8176000d1be21a29aa16ab420669a07564e3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        if (((isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")) != "")) {
            // line 5
            echo "  <div class=\"alert alert-danger\" align=\"center\" id=\"parametresClassif\">
  ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
            echo "
  </div>
";
        }
        // line 9
        echo "<div class=\"well\">";
        echo         // line 10
        $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), 'errors');
        echo "
  <fieldset>
  \t<legend>&nbsp;&nbsp;Trouver un utilisateur</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-4\">
\t    <b>&nbsp;Nom d'utilisateur&nbsp;&nbsp;</b>
   \t  </div>
 \t  <div class=\"col-sm-8\">
    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), "username", array()), 'errors');
        echo "
    \t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), "username", array()), 'widget');
        echo "
  \t  </div>
    </div>
  </fieldset>
  ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), "rechercher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), 'rest');
        echo "
  ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), 'form_end');
        echo "
</div>

";
        
        $__internal_37538789763103daf9157752f8176000d1be21a29aa16ab420669a07564e3154->leave($__internal_37538789763103daf9157752f8176000d1be21a29aa16ab420669a07564e3154_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateurRechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  83 => 25,  79 => 24,  72 => 20,  68 => 19,  57 => 11,  53 => 10,  51 => 9,  45 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* {% if messageImportant != "" %}*/
/*   <div class="alert alert-danger" align="center" id="parametresClassif">*/
/*   {{messageImportant}}*/
/*   </div>*/
/* {% endif %}*/
/* <div class="well">{{*/
/*  form_start(formSearchUser, {'attr': {'class': 'form-horizontal'}}) }}*/
/*   {{ form_errors(formSearchUser) }}*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Trouver un utilisateur</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-4">*/
/* 	    <b>&nbsp;Nom d'utilisateur&nbsp;&nbsp;</b>*/
/*    	  </div>*/
/*  	  <div class="col-sm-8">*/
/*     	{{ form_errors(formSearchUser.username) }}*/
/*     	{{ form_widget(formSearchUser.username) }}*/
/*   	  </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   {{ form_widget(formSearchUser.rechercher, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   {{ form_rest(formSearchUser) }}*/
/*   {{ form_end(formSearchUser) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
