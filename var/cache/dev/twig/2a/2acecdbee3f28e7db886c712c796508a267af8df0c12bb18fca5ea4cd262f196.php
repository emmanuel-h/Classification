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
        $__internal_5e227c4b426747584fc695fb7b0343af1a5f8790b67492f1d5a5f6d045b6c0f6 = $this->env->getExtension("native_profiler");
        $__internal_5e227c4b426747584fc695fb7b0343af1a5f8790b67492f1d5a5f6d045b6c0f6->enter($__internal_5e227c4b426747584fc695fb7b0343af1a5f8790b67492f1d5a5f6d045b6c0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e227c4b426747584fc695fb7b0343af1a5f8790b67492f1d5a5f6d045b6c0f6->leave($__internal_5e227c4b426747584fc695fb7b0343af1a5f8790b67492f1d5a5f6d045b6c0f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ee201309ebe95e081e39e3810e9631ddf7641bcad5c62eb8821b5c8e7add7e6 = $this->env->getExtension("native_profiler");
        $__internal_4ee201309ebe95e081e39e3810e9631ddf7641bcad5c62eb8821b5c8e7add7e6->enter($__internal_4ee201309ebe95e081e39e3810e9631ddf7641bcad5c62eb8821b5c8e7add7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ee201309ebe95e081e39e3810e9631ddf7641bcad5c62eb8821b5c8e7add7e6->leave($__internal_4ee201309ebe95e081e39e3810e9631ddf7641bcad5c62eb8821b5c8e7add7e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_115a6aeca098d62a3a53e6ec1cf248c8395b73389b19735150987d60c05922bb = $this->env->getExtension("native_profiler");
        $__internal_115a6aeca098d62a3a53e6ec1cf248c8395b73389b19735150987d60c05922bb->enter($__internal_115a6aeca098d62a3a53e6ec1cf248c8395b73389b19735150987d60c05922bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_115a6aeca098d62a3a53e6ec1cf248c8395b73389b19735150987d60c05922bb->leave($__internal_115a6aeca098d62a3a53e6ec1cf248c8395b73389b19735150987d60c05922bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f643d93d7e1cc93bd94f6664a42539c55fc566a50a57fe214748ec8049ca89bb = $this->env->getExtension("native_profiler");
        $__internal_f643d93d7e1cc93bd94f6664a42539c55fc566a50a57fe214748ec8049ca89bb->enter($__internal_f643d93d7e1cc93bd94f6664a42539c55fc566a50a57fe214748ec8049ca89bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f643d93d7e1cc93bd94f6664a42539c55fc566a50a57fe214748ec8049ca89bb->leave($__internal_f643d93d7e1cc93bd94f6664a42539c55fc566a50a57fe214748ec8049ca89bb_prof);

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
