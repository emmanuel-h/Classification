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
        $__internal_fcdb23efb802f5cd56941035fd563aeab980f91cf28d5d03ba49d01802c449da = $this->env->getExtension("native_profiler");
        $__internal_fcdb23efb802f5cd56941035fd563aeab980f91cf28d5d03ba49d01802c449da->enter($__internal_fcdb23efb802f5cd56941035fd563aeab980f91cf28d5d03ba49d01802c449da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcdb23efb802f5cd56941035fd563aeab980f91cf28d5d03ba49d01802c449da->leave($__internal_fcdb23efb802f5cd56941035fd563aeab980f91cf28d5d03ba49d01802c449da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc26d3166f5580a5cb75408cc114004dc81af96260f9b481ebf4d35972d18cac = $this->env->getExtension("native_profiler");
        $__internal_fc26d3166f5580a5cb75408cc114004dc81af96260f9b481ebf4d35972d18cac->enter($__internal_fc26d3166f5580a5cb75408cc114004dc81af96260f9b481ebf4d35972d18cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_fc26d3166f5580a5cb75408cc114004dc81af96260f9b481ebf4d35972d18cac->leave($__internal_fc26d3166f5580a5cb75408cc114004dc81af96260f9b481ebf4d35972d18cac_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_374b398012d55ab6853068b428f133bdfbcefd067872b4132e30f4e5ee4d23a5 = $this->env->getExtension("native_profiler");
        $__internal_374b398012d55ab6853068b428f133bdfbcefd067872b4132e30f4e5ee4d23a5->enter($__internal_374b398012d55ab6853068b428f133bdfbcefd067872b4132e30f4e5ee4d23a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_374b398012d55ab6853068b428f133bdfbcefd067872b4132e30f4e5ee4d23a5->leave($__internal_374b398012d55ab6853068b428f133bdfbcefd067872b4132e30f4e5ee4d23a5_prof);

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
