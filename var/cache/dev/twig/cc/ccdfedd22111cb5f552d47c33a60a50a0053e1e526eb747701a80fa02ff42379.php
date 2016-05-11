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
        $__internal_22773c8795e6dc192a2d4152fb7f0e3beb983fc98ca472a19b49b6a7eaff531e = $this->env->getExtension("native_profiler");
        $__internal_22773c8795e6dc192a2d4152fb7f0e3beb983fc98ca472a19b49b6a7eaff531e->enter($__internal_22773c8795e6dc192a2d4152fb7f0e3beb983fc98ca472a19b49b6a7eaff531e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22773c8795e6dc192a2d4152fb7f0e3beb983fc98ca472a19b49b6a7eaff531e->leave($__internal_22773c8795e6dc192a2d4152fb7f0e3beb983fc98ca472a19b49b6a7eaff531e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93bf3ea464394f8d84f6dfc8303c1e9d57aa9b9e42c23e7238dbfcaebd7a912c = $this->env->getExtension("native_profiler");
        $__internal_93bf3ea464394f8d84f6dfc8303c1e9d57aa9b9e42c23e7238dbfcaebd7a912c->enter($__internal_93bf3ea464394f8d84f6dfc8303c1e9d57aa9b9e42c23e7238dbfcaebd7a912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_93bf3ea464394f8d84f6dfc8303c1e9d57aa9b9e42c23e7238dbfcaebd7a912c->leave($__internal_93bf3ea464394f8d84f6dfc8303c1e9d57aa9b9e42c23e7238dbfcaebd7a912c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bd2515c129774f6797fb9506e0e14fe15c92ffe786b0498816b6e1f59babde5 = $this->env->getExtension("native_profiler");
        $__internal_8bd2515c129774f6797fb9506e0e14fe15c92ffe786b0498816b6e1f59babde5->enter($__internal_8bd2515c129774f6797fb9506e0e14fe15c92ffe786b0498816b6e1f59babde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8bd2515c129774f6797fb9506e0e14fe15c92ffe786b0498816b6e1f59babde5->leave($__internal_8bd2515c129774f6797fb9506e0e14fe15c92ffe786b0498816b6e1f59babde5_prof);

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
