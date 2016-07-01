<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
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
        $__internal_780d00edd578154aab9f71100620da78a120e43c0648ae77e464b21e9ff07299 = $this->env->getExtension("native_profiler");
        $__internal_780d00edd578154aab9f71100620da78a120e43c0648ae77e464b21e9ff07299->enter($__internal_780d00edd578154aab9f71100620da78a120e43c0648ae77e464b21e9ff07299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780d00edd578154aab9f71100620da78a120e43c0648ae77e464b21e9ff07299->leave($__internal_780d00edd578154aab9f71100620da78a120e43c0648ae77e464b21e9ff07299_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7f4026f99051565d32c084e5d35985b40a7b97889d40635e32fe5ae73e40281 = $this->env->getExtension("native_profiler");
        $__internal_b7f4026f99051565d32c084e5d35985b40a7b97889d40635e32fe5ae73e40281->enter($__internal_b7f4026f99051565d32c084e5d35985b40a7b97889d40635e32fe5ae73e40281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_b7f4026f99051565d32c084e5d35985b40a7b97889d40635e32fe5ae73e40281->leave($__internal_b7f4026f99051565d32c084e5d35985b40a7b97889d40635e32fe5ae73e40281_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e375db15629fbf894c296af40fa3214adc4db3c191f60f42f5a61e8df713d21f = $this->env->getExtension("native_profiler");
        $__internal_e375db15629fbf894c296af40fa3214adc4db3c191f60f42f5a61e8df713d21f->enter($__internal_e375db15629fbf894c296af40fa3214adc4db3c191f60f42f5a61e8df713d21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_e375db15629fbf894c296af40fa3214adc4db3c191f60f42f5a61e8df713d21f->leave($__internal_e375db15629fbf894c296af40fa3214adc4db3c191f60f42f5a61e8df713d21f_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:index.html.twig";
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
