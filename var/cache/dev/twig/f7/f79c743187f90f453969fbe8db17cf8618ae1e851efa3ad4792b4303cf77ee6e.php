<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ce1dbd4c93a2fc1bd1eb05acb6d4e561a711706e319c84ebe159045da33fa953 extends Twig_Template
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
        $__internal_25037209c3579d561c3faa484a92a5c803539cd7b8681475c78577a251679f59 = $this->env->getExtension("native_profiler");
        $__internal_25037209c3579d561c3faa484a92a5c803539cd7b8681475c78577a251679f59->enter($__internal_25037209c3579d561c3faa484a92a5c803539cd7b8681475c78577a251679f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_25037209c3579d561c3faa484a92a5c803539cd7b8681475c78577a251679f59->leave($__internal_25037209c3579d561c3faa484a92a5c803539cd7b8681475c78577a251679f59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
