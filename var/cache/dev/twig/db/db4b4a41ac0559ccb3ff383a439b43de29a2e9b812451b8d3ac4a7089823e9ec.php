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
        $__internal_0d9deaf54234dace3c9b3b571c5fc1f184bd5d6f5e5f6295cf94a918ca59887b = $this->env->getExtension("native_profiler");
        $__internal_0d9deaf54234dace3c9b3b571c5fc1f184bd5d6f5e5f6295cf94a918ca59887b->enter($__internal_0d9deaf54234dace3c9b3b571c5fc1f184bd5d6f5e5f6295cf94a918ca59887b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
            echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
            echo "\">Upload</a>
\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
            echo "\">Recherche</a>
\t\t<a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
            echo "\">Classification</a>
\t\t";
            // line 22
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
                echo "\">Administration</a>
\t\t";
            }
            // line 25
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnexion</a>
\t";
        }
        // line 27
        echo "\t<br/>
\t<br/>
      </p>
    </div>
 
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
\t\t";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 35
            echo "\t\t\t<h4> Derniers tessons ajoutés </h4>
\t\t\t";
            // line 36
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
        
        $__internal_0d9deaf54234dace3c9b3b571c5fc1f184bd5d6f5e5f6295cf94a918ca59887b->leave($__internal_0d9deaf54234dace3c9b3b571c5fc1f184bd5d6f5e5f6295cf94a918ca59887b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_853f4f3dcc1d6713a63725eeaffa3c99996ef1a16d735076702f25bbc10f558f = $this->env->getExtension("native_profiler");
        $__internal_853f4f3dcc1d6713a63725eeaffa3c99996ef1a16d735076702f25bbc10f558f->enter($__internal_853f4f3dcc1d6713a63725eeaffa3c99996ef1a16d735076702f25bbc10f558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_853f4f3dcc1d6713a63725eeaffa3c99996ef1a16d735076702f25bbc10f558f->leave($__internal_853f4f3dcc1d6713a63725eeaffa3c99996ef1a16d735076702f25bbc10f558f_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_d01dd2890c9fea567f6f2106c0af366a8a5e763e988234fd8ba7734b75f36e38 = $this->env->getExtension("native_profiler");
        $__internal_d01dd2890c9fea567f6f2106c0af366a8a5e763e988234fd8ba7734b75f36e38->enter($__internal_d01dd2890c9fea567f6f2106c0af366a8a5e763e988234fd8ba7734b75f36e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "      ";
        
        $__internal_d01dd2890c9fea567f6f2106c0af366a8a5e763e988234fd8ba7734b75f36e38->leave($__internal_d01dd2890c9fea567f6f2106c0af366a8a5e763e988234fd8ba7734b75f36e38_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a14837b362cf042b3c7a053954657301a1077a5eac80e3682724b64b18e9d9b5 = $this->env->getExtension("native_profiler");
        $__internal_a14837b362cf042b3c7a053954657301a1077a5eac80e3682724b64b18e9d9b5->enter($__internal_a14837b362cf042b3c7a053954657301a1077a5eac80e3682724b64b18e9d9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "    ";
        
        $__internal_a14837b362cf042b3c7a053954657301a1077a5eac80e3682724b64b18e9d9b5->leave($__internal_a14837b362cf042b3c7a053954657301a1077a5eac80e3682724b64b18e9d9b5_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98fc93294cbe2f3f966c4497a0e9d8b5eb8b46c3a199c71dfd5b5774463f4c87 = $this->env->getExtension("native_profiler");
        $__internal_98fc93294cbe2f3f966c4497a0e9d8b5eb8b46c3a199c71dfd5b5774463f4c87->enter($__internal_98fc93294cbe2f3f966c4497a0e9d8b5eb8b46c3a199c71dfd5b5774463f4c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_98fc93294cbe2f3f966c4497a0e9d8b5eb8b46c3a199c71dfd5b5774463f4c87->leave($__internal_98fc93294cbe2f3f966c4497a0e9d8b5eb8b46c3a199c71dfd5b5774463f4c87_prof);

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
        return array (  174 => 55,  168 => 54,  161 => 50,  155 => 49,  148 => 42,  142 => 41,  130 => 6,  122 => 58,  120 => 54,  115 => 51,  113 => 49,  105 => 43,  103 => 41,  98 => 38,  93 => 36,  90 => 35,  88 => 34,  79 => 27,  73 => 25,  67 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
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
/* 			<h4> Derniers tessons ajoutés </h4>*/
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
