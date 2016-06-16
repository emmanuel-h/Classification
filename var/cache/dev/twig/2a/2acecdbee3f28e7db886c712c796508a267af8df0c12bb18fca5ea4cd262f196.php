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
        $__internal_deede12ad80473673f9e8b85f0222adb89f082fb79ce76f4eb7ddee97bd4c74e = $this->env->getExtension("native_profiler");
        $__internal_deede12ad80473673f9e8b85f0222adb89f082fb79ce76f4eb7ddee97bd4c74e->enter($__internal_deede12ad80473673f9e8b85f0222adb89f082fb79ce76f4eb7ddee97bd4c74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deede12ad80473673f9e8b85f0222adb89f082fb79ce76f4eb7ddee97bd4c74e->leave($__internal_deede12ad80473673f9e8b85f0222adb89f082fb79ce76f4eb7ddee97bd4c74e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b1d59e8e55a774f0e916e45fffda54fb9ae10aac517740dc78b287e42a8789c = $this->env->getExtension("native_profiler");
        $__internal_8b1d59e8e55a774f0e916e45fffda54fb9ae10aac517740dc78b287e42a8789c->enter($__internal_8b1d59e8e55a774f0e916e45fffda54fb9ae10aac517740dc78b287e42a8789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b1d59e8e55a774f0e916e45fffda54fb9ae10aac517740dc78b287e42a8789c->leave($__internal_8b1d59e8e55a774f0e916e45fffda54fb9ae10aac517740dc78b287e42a8789c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdf0c142abd8a2c2767701a203a4992575f34a8df167c601e88318d3162f1b5a = $this->env->getExtension("native_profiler");
        $__internal_fdf0c142abd8a2c2767701a203a4992575f34a8df167c601e88318d3162f1b5a->enter($__internal_fdf0c142abd8a2c2767701a203a4992575f34a8df167c601e88318d3162f1b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdf0c142abd8a2c2767701a203a4992575f34a8df167c601e88318d3162f1b5a->leave($__internal_fdf0c142abd8a2c2767701a203a4992575f34a8df167c601e88318d3162f1b5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac43fd6b8e3809e45b93492d5a5447c890b5b7107d3c56b6a3d00b6a4e899d7f = $this->env->getExtension("native_profiler");
        $__internal_ac43fd6b8e3809e45b93492d5a5447c890b5b7107d3c56b6a3d00b6a4e899d7f->enter($__internal_ac43fd6b8e3809e45b93492d5a5447c890b5b7107d3c56b6a3d00b6a4e899d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ac43fd6b8e3809e45b93492d5a5447c890b5b7107d3c56b6a3d00b6a4e899d7f->leave($__internal_ac43fd6b8e3809e45b93492d5a5447c890b5b7107d3c56b6a3d00b6a4e899d7f_prof);

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
