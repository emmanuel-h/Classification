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
        $__internal_3e5699a1b343ba43e28422acb22b682661296ee4ddfcd73c8bd5c2228a3b447b = $this->env->getExtension("native_profiler");
        $__internal_3e5699a1b343ba43e28422acb22b682661296ee4ddfcd73c8bd5c2228a3b447b->enter($__internal_3e5699a1b343ba43e28422acb22b682661296ee4ddfcd73c8bd5c2228a3b447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5699a1b343ba43e28422acb22b682661296ee4ddfcd73c8bd5c2228a3b447b->leave($__internal_3e5699a1b343ba43e28422acb22b682661296ee4ddfcd73c8bd5c2228a3b447b_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e413f1602846df1ae21b510d10b1f9de690613f52cd4b982bf2eb02460f278da = $this->env->getExtension("native_profiler");
        $__internal_e413f1602846df1ae21b510d10b1f9de690613f52cd4b982bf2eb02460f278da->enter($__internal_e413f1602846df1ae21b510d10b1f9de690613f52cd4b982bf2eb02460f278da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
\t<a  class=\"btn btn-primary\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_all_users");
        echo "\">Tous les utilisateurs</a>
</div>

";
        
        $__internal_e413f1602846df1ae21b510d10b1f9de690613f52cd4b982bf2eb02460f278da->leave($__internal_e413f1602846df1ae21b510d10b1f9de690613f52cd4b982bf2eb02460f278da_prof);

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
/* 	<a  class="btn btn-primary" href="{{ path('lifo_classif_admin_all_users') }}">Tous les utilisateurs</a>*/
/* </div>*/
/* */
/* {% endblock %}*/
