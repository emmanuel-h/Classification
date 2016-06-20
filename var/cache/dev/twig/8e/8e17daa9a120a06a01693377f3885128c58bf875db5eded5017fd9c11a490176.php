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
        $__internal_6ad8e8645043baa0778153a236d89a9b7b29ba37d91266153b7406f645ff46af = $this->env->getExtension("native_profiler");
        $__internal_6ad8e8645043baa0778153a236d89a9b7b29ba37d91266153b7406f645ff46af->enter($__internal_6ad8e8645043baa0778153a236d89a9b7b29ba37d91266153b7406f645ff46af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad8e8645043baa0778153a236d89a9b7b29ba37d91266153b7406f645ff46af->leave($__internal_6ad8e8645043baa0778153a236d89a9b7b29ba37d91266153b7406f645ff46af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc1cd7ba24b081e40021d9895565742fe05cf658e00d42bae0427a6d10176bb2 = $this->env->getExtension("native_profiler");
        $__internal_bc1cd7ba24b081e40021d9895565742fe05cf658e00d42bae0427a6d10176bb2->enter($__internal_bc1cd7ba24b081e40021d9895565742fe05cf658e00d42bae0427a6d10176bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_bc1cd7ba24b081e40021d9895565742fe05cf658e00d42bae0427a6d10176bb2->leave($__internal_bc1cd7ba24b081e40021d9895565742fe05cf658e00d42bae0427a6d10176bb2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e4e651917f77fdcc824b0e93a4db49f4ecc69e70661e6a2026aef94a30856fc = $this->env->getExtension("native_profiler");
        $__internal_9e4e651917f77fdcc824b0e93a4db49f4ecc69e70661e6a2026aef94a30856fc->enter($__internal_9e4e651917f77fdcc824b0e93a4db49f4ecc69e70661e6a2026aef94a30856fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_9e4e651917f77fdcc824b0e93a4db49f4ecc69e70661e6a2026aef94a30856fc->leave($__internal_9e4e651917f77fdcc824b0e93a4db49f4ecc69e70661e6a2026aef94a30856fc_prof);

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
