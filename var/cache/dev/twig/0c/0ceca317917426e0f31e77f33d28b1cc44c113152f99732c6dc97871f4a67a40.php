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
        $__internal_ceba2c87ae9618fa96a8cb7128b6f71b9f73156e118e167aa5f07b032ab49655 = $this->env->getExtension("native_profiler");
        $__internal_ceba2c87ae9618fa96a8cb7128b6f71b9f73156e118e167aa5f07b032ab49655->enter($__internal_ceba2c87ae9618fa96a8cb7128b6f71b9f73156e118e167aa5f07b032ab49655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceba2c87ae9618fa96a8cb7128b6f71b9f73156e118e167aa5f07b032ab49655->leave($__internal_ceba2c87ae9618fa96a8cb7128b6f71b9f73156e118e167aa5f07b032ab49655_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79e3af9f8ef233a89cc09573a82c42428bf957c8619a822e2e38f8a97f276b2 = $this->env->getExtension("native_profiler");
        $__internal_f79e3af9f8ef233a89cc09573a82c42428bf957c8619a822e2e38f8a97f276b2->enter($__internal_f79e3af9f8ef233a89cc09573a82c42428bf957c8619a822e2e38f8a97f276b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f79e3af9f8ef233a89cc09573a82c42428bf957c8619a822e2e38f8a97f276b2->leave($__internal_f79e3af9f8ef233a89cc09573a82c42428bf957c8619a822e2e38f8a97f276b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_70df2ead42cae3cded5f24455a8f38e681ae3e4919ab2755bae3a6b7480e0919 = $this->env->getExtension("native_profiler");
        $__internal_70df2ead42cae3cded5f24455a8f38e681ae3e4919ab2755bae3a6b7480e0919->enter($__internal_70df2ead42cae3cded5f24455a8f38e681ae3e4919ab2755bae3a6b7480e0919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70df2ead42cae3cded5f24455a8f38e681ae3e4919ab2755bae3a6b7480e0919->leave($__internal_70df2ead42cae3cded5f24455a8f38e681ae3e4919ab2755bae3a6b7480e0919_prof);

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
