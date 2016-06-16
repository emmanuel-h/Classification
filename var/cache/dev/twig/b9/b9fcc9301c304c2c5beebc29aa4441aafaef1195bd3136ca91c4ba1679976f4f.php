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
        $__internal_04c5a2c0245dc37500d5ebe6ae3200973b5f2c5fffed41797f0528147aef5842 = $this->env->getExtension("native_profiler");
        $__internal_04c5a2c0245dc37500d5ebe6ae3200973b5f2c5fffed41797f0528147aef5842->enter($__internal_04c5a2c0245dc37500d5ebe6ae3200973b5f2c5fffed41797f0528147aef5842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04c5a2c0245dc37500d5ebe6ae3200973b5f2c5fffed41797f0528147aef5842->leave($__internal_04c5a2c0245dc37500d5ebe6ae3200973b5f2c5fffed41797f0528147aef5842_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78ee26a592384fdbf446ddd2e519f18819953bd5c318daa3e59dcf0c4a581286 = $this->env->getExtension("native_profiler");
        $__internal_78ee26a592384fdbf446ddd2e519f18819953bd5c318daa3e59dcf0c4a581286->enter($__internal_78ee26a592384fdbf446ddd2e519f18819953bd5c318daa3e59dcf0c4a581286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_78ee26a592384fdbf446ddd2e519f18819953bd5c318daa3e59dcf0c4a581286->leave($__internal_78ee26a592384fdbf446ddd2e519f18819953bd5c318daa3e59dcf0c4a581286_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_7c44d96c5103487d9e71a763c510f505c638dff973329cfc0f7361455fac42cb = $this->env->getExtension("native_profiler");
        $__internal_7c44d96c5103487d9e71a763c510f505c638dff973329cfc0f7361455fac42cb->enter($__internal_7c44d96c5103487d9e71a763c510f505c638dff973329cfc0f7361455fac42cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_7c44d96c5103487d9e71a763c510f505c638dff973329cfc0f7361455fac42cb->leave($__internal_7c44d96c5103487d9e71a763c510f505c638dff973329cfc0f7361455fac42cb_prof);

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
