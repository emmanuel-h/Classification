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
        $__internal_cdeeb432b2ec87a2737eef3efda8df18f111dd32cab619c0375d199b813ae474 = $this->env->getExtension("native_profiler");
        $__internal_cdeeb432b2ec87a2737eef3efda8df18f111dd32cab619c0375d199b813ae474->enter($__internal_cdeeb432b2ec87a2737eef3efda8df18f111dd32cab619c0375d199b813ae474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdeeb432b2ec87a2737eef3efda8df18f111dd32cab619c0375d199b813ae474->leave($__internal_cdeeb432b2ec87a2737eef3efda8df18f111dd32cab619c0375d199b813ae474_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0e6380a15565b2b0ee91911c5cad47f257a9817786c8890dcef07627f7641bc = $this->env->getExtension("native_profiler");
        $__internal_c0e6380a15565b2b0ee91911c5cad47f257a9817786c8890dcef07627f7641bc->enter($__internal_c0e6380a15565b2b0ee91911c5cad47f257a9817786c8890dcef07627f7641bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c0e6380a15565b2b0ee91911c5cad47f257a9817786c8890dcef07627f7641bc->leave($__internal_c0e6380a15565b2b0ee91911c5cad47f257a9817786c8890dcef07627f7641bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0665d4b4763d248d2a0481461220cbac515521c31efbcf3343ef28a05811cee4 = $this->env->getExtension("native_profiler");
        $__internal_0665d4b4763d248d2a0481461220cbac515521c31efbcf3343ef28a05811cee4->enter($__internal_0665d4b4763d248d2a0481461220cbac515521c31efbcf3343ef28a05811cee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0665d4b4763d248d2a0481461220cbac515521c31efbcf3343ef28a05811cee4->leave($__internal_0665d4b4763d248d2a0481461220cbac515521c31efbcf3343ef28a05811cee4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d34d05640a31a39eb74dcd03c49c8eb05e32feb36f1ac853d6baf1ab88bcfea = $this->env->getExtension("native_profiler");
        $__internal_9d34d05640a31a39eb74dcd03c49c8eb05e32feb36f1ac853d6baf1ab88bcfea->enter($__internal_9d34d05640a31a39eb74dcd03c49c8eb05e32feb36f1ac853d6baf1ab88bcfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d34d05640a31a39eb74dcd03c49c8eb05e32feb36f1ac853d6baf1ab88bcfea->leave($__internal_9d34d05640a31a39eb74dcd03c49c8eb05e32feb36f1ac853d6baf1ab88bcfea_prof);

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
