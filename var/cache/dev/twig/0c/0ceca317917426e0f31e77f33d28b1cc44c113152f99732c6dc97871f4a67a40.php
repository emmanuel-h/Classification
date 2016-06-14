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
        $__internal_390abe27953e81580019d5bfb85eb5cb04150465860a743c398f5868018511e9 = $this->env->getExtension("native_profiler");
        $__internal_390abe27953e81580019d5bfb85eb5cb04150465860a743c398f5868018511e9->enter($__internal_390abe27953e81580019d5bfb85eb5cb04150465860a743c398f5868018511e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_390abe27953e81580019d5bfb85eb5cb04150465860a743c398f5868018511e9->leave($__internal_390abe27953e81580019d5bfb85eb5cb04150465860a743c398f5868018511e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4764bb0c784a29ea802034288ba34b2c4b40f6834a456e59df8ae6275115c3de = $this->env->getExtension("native_profiler");
        $__internal_4764bb0c784a29ea802034288ba34b2c4b40f6834a456e59df8ae6275115c3de->enter($__internal_4764bb0c784a29ea802034288ba34b2c4b40f6834a456e59df8ae6275115c3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4764bb0c784a29ea802034288ba34b2c4b40f6834a456e59df8ae6275115c3de->leave($__internal_4764bb0c784a29ea802034288ba34b2c4b40f6834a456e59df8ae6275115c3de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_850ca07c0643dac04fa34f947ee983542f7811c3390b2c5e4dfe13d2100c94ac = $this->env->getExtension("native_profiler");
        $__internal_850ca07c0643dac04fa34f947ee983542f7811c3390b2c5e4dfe13d2100c94ac->enter($__internal_850ca07c0643dac04fa34f947ee983542f7811c3390b2c5e4dfe13d2100c94ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_850ca07c0643dac04fa34f947ee983542f7811c3390b2c5e4dfe13d2100c94ac->leave($__internal_850ca07c0643dac04fa34f947ee983542f7811c3390b2c5e4dfe13d2100c94ac_prof);

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
