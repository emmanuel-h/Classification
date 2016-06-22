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
        $__internal_8ecbf40b4a9c6a0f4a7d12f20d2c46d7e65941ef7071f82caae03e1961090f16 = $this->env->getExtension("native_profiler");
        $__internal_8ecbf40b4a9c6a0f4a7d12f20d2c46d7e65941ef7071f82caae03e1961090f16->enter($__internal_8ecbf40b4a9c6a0f4a7d12f20d2c46d7e65941ef7071f82caae03e1961090f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecbf40b4a9c6a0f4a7d12f20d2c46d7e65941ef7071f82caae03e1961090f16->leave($__internal_8ecbf40b4a9c6a0f4a7d12f20d2c46d7e65941ef7071f82caae03e1961090f16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_286f73d4800b2973fe5978dd5a2c8658cd7478e3e82cdf6c3e3f3be15f036b20 = $this->env->getExtension("native_profiler");
        $__internal_286f73d4800b2973fe5978dd5a2c8658cd7478e3e82cdf6c3e3f3be15f036b20->enter($__internal_286f73d4800b2973fe5978dd5a2c8658cd7478e3e82cdf6c3e3f3be15f036b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_286f73d4800b2973fe5978dd5a2c8658cd7478e3e82cdf6c3e3f3be15f036b20->leave($__internal_286f73d4800b2973fe5978dd5a2c8658cd7478e3e82cdf6c3e3f3be15f036b20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4316ec3a42cb4251c64bfc736c93eecf32185a1038bd1b13814f62cd0bfd99b = $this->env->getExtension("native_profiler");
        $__internal_a4316ec3a42cb4251c64bfc736c93eecf32185a1038bd1b13814f62cd0bfd99b->enter($__internal_a4316ec3a42cb4251c64bfc736c93eecf32185a1038bd1b13814f62cd0bfd99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_a4316ec3a42cb4251c64bfc736c93eecf32185a1038bd1b13814f62cd0bfd99b->leave($__internal_a4316ec3a42cb4251c64bfc736c93eecf32185a1038bd1b13814f62cd0bfd99b_prof);

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
