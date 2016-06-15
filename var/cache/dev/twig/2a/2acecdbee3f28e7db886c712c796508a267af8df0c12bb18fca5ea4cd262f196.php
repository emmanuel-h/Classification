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
        $__internal_d09c1b42bd62aeed87bbdc9942fdd06304ffe84090580d00ce7b8632a542e28c = $this->env->getExtension("native_profiler");
        $__internal_d09c1b42bd62aeed87bbdc9942fdd06304ffe84090580d00ce7b8632a542e28c->enter($__internal_d09c1b42bd62aeed87bbdc9942fdd06304ffe84090580d00ce7b8632a542e28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09c1b42bd62aeed87bbdc9942fdd06304ffe84090580d00ce7b8632a542e28c->leave($__internal_d09c1b42bd62aeed87bbdc9942fdd06304ffe84090580d00ce7b8632a542e28c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2038ec08a6abfa9d0d9f46fb5868db8f18e49c6640b60605cd49c11b1073a2e0 = $this->env->getExtension("native_profiler");
        $__internal_2038ec08a6abfa9d0d9f46fb5868db8f18e49c6640b60605cd49c11b1073a2e0->enter($__internal_2038ec08a6abfa9d0d9f46fb5868db8f18e49c6640b60605cd49c11b1073a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2038ec08a6abfa9d0d9f46fb5868db8f18e49c6640b60605cd49c11b1073a2e0->leave($__internal_2038ec08a6abfa9d0d9f46fb5868db8f18e49c6640b60605cd49c11b1073a2e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52fe0c9a08a46e1dc0c4652048b19e7eb27b6266354276344dd4af546f522f26 = $this->env->getExtension("native_profiler");
        $__internal_52fe0c9a08a46e1dc0c4652048b19e7eb27b6266354276344dd4af546f522f26->enter($__internal_52fe0c9a08a46e1dc0c4652048b19e7eb27b6266354276344dd4af546f522f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_52fe0c9a08a46e1dc0c4652048b19e7eb27b6266354276344dd4af546f522f26->leave($__internal_52fe0c9a08a46e1dc0c4652048b19e7eb27b6266354276344dd4af546f522f26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07ce62a25bed241b24234aead4c42672a21239df8522c0e482793f820cf14878 = $this->env->getExtension("native_profiler");
        $__internal_07ce62a25bed241b24234aead4c42672a21239df8522c0e482793f820cf14878->enter($__internal_07ce62a25bed241b24234aead4c42672a21239df8522c0e482793f820cf14878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07ce62a25bed241b24234aead4c42672a21239df8522c0e482793f820cf14878->leave($__internal_07ce62a25bed241b24234aead4c42672a21239df8522c0e482793f820cf14878_prof);

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
