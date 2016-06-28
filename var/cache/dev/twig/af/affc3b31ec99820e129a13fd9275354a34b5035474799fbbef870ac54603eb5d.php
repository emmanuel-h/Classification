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
        $__internal_5e6fadd01928665ecf0d065499a5329567a69e8ae83cfbdb96bbf902c3954367 = $this->env->getExtension("native_profiler");
        $__internal_5e6fadd01928665ecf0d065499a5329567a69e8ae83cfbdb96bbf902c3954367->enter($__internal_5e6fadd01928665ecf0d065499a5329567a69e8ae83cfbdb96bbf902c3954367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e6fadd01928665ecf0d065499a5329567a69e8ae83cfbdb96bbf902c3954367->leave($__internal_5e6fadd01928665ecf0d065499a5329567a69e8ae83cfbdb96bbf902c3954367_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29702cae1bc888c3644546651f6feeee7efb3a6cc2f56cdbe24cc3fad57f8960 = $this->env->getExtension("native_profiler");
        $__internal_29702cae1bc888c3644546651f6feeee7efb3a6cc2f56cdbe24cc3fad57f8960->enter($__internal_29702cae1bc888c3644546651f6feeee7efb3a6cc2f56cdbe24cc3fad57f8960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29702cae1bc888c3644546651f6feeee7efb3a6cc2f56cdbe24cc3fad57f8960->leave($__internal_29702cae1bc888c3644546651f6feeee7efb3a6cc2f56cdbe24cc3fad57f8960_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_583ffaf7170c1f05bc30e6bef45df637b9e9937cfe3dcc95ece36e720868c082 = $this->env->getExtension("native_profiler");
        $__internal_583ffaf7170c1f05bc30e6bef45df637b9e9937cfe3dcc95ece36e720868c082->enter($__internal_583ffaf7170c1f05bc30e6bef45df637b9e9937cfe3dcc95ece36e720868c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_583ffaf7170c1f05bc30e6bef45df637b9e9937cfe3dcc95ece36e720868c082->leave($__internal_583ffaf7170c1f05bc30e6bef45df637b9e9937cfe3dcc95ece36e720868c082_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45e84ed2f2254006d37d943f1078eaa3909f3b61dce65d0a6e6029abfd7e1755 = $this->env->getExtension("native_profiler");
        $__internal_45e84ed2f2254006d37d943f1078eaa3909f3b61dce65d0a6e6029abfd7e1755->enter($__internal_45e84ed2f2254006d37d943f1078eaa3909f3b61dce65d0a6e6029abfd7e1755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_45e84ed2f2254006d37d943f1078eaa3909f3b61dce65d0a6e6029abfd7e1755->leave($__internal_45e84ed2f2254006d37d943f1078eaa3909f3b61dce65d0a6e6029abfd7e1755_prof);

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
