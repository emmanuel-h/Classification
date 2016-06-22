<?php

/* @LIFOClassif/Platform/index.html.twig */
class __TwigTemplate_6c5727bd5ba52cac76d8756f50842e6d94474be7170dde15522885ae5d5c1fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63bf67cb57d92ec8c5e7f97cbe940a1cd17f9c7b1312f36ff260360323cb40fa = $this->env->getExtension("native_profiler");
        $__internal_63bf67cb57d92ec8c5e7f97cbe940a1cd17f9c7b1312f36ff260360323cb40fa->enter($__internal_63bf67cb57d92ec8c5e7f97cbe940a1cd17f9c7b1312f36ff260360323cb40fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63bf67cb57d92ec8c5e7f97cbe940a1cd17f9c7b1312f36ff260360323cb40fa->leave($__internal_63bf67cb57d92ec8c5e7f97cbe940a1cd17f9c7b1312f36ff260360323cb40fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21efc8fdf2b6148f895968066488f6a3bb56349a0bced00325d23a6fb68daa24 = $this->env->getExtension("native_profiler");
        $__internal_21efc8fdf2b6148f895968066488f6a3bb56349a0bced00325d23a6fb68daa24->enter($__internal_21efc8fdf2b6148f895968066488f6a3bb56349a0bced00325d23a6fb68daa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_21efc8fdf2b6148f895968066488f6a3bb56349a0bced00325d23a6fb68daa24->leave($__internal_21efc8fdf2b6148f895968066488f6a3bb56349a0bced00325d23a6fb68daa24_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1821538c47713f860f6e559d85aad49da2caa1c54fd4148eff9c622f6dc33f6b = $this->env->getExtension("native_profiler");
        $__internal_1821538c47713f860f6e559d85aad49da2caa1c54fd4148eff9c622f6dc33f6b->enter($__internal_1821538c47713f860f6e559d85aad49da2caa1c54fd4148eff9c622f6dc33f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_1821538c47713f860f6e559d85aad49da2caa1c54fd4148eff9c622f6dc33f6b->leave($__internal_1821538c47713f860f6e559d85aad49da2caa1c54fd4148eff9c622f6dc33f6b_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
