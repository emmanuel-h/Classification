<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9ded6fb4cb93a3daaf95fb4b9a76ecf5e3c4fe8faa01743c525abdca1901c73f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ba6c48b694a2fc134b5d9e77ec9dc0a919984100994ae95b37567b2390e9f840 = $this->env->getExtension("native_profiler");
        $__internal_ba6c48b694a2fc134b5d9e77ec9dc0a919984100994ae95b37567b2390e9f840->enter($__internal_ba6c48b694a2fc134b5d9e77ec9dc0a919984100994ae95b37567b2390e9f840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6c48b694a2fc134b5d9e77ec9dc0a919984100994ae95b37567b2390e9f840->leave($__internal_ba6c48b694a2fc134b5d9e77ec9dc0a919984100994ae95b37567b2390e9f840_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f298a6974db69972fb0f8d62c4a9e741bf5d03c2bc098816f31698843374baf0 = $this->env->getExtension("native_profiler");
        $__internal_f298a6974db69972fb0f8d62c4a9e741bf5d03c2bc098816f31698843374baf0->enter($__internal_f298a6974db69972fb0f8d62c4a9e741bf5d03c2bc098816f31698843374baf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f298a6974db69972fb0f8d62c4a9e741bf5d03c2bc098816f31698843374baf0->leave($__internal_f298a6974db69972fb0f8d62c4a9e741bf5d03c2bc098816f31698843374baf0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c25a44913d451c43121598b4e4d438cc395f0d6654bcfa534afaba193a08e696 = $this->env->getExtension("native_profiler");
        $__internal_c25a44913d451c43121598b4e4d438cc395f0d6654bcfa534afaba193a08e696->enter($__internal_c25a44913d451c43121598b4e4d438cc395f0d6654bcfa534afaba193a08e696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c25a44913d451c43121598b4e4d438cc395f0d6654bcfa534afaba193a08e696->leave($__internal_c25a44913d451c43121598b4e4d438cc395f0d6654bcfa534afaba193a08e696_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11cd96f1c662197c255e78d8a7fcf8957ecf55df7f217bdf61c839f0f5cd3051 = $this->env->getExtension("native_profiler");
        $__internal_11cd96f1c662197c255e78d8a7fcf8957ecf55df7f217bdf61c839f0f5cd3051->enter($__internal_11cd96f1c662197c255e78d8a7fcf8957ecf55df7f217bdf61c839f0f5cd3051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_11cd96f1c662197c255e78d8a7fcf8957ecf55df7f217bdf61c839f0f5cd3051->leave($__internal_11cd96f1c662197c255e78d8a7fcf8957ecf55df7f217bdf61c839f0f5cd3051_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
