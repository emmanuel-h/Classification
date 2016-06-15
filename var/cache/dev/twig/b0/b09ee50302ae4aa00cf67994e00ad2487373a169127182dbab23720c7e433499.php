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
        $__internal_3b260690eb61a5faf8889d50ffe3e4dcb7f698ab6c6de1127514abc27d2b57a9 = $this->env->getExtension("native_profiler");
        $__internal_3b260690eb61a5faf8889d50ffe3e4dcb7f698ab6c6de1127514abc27d2b57a9->enter($__internal_3b260690eb61a5faf8889d50ffe3e4dcb7f698ab6c6de1127514abc27d2b57a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b260690eb61a5faf8889d50ffe3e4dcb7f698ab6c6de1127514abc27d2b57a9->leave($__internal_3b260690eb61a5faf8889d50ffe3e4dcb7f698ab6c6de1127514abc27d2b57a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15616e7a94f53b1feeefbc0d9d4929dc488d12f41f097b83499680d011c8b481 = $this->env->getExtension("native_profiler");
        $__internal_15616e7a94f53b1feeefbc0d9d4929dc488d12f41f097b83499680d011c8b481->enter($__internal_15616e7a94f53b1feeefbc0d9d4929dc488d12f41f097b83499680d011c8b481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15616e7a94f53b1feeefbc0d9d4929dc488d12f41f097b83499680d011c8b481->leave($__internal_15616e7a94f53b1feeefbc0d9d4929dc488d12f41f097b83499680d011c8b481_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2ede04f1452504f59e84e940c97dd226fbf28355e789486127145a2462ecd11 = $this->env->getExtension("native_profiler");
        $__internal_f2ede04f1452504f59e84e940c97dd226fbf28355e789486127145a2462ecd11->enter($__internal_f2ede04f1452504f59e84e940c97dd226fbf28355e789486127145a2462ecd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2ede04f1452504f59e84e940c97dd226fbf28355e789486127145a2462ecd11->leave($__internal_f2ede04f1452504f59e84e940c97dd226fbf28355e789486127145a2462ecd11_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a342737b291a3f32d31902287340a513c5b5de0a34691e544ecd19ed4f824c05 = $this->env->getExtension("native_profiler");
        $__internal_a342737b291a3f32d31902287340a513c5b5de0a34691e544ecd19ed4f824c05->enter($__internal_a342737b291a3f32d31902287340a513c5b5de0a34691e544ecd19ed4f824c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a342737b291a3f32d31902287340a513c5b5de0a34691e544ecd19ed4f824c05->leave($__internal_a342737b291a3f32d31902287340a513c5b5de0a34691e544ecd19ed4f824c05_prof);

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
