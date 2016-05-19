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
        $__internal_f18145e319d6705fea77ed52b33599486fcb778af4a05d2f6ee089f7acbcc497 = $this->env->getExtension("native_profiler");
        $__internal_f18145e319d6705fea77ed52b33599486fcb778af4a05d2f6ee089f7acbcc497->enter($__internal_f18145e319d6705fea77ed52b33599486fcb778af4a05d2f6ee089f7acbcc497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f18145e319d6705fea77ed52b33599486fcb778af4a05d2f6ee089f7acbcc497->leave($__internal_f18145e319d6705fea77ed52b33599486fcb778af4a05d2f6ee089f7acbcc497_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e92aa6fae43563539eadee567f70013d6a6ca681ad2f4d8b6044933eda971677 = $this->env->getExtension("native_profiler");
        $__internal_e92aa6fae43563539eadee567f70013d6a6ca681ad2f4d8b6044933eda971677->enter($__internal_e92aa6fae43563539eadee567f70013d6a6ca681ad2f4d8b6044933eda971677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_e92aa6fae43563539eadee567f70013d6a6ca681ad2f4d8b6044933eda971677->leave($__internal_e92aa6fae43563539eadee567f70013d6a6ca681ad2f4d8b6044933eda971677_prof);

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
