<?php

/* LIFOClassifBundle:Platform:telechargement.html.twig */
class __TwigTemplate_8878c254b77a9310a6a062fde26388c2772d447a97503ea22367db4c7a665006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:telechargement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c8c30382993368265f74771bcb45effd1a5e20cbe21ae53bc903b8906082062 = $this->env->getExtension("native_profiler");
        $__internal_3c8c30382993368265f74771bcb45effd1a5e20cbe21ae53bc903b8906082062->enter($__internal_3c8c30382993368265f74771bcb45effd1a5e20cbe21ae53bc903b8906082062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8c30382993368265f74771bcb45effd1a5e20cbe21ae53bc903b8906082062->leave($__internal_3c8c30382993368265f74771bcb45effd1a5e20cbe21ae53bc903b8906082062_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f47964f749976af83fe9e8f4c94cb4cdbaf4b90555f4d2dc1283604d93930548 = $this->env->getExtension("native_profiler");
        $__internal_f47964f749976af83fe9e8f4c94cb4cdbaf4b90555f4d2dc1283604d93930548->enter($__internal_f47964f749976af83fe9e8f4c94cb4cdbaf4b90555f4d2dc1283604d93930548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_f47964f749976af83fe9e8f4c94cb4cdbaf4b90555f4d2dc1283604d93930548->leave($__internal_f47964f749976af83fe9e8f4c94cb4cdbaf4b90555f4d2dc1283604d93930548_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2ba743f36cf3b3537b87ece2ded65cc0786746f8f0dcc743a0cc211b9ce16b5 = $this->env->getExtension("native_profiler");
        $__internal_f2ba743f36cf3b3537b87ece2ded65cc0786746f8f0dcc743a0cc211b9ce16b5->enter($__internal_f2ba743f36cf3b3537b87ece2ded65cc0786746f8f0dcc743a0cc211b9ce16b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_f2ba743f36cf3b3537b87ece2ded65cc0786746f8f0dcc743a0cc211b9ce16b5->leave($__internal_f2ba743f36cf3b3537b87ece2ded65cc0786746f8f0dcc743a0cc211b9ce16b5_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:telechargement.html.twig";
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
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Téléchargement{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour télécharger une image*/
/* 	</p>*/
/* {% endblock %}*/
