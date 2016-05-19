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
        $__internal_ddc0de3db6b4b8f5e91a5c298381c9c14f9ffc4665e7d3d2539200c015d0a4ae = $this->env->getExtension("native_profiler");
        $__internal_ddc0de3db6b4b8f5e91a5c298381c9c14f9ffc4665e7d3d2539200c015d0a4ae->enter($__internal_ddc0de3db6b4b8f5e91a5c298381c9c14f9ffc4665e7d3d2539200c015d0a4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc0de3db6b4b8f5e91a5c298381c9c14f9ffc4665e7d3d2539200c015d0a4ae->leave($__internal_ddc0de3db6b4b8f5e91a5c298381c9c14f9ffc4665e7d3d2539200c015d0a4ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26d0758817256c95e7789835c830212ae9f6a2de804c0d0f2245041d32f6e67a = $this->env->getExtension("native_profiler");
        $__internal_26d0758817256c95e7789835c830212ae9f6a2de804c0d0f2245041d32f6e67a->enter($__internal_26d0758817256c95e7789835c830212ae9f6a2de804c0d0f2245041d32f6e67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26d0758817256c95e7789835c830212ae9f6a2de804c0d0f2245041d32f6e67a->leave($__internal_26d0758817256c95e7789835c830212ae9f6a2de804c0d0f2245041d32f6e67a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5d178782853bf0d59df5867ed8c842de5036e963d770152d150799573d6faa8 = $this->env->getExtension("native_profiler");
        $__internal_f5d178782853bf0d59df5867ed8c842de5036e963d770152d150799573d6faa8->enter($__internal_f5d178782853bf0d59df5867ed8c842de5036e963d770152d150799573d6faa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5d178782853bf0d59df5867ed8c842de5036e963d770152d150799573d6faa8->leave($__internal_f5d178782853bf0d59df5867ed8c842de5036e963d770152d150799573d6faa8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9135f110da1543ca8a84d80e0471b8bbe17b5d184a3b5cdad26c076b3c58391 = $this->env->getExtension("native_profiler");
        $__internal_a9135f110da1543ca8a84d80e0471b8bbe17b5d184a3b5cdad26c076b3c58391->enter($__internal_a9135f110da1543ca8a84d80e0471b8bbe17b5d184a3b5cdad26c076b3c58391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9135f110da1543ca8a84d80e0471b8bbe17b5d184a3b5cdad26c076b3c58391->leave($__internal_a9135f110da1543ca8a84d80e0471b8bbe17b5d184a3b5cdad26c076b3c58391_prof);

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
