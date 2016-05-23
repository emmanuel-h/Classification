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
        $__internal_8c602deec56081ef3bd3e5e3ff837086c40fef8be1fdd60cf4acadede517ac41 = $this->env->getExtension("native_profiler");
        $__internal_8c602deec56081ef3bd3e5e3ff837086c40fef8be1fdd60cf4acadede517ac41->enter($__internal_8c602deec56081ef3bd3e5e3ff837086c40fef8be1fdd60cf4acadede517ac41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c602deec56081ef3bd3e5e3ff837086c40fef8be1fdd60cf4acadede517ac41->leave($__internal_8c602deec56081ef3bd3e5e3ff837086c40fef8be1fdd60cf4acadede517ac41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1d6529873e955d7e904746aa7d37e40205eea5507754d8a1cdb18577e8a492c = $this->env->getExtension("native_profiler");
        $__internal_a1d6529873e955d7e904746aa7d37e40205eea5507754d8a1cdb18577e8a492c->enter($__internal_a1d6529873e955d7e904746aa7d37e40205eea5507754d8a1cdb18577e8a492c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a1d6529873e955d7e904746aa7d37e40205eea5507754d8a1cdb18577e8a492c->leave($__internal_a1d6529873e955d7e904746aa7d37e40205eea5507754d8a1cdb18577e8a492c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48c08676eb24f87134c3548600fd7f2beebe1eb62e515382d78c1c4b8cea4e3f = $this->env->getExtension("native_profiler");
        $__internal_48c08676eb24f87134c3548600fd7f2beebe1eb62e515382d78c1c4b8cea4e3f->enter($__internal_48c08676eb24f87134c3548600fd7f2beebe1eb62e515382d78c1c4b8cea4e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_48c08676eb24f87134c3548600fd7f2beebe1eb62e515382d78c1c4b8cea4e3f->leave($__internal_48c08676eb24f87134c3548600fd7f2beebe1eb62e515382d78c1c4b8cea4e3f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b58f7d065f1c01315ab46854b1c5dae695cfef40cf01c834af9ed611bdbb425a = $this->env->getExtension("native_profiler");
        $__internal_b58f7d065f1c01315ab46854b1c5dae695cfef40cf01c834af9ed611bdbb425a->enter($__internal_b58f7d065f1c01315ab46854b1c5dae695cfef40cf01c834af9ed611bdbb425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b58f7d065f1c01315ab46854b1c5dae695cfef40cf01c834af9ed611bdbb425a->leave($__internal_b58f7d065f1c01315ab46854b1c5dae695cfef40cf01c834af9ed611bdbb425a_prof);

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
