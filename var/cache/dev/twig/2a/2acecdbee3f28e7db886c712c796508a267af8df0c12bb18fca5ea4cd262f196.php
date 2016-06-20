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
        $__internal_084f8c771f7693140d78c4c1e3d35b7f4c637f96bbcd798bd474f77aeaf3515f = $this->env->getExtension("native_profiler");
        $__internal_084f8c771f7693140d78c4c1e3d35b7f4c637f96bbcd798bd474f77aeaf3515f->enter($__internal_084f8c771f7693140d78c4c1e3d35b7f4c637f96bbcd798bd474f77aeaf3515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084f8c771f7693140d78c4c1e3d35b7f4c637f96bbcd798bd474f77aeaf3515f->leave($__internal_084f8c771f7693140d78c4c1e3d35b7f4c637f96bbcd798bd474f77aeaf3515f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93e2b187f03b3d01112b70bfb87cf5772af5bd4fe6d24a0b3f5fc8361a51c019 = $this->env->getExtension("native_profiler");
        $__internal_93e2b187f03b3d01112b70bfb87cf5772af5bd4fe6d24a0b3f5fc8361a51c019->enter($__internal_93e2b187f03b3d01112b70bfb87cf5772af5bd4fe6d24a0b3f5fc8361a51c019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_93e2b187f03b3d01112b70bfb87cf5772af5bd4fe6d24a0b3f5fc8361a51c019->leave($__internal_93e2b187f03b3d01112b70bfb87cf5772af5bd4fe6d24a0b3f5fc8361a51c019_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c251a8509620c6762268574eed5219b14727973519fabc28a5ef68eeeeb6b3a = $this->env->getExtension("native_profiler");
        $__internal_5c251a8509620c6762268574eed5219b14727973519fabc28a5ef68eeeeb6b3a->enter($__internal_5c251a8509620c6762268574eed5219b14727973519fabc28a5ef68eeeeb6b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c251a8509620c6762268574eed5219b14727973519fabc28a5ef68eeeeb6b3a->leave($__internal_5c251a8509620c6762268574eed5219b14727973519fabc28a5ef68eeeeb6b3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ce5f1adabf87b0edad119ca2e38fae5b238e63822a27283bdc821efba53f7ab = $this->env->getExtension("native_profiler");
        $__internal_2ce5f1adabf87b0edad119ca2e38fae5b238e63822a27283bdc821efba53f7ab->enter($__internal_2ce5f1adabf87b0edad119ca2e38fae5b238e63822a27283bdc821efba53f7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ce5f1adabf87b0edad119ca2e38fae5b238e63822a27283bdc821efba53f7ab->leave($__internal_2ce5f1adabf87b0edad119ca2e38fae5b238e63822a27283bdc821efba53f7ab_prof);

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
