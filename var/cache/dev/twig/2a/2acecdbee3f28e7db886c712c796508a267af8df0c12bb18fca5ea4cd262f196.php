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
        $__internal_0516c3e4cb566d732a2c33e9be4838958d9209965c38a3cd2b5302c929b268e4 = $this->env->getExtension("native_profiler");
        $__internal_0516c3e4cb566d732a2c33e9be4838958d9209965c38a3cd2b5302c929b268e4->enter($__internal_0516c3e4cb566d732a2c33e9be4838958d9209965c38a3cd2b5302c929b268e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0516c3e4cb566d732a2c33e9be4838958d9209965c38a3cd2b5302c929b268e4->leave($__internal_0516c3e4cb566d732a2c33e9be4838958d9209965c38a3cd2b5302c929b268e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cd5ce9d11473797e7d7d036139578ce20dec549a42011f3ffc749ae2ab3f5aa = $this->env->getExtension("native_profiler");
        $__internal_7cd5ce9d11473797e7d7d036139578ce20dec549a42011f3ffc749ae2ab3f5aa->enter($__internal_7cd5ce9d11473797e7d7d036139578ce20dec549a42011f3ffc749ae2ab3f5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7cd5ce9d11473797e7d7d036139578ce20dec549a42011f3ffc749ae2ab3f5aa->leave($__internal_7cd5ce9d11473797e7d7d036139578ce20dec549a42011f3ffc749ae2ab3f5aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_836173741e4a6f16ba019d96c4a00a1df5692a1262cab8d8097c2be2b043fd98 = $this->env->getExtension("native_profiler");
        $__internal_836173741e4a6f16ba019d96c4a00a1df5692a1262cab8d8097c2be2b043fd98->enter($__internal_836173741e4a6f16ba019d96c4a00a1df5692a1262cab8d8097c2be2b043fd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_836173741e4a6f16ba019d96c4a00a1df5692a1262cab8d8097c2be2b043fd98->leave($__internal_836173741e4a6f16ba019d96c4a00a1df5692a1262cab8d8097c2be2b043fd98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a19a241680cd4f4041e16af184c1bf68b2099447a732ab12b63f3e3d85555bdf = $this->env->getExtension("native_profiler");
        $__internal_a19a241680cd4f4041e16af184c1bf68b2099447a732ab12b63f3e3d85555bdf->enter($__internal_a19a241680cd4f4041e16af184c1bf68b2099447a732ab12b63f3e3d85555bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a19a241680cd4f4041e16af184c1bf68b2099447a732ab12b63f3e3d85555bdf->leave($__internal_a19a241680cd4f4041e16af184c1bf68b2099447a732ab12b63f3e3d85555bdf_prof);

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
