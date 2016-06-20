<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_44ac7d7b5a3b0a3e43ca34f9692b87d27503af81fd9b8871069918c0e5c830f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_473ca0f1d6559a4525d097b88c087f020b70a2e9109509e522eb81061d21b25a = $this->env->getExtension("native_profiler");
        $__internal_473ca0f1d6559a4525d097b88c087f020b70a2e9109509e522eb81061d21b25a->enter($__internal_473ca0f1d6559a4525d097b88c087f020b70a2e9109509e522eb81061d21b25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_473ca0f1d6559a4525d097b88c087f020b70a2e9109509e522eb81061d21b25a->leave($__internal_473ca0f1d6559a4525d097b88c087f020b70a2e9109509e522eb81061d21b25a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d3b8716276330453f72c5370f6ddfa847ea87cece63fa1a021fe8122db664cf = $this->env->getExtension("native_profiler");
        $__internal_2d3b8716276330453f72c5370f6ddfa847ea87cece63fa1a021fe8122db664cf->enter($__internal_2d3b8716276330453f72c5370f6ddfa847ea87cece63fa1a021fe8122db664cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2d3b8716276330453f72c5370f6ddfa847ea87cece63fa1a021fe8122db664cf->leave($__internal_2d3b8716276330453f72c5370f6ddfa847ea87cece63fa1a021fe8122db664cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6508d5c96a7ae8b77a71225926756c23113c994dd91b875df67bb816943a039 = $this->env->getExtension("native_profiler");
        $__internal_c6508d5c96a7ae8b77a71225926756c23113c994dd91b875df67bb816943a039->enter($__internal_c6508d5c96a7ae8b77a71225926756c23113c994dd91b875df67bb816943a039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c6508d5c96a7ae8b77a71225926756c23113c994dd91b875df67bb816943a039->leave($__internal_c6508d5c96a7ae8b77a71225926756c23113c994dd91b875df67bb816943a039_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c05472da1f6caee27d6a52501fe45ed2c164d62087ac5ace8156af17cd9c37d1 = $this->env->getExtension("native_profiler");
        $__internal_c05472da1f6caee27d6a52501fe45ed2c164d62087ac5ace8156af17cd9c37d1->enter($__internal_c05472da1f6caee27d6a52501fe45ed2c164d62087ac5ace8156af17cd9c37d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c05472da1f6caee27d6a52501fe45ed2c164d62087ac5ace8156af17cd9c37d1->leave($__internal_c05472da1f6caee27d6a52501fe45ed2c164d62087ac5ace8156af17cd9c37d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
