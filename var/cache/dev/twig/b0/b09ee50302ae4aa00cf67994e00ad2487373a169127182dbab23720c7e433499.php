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
        $__internal_2ffc7ea5929e00efcb4c57577e4cac87f12a2a461bb9f091bccdd7f28a5d474b = $this->env->getExtension("native_profiler");
        $__internal_2ffc7ea5929e00efcb4c57577e4cac87f12a2a461bb9f091bccdd7f28a5d474b->enter($__internal_2ffc7ea5929e00efcb4c57577e4cac87f12a2a461bb9f091bccdd7f28a5d474b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ffc7ea5929e00efcb4c57577e4cac87f12a2a461bb9f091bccdd7f28a5d474b->leave($__internal_2ffc7ea5929e00efcb4c57577e4cac87f12a2a461bb9f091bccdd7f28a5d474b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10fe9c65c655a4aeceac2efcdfb14277899dea71fdb3871fd4f8c24a39aa82b3 = $this->env->getExtension("native_profiler");
        $__internal_10fe9c65c655a4aeceac2efcdfb14277899dea71fdb3871fd4f8c24a39aa82b3->enter($__internal_10fe9c65c655a4aeceac2efcdfb14277899dea71fdb3871fd4f8c24a39aa82b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10fe9c65c655a4aeceac2efcdfb14277899dea71fdb3871fd4f8c24a39aa82b3->leave($__internal_10fe9c65c655a4aeceac2efcdfb14277899dea71fdb3871fd4f8c24a39aa82b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8fd5c906d0c3fa778c1dad3231e232a7f06c20b21512b24b0051c509b888b7d = $this->env->getExtension("native_profiler");
        $__internal_e8fd5c906d0c3fa778c1dad3231e232a7f06c20b21512b24b0051c509b888b7d->enter($__internal_e8fd5c906d0c3fa778c1dad3231e232a7f06c20b21512b24b0051c509b888b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8fd5c906d0c3fa778c1dad3231e232a7f06c20b21512b24b0051c509b888b7d->leave($__internal_e8fd5c906d0c3fa778c1dad3231e232a7f06c20b21512b24b0051c509b888b7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_609414558513960e8eb104b0f901037074ece7426082abc8f98914fe26b70754 = $this->env->getExtension("native_profiler");
        $__internal_609414558513960e8eb104b0f901037074ece7426082abc8f98914fe26b70754->enter($__internal_609414558513960e8eb104b0f901037074ece7426082abc8f98914fe26b70754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_609414558513960e8eb104b0f901037074ece7426082abc8f98914fe26b70754->leave($__internal_609414558513960e8eb104b0f901037074ece7426082abc8f98914fe26b70754_prof);

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
