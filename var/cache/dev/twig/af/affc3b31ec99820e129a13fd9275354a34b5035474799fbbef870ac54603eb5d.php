<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c0360af296ec0b5dcbb3cf65ecb1d65bc583972ab0a687bc14a51d5fc911d3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_3c0b68bc37ec8eaeeb2bae2224f70d164a23266af47de3d3c0241d5e72d7bceb = $this->env->getExtension("native_profiler");
        $__internal_3c0b68bc37ec8eaeeb2bae2224f70d164a23266af47de3d3c0241d5e72d7bceb->enter($__internal_3c0b68bc37ec8eaeeb2bae2224f70d164a23266af47de3d3c0241d5e72d7bceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0b68bc37ec8eaeeb2bae2224f70d164a23266af47de3d3c0241d5e72d7bceb->leave($__internal_3c0b68bc37ec8eaeeb2bae2224f70d164a23266af47de3d3c0241d5e72d7bceb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc53dea245d561f1dee6bdbb25f586cfb270379d6870bb3df856aa83fa0aaf17 = $this->env->getExtension("native_profiler");
        $__internal_cc53dea245d561f1dee6bdbb25f586cfb270379d6870bb3df856aa83fa0aaf17->enter($__internal_cc53dea245d561f1dee6bdbb25f586cfb270379d6870bb3df856aa83fa0aaf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cc53dea245d561f1dee6bdbb25f586cfb270379d6870bb3df856aa83fa0aaf17->leave($__internal_cc53dea245d561f1dee6bdbb25f586cfb270379d6870bb3df856aa83fa0aaf17_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34ca884d2905361b8a0731a094c7504a447929b11bc92220a0743605e1c8e0e7 = $this->env->getExtension("native_profiler");
        $__internal_34ca884d2905361b8a0731a094c7504a447929b11bc92220a0743605e1c8e0e7->enter($__internal_34ca884d2905361b8a0731a094c7504a447929b11bc92220a0743605e1c8e0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_34ca884d2905361b8a0731a094c7504a447929b11bc92220a0743605e1c8e0e7->leave($__internal_34ca884d2905361b8a0731a094c7504a447929b11bc92220a0743605e1c8e0e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d5dd2683fe077b5f5730a83b8199ff633e92dfe86e3b7f155fd846d2c9014ee = $this->env->getExtension("native_profiler");
        $__internal_6d5dd2683fe077b5f5730a83b8199ff633e92dfe86e3b7f155fd846d2c9014ee->enter($__internal_6d5dd2683fe077b5f5730a83b8199ff633e92dfe86e3b7f155fd846d2c9014ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6d5dd2683fe077b5f5730a83b8199ff633e92dfe86e3b7f155fd846d2c9014ee->leave($__internal_6d5dd2683fe077b5f5730a83b8199ff633e92dfe86e3b7f155fd846d2c9014ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
