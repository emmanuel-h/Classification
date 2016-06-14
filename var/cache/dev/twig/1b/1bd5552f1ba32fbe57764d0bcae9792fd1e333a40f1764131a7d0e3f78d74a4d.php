<?php

/* LIFOClassifBundle:Admin:utilisateur.html.twig */
class __TwigTemplate_979a2cf9ad469f202f46f21ee155fe863274654c4bc9252a5e1c4d816240de9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateur.html.twig", 1);
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
        $__internal_6c922d83ea3bd334e5ad6de3fb6a6ffdb3b82b1b974318d7ae4c9dd870c0e206 = $this->env->getExtension("native_profiler");
        $__internal_6c922d83ea3bd334e5ad6de3fb6a6ffdb3b82b1b974318d7ae4c9dd870c0e206->enter($__internal_6c922d83ea3bd334e5ad6de3fb6a6ffdb3b82b1b974318d7ae4c9dd870c0e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c922d83ea3bd334e5ad6de3fb6a6ffdb3b82b1b974318d7ae4c9dd870c0e206->leave($__internal_6c922d83ea3bd334e5ad6de3fb6a6ffdb3b82b1b974318d7ae4c9dd870c0e206_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_818c261d9ab87622903aa092d38114c674358b4b256b3c03e48edcee9ef17009 = $this->env->getExtension("native_profiler");
        $__internal_818c261d9ab87622903aa092d38114c674358b4b256b3c03e48edcee9ef17009->enter($__internal_818c261d9ab87622903aa092d38114c674358b4b256b3c03e48edcee9ef17009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
\t\t\t<legend>Ajouter un utilisateur</legend>
\t\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), 'form');
        echo "
\t\t</fieldset>
\t</p>
</div>

";
        
        $__internal_818c261d9ab87622903aa092d38114c674358b4b256b3c03e48edcee9ef17009->leave($__internal_818c261d9ab87622903aa092d38114c674358b4b256b3c03e48edcee9ef17009_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateur.html.twig";
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
/* 			<legend>Ajouter un utilisateur</legend>*/
/* 			{{ form(formAddUser) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* </div>*/
/* */
/* {% endblock %}*/
