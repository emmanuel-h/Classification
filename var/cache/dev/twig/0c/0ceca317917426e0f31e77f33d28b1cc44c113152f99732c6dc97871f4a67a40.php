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
        $__internal_2a13dbf774f59267dc3a47c187b76d2acad7125c5f0ad8d9d6ddff3a92211af2 = $this->env->getExtension("native_profiler");
        $__internal_2a13dbf774f59267dc3a47c187b76d2acad7125c5f0ad8d9d6ddff3a92211af2->enter($__internal_2a13dbf774f59267dc3a47c187b76d2acad7125c5f0ad8d9d6ddff3a92211af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a13dbf774f59267dc3a47c187b76d2acad7125c5f0ad8d9d6ddff3a92211af2->leave($__internal_2a13dbf774f59267dc3a47c187b76d2acad7125c5f0ad8d9d6ddff3a92211af2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77d38243fdb23fc9b393f2185e598bd3374353e84e621d311a06de0c0f944408 = $this->env->getExtension("native_profiler");
        $__internal_77d38243fdb23fc9b393f2185e598bd3374353e84e621d311a06de0c0f944408->enter($__internal_77d38243fdb23fc9b393f2185e598bd3374353e84e621d311a06de0c0f944408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77d38243fdb23fc9b393f2185e598bd3374353e84e621d311a06de0c0f944408->leave($__internal_77d38243fdb23fc9b393f2185e598bd3374353e84e621d311a06de0c0f944408_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a74f4de5e7e4118ca9e197daa5b0e996b58e2f4ad00fddeca81e903737a91674 = $this->env->getExtension("native_profiler");
        $__internal_a74f4de5e7e4118ca9e197daa5b0e996b58e2f4ad00fddeca81e903737a91674->enter($__internal_a74f4de5e7e4118ca9e197daa5b0e996b58e2f4ad00fddeca81e903737a91674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a74f4de5e7e4118ca9e197daa5b0e996b58e2f4ad00fddeca81e903737a91674->leave($__internal_a74f4de5e7e4118ca9e197daa5b0e996b58e2f4ad00fddeca81e903737a91674_prof);

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
