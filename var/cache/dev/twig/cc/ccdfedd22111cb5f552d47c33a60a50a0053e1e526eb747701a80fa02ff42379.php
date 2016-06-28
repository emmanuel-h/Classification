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
        $__internal_25634c572d151a6e32defdf60eed85445bcec94c39e34cf08f910f2ce6b304a4 = $this->env->getExtension("native_profiler");
        $__internal_25634c572d151a6e32defdf60eed85445bcec94c39e34cf08f910f2ce6b304a4->enter($__internal_25634c572d151a6e32defdf60eed85445bcec94c39e34cf08f910f2ce6b304a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25634c572d151a6e32defdf60eed85445bcec94c39e34cf08f910f2ce6b304a4->leave($__internal_25634c572d151a6e32defdf60eed85445bcec94c39e34cf08f910f2ce6b304a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_350410f5bbf000bfec083a2fc197195efcf071b8873bfc8866e3bf4e8365652d = $this->env->getExtension("native_profiler");
        $__internal_350410f5bbf000bfec083a2fc197195efcf071b8873bfc8866e3bf4e8365652d->enter($__internal_350410f5bbf000bfec083a2fc197195efcf071b8873bfc8866e3bf4e8365652d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_350410f5bbf000bfec083a2fc197195efcf071b8873bfc8866e3bf4e8365652d->leave($__internal_350410f5bbf000bfec083a2fc197195efcf071b8873bfc8866e3bf4e8365652d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4840826cf81dcec049ff8b4e2462269fb40735eb6b60b38704e0619dfbd18a44 = $this->env->getExtension("native_profiler");
        $__internal_4840826cf81dcec049ff8b4e2462269fb40735eb6b60b38704e0619dfbd18a44->enter($__internal_4840826cf81dcec049ff8b4e2462269fb40735eb6b60b38704e0619dfbd18a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4840826cf81dcec049ff8b4e2462269fb40735eb6b60b38704e0619dfbd18a44->leave($__internal_4840826cf81dcec049ff8b4e2462269fb40735eb6b60b38704e0619dfbd18a44_prof);

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
