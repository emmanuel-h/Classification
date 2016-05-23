<?php

/* LIFOClassifBundle:Platform:recherche.html.twig */
class __TwigTemplate_d009ef91ff410b0ab263261e5f5c37facc0417e2776bb4574da2d003a98a0764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:recherche.html.twig", 1);
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
        $__internal_88696e0f16610d0b13db76590b737b55c65c4a0a1a71c319c36654c0bcc64f55 = $this->env->getExtension("native_profiler");
        $__internal_88696e0f16610d0b13db76590b737b55c65c4a0a1a71c319c36654c0bcc64f55->enter($__internal_88696e0f16610d0b13db76590b737b55c65c4a0a1a71c319c36654c0bcc64f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88696e0f16610d0b13db76590b737b55c65c4a0a1a71c319c36654c0bcc64f55->leave($__internal_88696e0f16610d0b13db76590b737b55c65c4a0a1a71c319c36654c0bcc64f55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3980bfa2370f6eff037a093610fd7b4a7bf35e03f9fc3198a88823f87095af64 = $this->env->getExtension("native_profiler");
        $__internal_3980bfa2370f6eff037a093610fd7b4a7bf35e03f9fc3198a88823f87095af64->enter($__internal_3980bfa2370f6eff037a093610fd7b4a7bf35e03f9fc3198a88823f87095af64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_3980bfa2370f6eff037a093610fd7b4a7bf35e03f9fc3198a88823f87095af64->leave($__internal_3980bfa2370f6eff037a093610fd7b4a7bf35e03f9fc3198a88823f87095af64_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_47f3c11b6732d096b4a103850180758ece4cba89ca0d8a41f832aa902afee456 = $this->env->getExtension("native_profiler");
        $__internal_47f3c11b6732d096b4a103850180758ece4cba89ca0d8a41f832aa902afee456->enter($__internal_47f3c11b6732d096b4a103850180758ece4cba89ca0d8a41f832aa902afee456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "<div class=\"well\">
\t<p>
\t\t<font color = \"red\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
        echo "</font>
\t</p>
\t<p>
\t\t<fieldset>
\t\t\t<legend>Rechercher par identifiant</legend>
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheID"]) ? $context["formRechercheID"] : $this->getContext($context, "formRechercheID")), 'form');
        echo "
\t\t</fieldset>
\t</p>
\t<p>
\t\t<fieldset>
\t\t\t<legend> Rechercher par localisation </legend>
\t\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheLocalisation"]) ? $context["formRechercheLocalisation"] : $this->getContext($context, "formRechercheLocalisation")), 'form');
        echo "
\t\t</fieldset>
\t</p>
<div>
";
        
        $__internal_47f3c11b6732d096b4a103850180758ece4cba89ca0d8a41f832aa902afee456->leave($__internal_47f3c11b6732d096b4a103850180758ece4cba89ca0d8a41f832aa902afee456_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  66 => 13,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* <div class="well">*/
/* 	<p>*/
/* 		<font color = "red">{{messageImportant}}</font>*/
/* 	</p>*/
/* 	<p>*/
/* 		<fieldset>*/
/* 			<legend>Rechercher par identifiant</legend>*/
/* 			{{ form(formRechercheID) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* 	<p>*/
/* 		<fieldset>*/
/* 			<legend> Rechercher par localisation </legend>*/
/* 			{{ form(formRechercheLocalisation) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* <div>*/
/* {% endblock %}*/
