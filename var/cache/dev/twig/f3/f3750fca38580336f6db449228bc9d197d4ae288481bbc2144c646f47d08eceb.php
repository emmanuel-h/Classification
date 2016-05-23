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
        $__internal_06f22dbfe5e28d76423c580ef08d78b393324ce408824b3c49e8b1ed07e239c3 = $this->env->getExtension("native_profiler");
        $__internal_06f22dbfe5e28d76423c580ef08d78b393324ce408824b3c49e8b1ed07e239c3->enter($__internal_06f22dbfe5e28d76423c580ef08d78b393324ce408824b3c49e8b1ed07e239c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f22dbfe5e28d76423c580ef08d78b393324ce408824b3c49e8b1ed07e239c3->leave($__internal_06f22dbfe5e28d76423c580ef08d78b393324ce408824b3c49e8b1ed07e239c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_683e2ea6ae3600e9db8273555f6f10643fc4967fc6650b458be732445b82cb88 = $this->env->getExtension("native_profiler");
        $__internal_683e2ea6ae3600e9db8273555f6f10643fc4967fc6650b458be732445b82cb88->enter($__internal_683e2ea6ae3600e9db8273555f6f10643fc4967fc6650b458be732445b82cb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_683e2ea6ae3600e9db8273555f6f10643fc4967fc6650b458be732445b82cb88->leave($__internal_683e2ea6ae3600e9db8273555f6f10643fc4967fc6650b458be732445b82cb88_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_394c1bca5c59afe05c9c032abaa3f177e8b5f0db9c4f6bc68055e37b71f6f4b7 = $this->env->getExtension("native_profiler");
        $__internal_394c1bca5c59afe05c9c032abaa3f177e8b5f0db9c4f6bc68055e37b71f6f4b7->enter($__internal_394c1bca5c59afe05c9c032abaa3f177e8b5f0db9c4f6bc68055e37b71f6f4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_394c1bca5c59afe05c9c032abaa3f177e8b5f0db9c4f6bc68055e37b71f6f4b7->leave($__internal_394c1bca5c59afe05c9c032abaa3f177e8b5f0db9c4f6bc68055e37b71f6f4b7_prof);

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
