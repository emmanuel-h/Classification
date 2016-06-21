<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5cf760503ca9bb5e7b5cb7031b84fba89563122b0859dd52df2646ac00fb5c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_10d5eaad36e0515505014cf0dc3c9a89161b6cc1cd3f9a5b764f0dcf698a7016 = $this->env->getExtension("native_profiler");
        $__internal_10d5eaad36e0515505014cf0dc3c9a89161b6cc1cd3f9a5b764f0dcf698a7016->enter($__internal_10d5eaad36e0515505014cf0dc3c9a89161b6cc1cd3f9a5b764f0dcf698a7016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d5eaad36e0515505014cf0dc3c9a89161b6cc1cd3f9a5b764f0dcf698a7016->leave($__internal_10d5eaad36e0515505014cf0dc3c9a89161b6cc1cd3f9a5b764f0dcf698a7016_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce013182550a8f25c3bcaa822f03c9a0dae58e9d0a4e84354df4f98ca804116d = $this->env->getExtension("native_profiler");
        $__internal_ce013182550a8f25c3bcaa822f03c9a0dae58e9d0a4e84354df4f98ca804116d->enter($__internal_ce013182550a8f25c3bcaa822f03c9a0dae58e9d0a4e84354df4f98ca804116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ce013182550a8f25c3bcaa822f03c9a0dae58e9d0a4e84354df4f98ca804116d->leave($__internal_ce013182550a8f25c3bcaa822f03c9a0dae58e9d0a4e84354df4f98ca804116d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9468a3a4f4a55efc669d90498dcc257c40a63083c8997d91bc04344e284a865 = $this->env->getExtension("native_profiler");
        $__internal_d9468a3a4f4a55efc669d90498dcc257c40a63083c8997d91bc04344e284a865->enter($__internal_d9468a3a4f4a55efc669d90498dcc257c40a63083c8997d91bc04344e284a865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9468a3a4f4a55efc669d90498dcc257c40a63083c8997d91bc04344e284a865->leave($__internal_d9468a3a4f4a55efc669d90498dcc257c40a63083c8997d91bc04344e284a865_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
