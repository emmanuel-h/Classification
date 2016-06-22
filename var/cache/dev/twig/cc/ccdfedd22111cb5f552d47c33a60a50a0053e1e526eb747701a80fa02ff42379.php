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
        $__internal_e92eebe33003e05207deb6f740b810bfb31a5b0803afd2220e04f47d59c58d82 = $this->env->getExtension("native_profiler");
        $__internal_e92eebe33003e05207deb6f740b810bfb31a5b0803afd2220e04f47d59c58d82->enter($__internal_e92eebe33003e05207deb6f740b810bfb31a5b0803afd2220e04f47d59c58d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92eebe33003e05207deb6f740b810bfb31a5b0803afd2220e04f47d59c58d82->leave($__internal_e92eebe33003e05207deb6f740b810bfb31a5b0803afd2220e04f47d59c58d82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3987796eb82ce7d6748febcc7b577d9a6e49c378defdbe5b8c7153ef2e6bc204 = $this->env->getExtension("native_profiler");
        $__internal_3987796eb82ce7d6748febcc7b577d9a6e49c378defdbe5b8c7153ef2e6bc204->enter($__internal_3987796eb82ce7d6748febcc7b577d9a6e49c378defdbe5b8c7153ef2e6bc204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3987796eb82ce7d6748febcc7b577d9a6e49c378defdbe5b8c7153ef2e6bc204->leave($__internal_3987796eb82ce7d6748febcc7b577d9a6e49c378defdbe5b8c7153ef2e6bc204_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cf1abe6dcc9ccac6e3197a36c734ad372011dc8a3cf9d961a6d8ad3406a8ebf = $this->env->getExtension("native_profiler");
        $__internal_6cf1abe6dcc9ccac6e3197a36c734ad372011dc8a3cf9d961a6d8ad3406a8ebf->enter($__internal_6cf1abe6dcc9ccac6e3197a36c734ad372011dc8a3cf9d961a6d8ad3406a8ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6cf1abe6dcc9ccac6e3197a36c734ad372011dc8a3cf9d961a6d8ad3406a8ebf->leave($__internal_6cf1abe6dcc9ccac6e3197a36c734ad372011dc8a3cf9d961a6d8ad3406a8ebf_prof);

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
