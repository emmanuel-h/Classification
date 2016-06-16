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
        $__internal_1dae103c4ae0e9d49f60ee63f1ff2b5ecf2f3cf3a39220679121f1734c2dfff2 = $this->env->getExtension("native_profiler");
        $__internal_1dae103c4ae0e9d49f60ee63f1ff2b5ecf2f3cf3a39220679121f1734c2dfff2->enter($__internal_1dae103c4ae0e9d49f60ee63f1ff2b5ecf2f3cf3a39220679121f1734c2dfff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dae103c4ae0e9d49f60ee63f1ff2b5ecf2f3cf3a39220679121f1734c2dfff2->leave($__internal_1dae103c4ae0e9d49f60ee63f1ff2b5ecf2f3cf3a39220679121f1734c2dfff2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f78502d6a11340195cdd5fe6ec77ebf6b83bf6aab5410360725e430badcdefa = $this->env->getExtension("native_profiler");
        $__internal_9f78502d6a11340195cdd5fe6ec77ebf6b83bf6aab5410360725e430badcdefa->enter($__internal_9f78502d6a11340195cdd5fe6ec77ebf6b83bf6aab5410360725e430badcdefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f78502d6a11340195cdd5fe6ec77ebf6b83bf6aab5410360725e430badcdefa->leave($__internal_9f78502d6a11340195cdd5fe6ec77ebf6b83bf6aab5410360725e430badcdefa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa9db3b9035453b45fd043397b6d15b698a7ae51f73543d4a054a9b59e74d359 = $this->env->getExtension("native_profiler");
        $__internal_fa9db3b9035453b45fd043397b6d15b698a7ae51f73543d4a054a9b59e74d359->enter($__internal_fa9db3b9035453b45fd043397b6d15b698a7ae51f73543d4a054a9b59e74d359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa9db3b9035453b45fd043397b6d15b698a7ae51f73543d4a054a9b59e74d359->leave($__internal_fa9db3b9035453b45fd043397b6d15b698a7ae51f73543d4a054a9b59e74d359_prof);

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
