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
        $__internal_b28576464b5eb412dc53fb8347d05456d8213a53303abb232da70605f56e7760 = $this->env->getExtension("native_profiler");
        $__internal_b28576464b5eb412dc53fb8347d05456d8213a53303abb232da70605f56e7760->enter($__internal_b28576464b5eb412dc53fb8347d05456d8213a53303abb232da70605f56e7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b28576464b5eb412dc53fb8347d05456d8213a53303abb232da70605f56e7760->leave($__internal_b28576464b5eb412dc53fb8347d05456d8213a53303abb232da70605f56e7760_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4bdd959790d10f0a0ad18d7980ef02deacb542452045b4e5b34e5f1317e7181d = $this->env->getExtension("native_profiler");
        $__internal_4bdd959790d10f0a0ad18d7980ef02deacb542452045b4e5b34e5f1317e7181d->enter($__internal_4bdd959790d10f0a0ad18d7980ef02deacb542452045b4e5b34e5f1317e7181d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4bdd959790d10f0a0ad18d7980ef02deacb542452045b4e5b34e5f1317e7181d->leave($__internal_4bdd959790d10f0a0ad18d7980ef02deacb542452045b4e5b34e5f1317e7181d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a443f28aaa8b6e026f734c2bff7353726de52a588687698f9cefd73310ce0478 = $this->env->getExtension("native_profiler");
        $__internal_a443f28aaa8b6e026f734c2bff7353726de52a588687698f9cefd73310ce0478->enter($__internal_a443f28aaa8b6e026f734c2bff7353726de52a588687698f9cefd73310ce0478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a443f28aaa8b6e026f734c2bff7353726de52a588687698f9cefd73310ce0478->leave($__internal_a443f28aaa8b6e026f734c2bff7353726de52a588687698f9cefd73310ce0478_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e731bd92cf979f7705aaf82cb4b9bfb5291a64380b674fb7ff1b66975f83b4bd = $this->env->getExtension("native_profiler");
        $__internal_e731bd92cf979f7705aaf82cb4b9bfb5291a64380b674fb7ff1b66975f83b4bd->enter($__internal_e731bd92cf979f7705aaf82cb4b9bfb5291a64380b674fb7ff1b66975f83b4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e731bd92cf979f7705aaf82cb4b9bfb5291a64380b674fb7ff1b66975f83b4bd->leave($__internal_e731bd92cf979f7705aaf82cb4b9bfb5291a64380b674fb7ff1b66975f83b4bd_prof);

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
