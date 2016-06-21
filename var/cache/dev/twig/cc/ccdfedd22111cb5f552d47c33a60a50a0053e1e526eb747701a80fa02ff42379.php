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
        $__internal_a99c79e12587ec4a24b4ab22fd1bb56701164a4a1234edfe25c547bccad8adc1 = $this->env->getExtension("native_profiler");
        $__internal_a99c79e12587ec4a24b4ab22fd1bb56701164a4a1234edfe25c547bccad8adc1->enter($__internal_a99c79e12587ec4a24b4ab22fd1bb56701164a4a1234edfe25c547bccad8adc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a99c79e12587ec4a24b4ab22fd1bb56701164a4a1234edfe25c547bccad8adc1->leave($__internal_a99c79e12587ec4a24b4ab22fd1bb56701164a4a1234edfe25c547bccad8adc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24b2530d3fac19e0bf7dbb825e85366fe9796a2494548461ef458ce1182df16f = $this->env->getExtension("native_profiler");
        $__internal_24b2530d3fac19e0bf7dbb825e85366fe9796a2494548461ef458ce1182df16f->enter($__internal_24b2530d3fac19e0bf7dbb825e85366fe9796a2494548461ef458ce1182df16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_24b2530d3fac19e0bf7dbb825e85366fe9796a2494548461ef458ce1182df16f->leave($__internal_24b2530d3fac19e0bf7dbb825e85366fe9796a2494548461ef458ce1182df16f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e2131412161f5e1b3fbf2cd663e85dca5093e961634ad0faa20243d038308ac = $this->env->getExtension("native_profiler");
        $__internal_8e2131412161f5e1b3fbf2cd663e85dca5093e961634ad0faa20243d038308ac->enter($__internal_8e2131412161f5e1b3fbf2cd663e85dca5093e961634ad0faa20243d038308ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e2131412161f5e1b3fbf2cd663e85dca5093e961634ad0faa20243d038308ac->leave($__internal_8e2131412161f5e1b3fbf2cd663e85dca5093e961634ad0faa20243d038308ac_prof);

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
