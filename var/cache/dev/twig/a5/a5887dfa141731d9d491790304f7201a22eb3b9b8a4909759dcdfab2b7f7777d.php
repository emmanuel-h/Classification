<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7df48b8632a401f94fc769f0368d2cf9783c7f74143970be07df3d257fb164b7 extends Twig_Template
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
        $__internal_672ea1ac98ce4b89fea15d733f8bcff39af22220bd55346c1c45fcbad1eb0377 = $this->env->getExtension("native_profiler");
        $__internal_672ea1ac98ce4b89fea15d733f8bcff39af22220bd55346c1c45fcbad1eb0377->enter($__internal_672ea1ac98ce4b89fea15d733f8bcff39af22220bd55346c1c45fcbad1eb0377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_672ea1ac98ce4b89fea15d733f8bcff39af22220bd55346c1c45fcbad1eb0377->leave($__internal_672ea1ac98ce4b89fea15d733f8bcff39af22220bd55346c1c45fcbad1eb0377_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
