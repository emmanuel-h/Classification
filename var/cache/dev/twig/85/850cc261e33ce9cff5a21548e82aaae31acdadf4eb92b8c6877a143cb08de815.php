<?php

/* @LIFOClassif/layoutGeneral.html.twig */
class __TwigTemplate_92ffdd026c92cb435e6b726c60ff8095ea19bec95e56589508b6bafa81643146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutGeneral.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_475faed531f39a102de7dbf0331d70e8a7faac911a27fcf71ffc4d97c687e945 = $this->env->getExtension("native_profiler");
        $__internal_475faed531f39a102de7dbf0331d70e8a7faac911a27fcf71ffc4d97c687e945->enter($__internal_475faed531f39a102de7dbf0331d70e8a7faac911a27fcf71ffc4d97c687e945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475faed531f39a102de7dbf0331d70e8a7faac911a27fcf71ffc4d97c687e945->leave($__internal_475faed531f39a102de7dbf0331d70e8a7faac911a27fcf71ffc4d97c687e945_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fbe01abf6cdfaefd1c9a91275568a25766cd8839f587687a81addde8389d263 = $this->env->getExtension("native_profiler");
        $__internal_1fbe01abf6cdfaefd1c9a91275568a25766cd8839f587687a81addde8389d263->enter($__internal_1fbe01abf6cdfaefd1c9a91275568a25766cd8839f587687a81addde8389d263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_1fbe01abf6cdfaefd1c9a91275568a25766cd8839f587687a81addde8389d263->leave($__internal_1fbe01abf6cdfaefd1c9a91275568a25766cd8839f587687a81addde8389d263_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1a8e815cf48471a496ba3301045c975951fc342589e356b55e18e8f4e27c0bb7 = $this->env->getExtension("native_profiler");
        $__internal_1a8e815cf48471a496ba3301045c975951fc342589e356b55e18e8f4e27c0bb7->enter($__internal_1a8e815cf48471a496ba3301045c975951fc342589e356b55e18e8f4e27c0bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_1a8e815cf48471a496ba3301045c975951fc342589e356b55e18e8f4e27c0bb7->leave($__internal_1a8e815cf48471a496ba3301045c975951fc342589e356b55e18e8f4e27c0bb7_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
