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
        $__internal_331e97072d8e277516cefb4c75bc1ee6e89a73b4a3922f7c8bf21bc72cb25b1d = $this->env->getExtension("native_profiler");
        $__internal_331e97072d8e277516cefb4c75bc1ee6e89a73b4a3922f7c8bf21bc72cb25b1d->enter($__internal_331e97072d8e277516cefb4c75bc1ee6e89a73b4a3922f7c8bf21bc72cb25b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        if ($this->env->getExtension('security')->isGranted("ROLE_ARCHEOLOGUE")) {
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
        
        $__internal_331e97072d8e277516cefb4c75bc1ee6e89a73b4a3922f7c8bf21bc72cb25b1d->leave($__internal_331e97072d8e277516cefb4c75bc1ee6e89a73b4a3922f7c8bf21bc72cb25b1d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_02517dd6d656f503e773deac98aba8643d535d10630d4b77e45015b30f75c114 = $this->env->getExtension("native_profiler");
        $__internal_02517dd6d656f503e773deac98aba8643d535d10630d4b77e45015b30f75c114->enter($__internal_02517dd6d656f503e773deac98aba8643d535d10630d4b77e45015b30f75c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_02517dd6d656f503e773deac98aba8643d535d10630d4b77e45015b30f75c114->leave($__internal_02517dd6d656f503e773deac98aba8643d535d10630d4b77e45015b30f75c114_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e1f3ccaf96fd2ce9528183956d76ba1b24b5fe6eb8b9886f506944364de1f23 = $this->env->getExtension("native_profiler");
        $__internal_1e1f3ccaf96fd2ce9528183956d76ba1b24b5fe6eb8b9886f506944364de1f23->enter($__internal_1e1f3ccaf96fd2ce9528183956d76ba1b24b5fe6eb8b9886f506944364de1f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "      ";
        
        $__internal_1e1f3ccaf96fd2ce9528183956d76ba1b24b5fe6eb8b9886f506944364de1f23->leave($__internal_1e1f3ccaf96fd2ce9528183956d76ba1b24b5fe6eb8b9886f506944364de1f23_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_967020cba1fc8a0c12b873465c5f22ce4c6a74c9ed018111ca2054ea59b4f91b = $this->env->getExtension("native_profiler");
        $__internal_967020cba1fc8a0c12b873465c5f22ce4c6a74c9ed018111ca2054ea59b4f91b->enter($__internal_967020cba1fc8a0c12b873465c5f22ce4c6a74c9ed018111ca2054ea59b4f91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "    ";
        
        $__internal_967020cba1fc8a0c12b873465c5f22ce4c6a74c9ed018111ca2054ea59b4f91b->leave($__internal_967020cba1fc8a0c12b873465c5f22ce4c6a74c9ed018111ca2054ea59b4f91b_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42620e6d3c01353212e36f0cd33969316a0e9c681d84efe67c1ec75e0ab53d85 = $this->env->getExtension("native_profiler");
        $__internal_42620e6d3c01353212e36f0cd33969316a0e9c681d84efe67c1ec75e0ab53d85->enter($__internal_42620e6d3c01353212e36f0cd33969316a0e9c681d84efe67c1ec75e0ab53d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_42620e6d3c01353212e36f0cd33969316a0e9c681d84efe67c1ec75e0ab53d85->leave($__internal_42620e6d3c01353212e36f0cd33969316a0e9c681d84efe67c1ec75e0ab53d85_prof);

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
/* 	{% if is_granted('ROLE_ARCHEOLOGUE') %}*/
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
