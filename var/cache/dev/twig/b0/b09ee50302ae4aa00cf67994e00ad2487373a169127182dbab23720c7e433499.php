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
        $__internal_2ecb65ed324974b70a9f2e7573655243b9a85dc566ea34b8551945888d42d937 = $this->env->getExtension("native_profiler");
        $__internal_2ecb65ed324974b70a9f2e7573655243b9a85dc566ea34b8551945888d42d937->enter($__internal_2ecb65ed324974b70a9f2e7573655243b9a85dc566ea34b8551945888d42d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecb65ed324974b70a9f2e7573655243b9a85dc566ea34b8551945888d42d937->leave($__internal_2ecb65ed324974b70a9f2e7573655243b9a85dc566ea34b8551945888d42d937_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee5264644f582d794c47804474608f35fdb4d45e810e6d697be226efef57ddca = $this->env->getExtension("native_profiler");
        $__internal_ee5264644f582d794c47804474608f35fdb4d45e810e6d697be226efef57ddca->enter($__internal_ee5264644f582d794c47804474608f35fdb4d45e810e6d697be226efef57ddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee5264644f582d794c47804474608f35fdb4d45e810e6d697be226efef57ddca->leave($__internal_ee5264644f582d794c47804474608f35fdb4d45e810e6d697be226efef57ddca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb91acccd5565e1f7402169fdd6354bcb88b0e5596b22b20d6c23c2a45fa4a9f = $this->env->getExtension("native_profiler");
        $__internal_fb91acccd5565e1f7402169fdd6354bcb88b0e5596b22b20d6c23c2a45fa4a9f->enter($__internal_fb91acccd5565e1f7402169fdd6354bcb88b0e5596b22b20d6c23c2a45fa4a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb91acccd5565e1f7402169fdd6354bcb88b0e5596b22b20d6c23c2a45fa4a9f->leave($__internal_fb91acccd5565e1f7402169fdd6354bcb88b0e5596b22b20d6c23c2a45fa4a9f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37184fef7f6c1ca0b16596906d63a711a5d03903ed16d108a76a57af4aa3d2b1 = $this->env->getExtension("native_profiler");
        $__internal_37184fef7f6c1ca0b16596906d63a711a5d03903ed16d108a76a57af4aa3d2b1->enter($__internal_37184fef7f6c1ca0b16596906d63a711a5d03903ed16d108a76a57af4aa3d2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37184fef7f6c1ca0b16596906d63a711a5d03903ed16d108a76a57af4aa3d2b1->leave($__internal_37184fef7f6c1ca0b16596906d63a711a5d03903ed16d108a76a57af4aa3d2b1_prof);

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
