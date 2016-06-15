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
        $__internal_3f10076739e3ec570e3eff6924b4aed93761f15ec69b41b41c8b8ed7ae48a515 = $this->env->getExtension("native_profiler");
        $__internal_3f10076739e3ec570e3eff6924b4aed93761f15ec69b41b41c8b8ed7ae48a515->enter($__internal_3f10076739e3ec570e3eff6924b4aed93761f15ec69b41b41c8b8ed7ae48a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3f10076739e3ec570e3eff6924b4aed93761f15ec69b41b41c8b8ed7ae48a515->leave($__internal_3f10076739e3ec570e3eff6924b4aed93761f15ec69b41b41c8b8ed7ae48a515_prof);

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
