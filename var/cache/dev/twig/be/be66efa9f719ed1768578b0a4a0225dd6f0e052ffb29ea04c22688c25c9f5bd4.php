<?php

/* LIFOClassifBundle:Admin:utilisateurAfficher.html.twig */
class __TwigTemplate_55af234e97703f30f36ba0bd0789536d7f05cb71cc0952de9de105596fc56ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig", 1);
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
        $__internal_3cb242a3b717fb24e2c742a8949aabe11fc98d06b1d5883e69bed090cd0e6102 = $this->env->getExtension("native_profiler");
        $__internal_3cb242a3b717fb24e2c742a8949aabe11fc98d06b1d5883e69bed090cd0e6102->enter($__internal_3cb242a3b717fb24e2c742a8949aabe11fc98d06b1d5883e69bed090cd0e6102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb242a3b717fb24e2c742a8949aabe11fc98d06b1d5883e69bed090cd0e6102->leave($__internal_3cb242a3b717fb24e2c742a8949aabe11fc98d06b1d5883e69bed090cd0e6102_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_866fff918c4407d8f0ac8d235659f93d2ffb2289d7cfe07dd99d385bc6a392d0 = $this->env->getExtension("native_profiler");
        $__internal_866fff918c4407d8f0ac8d235659f93d2ffb2289d7cfe07dd99d385bc6a392d0->enter($__internal_866fff918c4407d8f0ac8d235659f93d2ffb2289d7cfe07dd99d385bc6a392d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_866fff918c4407d8f0ac8d235659f93d2ffb2289d7cfe07dd99d385bc6a392d0->leave($__internal_866fff918c4407d8f0ac8d235659f93d2ffb2289d7cfe07dd99d385bc6a392d0_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig";
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
