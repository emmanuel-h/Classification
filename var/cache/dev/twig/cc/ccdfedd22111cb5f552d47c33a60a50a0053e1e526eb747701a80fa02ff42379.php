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
        $__internal_a5008d872c13cee82a8d72f422eccfd5544ee26157c96c74e1a75d09b9dbc0b8 = $this->env->getExtension("native_profiler");
        $__internal_a5008d872c13cee82a8d72f422eccfd5544ee26157c96c74e1a75d09b9dbc0b8->enter($__internal_a5008d872c13cee82a8d72f422eccfd5544ee26157c96c74e1a75d09b9dbc0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5008d872c13cee82a8d72f422eccfd5544ee26157c96c74e1a75d09b9dbc0b8->leave($__internal_a5008d872c13cee82a8d72f422eccfd5544ee26157c96c74e1a75d09b9dbc0b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36abbadcabb42cad288c02289565f3ecbdc30a4f2b87330a6d7ef16503907cb0 = $this->env->getExtension("native_profiler");
        $__internal_36abbadcabb42cad288c02289565f3ecbdc30a4f2b87330a6d7ef16503907cb0->enter($__internal_36abbadcabb42cad288c02289565f3ecbdc30a4f2b87330a6d7ef16503907cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_36abbadcabb42cad288c02289565f3ecbdc30a4f2b87330a6d7ef16503907cb0->leave($__internal_36abbadcabb42cad288c02289565f3ecbdc30a4f2b87330a6d7ef16503907cb0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf61638ac369107311c67272473f51d45a40f103f9304ea43c1650ab3c3a9b0 = $this->env->getExtension("native_profiler");
        $__internal_aaf61638ac369107311c67272473f51d45a40f103f9304ea43c1650ab3c3a9b0->enter($__internal_aaf61638ac369107311c67272473f51d45a40f103f9304ea43c1650ab3c3a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aaf61638ac369107311c67272473f51d45a40f103f9304ea43c1650ab3c3a9b0->leave($__internal_aaf61638ac369107311c67272473f51d45a40f103f9304ea43c1650ab3c3a9b0_prof);

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
