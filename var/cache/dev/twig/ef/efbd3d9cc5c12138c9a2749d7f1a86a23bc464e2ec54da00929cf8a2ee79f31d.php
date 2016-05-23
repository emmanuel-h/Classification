<?php

/* layout.html.twig */
class __TwigTemplate_6b38e3adfb8c555dff7f4b99cf2d24b614bf91d13ec68765fb9c776960db16bf extends Twig_Template
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
        $__internal_ae886dc53812b57fe8af92ad80e83064112690297fac34185b90dfb1790d1ff7 = $this->env->getExtension("native_profiler");
        $__internal_ae886dc53812b57fe8af92ad80e83064112690297fac34185b90dfb1790d1ff7->enter($__internal_ae886dc53812b57fe8af92ad80e83064112690297fac34185b90dfb1790d1ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
\t";
        // line 18
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 19
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_telechargement");
            echo "\">Téléchargement</a>
\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
            echo "\">Upload</a>
\t\t<a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
            echo "\">Recherche</a>
\t\t<a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
            echo "\">Classification</a>
\t\t";
            // line 23
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 24
                echo "\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
                echo "\">Administration</a>
\t\t";
            }
            // line 26
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnexion</a>
\t";
        }
        // line 28
        echo "\t<br/>
\t<br/>
      </p>
    </div>
 
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
      ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LIFOClassifBundle:Platform:menu"));
        echo "
\t  </div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo " 
  </div>

\t";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "  </body>
</html>";
        
        $__internal_ae886dc53812b57fe8af92ad80e83064112690297fac34185b90dfb1790d1ff7->leave($__internal_ae886dc53812b57fe8af92ad80e83064112690297fac34185b90dfb1790d1ff7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de5cddb418d814a92099c5e2565a9325ef9054da851dd71f30cb9998dfdd660 = $this->env->getExtension("native_profiler");
        $__internal_4de5cddb418d814a92099c5e2565a9325ef9054da851dd71f30cb9998dfdd660->enter($__internal_4de5cddb418d814a92099c5e2565a9325ef9054da851dd71f30cb9998dfdd660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_4de5cddb418d814a92099c5e2565a9325ef9054da851dd71f30cb9998dfdd660->leave($__internal_4de5cddb418d814a92099c5e2565a9325ef9054da851dd71f30cb9998dfdd660_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_7456f159ee05f15f6187ba324302908cc7885a45f84b6bf59e633fa96316fe24 = $this->env->getExtension("native_profiler");
        $__internal_7456f159ee05f15f6187ba324302908cc7885a45f84b6bf59e633fa96316fe24->enter($__internal_7456f159ee05f15f6187ba324302908cc7885a45f84b6bf59e633fa96316fe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "      ";
        
        $__internal_7456f159ee05f15f6187ba324302908cc7885a45f84b6bf59e633fa96316fe24->leave($__internal_7456f159ee05f15f6187ba324302908cc7885a45f84b6bf59e633fa96316fe24_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_086c4d9e24b757220a0f3ae8836714a8e77b8a83e7220d4a172505a491248903 = $this->env->getExtension("native_profiler");
        $__internal_086c4d9e24b757220a0f3ae8836714a8e77b8a83e7220d4a172505a491248903->enter($__internal_086c4d9e24b757220a0f3ae8836714a8e77b8a83e7220d4a172505a491248903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "    ";
        
        $__internal_086c4d9e24b757220a0f3ae8836714a8e77b8a83e7220d4a172505a491248903->leave($__internal_086c4d9e24b757220a0f3ae8836714a8e77b8a83e7220d4a172505a491248903_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ba1b427ed8a842ba4ab46778c6980f15c7f1187f54771fb3343295a39882888 = $this->env->getExtension("native_profiler");
        $__internal_5ba1b427ed8a842ba4ab46778c6980f15c7f1187f54771fb3343295a39882888->enter($__internal_5ba1b427ed8a842ba4ab46778c6980f15c7f1187f54771fb3343295a39882888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_5ba1b427ed8a842ba4ab46778c6980f15c7f1187f54771fb3343295a39882888->leave($__internal_5ba1b427ed8a842ba4ab46778c6980f15c7f1187f54771fb3343295a39882888_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 53,  164 => 52,  157 => 48,  151 => 47,  144 => 40,  138 => 39,  126 => 6,  118 => 56,  116 => 52,  111 => 49,  109 => 47,  101 => 41,  99 => 39,  92 => 35,  83 => 28,  77 => 26,  71 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
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
/* 	{% if app.user %}*/
/* 		<a href="{{ path('lifo_classif_telechargement') }}">Téléchargement</a>*/
/* 		<a href="{{ path('lifo_classif_upload') }}">Upload</a>*/
/* 		<a href="{{ path('lifo_classif_recherche') }}">Recherche</a>*/
/* 		<a href="{{ path('lifo_classif_classification') }}">Classification</a>*/
/* 		{% if is_granted('ROLE_ADMIN') %}*/
/* 			<a href="{{ path('lifo_classif_admin') }}">Administration</a>*/
/* 		{% endif %}*/
/* 		<a href="{{ path('logout') }}">Déconnexion</a>*/
/* 	{% endif %}*/
/* 	<br/>*/
/* 	<br/>*/
/*       </p>*/
/*     </div>*/
/*  */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*       {{ render(controller("LIFOClassifBundle:Platform:menu")) }}*/
/* 	  </div>*/
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
