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
        $__internal_514ae82309a00ab22d4c2a59fa172b337f7639ee9b6597be96ef88a516fc57bb = $this->env->getExtension("native_profiler");
        $__internal_514ae82309a00ab22d4c2a59fa172b337f7639ee9b6597be96ef88a516fc57bb->enter($__internal_514ae82309a00ab22d4c2a59fa172b337f7639ee9b6597be96ef88a516fc57bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_514ae82309a00ab22d4c2a59fa172b337f7639ee9b6597be96ef88a516fc57bb->leave($__internal_514ae82309a00ab22d4c2a59fa172b337f7639ee9b6597be96ef88a516fc57bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5e55e5b4a3c46fe7b405a5c955bcd6b6878f11cd0b509894620ec0ef7c37850 = $this->env->getExtension("native_profiler");
        $__internal_d5e55e5b4a3c46fe7b405a5c955bcd6b6878f11cd0b509894620ec0ef7c37850->enter($__internal_d5e55e5b4a3c46fe7b405a5c955bcd6b6878f11cd0b509894620ec0ef7c37850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_d5e55e5b4a3c46fe7b405a5c955bcd6b6878f11cd0b509894620ec0ef7c37850->leave($__internal_d5e55e5b4a3c46fe7b405a5c955bcd6b6878f11cd0b509894620ec0ef7c37850_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_9cea609cbd86d12457d77657c06c70945e8f92dc2de61470dc8ac1e77b283607 = $this->env->getExtension("native_profiler");
        $__internal_9cea609cbd86d12457d77657c06c70945e8f92dc2de61470dc8ac1e77b283607->enter($__internal_9cea609cbd86d12457d77657c06c70945e8f92dc2de61470dc8ac1e77b283607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_9cea609cbd86d12457d77657c06c70945e8f92dc2de61470dc8ac1e77b283607->leave($__internal_9cea609cbd86d12457d77657c06c70945e8f92dc2de61470dc8ac1e77b283607_prof);

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
