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
        $__internal_9de09e2c36ec76b93b3ffd53602836782ca9de21846b1a4c1c04b2ca0ed827a1 = $this->env->getExtension("native_profiler");
        $__internal_9de09e2c36ec76b93b3ffd53602836782ca9de21846b1a4c1c04b2ca0ed827a1->enter($__internal_9de09e2c36ec76b93b3ffd53602836782ca9de21846b1a4c1c04b2ca0ed827a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de09e2c36ec76b93b3ffd53602836782ca9de21846b1a4c1c04b2ca0ed827a1->leave($__internal_9de09e2c36ec76b93b3ffd53602836782ca9de21846b1a4c1c04b2ca0ed827a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4c915995fe19ad0fc5ec343cb4c143bf5759c489280349905f99b7a44f24343 = $this->env->getExtension("native_profiler");
        $__internal_c4c915995fe19ad0fc5ec343cb4c143bf5759c489280349905f99b7a44f24343->enter($__internal_c4c915995fe19ad0fc5ec343cb4c143bf5759c489280349905f99b7a44f24343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c4c915995fe19ad0fc5ec343cb4c143bf5759c489280349905f99b7a44f24343->leave($__internal_c4c915995fe19ad0fc5ec343cb4c143bf5759c489280349905f99b7a44f24343_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ace28cd3774701a330a6cdbc2322cdb41d21eddf37c8744e95c19678bd589cb1 = $this->env->getExtension("native_profiler");
        $__internal_ace28cd3774701a330a6cdbc2322cdb41d21eddf37c8744e95c19678bd589cb1->enter($__internal_ace28cd3774701a330a6cdbc2322cdb41d21eddf37c8744e95c19678bd589cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ace28cd3774701a330a6cdbc2322cdb41d21eddf37c8744e95c19678bd589cb1->leave($__internal_ace28cd3774701a330a6cdbc2322cdb41d21eddf37c8744e95c19678bd589cb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_854adc640dfa6e76d53c7a44de21fe5eecb16e58e90a8af3a50548002919fb17 = $this->env->getExtension("native_profiler");
        $__internal_854adc640dfa6e76d53c7a44de21fe5eecb16e58e90a8af3a50548002919fb17->enter($__internal_854adc640dfa6e76d53c7a44de21fe5eecb16e58e90a8af3a50548002919fb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_854adc640dfa6e76d53c7a44de21fe5eecb16e58e90a8af3a50548002919fb17->leave($__internal_854adc640dfa6e76d53c7a44de21fe5eecb16e58e90a8af3a50548002919fb17_prof);

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
