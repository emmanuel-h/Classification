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
        $__internal_f358b11b24c4a632ec39345202332e5c828f9e2aa45ef4df0964def2ccf96518 = $this->env->getExtension("native_profiler");
        $__internal_f358b11b24c4a632ec39345202332e5c828f9e2aa45ef4df0964def2ccf96518->enter($__internal_f358b11b24c4a632ec39345202332e5c828f9e2aa45ef4df0964def2ccf96518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f358b11b24c4a632ec39345202332e5c828f9e2aa45ef4df0964def2ccf96518->leave($__internal_f358b11b24c4a632ec39345202332e5c828f9e2aa45ef4df0964def2ccf96518_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_daa74fbc0d9bac0e1c3b04c6f184c6350c93dde697f72be7511fb24e4b683df6 = $this->env->getExtension("native_profiler");
        $__internal_daa74fbc0d9bac0e1c3b04c6f184c6350c93dde697f72be7511fb24e4b683df6->enter($__internal_daa74fbc0d9bac0e1c3b04c6f184c6350c93dde697f72be7511fb24e4b683df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_daa74fbc0d9bac0e1c3b04c6f184c6350c93dde697f72be7511fb24e4b683df6->leave($__internal_daa74fbc0d9bac0e1c3b04c6f184c6350c93dde697f72be7511fb24e4b683df6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfd0e38b201a159fbd2d9df07757686cc2ec8a8eeb79ab0263af1802a6927b89 = $this->env->getExtension("native_profiler");
        $__internal_bfd0e38b201a159fbd2d9df07757686cc2ec8a8eeb79ab0263af1802a6927b89->enter($__internal_bfd0e38b201a159fbd2d9df07757686cc2ec8a8eeb79ab0263af1802a6927b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bfd0e38b201a159fbd2d9df07757686cc2ec8a8eeb79ab0263af1802a6927b89->leave($__internal_bfd0e38b201a159fbd2d9df07757686cc2ec8a8eeb79ab0263af1802a6927b89_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4142b2c21600a2fc326a3b763956d16794f50d878b06e4d6cf8ae8c615907ff6 = $this->env->getExtension("native_profiler");
        $__internal_4142b2c21600a2fc326a3b763956d16794f50d878b06e4d6cf8ae8c615907ff6->enter($__internal_4142b2c21600a2fc326a3b763956d16794f50d878b06e4d6cf8ae8c615907ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4142b2c21600a2fc326a3b763956d16794f50d878b06e4d6cf8ae8c615907ff6->leave($__internal_4142b2c21600a2fc326a3b763956d16794f50d878b06e4d6cf8ae8c615907ff6_prof);

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
