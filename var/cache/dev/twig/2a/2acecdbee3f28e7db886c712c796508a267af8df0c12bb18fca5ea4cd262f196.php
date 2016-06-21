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
        $__internal_24e6645daa76e2440a0478b63c04dc47e11235b3427e81e36fbcc545e4bca2a0 = $this->env->getExtension("native_profiler");
        $__internal_24e6645daa76e2440a0478b63c04dc47e11235b3427e81e36fbcc545e4bca2a0->enter($__internal_24e6645daa76e2440a0478b63c04dc47e11235b3427e81e36fbcc545e4bca2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e6645daa76e2440a0478b63c04dc47e11235b3427e81e36fbcc545e4bca2a0->leave($__internal_24e6645daa76e2440a0478b63c04dc47e11235b3427e81e36fbcc545e4bca2a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c28232fafe4603f8883d40b439dda6e54a3c16037f266baa0a2613763f3897b4 = $this->env->getExtension("native_profiler");
        $__internal_c28232fafe4603f8883d40b439dda6e54a3c16037f266baa0a2613763f3897b4->enter($__internal_c28232fafe4603f8883d40b439dda6e54a3c16037f266baa0a2613763f3897b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c28232fafe4603f8883d40b439dda6e54a3c16037f266baa0a2613763f3897b4->leave($__internal_c28232fafe4603f8883d40b439dda6e54a3c16037f266baa0a2613763f3897b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf5fac0ef95f2c65fe0b46bdec20f746a0b7b9ab72cbf7dd8de07143b64fb614 = $this->env->getExtension("native_profiler");
        $__internal_bf5fac0ef95f2c65fe0b46bdec20f746a0b7b9ab72cbf7dd8de07143b64fb614->enter($__internal_bf5fac0ef95f2c65fe0b46bdec20f746a0b7b9ab72cbf7dd8de07143b64fb614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf5fac0ef95f2c65fe0b46bdec20f746a0b7b9ab72cbf7dd8de07143b64fb614->leave($__internal_bf5fac0ef95f2c65fe0b46bdec20f746a0b7b9ab72cbf7dd8de07143b64fb614_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd48c98db60981075cf13924d693b9e61e0ae23af9184c01fd95ab8ffca56a58 = $this->env->getExtension("native_profiler");
        $__internal_cd48c98db60981075cf13924d693b9e61e0ae23af9184c01fd95ab8ffca56a58->enter($__internal_cd48c98db60981075cf13924d693b9e61e0ae23af9184c01fd95ab8ffca56a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd48c98db60981075cf13924d693b9e61e0ae23af9184c01fd95ab8ffca56a58->leave($__internal_cd48c98db60981075cf13924d693b9e61e0ae23af9184c01fd95ab8ffca56a58_prof);

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
