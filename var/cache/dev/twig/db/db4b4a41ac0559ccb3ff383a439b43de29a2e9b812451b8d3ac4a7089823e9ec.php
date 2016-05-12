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
        $__internal_43f166dddac54ca2111fbfdfb78d0f5b04450b68481ad71894355ea12ab252ac = $this->env->getExtension("native_profiler");
        $__internal_43f166dddac54ca2111fbfdfb78d0f5b04450b68481ad71894355ea12ab252ac->enter($__internal_43f166dddac54ca2111fbfdfb78d0f5b04450b68481ad71894355ea12ab252ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
\t<br/>
\t<br/>
      </p>
    </div>
 
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\"></div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo " 
  </div>

\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "  </body>
</html>";
        
        $__internal_43f166dddac54ca2111fbfdfb78d0f5b04450b68481ad71894355ea12ab252ac->leave($__internal_43f166dddac54ca2111fbfdfb78d0f5b04450b68481ad71894355ea12ab252ac_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_822379f595e1b02d2e69ceca443575fbbdf443a7a92263551e209674ffc326f1 = $this->env->getExtension("native_profiler");
        $__internal_822379f595e1b02d2e69ceca443575fbbdf443a7a92263551e209674ffc326f1->enter($__internal_822379f595e1b02d2e69ceca443575fbbdf443a7a92263551e209674ffc326f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_822379f595e1b02d2e69ceca443575fbbdf443a7a92263551e209674ffc326f1->leave($__internal_822379f595e1b02d2e69ceca443575fbbdf443a7a92263551e209674ffc326f1_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_eff46634d9bef9b9d5dbbc6f73f5d95da36d5652aa7592e97498d2258ad42c63 = $this->env->getExtension("native_profiler");
        $__internal_eff46634d9bef9b9d5dbbc6f73f5d95da36d5652aa7592e97498d2258ad42c63->enter($__internal_eff46634d9bef9b9d5dbbc6f73f5d95da36d5652aa7592e97498d2258ad42c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "      ";
        
        $__internal_eff46634d9bef9b9d5dbbc6f73f5d95da36d5652aa7592e97498d2258ad42c63->leave($__internal_eff46634d9bef9b9d5dbbc6f73f5d95da36d5652aa7592e97498d2258ad42c63_prof);

    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        $__internal_493b233737f1af02d29b88e40343fa3f603f2d6b748d871e491f3cf746f89a2f = $this->env->getExtension("native_profiler");
        $__internal_493b233737f1af02d29b88e40343fa3f603f2d6b748d871e491f3cf746f89a2f->enter($__internal_493b233737f1af02d29b88e40343fa3f603f2d6b748d871e491f3cf746f89a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 40
        echo "    ";
        
        $__internal_493b233737f1af02d29b88e40343fa3f603f2d6b748d871e491f3cf746f89a2f->leave($__internal_493b233737f1af02d29b88e40343fa3f603f2d6b748d871e491f3cf746f89a2f_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d4772ddda85fa1aafb186fb932b241b0f8a1f28cce89376e8785c6c44ef3cad = $this->env->getExtension("native_profiler");
        $__internal_5d4772ddda85fa1aafb186fb932b241b0f8a1f28cce89376e8785c6c44ef3cad->enter($__internal_5d4772ddda85fa1aafb186fb932b241b0f8a1f28cce89376e8785c6c44ef3cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_5d4772ddda85fa1aafb186fb932b241b0f8a1f28cce89376e8785c6c44ef3cad->leave($__internal_5d4772ddda85fa1aafb186fb932b241b0f8a1f28cce89376e8785c6c44ef3cad_prof);

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
        return array (  146 => 45,  140 => 44,  133 => 40,  127 => 39,  120 => 32,  114 => 31,  102 => 6,  94 => 48,  92 => 44,  87 => 41,  85 => 39,  77 => 33,  75 => 31,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
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
