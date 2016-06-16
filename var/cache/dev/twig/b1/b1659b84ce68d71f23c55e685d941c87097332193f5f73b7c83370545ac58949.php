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
        $__internal_027e8f21fdfc83ff5a7c30ccd14cca47a2800e4aa7274566bbb307b033a52b4e = $this->env->getExtension("native_profiler");
        $__internal_027e8f21fdfc83ff5a7c30ccd14cca47a2800e4aa7274566bbb307b033a52b4e->enter($__internal_027e8f21fdfc83ff5a7c30ccd14cca47a2800e4aa7274566bbb307b033a52b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027e8f21fdfc83ff5a7c30ccd14cca47a2800e4aa7274566bbb307b033a52b4e->leave($__internal_027e8f21fdfc83ff5a7c30ccd14cca47a2800e4aa7274566bbb307b033a52b4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d70bfd44b2218d18f8ad0f834877f65e671a1b6e19d0d089c7458a502999733 = $this->env->getExtension("native_profiler");
        $__internal_4d70bfd44b2218d18f8ad0f834877f65e671a1b6e19d0d089c7458a502999733->enter($__internal_4d70bfd44b2218d18f8ad0f834877f65e671a1b6e19d0d089c7458a502999733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_4d70bfd44b2218d18f8ad0f834877f65e671a1b6e19d0d089c7458a502999733->leave($__internal_4d70bfd44b2218d18f8ad0f834877f65e671a1b6e19d0d089c7458a502999733_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c75fb410ac9fd98b1e1cbfdff7b302c4f6b868fd8f581cb7f0621fc89390dc22 = $this->env->getExtension("native_profiler");
        $__internal_c75fb410ac9fd98b1e1cbfdff7b302c4f6b868fd8f581cb7f0621fc89390dc22->enter($__internal_c75fb410ac9fd98b1e1cbfdff7b302c4f6b868fd8f581cb7f0621fc89390dc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_c75fb410ac9fd98b1e1cbfdff7b302c4f6b868fd8f581cb7f0621fc89390dc22->leave($__internal_c75fb410ac9fd98b1e1cbfdff7b302c4f6b868fd8f581cb7f0621fc89390dc22_prof);

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
