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
        $__internal_041fb4b7fdd9d1bbba1433ae3b3de900d852868254f388e0e713578b5606a0fa = $this->env->getExtension("native_profiler");
        $__internal_041fb4b7fdd9d1bbba1433ae3b3de900d852868254f388e0e713578b5606a0fa->enter($__internal_041fb4b7fdd9d1bbba1433ae3b3de900d852868254f388e0e713578b5606a0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_041fb4b7fdd9d1bbba1433ae3b3de900d852868254f388e0e713578b5606a0fa->leave($__internal_041fb4b7fdd9d1bbba1433ae3b3de900d852868254f388e0e713578b5606a0fa_prof);

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
