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
        $__internal_2a54dfdf2e02eece059b022e0b433766606d525457a5032da8b66016a5807837 = $this->env->getExtension("native_profiler");
        $__internal_2a54dfdf2e02eece059b022e0b433766606d525457a5032da8b66016a5807837->enter($__internal_2a54dfdf2e02eece059b022e0b433766606d525457a5032da8b66016a5807837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a54dfdf2e02eece059b022e0b433766606d525457a5032da8b66016a5807837->leave($__internal_2a54dfdf2e02eece059b022e0b433766606d525457a5032da8b66016a5807837_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e26edb8ff55ffa45938624956e665174617fc27930f30a2305d7940f0eb5f782 = $this->env->getExtension("native_profiler");
        $__internal_e26edb8ff55ffa45938624956e665174617fc27930f30a2305d7940f0eb5f782->enter($__internal_e26edb8ff55ffa45938624956e665174617fc27930f30a2305d7940f0eb5f782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e26edb8ff55ffa45938624956e665174617fc27930f30a2305d7940f0eb5f782->leave($__internal_e26edb8ff55ffa45938624956e665174617fc27930f30a2305d7940f0eb5f782_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f3af0616cc07e67d5465b387804e5bdaba433bf40f8f8d36c72bd27cd4bda21 = $this->env->getExtension("native_profiler");
        $__internal_8f3af0616cc07e67d5465b387804e5bdaba433bf40f8f8d36c72bd27cd4bda21->enter($__internal_8f3af0616cc07e67d5465b387804e5bdaba433bf40f8f8d36c72bd27cd4bda21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f3af0616cc07e67d5465b387804e5bdaba433bf40f8f8d36c72bd27cd4bda21->leave($__internal_8f3af0616cc07e67d5465b387804e5bdaba433bf40f8f8d36c72bd27cd4bda21_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91562bb2c0c51ea0476018a6ba270c45f307c9e6e558be5b7f8797f32e768e54 = $this->env->getExtension("native_profiler");
        $__internal_91562bb2c0c51ea0476018a6ba270c45f307c9e6e558be5b7f8797f32e768e54->enter($__internal_91562bb2c0c51ea0476018a6ba270c45f307c9e6e558be5b7f8797f32e768e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91562bb2c0c51ea0476018a6ba270c45f307c9e6e558be5b7f8797f32e768e54->leave($__internal_91562bb2c0c51ea0476018a6ba270c45f307c9e6e558be5b7f8797f32e768e54_prof);

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
