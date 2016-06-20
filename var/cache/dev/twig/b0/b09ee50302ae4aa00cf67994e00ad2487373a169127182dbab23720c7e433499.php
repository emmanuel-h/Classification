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
        $__internal_ce7404d96dbdb1027f329cddf8923683cb2300244c7ccb1d2a913d6a120d4788 = $this->env->getExtension("native_profiler");
        $__internal_ce7404d96dbdb1027f329cddf8923683cb2300244c7ccb1d2a913d6a120d4788->enter($__internal_ce7404d96dbdb1027f329cddf8923683cb2300244c7ccb1d2a913d6a120d4788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce7404d96dbdb1027f329cddf8923683cb2300244c7ccb1d2a913d6a120d4788->leave($__internal_ce7404d96dbdb1027f329cddf8923683cb2300244c7ccb1d2a913d6a120d4788_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b3dedd09d70934b1908ae5fa49e50c979a0efd3fab6f5ffbe5635f9c171278b = $this->env->getExtension("native_profiler");
        $__internal_1b3dedd09d70934b1908ae5fa49e50c979a0efd3fab6f5ffbe5635f9c171278b->enter($__internal_1b3dedd09d70934b1908ae5fa49e50c979a0efd3fab6f5ffbe5635f9c171278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b3dedd09d70934b1908ae5fa49e50c979a0efd3fab6f5ffbe5635f9c171278b->leave($__internal_1b3dedd09d70934b1908ae5fa49e50c979a0efd3fab6f5ffbe5635f9c171278b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c68f26e579df6da2a7e45b9d84374829391fa3607fcea96645320d77950f4285 = $this->env->getExtension("native_profiler");
        $__internal_c68f26e579df6da2a7e45b9d84374829391fa3607fcea96645320d77950f4285->enter($__internal_c68f26e579df6da2a7e45b9d84374829391fa3607fcea96645320d77950f4285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c68f26e579df6da2a7e45b9d84374829391fa3607fcea96645320d77950f4285->leave($__internal_c68f26e579df6da2a7e45b9d84374829391fa3607fcea96645320d77950f4285_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de0edc7caf38e92d21db188635926ff90f7cedf79b0166491b3413cf56985414 = $this->env->getExtension("native_profiler");
        $__internal_de0edc7caf38e92d21db188635926ff90f7cedf79b0166491b3413cf56985414->enter($__internal_de0edc7caf38e92d21db188635926ff90f7cedf79b0166491b3413cf56985414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de0edc7caf38e92d21db188635926ff90f7cedf79b0166491b3413cf56985414->leave($__internal_de0edc7caf38e92d21db188635926ff90f7cedf79b0166491b3413cf56985414_prof);

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
