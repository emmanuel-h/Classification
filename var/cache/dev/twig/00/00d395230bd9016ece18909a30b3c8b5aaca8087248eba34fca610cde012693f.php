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
        $__internal_759b8a880d9154acb2726c186ce53f8c5451e8c27d386540f4f93f58141d167a = $this->env->getExtension("native_profiler");
        $__internal_759b8a880d9154acb2726c186ce53f8c5451e8c27d386540f4f93f58141d167a->enter($__internal_759b8a880d9154acb2726c186ce53f8c5451e8c27d386540f4f93f58141d167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759b8a880d9154acb2726c186ce53f8c5451e8c27d386540f4f93f58141d167a->leave($__internal_759b8a880d9154acb2726c186ce53f8c5451e8c27d386540f4f93f58141d167a_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e64da9ef0d8634c684a1d4848bf129c9d4723fd5e0946238dcee3900e6c735d7 = $this->env->getExtension("native_profiler");
        $__internal_e64da9ef0d8634c684a1d4848bf129c9d4723fd5e0946238dcee3900e6c735d7->enter($__internal_e64da9ef0d8634c684a1d4848bf129c9d4723fd5e0946238dcee3900e6c735d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_e64da9ef0d8634c684a1d4848bf129c9d4723fd5e0946238dcee3900e6c735d7->leave($__internal_e64da9ef0d8634c684a1d4848bf129c9d4723fd5e0946238dcee3900e6c735d7_prof);

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
