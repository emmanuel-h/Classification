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
        $__internal_c75b6eadd4fe58965b28121103525ac25bdd268e2e47086d68be9e51d53f3540 = $this->env->getExtension("native_profiler");
        $__internal_c75b6eadd4fe58965b28121103525ac25bdd268e2e47086d68be9e51d53f3540->enter($__internal_c75b6eadd4fe58965b28121103525ac25bdd268e2e47086d68be9e51d53f3540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75b6eadd4fe58965b28121103525ac25bdd268e2e47086d68be9e51d53f3540->leave($__internal_c75b6eadd4fe58965b28121103525ac25bdd268e2e47086d68be9e51d53f3540_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eee822f529605bf61d3b33b0d733ad38b58828a6478096b0996fc819d487907 = $this->env->getExtension("native_profiler");
        $__internal_9eee822f529605bf61d3b33b0d733ad38b58828a6478096b0996fc819d487907->enter($__internal_9eee822f529605bf61d3b33b0d733ad38b58828a6478096b0996fc819d487907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_9eee822f529605bf61d3b33b0d733ad38b58828a6478096b0996fc819d487907->leave($__internal_9eee822f529605bf61d3b33b0d733ad38b58828a6478096b0996fc819d487907_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_302ad3c4fdbb434f06f08cd5223e1ec1e2b7120ab1c49464e265e8caa32eb3f6 = $this->env->getExtension("native_profiler");
        $__internal_302ad3c4fdbb434f06f08cd5223e1ec1e2b7120ab1c49464e265e8caa32eb3f6->enter($__internal_302ad3c4fdbb434f06f08cd5223e1ec1e2b7120ab1c49464e265e8caa32eb3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_302ad3c4fdbb434f06f08cd5223e1ec1e2b7120ab1c49464e265e8caa32eb3f6->leave($__internal_302ad3c4fdbb434f06f08cd5223e1ec1e2b7120ab1c49464e265e8caa32eb3f6_prof);

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
