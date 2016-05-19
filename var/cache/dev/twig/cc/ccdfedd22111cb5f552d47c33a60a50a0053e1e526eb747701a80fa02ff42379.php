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
        $__internal_7d4349e3878734abe7d8a44ab84aaf7949f385e1dba42cbe22dcab721d427960 = $this->env->getExtension("native_profiler");
        $__internal_7d4349e3878734abe7d8a44ab84aaf7949f385e1dba42cbe22dcab721d427960->enter($__internal_7d4349e3878734abe7d8a44ab84aaf7949f385e1dba42cbe22dcab721d427960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4349e3878734abe7d8a44ab84aaf7949f385e1dba42cbe22dcab721d427960->leave($__internal_7d4349e3878734abe7d8a44ab84aaf7949f385e1dba42cbe22dcab721d427960_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccba248d8536e34ce63f725df0f378d9fc46f3deb6fbf2c8642cae045e81f33c = $this->env->getExtension("native_profiler");
        $__internal_ccba248d8536e34ce63f725df0f378d9fc46f3deb6fbf2c8642cae045e81f33c->enter($__internal_ccba248d8536e34ce63f725df0f378d9fc46f3deb6fbf2c8642cae045e81f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ccba248d8536e34ce63f725df0f378d9fc46f3deb6fbf2c8642cae045e81f33c->leave($__internal_ccba248d8536e34ce63f725df0f378d9fc46f3deb6fbf2c8642cae045e81f33c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b702b237b1f8d5f3902dcd0602642384ec13ece030973750d0d4bfc25ad03747 = $this->env->getExtension("native_profiler");
        $__internal_b702b237b1f8d5f3902dcd0602642384ec13ece030973750d0d4bfc25ad03747->enter($__internal_b702b237b1f8d5f3902dcd0602642384ec13ece030973750d0d4bfc25ad03747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b702b237b1f8d5f3902dcd0602642384ec13ece030973750d0d4bfc25ad03747->leave($__internal_b702b237b1f8d5f3902dcd0602642384ec13ece030973750d0d4bfc25ad03747_prof);

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
