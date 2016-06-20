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
        $__internal_c8a22fb6ae71cd55d5ed5c507ee913081c952de54b694606f78a10f3f43db571 = $this->env->getExtension("native_profiler");
        $__internal_c8a22fb6ae71cd55d5ed5c507ee913081c952de54b694606f78a10f3f43db571->enter($__internal_c8a22fb6ae71cd55d5ed5c507ee913081c952de54b694606f78a10f3f43db571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a22fb6ae71cd55d5ed5c507ee913081c952de54b694606f78a10f3f43db571->leave($__internal_c8a22fb6ae71cd55d5ed5c507ee913081c952de54b694606f78a10f3f43db571_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c726649d499e83095ef25d3a910ab44c9de486b214580b965bf25e506cdfcf4 = $this->env->getExtension("native_profiler");
        $__internal_0c726649d499e83095ef25d3a910ab44c9de486b214580b965bf25e506cdfcf4->enter($__internal_0c726649d499e83095ef25d3a910ab44c9de486b214580b965bf25e506cdfcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c726649d499e83095ef25d3a910ab44c9de486b214580b965bf25e506cdfcf4->leave($__internal_0c726649d499e83095ef25d3a910ab44c9de486b214580b965bf25e506cdfcf4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8235c082c04f16bb3170002e5c861f40cc3e26dbb2a5ddfaeffa26b5fc6cf41 = $this->env->getExtension("native_profiler");
        $__internal_c8235c082c04f16bb3170002e5c861f40cc3e26dbb2a5ddfaeffa26b5fc6cf41->enter($__internal_c8235c082c04f16bb3170002e5c861f40cc3e26dbb2a5ddfaeffa26b5fc6cf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8235c082c04f16bb3170002e5c861f40cc3e26dbb2a5ddfaeffa26b5fc6cf41->leave($__internal_c8235c082c04f16bb3170002e5c861f40cc3e26dbb2a5ddfaeffa26b5fc6cf41_prof);

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
