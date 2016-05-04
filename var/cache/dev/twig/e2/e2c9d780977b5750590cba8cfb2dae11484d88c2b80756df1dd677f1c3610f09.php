<?php

/* LIFOClassifBundle::layout.html.twig */
class __TwigTemplate_d4f49b0a226a39a22fd6f1a094c01c90b7f102591dab4517fdd7aa9cdb591585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c7a1496981640cbf5a1bf66890456823a32a9093c2d6eb00f61f00bcd0a1a9f = $this->env->getExtension("native_profiler");
        $__internal_4c7a1496981640cbf5a1bf66890456823a32a9093c2d6eb00f61f00bcd0a1a9f->enter($__internal_4c7a1496981640cbf5a1bf66890456823a32a9093c2d6eb00f61f00bcd0a1a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
   ";
        // line 9
        echo "  </head>
  <body>

    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
\t";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "  </body>
</html>";
        
        $__internal_4c7a1496981640cbf5a1bf66890456823a32a9093c2d6eb00f61f00bcd0a1a9f->leave($__internal_4c7a1496981640cbf5a1bf66890456823a32a9093c2d6eb00f61f00bcd0a1a9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_abcb78c88e0a1ddc898c2890f380f59c42de3ad9f21a13205d8e1644b8567080 = $this->env->getExtension("native_profiler");
        $__internal_abcb78c88e0a1ddc898c2890f380f59c42de3ad9f21a13205d8e1644b8567080->enter($__internal_abcb78c88e0a1ddc898c2890f380f59c42de3ad9f21a13205d8e1644b8567080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_abcb78c88e0a1ddc898c2890f380f59c42de3ad9f21a13205d8e1644b8567080->leave($__internal_abcb78c88e0a1ddc898c2890f380f59c42de3ad9f21a13205d8e1644b8567080_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef7ad81a3c72efdb4c59ebbf3cf88d15666e844ad45cc8002331ca236cc65dee = $this->env->getExtension("native_profiler");
        $__internal_ef7ad81a3c72efdb4c59ebbf3cf88d15666e844ad45cc8002331ca236cc65dee->enter($__internal_ef7ad81a3c72efdb4c59ebbf3cf88d15666e844ad45cc8002331ca236cc65dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("lifo_classif_telechargement");
        echo "\">Téléchargement</a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Upload</a>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("lifo_classif_tesson");
        echo "\">Tesson</a>
\t<br/>
\t<br/>
    ";
        
        $__internal_ef7ad81a3c72efdb4c59ebbf3cf88d15666e844ad45cc8002331ca236cc65dee->leave($__internal_ef7ad81a3c72efdb4c59ebbf3cf88d15666e844ad45cc8002331ca236cc65dee_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbbcf02abcd0031fa8fd62edd0314dbcef3efae611009ff58064ad5b94b8dfc0 = $this->env->getExtension("native_profiler");
        $__internal_fbbcf02abcd0031fa8fd62edd0314dbcef3efae611009ff58064ad5b94b8dfc0->enter($__internal_fbbcf02abcd0031fa8fd62edd0314dbcef3efae611009ff58064ad5b94b8dfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_fbbcf02abcd0031fa8fd62edd0314dbcef3efae611009ff58064ad5b94b8dfc0->leave($__internal_fbbcf02abcd0031fa8fd62edd0314dbcef3efae611009ff58064ad5b94b8dfc0_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  104 => 22,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  76 => 13,  70 => 12,  58 => 5,  50 => 26,  48 => 22,  45 => 21,  43 => 12,  38 => 9,  35 => 7,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Classification{% endblock %}</title>*/
/* 	{# {% block stylesheets %} #}*/
/* 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*    {# {% endblock %} #}*/
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
/* 	{% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/*   </body>*/
/* </html>*/
