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
        $__internal_f40fa78eafd0952374a7088f203c5feb63195bd760c76e238934dcfc93a75335 = $this->env->getExtension("native_profiler");
        $__internal_f40fa78eafd0952374a7088f203c5feb63195bd760c76e238934dcfc93a75335->enter($__internal_f40fa78eafd0952374a7088f203c5feb63195bd760c76e238934dcfc93a75335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40fa78eafd0952374a7088f203c5feb63195bd760c76e238934dcfc93a75335->leave($__internal_f40fa78eafd0952374a7088f203c5feb63195bd760c76e238934dcfc93a75335_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc65a42ff11aff9379db6a4955990a2ca8b6b53418ae8b73b13ba08d1f894435 = $this->env->getExtension("native_profiler");
        $__internal_dc65a42ff11aff9379db6a4955990a2ca8b6b53418ae8b73b13ba08d1f894435->enter($__internal_dc65a42ff11aff9379db6a4955990a2ca8b6b53418ae8b73b13ba08d1f894435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dc65a42ff11aff9379db6a4955990a2ca8b6b53418ae8b73b13ba08d1f894435->leave($__internal_dc65a42ff11aff9379db6a4955990a2ca8b6b53418ae8b73b13ba08d1f894435_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_806cd468c6e22c4a605961a9ab919cdb73114e148cd2d4c8a168d37b05afc91f = $this->env->getExtension("native_profiler");
        $__internal_806cd468c6e22c4a605961a9ab919cdb73114e148cd2d4c8a168d37b05afc91f->enter($__internal_806cd468c6e22c4a605961a9ab919cdb73114e148cd2d4c8a168d37b05afc91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_806cd468c6e22c4a605961a9ab919cdb73114e148cd2d4c8a168d37b05afc91f->leave($__internal_806cd468c6e22c4a605961a9ab919cdb73114e148cd2d4c8a168d37b05afc91f_prof);

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
