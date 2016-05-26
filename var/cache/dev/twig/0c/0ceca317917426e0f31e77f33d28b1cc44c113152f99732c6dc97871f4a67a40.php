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
        $__internal_2275a452b7d54763a36ff4e4ab0588b475a7d6dec5f80c73bc365f6399ccf6a3 = $this->env->getExtension("native_profiler");
        $__internal_2275a452b7d54763a36ff4e4ab0588b475a7d6dec5f80c73bc365f6399ccf6a3->enter($__internal_2275a452b7d54763a36ff4e4ab0588b475a7d6dec5f80c73bc365f6399ccf6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2275a452b7d54763a36ff4e4ab0588b475a7d6dec5f80c73bc365f6399ccf6a3->leave($__internal_2275a452b7d54763a36ff4e4ab0588b475a7d6dec5f80c73bc365f6399ccf6a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c859335c0376a5d55b7afbdd4755f1b8dabd1c8d133930960a6df1f5ab28dc6 = $this->env->getExtension("native_profiler");
        $__internal_7c859335c0376a5d55b7afbdd4755f1b8dabd1c8d133930960a6df1f5ab28dc6->enter($__internal_7c859335c0376a5d55b7afbdd4755f1b8dabd1c8d133930960a6df1f5ab28dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7c859335c0376a5d55b7afbdd4755f1b8dabd1c8d133930960a6df1f5ab28dc6->leave($__internal_7c859335c0376a5d55b7afbdd4755f1b8dabd1c8d133930960a6df1f5ab28dc6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e5577847c130c1cbd7da1977fd58ca9890e90a76c468af09808c63fe83f1aa6 = $this->env->getExtension("native_profiler");
        $__internal_6e5577847c130c1cbd7da1977fd58ca9890e90a76c468af09808c63fe83f1aa6->enter($__internal_6e5577847c130c1cbd7da1977fd58ca9890e90a76c468af09808c63fe83f1aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e5577847c130c1cbd7da1977fd58ca9890e90a76c468af09808c63fe83f1aa6->leave($__internal_6e5577847c130c1cbd7da1977fd58ca9890e90a76c468af09808c63fe83f1aa6_prof);

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
