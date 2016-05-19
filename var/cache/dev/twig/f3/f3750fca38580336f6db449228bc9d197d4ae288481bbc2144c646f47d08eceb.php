<?php

/* LIFOClassifBundle:Platform:telechargement.html.twig */
class __TwigTemplate_8878c254b77a9310a6a062fde26388c2772d447a97503ea22367db4c7a665006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:telechargement.html.twig", 1);
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
        $__internal_16baa16b9f5cae1cfdfacc0657cfe50b92b1ff0e5eab81971270144926467710 = $this->env->getExtension("native_profiler");
        $__internal_16baa16b9f5cae1cfdfacc0657cfe50b92b1ff0e5eab81971270144926467710->enter($__internal_16baa16b9f5cae1cfdfacc0657cfe50b92b1ff0e5eab81971270144926467710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16baa16b9f5cae1cfdfacc0657cfe50b92b1ff0e5eab81971270144926467710->leave($__internal_16baa16b9f5cae1cfdfacc0657cfe50b92b1ff0e5eab81971270144926467710_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fa0e550a0e97d01c25d9c13d22c3bd8e33b315d8d349bd4b74e6acb187afa46 = $this->env->getExtension("native_profiler");
        $__internal_1fa0e550a0e97d01c25d9c13d22c3bd8e33b315d8d349bd4b74e6acb187afa46->enter($__internal_1fa0e550a0e97d01c25d9c13d22c3bd8e33b315d8d349bd4b74e6acb187afa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_1fa0e550a0e97d01c25d9c13d22c3bd8e33b315d8d349bd4b74e6acb187afa46->leave($__internal_1fa0e550a0e97d01c25d9c13d22c3bd8e33b315d8d349bd4b74e6acb187afa46_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff1457d0387c565e98fdec48f6ec4803881b51c3e2c637c08da0032e10938e35 = $this->env->getExtension("native_profiler");
        $__internal_ff1457d0387c565e98fdec48f6ec4803881b51c3e2c637c08da0032e10938e35->enter($__internal_ff1457d0387c565e98fdec48f6ec4803881b51c3e2c637c08da0032e10938e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_ff1457d0387c565e98fdec48f6ec4803881b51c3e2c637c08da0032e10938e35->leave($__internal_ff1457d0387c565e98fdec48f6ec4803881b51c3e2c637c08da0032e10938e35_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:telechargement.html.twig";
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
/* {% block title %}{{ parent() }} - Téléchargement{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour télécharger une image*/
/* 	</p>*/
/* {% endblock %}*/
