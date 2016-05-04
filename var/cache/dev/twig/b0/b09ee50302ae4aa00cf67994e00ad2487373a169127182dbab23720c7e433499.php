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
        $__internal_fc28231ab8c469925c7099eaf4b60edfd84892da8762038f624b15cc6cbba52a = $this->env->getExtension("native_profiler");
        $__internal_fc28231ab8c469925c7099eaf4b60edfd84892da8762038f624b15cc6cbba52a->enter($__internal_fc28231ab8c469925c7099eaf4b60edfd84892da8762038f624b15cc6cbba52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc28231ab8c469925c7099eaf4b60edfd84892da8762038f624b15cc6cbba52a->leave($__internal_fc28231ab8c469925c7099eaf4b60edfd84892da8762038f624b15cc6cbba52a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfc2d337a98479890f3e9b1db72d4b31dbdd767b114ae7da0d438c7c6974c6fe = $this->env->getExtension("native_profiler");
        $__internal_cfc2d337a98479890f3e9b1db72d4b31dbdd767b114ae7da0d438c7c6974c6fe->enter($__internal_cfc2d337a98479890f3e9b1db72d4b31dbdd767b114ae7da0d438c7c6974c6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfc2d337a98479890f3e9b1db72d4b31dbdd767b114ae7da0d438c7c6974c6fe->leave($__internal_cfc2d337a98479890f3e9b1db72d4b31dbdd767b114ae7da0d438c7c6974c6fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f5438ea1121321439980d9114cbf5cc542686888b547b4e4b7f1a2f2de65792 = $this->env->getExtension("native_profiler");
        $__internal_5f5438ea1121321439980d9114cbf5cc542686888b547b4e4b7f1a2f2de65792->enter($__internal_5f5438ea1121321439980d9114cbf5cc542686888b547b4e4b7f1a2f2de65792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f5438ea1121321439980d9114cbf5cc542686888b547b4e4b7f1a2f2de65792->leave($__internal_5f5438ea1121321439980d9114cbf5cc542686888b547b4e4b7f1a2f2de65792_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_388e0e772a70357e79bd2f56fa112495134ce9cbd62cde28477caced58d86429 = $this->env->getExtension("native_profiler");
        $__internal_388e0e772a70357e79bd2f56fa112495134ce9cbd62cde28477caced58d86429->enter($__internal_388e0e772a70357e79bd2f56fa112495134ce9cbd62cde28477caced58d86429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_388e0e772a70357e79bd2f56fa112495134ce9cbd62cde28477caced58d86429->leave($__internal_388e0e772a70357e79bd2f56fa112495134ce9cbd62cde28477caced58d86429_prof);

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
