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
        $__internal_0c391984b11b4d565e1b832d6e65d534a9d6cf639b9ec9e95d1be919c204ac6e = $this->env->getExtension("native_profiler");
        $__internal_0c391984b11b4d565e1b832d6e65d534a9d6cf639b9ec9e95d1be919c204ac6e->enter($__internal_0c391984b11b4d565e1b832d6e65d534a9d6cf639b9ec9e95d1be919c204ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c391984b11b4d565e1b832d6e65d534a9d6cf639b9ec9e95d1be919c204ac6e->leave($__internal_0c391984b11b4d565e1b832d6e65d534a9d6cf639b9ec9e95d1be919c204ac6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1f49051832ce385e77b95b6a0d67098ffa0874eaa56ddb60798f6774034e53f = $this->env->getExtension("native_profiler");
        $__internal_e1f49051832ce385e77b95b6a0d67098ffa0874eaa56ddb60798f6774034e53f->enter($__internal_e1f49051832ce385e77b95b6a0d67098ffa0874eaa56ddb60798f6774034e53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e1f49051832ce385e77b95b6a0d67098ffa0874eaa56ddb60798f6774034e53f->leave($__internal_e1f49051832ce385e77b95b6a0d67098ffa0874eaa56ddb60798f6774034e53f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9c406e19517e5a786c5980ce5e357d278f1275922865f053d2ae4f2cd98842c = $this->env->getExtension("native_profiler");
        $__internal_b9c406e19517e5a786c5980ce5e357d278f1275922865f053d2ae4f2cd98842c->enter($__internal_b9c406e19517e5a786c5980ce5e357d278f1275922865f053d2ae4f2cd98842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b9c406e19517e5a786c5980ce5e357d278f1275922865f053d2ae4f2cd98842c->leave($__internal_b9c406e19517e5a786c5980ce5e357d278f1275922865f053d2ae4f2cd98842c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be9081b4d82f7cfa865dc1790a20dbdd64109e6ae2478e9a4902d20ca7eaac9f = $this->env->getExtension("native_profiler");
        $__internal_be9081b4d82f7cfa865dc1790a20dbdd64109e6ae2478e9a4902d20ca7eaac9f->enter($__internal_be9081b4d82f7cfa865dc1790a20dbdd64109e6ae2478e9a4902d20ca7eaac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_be9081b4d82f7cfa865dc1790a20dbdd64109e6ae2478e9a4902d20ca7eaac9f->leave($__internal_be9081b4d82f7cfa865dc1790a20dbdd64109e6ae2478e9a4902d20ca7eaac9f_prof);

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
