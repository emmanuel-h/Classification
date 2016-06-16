<?php

/* @LIFOClassif/layoutAdmin.html.twig */
class __TwigTemplate_738ca7cff67840c621883672b451ebea236f34427d0386e3a0096ddac1f6b228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutAdmin.html.twig", 1);
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
        $__internal_1650a4d99170d544b1456de3bf1b9bea6f27504ea766882d62ea3d74b95cd2ed = $this->env->getExtension("native_profiler");
        $__internal_1650a4d99170d544b1456de3bf1b9bea6f27504ea766882d62ea3d74b95cd2ed->enter($__internal_1650a4d99170d544b1456de3bf1b9bea6f27504ea766882d62ea3d74b95cd2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1650a4d99170d544b1456de3bf1b9bea6f27504ea766882d62ea3d74b95cd2ed->leave($__internal_1650a4d99170d544b1456de3bf1b9bea6f27504ea766882d62ea3d74b95cd2ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e57889b65ad654bfb06a0bc88705c392e6a2d4544633fefbfd3d0cf0ccd18ca = $this->env->getExtension("native_profiler");
        $__internal_3e57889b65ad654bfb06a0bc88705c392e6a2d4544633fefbfd3d0cf0ccd18ca->enter($__internal_3e57889b65ad654bfb06a0bc88705c392e6a2d4544633fefbfd3d0cf0ccd18ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_3e57889b65ad654bfb06a0bc88705c392e6a2d4544633fefbfd3d0cf0ccd18ca->leave($__internal_3e57889b65ad654bfb06a0bc88705c392e6a2d4544633fefbfd3d0cf0ccd18ca_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_a56070de6c63b966600973a59c9f9d3f26ab9501e8df87ebcbaecd57d89a1a62 = $this->env->getExtension("native_profiler");
        $__internal_a56070de6c63b966600973a59c9f9d3f26ab9501e8df87ebcbaecd57d89a1a62->enter($__internal_a56070de6c63b966600973a59c9f9d3f26ab9501e8df87ebcbaecd57d89a1a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_a56070de6c63b966600973a59c9f9d3f26ab9501e8df87ebcbaecd57d89a1a62->leave($__internal_a56070de6c63b966600973a59c9f9d3f26ab9501e8df87ebcbaecd57d89a1a62_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutAdmin.html.twig";
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
