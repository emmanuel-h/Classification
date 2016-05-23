<?php

/* LIFOClassifBundle:Admin:afficherUtilisateur.html.twig */
class __TwigTemplate_f0d23cafdf2d51a3c1c6a2019309a5f5fbf622bc6c33d31c91b7e2c34d367523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:afficherUtilisateur.html.twig", 1);
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
        $__internal_904afb69c060736a0baeba54897863e4e47a302dfd0c7a9b699e1121688f5d3d = $this->env->getExtension("native_profiler");
        $__internal_904afb69c060736a0baeba54897863e4e47a302dfd0c7a9b699e1121688f5d3d->enter($__internal_904afb69c060736a0baeba54897863e4e47a302dfd0c7a9b699e1121688f5d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:afficherUtilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904afb69c060736a0baeba54897863e4e47a302dfd0c7a9b699e1121688f5d3d->leave($__internal_904afb69c060736a0baeba54897863e4e47a302dfd0c7a9b699e1121688f5d3d_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5bdc9394720eb18b893fcaaa2bc88b9c92329a98c1a96cf0441e2263e6f7feb8 = $this->env->getExtension("native_profiler");
        $__internal_5bdc9394720eb18b893fcaaa2bc88b9c92329a98c1a96cf0441e2263e6f7feb8->enter($__internal_5bdc9394720eb18b893fcaaa2bc88b9c92329a98c1a96cf0441e2263e6f7feb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
\t<font color = \"red\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
        echo "</font>
\t<p>
\t\t<fieldset>
\t\t\t<legend>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</legend>
\t\t\tRole actuel : 
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rolesToString", array()), "html", null, true);
        echo "
\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formModifierRole"]) ? $context["formModifierRole"] : $this->getContext($context, "formModifierRole")), 'form');
        echo "
\t\t</fieldset>
\t</p>
</div>
<a class=\"btn btn-primary\" href=\"#null\" onclick=\"javascript:history.back();\">Page précédente</a>

";
        
        $__internal_5bdc9394720eb18b893fcaaa2bc88b9c92329a98c1a96cf0441e2263e6f7feb8->leave($__internal_5bdc9394720eb18b893fcaaa2bc88b9c92329a98c1a96cf0441e2263e6f7feb8_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:afficherUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<font color = "red">{{messageImportant}}</font>*/
/* 	<p>*/
/* 		<fieldset>*/
/* 			<legend>{{user.username}}</legend>*/
/* 			Role actuel : */
/* 			{{ user.rolesToString }}*/
/* 			{{ form(formModifierRole) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* </div>*/
/* <a class="btn btn-primary" href="#null" onclick="javascript:history.back();">Page précédente</a>*/
/* */
/* {% endblock %}*/
