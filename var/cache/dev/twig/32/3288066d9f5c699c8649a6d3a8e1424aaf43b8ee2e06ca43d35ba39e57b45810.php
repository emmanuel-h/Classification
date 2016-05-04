<?php

/* @LIFOClassif/layout.html.twig */
class __TwigTemplate_f2cae39490c58d5fd618d95e7e40c21f88214b6549a76c3f5253e5bad9cf5d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddea24c6631dfcdc3e0cae52cc6cf8443006fc3de8fb801b1ce7144d36438422 = $this->env->getExtension("native_profiler");
        $__internal_ddea24c6631dfcdc3e0cae52cc6cf8443006fc3de8fb801b1ce7144d36438422->enter($__internal_ddea24c6631dfcdc3e0cae52cc6cf8443006fc3de8fb801b1ce7144d36438422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>

    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
  </body>
</html>";
        
        $__internal_ddea24c6631dfcdc3e0cae52cc6cf8443006fc3de8fb801b1ce7144d36438422->leave($__internal_ddea24c6631dfcdc3e0cae52cc6cf8443006fc3de8fb801b1ce7144d36438422_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52cde91aed76978f736ff72eaaed285db90bbbc711739aab7a6dc0a6f468f6fe = $this->env->getExtension("native_profiler");
        $__internal_52cde91aed76978f736ff72eaaed285db90bbbc711739aab7a6dc0a6f468f6fe->enter($__internal_52cde91aed76978f736ff72eaaed285db90bbbc711739aab7a6dc0a6f468f6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_52cde91aed76978f736ff72eaaed285db90bbbc711739aab7a6dc0a6f468f6fe->leave($__internal_52cde91aed76978f736ff72eaaed285db90bbbc711739aab7a6dc0a6f468f6fe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8044c86335208a9564020891f6a63612b0fdab6e7f4e3f947fd3c7c58edd5123 = $this->env->getExtension("native_profiler");
        $__internal_8044c86335208a9564020891f6a63612b0fdab6e7f4e3f947fd3c7c58edd5123->enter($__internal_8044c86335208a9564020891f6a63612b0fdab6e7f4e3f947fd3c7c58edd5123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("lifo_classif_telechargement");
        echo "\">Téléchargement</a>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Upload</a>
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a>
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("lifo_classif_tesson");
        echo "\">Tesson</a>
\t<br/>
\t<br/>
    ";
        
        $__internal_8044c86335208a9564020891f6a63612b0fdab6e7f4e3f947fd3c7c58edd5123->leave($__internal_8044c86335208a9564020891f6a63612b0fdab6e7f4e3f947fd3c7c58edd5123_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  79 => 13,  75 => 12,  71 => 11,  66 => 10,  60 => 9,  48 => 5,  39 => 18,  37 => 9,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Classification{% endblock %}</title>*/
/*   </head>*/
/*   <body>*/
/* */
/*     {% block body %}*/
/*     <a href="{{ path('lifo_classif_telechargement') }}">Téléchargement</a>*/
/*     <a href="{{ path('lifo_classif_upload') }}">Upload</a>*/
/*     <a href="{{ path('lifo_classif_recherche') }}">Recherche</a>*/
/*     <a href="{{ path('lifo_classif_classification') }}">Classification</a>*/
/*     <a href="{{ path('lifo_classif_tesson') }}">Tesson</a>*/
/* 	<br/>*/
/* 	<br/>*/
/*     {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
