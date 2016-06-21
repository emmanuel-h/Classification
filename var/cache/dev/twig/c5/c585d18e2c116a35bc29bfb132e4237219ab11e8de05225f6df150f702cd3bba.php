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
        $__internal_c05766daa5fbd8f92e10e59504f036a9cf619d43fd4d170a4f0f9a5792b635d1 = $this->env->getExtension("native_profiler");
        $__internal_c05766daa5fbd8f92e10e59504f036a9cf619d43fd4d170a4f0f9a5792b635d1->enter($__internal_c05766daa5fbd8f92e10e59504f036a9cf619d43fd4d170a4f0f9a5792b635d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05766daa5fbd8f92e10e59504f036a9cf619d43fd4d170a4f0f9a5792b635d1->leave($__internal_c05766daa5fbd8f92e10e59504f036a9cf619d43fd4d170a4f0f9a5792b635d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da45ad4a42cd579c6186564cf6f60f31b75cb83b1efcb83a19b19499b2a3b9b8 = $this->env->getExtension("native_profiler");
        $__internal_da45ad4a42cd579c6186564cf6f60f31b75cb83b1efcb83a19b19499b2a3b9b8->enter($__internal_da45ad4a42cd579c6186564cf6f60f31b75cb83b1efcb83a19b19499b2a3b9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da45ad4a42cd579c6186564cf6f60f31b75cb83b1efcb83a19b19499b2a3b9b8->leave($__internal_da45ad4a42cd579c6186564cf6f60f31b75cb83b1efcb83a19b19499b2a3b9b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecd3d00883d6260e2a1c7579808a8fa95e43e06cefdf9ea5d59feb8869afbfce = $this->env->getExtension("native_profiler");
        $__internal_ecd3d00883d6260e2a1c7579808a8fa95e43e06cefdf9ea5d59feb8869afbfce->enter($__internal_ecd3d00883d6260e2a1c7579808a8fa95e43e06cefdf9ea5d59feb8869afbfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ecd3d00883d6260e2a1c7579808a8fa95e43e06cefdf9ea5d59feb8869afbfce->leave($__internal_ecd3d00883d6260e2a1c7579808a8fa95e43e06cefdf9ea5d59feb8869afbfce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bbba9197143a2ddc69ecbb31802752655aaa96d5e39d658bb448c9bfa4ab7d5 = $this->env->getExtension("native_profiler");
        $__internal_0bbba9197143a2ddc69ecbb31802752655aaa96d5e39d658bb448c9bfa4ab7d5->enter($__internal_0bbba9197143a2ddc69ecbb31802752655aaa96d5e39d658bb448c9bfa4ab7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0bbba9197143a2ddc69ecbb31802752655aaa96d5e39d658bb448c9bfa4ab7d5->leave($__internal_0bbba9197143a2ddc69ecbb31802752655aaa96d5e39d658bb448c9bfa4ab7d5_prof);

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
