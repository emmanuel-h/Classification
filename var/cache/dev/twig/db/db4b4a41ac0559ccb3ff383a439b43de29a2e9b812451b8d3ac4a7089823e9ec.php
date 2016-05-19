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
        $__internal_f4af29bda605115fa1d6f7d5c8331b774e66f743fdd6263371f997dae9cd8166 = $this->env->getExtension("native_profiler");
        $__internal_f4af29bda605115fa1d6f7d5c8331b774e66f743fdd6263371f997dae9cd8166->enter($__internal_f4af29bda605115fa1d6f7d5c8331b774e66f743fdd6263371f997dae9cd8166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
\t";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
            echo "\">Administration</a>
\t";
        }
        // line 25
        echo "\t<br/>
\t<br/>
      </p>
    </div>
 
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\"></div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo " 
  </div>

\t";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "  </body>
</html>";
        
        $__internal_f4af29bda605115fa1d6f7d5c8331b774e66f743fdd6263371f997dae9cd8166->leave($__internal_f4af29bda605115fa1d6f7d5c8331b774e66f743fdd6263371f997dae9cd8166_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2541ece45b74a49c4e3d986e3fae85c413580d7d6533cf57326f815a7631e56 = $this->env->getExtension("native_profiler");
        $__internal_b2541ece45b74a49c4e3d986e3fae85c413580d7d6533cf57326f815a7631e56->enter($__internal_b2541ece45b74a49c4e3d986e3fae85c413580d7d6533cf57326f815a7631e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_b2541ece45b74a49c4e3d986e3fae85c413580d7d6533cf57326f815a7631e56->leave($__internal_b2541ece45b74a49c4e3d986e3fae85c413580d7d6533cf57326f815a7631e56_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a5a1e5e5804f874759cc43ce145e85b07babb421f1b8dd10ffa58fb1c5a1e9 = $this->env->getExtension("native_profiler");
        $__internal_47a5a1e5e5804f874759cc43ce145e85b07babb421f1b8dd10ffa58fb1c5a1e9->enter($__internal_47a5a1e5e5804f874759cc43ce145e85b07babb421f1b8dd10ffa58fb1c5a1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "      ";
        
        $__internal_47a5a1e5e5804f874759cc43ce145e85b07babb421f1b8dd10ffa58fb1c5a1e9->leave($__internal_47a5a1e5e5804f874759cc43ce145e85b07babb421f1b8dd10ffa58fb1c5a1e9_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_547c6e38a9aaba41fca88fe367b9b05e45b9de6c0b8a5f8d00bde3d8ddf80795 = $this->env->getExtension("native_profiler");
        $__internal_547c6e38a9aaba41fca88fe367b9b05e45b9de6c0b8a5f8d00bde3d8ddf80795->enter($__internal_547c6e38a9aaba41fca88fe367b9b05e45b9de6c0b8a5f8d00bde3d8ddf80795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "    ";
        
        $__internal_547c6e38a9aaba41fca88fe367b9b05e45b9de6c0b8a5f8d00bde3d8ddf80795->leave($__internal_547c6e38a9aaba41fca88fe367b9b05e45b9de6c0b8a5f8d00bde3d8ddf80795_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b8d82313d37754c8c4edba43aa36f09ff734331c39838e4534312685f8f59f7 = $this->env->getExtension("native_profiler");
        $__internal_5b8d82313d37754c8c4edba43aa36f09ff734331c39838e4534312685f8f59f7->enter($__internal_5b8d82313d37754c8c4edba43aa36f09ff734331c39838e4534312685f8f59f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_5b8d82313d37754c8c4edba43aa36f09ff734331c39838e4534312685f8f59f7->leave($__internal_5b8d82313d37754c8c4edba43aa36f09ff734331c39838e4534312685f8f59f7_prof);

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
        return array (  156 => 48,  150 => 47,  143 => 43,  137 => 42,  130 => 35,  124 => 34,  112 => 6,  104 => 51,  102 => 47,  97 => 44,  95 => 42,  87 => 36,  85 => 34,  74 => 25,  68 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
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
/* 	{% if is_granted('ROLE_ADMIN') %}*/
/* 		<a href="{{ path('lifo_classif_admin') }}">Administration</a>*/
/* 	{% endif %}*/
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
