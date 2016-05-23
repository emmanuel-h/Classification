<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67cce9b36212582a222966abe82407419125e8d91d09bc8f10cbc822c2efa666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_707bdc59cf1f0b839f05250e0de4cc0b0c5bdf735a7b8078cba95b877a091b3a = $this->env->getExtension("native_profiler");
        $__internal_707bdc59cf1f0b839f05250e0de4cc0b0c5bdf735a7b8078cba95b877a091b3a->enter($__internal_707bdc59cf1f0b839f05250e0de4cc0b0c5bdf735a7b8078cba95b877a091b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707bdc59cf1f0b839f05250e0de4cc0b0c5bdf735a7b8078cba95b877a091b3a->leave($__internal_707bdc59cf1f0b839f05250e0de4cc0b0c5bdf735a7b8078cba95b877a091b3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65007b5977faeeef014d29d99396bec1c0f8834f600d56191bc5973cd38ed746 = $this->env->getExtension("native_profiler");
        $__internal_65007b5977faeeef014d29d99396bec1c0f8834f600d56191bc5973cd38ed746->enter($__internal_65007b5977faeeef014d29d99396bec1c0f8834f600d56191bc5973cd38ed746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_65007b5977faeeef014d29d99396bec1c0f8834f600d56191bc5973cd38ed746->leave($__internal_65007b5977faeeef014d29d99396bec1c0f8834f600d56191bc5973cd38ed746_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c48f4e102ca6d8ece649033dad2858dac060888c40e206f9f2b801f3859d54b = $this->env->getExtension("native_profiler");
        $__internal_3c48f4e102ca6d8ece649033dad2858dac060888c40e206f9f2b801f3859d54b->enter($__internal_3c48f4e102ca6d8ece649033dad2858dac060888c40e206f9f2b801f3859d54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c48f4e102ca6d8ece649033dad2858dac060888c40e206f9f2b801f3859d54b->leave($__internal_3c48f4e102ca6d8ece649033dad2858dac060888c40e206f9f2b801f3859d54b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fb56ceec84f24ec5f1fc702bb7d2225b3f523f21190917a3e493107a0adb575 = $this->env->getExtension("native_profiler");
        $__internal_2fb56ceec84f24ec5f1fc702bb7d2225b3f523f21190917a3e493107a0adb575->enter($__internal_2fb56ceec84f24ec5f1fc702bb7d2225b3f523f21190917a3e493107a0adb575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2fb56ceec84f24ec5f1fc702bb7d2225b3f523f21190917a3e493107a0adb575->leave($__internal_2fb56ceec84f24ec5f1fc702bb7d2225b3f523f21190917a3e493107a0adb575_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
