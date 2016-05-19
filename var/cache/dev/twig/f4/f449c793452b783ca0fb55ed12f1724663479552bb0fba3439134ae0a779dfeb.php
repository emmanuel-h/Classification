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
        $__internal_6ebc2d7600c81c16951da64ffd79b197dc65b6be35e80914d90c880cb282f47e = $this->env->getExtension("native_profiler");
        $__internal_6ebc2d7600c81c16951da64ffd79b197dc65b6be35e80914d90c880cb282f47e->enter($__internal_6ebc2d7600c81c16951da64ffd79b197dc65b6be35e80914d90c880cb282f47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/afficherUtilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ebc2d7600c81c16951da64ffd79b197dc65b6be35e80914d90c880cb282f47e->leave($__internal_6ebc2d7600c81c16951da64ffd79b197dc65b6be35e80914d90c880cb282f47e_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_466f7ddfad9952e1bfc3768758d1a922a09b4fb645c8eeeda013bee9f595e4de = $this->env->getExtension("native_profiler");
        $__internal_466f7ddfad9952e1bfc3768758d1a922a09b4fb645c8eeeda013bee9f595e4de->enter($__internal_466f7ddfad9952e1bfc3768758d1a922a09b4fb645c8eeeda013bee9f595e4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
\t\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formModifierRole"]) ? $context["formModifierRole"] : $this->getContext($context, "formModifierRole")), 'form');
        echo "
\t\t</fieldset>
\t</p>
</div>

";
        
        $__internal_466f7ddfad9952e1bfc3768758d1a922a09b4fb645c8eeeda013bee9f595e4de->leave($__internal_466f7ddfad9952e1bfc3768758d1a922a09b4fb645c8eeeda013bee9f595e4de_prof);

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
        return array (  54 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/* 			{{ form(formModifierRole) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* </div>*/
/* */
/* {% endblock %}*/
