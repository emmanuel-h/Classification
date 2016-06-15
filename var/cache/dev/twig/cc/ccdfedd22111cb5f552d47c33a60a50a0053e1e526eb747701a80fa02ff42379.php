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
        $__internal_d7e5dd49628207169dc09b59903ba2d822623df534a4616d7673143a3fbf2c25 = $this->env->getExtension("native_profiler");
        $__internal_d7e5dd49628207169dc09b59903ba2d822623df534a4616d7673143a3fbf2c25->enter($__internal_d7e5dd49628207169dc09b59903ba2d822623df534a4616d7673143a3fbf2c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e5dd49628207169dc09b59903ba2d822623df534a4616d7673143a3fbf2c25->leave($__internal_d7e5dd49628207169dc09b59903ba2d822623df534a4616d7673143a3fbf2c25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9be64ace3b8f585f59e993b7edba3d47308c95c837b9dd98148894462c924812 = $this->env->getExtension("native_profiler");
        $__internal_9be64ace3b8f585f59e993b7edba3d47308c95c837b9dd98148894462c924812->enter($__internal_9be64ace3b8f585f59e993b7edba3d47308c95c837b9dd98148894462c924812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9be64ace3b8f585f59e993b7edba3d47308c95c837b9dd98148894462c924812->leave($__internal_9be64ace3b8f585f59e993b7edba3d47308c95c837b9dd98148894462c924812_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_545c1d6a0b53c9a8b92126e190bc4fa97501a1d58063489b0fc17d5e679fd9d2 = $this->env->getExtension("native_profiler");
        $__internal_545c1d6a0b53c9a8b92126e190bc4fa97501a1d58063489b0fc17d5e679fd9d2->enter($__internal_545c1d6a0b53c9a8b92126e190bc4fa97501a1d58063489b0fc17d5e679fd9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_545c1d6a0b53c9a8b92126e190bc4fa97501a1d58063489b0fc17d5e679fd9d2->leave($__internal_545c1d6a0b53c9a8b92126e190bc4fa97501a1d58063489b0fc17d5e679fd9d2_prof);

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
