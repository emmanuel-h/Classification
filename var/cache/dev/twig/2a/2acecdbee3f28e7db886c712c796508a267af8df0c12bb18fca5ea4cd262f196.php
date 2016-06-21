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
        $__internal_f1372fe984e3996565476958cca2ea0d6c9c10410b91aaf1d96f96fb39000b4f = $this->env->getExtension("native_profiler");
        $__internal_f1372fe984e3996565476958cca2ea0d6c9c10410b91aaf1d96f96fb39000b4f->enter($__internal_f1372fe984e3996565476958cca2ea0d6c9c10410b91aaf1d96f96fb39000b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1372fe984e3996565476958cca2ea0d6c9c10410b91aaf1d96f96fb39000b4f->leave($__internal_f1372fe984e3996565476958cca2ea0d6c9c10410b91aaf1d96f96fb39000b4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f3ce665c21f92881c3ffa767ac898d4829fd31432088ff0d7cdd7c13708481 = $this->env->getExtension("native_profiler");
        $__internal_a6f3ce665c21f92881c3ffa767ac898d4829fd31432088ff0d7cdd7c13708481->enter($__internal_a6f3ce665c21f92881c3ffa767ac898d4829fd31432088ff0d7cdd7c13708481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6f3ce665c21f92881c3ffa767ac898d4829fd31432088ff0d7cdd7c13708481->leave($__internal_a6f3ce665c21f92881c3ffa767ac898d4829fd31432088ff0d7cdd7c13708481_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbd2b7d521be1c3274550a206641ab3878f702e0e05437a364e8000d0cf88b38 = $this->env->getExtension("native_profiler");
        $__internal_cbd2b7d521be1c3274550a206641ab3878f702e0e05437a364e8000d0cf88b38->enter($__internal_cbd2b7d521be1c3274550a206641ab3878f702e0e05437a364e8000d0cf88b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cbd2b7d521be1c3274550a206641ab3878f702e0e05437a364e8000d0cf88b38->leave($__internal_cbd2b7d521be1c3274550a206641ab3878f702e0e05437a364e8000d0cf88b38_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae9050ea2809d10d6bc643a7cad9f01a08ef54891f2b33ee9652ccc0b6a11787 = $this->env->getExtension("native_profiler");
        $__internal_ae9050ea2809d10d6bc643a7cad9f01a08ef54891f2b33ee9652ccc0b6a11787->enter($__internal_ae9050ea2809d10d6bc643a7cad9f01a08ef54891f2b33ee9652ccc0b6a11787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae9050ea2809d10d6bc643a7cad9f01a08ef54891f2b33ee9652ccc0b6a11787->leave($__internal_ae9050ea2809d10d6bc643a7cad9f01a08ef54891f2b33ee9652ccc0b6a11787_prof);

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
