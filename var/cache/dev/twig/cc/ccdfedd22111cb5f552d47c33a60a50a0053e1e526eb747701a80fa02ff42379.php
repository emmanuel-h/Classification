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
        $__internal_0c67dc69b0712c972a3e9c5805a0e4cf2892cbbc9f07ce09bcf2a8f079e00caa = $this->env->getExtension("native_profiler");
        $__internal_0c67dc69b0712c972a3e9c5805a0e4cf2892cbbc9f07ce09bcf2a8f079e00caa->enter($__internal_0c67dc69b0712c972a3e9c5805a0e4cf2892cbbc9f07ce09bcf2a8f079e00caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c67dc69b0712c972a3e9c5805a0e4cf2892cbbc9f07ce09bcf2a8f079e00caa->leave($__internal_0c67dc69b0712c972a3e9c5805a0e4cf2892cbbc9f07ce09bcf2a8f079e00caa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0b76326594f4a48155976205e847499b1755a3b9ab24d49b6fabaddf27b0e4f = $this->env->getExtension("native_profiler");
        $__internal_d0b76326594f4a48155976205e847499b1755a3b9ab24d49b6fabaddf27b0e4f->enter($__internal_d0b76326594f4a48155976205e847499b1755a3b9ab24d49b6fabaddf27b0e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d0b76326594f4a48155976205e847499b1755a3b9ab24d49b6fabaddf27b0e4f->leave($__internal_d0b76326594f4a48155976205e847499b1755a3b9ab24d49b6fabaddf27b0e4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e6e77d25fd8172399e31d76193f2d15a2e1439dd7030918954a643c2c268f8 = $this->env->getExtension("native_profiler");
        $__internal_b4e6e77d25fd8172399e31d76193f2d15a2e1439dd7030918954a643c2c268f8->enter($__internal_b4e6e77d25fd8172399e31d76193f2d15a2e1439dd7030918954a643c2c268f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4e6e77d25fd8172399e31d76193f2d15a2e1439dd7030918954a643c2c268f8->leave($__internal_b4e6e77d25fd8172399e31d76193f2d15a2e1439dd7030918954a643c2c268f8_prof);

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
