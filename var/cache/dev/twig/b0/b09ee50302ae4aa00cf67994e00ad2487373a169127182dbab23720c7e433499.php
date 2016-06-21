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
        $__internal_7b1b836549310682233a5fa6dd74bccf1029b8c818c3190c49fbe18c7c540c4a = $this->env->getExtension("native_profiler");
        $__internal_7b1b836549310682233a5fa6dd74bccf1029b8c818c3190c49fbe18c7c540c4a->enter($__internal_7b1b836549310682233a5fa6dd74bccf1029b8c818c3190c49fbe18c7c540c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1b836549310682233a5fa6dd74bccf1029b8c818c3190c49fbe18c7c540c4a->leave($__internal_7b1b836549310682233a5fa6dd74bccf1029b8c818c3190c49fbe18c7c540c4a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4203def58654e74160b327c0f6c34b6da0ea62f8c1f3b0e5f83fd710f007ac47 = $this->env->getExtension("native_profiler");
        $__internal_4203def58654e74160b327c0f6c34b6da0ea62f8c1f3b0e5f83fd710f007ac47->enter($__internal_4203def58654e74160b327c0f6c34b6da0ea62f8c1f3b0e5f83fd710f007ac47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4203def58654e74160b327c0f6c34b6da0ea62f8c1f3b0e5f83fd710f007ac47->leave($__internal_4203def58654e74160b327c0f6c34b6da0ea62f8c1f3b0e5f83fd710f007ac47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0402e8959b89df4ec594842eccce0f7b0c383f62dddb3592250b18a19441ff0 = $this->env->getExtension("native_profiler");
        $__internal_c0402e8959b89df4ec594842eccce0f7b0c383f62dddb3592250b18a19441ff0->enter($__internal_c0402e8959b89df4ec594842eccce0f7b0c383f62dddb3592250b18a19441ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0402e8959b89df4ec594842eccce0f7b0c383f62dddb3592250b18a19441ff0->leave($__internal_c0402e8959b89df4ec594842eccce0f7b0c383f62dddb3592250b18a19441ff0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b72b65860446b00632a8d0525bad59ab308e7adb3d7f786e8e63c3ca64a90d71 = $this->env->getExtension("native_profiler");
        $__internal_b72b65860446b00632a8d0525bad59ab308e7adb3d7f786e8e63c3ca64a90d71->enter($__internal_b72b65860446b00632a8d0525bad59ab308e7adb3d7f786e8e63c3ca64a90d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b72b65860446b00632a8d0525bad59ab308e7adb3d7f786e8e63c3ca64a90d71->leave($__internal_b72b65860446b00632a8d0525bad59ab308e7adb3d7f786e8e63c3ca64a90d71_prof);

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
