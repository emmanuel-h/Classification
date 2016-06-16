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
        $__internal_fb25232e5ea41a83763b48047581e1e4789ff00b7c9c92c2b075a327a06c7d23 = $this->env->getExtension("native_profiler");
        $__internal_fb25232e5ea41a83763b48047581e1e4789ff00b7c9c92c2b075a327a06c7d23->enter($__internal_fb25232e5ea41a83763b48047581e1e4789ff00b7c9c92c2b075a327a06c7d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb25232e5ea41a83763b48047581e1e4789ff00b7c9c92c2b075a327a06c7d23->leave($__internal_fb25232e5ea41a83763b48047581e1e4789ff00b7c9c92c2b075a327a06c7d23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48fee8fd82d8165b6a12f14ce2fb1939c644661da8e48cbc743a37a3e1c3542a = $this->env->getExtension("native_profiler");
        $__internal_48fee8fd82d8165b6a12f14ce2fb1939c644661da8e48cbc743a37a3e1c3542a->enter($__internal_48fee8fd82d8165b6a12f14ce2fb1939c644661da8e48cbc743a37a3e1c3542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_48fee8fd82d8165b6a12f14ce2fb1939c644661da8e48cbc743a37a3e1c3542a->leave($__internal_48fee8fd82d8165b6a12f14ce2fb1939c644661da8e48cbc743a37a3e1c3542a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca11f63b9989a6b5a37131f1125494604c5b18aa7627470636fe602b5e58eca6 = $this->env->getExtension("native_profiler");
        $__internal_ca11f63b9989a6b5a37131f1125494604c5b18aa7627470636fe602b5e58eca6->enter($__internal_ca11f63b9989a6b5a37131f1125494604c5b18aa7627470636fe602b5e58eca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_ca11f63b9989a6b5a37131f1125494604c5b18aa7627470636fe602b5e58eca6->leave($__internal_ca11f63b9989a6b5a37131f1125494604c5b18aa7627470636fe602b5e58eca6_prof);

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
