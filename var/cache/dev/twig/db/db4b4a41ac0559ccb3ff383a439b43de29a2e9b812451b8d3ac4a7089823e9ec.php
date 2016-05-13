<?php

/* ::layout.html.twig */
class __TwigTemplate_e9555ec78be19d9f886969a9c6744a1893cbc09a129f7331bcb6f6965f2d1b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2306a37ff881fa7314492e994cbeee697ef188a58105421e0915bd055e880c52 = $this->env->getExtension("native_profiler");
        $__internal_2306a37ff881fa7314492e994cbeee697ef188a58105421e0915bd055e880c52->enter($__internal_2306a37ff881fa7314492e994cbeee697ef188a58105421e0915bd055e880c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 8
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
   ";
        // line 10
        echo "  </head>
  <body>

\t
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1></h1>
      <p>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("lifo_classif_telechargement");
        echo "\">Téléchargement</a>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Upload</a>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a>
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
        echo "\">Administration</a>
\t<br/>
\t<br/>
      </p>
    </div>
 
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\"></div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo " 
  </div>

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "  </body>
</html>";
        
        $__internal_2306a37ff881fa7314492e994cbeee697ef188a58105421e0915bd055e880c52->leave($__internal_2306a37ff881fa7314492e994cbeee697ef188a58105421e0915bd055e880c52_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f295c6301c44e71adc8911fbe3db7b2f748d89379ec16b423a1c5758ff2a7bd = $this->env->getExtension("native_profiler");
        $__internal_0f295c6301c44e71adc8911fbe3db7b2f748d89379ec16b423a1c5758ff2a7bd->enter($__internal_0f295c6301c44e71adc8911fbe3db7b2f748d89379ec16b423a1c5758ff2a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_0f295c6301c44e71adc8911fbe3db7b2f748d89379ec16b423a1c5758ff2a7bd->leave($__internal_0f295c6301c44e71adc8911fbe3db7b2f748d89379ec16b423a1c5758ff2a7bd_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1eda4b0a5e74f82fc0ef57c0324c5833f02a7e7e23993a5d1d4b9b2082e97e1 = $this->env->getExtension("native_profiler");
        $__internal_a1eda4b0a5e74f82fc0ef57c0324c5833f02a7e7e23993a5d1d4b9b2082e97e1->enter($__internal_a1eda4b0a5e74f82fc0ef57c0324c5833f02a7e7e23993a5d1d4b9b2082e97e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "      ";
        
        $__internal_a1eda4b0a5e74f82fc0ef57c0324c5833f02a7e7e23993a5d1d4b9b2082e97e1->leave($__internal_a1eda4b0a5e74f82fc0ef57c0324c5833f02a7e7e23993a5d1d4b9b2082e97e1_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9b69f559b4c148b9b1ea0373b0c4a654fcdd4b61b7e55d069484e8b7c6a1857e = $this->env->getExtension("native_profiler");
        $__internal_9b69f559b4c148b9b1ea0373b0c4a654fcdd4b61b7e55d069484e8b7c6a1857e->enter($__internal_9b69f559b4c148b9b1ea0373b0c4a654fcdd4b61b7e55d069484e8b7c6a1857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "    ";
        
        $__internal_9b69f559b4c148b9b1ea0373b0c4a654fcdd4b61b7e55d069484e8b7c6a1857e->leave($__internal_9b69f559b4c148b9b1ea0373b0c4a654fcdd4b61b7e55d069484e8b7c6a1857e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e5ed7475f8a4fd1bc1d4b3cb0ec1364a63ffe85a16409ea870320b0ef0f8f62 = $this->env->getExtension("native_profiler");
        $__internal_7e5ed7475f8a4fd1bc1d4b3cb0ec1364a63ffe85a16409ea870320b0ef0f8f62->enter($__internal_7e5ed7475f8a4fd1bc1d4b3cb0ec1364a63ffe85a16409ea870320b0ef0f8f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_7e5ed7475f8a4fd1bc1d4b3cb0ec1364a63ffe85a16409ea870320b0ef0f8f62->leave($__internal_7e5ed7475f8a4fd1bc1d4b3cb0ec1364a63ffe85a16409ea870320b0ef0f8f62_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  144 => 45,  137 => 41,  131 => 40,  124 => 33,  118 => 32,  106 => 6,  98 => 49,  96 => 45,  91 => 42,  89 => 40,  81 => 34,  79 => 32,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Classification{% endblock %}</title>*/
/* 	{# {% block stylesheets %} #}*/
/* 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*    {# {% endblock %} #}*/
/*   </head>*/
/*   <body>*/
/* */
/* 	*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1></h1>*/
/*       <p>*/
/*     <a href="{{ path('lifo_classif_telechargement') }}">Téléchargement</a>*/
/*     <a href="{{ path('lifo_classif_upload') }}">Upload</a>*/
/*     <a href="{{ path('lifo_classif_recherche') }}">Recherche</a>*/
/*     <a href="{{ path('lifo_classif_classification') }}">Classification</a>*/
/*     <a href="{{ path('lifo_classif_admin') }}">Administration</a>*/
/* 	<br/>*/
/* 	<br/>*/
/*       </p>*/
/*     </div>*/
/*  */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3"></div>*/
/*  */
/*       <div id="content" class="col-md-9">*/
/*       {% block body %}*/
/*       {% endblock %}*/
/*       </div>*/
/*  */
/*     </div>*/
/*  */
/*     <hr>*/
/*  */
/*     {% block footer %}*/
/*     {% endblock %}*/
/*  */
/*   </div>*/
/* */
/* 	{% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/*   </body>*/
/* </html>*/
