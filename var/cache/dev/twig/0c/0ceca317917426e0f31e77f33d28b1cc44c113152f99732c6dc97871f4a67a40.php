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
        $__internal_90e66f00af28989826b58cfdfe86f8449c0b4e70bc8031b23dc7d8953a16fb65 = $this->env->getExtension("native_profiler");
        $__internal_90e66f00af28989826b58cfdfe86f8449c0b4e70bc8031b23dc7d8953a16fb65->enter($__internal_90e66f00af28989826b58cfdfe86f8449c0b4e70bc8031b23dc7d8953a16fb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e66f00af28989826b58cfdfe86f8449c0b4e70bc8031b23dc7d8953a16fb65->leave($__internal_90e66f00af28989826b58cfdfe86f8449c0b4e70bc8031b23dc7d8953a16fb65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_069c0b5072eecb680be65b1ebada590083dbbd7a1627b571276b78cbb1139cc6 = $this->env->getExtension("native_profiler");
        $__internal_069c0b5072eecb680be65b1ebada590083dbbd7a1627b571276b78cbb1139cc6->enter($__internal_069c0b5072eecb680be65b1ebada590083dbbd7a1627b571276b78cbb1139cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_069c0b5072eecb680be65b1ebada590083dbbd7a1627b571276b78cbb1139cc6->leave($__internal_069c0b5072eecb680be65b1ebada590083dbbd7a1627b571276b78cbb1139cc6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7081fc099c1d8530dbe266253db54dd176b2631eeb69f488ec7129da3dc3c50b = $this->env->getExtension("native_profiler");
        $__internal_7081fc099c1d8530dbe266253db54dd176b2631eeb69f488ec7129da3dc3c50b->enter($__internal_7081fc099c1d8530dbe266253db54dd176b2631eeb69f488ec7129da3dc3c50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7081fc099c1d8530dbe266253db54dd176b2631eeb69f488ec7129da3dc3c50b->leave($__internal_7081fc099c1d8530dbe266253db54dd176b2631eeb69f488ec7129da3dc3c50b_prof);

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
