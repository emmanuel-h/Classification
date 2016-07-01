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
        $__internal_4d41dbbb07059d24f0218d1608b1c94e51bcd9d6edb7412b02bb30eb9004a2b7 = $this->env->getExtension("native_profiler");
        $__internal_4d41dbbb07059d24f0218d1608b1c94e51bcd9d6edb7412b02bb30eb9004a2b7->enter($__internal_4d41dbbb07059d24f0218d1608b1c94e51bcd9d6edb7412b02bb30eb9004a2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d41dbbb07059d24f0218d1608b1c94e51bcd9d6edb7412b02bb30eb9004a2b7->leave($__internal_4d41dbbb07059d24f0218d1608b1c94e51bcd9d6edb7412b02bb30eb9004a2b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b12daa07d91432ee0995fd926c0f39e19e7eb036732881e26ff58ef20ee79a16 = $this->env->getExtension("native_profiler");
        $__internal_b12daa07d91432ee0995fd926c0f39e19e7eb036732881e26ff58ef20ee79a16->enter($__internal_b12daa07d91432ee0995fd926c0f39e19e7eb036732881e26ff58ef20ee79a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b12daa07d91432ee0995fd926c0f39e19e7eb036732881e26ff58ef20ee79a16->leave($__internal_b12daa07d91432ee0995fd926c0f39e19e7eb036732881e26ff58ef20ee79a16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a31317b7e4bd1e5d8219b1843dc651edf3c87fa0e24023ee4bd2140974f78740 = $this->env->getExtension("native_profiler");
        $__internal_a31317b7e4bd1e5d8219b1843dc651edf3c87fa0e24023ee4bd2140974f78740->enter($__internal_a31317b7e4bd1e5d8219b1843dc651edf3c87fa0e24023ee4bd2140974f78740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a31317b7e4bd1e5d8219b1843dc651edf3c87fa0e24023ee4bd2140974f78740->leave($__internal_a31317b7e4bd1e5d8219b1843dc651edf3c87fa0e24023ee4bd2140974f78740_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e11c0e70d51078a941879b520a82aa390b8fc5b832236a7a228af45166d52c7 = $this->env->getExtension("native_profiler");
        $__internal_3e11c0e70d51078a941879b520a82aa390b8fc5b832236a7a228af45166d52c7->enter($__internal_3e11c0e70d51078a941879b520a82aa390b8fc5b832236a7a228af45166d52c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e11c0e70d51078a941879b520a82aa390b8fc5b832236a7a228af45166d52c7->leave($__internal_3e11c0e70d51078a941879b520a82aa390b8fc5b832236a7a228af45166d52c7_prof);

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
