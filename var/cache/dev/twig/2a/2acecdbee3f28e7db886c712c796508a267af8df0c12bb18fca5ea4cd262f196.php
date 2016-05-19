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
        $__internal_bd4aa97f3fe6d7a2124371ad941ddb8ce673a29ef7a57b97c5b524cda777b852 = $this->env->getExtension("native_profiler");
        $__internal_bd4aa97f3fe6d7a2124371ad941ddb8ce673a29ef7a57b97c5b524cda777b852->enter($__internal_bd4aa97f3fe6d7a2124371ad941ddb8ce673a29ef7a57b97c5b524cda777b852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd4aa97f3fe6d7a2124371ad941ddb8ce673a29ef7a57b97c5b524cda777b852->leave($__internal_bd4aa97f3fe6d7a2124371ad941ddb8ce673a29ef7a57b97c5b524cda777b852_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8fa9f35636cc8266f9b78456d3141cf082ecc5a91b24074554ce478840d7013 = $this->env->getExtension("native_profiler");
        $__internal_f8fa9f35636cc8266f9b78456d3141cf082ecc5a91b24074554ce478840d7013->enter($__internal_f8fa9f35636cc8266f9b78456d3141cf082ecc5a91b24074554ce478840d7013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8fa9f35636cc8266f9b78456d3141cf082ecc5a91b24074554ce478840d7013->leave($__internal_f8fa9f35636cc8266f9b78456d3141cf082ecc5a91b24074554ce478840d7013_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a290e62293c4a1df3923bd472f9ed401c4ead2ae62846090c8e3e50b2f254c4 = $this->env->getExtension("native_profiler");
        $__internal_3a290e62293c4a1df3923bd472f9ed401c4ead2ae62846090c8e3e50b2f254c4->enter($__internal_3a290e62293c4a1df3923bd472f9ed401c4ead2ae62846090c8e3e50b2f254c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a290e62293c4a1df3923bd472f9ed401c4ead2ae62846090c8e3e50b2f254c4->leave($__internal_3a290e62293c4a1df3923bd472f9ed401c4ead2ae62846090c8e3e50b2f254c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_466ebea852657b7ee13891f4df24828aaee6e969d44eaca8e1aa11bb2a25976f = $this->env->getExtension("native_profiler");
        $__internal_466ebea852657b7ee13891f4df24828aaee6e969d44eaca8e1aa11bb2a25976f->enter($__internal_466ebea852657b7ee13891f4df24828aaee6e969d44eaca8e1aa11bb2a25976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_466ebea852657b7ee13891f4df24828aaee6e969d44eaca8e1aa11bb2a25976f->leave($__internal_466ebea852657b7ee13891f4df24828aaee6e969d44eaca8e1aa11bb2a25976f_prof);

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
