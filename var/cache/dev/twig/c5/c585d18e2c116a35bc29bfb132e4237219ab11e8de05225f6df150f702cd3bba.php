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
        $__internal_34837a08f8def0c497b93d9280c9d2494bc22b873b3973446dc0269bd2f844ac = $this->env->getExtension("native_profiler");
        $__internal_34837a08f8def0c497b93d9280c9d2494bc22b873b3973446dc0269bd2f844ac->enter($__internal_34837a08f8def0c497b93d9280c9d2494bc22b873b3973446dc0269bd2f844ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34837a08f8def0c497b93d9280c9d2494bc22b873b3973446dc0269bd2f844ac->leave($__internal_34837a08f8def0c497b93d9280c9d2494bc22b873b3973446dc0269bd2f844ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a24dab575964fae3ca142ab361c748d2d72c0f5c9fb2d8d90feb648d5707bc2 = $this->env->getExtension("native_profiler");
        $__internal_3a24dab575964fae3ca142ab361c748d2d72c0f5c9fb2d8d90feb648d5707bc2->enter($__internal_3a24dab575964fae3ca142ab361c748d2d72c0f5c9fb2d8d90feb648d5707bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a24dab575964fae3ca142ab361c748d2d72c0f5c9fb2d8d90feb648d5707bc2->leave($__internal_3a24dab575964fae3ca142ab361c748d2d72c0f5c9fb2d8d90feb648d5707bc2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02667401e5cdb31d4e6927fcf691d1f3d723901c4d251db8091f620f8aa0d692 = $this->env->getExtension("native_profiler");
        $__internal_02667401e5cdb31d4e6927fcf691d1f3d723901c4d251db8091f620f8aa0d692->enter($__internal_02667401e5cdb31d4e6927fcf691d1f3d723901c4d251db8091f620f8aa0d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02667401e5cdb31d4e6927fcf691d1f3d723901c4d251db8091f620f8aa0d692->leave($__internal_02667401e5cdb31d4e6927fcf691d1f3d723901c4d251db8091f620f8aa0d692_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a5cdc474e66a691e7a2c0d2d258893defc9b476835484a00c085d9e596a2c2e = $this->env->getExtension("native_profiler");
        $__internal_8a5cdc474e66a691e7a2c0d2d258893defc9b476835484a00c085d9e596a2c2e->enter($__internal_8a5cdc474e66a691e7a2c0d2d258893defc9b476835484a00c085d9e596a2c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8a5cdc474e66a691e7a2c0d2d258893defc9b476835484a00c085d9e596a2c2e->leave($__internal_8a5cdc474e66a691e7a2c0d2d258893defc9b476835484a00c085d9e596a2c2e_prof);

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
