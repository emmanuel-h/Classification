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
        $__internal_77ecfb04ae50c8a4e3a56aad196888fdf485e5a7089c190560e504d42f118a42 = $this->env->getExtension("native_profiler");
        $__internal_77ecfb04ae50c8a4e3a56aad196888fdf485e5a7089c190560e504d42f118a42->enter($__internal_77ecfb04ae50c8a4e3a56aad196888fdf485e5a7089c190560e504d42f118a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ecfb04ae50c8a4e3a56aad196888fdf485e5a7089c190560e504d42f118a42->leave($__internal_77ecfb04ae50c8a4e3a56aad196888fdf485e5a7089c190560e504d42f118a42_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69cb0e2865e92ab73d1627daf709bd582b9b56226bb9455113e9c55459f0509b = $this->env->getExtension("native_profiler");
        $__internal_69cb0e2865e92ab73d1627daf709bd582b9b56226bb9455113e9c55459f0509b->enter($__internal_69cb0e2865e92ab73d1627daf709bd582b9b56226bb9455113e9c55459f0509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_69cb0e2865e92ab73d1627daf709bd582b9b56226bb9455113e9c55459f0509b->leave($__internal_69cb0e2865e92ab73d1627daf709bd582b9b56226bb9455113e9c55459f0509b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aac96cb51481915264326bfc034bd86893b8621f148a659eb1e65f035c28c7e5 = $this->env->getExtension("native_profiler");
        $__internal_aac96cb51481915264326bfc034bd86893b8621f148a659eb1e65f035c28c7e5->enter($__internal_aac96cb51481915264326bfc034bd86893b8621f148a659eb1e65f035c28c7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aac96cb51481915264326bfc034bd86893b8621f148a659eb1e65f035c28c7e5->leave($__internal_aac96cb51481915264326bfc034bd86893b8621f148a659eb1e65f035c28c7e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c8977c9f08d6de2a83d95c92328310021618b2cf0fb485c5bfb6765860b404b = $this->env->getExtension("native_profiler");
        $__internal_7c8977c9f08d6de2a83d95c92328310021618b2cf0fb485c5bfb6765860b404b->enter($__internal_7c8977c9f08d6de2a83d95c92328310021618b2cf0fb485c5bfb6765860b404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7c8977c9f08d6de2a83d95c92328310021618b2cf0fb485c5bfb6765860b404b->leave($__internal_7c8977c9f08d6de2a83d95c92328310021618b2cf0fb485c5bfb6765860b404b_prof);

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
