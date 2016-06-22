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
        $__internal_46cb036c6299a85ad7b81c449e775cad085568c9c72816580ae1c308e68abeea = $this->env->getExtension("native_profiler");
        $__internal_46cb036c6299a85ad7b81c449e775cad085568c9c72816580ae1c308e68abeea->enter($__internal_46cb036c6299a85ad7b81c449e775cad085568c9c72816580ae1c308e68abeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46cb036c6299a85ad7b81c449e775cad085568c9c72816580ae1c308e68abeea->leave($__internal_46cb036c6299a85ad7b81c449e775cad085568c9c72816580ae1c308e68abeea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3395bc88de58244f27daf6633efb09afc97ce6e0f6192391755f72e5c52f0eb3 = $this->env->getExtension("native_profiler");
        $__internal_3395bc88de58244f27daf6633efb09afc97ce6e0f6192391755f72e5c52f0eb3->enter($__internal_3395bc88de58244f27daf6633efb09afc97ce6e0f6192391755f72e5c52f0eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_3395bc88de58244f27daf6633efb09afc97ce6e0f6192391755f72e5c52f0eb3->leave($__internal_3395bc88de58244f27daf6633efb09afc97ce6e0f6192391755f72e5c52f0eb3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56b504000b4de5a2a216ce64a7b0750a5e2b66ac176d68b5cbcca1360ecca321 = $this->env->getExtension("native_profiler");
        $__internal_56b504000b4de5a2a216ce64a7b0750a5e2b66ac176d68b5cbcca1360ecca321->enter($__internal_56b504000b4de5a2a216ce64a7b0750a5e2b66ac176d68b5cbcca1360ecca321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_56b504000b4de5a2a216ce64a7b0750a5e2b66ac176d68b5cbcca1360ecca321->leave($__internal_56b504000b4de5a2a216ce64a7b0750a5e2b66ac176d68b5cbcca1360ecca321_prof);

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
