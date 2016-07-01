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
        $__internal_eec487911796421f77353a83bc58b338a4f0155d2e568ed9412d5fb54293da21 = $this->env->getExtension("native_profiler");
        $__internal_eec487911796421f77353a83bc58b338a4f0155d2e568ed9412d5fb54293da21->enter($__internal_eec487911796421f77353a83bc58b338a4f0155d2e568ed9412d5fb54293da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec487911796421f77353a83bc58b338a4f0155d2e568ed9412d5fb54293da21->leave($__internal_eec487911796421f77353a83bc58b338a4f0155d2e568ed9412d5fb54293da21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ed6af9fe41b67db0a0b1011703d3471b9af0e678457ec2cfd4155ddcb82e8aa = $this->env->getExtension("native_profiler");
        $__internal_0ed6af9fe41b67db0a0b1011703d3471b9af0e678457ec2cfd4155ddcb82e8aa->enter($__internal_0ed6af9fe41b67db0a0b1011703d3471b9af0e678457ec2cfd4155ddcb82e8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0ed6af9fe41b67db0a0b1011703d3471b9af0e678457ec2cfd4155ddcb82e8aa->leave($__internal_0ed6af9fe41b67db0a0b1011703d3471b9af0e678457ec2cfd4155ddcb82e8aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b8bb3c4d2fd60a85b43331c3ac2dae02543c826d0141c01d954246b7a59659d = $this->env->getExtension("native_profiler");
        $__internal_5b8bb3c4d2fd60a85b43331c3ac2dae02543c826d0141c01d954246b7a59659d->enter($__internal_5b8bb3c4d2fd60a85b43331c3ac2dae02543c826d0141c01d954246b7a59659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b8bb3c4d2fd60a85b43331c3ac2dae02543c826d0141c01d954246b7a59659d->leave($__internal_5b8bb3c4d2fd60a85b43331c3ac2dae02543c826d0141c01d954246b7a59659d_prof);

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
