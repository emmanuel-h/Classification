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
        $__internal_81e1735b2e4f5bc15635b43eb9f1cf321a3861544a78cdf0e1f71268a25367c4 = $this->env->getExtension("native_profiler");
        $__internal_81e1735b2e4f5bc15635b43eb9f1cf321a3861544a78cdf0e1f71268a25367c4->enter($__internal_81e1735b2e4f5bc15635b43eb9f1cf321a3861544a78cdf0e1f71268a25367c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateurRechercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e1735b2e4f5bc15635b43eb9f1cf321a3861544a78cdf0e1f71268a25367c4->leave($__internal_81e1735b2e4f5bc15635b43eb9f1cf321a3861544a78cdf0e1f71268a25367c4_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_987dca3d270bd766a0edf99153505f5a8c6eb93fca051583a4d83380de4f447e = $this->env->getExtension("native_profiler");
        $__internal_987dca3d270bd766a0edf99153505f5a8c6eb93fca051583a4d83380de4f447e->enter($__internal_987dca3d270bd766a0edf99153505f5a8c6eb93fca051583a4d83380de4f447e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_987dca3d270bd766a0edf99153505f5a8c6eb93fca051583a4d83380de4f447e->leave($__internal_987dca3d270bd766a0edf99153505f5a8c6eb93fca051583a4d83380de4f447e_prof);

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
