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
        $__internal_567d70fea3891752355acd8fca0da1c821fdf26a5acd287794526e201fbcbb8d = $this->env->getExtension("native_profiler");
        $__internal_567d70fea3891752355acd8fca0da1c821fdf26a5acd287794526e201fbcbb8d->enter($__internal_567d70fea3891752355acd8fca0da1c821fdf26a5acd287794526e201fbcbb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567d70fea3891752355acd8fca0da1c821fdf26a5acd287794526e201fbcbb8d->leave($__internal_567d70fea3891752355acd8fca0da1c821fdf26a5acd287794526e201fbcbb8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90ad4b440f5a43d0cb86347b9b19dff963890103ac06949e6bf85144619bf55f = $this->env->getExtension("native_profiler");
        $__internal_90ad4b440f5a43d0cb86347b9b19dff963890103ac06949e6bf85144619bf55f->enter($__internal_90ad4b440f5a43d0cb86347b9b19dff963890103ac06949e6bf85144619bf55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90ad4b440f5a43d0cb86347b9b19dff963890103ac06949e6bf85144619bf55f->leave($__internal_90ad4b440f5a43d0cb86347b9b19dff963890103ac06949e6bf85144619bf55f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e76fa4bfcd34d55fce70604e422c1b2bedb246679db2ca184ecda656ba98819 = $this->env->getExtension("native_profiler");
        $__internal_5e76fa4bfcd34d55fce70604e422c1b2bedb246679db2ca184ecda656ba98819->enter($__internal_5e76fa4bfcd34d55fce70604e422c1b2bedb246679db2ca184ecda656ba98819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e76fa4bfcd34d55fce70604e422c1b2bedb246679db2ca184ecda656ba98819->leave($__internal_5e76fa4bfcd34d55fce70604e422c1b2bedb246679db2ca184ecda656ba98819_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7879fc300099d78f4c154dc1c0c9a1929d88a5baf22fc00a11b99cf37b97a1f0 = $this->env->getExtension("native_profiler");
        $__internal_7879fc300099d78f4c154dc1c0c9a1929d88a5baf22fc00a11b99cf37b97a1f0->enter($__internal_7879fc300099d78f4c154dc1c0c9a1929d88a5baf22fc00a11b99cf37b97a1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7879fc300099d78f4c154dc1c0c9a1929d88a5baf22fc00a11b99cf37b97a1f0->leave($__internal_7879fc300099d78f4c154dc1c0c9a1929d88a5baf22fc00a11b99cf37b97a1f0_prof);

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
