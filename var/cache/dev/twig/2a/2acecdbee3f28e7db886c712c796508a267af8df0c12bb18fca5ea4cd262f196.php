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
        $__internal_c6906f61b2ad65de56ec17f830d3974486c8a328e25265aa5240bd93a62599db = $this->env->getExtension("native_profiler");
        $__internal_c6906f61b2ad65de56ec17f830d3974486c8a328e25265aa5240bd93a62599db->enter($__internal_c6906f61b2ad65de56ec17f830d3974486c8a328e25265aa5240bd93a62599db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6906f61b2ad65de56ec17f830d3974486c8a328e25265aa5240bd93a62599db->leave($__internal_c6906f61b2ad65de56ec17f830d3974486c8a328e25265aa5240bd93a62599db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d0a9523d63f3acae9d234ad862c1f6f791b18b8d8d0d259d9539a9e67922e32 = $this->env->getExtension("native_profiler");
        $__internal_6d0a9523d63f3acae9d234ad862c1f6f791b18b8d8d0d259d9539a9e67922e32->enter($__internal_6d0a9523d63f3acae9d234ad862c1f6f791b18b8d8d0d259d9539a9e67922e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d0a9523d63f3acae9d234ad862c1f6f791b18b8d8d0d259d9539a9e67922e32->leave($__internal_6d0a9523d63f3acae9d234ad862c1f6f791b18b8d8d0d259d9539a9e67922e32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0fad9c22a199d863f0f1cc3bd1981b521eb3924a28b692e48fe4e89ca1e6898 = $this->env->getExtension("native_profiler");
        $__internal_b0fad9c22a199d863f0f1cc3bd1981b521eb3924a28b692e48fe4e89ca1e6898->enter($__internal_b0fad9c22a199d863f0f1cc3bd1981b521eb3924a28b692e48fe4e89ca1e6898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0fad9c22a199d863f0f1cc3bd1981b521eb3924a28b692e48fe4e89ca1e6898->leave($__internal_b0fad9c22a199d863f0f1cc3bd1981b521eb3924a28b692e48fe4e89ca1e6898_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9d47b772bfdd6efbb7880b9b47e81a9c94dfc1c4f9e0e4ed9d176aa002affb8 = $this->env->getExtension("native_profiler");
        $__internal_e9d47b772bfdd6efbb7880b9b47e81a9c94dfc1c4f9e0e4ed9d176aa002affb8->enter($__internal_e9d47b772bfdd6efbb7880b9b47e81a9c94dfc1c4f9e0e4ed9d176aa002affb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e9d47b772bfdd6efbb7880b9b47e81a9c94dfc1c4f9e0e4ed9d176aa002affb8->leave($__internal_e9d47b772bfdd6efbb7880b9b47e81a9c94dfc1c4f9e0e4ed9d176aa002affb8_prof);

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
