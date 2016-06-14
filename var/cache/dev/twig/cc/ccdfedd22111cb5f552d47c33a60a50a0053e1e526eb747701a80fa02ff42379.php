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
        $__internal_2ac6c374d485f3b35fffc05603b46abd248dacc0584e8f9ec45525ee7fe25705 = $this->env->getExtension("native_profiler");
        $__internal_2ac6c374d485f3b35fffc05603b46abd248dacc0584e8f9ec45525ee7fe25705->enter($__internal_2ac6c374d485f3b35fffc05603b46abd248dacc0584e8f9ec45525ee7fe25705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ac6c374d485f3b35fffc05603b46abd248dacc0584e8f9ec45525ee7fe25705->leave($__internal_2ac6c374d485f3b35fffc05603b46abd248dacc0584e8f9ec45525ee7fe25705_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e94946fb4378f7db2a9916433132c99701de85c0f959bb160c3cbcaa63ba05f4 = $this->env->getExtension("native_profiler");
        $__internal_e94946fb4378f7db2a9916433132c99701de85c0f959bb160c3cbcaa63ba05f4->enter($__internal_e94946fb4378f7db2a9916433132c99701de85c0f959bb160c3cbcaa63ba05f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e94946fb4378f7db2a9916433132c99701de85c0f959bb160c3cbcaa63ba05f4->leave($__internal_e94946fb4378f7db2a9916433132c99701de85c0f959bb160c3cbcaa63ba05f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c9eaa3ab92f22efd66146c089b120f7dba1fe0e5ad5152ec2a6d1831516623e = $this->env->getExtension("native_profiler");
        $__internal_2c9eaa3ab92f22efd66146c089b120f7dba1fe0e5ad5152ec2a6d1831516623e->enter($__internal_2c9eaa3ab92f22efd66146c089b120f7dba1fe0e5ad5152ec2a6d1831516623e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c9eaa3ab92f22efd66146c089b120f7dba1fe0e5ad5152ec2a6d1831516623e->leave($__internal_2c9eaa3ab92f22efd66146c089b120f7dba1fe0e5ad5152ec2a6d1831516623e_prof);

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
