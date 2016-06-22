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
        $__internal_5124553784c965decaabac45140776c5cbc5e81291276fbfd5bda96e2d8319c2 = $this->env->getExtension("native_profiler");
        $__internal_5124553784c965decaabac45140776c5cbc5e81291276fbfd5bda96e2d8319c2->enter($__internal_5124553784c965decaabac45140776c5cbc5e81291276fbfd5bda96e2d8319c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5124553784c965decaabac45140776c5cbc5e81291276fbfd5bda96e2d8319c2->leave($__internal_5124553784c965decaabac45140776c5cbc5e81291276fbfd5bda96e2d8319c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee8fffb39dd7704ffe47334a0a7b354954aceeca68990ada2a883fa757d37279 = $this->env->getExtension("native_profiler");
        $__internal_ee8fffb39dd7704ffe47334a0a7b354954aceeca68990ada2a883fa757d37279->enter($__internal_ee8fffb39dd7704ffe47334a0a7b354954aceeca68990ada2a883fa757d37279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee8fffb39dd7704ffe47334a0a7b354954aceeca68990ada2a883fa757d37279->leave($__internal_ee8fffb39dd7704ffe47334a0a7b354954aceeca68990ada2a883fa757d37279_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd4289f26debf3fa518f3a78cf42a66b42daeb2e0dfc479c461212db02e3943f = $this->env->getExtension("native_profiler");
        $__internal_dd4289f26debf3fa518f3a78cf42a66b42daeb2e0dfc479c461212db02e3943f->enter($__internal_dd4289f26debf3fa518f3a78cf42a66b42daeb2e0dfc479c461212db02e3943f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd4289f26debf3fa518f3a78cf42a66b42daeb2e0dfc479c461212db02e3943f->leave($__internal_dd4289f26debf3fa518f3a78cf42a66b42daeb2e0dfc479c461212db02e3943f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0de18482d2ecb762d918a73fe87c9d435a7c1cff50f2309e96ee1dabd3b1c8d = $this->env->getExtension("native_profiler");
        $__internal_b0de18482d2ecb762d918a73fe87c9d435a7c1cff50f2309e96ee1dabd3b1c8d->enter($__internal_b0de18482d2ecb762d918a73fe87c9d435a7c1cff50f2309e96ee1dabd3b1c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0de18482d2ecb762d918a73fe87c9d435a7c1cff50f2309e96ee1dabd3b1c8d->leave($__internal_b0de18482d2ecb762d918a73fe87c9d435a7c1cff50f2309e96ee1dabd3b1c8d_prof);

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
