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
        $__internal_add74b80fd77f3b01d0aa900e3530643413ed97a68f870cbc6f2af7c88771f43 = $this->env->getExtension("native_profiler");
        $__internal_add74b80fd77f3b01d0aa900e3530643413ed97a68f870cbc6f2af7c88771f43->enter($__internal_add74b80fd77f3b01d0aa900e3530643413ed97a68f870cbc6f2af7c88771f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add74b80fd77f3b01d0aa900e3530643413ed97a68f870cbc6f2af7c88771f43->leave($__internal_add74b80fd77f3b01d0aa900e3530643413ed97a68f870cbc6f2af7c88771f43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_917a46726050778f3bc091ad335fc24c476ebddc706c8be264c7ae0754090cf4 = $this->env->getExtension("native_profiler");
        $__internal_917a46726050778f3bc091ad335fc24c476ebddc706c8be264c7ae0754090cf4->enter($__internal_917a46726050778f3bc091ad335fc24c476ebddc706c8be264c7ae0754090cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_917a46726050778f3bc091ad335fc24c476ebddc706c8be264c7ae0754090cf4->leave($__internal_917a46726050778f3bc091ad335fc24c476ebddc706c8be264c7ae0754090cf4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4c37fe9ed09a8a0b598576d55a873f7835e4dbabc037f1010a6d00e4d4f16ae = $this->env->getExtension("native_profiler");
        $__internal_f4c37fe9ed09a8a0b598576d55a873f7835e4dbabc037f1010a6d00e4d4f16ae->enter($__internal_f4c37fe9ed09a8a0b598576d55a873f7835e4dbabc037f1010a6d00e4d4f16ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f4c37fe9ed09a8a0b598576d55a873f7835e4dbabc037f1010a6d00e4d4f16ae->leave($__internal_f4c37fe9ed09a8a0b598576d55a873f7835e4dbabc037f1010a6d00e4d4f16ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2cfe7c61ec9708740c7052bdf42c067ea3cbd33a056cf42d06612211bb2409e = $this->env->getExtension("native_profiler");
        $__internal_a2cfe7c61ec9708740c7052bdf42c067ea3cbd33a056cf42d06612211bb2409e->enter($__internal_a2cfe7c61ec9708740c7052bdf42c067ea3cbd33a056cf42d06612211bb2409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2cfe7c61ec9708740c7052bdf42c067ea3cbd33a056cf42d06612211bb2409e->leave($__internal_a2cfe7c61ec9708740c7052bdf42c067ea3cbd33a056cf42d06612211bb2409e_prof);

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
