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
        $__internal_ce21ed19cb9998824ff0ae9b38f34e32a3db3b9fb86a1d319dc398f85cd7ed8f = $this->env->getExtension("native_profiler");
        $__internal_ce21ed19cb9998824ff0ae9b38f34e32a3db3b9fb86a1d319dc398f85cd7ed8f->enter($__internal_ce21ed19cb9998824ff0ae9b38f34e32a3db3b9fb86a1d319dc398f85cd7ed8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce21ed19cb9998824ff0ae9b38f34e32a3db3b9fb86a1d319dc398f85cd7ed8f->leave($__internal_ce21ed19cb9998824ff0ae9b38f34e32a3db3b9fb86a1d319dc398f85cd7ed8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c4f6bc4f241db2a825109158f0c181dba4a2d234d4646b764db4670de33a9ba = $this->env->getExtension("native_profiler");
        $__internal_9c4f6bc4f241db2a825109158f0c181dba4a2d234d4646b764db4670de33a9ba->enter($__internal_9c4f6bc4f241db2a825109158f0c181dba4a2d234d4646b764db4670de33a9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c4f6bc4f241db2a825109158f0c181dba4a2d234d4646b764db4670de33a9ba->leave($__internal_9c4f6bc4f241db2a825109158f0c181dba4a2d234d4646b764db4670de33a9ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95b48cf8e81021b9748e00bfaba9897597249a1625fdecb62cda8a2c296bfc34 = $this->env->getExtension("native_profiler");
        $__internal_95b48cf8e81021b9748e00bfaba9897597249a1625fdecb62cda8a2c296bfc34->enter($__internal_95b48cf8e81021b9748e00bfaba9897597249a1625fdecb62cda8a2c296bfc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95b48cf8e81021b9748e00bfaba9897597249a1625fdecb62cda8a2c296bfc34->leave($__internal_95b48cf8e81021b9748e00bfaba9897597249a1625fdecb62cda8a2c296bfc34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86492485e27c43490bd73e18c684dcf0f99e8db793a863a7b91d8d59f4b4bcfd = $this->env->getExtension("native_profiler");
        $__internal_86492485e27c43490bd73e18c684dcf0f99e8db793a863a7b91d8d59f4b4bcfd->enter($__internal_86492485e27c43490bd73e18c684dcf0f99e8db793a863a7b91d8d59f4b4bcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86492485e27c43490bd73e18c684dcf0f99e8db793a863a7b91d8d59f4b4bcfd->leave($__internal_86492485e27c43490bd73e18c684dcf0f99e8db793a863a7b91d8d59f4b4bcfd_prof);

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
