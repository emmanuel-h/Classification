<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e913db9381872f006d637aa6e373c0c5c65ccc8ba5f5be382c42eaedda5d02a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d9c5f6df81630f6fbc4e7f7c3f59708e61e95bc74cef1fe74c6ef32e6ddb93bb = $this->env->getExtension("native_profiler");
        $__internal_d9c5f6df81630f6fbc4e7f7c3f59708e61e95bc74cef1fe74c6ef32e6ddb93bb->enter($__internal_d9c5f6df81630f6fbc4e7f7c3f59708e61e95bc74cef1fe74c6ef32e6ddb93bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9c5f6df81630f6fbc4e7f7c3f59708e61e95bc74cef1fe74c6ef32e6ddb93bb->leave($__internal_d9c5f6df81630f6fbc4e7f7c3f59708e61e95bc74cef1fe74c6ef32e6ddb93bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ba8614f5739cb1f05517afaf8bad68be6d17832a69d1d366522d3433de89a9e = $this->env->getExtension("native_profiler");
        $__internal_0ba8614f5739cb1f05517afaf8bad68be6d17832a69d1d366522d3433de89a9e->enter($__internal_0ba8614f5739cb1f05517afaf8bad68be6d17832a69d1d366522d3433de89a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0ba8614f5739cb1f05517afaf8bad68be6d17832a69d1d366522d3433de89a9e->leave($__internal_0ba8614f5739cb1f05517afaf8bad68be6d17832a69d1d366522d3433de89a9e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bf7b534059548c01a837d71f09147e7ee2c5f3cb2342ca00538beb056a6588e = $this->env->getExtension("native_profiler");
        $__internal_4bf7b534059548c01a837d71f09147e7ee2c5f3cb2342ca00538beb056a6588e->enter($__internal_4bf7b534059548c01a837d71f09147e7ee2c5f3cb2342ca00538beb056a6588e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4bf7b534059548c01a837d71f09147e7ee2c5f3cb2342ca00538beb056a6588e->leave($__internal_4bf7b534059548c01a837d71f09147e7ee2c5f3cb2342ca00538beb056a6588e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
