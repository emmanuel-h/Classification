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
        $__internal_12de7c72c5eaac9bd36e8ea94ff8a1416b696279a5f35c31190bebf867d25f98 = $this->env->getExtension("native_profiler");
        $__internal_12de7c72c5eaac9bd36e8ea94ff8a1416b696279a5f35c31190bebf867d25f98->enter($__internal_12de7c72c5eaac9bd36e8ea94ff8a1416b696279a5f35c31190bebf867d25f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12de7c72c5eaac9bd36e8ea94ff8a1416b696279a5f35c31190bebf867d25f98->leave($__internal_12de7c72c5eaac9bd36e8ea94ff8a1416b696279a5f35c31190bebf867d25f98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af1f4264d979fc33fd0fa6a1263a3590abb48b80a1b8084f9ee3008489ef93fc = $this->env->getExtension("native_profiler");
        $__internal_af1f4264d979fc33fd0fa6a1263a3590abb48b80a1b8084f9ee3008489ef93fc->enter($__internal_af1f4264d979fc33fd0fa6a1263a3590abb48b80a1b8084f9ee3008489ef93fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_af1f4264d979fc33fd0fa6a1263a3590abb48b80a1b8084f9ee3008489ef93fc->leave($__internal_af1f4264d979fc33fd0fa6a1263a3590abb48b80a1b8084f9ee3008489ef93fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db20e68f32cf6229537eab1fbe68c8123c14074a7e7e796b635ae916c6f4f49a = $this->env->getExtension("native_profiler");
        $__internal_db20e68f32cf6229537eab1fbe68c8123c14074a7e7e796b635ae916c6f4f49a->enter($__internal_db20e68f32cf6229537eab1fbe68c8123c14074a7e7e796b635ae916c6f4f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db20e68f32cf6229537eab1fbe68c8123c14074a7e7e796b635ae916c6f4f49a->leave($__internal_db20e68f32cf6229537eab1fbe68c8123c14074a7e7e796b635ae916c6f4f49a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0ca09a723255f870467d56afc681a85fe53bb56e80b0a0980880f29714f5e12 = $this->env->getExtension("native_profiler");
        $__internal_a0ca09a723255f870467d56afc681a85fe53bb56e80b0a0980880f29714f5e12->enter($__internal_a0ca09a723255f870467d56afc681a85fe53bb56e80b0a0980880f29714f5e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0ca09a723255f870467d56afc681a85fe53bb56e80b0a0980880f29714f5e12->leave($__internal_a0ca09a723255f870467d56afc681a85fe53bb56e80b0a0980880f29714f5e12_prof);

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
