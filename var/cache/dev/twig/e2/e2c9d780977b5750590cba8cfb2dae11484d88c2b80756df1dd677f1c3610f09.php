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
        $__internal_2af364b76474b15fb3b306d7f70341a3fd0ea0c42cadcf8b7fb9c0c88b79474c = $this->env->getExtension("native_profiler");
        $__internal_2af364b76474b15fb3b306d7f70341a3fd0ea0c42cadcf8b7fb9c0c88b79474c->enter($__internal_2af364b76474b15fb3b306d7f70341a3fd0ea0c42cadcf8b7fb9c0c88b79474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af364b76474b15fb3b306d7f70341a3fd0ea0c42cadcf8b7fb9c0c88b79474c->leave($__internal_2af364b76474b15fb3b306d7f70341a3fd0ea0c42cadcf8b7fb9c0c88b79474c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df2b125338cd7201fa0b710a44ba02013eab35f49844179716e419c1a420315c = $this->env->getExtension("native_profiler");
        $__internal_df2b125338cd7201fa0b710a44ba02013eab35f49844179716e419c1a420315c->enter($__internal_df2b125338cd7201fa0b710a44ba02013eab35f49844179716e419c1a420315c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_df2b125338cd7201fa0b710a44ba02013eab35f49844179716e419c1a420315c->leave($__internal_df2b125338cd7201fa0b710a44ba02013eab35f49844179716e419c1a420315c_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_2d11c3071966234f2225db39be42977ceb489b1c807dd0c36ee64795102d0dd3 = $this->env->getExtension("native_profiler");
        $__internal_2d11c3071966234f2225db39be42977ceb489b1c807dd0c36ee64795102d0dd3->enter($__internal_2d11c3071966234f2225db39be42977ceb489b1c807dd0c36ee64795102d0dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_2d11c3071966234f2225db39be42977ceb489b1c807dd0c36ee64795102d0dd3->leave($__internal_2d11c3071966234f2225db39be42977ceb489b1c807dd0c36ee64795102d0dd3_prof);

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
