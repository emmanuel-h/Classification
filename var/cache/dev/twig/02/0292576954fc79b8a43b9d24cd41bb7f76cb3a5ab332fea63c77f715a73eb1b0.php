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
        $__internal_efaeccdac73194afb7feba4ccc862c0402310ef7cb37fc171d0b42731201d8d9 = $this->env->getExtension("native_profiler");
        $__internal_efaeccdac73194afb7feba4ccc862c0402310ef7cb37fc171d0b42731201d8d9->enter($__internal_efaeccdac73194afb7feba4ccc862c0402310ef7cb37fc171d0b42731201d8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efaeccdac73194afb7feba4ccc862c0402310ef7cb37fc171d0b42731201d8d9->leave($__internal_efaeccdac73194afb7feba4ccc862c0402310ef7cb37fc171d0b42731201d8d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bd1af03e23d952e28ee2148ed1532aadc299fae2857b7a4fe24d8ab39529af7 = $this->env->getExtension("native_profiler");
        $__internal_4bd1af03e23d952e28ee2148ed1532aadc299fae2857b7a4fe24d8ab39529af7->enter($__internal_4bd1af03e23d952e28ee2148ed1532aadc299fae2857b7a4fe24d8ab39529af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_4bd1af03e23d952e28ee2148ed1532aadc299fae2857b7a4fe24d8ab39529af7->leave($__internal_4bd1af03e23d952e28ee2148ed1532aadc299fae2857b7a4fe24d8ab39529af7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c86af2f0c59801b633277a896e1e528c1aec0e7389df89e8482414afc72c6a7 = $this->env->getExtension("native_profiler");
        $__internal_4c86af2f0c59801b633277a896e1e528c1aec0e7389df89e8482414afc72c6a7->enter($__internal_4c86af2f0c59801b633277a896e1e528c1aec0e7389df89e8482414afc72c6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_4c86af2f0c59801b633277a896e1e528c1aec0e7389df89e8482414afc72c6a7->leave($__internal_4c86af2f0c59801b633277a896e1e528c1aec0e7389df89e8482414afc72c6a7_prof);

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
