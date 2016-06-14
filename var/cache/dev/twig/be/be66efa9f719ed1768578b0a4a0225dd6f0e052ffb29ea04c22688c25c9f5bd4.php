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
        $__internal_9129cedddf28506c16f919e19ac0252c357a9ecd96bd942b1364c6e4c3eb97a6 = $this->env->getExtension("native_profiler");
        $__internal_9129cedddf28506c16f919e19ac0252c357a9ecd96bd942b1364c6e4c3eb97a6->enter($__internal_9129cedddf28506c16f919e19ac0252c357a9ecd96bd942b1364c6e4c3eb97a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9129cedddf28506c16f919e19ac0252c357a9ecd96bd942b1364c6e4c3eb97a6->leave($__internal_9129cedddf28506c16f919e19ac0252c357a9ecd96bd942b1364c6e4c3eb97a6_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5abd98d936f5e61aaa41a5a044f60bc8817d8f821dcfee8eeca2065cce66b838 = $this->env->getExtension("native_profiler");
        $__internal_5abd98d936f5e61aaa41a5a044f60bc8817d8f821dcfee8eeca2065cce66b838->enter($__internal_5abd98d936f5e61aaa41a5a044f60bc8817d8f821dcfee8eeca2065cce66b838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_5abd98d936f5e61aaa41a5a044f60bc8817d8f821dcfee8eeca2065cce66b838->leave($__internal_5abd98d936f5e61aaa41a5a044f60bc8817d8f821dcfee8eeca2065cce66b838_prof);

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
