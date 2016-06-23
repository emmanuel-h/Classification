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
        $__internal_e1b9642065f0bbed7c65e320906df58585bddb48b667b20fa09d08be471838ff = $this->env->getExtension("native_profiler");
        $__internal_e1b9642065f0bbed7c65e320906df58585bddb48b667b20fa09d08be471838ff->enter($__internal_e1b9642065f0bbed7c65e320906df58585bddb48b667b20fa09d08be471838ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1b9642065f0bbed7c65e320906df58585bddb48b667b20fa09d08be471838ff->leave($__internal_e1b9642065f0bbed7c65e320906df58585bddb48b667b20fa09d08be471838ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb3902b59f549352519c2717755257b315b05f9201f7627531712bc9011f2833 = $this->env->getExtension("native_profiler");
        $__internal_cb3902b59f549352519c2717755257b315b05f9201f7627531712bc9011f2833->enter($__internal_cb3902b59f549352519c2717755257b315b05f9201f7627531712bc9011f2833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb3902b59f549352519c2717755257b315b05f9201f7627531712bc9011f2833->leave($__internal_cb3902b59f549352519c2717755257b315b05f9201f7627531712bc9011f2833_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_383aa9a13b148faf38e63259ab03def8060a6be5f163f0f58a72c5a2112f62dd = $this->env->getExtension("native_profiler");
        $__internal_383aa9a13b148faf38e63259ab03def8060a6be5f163f0f58a72c5a2112f62dd->enter($__internal_383aa9a13b148faf38e63259ab03def8060a6be5f163f0f58a72c5a2112f62dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_383aa9a13b148faf38e63259ab03def8060a6be5f163f0f58a72c5a2112f62dd->leave($__internal_383aa9a13b148faf38e63259ab03def8060a6be5f163f0f58a72c5a2112f62dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_661f43e8542962d3f90dec8d7c7d3f33cc66bd761d0f960cb572566f3be9ed17 = $this->env->getExtension("native_profiler");
        $__internal_661f43e8542962d3f90dec8d7c7d3f33cc66bd761d0f960cb572566f3be9ed17->enter($__internal_661f43e8542962d3f90dec8d7c7d3f33cc66bd761d0f960cb572566f3be9ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_661f43e8542962d3f90dec8d7c7d3f33cc66bd761d0f960cb572566f3be9ed17->leave($__internal_661f43e8542962d3f90dec8d7c7d3f33cc66bd761d0f960cb572566f3be9ed17_prof);

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
