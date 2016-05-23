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
        $__internal_e26bc77f38f9742dd5e4694b246960181a6a53275caea3f21befe5767291e71b = $this->env->getExtension("native_profiler");
        $__internal_e26bc77f38f9742dd5e4694b246960181a6a53275caea3f21befe5767291e71b->enter($__internal_e26bc77f38f9742dd5e4694b246960181a6a53275caea3f21befe5767291e71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e26bc77f38f9742dd5e4694b246960181a6a53275caea3f21befe5767291e71b->leave($__internal_e26bc77f38f9742dd5e4694b246960181a6a53275caea3f21befe5767291e71b_prof);

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
