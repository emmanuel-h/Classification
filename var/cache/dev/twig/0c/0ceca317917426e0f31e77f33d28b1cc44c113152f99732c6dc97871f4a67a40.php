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
        $__internal_8889ada72edc03af095ac4dbd8da7db557a1c657b1402ddb3e3d765a16ab5b72 = $this->env->getExtension("native_profiler");
        $__internal_8889ada72edc03af095ac4dbd8da7db557a1c657b1402ddb3e3d765a16ab5b72->enter($__internal_8889ada72edc03af095ac4dbd8da7db557a1c657b1402ddb3e3d765a16ab5b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8889ada72edc03af095ac4dbd8da7db557a1c657b1402ddb3e3d765a16ab5b72->leave($__internal_8889ada72edc03af095ac4dbd8da7db557a1c657b1402ddb3e3d765a16ab5b72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8de1d2f3c1bc19053d002d6b8a9835cb5a89800c2252bbab73100a7c87e2281 = $this->env->getExtension("native_profiler");
        $__internal_a8de1d2f3c1bc19053d002d6b8a9835cb5a89800c2252bbab73100a7c87e2281->enter($__internal_a8de1d2f3c1bc19053d002d6b8a9835cb5a89800c2252bbab73100a7c87e2281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8de1d2f3c1bc19053d002d6b8a9835cb5a89800c2252bbab73100a7c87e2281->leave($__internal_a8de1d2f3c1bc19053d002d6b8a9835cb5a89800c2252bbab73100a7c87e2281_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd27fbb6ac04e3dfb99f6f62cefd8f242d92e003efb320fb5d318ff41fa8e2ca = $this->env->getExtension("native_profiler");
        $__internal_fd27fbb6ac04e3dfb99f6f62cefd8f242d92e003efb320fb5d318ff41fa8e2ca->enter($__internal_fd27fbb6ac04e3dfb99f6f62cefd8f242d92e003efb320fb5d318ff41fa8e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd27fbb6ac04e3dfb99f6f62cefd8f242d92e003efb320fb5d318ff41fa8e2ca->leave($__internal_fd27fbb6ac04e3dfb99f6f62cefd8f242d92e003efb320fb5d318ff41fa8e2ca_prof);

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
