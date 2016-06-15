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
        $__internal_cf70a75acae483d1baae8fd01eb5c3474c0b71a8ce872abb66c7048b94ef85d2 = $this->env->getExtension("native_profiler");
        $__internal_cf70a75acae483d1baae8fd01eb5c3474c0b71a8ce872abb66c7048b94ef85d2->enter($__internal_cf70a75acae483d1baae8fd01eb5c3474c0b71a8ce872abb66c7048b94ef85d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf70a75acae483d1baae8fd01eb5c3474c0b71a8ce872abb66c7048b94ef85d2->leave($__internal_cf70a75acae483d1baae8fd01eb5c3474c0b71a8ce872abb66c7048b94ef85d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c95f89e1bfaf8a05625e2765957e0fb047ee51a532aad4a078a1f54d7269aa3 = $this->env->getExtension("native_profiler");
        $__internal_4c95f89e1bfaf8a05625e2765957e0fb047ee51a532aad4a078a1f54d7269aa3->enter($__internal_4c95f89e1bfaf8a05625e2765957e0fb047ee51a532aad4a078a1f54d7269aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4c95f89e1bfaf8a05625e2765957e0fb047ee51a532aad4a078a1f54d7269aa3->leave($__internal_4c95f89e1bfaf8a05625e2765957e0fb047ee51a532aad4a078a1f54d7269aa3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db45208137577a43e28afeddffa18f0de761b4de112f7997e392be2cdff8bd9f = $this->env->getExtension("native_profiler");
        $__internal_db45208137577a43e28afeddffa18f0de761b4de112f7997e392be2cdff8bd9f->enter($__internal_db45208137577a43e28afeddffa18f0de761b4de112f7997e392be2cdff8bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db45208137577a43e28afeddffa18f0de761b4de112f7997e392be2cdff8bd9f->leave($__internal_db45208137577a43e28afeddffa18f0de761b4de112f7997e392be2cdff8bd9f_prof);

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
