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
        $__internal_690e8949e74a9cf1f2d928369ceda298032fa73fbb6710006ccc8b00cbded2e0 = $this->env->getExtension("native_profiler");
        $__internal_690e8949e74a9cf1f2d928369ceda298032fa73fbb6710006ccc8b00cbded2e0->enter($__internal_690e8949e74a9cf1f2d928369ceda298032fa73fbb6710006ccc8b00cbded2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690e8949e74a9cf1f2d928369ceda298032fa73fbb6710006ccc8b00cbded2e0->leave($__internal_690e8949e74a9cf1f2d928369ceda298032fa73fbb6710006ccc8b00cbded2e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5d7c3ddb4b92f67a2bd557665fb390bdcda059e689630286e2d89fd319f1727 = $this->env->getExtension("native_profiler");
        $__internal_b5d7c3ddb4b92f67a2bd557665fb390bdcda059e689630286e2d89fd319f1727->enter($__internal_b5d7c3ddb4b92f67a2bd557665fb390bdcda059e689630286e2d89fd319f1727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b5d7c3ddb4b92f67a2bd557665fb390bdcda059e689630286e2d89fd319f1727->leave($__internal_b5d7c3ddb4b92f67a2bd557665fb390bdcda059e689630286e2d89fd319f1727_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_7425689328aed56541bc9c0cb21f0dc0c5ad7a2f83d921434ade50a0186cdcaa = $this->env->getExtension("native_profiler");
        $__internal_7425689328aed56541bc9c0cb21f0dc0c5ad7a2f83d921434ade50a0186cdcaa->enter($__internal_7425689328aed56541bc9c0cb21f0dc0c5ad7a2f83d921434ade50a0186cdcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_7425689328aed56541bc9c0cb21f0dc0c5ad7a2f83d921434ade50a0186cdcaa->leave($__internal_7425689328aed56541bc9c0cb21f0dc0c5ad7a2f83d921434ade50a0186cdcaa_prof);

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
