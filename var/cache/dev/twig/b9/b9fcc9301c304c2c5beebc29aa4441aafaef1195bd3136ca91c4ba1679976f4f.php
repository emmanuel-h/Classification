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
        $__internal_ee7def31d865fafbd116a9d263cdd6091ebe84a229729c238ba2395d07b60277 = $this->env->getExtension("native_profiler");
        $__internal_ee7def31d865fafbd116a9d263cdd6091ebe84a229729c238ba2395d07b60277->enter($__internal_ee7def31d865fafbd116a9d263cdd6091ebe84a229729c238ba2395d07b60277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee7def31d865fafbd116a9d263cdd6091ebe84a229729c238ba2395d07b60277->leave($__internal_ee7def31d865fafbd116a9d263cdd6091ebe84a229729c238ba2395d07b60277_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c922b1cfb9ae14a096c87f29b32b3e9a917f923f986cb93f38ab69d19a0a3bd = $this->env->getExtension("native_profiler");
        $__internal_2c922b1cfb9ae14a096c87f29b32b3e9a917f923f986cb93f38ab69d19a0a3bd->enter($__internal_2c922b1cfb9ae14a096c87f29b32b3e9a917f923f986cb93f38ab69d19a0a3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_2c922b1cfb9ae14a096c87f29b32b3e9a917f923f986cb93f38ab69d19a0a3bd->leave($__internal_2c922b1cfb9ae14a096c87f29b32b3e9a917f923f986cb93f38ab69d19a0a3bd_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_41c28c81e3f40cd982310d5174ddaf21dae1db47d02a2c47b15dc8ef190103a3 = $this->env->getExtension("native_profiler");
        $__internal_41c28c81e3f40cd982310d5174ddaf21dae1db47d02a2c47b15dc8ef190103a3->enter($__internal_41c28c81e3f40cd982310d5174ddaf21dae1db47d02a2c47b15dc8ef190103a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_41c28c81e3f40cd982310d5174ddaf21dae1db47d02a2c47b15dc8ef190103a3->leave($__internal_41c28c81e3f40cd982310d5174ddaf21dae1db47d02a2c47b15dc8ef190103a3_prof);

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
