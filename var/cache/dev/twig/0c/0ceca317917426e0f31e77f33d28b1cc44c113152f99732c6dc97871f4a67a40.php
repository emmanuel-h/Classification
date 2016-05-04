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
        $__internal_6054d7d49dd7c37c264c0926d8d74d42536438aab09ab582255aeb4e52f43955 = $this->env->getExtension("native_profiler");
        $__internal_6054d7d49dd7c37c264c0926d8d74d42536438aab09ab582255aeb4e52f43955->enter($__internal_6054d7d49dd7c37c264c0926d8d74d42536438aab09ab582255aeb4e52f43955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6054d7d49dd7c37c264c0926d8d74d42536438aab09ab582255aeb4e52f43955->leave($__internal_6054d7d49dd7c37c264c0926d8d74d42536438aab09ab582255aeb4e52f43955_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_222d58695a98393c31032fe4b0ae88462ecb7864d5c69ef7044a494e0ac27576 = $this->env->getExtension("native_profiler");
        $__internal_222d58695a98393c31032fe4b0ae88462ecb7864d5c69ef7044a494e0ac27576->enter($__internal_222d58695a98393c31032fe4b0ae88462ecb7864d5c69ef7044a494e0ac27576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_222d58695a98393c31032fe4b0ae88462ecb7864d5c69ef7044a494e0ac27576->leave($__internal_222d58695a98393c31032fe4b0ae88462ecb7864d5c69ef7044a494e0ac27576_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_613a98ce017a89fe1b0ad386ca29c2eb78e03710f32efe50b0889e8a5d9cf61c = $this->env->getExtension("native_profiler");
        $__internal_613a98ce017a89fe1b0ad386ca29c2eb78e03710f32efe50b0889e8a5d9cf61c->enter($__internal_613a98ce017a89fe1b0ad386ca29c2eb78e03710f32efe50b0889e8a5d9cf61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_613a98ce017a89fe1b0ad386ca29c2eb78e03710f32efe50b0889e8a5d9cf61c->leave($__internal_613a98ce017a89fe1b0ad386ca29c2eb78e03710f32efe50b0889e8a5d9cf61c_prof);

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
