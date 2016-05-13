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
        $__internal_e7c3aab5a392b12fcebde475a5a9ca3013a1326b97d443062c7c9230c13616b8 = $this->env->getExtension("native_profiler");
        $__internal_e7c3aab5a392b12fcebde475a5a9ca3013a1326b97d443062c7c9230c13616b8->enter($__internal_e7c3aab5a392b12fcebde475a5a9ca3013a1326b97d443062c7c9230c13616b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c3aab5a392b12fcebde475a5a9ca3013a1326b97d443062c7c9230c13616b8->leave($__internal_e7c3aab5a392b12fcebde475a5a9ca3013a1326b97d443062c7c9230c13616b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5232f92fd93f10ec3724cd815e6951d8b4d2b3bb59f3f4290899776e8b6d023a = $this->env->getExtension("native_profiler");
        $__internal_5232f92fd93f10ec3724cd815e6951d8b4d2b3bb59f3f4290899776e8b6d023a->enter($__internal_5232f92fd93f10ec3724cd815e6951d8b4d2b3bb59f3f4290899776e8b6d023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_5232f92fd93f10ec3724cd815e6951d8b4d2b3bb59f3f4290899776e8b6d023a->leave($__internal_5232f92fd93f10ec3724cd815e6951d8b4d2b3bb59f3f4290899776e8b6d023a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f45e827247100b32fdfcf2de82f2536a040bbec29e1df9bc96f2d8edac3a8cd1 = $this->env->getExtension("native_profiler");
        $__internal_f45e827247100b32fdfcf2de82f2536a040bbec29e1df9bc96f2d8edac3a8cd1->enter($__internal_f45e827247100b32fdfcf2de82f2536a040bbec29e1df9bc96f2d8edac3a8cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_f45e827247100b32fdfcf2de82f2536a040bbec29e1df9bc96f2d8edac3a8cd1->leave($__internal_f45e827247100b32fdfcf2de82f2536a040bbec29e1df9bc96f2d8edac3a8cd1_prof);

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
