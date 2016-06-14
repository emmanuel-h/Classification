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
        $__internal_e35aa3013b2d1f4f36e500abeca784d12db65bd7f9198aac06449d538d446996 = $this->env->getExtension("native_profiler");
        $__internal_e35aa3013b2d1f4f36e500abeca784d12db65bd7f9198aac06449d538d446996->enter($__internal_e35aa3013b2d1f4f36e500abeca784d12db65bd7f9198aac06449d538d446996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateurRechercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35aa3013b2d1f4f36e500abeca784d12db65bd7f9198aac06449d538d446996->leave($__internal_e35aa3013b2d1f4f36e500abeca784d12db65bd7f9198aac06449d538d446996_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_297ae21fa4fbe708b656ae286952f3e542301a56d3ecb642a8fa76f91d22383e = $this->env->getExtension("native_profiler");
        $__internal_297ae21fa4fbe708b656ae286952f3e542301a56d3ecb642a8fa76f91d22383e->enter($__internal_297ae21fa4fbe708b656ae286952f3e542301a56d3ecb642a8fa76f91d22383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
\t<p>
\t\t";
        // line 7
        if (((isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")) != "")) {
            // line 8
            echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t<strong>Attention ! </strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
            echo "
\t\t</div>
\t\t";
        }
        // line 12
        echo "\t\t<fieldset>
\t\t\t<legend>Trouver un utilisateur</legend>
\t\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), 'form');
        echo "
\t\t</fieldset>
\t</p>
</div>

";
        
        $__internal_297ae21fa4fbe708b656ae286952f3e542301a56d3ecb642a8fa76f91d22383e->leave($__internal_297ae21fa4fbe708b656ae286952f3e542301a56d3ecb642a8fa76f91d22383e_prof);

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
        return array (  60 => 14,  56 => 12,  50 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<p>*/
/* 		{%  if messageImportant != "" %}*/
/* 		<div class="alert alert-warning" role="alert">*/
/* 			<strong>Attention ! </strong>{{messageImportant}}*/
/* 		</div>*/
/* 		{%  endif %}*/
/* 		<fieldset>*/
/* 			<legend>Trouver un utilisateur</legend>*/
/* 			{{ form(formSearchUser) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* </div>*/
/* */
/* {% endblock %}*/
