<?php

/* @LIFOClassif/layoutAdmin.html.twig */
class __TwigTemplate_738ca7cff67840c621883672b451ebea236f34427d0386e3a0096ddac1f6b228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutAdmin.html.twig", 1);
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
        $__internal_062dc6583e3ecdb4f77b386e5a5f6ad48da6256832909d646766f479ce993f07 = $this->env->getExtension("native_profiler");
        $__internal_062dc6583e3ecdb4f77b386e5a5f6ad48da6256832909d646766f479ce993f07->enter($__internal_062dc6583e3ecdb4f77b386e5a5f6ad48da6256832909d646766f479ce993f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_062dc6583e3ecdb4f77b386e5a5f6ad48da6256832909d646766f479ce993f07->leave($__internal_062dc6583e3ecdb4f77b386e5a5f6ad48da6256832909d646766f479ce993f07_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cfca747eed2829c36ac0f6b470edfa065e50c107762eade8fb3f1e40bfc7263 = $this->env->getExtension("native_profiler");
        $__internal_5cfca747eed2829c36ac0f6b470edfa065e50c107762eade8fb3f1e40bfc7263->enter($__internal_5cfca747eed2829c36ac0f6b470edfa065e50c107762eade8fb3f1e40bfc7263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_5cfca747eed2829c36ac0f6b470edfa065e50c107762eade8fb3f1e40bfc7263->leave($__internal_5cfca747eed2829c36ac0f6b470edfa065e50c107762eade8fb3f1e40bfc7263_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ab3be930ff9fd35791f9b91f96c1f0cbecb18861b71e8047d4d8dd0ce0c8d684 = $this->env->getExtension("native_profiler");
        $__internal_ab3be930ff9fd35791f9b91f96c1f0cbecb18861b71e8047d4d8dd0ce0c8d684->enter($__internal_ab3be930ff9fd35791f9b91f96c1f0cbecb18861b71e8047d4d8dd0ce0c8d684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_ab3be930ff9fd35791f9b91f96c1f0cbecb18861b71e8047d4d8dd0ce0c8d684->leave($__internal_ab3be930ff9fd35791f9b91f96c1f0cbecb18861b71e8047d4d8dd0ce0c8d684_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutAdmin.html.twig";
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
