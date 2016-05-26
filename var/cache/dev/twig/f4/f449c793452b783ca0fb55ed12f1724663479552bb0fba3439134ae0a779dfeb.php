<?php

/* @LIFOClassif/Admin/afficherUtilisateur.html.twig */
class __TwigTemplate_bf46e5820a4b32e71aa5b199617467b31f2ef8dbc4719cf18e028f47716ec958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/afficherUtilisateur.html.twig", 1);
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
        $__internal_07a30abd592acc425c64f7aa58d805bd177d73bf1f1cbb4b7b139f56b845f551 = $this->env->getExtension("native_profiler");
        $__internal_07a30abd592acc425c64f7aa58d805bd177d73bf1f1cbb4b7b139f56b845f551->enter($__internal_07a30abd592acc425c64f7aa58d805bd177d73bf1f1cbb4b7b139f56b845f551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/afficherUtilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a30abd592acc425c64f7aa58d805bd177d73bf1f1cbb4b7b139f56b845f551->leave($__internal_07a30abd592acc425c64f7aa58d805bd177d73bf1f1cbb4b7b139f56b845f551_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ebb7d09385deffd59a1fe7d2e110fa0749a175940dec95e2254a3588f0255e71 = $this->env->getExtension("native_profiler");
        $__internal_ebb7d09385deffd59a1fe7d2e110fa0749a175940dec95e2254a3588f0255e71->enter($__internal_ebb7d09385deffd59a1fe7d2e110fa0749a175940dec95e2254a3588f0255e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_ebb7d09385deffd59a1fe7d2e110fa0749a175940dec95e2254a3588f0255e71->leave($__internal_ebb7d09385deffd59a1fe7d2e110fa0749a175940dec95e2254a3588f0255e71_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/afficherUtilisateur.html.twig";
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
