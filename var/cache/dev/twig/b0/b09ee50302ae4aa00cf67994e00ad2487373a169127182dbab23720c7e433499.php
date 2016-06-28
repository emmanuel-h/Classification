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
        $__internal_c2268ec5cc314dd29402c39bd0a36511116fbc684baa3a6adc0e6c873e4f95a2 = $this->env->getExtension("native_profiler");
        $__internal_c2268ec5cc314dd29402c39bd0a36511116fbc684baa3a6adc0e6c873e4f95a2->enter($__internal_c2268ec5cc314dd29402c39bd0a36511116fbc684baa3a6adc0e6c873e4f95a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2268ec5cc314dd29402c39bd0a36511116fbc684baa3a6adc0e6c873e4f95a2->leave($__internal_c2268ec5cc314dd29402c39bd0a36511116fbc684baa3a6adc0e6c873e4f95a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a78530d64cf7486e6de1b983666a1fec254adf173f7ee8a5b2e6ae2ce1c099d = $this->env->getExtension("native_profiler");
        $__internal_9a78530d64cf7486e6de1b983666a1fec254adf173f7ee8a5b2e6ae2ce1c099d->enter($__internal_9a78530d64cf7486e6de1b983666a1fec254adf173f7ee8a5b2e6ae2ce1c099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a78530d64cf7486e6de1b983666a1fec254adf173f7ee8a5b2e6ae2ce1c099d->leave($__internal_9a78530d64cf7486e6de1b983666a1fec254adf173f7ee8a5b2e6ae2ce1c099d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_def7304064ec7aba85091b862f1e10575257485c592fe4113b0b05abf4bebfab = $this->env->getExtension("native_profiler");
        $__internal_def7304064ec7aba85091b862f1e10575257485c592fe4113b0b05abf4bebfab->enter($__internal_def7304064ec7aba85091b862f1e10575257485c592fe4113b0b05abf4bebfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_def7304064ec7aba85091b862f1e10575257485c592fe4113b0b05abf4bebfab->leave($__internal_def7304064ec7aba85091b862f1e10575257485c592fe4113b0b05abf4bebfab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9def1b16e8f039f637fca1fe4454d04052cfeb75c9c5b4e5c422e1ca23e1aacf = $this->env->getExtension("native_profiler");
        $__internal_9def1b16e8f039f637fca1fe4454d04052cfeb75c9c5b4e5c422e1ca23e1aacf->enter($__internal_9def1b16e8f039f637fca1fe4454d04052cfeb75c9c5b4e5c422e1ca23e1aacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9def1b16e8f039f637fca1fe4454d04052cfeb75c9c5b4e5c422e1ca23e1aacf->leave($__internal_9def1b16e8f039f637fca1fe4454d04052cfeb75c9c5b4e5c422e1ca23e1aacf_prof);

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
