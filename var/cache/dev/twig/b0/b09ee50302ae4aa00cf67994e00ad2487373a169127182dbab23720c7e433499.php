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
        $__internal_f1d653e4fd0952e2a16e3e6d9c7540675b9656ffc44c9e0bd0e7c457dcfc3bdd = $this->env->getExtension("native_profiler");
        $__internal_f1d653e4fd0952e2a16e3e6d9c7540675b9656ffc44c9e0bd0e7c457dcfc3bdd->enter($__internal_f1d653e4fd0952e2a16e3e6d9c7540675b9656ffc44c9e0bd0e7c457dcfc3bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1d653e4fd0952e2a16e3e6d9c7540675b9656ffc44c9e0bd0e7c457dcfc3bdd->leave($__internal_f1d653e4fd0952e2a16e3e6d9c7540675b9656ffc44c9e0bd0e7c457dcfc3bdd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33d61bb6b1ee3638bfc50306e57d6b8bde256c91f3434f7deb7d1cc4731b5258 = $this->env->getExtension("native_profiler");
        $__internal_33d61bb6b1ee3638bfc50306e57d6b8bde256c91f3434f7deb7d1cc4731b5258->enter($__internal_33d61bb6b1ee3638bfc50306e57d6b8bde256c91f3434f7deb7d1cc4731b5258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33d61bb6b1ee3638bfc50306e57d6b8bde256c91f3434f7deb7d1cc4731b5258->leave($__internal_33d61bb6b1ee3638bfc50306e57d6b8bde256c91f3434f7deb7d1cc4731b5258_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f39dd38bdb9260c41fe00ffdcf7f808796ac78bc41caf6ae6a7409413b6d251d = $this->env->getExtension("native_profiler");
        $__internal_f39dd38bdb9260c41fe00ffdcf7f808796ac78bc41caf6ae6a7409413b6d251d->enter($__internal_f39dd38bdb9260c41fe00ffdcf7f808796ac78bc41caf6ae6a7409413b6d251d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f39dd38bdb9260c41fe00ffdcf7f808796ac78bc41caf6ae6a7409413b6d251d->leave($__internal_f39dd38bdb9260c41fe00ffdcf7f808796ac78bc41caf6ae6a7409413b6d251d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0b8df02020cf88fa9d05ace2f2cc2d8b3197501c09378934adc61a209958cef = $this->env->getExtension("native_profiler");
        $__internal_b0b8df02020cf88fa9d05ace2f2cc2d8b3197501c09378934adc61a209958cef->enter($__internal_b0b8df02020cf88fa9d05ace2f2cc2d8b3197501c09378934adc61a209958cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0b8df02020cf88fa9d05ace2f2cc2d8b3197501c09378934adc61a209958cef->leave($__internal_b0b8df02020cf88fa9d05ace2f2cc2d8b3197501c09378934adc61a209958cef_prof);

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
