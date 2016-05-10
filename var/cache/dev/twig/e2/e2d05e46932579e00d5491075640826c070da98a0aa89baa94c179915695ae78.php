<?php

/* LIFOClassifBundle:Platform:tesson.html.twig */
class __TwigTemplate_15d248a09ffea0fb775fe3f599fcd38529064bdfc740d5528a4417b15b6c16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:tesson.html.twig", 1);
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
        $__internal_f552807763a03050d721762b5860d9703933b65d03aff7d3d0d7a9da8a2a6481 = $this->env->getExtension("native_profiler");
        $__internal_f552807763a03050d721762b5860d9703933b65d03aff7d3d0d7a9da8a2a6481->enter($__internal_f552807763a03050d721762b5860d9703933b65d03aff7d3d0d7a9da8a2a6481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f552807763a03050d721762b5860d9703933b65d03aff7d3d0d7a9da8a2a6481->leave($__internal_f552807763a03050d721762b5860d9703933b65d03aff7d3d0d7a9da8a2a6481_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_846a850951752844edda9ac4c73b978d359fa6c4d986d68b138bd5e6acc0be16 = $this->env->getExtension("native_profiler");
        $__internal_846a850951752844edda9ac4c73b978d359fa6c4d986d68b138bd5e6acc0be16->enter($__internal_846a850951752844edda9ac4c73b978d359fa6c4d986d68b138bd5e6acc0be16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_846a850951752844edda9ac4c73b978d359fa6c4d986d68b138bd5e6acc0be16->leave($__internal_846a850951752844edda9ac4c73b978d359fa6c4d986d68b138bd5e6acc0be16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5306a71737017c32f7bb1710d0730598e70d320a38829a86b1ccd2ea713ad3f = $this->env->getExtension("native_profiler");
        $__internal_a5306a71737017c32f7bb1710d0730598e70d320a38829a86b1ccd2ea713ad3f->enter($__internal_a5306a71737017c32f7bb1710d0730598e70d320a38829a86b1ccd2ea713ad3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour travailler sur un tesson
\t</p>
";
        
        $__internal_a5306a71737017c32f7bb1710d0730598e70d320a38829a86b1ccd2ea713ad3f->leave($__internal_a5306a71737017c32f7bb1710d0730598e70d320a38829a86b1ccd2ea713ad3f_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tesson.html.twig";
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
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour travailler sur un tesson*/
/* 	</p>*/
/* {% endblock %}*/
