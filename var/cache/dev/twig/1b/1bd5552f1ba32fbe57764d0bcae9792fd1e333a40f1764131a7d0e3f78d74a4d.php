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
        $__internal_cd5d7fc7b12c5440bc23216572eb496a12e243c824efe7423a64f6f430b3e607 = $this->env->getExtension("native_profiler");
        $__internal_cd5d7fc7b12c5440bc23216572eb496a12e243c824efe7423a64f6f430b3e607->enter($__internal_cd5d7fc7b12c5440bc23216572eb496a12e243c824efe7423a64f6f430b3e607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5d7fc7b12c5440bc23216572eb496a12e243c824efe7423a64f6f430b3e607->leave($__internal_cd5d7fc7b12c5440bc23216572eb496a12e243c824efe7423a64f6f430b3e607_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b9da7f56f76ccd893f089d03aa03581b39bdb46735e7f087b3ae7ddcfe44ce00 = $this->env->getExtension("native_profiler");
        $__internal_b9da7f56f76ccd893f089d03aa03581b39bdb46735e7f087b3ae7ddcfe44ce00->enter($__internal_b9da7f56f76ccd893f089d03aa03581b39bdb46735e7f087b3ae7ddcfe44ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
\t<p>
\t\t<font color = \"red\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
        echo "</font>
\t\t<fieldset>
\t\t\t<legend>Ajouter un utilisateur</legend>
\t\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), 'form');
        echo "
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>Trouver un utilisateur</legend>
\t\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), 'form');
        echo "
\t\t</fieldset>
\t</p>
\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_all_user");
        echo "\">Tous les utilisateurs</a>
</div>

";
        
        $__internal_b9da7f56f76ccd893f089d03aa03581b39bdb46735e7f087b3ae7ddcfe44ce00->leave($__internal_b9da7f56f76ccd893f089d03aa03581b39bdb46735e7f087b3ae7ddcfe44ce00_prof);

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
        return array (  64 => 17,  58 => 14,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<p>*/
/* 		<font color = "red">{{messageImportant}}</font>*/
/* 		<fieldset>*/
/* 			<legend>Ajouter un utilisateur</legend>*/
/* 			{{ form(formAddUser) }}*/
/* 		</fieldset>*/
/* 		<fieldset>*/
/* 			<legend>Trouver un utilisateur</legend>*/
/* 			{{ form(formSearchUser) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* 	<a href="{{ path('lifo_classif_admin_all_user') }}">Tous les utilisateurs</a>*/
/* </div>*/
/* */
/* {% endblock %}*/
