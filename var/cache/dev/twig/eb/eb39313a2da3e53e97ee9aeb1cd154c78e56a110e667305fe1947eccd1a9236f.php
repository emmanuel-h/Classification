<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a018d42ae3a605c70dc9175cd07bc8a1dcadaaeac1e44797ee078b8320ef1601 extends Twig_Template
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
        $__internal_7804cd83c04bc6f2ed4ca06415bbd895d073d8f3394869554ad7b9f0138897bd = $this->env->getExtension("native_profiler");
        $__internal_7804cd83c04bc6f2ed4ca06415bbd895d073d8f3394869554ad7b9f0138897bd->enter($__internal_7804cd83c04bc6f2ed4ca06415bbd895d073d8f3394869554ad7b9f0138897bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7804cd83c04bc6f2ed4ca06415bbd895d073d8f3394869554ad7b9f0138897bd->leave($__internal_7804cd83c04bc6f2ed4ca06415bbd895d073d8f3394869554ad7b9f0138897bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
