<?php

/* LIFOClassifBundle::layout.html.twig */
class __TwigTemplate_d4f49b0a226a39a22fd6f1a094c01c90b7f102591dab4517fdd7aa9cdb591585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layout.html.twig", 1);
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
        $__internal_0303b538cf5027b15cfb36c3420104aeda9d4a78909b3d956e6ffcd2c9a4d1c6 = $this->env->getExtension("native_profiler");
        $__internal_0303b538cf5027b15cfb36c3420104aeda9d4a78909b3d956e6ffcd2c9a4d1c6->enter($__internal_0303b538cf5027b15cfb36c3420104aeda9d4a78909b3d956e6ffcd2c9a4d1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0303b538cf5027b15cfb36c3420104aeda9d4a78909b3d956e6ffcd2c9a4d1c6->leave($__internal_0303b538cf5027b15cfb36c3420104aeda9d4a78909b3d956e6ffcd2c9a4d1c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16cf1de5f89cc34a8ce83170eaa89a807151e518f9ff3ff82a3a7aa2d1a89155 = $this->env->getExtension("native_profiler");
        $__internal_16cf1de5f89cc34a8ce83170eaa89a807151e518f9ff3ff82a3a7aa2d1a89155->enter($__internal_16cf1de5f89cc34a8ce83170eaa89a807151e518f9ff3ff82a3a7aa2d1a89155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_16cf1de5f89cc34a8ce83170eaa89a807151e518f9ff3ff82a3a7aa2d1a89155->leave($__internal_16cf1de5f89cc34a8ce83170eaa89a807151e518f9ff3ff82a3a7aa2d1a89155_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_afe886a50fb39c78e384491983d7bca4c80b6eb8c644c7bbf619c9c9601c4b56 = $this->env->getExtension("native_profiler");
        $__internal_afe886a50fb39c78e384491983d7bca4c80b6eb8c644c7bbf619c9c9601c4b56->enter($__internal_afe886a50fb39c78e384491983d7bca4c80b6eb8c644c7bbf619c9c9601c4b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_afe886a50fb39c78e384491983d7bca4c80b6eb8c644c7bbf619c9c9601c4b56->leave($__internal_afe886a50fb39c78e384491983d7bca4c80b6eb8c644c7bbf619c9c9601c4b56_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layout.html.twig";
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
