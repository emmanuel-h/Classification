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
        $__internal_1bb4d158676f57d78fe04bc08ef12b40ed398654aa365f94d5564bb90945f78d = $this->env->getExtension("native_profiler");
        $__internal_1bb4d158676f57d78fe04bc08ef12b40ed398654aa365f94d5564bb90945f78d->enter($__internal_1bb4d158676f57d78fe04bc08ef12b40ed398654aa365f94d5564bb90945f78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb4d158676f57d78fe04bc08ef12b40ed398654aa365f94d5564bb90945f78d->leave($__internal_1bb4d158676f57d78fe04bc08ef12b40ed398654aa365f94d5564bb90945f78d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4bfc2ab7c5d99679ee3eb3267a5f210d7dd175ab715450a83366851d663cb70 = $this->env->getExtension("native_profiler");
        $__internal_a4bfc2ab7c5d99679ee3eb3267a5f210d7dd175ab715450a83366851d663cb70->enter($__internal_a4bfc2ab7c5d99679ee3eb3267a5f210d7dd175ab715450a83366851d663cb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a4bfc2ab7c5d99679ee3eb3267a5f210d7dd175ab715450a83366851d663cb70->leave($__internal_a4bfc2ab7c5d99679ee3eb3267a5f210d7dd175ab715450a83366851d663cb70_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5b25b0b8073277f5a6a4485a0c5f5ab9e032a41a8e22164009ff3f3500ff25b = $this->env->getExtension("native_profiler");
        $__internal_a5b25b0b8073277f5a6a4485a0c5f5ab9e032a41a8e22164009ff3f3500ff25b->enter($__internal_a5b25b0b8073277f5a6a4485a0c5f5ab9e032a41a8e22164009ff3f3500ff25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a5b25b0b8073277f5a6a4485a0c5f5ab9e032a41a8e22164009ff3f3500ff25b->leave($__internal_a5b25b0b8073277f5a6a4485a0c5f5ab9e032a41a8e22164009ff3f3500ff25b_prof);

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
