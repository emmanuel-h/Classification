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
        $__internal_ed686a95162e33a4b8532a5b9530dd7363fc9703248ffb95820befe072a1f628 = $this->env->getExtension("native_profiler");
        $__internal_ed686a95162e33a4b8532a5b9530dd7363fc9703248ffb95820befe072a1f628->enter($__internal_ed686a95162e33a4b8532a5b9530dd7363fc9703248ffb95820befe072a1f628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed686a95162e33a4b8532a5b9530dd7363fc9703248ffb95820befe072a1f628->leave($__internal_ed686a95162e33a4b8532a5b9530dd7363fc9703248ffb95820befe072a1f628_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb05f81d2a7f74fdf432977788ede517f04e771bd56b2391fd2e9b85cc7943c8 = $this->env->getExtension("native_profiler");
        $__internal_fb05f81d2a7f74fdf432977788ede517f04e771bd56b2391fd2e9b85cc7943c8->enter($__internal_fb05f81d2a7f74fdf432977788ede517f04e771bd56b2391fd2e9b85cc7943c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb05f81d2a7f74fdf432977788ede517f04e771bd56b2391fd2e9b85cc7943c8->leave($__internal_fb05f81d2a7f74fdf432977788ede517f04e771bd56b2391fd2e9b85cc7943c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9386c3ca5f963c43d54b1cbe836224a2118dc6b1cf858e89ea11ef9683e2c04 = $this->env->getExtension("native_profiler");
        $__internal_c9386c3ca5f963c43d54b1cbe836224a2118dc6b1cf858e89ea11ef9683e2c04->enter($__internal_c9386c3ca5f963c43d54b1cbe836224a2118dc6b1cf858e89ea11ef9683e2c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9386c3ca5f963c43d54b1cbe836224a2118dc6b1cf858e89ea11ef9683e2c04->leave($__internal_c9386c3ca5f963c43d54b1cbe836224a2118dc6b1cf858e89ea11ef9683e2c04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18c8556a63e7b62b786b1f36824c43daf72695158dd918416bc32b5dfda0a73a = $this->env->getExtension("native_profiler");
        $__internal_18c8556a63e7b62b786b1f36824c43daf72695158dd918416bc32b5dfda0a73a->enter($__internal_18c8556a63e7b62b786b1f36824c43daf72695158dd918416bc32b5dfda0a73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18c8556a63e7b62b786b1f36824c43daf72695158dd918416bc32b5dfda0a73a->leave($__internal_18c8556a63e7b62b786b1f36824c43daf72695158dd918416bc32b5dfda0a73a_prof);

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
