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
        $__internal_0088b6a6572a082d728e394b8e3dd2c31d005129e3b6868061ef52050b9e8c95 = $this->env->getExtension("native_profiler");
        $__internal_0088b6a6572a082d728e394b8e3dd2c31d005129e3b6868061ef52050b9e8c95->enter($__internal_0088b6a6572a082d728e394b8e3dd2c31d005129e3b6868061ef52050b9e8c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0088b6a6572a082d728e394b8e3dd2c31d005129e3b6868061ef52050b9e8c95->leave($__internal_0088b6a6572a082d728e394b8e3dd2c31d005129e3b6868061ef52050b9e8c95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae103a86daf142be725e5debbc162531225d04298377ba626c2e40d51a9df138 = $this->env->getExtension("native_profiler");
        $__internal_ae103a86daf142be725e5debbc162531225d04298377ba626c2e40d51a9df138->enter($__internal_ae103a86daf142be725e5debbc162531225d04298377ba626c2e40d51a9df138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae103a86daf142be725e5debbc162531225d04298377ba626c2e40d51a9df138->leave($__internal_ae103a86daf142be725e5debbc162531225d04298377ba626c2e40d51a9df138_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e586f1ee4f52af1fb4445fb72f798aeb55cb7e727a6b368f799cac257d4e7286 = $this->env->getExtension("native_profiler");
        $__internal_e586f1ee4f52af1fb4445fb72f798aeb55cb7e727a6b368f799cac257d4e7286->enter($__internal_e586f1ee4f52af1fb4445fb72f798aeb55cb7e727a6b368f799cac257d4e7286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e586f1ee4f52af1fb4445fb72f798aeb55cb7e727a6b368f799cac257d4e7286->leave($__internal_e586f1ee4f52af1fb4445fb72f798aeb55cb7e727a6b368f799cac257d4e7286_prof);

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
