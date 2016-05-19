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
        $__internal_2c6d6e68b7c189f6ce326da7fa8bf9595e96d8691181280ff5aad6ca23cff070 = $this->env->getExtension("native_profiler");
        $__internal_2c6d6e68b7c189f6ce326da7fa8bf9595e96d8691181280ff5aad6ca23cff070->enter($__internal_2c6d6e68b7c189f6ce326da7fa8bf9595e96d8691181280ff5aad6ca23cff070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c6d6e68b7c189f6ce326da7fa8bf9595e96d8691181280ff5aad6ca23cff070->leave($__internal_2c6d6e68b7c189f6ce326da7fa8bf9595e96d8691181280ff5aad6ca23cff070_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac66da62baa8b5a1aecfa56e54707cbc48c31709d15981b3d7b4bf527471e87b = $this->env->getExtension("native_profiler");
        $__internal_ac66da62baa8b5a1aecfa56e54707cbc48c31709d15981b3d7b4bf527471e87b->enter($__internal_ac66da62baa8b5a1aecfa56e54707cbc48c31709d15981b3d7b4bf527471e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_ac66da62baa8b5a1aecfa56e54707cbc48c31709d15981b3d7b4bf527471e87b->leave($__internal_ac66da62baa8b5a1aecfa56e54707cbc48c31709d15981b3d7b4bf527471e87b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f5750e498a6a8b5a0cb525060016666ec6bff00b5d008e3a57a130eebb24ce5 = $this->env->getExtension("native_profiler");
        $__internal_3f5750e498a6a8b5a0cb525060016666ec6bff00b5d008e3a57a130eebb24ce5->enter($__internal_3f5750e498a6a8b5a0cb525060016666ec6bff00b5d008e3a57a130eebb24ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_3f5750e498a6a8b5a0cb525060016666ec6bff00b5d008e3a57a130eebb24ce5->leave($__internal_3f5750e498a6a8b5a0cb525060016666ec6bff00b5d008e3a57a130eebb24ce5_prof);

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
