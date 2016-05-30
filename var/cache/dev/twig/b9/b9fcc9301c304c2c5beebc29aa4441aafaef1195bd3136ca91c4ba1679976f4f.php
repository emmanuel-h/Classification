<?php

/* LIFOClassifBundle::layoutAdmin.html.twig */
class __TwigTemplate_bc85a8408e10c2b4663222f7de80f72f7ddde689141173b4df11892d438f4dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutAdmin.html.twig", 1);
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
        $__internal_c00f1ce1d45135059459a89bdfd5c69e1062713f3030f0a6ec904419679be44b = $this->env->getExtension("native_profiler");
        $__internal_c00f1ce1d45135059459a89bdfd5c69e1062713f3030f0a6ec904419679be44b->enter($__internal_c00f1ce1d45135059459a89bdfd5c69e1062713f3030f0a6ec904419679be44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c00f1ce1d45135059459a89bdfd5c69e1062713f3030f0a6ec904419679be44b->leave($__internal_c00f1ce1d45135059459a89bdfd5c69e1062713f3030f0a6ec904419679be44b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dcde10cdce2609fb7c30666dfee3eba4d277499af21b56ca15b714a62a4a83e = $this->env->getExtension("native_profiler");
        $__internal_5dcde10cdce2609fb7c30666dfee3eba4d277499af21b56ca15b714a62a4a83e->enter($__internal_5dcde10cdce2609fb7c30666dfee3eba4d277499af21b56ca15b714a62a4a83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_5dcde10cdce2609fb7c30666dfee3eba4d277499af21b56ca15b714a62a4a83e->leave($__internal_5dcde10cdce2609fb7c30666dfee3eba4d277499af21b56ca15b714a62a4a83e_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f9ea9d7ff11e2168d6c1e8885051d26a5a1ea83062ef7d1a61de6d1604cfbc12 = $this->env->getExtension("native_profiler");
        $__internal_f9ea9d7ff11e2168d6c1e8885051d26a5a1ea83062ef7d1a61de6d1604cfbc12->enter($__internal_f9ea9d7ff11e2168d6c1e8885051d26a5a1ea83062ef7d1a61de6d1604cfbc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_f9ea9d7ff11e2168d6c1e8885051d26a5a1ea83062ef7d1a61de6d1604cfbc12->leave($__internal_f9ea9d7ff11e2168d6c1e8885051d26a5a1ea83062ef7d1a61de6d1604cfbc12_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
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
