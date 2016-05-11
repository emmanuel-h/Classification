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
        $__internal_4d1c3f9c85ba5d9b42b9cea879ce6a6ecd9573507f9ef6fe677a42abf54697af = $this->env->getExtension("native_profiler");
        $__internal_4d1c3f9c85ba5d9b42b9cea879ce6a6ecd9573507f9ef6fe677a42abf54697af->enter($__internal_4d1c3f9c85ba5d9b42b9cea879ce6a6ecd9573507f9ef6fe677a42abf54697af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("lifo_classif_tesson");
        echo "\">Tesson</a>
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
        
        $__internal_4d1c3f9c85ba5d9b42b9cea879ce6a6ecd9573507f9ef6fe677a42abf54697af->leave($__internal_4d1c3f9c85ba5d9b42b9cea879ce6a6ecd9573507f9ef6fe677a42abf54697af_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f29d3d0a432174a28d09cfbf4e7742640aa454fe92ac21c487144dc7caa58cc1 = $this->env->getExtension("native_profiler");
        $__internal_f29d3d0a432174a28d09cfbf4e7742640aa454fe92ac21c487144dc7caa58cc1->enter($__internal_f29d3d0a432174a28d09cfbf4e7742640aa454fe92ac21c487144dc7caa58cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_f29d3d0a432174a28d09cfbf4e7742640aa454fe92ac21c487144dc7caa58cc1->leave($__internal_f29d3d0a432174a28d09cfbf4e7742640aa454fe92ac21c487144dc7caa58cc1_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c9d93e5857dfce7a8e7138dc4d7d1a6405b511a05269d1194aae90e71274b5a = $this->env->getExtension("native_profiler");
        $__internal_7c9d93e5857dfce7a8e7138dc4d7d1a6405b511a05269d1194aae90e71274b5a->enter($__internal_7c9d93e5857dfce7a8e7138dc4d7d1a6405b511a05269d1194aae90e71274b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "      ";
        
        $__internal_7c9d93e5857dfce7a8e7138dc4d7d1a6405b511a05269d1194aae90e71274b5a->leave($__internal_7c9d93e5857dfce7a8e7138dc4d7d1a6405b511a05269d1194aae90e71274b5a_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6297559086ac70fd410420091a70fa298a8a86a959576c6f19be2ae9615b9ed8 = $this->env->getExtension("native_profiler");
        $__internal_6297559086ac70fd410420091a70fa298a8a86a959576c6f19be2ae9615b9ed8->enter($__internal_6297559086ac70fd410420091a70fa298a8a86a959576c6f19be2ae9615b9ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "    ";
        
        $__internal_6297559086ac70fd410420091a70fa298a8a86a959576c6f19be2ae9615b9ed8->leave($__internal_6297559086ac70fd410420091a70fa298a8a86a959576c6f19be2ae9615b9ed8_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb7e4eaff1d06e5900bfc331cbc26c688faa3aa91d223d0b83b5dee973576a1c = $this->env->getExtension("native_profiler");
        $__internal_eb7e4eaff1d06e5900bfc331cbc26c688faa3aa91d223d0b83b5dee973576a1c->enter($__internal_eb7e4eaff1d06e5900bfc331cbc26c688faa3aa91d223d0b83b5dee973576a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_eb7e4eaff1d06e5900bfc331cbc26c688faa3aa91d223d0b83b5dee973576a1c->leave($__internal_eb7e4eaff1d06e5900bfc331cbc26c688faa3aa91d223d0b83b5dee973576a1c_prof);

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
/*     <a href="{{ path('lifo_classif_tesson') }}">Tesson</a>*/
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
