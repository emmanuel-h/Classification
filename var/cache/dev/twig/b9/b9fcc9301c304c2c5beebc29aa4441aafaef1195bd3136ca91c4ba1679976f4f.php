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
        $__internal_a1e2a05151c94f9491cbb6978da824b29711593f29ed50eb3d82669a56312bd3 = $this->env->getExtension("native_profiler");
        $__internal_a1e2a05151c94f9491cbb6978da824b29711593f29ed50eb3d82669a56312bd3->enter($__internal_a1e2a05151c94f9491cbb6978da824b29711593f29ed50eb3d82669a56312bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e2a05151c94f9491cbb6978da824b29711593f29ed50eb3d82669a56312bd3->leave($__internal_a1e2a05151c94f9491cbb6978da824b29711593f29ed50eb3d82669a56312bd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_464b4cd7b7c17e36a9de3599e90de1202fcc223fc9f23b873356b12ee78a4dbc = $this->env->getExtension("native_profiler");
        $__internal_464b4cd7b7c17e36a9de3599e90de1202fcc223fc9f23b873356b12ee78a4dbc->enter($__internal_464b4cd7b7c17e36a9de3599e90de1202fcc223fc9f23b873356b12ee78a4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_464b4cd7b7c17e36a9de3599e90de1202fcc223fc9f23b873356b12ee78a4dbc->leave($__internal_464b4cd7b7c17e36a9de3599e90de1202fcc223fc9f23b873356b12ee78a4dbc_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_7c904ad447c3b9a916a96012031003f0f0917736e65bdb8c3e9a24bb140ea2a2 = $this->env->getExtension("native_profiler");
        $__internal_7c904ad447c3b9a916a96012031003f0f0917736e65bdb8c3e9a24bb140ea2a2->enter($__internal_7c904ad447c3b9a916a96012031003f0f0917736e65bdb8c3e9a24bb140ea2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_7c904ad447c3b9a916a96012031003f0f0917736e65bdb8c3e9a24bb140ea2a2->leave($__internal_7c904ad447c3b9a916a96012031003f0f0917736e65bdb8c3e9a24bb140ea2a2_prof);

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
