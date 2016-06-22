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
        $__internal_bec74a4a87d9c6a45163aefbe1f1e96de5bd80e93ce6861611afcba0e79c2290 = $this->env->getExtension("native_profiler");
        $__internal_bec74a4a87d9c6a45163aefbe1f1e96de5bd80e93ce6861611afcba0e79c2290->enter($__internal_bec74a4a87d9c6a45163aefbe1f1e96de5bd80e93ce6861611afcba0e79c2290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec74a4a87d9c6a45163aefbe1f1e96de5bd80e93ce6861611afcba0e79c2290->leave($__internal_bec74a4a87d9c6a45163aefbe1f1e96de5bd80e93ce6861611afcba0e79c2290_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48c2c6740879062bb1bb6165c79fabfa747a857b59f85dce69e91e509b11d483 = $this->env->getExtension("native_profiler");
        $__internal_48c2c6740879062bb1bb6165c79fabfa747a857b59f85dce69e91e509b11d483->enter($__internal_48c2c6740879062bb1bb6165c79fabfa747a857b59f85dce69e91e509b11d483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48c2c6740879062bb1bb6165c79fabfa747a857b59f85dce69e91e509b11d483->leave($__internal_48c2c6740879062bb1bb6165c79fabfa747a857b59f85dce69e91e509b11d483_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51b3a03ada7a0bd956dffca5d517cdc3a0e521688f39b7f384e254d2d70d85cb = $this->env->getExtension("native_profiler");
        $__internal_51b3a03ada7a0bd956dffca5d517cdc3a0e521688f39b7f384e254d2d70d85cb->enter($__internal_51b3a03ada7a0bd956dffca5d517cdc3a0e521688f39b7f384e254d2d70d85cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51b3a03ada7a0bd956dffca5d517cdc3a0e521688f39b7f384e254d2d70d85cb->leave($__internal_51b3a03ada7a0bd956dffca5d517cdc3a0e521688f39b7f384e254d2d70d85cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a028575fbacfe998160fad68bca86ea69d63c4dff197aea14daa7d1d0f80ae6 = $this->env->getExtension("native_profiler");
        $__internal_0a028575fbacfe998160fad68bca86ea69d63c4dff197aea14daa7d1d0f80ae6->enter($__internal_0a028575fbacfe998160fad68bca86ea69d63c4dff197aea14daa7d1d0f80ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a028575fbacfe998160fad68bca86ea69d63c4dff197aea14daa7d1d0f80ae6->leave($__internal_0a028575fbacfe998160fad68bca86ea69d63c4dff197aea14daa7d1d0f80ae6_prof);

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
