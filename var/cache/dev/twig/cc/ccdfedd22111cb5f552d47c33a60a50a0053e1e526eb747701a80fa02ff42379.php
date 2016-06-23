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
        $__internal_9b6595faecee1f3f8bc2d4ff2d887860b94b8c8ef52d6af83a5984b8b1b0f154 = $this->env->getExtension("native_profiler");
        $__internal_9b6595faecee1f3f8bc2d4ff2d887860b94b8c8ef52d6af83a5984b8b1b0f154->enter($__internal_9b6595faecee1f3f8bc2d4ff2d887860b94b8c8ef52d6af83a5984b8b1b0f154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6595faecee1f3f8bc2d4ff2d887860b94b8c8ef52d6af83a5984b8b1b0f154->leave($__internal_9b6595faecee1f3f8bc2d4ff2d887860b94b8c8ef52d6af83a5984b8b1b0f154_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eedc49747aedea02cefea3f77752391fe0006a461ce892bfc3c6f2d2e86b7574 = $this->env->getExtension("native_profiler");
        $__internal_eedc49747aedea02cefea3f77752391fe0006a461ce892bfc3c6f2d2e86b7574->enter($__internal_eedc49747aedea02cefea3f77752391fe0006a461ce892bfc3c6f2d2e86b7574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eedc49747aedea02cefea3f77752391fe0006a461ce892bfc3c6f2d2e86b7574->leave($__internal_eedc49747aedea02cefea3f77752391fe0006a461ce892bfc3c6f2d2e86b7574_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b7a0433f8f505c3d3e6223d107ee72939139f69f3fbc243eee3ba1caff0418 = $this->env->getExtension("native_profiler");
        $__internal_27b7a0433f8f505c3d3e6223d107ee72939139f69f3fbc243eee3ba1caff0418->enter($__internal_27b7a0433f8f505c3d3e6223d107ee72939139f69f3fbc243eee3ba1caff0418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27b7a0433f8f505c3d3e6223d107ee72939139f69f3fbc243eee3ba1caff0418->leave($__internal_27b7a0433f8f505c3d3e6223d107ee72939139f69f3fbc243eee3ba1caff0418_prof);

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
