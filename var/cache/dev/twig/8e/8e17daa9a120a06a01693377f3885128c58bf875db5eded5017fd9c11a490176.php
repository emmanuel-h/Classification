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
        $__internal_48c7581ce3bd9439f3c4880083fb4112a4783d30632990a7a7eb30b7f7ceb0b9 = $this->env->getExtension("native_profiler");
        $__internal_48c7581ce3bd9439f3c4880083fb4112a4783d30632990a7a7eb30b7f7ceb0b9->enter($__internal_48c7581ce3bd9439f3c4880083fb4112a4783d30632990a7a7eb30b7f7ceb0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48c7581ce3bd9439f3c4880083fb4112a4783d30632990a7a7eb30b7f7ceb0b9->leave($__internal_48c7581ce3bd9439f3c4880083fb4112a4783d30632990a7a7eb30b7f7ceb0b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67accc18f4b0d3e9dbab61db8f36cdfec52f2620fc8dfd1a496465f209f1a0e6 = $this->env->getExtension("native_profiler");
        $__internal_67accc18f4b0d3e9dbab61db8f36cdfec52f2620fc8dfd1a496465f209f1a0e6->enter($__internal_67accc18f4b0d3e9dbab61db8f36cdfec52f2620fc8dfd1a496465f209f1a0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_67accc18f4b0d3e9dbab61db8f36cdfec52f2620fc8dfd1a496465f209f1a0e6->leave($__internal_67accc18f4b0d3e9dbab61db8f36cdfec52f2620fc8dfd1a496465f209f1a0e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a7a152d2c75e450654779105347d39e8589447fc7e735e6900a98194bd513ba = $this->env->getExtension("native_profiler");
        $__internal_6a7a152d2c75e450654779105347d39e8589447fc7e735e6900a98194bd513ba->enter($__internal_6a7a152d2c75e450654779105347d39e8589447fc7e735e6900a98194bd513ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_6a7a152d2c75e450654779105347d39e8589447fc7e735e6900a98194bd513ba->leave($__internal_6a7a152d2c75e450654779105347d39e8589447fc7e735e6900a98194bd513ba_prof);

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
