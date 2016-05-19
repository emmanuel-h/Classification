<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_69b233b25f5b352cfa83bc55a9885189ae24383819eebaced76f4f710b5394a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_293ecb686e8ce6a98d5e4b86d66bad132b016d59114ed15cfcefd93c31fea7b7 = $this->env->getExtension("native_profiler");
        $__internal_293ecb686e8ce6a98d5e4b86d66bad132b016d59114ed15cfcefd93c31fea7b7->enter($__internal_293ecb686e8ce6a98d5e4b86d66bad132b016d59114ed15cfcefd93c31fea7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293ecb686e8ce6a98d5e4b86d66bad132b016d59114ed15cfcefd93c31fea7b7->leave($__internal_293ecb686e8ce6a98d5e4b86d66bad132b016d59114ed15cfcefd93c31fea7b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b80c9efab795f0777f29b892d4cadb3ed28da83141efb357358b213fa6425bf = $this->env->getExtension("native_profiler");
        $__internal_7b80c9efab795f0777f29b892d4cadb3ed28da83141efb357358b213fa6425bf->enter($__internal_7b80c9efab795f0777f29b892d4cadb3ed28da83141efb357358b213fa6425bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b80c9efab795f0777f29b892d4cadb3ed28da83141efb357358b213fa6425bf->leave($__internal_7b80c9efab795f0777f29b892d4cadb3ed28da83141efb357358b213fa6425bf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d66405d72fbe286c89ff63dbd659d85abb0f19e234d6a1946ce8ffd4f5a56c0 = $this->env->getExtension("native_profiler");
        $__internal_3d66405d72fbe286c89ff63dbd659d85abb0f19e234d6a1946ce8ffd4f5a56c0->enter($__internal_3d66405d72fbe286c89ff63dbd659d85abb0f19e234d6a1946ce8ffd4f5a56c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3d66405d72fbe286c89ff63dbd659d85abb0f19e234d6a1946ce8ffd4f5a56c0->leave($__internal_3d66405d72fbe286c89ff63dbd659d85abb0f19e234d6a1946ce8ffd4f5a56c0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab73cbb6fdfa0d0fdb8b2280e6281657c9977fdf16b5ff7731a6fdb3ebef5fef = $this->env->getExtension("native_profiler");
        $__internal_ab73cbb6fdfa0d0fdb8b2280e6281657c9977fdf16b5ff7731a6fdb3ebef5fef->enter($__internal_ab73cbb6fdfa0d0fdb8b2280e6281657c9977fdf16b5ff7731a6fdb3ebef5fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ab73cbb6fdfa0d0fdb8b2280e6281657c9977fdf16b5ff7731a6fdb3ebef5fef->leave($__internal_ab73cbb6fdfa0d0fdb8b2280e6281657c9977fdf16b5ff7731a6fdb3ebef5fef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
