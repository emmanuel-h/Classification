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
        $__internal_3f22b4a066663b9e80d7b34bb50dce74ddbaf5acc0fdb57cbbed7ff07fd87ed1 = $this->env->getExtension("native_profiler");
        $__internal_3f22b4a066663b9e80d7b34bb50dce74ddbaf5acc0fdb57cbbed7ff07fd87ed1->enter($__internal_3f22b4a066663b9e80d7b34bb50dce74ddbaf5acc0fdb57cbbed7ff07fd87ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f22b4a066663b9e80d7b34bb50dce74ddbaf5acc0fdb57cbbed7ff07fd87ed1->leave($__internal_3f22b4a066663b9e80d7b34bb50dce74ddbaf5acc0fdb57cbbed7ff07fd87ed1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9d97ae93d7859a04c7fd8f2c67738de52cfeb5ddf5c5e76f2681fd26247d23e = $this->env->getExtension("native_profiler");
        $__internal_b9d97ae93d7859a04c7fd8f2c67738de52cfeb5ddf5c5e76f2681fd26247d23e->enter($__internal_b9d97ae93d7859a04c7fd8f2c67738de52cfeb5ddf5c5e76f2681fd26247d23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b9d97ae93d7859a04c7fd8f2c67738de52cfeb5ddf5c5e76f2681fd26247d23e->leave($__internal_b9d97ae93d7859a04c7fd8f2c67738de52cfeb5ddf5c5e76f2681fd26247d23e_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_dc65f13346fb9603a8dae57ddf9c4ea262b39cfaa901a23853e400abd7c1d882 = $this->env->getExtension("native_profiler");
        $__internal_dc65f13346fb9603a8dae57ddf9c4ea262b39cfaa901a23853e400abd7c1d882->enter($__internal_dc65f13346fb9603a8dae57ddf9c4ea262b39cfaa901a23853e400abd7c1d882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_dc65f13346fb9603a8dae57ddf9c4ea262b39cfaa901a23853e400abd7c1d882->leave($__internal_dc65f13346fb9603a8dae57ddf9c4ea262b39cfaa901a23853e400abd7c1d882_prof);

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
