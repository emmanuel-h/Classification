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
        $__internal_6efe085dd364d9624a026623b00336b06457a221722e6be7adf81de9801dd5bb = $this->env->getExtension("native_profiler");
        $__internal_6efe085dd364d9624a026623b00336b06457a221722e6be7adf81de9801dd5bb->enter($__internal_6efe085dd364d9624a026623b00336b06457a221722e6be7adf81de9801dd5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6efe085dd364d9624a026623b00336b06457a221722e6be7adf81de9801dd5bb->leave($__internal_6efe085dd364d9624a026623b00336b06457a221722e6be7adf81de9801dd5bb_prof);

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
