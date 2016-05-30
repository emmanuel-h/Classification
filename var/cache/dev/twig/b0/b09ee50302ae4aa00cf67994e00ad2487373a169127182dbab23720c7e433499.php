<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fec08cb7f2492f61701f5f44a0fe63c22129cf4c9bb4be299dc063dce878ec5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4dee1b664b24b1a45a36e4a9e753ab0148eae80c8a8ef6a2dd9d9856c29df6bc = $this->env->getExtension("native_profiler");
        $__internal_4dee1b664b24b1a45a36e4a9e753ab0148eae80c8a8ef6a2dd9d9856c29df6bc->enter($__internal_4dee1b664b24b1a45a36e4a9e753ab0148eae80c8a8ef6a2dd9d9856c29df6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dee1b664b24b1a45a36e4a9e753ab0148eae80c8a8ef6a2dd9d9856c29df6bc->leave($__internal_4dee1b664b24b1a45a36e4a9e753ab0148eae80c8a8ef6a2dd9d9856c29df6bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8088311aae91b8b2409460556550491ed4b0abb06591316b66638a69f2374a26 = $this->env->getExtension("native_profiler");
        $__internal_8088311aae91b8b2409460556550491ed4b0abb06591316b66638a69f2374a26->enter($__internal_8088311aae91b8b2409460556550491ed4b0abb06591316b66638a69f2374a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8088311aae91b8b2409460556550491ed4b0abb06591316b66638a69f2374a26->leave($__internal_8088311aae91b8b2409460556550491ed4b0abb06591316b66638a69f2374a26_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dda66f56c159a7b990d586f6374489dde494ce2c4fd7e28cb9a7c1ed2b40ad8a = $this->env->getExtension("native_profiler");
        $__internal_dda66f56c159a7b990d586f6374489dde494ce2c4fd7e28cb9a7c1ed2b40ad8a->enter($__internal_dda66f56c159a7b990d586f6374489dde494ce2c4fd7e28cb9a7c1ed2b40ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dda66f56c159a7b990d586f6374489dde494ce2c4fd7e28cb9a7c1ed2b40ad8a->leave($__internal_dda66f56c159a7b990d586f6374489dde494ce2c4fd7e28cb9a7c1ed2b40ad8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a69c50802f143208dbe31298e2b9217fe1dd390f8388b025c9ee5f9c683b8a6 = $this->env->getExtension("native_profiler");
        $__internal_1a69c50802f143208dbe31298e2b9217fe1dd390f8388b025c9ee5f9c683b8a6->enter($__internal_1a69c50802f143208dbe31298e2b9217fe1dd390f8388b025c9ee5f9c683b8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a69c50802f143208dbe31298e2b9217fe1dd390f8388b025c9ee5f9c683b8a6->leave($__internal_1a69c50802f143208dbe31298e2b9217fe1dd390f8388b025c9ee5f9c683b8a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
