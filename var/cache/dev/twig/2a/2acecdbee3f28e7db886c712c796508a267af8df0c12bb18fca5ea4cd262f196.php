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
        $__internal_c79d00694045d6535699df5cbee9622d54f6d18309a027ba754b804b99c5b6e5 = $this->env->getExtension("native_profiler");
        $__internal_c79d00694045d6535699df5cbee9622d54f6d18309a027ba754b804b99c5b6e5->enter($__internal_c79d00694045d6535699df5cbee9622d54f6d18309a027ba754b804b99c5b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c79d00694045d6535699df5cbee9622d54f6d18309a027ba754b804b99c5b6e5->leave($__internal_c79d00694045d6535699df5cbee9622d54f6d18309a027ba754b804b99c5b6e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96356b7949728e2644c075725e3c5a1757292f7c5c6bd91bf628e579dba4426a = $this->env->getExtension("native_profiler");
        $__internal_96356b7949728e2644c075725e3c5a1757292f7c5c6bd91bf628e579dba4426a->enter($__internal_96356b7949728e2644c075725e3c5a1757292f7c5c6bd91bf628e579dba4426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96356b7949728e2644c075725e3c5a1757292f7c5c6bd91bf628e579dba4426a->leave($__internal_96356b7949728e2644c075725e3c5a1757292f7c5c6bd91bf628e579dba4426a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c690ad079bc09d05083d79d4ad92d8c1e8a041fabfea410446b0f6c95a909788 = $this->env->getExtension("native_profiler");
        $__internal_c690ad079bc09d05083d79d4ad92d8c1e8a041fabfea410446b0f6c95a909788->enter($__internal_c690ad079bc09d05083d79d4ad92d8c1e8a041fabfea410446b0f6c95a909788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c690ad079bc09d05083d79d4ad92d8c1e8a041fabfea410446b0f6c95a909788->leave($__internal_c690ad079bc09d05083d79d4ad92d8c1e8a041fabfea410446b0f6c95a909788_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_843a63de24bfd7635c989b7ec74ec3f663f76ea637227bcb8734af49b4d7ac14 = $this->env->getExtension("native_profiler");
        $__internal_843a63de24bfd7635c989b7ec74ec3f663f76ea637227bcb8734af49b4d7ac14->enter($__internal_843a63de24bfd7635c989b7ec74ec3f663f76ea637227bcb8734af49b4d7ac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_843a63de24bfd7635c989b7ec74ec3f663f76ea637227bcb8734af49b4d7ac14->leave($__internal_843a63de24bfd7635c989b7ec74ec3f663f76ea637227bcb8734af49b4d7ac14_prof);

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
