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
        $__internal_176b89f9bbefbe973f7c325bf9b4918385acd00a5777eee19814507da5d2b1cc = $this->env->getExtension("native_profiler");
        $__internal_176b89f9bbefbe973f7c325bf9b4918385acd00a5777eee19814507da5d2b1cc->enter($__internal_176b89f9bbefbe973f7c325bf9b4918385acd00a5777eee19814507da5d2b1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176b89f9bbefbe973f7c325bf9b4918385acd00a5777eee19814507da5d2b1cc->leave($__internal_176b89f9bbefbe973f7c325bf9b4918385acd00a5777eee19814507da5d2b1cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5cc87290a436a4e6621d190fbe28adc28c9155ead840c10652b0582c179ea0fb = $this->env->getExtension("native_profiler");
        $__internal_5cc87290a436a4e6621d190fbe28adc28c9155ead840c10652b0582c179ea0fb->enter($__internal_5cc87290a436a4e6621d190fbe28adc28c9155ead840c10652b0582c179ea0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5cc87290a436a4e6621d190fbe28adc28c9155ead840c10652b0582c179ea0fb->leave($__internal_5cc87290a436a4e6621d190fbe28adc28c9155ead840c10652b0582c179ea0fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c47fcb356cadc1f3420ad4caeeff79515bfc74d8bda7ba39976a339e9477a060 = $this->env->getExtension("native_profiler");
        $__internal_c47fcb356cadc1f3420ad4caeeff79515bfc74d8bda7ba39976a339e9477a060->enter($__internal_c47fcb356cadc1f3420ad4caeeff79515bfc74d8bda7ba39976a339e9477a060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c47fcb356cadc1f3420ad4caeeff79515bfc74d8bda7ba39976a339e9477a060->leave($__internal_c47fcb356cadc1f3420ad4caeeff79515bfc74d8bda7ba39976a339e9477a060_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a02368fb8e9b166efeefb7ac351162b0be0ad2d369cb898bb3fbbafc2bc4049 = $this->env->getExtension("native_profiler");
        $__internal_1a02368fb8e9b166efeefb7ac351162b0be0ad2d369cb898bb3fbbafc2bc4049->enter($__internal_1a02368fb8e9b166efeefb7ac351162b0be0ad2d369cb898bb3fbbafc2bc4049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a02368fb8e9b166efeefb7ac351162b0be0ad2d369cb898bb3fbbafc2bc4049->leave($__internal_1a02368fb8e9b166efeefb7ac351162b0be0ad2d369cb898bb3fbbafc2bc4049_prof);

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
