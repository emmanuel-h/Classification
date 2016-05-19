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
        $__internal_2d8a6a9a2cd0b28bbc7153f226dbcce2ef267a59d35ee3799273396930fe2916 = $this->env->getExtension("native_profiler");
        $__internal_2d8a6a9a2cd0b28bbc7153f226dbcce2ef267a59d35ee3799273396930fe2916->enter($__internal_2d8a6a9a2cd0b28bbc7153f226dbcce2ef267a59d35ee3799273396930fe2916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8a6a9a2cd0b28bbc7153f226dbcce2ef267a59d35ee3799273396930fe2916->leave($__internal_2d8a6a9a2cd0b28bbc7153f226dbcce2ef267a59d35ee3799273396930fe2916_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_879fcf6fc7650a6bc5597e39e035ba6a8f850f9cc3de63559da12b29458c16a1 = $this->env->getExtension("native_profiler");
        $__internal_879fcf6fc7650a6bc5597e39e035ba6a8f850f9cc3de63559da12b29458c16a1->enter($__internal_879fcf6fc7650a6bc5597e39e035ba6a8f850f9cc3de63559da12b29458c16a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_879fcf6fc7650a6bc5597e39e035ba6a8f850f9cc3de63559da12b29458c16a1->leave($__internal_879fcf6fc7650a6bc5597e39e035ba6a8f850f9cc3de63559da12b29458c16a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccf0b911b2b5a446f66888d5114635947f058872449c20c51f26489d32ed01ce = $this->env->getExtension("native_profiler");
        $__internal_ccf0b911b2b5a446f66888d5114635947f058872449c20c51f26489d32ed01ce->enter($__internal_ccf0b911b2b5a446f66888d5114635947f058872449c20c51f26489d32ed01ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccf0b911b2b5a446f66888d5114635947f058872449c20c51f26489d32ed01ce->leave($__internal_ccf0b911b2b5a446f66888d5114635947f058872449c20c51f26489d32ed01ce_prof);

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
