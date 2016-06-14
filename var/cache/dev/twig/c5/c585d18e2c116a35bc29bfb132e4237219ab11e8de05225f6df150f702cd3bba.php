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
        $__internal_6e78825f8564cba42c3441971a562efa3515a91bd18c542c151de47854cfac9c = $this->env->getExtension("native_profiler");
        $__internal_6e78825f8564cba42c3441971a562efa3515a91bd18c542c151de47854cfac9c->enter($__internal_6e78825f8564cba42c3441971a562efa3515a91bd18c542c151de47854cfac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e78825f8564cba42c3441971a562efa3515a91bd18c542c151de47854cfac9c->leave($__internal_6e78825f8564cba42c3441971a562efa3515a91bd18c542c151de47854cfac9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59d621e320f0a7355b18a15b0e98302af7dcf5cbde606d94396e11cc90367fde = $this->env->getExtension("native_profiler");
        $__internal_59d621e320f0a7355b18a15b0e98302af7dcf5cbde606d94396e11cc90367fde->enter($__internal_59d621e320f0a7355b18a15b0e98302af7dcf5cbde606d94396e11cc90367fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_59d621e320f0a7355b18a15b0e98302af7dcf5cbde606d94396e11cc90367fde->leave($__internal_59d621e320f0a7355b18a15b0e98302af7dcf5cbde606d94396e11cc90367fde_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecaa05ddb153ac82ae56e817910ad9d4644b5b0c74b6705c3f0e2c2cbe466bfb = $this->env->getExtension("native_profiler");
        $__internal_ecaa05ddb153ac82ae56e817910ad9d4644b5b0c74b6705c3f0e2c2cbe466bfb->enter($__internal_ecaa05ddb153ac82ae56e817910ad9d4644b5b0c74b6705c3f0e2c2cbe466bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ecaa05ddb153ac82ae56e817910ad9d4644b5b0c74b6705c3f0e2c2cbe466bfb->leave($__internal_ecaa05ddb153ac82ae56e817910ad9d4644b5b0c74b6705c3f0e2c2cbe466bfb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dab864939e6b8301a51cd74f7affb09cff09688f8a47403273bfc974fd47a8e = $this->env->getExtension("native_profiler");
        $__internal_1dab864939e6b8301a51cd74f7affb09cff09688f8a47403273bfc974fd47a8e->enter($__internal_1dab864939e6b8301a51cd74f7affb09cff09688f8a47403273bfc974fd47a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1dab864939e6b8301a51cd74f7affb09cff09688f8a47403273bfc974fd47a8e->leave($__internal_1dab864939e6b8301a51cd74f7affb09cff09688f8a47403273bfc974fd47a8e_prof);

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
