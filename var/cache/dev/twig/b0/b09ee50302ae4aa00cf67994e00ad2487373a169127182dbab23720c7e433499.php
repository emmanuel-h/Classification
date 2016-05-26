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
        $__internal_96a41712384a90a92d13afc469dad32c33f5d03fd4c22f9d7f76507ef3312dcb = $this->env->getExtension("native_profiler");
        $__internal_96a41712384a90a92d13afc469dad32c33f5d03fd4c22f9d7f76507ef3312dcb->enter($__internal_96a41712384a90a92d13afc469dad32c33f5d03fd4c22f9d7f76507ef3312dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a41712384a90a92d13afc469dad32c33f5d03fd4c22f9d7f76507ef3312dcb->leave($__internal_96a41712384a90a92d13afc469dad32c33f5d03fd4c22f9d7f76507ef3312dcb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24556cb7ef0a95a5d89870e8920dc77fb50f1b3c3ab9aa10cf90db331d8d1e5e = $this->env->getExtension("native_profiler");
        $__internal_24556cb7ef0a95a5d89870e8920dc77fb50f1b3c3ab9aa10cf90db331d8d1e5e->enter($__internal_24556cb7ef0a95a5d89870e8920dc77fb50f1b3c3ab9aa10cf90db331d8d1e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24556cb7ef0a95a5d89870e8920dc77fb50f1b3c3ab9aa10cf90db331d8d1e5e->leave($__internal_24556cb7ef0a95a5d89870e8920dc77fb50f1b3c3ab9aa10cf90db331d8d1e5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ba50e65830158fa49a5b0f3cecb5ac8cb809212ab3d48744f49c77aa7896382 = $this->env->getExtension("native_profiler");
        $__internal_1ba50e65830158fa49a5b0f3cecb5ac8cb809212ab3d48744f49c77aa7896382->enter($__internal_1ba50e65830158fa49a5b0f3cecb5ac8cb809212ab3d48744f49c77aa7896382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ba50e65830158fa49a5b0f3cecb5ac8cb809212ab3d48744f49c77aa7896382->leave($__internal_1ba50e65830158fa49a5b0f3cecb5ac8cb809212ab3d48744f49c77aa7896382_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2faa4bb26e8bb87da0688d6651ac0b4e2ab19fde4ce57b673403bb9d965d2379 = $this->env->getExtension("native_profiler");
        $__internal_2faa4bb26e8bb87da0688d6651ac0b4e2ab19fde4ce57b673403bb9d965d2379->enter($__internal_2faa4bb26e8bb87da0688d6651ac0b4e2ab19fde4ce57b673403bb9d965d2379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2faa4bb26e8bb87da0688d6651ac0b4e2ab19fde4ce57b673403bb9d965d2379->leave($__internal_2faa4bb26e8bb87da0688d6651ac0b4e2ab19fde4ce57b673403bb9d965d2379_prof);

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
