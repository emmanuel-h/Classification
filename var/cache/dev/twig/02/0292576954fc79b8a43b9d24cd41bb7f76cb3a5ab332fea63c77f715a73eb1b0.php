<?php

/* LIFOClassifBundle:Platform:classification.html.twig */
class __TwigTemplate_e5befdf423956516b061be7994071b32843bce52dbd1e18137e82d090398fab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:classification.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a6e62268eb95a5cbab494076843afe0ad4d076074fbdf3c21e41d332a9c910b = $this->env->getExtension("native_profiler");
        $__internal_8a6e62268eb95a5cbab494076843afe0ad4d076074fbdf3c21e41d332a9c910b->enter($__internal_8a6e62268eb95a5cbab494076843afe0ad4d076074fbdf3c21e41d332a9c910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a6e62268eb95a5cbab494076843afe0ad4d076074fbdf3c21e41d332a9c910b->leave($__internal_8a6e62268eb95a5cbab494076843afe0ad4d076074fbdf3c21e41d332a9c910b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a9bdbe2ddbb8333a2db981beac04ff42eed6ce5fc0b21860be11e90fd15d9a = $this->env->getExtension("native_profiler");
        $__internal_10a9bdbe2ddbb8333a2db981beac04ff42eed6ce5fc0b21860be11e90fd15d9a->enter($__internal_10a9bdbe2ddbb8333a2db981beac04ff42eed6ce5fc0b21860be11e90fd15d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_10a9bdbe2ddbb8333a2db981beac04ff42eed6ce5fc0b21860be11e90fd15d9a->leave($__internal_10a9bdbe2ddbb8333a2db981beac04ff42eed6ce5fc0b21860be11e90fd15d9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f79a5a6be86cfc0cab534f6973c51e0c368a8f56667a4bad40ab69a0410f0d = $this->env->getExtension("native_profiler");
        $__internal_a0f79a5a6be86cfc0cab534f6973c51e0c368a8f56667a4bad40ab69a0410f0d->enter($__internal_a0f79a5a6be86cfc0cab534f6973c51e0c368a8f56667a4bad40ab69a0410f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_a0f79a5a6be86cfc0cab534f6973c51e0c368a8f56667a4bad40ab69a0410f0d->leave($__internal_a0f79a5a6be86cfc0cab534f6973c51e0c368a8f56667a4bad40ab69a0410f0d_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:classification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Classification{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour classifier un tesson*/
/* 	</p>*/
/* {% endblock %}*/
