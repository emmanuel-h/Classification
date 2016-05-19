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
        $__internal_329f3e84545197deb29a8fc26578967e232ea267a7c9a795ec6d2bef8c51b3b0 = $this->env->getExtension("native_profiler");
        $__internal_329f3e84545197deb29a8fc26578967e232ea267a7c9a795ec6d2bef8c51b3b0->enter($__internal_329f3e84545197deb29a8fc26578967e232ea267a7c9a795ec6d2bef8c51b3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
      <div id=\"menu\" class=\"col-md-3\"></div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo " 
  </div>

\t";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "  </body>
</html>";
        
        $__internal_329f3e84545197deb29a8fc26578967e232ea267a7c9a795ec6d2bef8c51b3b0->leave($__internal_329f3e84545197deb29a8fc26578967e232ea267a7c9a795ec6d2bef8c51b3b0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a0e6750280361051ed7a5a2da1d63df47b35b8e4dc58dc512fdd1c325d33986 = $this->env->getExtension("native_profiler");
        $__internal_9a0e6750280361051ed7a5a2da1d63df47b35b8e4dc58dc512fdd1c325d33986->enter($__internal_9a0e6750280361051ed7a5a2da1d63df47b35b8e4dc58dc512fdd1c325d33986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_9a0e6750280361051ed7a5a2da1d63df47b35b8e4dc58dc512fdd1c325d33986->leave($__internal_9a0e6750280361051ed7a5a2da1d63df47b35b8e4dc58dc512fdd1c325d33986_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_d413abe09faf3f2f8ca441f6e66f3e9aa968322611d09e632c43561eb2c26851 = $this->env->getExtension("native_profiler");
        $__internal_d413abe09faf3f2f8ca441f6e66f3e9aa968322611d09e632c43561eb2c26851->enter($__internal_d413abe09faf3f2f8ca441f6e66f3e9aa968322611d09e632c43561eb2c26851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "      ";
        
        $__internal_d413abe09faf3f2f8ca441f6e66f3e9aa968322611d09e632c43561eb2c26851->leave($__internal_d413abe09faf3f2f8ca441f6e66f3e9aa968322611d09e632c43561eb2c26851_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_17edbba0aa86eae82a525626ae532a28148e2a969e01d56d8de9e014714a8804 = $this->env->getExtension("native_profiler");
        $__internal_17edbba0aa86eae82a525626ae532a28148e2a969e01d56d8de9e014714a8804->enter($__internal_17edbba0aa86eae82a525626ae532a28148e2a969e01d56d8de9e014714a8804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "    ";
        
        $__internal_17edbba0aa86eae82a525626ae532a28148e2a969e01d56d8de9e014714a8804->leave($__internal_17edbba0aa86eae82a525626ae532a28148e2a969e01d56d8de9e014714a8804_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c77c33c3d131eaf9a8a94ba62eff507205e3c332708371733b5eb0260b2b89a1 = $this->env->getExtension("native_profiler");
        $__internal_c77c33c3d131eaf9a8a94ba62eff507205e3c332708371733b5eb0260b2b89a1->enter($__internal_c77c33c3d131eaf9a8a94ba62eff507205e3c332708371733b5eb0260b2b89a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_c77c33c3d131eaf9a8a94ba62eff507205e3c332708371733b5eb0260b2b89a1->leave($__internal_c77c33c3d131eaf9a8a94ba62eff507205e3c332708371733b5eb0260b2b89a1_prof);

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
        return array (  165 => 51,  159 => 50,  152 => 46,  146 => 45,  139 => 38,  133 => 37,  121 => 6,  113 => 54,  111 => 50,  106 => 47,  104 => 45,  96 => 39,  94 => 37,  83 => 28,  77 => 26,  71 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
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
