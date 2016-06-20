<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67cce9b36212582a222966abe82407419125e8d91d09bc8f10cbc822c2efa666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_671e477a8b5a02cd3679b790b3f68f843ef6dbe929bd8b55ef6276a0c87da846 = $this->env->getExtension("native_profiler");
        $__internal_671e477a8b5a02cd3679b790b3f68f843ef6dbe929bd8b55ef6276a0c87da846->enter($__internal_671e477a8b5a02cd3679b790b3f68f843ef6dbe929bd8b55ef6276a0c87da846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_671e477a8b5a02cd3679b790b3f68f843ef6dbe929bd8b55ef6276a0c87da846->leave($__internal_671e477a8b5a02cd3679b790b3f68f843ef6dbe929bd8b55ef6276a0c87da846_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f8abddc74f91464073ad62b989e47e53a764c82197653245552e9deeb490f5d = $this->env->getExtension("native_profiler");
        $__internal_4f8abddc74f91464073ad62b989e47e53a764c82197653245552e9deeb490f5d->enter($__internal_4f8abddc74f91464073ad62b989e47e53a764c82197653245552e9deeb490f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4f8abddc74f91464073ad62b989e47e53a764c82197653245552e9deeb490f5d->leave($__internal_4f8abddc74f91464073ad62b989e47e53a764c82197653245552e9deeb490f5d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a37b87351abd743ccc4cd8c6065a4aa7adcfb8b222acd4095dd9df50d64356c8 = $this->env->getExtension("native_profiler");
        $__internal_a37b87351abd743ccc4cd8c6065a4aa7adcfb8b222acd4095dd9df50d64356c8->enter($__internal_a37b87351abd743ccc4cd8c6065a4aa7adcfb8b222acd4095dd9df50d64356c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a37b87351abd743ccc4cd8c6065a4aa7adcfb8b222acd4095dd9df50d64356c8->leave($__internal_a37b87351abd743ccc4cd8c6065a4aa7adcfb8b222acd4095dd9df50d64356c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc648efadf44ae8838119a176d291f42a749aa65b8891b4a78b48b00960505a = $this->env->getExtension("native_profiler");
        $__internal_cbc648efadf44ae8838119a176d291f42a749aa65b8891b4a78b48b00960505a->enter($__internal_cbc648efadf44ae8838119a176d291f42a749aa65b8891b4a78b48b00960505a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cbc648efadf44ae8838119a176d291f42a749aa65b8891b4a78b48b00960505a->leave($__internal_cbc648efadf44ae8838119a176d291f42a749aa65b8891b4a78b48b00960505a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
