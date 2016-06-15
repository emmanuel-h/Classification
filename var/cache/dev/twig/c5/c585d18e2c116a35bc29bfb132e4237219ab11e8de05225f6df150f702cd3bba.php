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
        $__internal_5f4a52d72630bed46da8c1ebad0315e97c24f7e3a38da8011e85823ed5688d35 = $this->env->getExtension("native_profiler");
        $__internal_5f4a52d72630bed46da8c1ebad0315e97c24f7e3a38da8011e85823ed5688d35->enter($__internal_5f4a52d72630bed46da8c1ebad0315e97c24f7e3a38da8011e85823ed5688d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4a52d72630bed46da8c1ebad0315e97c24f7e3a38da8011e85823ed5688d35->leave($__internal_5f4a52d72630bed46da8c1ebad0315e97c24f7e3a38da8011e85823ed5688d35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a42a76c2e0d820c2fbbbaec81f82c21b4c6f13bf418865d02b54da355252652 = $this->env->getExtension("native_profiler");
        $__internal_8a42a76c2e0d820c2fbbbaec81f82c21b4c6f13bf418865d02b54da355252652->enter($__internal_8a42a76c2e0d820c2fbbbaec81f82c21b4c6f13bf418865d02b54da355252652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8a42a76c2e0d820c2fbbbaec81f82c21b4c6f13bf418865d02b54da355252652->leave($__internal_8a42a76c2e0d820c2fbbbaec81f82c21b4c6f13bf418865d02b54da355252652_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40722ec77421a2148f1f735e37477e1ce67d5eaf64f859ee4e6031fa4caa7174 = $this->env->getExtension("native_profiler");
        $__internal_40722ec77421a2148f1f735e37477e1ce67d5eaf64f859ee4e6031fa4caa7174->enter($__internal_40722ec77421a2148f1f735e37477e1ce67d5eaf64f859ee4e6031fa4caa7174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40722ec77421a2148f1f735e37477e1ce67d5eaf64f859ee4e6031fa4caa7174->leave($__internal_40722ec77421a2148f1f735e37477e1ce67d5eaf64f859ee4e6031fa4caa7174_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_343729f59a3c5fa40ceee3cd4ac3ea01544310e3f4a93459263611b7b7c15b2e = $this->env->getExtension("native_profiler");
        $__internal_343729f59a3c5fa40ceee3cd4ac3ea01544310e3f4a93459263611b7b7c15b2e->enter($__internal_343729f59a3c5fa40ceee3cd4ac3ea01544310e3f4a93459263611b7b7c15b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_343729f59a3c5fa40ceee3cd4ac3ea01544310e3f4a93459263611b7b7c15b2e->leave($__internal_343729f59a3c5fa40ceee3cd4ac3ea01544310e3f4a93459263611b7b7c15b2e_prof);

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
