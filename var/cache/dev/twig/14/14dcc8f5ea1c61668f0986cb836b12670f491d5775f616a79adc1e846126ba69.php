<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c5006b6587d77f7f17ef7379dff7b2798a9834011df15cdf471e9d5af20ce004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa5bbb3c81a04ba17012fea3089375619139628bd75741092ddd91cdae2d2247 = $this->env->getExtension("native_profiler");
        $__internal_aa5bbb3c81a04ba17012fea3089375619139628bd75741092ddd91cdae2d2247->enter($__internal_aa5bbb3c81a04ba17012fea3089375619139628bd75741092ddd91cdae2d2247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aa5bbb3c81a04ba17012fea3089375619139628bd75741092ddd91cdae2d2247->leave($__internal_aa5bbb3c81a04ba17012fea3089375619139628bd75741092ddd91cdae2d2247_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
