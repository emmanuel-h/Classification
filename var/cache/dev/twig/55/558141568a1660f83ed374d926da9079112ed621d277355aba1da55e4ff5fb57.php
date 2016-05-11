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
        $__internal_1acd3575c237c0970be6a677d822dd2127ec1b92fbba307c6e6129afd95a6e36 = $this->env->getExtension("native_profiler");
        $__internal_1acd3575c237c0970be6a677d822dd2127ec1b92fbba307c6e6129afd95a6e36->enter($__internal_1acd3575c237c0970be6a677d822dd2127ec1b92fbba307c6e6129afd95a6e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1acd3575c237c0970be6a677d822dd2127ec1b92fbba307c6e6129afd95a6e36->leave($__internal_1acd3575c237c0970be6a677d822dd2127ec1b92fbba307c6e6129afd95a6e36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1df50ab3711de9b5b7f889961b4bdaba1bc4c49e1338427b943cf1ab7af808ba = $this->env->getExtension("native_profiler");
        $__internal_1df50ab3711de9b5b7f889961b4bdaba1bc4c49e1338427b943cf1ab7af808ba->enter($__internal_1df50ab3711de9b5b7f889961b4bdaba1bc4c49e1338427b943cf1ab7af808ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1df50ab3711de9b5b7f889961b4bdaba1bc4c49e1338427b943cf1ab7af808ba->leave($__internal_1df50ab3711de9b5b7f889961b4bdaba1bc4c49e1338427b943cf1ab7af808ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a5b664f105d391dd7b5ff5307218629e81600031891133e23f8aae83a9abba8 = $this->env->getExtension("native_profiler");
        $__internal_8a5b664f105d391dd7b5ff5307218629e81600031891133e23f8aae83a9abba8->enter($__internal_8a5b664f105d391dd7b5ff5307218629e81600031891133e23f8aae83a9abba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8a5b664f105d391dd7b5ff5307218629e81600031891133e23f8aae83a9abba8->leave($__internal_8a5b664f105d391dd7b5ff5307218629e81600031891133e23f8aae83a9abba8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ab7f7518b7d0f6f4d98c60099fca848215059796a3aa6c84330a9e4ba35969a = $this->env->getExtension("native_profiler");
        $__internal_1ab7f7518b7d0f6f4d98c60099fca848215059796a3aa6c84330a9e4ba35969a->enter($__internal_1ab7f7518b7d0f6f4d98c60099fca848215059796a3aa6c84330a9e4ba35969a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1ab7f7518b7d0f6f4d98c60099fca848215059796a3aa6c84330a9e4ba35969a->leave($__internal_1ab7f7518b7d0f6f4d98c60099fca848215059796a3aa6c84330a9e4ba35969a_prof);

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
