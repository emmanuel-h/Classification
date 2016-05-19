<?php

/* LIFOClassifBundle:Platform:classification.html.twig */
class __TwigTemplate_e5befdf423956516b061be7994071b32843bce52dbd1e18137e82d090398fab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:classification.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17b24ae0f7a07db087e29799c15951f5fc11f65e89a0fa17df5de2cbc905cf5a = $this->env->getExtension("native_profiler");
        $__internal_17b24ae0f7a07db087e29799c15951f5fc11f65e89a0fa17df5de2cbc905cf5a->enter($__internal_17b24ae0f7a07db087e29799c15951f5fc11f65e89a0fa17df5de2cbc905cf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b24ae0f7a07db087e29799c15951f5fc11f65e89a0fa17df5de2cbc905cf5a->leave($__internal_17b24ae0f7a07db087e29799c15951f5fc11f65e89a0fa17df5de2cbc905cf5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e6e3ce0c58ea071baf556c8e7ad42c7e2394e0f2f6f5df3319426530b20d42 = $this->env->getExtension("native_profiler");
        $__internal_94e6e3ce0c58ea071baf556c8e7ad42c7e2394e0f2f6f5df3319426530b20d42->enter($__internal_94e6e3ce0c58ea071baf556c8e7ad42c7e2394e0f2f6f5df3319426530b20d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_94e6e3ce0c58ea071baf556c8e7ad42c7e2394e0f2f6f5df3319426530b20d42->leave($__internal_94e6e3ce0c58ea071baf556c8e7ad42c7e2394e0f2f6f5df3319426530b20d42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e03009e38b79241cc6406a524cf3ca365a78c0f01a8786c8afb938142b78c17 = $this->env->getExtension("native_profiler");
        $__internal_9e03009e38b79241cc6406a524cf3ca365a78c0f01a8786c8afb938142b78c17->enter($__internal_9e03009e38b79241cc6406a524cf3ca365a78c0f01a8786c8afb938142b78c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_9e03009e38b79241cc6406a524cf3ca365a78c0f01a8786c8afb938142b78c17->leave($__internal_9e03009e38b79241cc6406a524cf3ca365a78c0f01a8786c8afb938142b78c17_prof);

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
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Classification{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour classifier un tesson*/
/* 	</p>*/
/* {% endblock %}*/
