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
        $__internal_7c5345fb8b80f9e2fd540df8dd66bcf61ad4776fdeb5624c93739ca827f767e7 = $this->env->getExtension("native_profiler");
        $__internal_7c5345fb8b80f9e2fd540df8dd66bcf61ad4776fdeb5624c93739ca827f767e7->enter($__internal_7c5345fb8b80f9e2fd540df8dd66bcf61ad4776fdeb5624c93739ca827f767e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5345fb8b80f9e2fd540df8dd66bcf61ad4776fdeb5624c93739ca827f767e7->leave($__internal_7c5345fb8b80f9e2fd540df8dd66bcf61ad4776fdeb5624c93739ca827f767e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_769bdc33f696fde25cf8692fc5ac4e34e89b410b182253ba43b55ddd05bc58e4 = $this->env->getExtension("native_profiler");
        $__internal_769bdc33f696fde25cf8692fc5ac4e34e89b410b182253ba43b55ddd05bc58e4->enter($__internal_769bdc33f696fde25cf8692fc5ac4e34e89b410b182253ba43b55ddd05bc58e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_769bdc33f696fde25cf8692fc5ac4e34e89b410b182253ba43b55ddd05bc58e4->leave($__internal_769bdc33f696fde25cf8692fc5ac4e34e89b410b182253ba43b55ddd05bc58e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a42f56df9c0a55496b7c037dc5b330201bbdc610929ae200683e463d90a45d48 = $this->env->getExtension("native_profiler");
        $__internal_a42f56df9c0a55496b7c037dc5b330201bbdc610929ae200683e463d90a45d48->enter($__internal_a42f56df9c0a55496b7c037dc5b330201bbdc610929ae200683e463d90a45d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a42f56df9c0a55496b7c037dc5b330201bbdc610929ae200683e463d90a45d48->leave($__internal_a42f56df9c0a55496b7c037dc5b330201bbdc610929ae200683e463d90a45d48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa2f254bdda06d9eabacc5b5535f2444e5f5bc5f825172125bcad2d08aa3ebcd = $this->env->getExtension("native_profiler");
        $__internal_fa2f254bdda06d9eabacc5b5535f2444e5f5bc5f825172125bcad2d08aa3ebcd->enter($__internal_fa2f254bdda06d9eabacc5b5535f2444e5f5bc5f825172125bcad2d08aa3ebcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa2f254bdda06d9eabacc5b5535f2444e5f5bc5f825172125bcad2d08aa3ebcd->leave($__internal_fa2f254bdda06d9eabacc5b5535f2444e5f5bc5f825172125bcad2d08aa3ebcd_prof);

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
