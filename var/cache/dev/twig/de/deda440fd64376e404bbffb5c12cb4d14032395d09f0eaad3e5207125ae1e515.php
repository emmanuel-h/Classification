<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
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
        $__internal_3cb01fbd747150987cec97b83246c28958a0c486f5a9da7f8c7a931cbc020fe4 = $this->env->getExtension("native_profiler");
        $__internal_3cb01fbd747150987cec97b83246c28958a0c486f5a9da7f8c7a931cbc020fe4->enter($__internal_3cb01fbd747150987cec97b83246c28958a0c486f5a9da7f8c7a931cbc020fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb01fbd747150987cec97b83246c28958a0c486f5a9da7f8c7a931cbc020fe4->leave($__internal_3cb01fbd747150987cec97b83246c28958a0c486f5a9da7f8c7a931cbc020fe4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbd867d9079dd8cb2e48e21e5d7e135abe045a3811e5d77e4fc32c0d65305a97 = $this->env->getExtension("native_profiler");
        $__internal_cbd867d9079dd8cb2e48e21e5d7e135abe045a3811e5d77e4fc32c0d65305a97->enter($__internal_cbd867d9079dd8cb2e48e21e5d7e135abe045a3811e5d77e4fc32c0d65305a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_cbd867d9079dd8cb2e48e21e5d7e135abe045a3811e5d77e4fc32c0d65305a97->leave($__internal_cbd867d9079dd8cb2e48e21e5d7e135abe045a3811e5d77e4fc32c0d65305a97_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_6d1dbf1d4b974c9ce4707de49233db8a5d689eebdbc587bbdfbbead669f4c9cb = $this->env->getExtension("native_profiler");
        $__internal_6d1dbf1d4b974c9ce4707de49233db8a5d689eebdbc587bbdfbbead669f4c9cb->enter($__internal_6d1dbf1d4b974c9ce4707de49233db8a5d689eebdbc587bbdfbbead669f4c9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_6d1dbf1d4b974c9ce4707de49233db8a5d689eebdbc587bbdfbbead669f4c9cb->leave($__internal_6d1dbf1d4b974c9ce4707de49233db8a5d689eebdbc587bbdfbbead669f4c9cb_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
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
