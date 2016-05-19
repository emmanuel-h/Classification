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
        $__internal_3d03e4294687d27f677a0dd6eeabff5420a27823569176aa8aebee3bb6f00749 = $this->env->getExtension("native_profiler");
        $__internal_3d03e4294687d27f677a0dd6eeabff5420a27823569176aa8aebee3bb6f00749->enter($__internal_3d03e4294687d27f677a0dd6eeabff5420a27823569176aa8aebee3bb6f00749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d03e4294687d27f677a0dd6eeabff5420a27823569176aa8aebee3bb6f00749->leave($__internal_3d03e4294687d27f677a0dd6eeabff5420a27823569176aa8aebee3bb6f00749_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea1c1c24d37963029a58eecfb8855fdc905c3051f57ff3ccc04f2a2c105ef3b4 = $this->env->getExtension("native_profiler");
        $__internal_ea1c1c24d37963029a58eecfb8855fdc905c3051f57ff3ccc04f2a2c105ef3b4->enter($__internal_ea1c1c24d37963029a58eecfb8855fdc905c3051f57ff3ccc04f2a2c105ef3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea1c1c24d37963029a58eecfb8855fdc905c3051f57ff3ccc04f2a2c105ef3b4->leave($__internal_ea1c1c24d37963029a58eecfb8855fdc905c3051f57ff3ccc04f2a2c105ef3b4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebe027d0369460951ee1f126308d12c49ccbc5347f699ed3a973285994a6e325 = $this->env->getExtension("native_profiler");
        $__internal_ebe027d0369460951ee1f126308d12c49ccbc5347f699ed3a973285994a6e325->enter($__internal_ebe027d0369460951ee1f126308d12c49ccbc5347f699ed3a973285994a6e325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ebe027d0369460951ee1f126308d12c49ccbc5347f699ed3a973285994a6e325->leave($__internal_ebe027d0369460951ee1f126308d12c49ccbc5347f699ed3a973285994a6e325_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e8c3989f06ddc374c301535e6232490ef71dfb0680cf0c69e646efa30aca2ab = $this->env->getExtension("native_profiler");
        $__internal_8e8c3989f06ddc374c301535e6232490ef71dfb0680cf0c69e646efa30aca2ab->enter($__internal_8e8c3989f06ddc374c301535e6232490ef71dfb0680cf0c69e646efa30aca2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8e8c3989f06ddc374c301535e6232490ef71dfb0680cf0c69e646efa30aca2ab->leave($__internal_8e8c3989f06ddc374c301535e6232490ef71dfb0680cf0c69e646efa30aca2ab_prof);

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
