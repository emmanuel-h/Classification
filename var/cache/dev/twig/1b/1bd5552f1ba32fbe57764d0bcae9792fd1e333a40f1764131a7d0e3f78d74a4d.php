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
        $__internal_d43ee36d4bdb5407f9d07095f2037f8836d1276b80ec6a4b395732e6716a8b40 = $this->env->getExtension("native_profiler");
        $__internal_d43ee36d4bdb5407f9d07095f2037f8836d1276b80ec6a4b395732e6716a8b40->enter($__internal_d43ee36d4bdb5407f9d07095f2037f8836d1276b80ec6a4b395732e6716a8b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d43ee36d4bdb5407f9d07095f2037f8836d1276b80ec6a4b395732e6716a8b40->leave($__internal_d43ee36d4bdb5407f9d07095f2037f8836d1276b80ec6a4b395732e6716a8b40_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c87541c8c7ac3d9e06ea77c280a8e36f20eba6fbff79642760c051bb1da859c8 = $this->env->getExtension("native_profiler");
        $__internal_c87541c8c7ac3d9e06ea77c280a8e36f20eba6fbff79642760c051bb1da859c8->enter($__internal_c87541c8c7ac3d9e06ea77c280a8e36f20eba6fbff79642760c051bb1da859c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_all_users");
        echo "\">Tous les utilisateurs</a>
</div>

";
        
        $__internal_c87541c8c7ac3d9e06ea77c280a8e36f20eba6fbff79642760c051bb1da859c8->leave($__internal_c87541c8c7ac3d9e06ea77c280a8e36f20eba6fbff79642760c051bb1da859c8_prof);

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
/* 	<a href="{{ path('lifo_classif_admin_all_users') }}">Tous les utilisateurs</a>*/
/* </div>*/
/* */
/* {% endblock %}*/
