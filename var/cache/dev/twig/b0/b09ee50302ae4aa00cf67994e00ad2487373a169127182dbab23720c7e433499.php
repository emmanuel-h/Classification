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
        $__internal_5e76e5e94286209b53facf4eef372ecefe32ff152ab80b039bc92a2f15f62ed0 = $this->env->getExtension("native_profiler");
        $__internal_5e76e5e94286209b53facf4eef372ecefe32ff152ab80b039bc92a2f15f62ed0->enter($__internal_5e76e5e94286209b53facf4eef372ecefe32ff152ab80b039bc92a2f15f62ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e76e5e94286209b53facf4eef372ecefe32ff152ab80b039bc92a2f15f62ed0->leave($__internal_5e76e5e94286209b53facf4eef372ecefe32ff152ab80b039bc92a2f15f62ed0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bac2746fffd73b0e89fd1d228033f35e14b5d1e57d0093d3f9a6b2f9c1c13397 = $this->env->getExtension("native_profiler");
        $__internal_bac2746fffd73b0e89fd1d228033f35e14b5d1e57d0093d3f9a6b2f9c1c13397->enter($__internal_bac2746fffd73b0e89fd1d228033f35e14b5d1e57d0093d3f9a6b2f9c1c13397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bac2746fffd73b0e89fd1d228033f35e14b5d1e57d0093d3f9a6b2f9c1c13397->leave($__internal_bac2746fffd73b0e89fd1d228033f35e14b5d1e57d0093d3f9a6b2f9c1c13397_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d2ac02df16891312c43ded43a3a04be8356140c93608f1b01d013ac223c77e2 = $this->env->getExtension("native_profiler");
        $__internal_9d2ac02df16891312c43ded43a3a04be8356140c93608f1b01d013ac223c77e2->enter($__internal_9d2ac02df16891312c43ded43a3a04be8356140c93608f1b01d013ac223c77e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d2ac02df16891312c43ded43a3a04be8356140c93608f1b01d013ac223c77e2->leave($__internal_9d2ac02df16891312c43ded43a3a04be8356140c93608f1b01d013ac223c77e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a22b92c74c2d35bb342ad09361a848805cb45ca5f996eecc1977d12e7cb17f6e = $this->env->getExtension("native_profiler");
        $__internal_a22b92c74c2d35bb342ad09361a848805cb45ca5f996eecc1977d12e7cb17f6e->enter($__internal_a22b92c74c2d35bb342ad09361a848805cb45ca5f996eecc1977d12e7cb17f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a22b92c74c2d35bb342ad09361a848805cb45ca5f996eecc1977d12e7cb17f6e->leave($__internal_a22b92c74c2d35bb342ad09361a848805cb45ca5f996eecc1977d12e7cb17f6e_prof);

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
