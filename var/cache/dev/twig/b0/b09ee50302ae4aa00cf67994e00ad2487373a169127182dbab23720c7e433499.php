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
        $__internal_1a88eabb9179298493504b8e5203e26964a57eae9c159ab987ce1db0e823ca6e = $this->env->getExtension("native_profiler");
        $__internal_1a88eabb9179298493504b8e5203e26964a57eae9c159ab987ce1db0e823ca6e->enter($__internal_1a88eabb9179298493504b8e5203e26964a57eae9c159ab987ce1db0e823ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a88eabb9179298493504b8e5203e26964a57eae9c159ab987ce1db0e823ca6e->leave($__internal_1a88eabb9179298493504b8e5203e26964a57eae9c159ab987ce1db0e823ca6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_981d05810340a195cc93625a01e9a5b488bf74c571ec0d76eebb7f06d97a66c8 = $this->env->getExtension("native_profiler");
        $__internal_981d05810340a195cc93625a01e9a5b488bf74c571ec0d76eebb7f06d97a66c8->enter($__internal_981d05810340a195cc93625a01e9a5b488bf74c571ec0d76eebb7f06d97a66c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_981d05810340a195cc93625a01e9a5b488bf74c571ec0d76eebb7f06d97a66c8->leave($__internal_981d05810340a195cc93625a01e9a5b488bf74c571ec0d76eebb7f06d97a66c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4646a4910e38ba31e3b379558f151ef649db7b72bb68c1be43f44e392a16bed6 = $this->env->getExtension("native_profiler");
        $__internal_4646a4910e38ba31e3b379558f151ef649db7b72bb68c1be43f44e392a16bed6->enter($__internal_4646a4910e38ba31e3b379558f151ef649db7b72bb68c1be43f44e392a16bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4646a4910e38ba31e3b379558f151ef649db7b72bb68c1be43f44e392a16bed6->leave($__internal_4646a4910e38ba31e3b379558f151ef649db7b72bb68c1be43f44e392a16bed6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ab3d824d67049b57ea9f36e6acdf3eab7a8d660fee696e870ad0ed077074b13 = $this->env->getExtension("native_profiler");
        $__internal_9ab3d824d67049b57ea9f36e6acdf3eab7a8d660fee696e870ad0ed077074b13->enter($__internal_9ab3d824d67049b57ea9f36e6acdf3eab7a8d660fee696e870ad0ed077074b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ab3d824d67049b57ea9f36e6acdf3eab7a8d660fee696e870ad0ed077074b13->leave($__internal_9ab3d824d67049b57ea9f36e6acdf3eab7a8d660fee696e870ad0ed077074b13_prof);

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
