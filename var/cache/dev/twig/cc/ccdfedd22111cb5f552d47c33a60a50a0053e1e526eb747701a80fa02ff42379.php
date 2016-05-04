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
        $__internal_69093f4e05e3bcec3b863db004c9a136ff648b76d9dc39609055769366f1a8ed = $this->env->getExtension("native_profiler");
        $__internal_69093f4e05e3bcec3b863db004c9a136ff648b76d9dc39609055769366f1a8ed->enter($__internal_69093f4e05e3bcec3b863db004c9a136ff648b76d9dc39609055769366f1a8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69093f4e05e3bcec3b863db004c9a136ff648b76d9dc39609055769366f1a8ed->leave($__internal_69093f4e05e3bcec3b863db004c9a136ff648b76d9dc39609055769366f1a8ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46b650577b1d7709402aeb57242ac738de6c174e874f1d09c282283ec3fcd87d = $this->env->getExtension("native_profiler");
        $__internal_46b650577b1d7709402aeb57242ac738de6c174e874f1d09c282283ec3fcd87d->enter($__internal_46b650577b1d7709402aeb57242ac738de6c174e874f1d09c282283ec3fcd87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_46b650577b1d7709402aeb57242ac738de6c174e874f1d09c282283ec3fcd87d->leave($__internal_46b650577b1d7709402aeb57242ac738de6c174e874f1d09c282283ec3fcd87d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4e1f7b4a7df5bfa113c0710d89e14680d7829c6fc12eba3fbad5c3565e38a17 = $this->env->getExtension("native_profiler");
        $__internal_e4e1f7b4a7df5bfa113c0710d89e14680d7829c6fc12eba3fbad5c3565e38a17->enter($__internal_e4e1f7b4a7df5bfa113c0710d89e14680d7829c6fc12eba3fbad5c3565e38a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e4e1f7b4a7df5bfa113c0710d89e14680d7829c6fc12eba3fbad5c3565e38a17->leave($__internal_e4e1f7b4a7df5bfa113c0710d89e14680d7829c6fc12eba3fbad5c3565e38a17_prof);

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
