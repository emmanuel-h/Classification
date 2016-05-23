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
        $__internal_cf3a76330b30d65cc8fa2874743abce5d26f2e2a247152eb70d76302626c964e = $this->env->getExtension("native_profiler");
        $__internal_cf3a76330b30d65cc8fa2874743abce5d26f2e2a247152eb70d76302626c964e->enter($__internal_cf3a76330b30d65cc8fa2874743abce5d26f2e2a247152eb70d76302626c964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3a76330b30d65cc8fa2874743abce5d26f2e2a247152eb70d76302626c964e->leave($__internal_cf3a76330b30d65cc8fa2874743abce5d26f2e2a247152eb70d76302626c964e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17e045782142b9b3b3bdf449bdbc3941a7592978ad782dc60dba588bd9d2879e = $this->env->getExtension("native_profiler");
        $__internal_17e045782142b9b3b3bdf449bdbc3941a7592978ad782dc60dba588bd9d2879e->enter($__internal_17e045782142b9b3b3bdf449bdbc3941a7592978ad782dc60dba588bd9d2879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_17e045782142b9b3b3bdf449bdbc3941a7592978ad782dc60dba588bd9d2879e->leave($__internal_17e045782142b9b3b3bdf449bdbc3941a7592978ad782dc60dba588bd9d2879e_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_0eb00712f14c1f22c452550bb66a664b4cd54ca8613975913f6f03d26ab66849 = $this->env->getExtension("native_profiler");
        $__internal_0eb00712f14c1f22c452550bb66a664b4cd54ca8613975913f6f03d26ab66849->enter($__internal_0eb00712f14c1f22c452550bb66a664b4cd54ca8613975913f6f03d26ab66849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_0eb00712f14c1f22c452550bb66a664b4cd54ca8613975913f6f03d26ab66849->leave($__internal_0eb00712f14c1f22c452550bb66a664b4cd54ca8613975913f6f03d26ab66849_prof);

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
