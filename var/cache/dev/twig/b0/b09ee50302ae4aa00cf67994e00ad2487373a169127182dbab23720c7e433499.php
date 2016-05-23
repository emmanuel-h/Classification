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
        $__internal_e9f72a2825d599dd6a9e86cd664a4217786d97554fac7501770d412c761bb59e = $this->env->getExtension("native_profiler");
        $__internal_e9f72a2825d599dd6a9e86cd664a4217786d97554fac7501770d412c761bb59e->enter($__internal_e9f72a2825d599dd6a9e86cd664a4217786d97554fac7501770d412c761bb59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9f72a2825d599dd6a9e86cd664a4217786d97554fac7501770d412c761bb59e->leave($__internal_e9f72a2825d599dd6a9e86cd664a4217786d97554fac7501770d412c761bb59e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ffe5f2a6c9dec4f32143fa55e20a49c5820b7be8fe5a6eba768244f226ea85b = $this->env->getExtension("native_profiler");
        $__internal_0ffe5f2a6c9dec4f32143fa55e20a49c5820b7be8fe5a6eba768244f226ea85b->enter($__internal_0ffe5f2a6c9dec4f32143fa55e20a49c5820b7be8fe5a6eba768244f226ea85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ffe5f2a6c9dec4f32143fa55e20a49c5820b7be8fe5a6eba768244f226ea85b->leave($__internal_0ffe5f2a6c9dec4f32143fa55e20a49c5820b7be8fe5a6eba768244f226ea85b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46c5a6ddf80a08172b6a5e1a0705c71ee233231a977d6318081aaa4abb36c1bc = $this->env->getExtension("native_profiler");
        $__internal_46c5a6ddf80a08172b6a5e1a0705c71ee233231a977d6318081aaa4abb36c1bc->enter($__internal_46c5a6ddf80a08172b6a5e1a0705c71ee233231a977d6318081aaa4abb36c1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46c5a6ddf80a08172b6a5e1a0705c71ee233231a977d6318081aaa4abb36c1bc->leave($__internal_46c5a6ddf80a08172b6a5e1a0705c71ee233231a977d6318081aaa4abb36c1bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e942643af61a9df373d81e158349a97ead842bcecd47dd7e854887e3dcd384ee = $this->env->getExtension("native_profiler");
        $__internal_e942643af61a9df373d81e158349a97ead842bcecd47dd7e854887e3dcd384ee->enter($__internal_e942643af61a9df373d81e158349a97ead842bcecd47dd7e854887e3dcd384ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e942643af61a9df373d81e158349a97ead842bcecd47dd7e854887e3dcd384ee->leave($__internal_e942643af61a9df373d81e158349a97ead842bcecd47dd7e854887e3dcd384ee_prof);

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
