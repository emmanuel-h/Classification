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
        $__internal_1724b3c3cc180e798e3f139e6c97c464d641fcd8e711bfda5ce603d44898e929 = $this->env->getExtension("native_profiler");
        $__internal_1724b3c3cc180e798e3f139e6c97c464d641fcd8e711bfda5ce603d44898e929->enter($__internal_1724b3c3cc180e798e3f139e6c97c464d641fcd8e711bfda5ce603d44898e929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1724b3c3cc180e798e3f139e6c97c464d641fcd8e711bfda5ce603d44898e929->leave($__internal_1724b3c3cc180e798e3f139e6c97c464d641fcd8e711bfda5ce603d44898e929_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b899a896434716b46c236b898f90167513edeb905c894e722ee681b6a9cf828 = $this->env->getExtension("native_profiler");
        $__internal_3b899a896434716b46c236b898f90167513edeb905c894e722ee681b6a9cf828->enter($__internal_3b899a896434716b46c236b898f90167513edeb905c894e722ee681b6a9cf828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3b899a896434716b46c236b898f90167513edeb905c894e722ee681b6a9cf828->leave($__internal_3b899a896434716b46c236b898f90167513edeb905c894e722ee681b6a9cf828_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c3138c38e53619ec5e0d69294419c484eba1a46c639f5fc7ae4a452f560e8b3 = $this->env->getExtension("native_profiler");
        $__internal_0c3138c38e53619ec5e0d69294419c484eba1a46c639f5fc7ae4a452f560e8b3->enter($__internal_0c3138c38e53619ec5e0d69294419c484eba1a46c639f5fc7ae4a452f560e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c3138c38e53619ec5e0d69294419c484eba1a46c639f5fc7ae4a452f560e8b3->leave($__internal_0c3138c38e53619ec5e0d69294419c484eba1a46c639f5fc7ae4a452f560e8b3_prof);

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
