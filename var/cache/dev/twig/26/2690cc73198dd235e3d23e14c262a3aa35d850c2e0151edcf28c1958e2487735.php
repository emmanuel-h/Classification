<?php

/* @LIFOClassif/Admin/utilisateurRechercher.html.twig */
class __TwigTemplate_436ab21d8f6af235bd9e1d383dafcbd07141399d599f2485bbfaeb40c921b8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/utilisateurRechercher.html.twig", 1);
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
        $__internal_6f807a3a4df7ae0b4edc8700908650260c7b32eb5bb363cec13c8ab663d2f8e0 = $this->env->getExtension("native_profiler");
        $__internal_6f807a3a4df7ae0b4edc8700908650260c7b32eb5bb363cec13c8ab663d2f8e0->enter($__internal_6f807a3a4df7ae0b4edc8700908650260c7b32eb5bb363cec13c8ab663d2f8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateurRechercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f807a3a4df7ae0b4edc8700908650260c7b32eb5bb363cec13c8ab663d2f8e0->leave($__internal_6f807a3a4df7ae0b4edc8700908650260c7b32eb5bb363cec13c8ab663d2f8e0_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f89f95009e81af64291427dcb19b2bc6789f22d965542a20a0ac2a1b4aaec50d = $this->env->getExtension("native_profiler");
        $__internal_f89f95009e81af64291427dcb19b2bc6789f22d965542a20a0ac2a1b4aaec50d->enter($__internal_f89f95009e81af64291427dcb19b2bc6789f22d965542a20a0ac2a1b4aaec50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_f89f95009e81af64291427dcb19b2bc6789f22d965542a20a0ac2a1b4aaec50d->leave($__internal_f89f95009e81af64291427dcb19b2bc6789f22d965542a20a0ac2a1b4aaec50d_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/utilisateurRechercher.html.twig";
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
