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
        $__internal_988913f54dda91f3b5ad68a5584556b992bb2eccc97222a434403c1b2dde23bb = $this->env->getExtension("native_profiler");
        $__internal_988913f54dda91f3b5ad68a5584556b992bb2eccc97222a434403c1b2dde23bb->enter($__internal_988913f54dda91f3b5ad68a5584556b992bb2eccc97222a434403c1b2dde23bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_988913f54dda91f3b5ad68a5584556b992bb2eccc97222a434403c1b2dde23bb->leave($__internal_988913f54dda91f3b5ad68a5584556b992bb2eccc97222a434403c1b2dde23bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a6ef0df39b1d0bc1c6d8de8480218908afc9ad83d996a905a711ba86d0f3c27 = $this->env->getExtension("native_profiler");
        $__internal_1a6ef0df39b1d0bc1c6d8de8480218908afc9ad83d996a905a711ba86d0f3c27->enter($__internal_1a6ef0df39b1d0bc1c6d8de8480218908afc9ad83d996a905a711ba86d0f3c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_1a6ef0df39b1d0bc1c6d8de8480218908afc9ad83d996a905a711ba86d0f3c27->leave($__internal_1a6ef0df39b1d0bc1c6d8de8480218908afc9ad83d996a905a711ba86d0f3c27_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_7c7040b1161a107ed0031222baddc827cc356c54e5e15120b4e07a05b76eea61 = $this->env->getExtension("native_profiler");
        $__internal_7c7040b1161a107ed0031222baddc827cc356c54e5e15120b4e07a05b76eea61->enter($__internal_7c7040b1161a107ed0031222baddc827cc356c54e5e15120b4e07a05b76eea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_7c7040b1161a107ed0031222baddc827cc356c54e5e15120b4e07a05b76eea61->leave($__internal_7c7040b1161a107ed0031222baddc827cc356c54e5e15120b4e07a05b76eea61_prof);

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
