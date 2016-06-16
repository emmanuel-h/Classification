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
        $__internal_a5ab4bac993c8ffe841fc15c51bc7d6f6b52ce1cbb87eee507b3ccbe727484d3 = $this->env->getExtension("native_profiler");
        $__internal_a5ab4bac993c8ffe841fc15c51bc7d6f6b52ce1cbb87eee507b3ccbe727484d3->enter($__internal_a5ab4bac993c8ffe841fc15c51bc7d6f6b52ce1cbb87eee507b3ccbe727484d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ab4bac993c8ffe841fc15c51bc7d6f6b52ce1cbb87eee507b3ccbe727484d3->leave($__internal_a5ab4bac993c8ffe841fc15c51bc7d6f6b52ce1cbb87eee507b3ccbe727484d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91a45ef0060bf24106b96dd28a2c71ec585b1ee85ae3312856fa69d69e1ce729 = $this->env->getExtension("native_profiler");
        $__internal_91a45ef0060bf24106b96dd28a2c71ec585b1ee85ae3312856fa69d69e1ce729->enter($__internal_91a45ef0060bf24106b96dd28a2c71ec585b1ee85ae3312856fa69d69e1ce729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_91a45ef0060bf24106b96dd28a2c71ec585b1ee85ae3312856fa69d69e1ce729->leave($__internal_91a45ef0060bf24106b96dd28a2c71ec585b1ee85ae3312856fa69d69e1ce729_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b828d8478327dc5728b626956c34fbf3fe42aef75c1c9e7d9520db220380997 = $this->env->getExtension("native_profiler");
        $__internal_2b828d8478327dc5728b626956c34fbf3fe42aef75c1c9e7d9520db220380997->enter($__internal_2b828d8478327dc5728b626956c34fbf3fe42aef75c1c9e7d9520db220380997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2b828d8478327dc5728b626956c34fbf3fe42aef75c1c9e7d9520db220380997->leave($__internal_2b828d8478327dc5728b626956c34fbf3fe42aef75c1c9e7d9520db220380997_prof);

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
