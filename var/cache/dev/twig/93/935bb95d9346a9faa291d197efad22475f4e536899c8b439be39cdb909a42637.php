<?php

/* @LIFOClassif/Platform/recherche.html.twig */
class __TwigTemplate_197a2bc7dbeeae78a123c058f6ba898579a32e6e18909d6330a667da26ba2579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/recherche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb05d6f79b85f1326e0cfa1d6c664bb135833343fa73c3d13009e74755f04fca = $this->env->getExtension("native_profiler");
        $__internal_fb05d6f79b85f1326e0cfa1d6c664bb135833343fa73c3d13009e74755f04fca->enter($__internal_fb05d6f79b85f1326e0cfa1d6c664bb135833343fa73c3d13009e74755f04fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb05d6f79b85f1326e0cfa1d6c664bb135833343fa73c3d13009e74755f04fca->leave($__internal_fb05d6f79b85f1326e0cfa1d6c664bb135833343fa73c3d13009e74755f04fca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fff968ea33620356c9d624d6a79d2c3a930757dd3b4b07e2005828755046317 = $this->env->getExtension("native_profiler");
        $__internal_8fff968ea33620356c9d624d6a79d2c3a930757dd3b4b07e2005828755046317->enter($__internal_8fff968ea33620356c9d624d6a79d2c3a930757dd3b4b07e2005828755046317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_8fff968ea33620356c9d624d6a79d2c3a930757dd3b4b07e2005828755046317->leave($__internal_8fff968ea33620356c9d624d6a79d2c3a930757dd3b4b07e2005828755046317_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ea18a8c028dad14d9174b23890ee23ded1c1449cea7a4ca3453d7df963027e80 = $this->env->getExtension("native_profiler");
        $__internal_ea18a8c028dad14d9174b23890ee23ded1c1449cea7a4ca3453d7df963027e80->enter($__internal_ea18a8c028dad14d9174b23890ee23ded1c1449cea7a4ca3453d7df963027e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t<p>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</p>
";
        
        $__internal_ea18a8c028dad14d9174b23890ee23ded1c1449cea7a4ca3453d7df963027e80->leave($__internal_ea18a8c028dad14d9174b23890ee23ded1c1449cea7a4ca3453d7df963027e80_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	<p>*/
/* 	{{ form(form) }}*/
/* 	</p>*/
/* {% endblock %}*/
