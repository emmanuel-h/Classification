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
        $__internal_8bbba5c91dd94d94a2ecc15d544b985c82d5590c5436fa0872b99d8bd7219a9a = $this->env->getExtension("native_profiler");
        $__internal_8bbba5c91dd94d94a2ecc15d544b985c82d5590c5436fa0872b99d8bd7219a9a->enter($__internal_8bbba5c91dd94d94a2ecc15d544b985c82d5590c5436fa0872b99d8bd7219a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bbba5c91dd94d94a2ecc15d544b985c82d5590c5436fa0872b99d8bd7219a9a->leave($__internal_8bbba5c91dd94d94a2ecc15d544b985c82d5590c5436fa0872b99d8bd7219a9a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a23f70ee815921d0d3be8a0dd0f0282c453303c31410b1568f33e63d7803134 = $this->env->getExtension("native_profiler");
        $__internal_1a23f70ee815921d0d3be8a0dd0f0282c453303c31410b1568f33e63d7803134->enter($__internal_1a23f70ee815921d0d3be8a0dd0f0282c453303c31410b1568f33e63d7803134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a23f70ee815921d0d3be8a0dd0f0282c453303c31410b1568f33e63d7803134->leave($__internal_1a23f70ee815921d0d3be8a0dd0f0282c453303c31410b1568f33e63d7803134_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8908b287e53565c0cc5e5c1aeee1dda4ad8fcbb9e3210e3fb03895f9776674f4 = $this->env->getExtension("native_profiler");
        $__internal_8908b287e53565c0cc5e5c1aeee1dda4ad8fcbb9e3210e3fb03895f9776674f4->enter($__internal_8908b287e53565c0cc5e5c1aeee1dda4ad8fcbb9e3210e3fb03895f9776674f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8908b287e53565c0cc5e5c1aeee1dda4ad8fcbb9e3210e3fb03895f9776674f4->leave($__internal_8908b287e53565c0cc5e5c1aeee1dda4ad8fcbb9e3210e3fb03895f9776674f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f1a0f1ded7395b1c8566585987c1b5d18fdf913bf0332ba6d3848845be82963 = $this->env->getExtension("native_profiler");
        $__internal_9f1a0f1ded7395b1c8566585987c1b5d18fdf913bf0332ba6d3848845be82963->enter($__internal_9f1a0f1ded7395b1c8566585987c1b5d18fdf913bf0332ba6d3848845be82963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f1a0f1ded7395b1c8566585987c1b5d18fdf913bf0332ba6d3848845be82963->leave($__internal_9f1a0f1ded7395b1c8566585987c1b5d18fdf913bf0332ba6d3848845be82963_prof);

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
