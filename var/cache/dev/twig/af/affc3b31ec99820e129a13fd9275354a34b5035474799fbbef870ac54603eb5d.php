<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c0360af296ec0b5dcbb3cf65ecb1d65bc583972ab0a687bc14a51d5fc911d3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_81afa38bf74a2192652ff84f21c434782f5d0959aa33fccc5aa87171732baa06 = $this->env->getExtension("native_profiler");
        $__internal_81afa38bf74a2192652ff84f21c434782f5d0959aa33fccc5aa87171732baa06->enter($__internal_81afa38bf74a2192652ff84f21c434782f5d0959aa33fccc5aa87171732baa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81afa38bf74a2192652ff84f21c434782f5d0959aa33fccc5aa87171732baa06->leave($__internal_81afa38bf74a2192652ff84f21c434782f5d0959aa33fccc5aa87171732baa06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a210784c13bfe4dc1ff67af44a519b90a253bcdd587e9bf60c75808865fc2aed = $this->env->getExtension("native_profiler");
        $__internal_a210784c13bfe4dc1ff67af44a519b90a253bcdd587e9bf60c75808865fc2aed->enter($__internal_a210784c13bfe4dc1ff67af44a519b90a253bcdd587e9bf60c75808865fc2aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a210784c13bfe4dc1ff67af44a519b90a253bcdd587e9bf60c75808865fc2aed->leave($__internal_a210784c13bfe4dc1ff67af44a519b90a253bcdd587e9bf60c75808865fc2aed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd9fa5e556ad7780bab0bc202450b1044297ac98ef273145d4ba2a9e59ebe19a = $this->env->getExtension("native_profiler");
        $__internal_fd9fa5e556ad7780bab0bc202450b1044297ac98ef273145d4ba2a9e59ebe19a->enter($__internal_fd9fa5e556ad7780bab0bc202450b1044297ac98ef273145d4ba2a9e59ebe19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd9fa5e556ad7780bab0bc202450b1044297ac98ef273145d4ba2a9e59ebe19a->leave($__internal_fd9fa5e556ad7780bab0bc202450b1044297ac98ef273145d4ba2a9e59ebe19a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c425ecf86febecf6e49e71f18820fe893359d29b6106f628e6b5385d6dab5d0b = $this->env->getExtension("native_profiler");
        $__internal_c425ecf86febecf6e49e71f18820fe893359d29b6106f628e6b5385d6dab5d0b->enter($__internal_c425ecf86febecf6e49e71f18820fe893359d29b6106f628e6b5385d6dab5d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c425ecf86febecf6e49e71f18820fe893359d29b6106f628e6b5385d6dab5d0b->leave($__internal_c425ecf86febecf6e49e71f18820fe893359d29b6106f628e6b5385d6dab5d0b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
