<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
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
        $__internal_0623af8034abd99f5539b40c1743ea67b4461b9c478cb73a31455d970f37a081 = $this->env->getExtension("native_profiler");
        $__internal_0623af8034abd99f5539b40c1743ea67b4461b9c478cb73a31455d970f37a081->enter($__internal_0623af8034abd99f5539b40c1743ea67b4461b9c478cb73a31455d970f37a081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0623af8034abd99f5539b40c1743ea67b4461b9c478cb73a31455d970f37a081->leave($__internal_0623af8034abd99f5539b40c1743ea67b4461b9c478cb73a31455d970f37a081_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f50af12716cfb928f31be5fa7e54f4fd9d8472343306318330ef5cdc52c9bf3 = $this->env->getExtension("native_profiler");
        $__internal_2f50af12716cfb928f31be5fa7e54f4fd9d8472343306318330ef5cdc52c9bf3->enter($__internal_2f50af12716cfb928f31be5fa7e54f4fd9d8472343306318330ef5cdc52c9bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_2f50af12716cfb928f31be5fa7e54f4fd9d8472343306318330ef5cdc52c9bf3->leave($__internal_2f50af12716cfb928f31be5fa7e54f4fd9d8472343306318330ef5cdc52c9bf3_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_454da15fd5daf878b8a1868681b1d55aa74cfe0688664f684bab542e1e599a23 = $this->env->getExtension("native_profiler");
        $__internal_454da15fd5daf878b8a1868681b1d55aa74cfe0688664f684bab542e1e599a23->enter($__internal_454da15fd5daf878b8a1868681b1d55aa74cfe0688664f684bab542e1e599a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_454da15fd5daf878b8a1868681b1d55aa74cfe0688664f684bab542e1e599a23->leave($__internal_454da15fd5daf878b8a1868681b1d55aa74cfe0688664f684bab542e1e599a23_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
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
