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
        $__internal_eefe6323eb75a16fe0f762f0aff2978ebbdcbd62987fd96bb4b691b67582ff29 = $this->env->getExtension("native_profiler");
        $__internal_eefe6323eb75a16fe0f762f0aff2978ebbdcbd62987fd96bb4b691b67582ff29->enter($__internal_eefe6323eb75a16fe0f762f0aff2978ebbdcbd62987fd96bb4b691b67582ff29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefe6323eb75a16fe0f762f0aff2978ebbdcbd62987fd96bb4b691b67582ff29->leave($__internal_eefe6323eb75a16fe0f762f0aff2978ebbdcbd62987fd96bb4b691b67582ff29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_695b182c2d17e8f8b3cd6cb2e9a00a9308b639a020cd4428b2f79fa3c154651e = $this->env->getExtension("native_profiler");
        $__internal_695b182c2d17e8f8b3cd6cb2e9a00a9308b639a020cd4428b2f79fa3c154651e->enter($__internal_695b182c2d17e8f8b3cd6cb2e9a00a9308b639a020cd4428b2f79fa3c154651e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_695b182c2d17e8f8b3cd6cb2e9a00a9308b639a020cd4428b2f79fa3c154651e->leave($__internal_695b182c2d17e8f8b3cd6cb2e9a00a9308b639a020cd4428b2f79fa3c154651e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0eb777663e49297a73896ca73a7f389ff4343cb43b179de1c83573a1f108044 = $this->env->getExtension("native_profiler");
        $__internal_f0eb777663e49297a73896ca73a7f389ff4343cb43b179de1c83573a1f108044->enter($__internal_f0eb777663e49297a73896ca73a7f389ff4343cb43b179de1c83573a1f108044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_f0eb777663e49297a73896ca73a7f389ff4343cb43b179de1c83573a1f108044->leave($__internal_f0eb777663e49297a73896ca73a7f389ff4343cb43b179de1c83573a1f108044_prof);

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
