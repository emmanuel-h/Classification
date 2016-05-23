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
        $__internal_ebfa4add0e5737b67de75d42a3001fd12a1242ded73848cfa523076e0cc9c1fc = $this->env->getExtension("native_profiler");
        $__internal_ebfa4add0e5737b67de75d42a3001fd12a1242ded73848cfa523076e0cc9c1fc->enter($__internal_ebfa4add0e5737b67de75d42a3001fd12a1242ded73848cfa523076e0cc9c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
\t\t";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 36
            echo "\t\t\t";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LIFOClassifBundle:Platform:menu"));
            echo "
\t\t";
        }
        // line 38
        echo "\t  </div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo " 
  </div>

\t";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "  </body>
</html>";
        
        $__internal_ebfa4add0e5737b67de75d42a3001fd12a1242ded73848cfa523076e0cc9c1fc->leave($__internal_ebfa4add0e5737b67de75d42a3001fd12a1242ded73848cfa523076e0cc9c1fc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_002d962d603d12f7b37aedc8298a857146d78be7e3f16d66cf3b39d85210b755 = $this->env->getExtension("native_profiler");
        $__internal_002d962d603d12f7b37aedc8298a857146d78be7e3f16d66cf3b39d85210b755->enter($__internal_002d962d603d12f7b37aedc8298a857146d78be7e3f16d66cf3b39d85210b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_002d962d603d12f7b37aedc8298a857146d78be7e3f16d66cf3b39d85210b755->leave($__internal_002d962d603d12f7b37aedc8298a857146d78be7e3f16d66cf3b39d85210b755_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1cfd66db701fe9a354075a71b1321453fd0aee5ea5a6792d78867e6d018d745 = $this->env->getExtension("native_profiler");
        $__internal_b1cfd66db701fe9a354075a71b1321453fd0aee5ea5a6792d78867e6d018d745->enter($__internal_b1cfd66db701fe9a354075a71b1321453fd0aee5ea5a6792d78867e6d018d745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "      ";
        
        $__internal_b1cfd66db701fe9a354075a71b1321453fd0aee5ea5a6792d78867e6d018d745->leave($__internal_b1cfd66db701fe9a354075a71b1321453fd0aee5ea5a6792d78867e6d018d745_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_734ee20985e6f6a2c89106f2249d5fe0f75e7f4f0ab059427c4f92b9f72b410e = $this->env->getExtension("native_profiler");
        $__internal_734ee20985e6f6a2c89106f2249d5fe0f75e7f4f0ab059427c4f92b9f72b410e->enter($__internal_734ee20985e6f6a2c89106f2249d5fe0f75e7f4f0ab059427c4f92b9f72b410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "    ";
        
        $__internal_734ee20985e6f6a2c89106f2249d5fe0f75e7f4f0ab059427c4f92b9f72b410e->leave($__internal_734ee20985e6f6a2c89106f2249d5fe0f75e7f4f0ab059427c4f92b9f72b410e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bbe455ea884e711613ea9d66ef4007e50cbc019b165ba03efc8c2baa4f33eb1 = $this->env->getExtension("native_profiler");
        $__internal_7bbe455ea884e711613ea9d66ef4007e50cbc019b165ba03efc8c2baa4f33eb1->enter($__internal_7bbe455ea884e711613ea9d66ef4007e50cbc019b165ba03efc8c2baa4f33eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_7bbe455ea884e711613ea9d66ef4007e50cbc019b165ba03efc8c2baa4f33eb1->leave($__internal_7bbe455ea884e711613ea9d66ef4007e50cbc019b165ba03efc8c2baa4f33eb1_prof);

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
        return array (  176 => 55,  170 => 54,  163 => 50,  157 => 49,  150 => 42,  144 => 41,  132 => 6,  124 => 58,  122 => 54,  117 => 51,  115 => 49,  107 => 43,  105 => 41,  100 => 38,  94 => 36,  92 => 35,  83 => 28,  77 => 26,  71 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
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
/* 		{% if app.user %}*/
/* 			{{ render(controller("LIFOClassifBundle:Platform:menu")) }}*/
/* 		{% endif %}*/
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
