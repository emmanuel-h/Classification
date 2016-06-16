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
        $__internal_c45bfb4c8095c9a6bcd79600aaf2e602f4e9bd6fac5b9b694802eb49fa480f8e = $this->env->getExtension("native_profiler");
        $__internal_c45bfb4c8095c9a6bcd79600aaf2e602f4e9bd6fac5b9b694802eb49fa480f8e->enter($__internal_c45bfb4c8095c9a6bcd79600aaf2e602f4e9bd6fac5b9b694802eb49fa480f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45bfb4c8095c9a6bcd79600aaf2e602f4e9bd6fac5b9b694802eb49fa480f8e->leave($__internal_c45bfb4c8095c9a6bcd79600aaf2e602f4e9bd6fac5b9b694802eb49fa480f8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_816e03bd269449907969e5bd021277535f4f6a3dec3228c01c71105996a4f3de = $this->env->getExtension("native_profiler");
        $__internal_816e03bd269449907969e5bd021277535f4f6a3dec3228c01c71105996a4f3de->enter($__internal_816e03bd269449907969e5bd021277535f4f6a3dec3228c01c71105996a4f3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_816e03bd269449907969e5bd021277535f4f6a3dec3228c01c71105996a4f3de->leave($__internal_816e03bd269449907969e5bd021277535f4f6a3dec3228c01c71105996a4f3de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_38e114eb84106a3e6966f2d957d6de9eb9a8c369d77694168f7974239330a454 = $this->env->getExtension("native_profiler");
        $__internal_38e114eb84106a3e6966f2d957d6de9eb9a8c369d77694168f7974239330a454->enter($__internal_38e114eb84106a3e6966f2d957d6de9eb9a8c369d77694168f7974239330a454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38e114eb84106a3e6966f2d957d6de9eb9a8c369d77694168f7974239330a454->leave($__internal_38e114eb84106a3e6966f2d957d6de9eb9a8c369d77694168f7974239330a454_prof);

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
