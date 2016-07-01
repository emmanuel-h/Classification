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
        $__internal_d287508974cde4d1e4868790a43d4add532094f6fca65615e534776b9658cbf4 = $this->env->getExtension("native_profiler");
        $__internal_d287508974cde4d1e4868790a43d4add532094f6fca65615e534776b9658cbf4->enter($__internal_d287508974cde4d1e4868790a43d4add532094f6fca65615e534776b9658cbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d287508974cde4d1e4868790a43d4add532094f6fca65615e534776b9658cbf4->leave($__internal_d287508974cde4d1e4868790a43d4add532094f6fca65615e534776b9658cbf4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12259e285720ff03a884b598a3bb55b15bf136e5ebd7813d9a6ca01851ad459 = $this->env->getExtension("native_profiler");
        $__internal_e12259e285720ff03a884b598a3bb55b15bf136e5ebd7813d9a6ca01851ad459->enter($__internal_e12259e285720ff03a884b598a3bb55b15bf136e5ebd7813d9a6ca01851ad459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_e12259e285720ff03a884b598a3bb55b15bf136e5ebd7813d9a6ca01851ad459->leave($__internal_e12259e285720ff03a884b598a3bb55b15bf136e5ebd7813d9a6ca01851ad459_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f06b2da1afcaed43094c4fce763741f4422d1afd1dba4ef6210d9c8ede6f56f5 = $this->env->getExtension("native_profiler");
        $__internal_f06b2da1afcaed43094c4fce763741f4422d1afd1dba4ef6210d9c8ede6f56f5->enter($__internal_f06b2da1afcaed43094c4fce763741f4422d1afd1dba4ef6210d9c8ede6f56f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_f06b2da1afcaed43094c4fce763741f4422d1afd1dba4ef6210d9c8ede6f56f5->leave($__internal_f06b2da1afcaed43094c4fce763741f4422d1afd1dba4ef6210d9c8ede6f56f5_prof);

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
