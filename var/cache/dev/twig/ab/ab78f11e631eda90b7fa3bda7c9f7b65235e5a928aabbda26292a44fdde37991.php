<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bceb7b74c076c5bdfe8c1951167e8fc5381d007e59675d5a88476be3493978d4 extends Twig_Template
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
        $__internal_cdfc6873a423df24d51086c3443899647502359d7ed5b22cf748eb4c0c2112be = $this->env->getExtension("native_profiler");
        $__internal_cdfc6873a423df24d51086c3443899647502359d7ed5b22cf748eb4c0c2112be->enter($__internal_cdfc6873a423df24d51086c3443899647502359d7ed5b22cf748eb4c0c2112be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cdfc6873a423df24d51086c3443899647502359d7ed5b22cf748eb4c0c2112be->leave($__internal_cdfc6873a423df24d51086c3443899647502359d7ed5b22cf748eb4c0c2112be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
