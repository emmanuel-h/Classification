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
        $__internal_5eb8a9a07df9a033732401d4eb1b0acec90816f6b6d0f80570a5ab7bba9a2f01 = $this->env->getExtension("native_profiler");
        $__internal_5eb8a9a07df9a033732401d4eb1b0acec90816f6b6d0f80570a5ab7bba9a2f01->enter($__internal_5eb8a9a07df9a033732401d4eb1b0acec90816f6b6d0f80570a5ab7bba9a2f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb8a9a07df9a033732401d4eb1b0acec90816f6b6d0f80570a5ab7bba9a2f01->leave($__internal_5eb8a9a07df9a033732401d4eb1b0acec90816f6b6d0f80570a5ab7bba9a2f01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21b5396c6d5e4ffdd56340f599b07eefa67cd9df97bba540f28e9ac5bd64acac = $this->env->getExtension("native_profiler");
        $__internal_21b5396c6d5e4ffdd56340f599b07eefa67cd9df97bba540f28e9ac5bd64acac->enter($__internal_21b5396c6d5e4ffdd56340f599b07eefa67cd9df97bba540f28e9ac5bd64acac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_21b5396c6d5e4ffdd56340f599b07eefa67cd9df97bba540f28e9ac5bd64acac->leave($__internal_21b5396c6d5e4ffdd56340f599b07eefa67cd9df97bba540f28e9ac5bd64acac_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b83b058318ff1eab9ec0ee1b9a01aa2b3839c72d82c660657fe3050e51ce117c = $this->env->getExtension("native_profiler");
        $__internal_b83b058318ff1eab9ec0ee1b9a01aa2b3839c72d82c660657fe3050e51ce117c->enter($__internal_b83b058318ff1eab9ec0ee1b9a01aa2b3839c72d82c660657fe3050e51ce117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t<p>
\t\t<font color = \"red\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
        echo "</font>
\t</p>
\t<p>
\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheID"]) ? $context["formRechercheID"] : $this->getContext($context, "formRechercheID")), 'form');
        echo "
\t</p>
\t<p>
\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheLocalisation"]) ? $context["formRechercheLocalisation"] : $this->getContext($context, "formRechercheLocalisation")), 'form');
        echo "
\t</p>
";
        
        $__internal_b83b058318ff1eab9ec0ee1b9a01aa2b3839c72d82c660657fe3050e51ce117c->leave($__internal_b83b058318ff1eab9ec0ee1b9a01aa2b3839c72d82c660657fe3050e51ce117c_prof);

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
        return array (  69 => 13,  63 => 10,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	<p>*/
/* 		<font color = "red">{{messageImportant}}</font>*/
/* 	</p>*/
/* 	<p>*/
/* 		{{ form(formRechercheID) }}*/
/* 	</p>*/
/* 	<p>*/
/* 		{{ form(formRechercheLocalisation) }}*/
/* 	</p>*/
/* {% endblock %}*/
