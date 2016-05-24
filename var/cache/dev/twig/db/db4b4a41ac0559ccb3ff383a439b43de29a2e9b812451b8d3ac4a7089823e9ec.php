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
        $__internal_fe6cd63b3b2a154f05f7bb80395b9b6edc4b7c0f8a042e9476c0b8cd8d9f4d18 = $this->env->getExtension("native_profiler");
        $__internal_fe6cd63b3b2a154f05f7bb80395b9b6edc4b7c0f8a042e9476c0b8cd8d9f4d18->enter($__internal_fe6cd63b3b2a154f05f7bb80395b9b6edc4b7c0f8a042e9476c0b8cd8d9f4d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<link rel=\"icon\" href=\"../../favicon.ico\">
<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<!-- Bootstrap core CSS -->
<link href=\"/Classification/web/bootstrap/css/bootstrap.min.css\"
\trel=\"stylesheet\">
<!-- Bootstrap theme -->
<link href=\"/Classification/web/bootstrap/css/bootstrap-theme.min.css\"
\trel=\"stylesheet\">
<link href=\"Styles/style.css\" rel=\"stylesheet\" type=\"text/css\" /> 
</head>
<body>

\t<div class=\"navbar navbar-inverse navbar-fixed-top\">

\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<header class=\"row\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\"
\t\t\t\t\t\tdata-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\"
\t\t\t\t\t\taria-controls=\"navbar\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> <span
\t\t\t\t\t\t\tclass=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
\t\t\t\t\t\t\tclass=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Upload</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a></li>
\t\t\t\t\t\t\t";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
            echo "\">Administration</a></li>
\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container theme-showcase\" role=\"main\">
\t\t<br />
\t\t<br />
\t\t<br />
\t\t<br />
\t\t<br />
\t\t<div class=\"starter-template\">
\t\t\t<div class=\"row\">
\t\t\t\t<nav id=\"menu\" class=\"col-lg-3\">
\t\t\t<div class=\"chose\">
\t\t\t\t\t";
        // line 59
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 60
            echo "\t\t\t\t\t<h4>Derniers tessons ajoutés</h4>
\t\t\t\t\t";
            // line 61
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LIFOClassifBundle:Platform:menu"));
            echo " ";
        }
        // line 63
        echo "\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t<div id=\"content\" class=\"col-lg-9\">";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "
\t</div>

\t";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "</body>
</html>";
        
        $__internal_fe6cd63b3b2a154f05f7bb80395b9b6edc4b7c0f8a042e9476c0b8cd8d9f4d18->leave($__internal_fe6cd63b3b2a154f05f7bb80395b9b6edc4b7c0f8a042e9476c0b8cd8d9f4d18_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd788750deea32f4ef9dcad7f1b0ef163a47746be96139f857c57f45b364ec03 = $this->env->getExtension("native_profiler");
        $__internal_bd788750deea32f4ef9dcad7f1b0ef163a47746be96139f857c57f45b364ec03->enter($__internal_bd788750deea32f4ef9dcad7f1b0ef163a47746be96139f857c57f45b364ec03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_bd788750deea32f4ef9dcad7f1b0ef163a47746be96139f857c57f45b364ec03->leave($__internal_bd788750deea32f4ef9dcad7f1b0ef163a47746be96139f857c57f45b364ec03_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_603a992dd5632934e72a47b2eb0d61a9446abec82083f1ecd698fcf53c9cc1b0 = $this->env->getExtension("native_profiler");
        $__internal_603a992dd5632934e72a47b2eb0d61a9446abec82083f1ecd698fcf53c9cc1b0->enter($__internal_603a992dd5632934e72a47b2eb0d61a9446abec82083f1ecd698fcf53c9cc1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_603a992dd5632934e72a47b2eb0d61a9446abec82083f1ecd698fcf53c9cc1b0->leave($__internal_603a992dd5632934e72a47b2eb0d61a9446abec82083f1ecd698fcf53c9cc1b0_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5c01bf921e0104fb35e105f211a88ef7916c7c661e16c05ebffa71d144b76319 = $this->env->getExtension("native_profiler");
        $__internal_5c01bf921e0104fb35e105f211a88ef7916c7c661e16c05ebffa71d144b76319->enter($__internal_5c01bf921e0104fb35e105f211a88ef7916c7c661e16c05ebffa71d144b76319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_5c01bf921e0104fb35e105f211a88ef7916c7c661e16c05ebffa71d144b76319->leave($__internal_5c01bf921e0104fb35e105f211a88ef7916c7c661e16c05ebffa71d144b76319_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_461a7ce5ce1157b954bb8cc52b4b96ce0b2b6985620c54afbd048567e1a34bd4 = $this->env->getExtension("native_profiler");
        $__internal_461a7ce5ce1157b954bb8cc52b4b96ce0b2b6985620c54afbd048567e1a34bd4->enter($__internal_461a7ce5ce1157b954bb8cc52b4b96ce0b2b6985620c54afbd048567e1a34bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "\t<script src=\"/Classification/web/bootstrap/js/jquery.js\"></script>
\t<script src=\"/Classification/web/bootstrap/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_461a7ce5ce1157b954bb8cc52b4b96ce0b2b6985620c54afbd048567e1a34bd4->leave($__internal_461a7ce5ce1157b954bb8cc52b4b96ce0b2b6985620c54afbd048567e1a34bd4_prof);

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
        return array (  189 => 77,  183 => 76,  171 => 72,  159 => 66,  147 => 10,  139 => 80,  137 => 76,  132 => 73,  130 => 72,  121 => 66,  116 => 63,  112 => 61,  109 => 60,  107 => 59,  85 => 41,  79 => 39,  77 => 38,  73 => 37,  69 => 36,  65 => 35,  37 => 10,  26 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* <link rel="icon" href="../../favicon.ico">*/
/* <title>{% block title %}Classification{% endblock %}</title>*/
/* <!-- Bootstrap core CSS -->*/
/* <link href="/Classification/web/bootstrap/css/bootstrap.min.css"*/
/* 	rel="stylesheet">*/
/* <!-- Bootstrap theme -->*/
/* <link href="/Classification/web/bootstrap/css/bootstrap-theme.min.css"*/
/* 	rel="stylesheet">*/
/* <link href="Styles/style.css" rel="stylesheet" type="text/css" /> */
/* </head>*/
/* <body>*/
/* */
/* 	<div class="navbar navbar-inverse navbar-fixed-top">*/
/* */
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<header class="row">*/
/* 					<button type="button" class="navbar-toggle collapsed"*/
/* 						data-toggle="collapse" data-target="#navbar" aria-expanded="false"*/
/* 						aria-controls="navbar">*/
/* 						<span class="sr-only">Toggle navigation</span> <span*/
/* 							class="icon-bar"></span> <span class="icon-bar"></span> <span*/
/* 							class="icon-bar"></span>*/
/* 					</button>*/
/* 					<div id="navbar" class="collapse navbar-collapse">*/
/* 						<ul class="nav navbar-nav">*/
/* 							<li><a href="{{ path('lifo_classif_upload') }}">Upload</a></li>*/
/* 							<li><a href="{{ path('lifo_classif_recherche') }}">Recherche</a></li>*/
/* 							<li><a href="{{ path('lifo_classif_classification') }}">Classification</a></li>*/
/* 							{% if is_granted('ROLE_ADMIN') %}*/
/* 							<li><a href="{{ path('lifo_classif_admin') }}">Administration</a></li>*/
/* 							{% endif %}*/
/* 							<li><a href="{{ path('logout') }}">Déconnexion</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</header>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="container theme-showcase" role="main">*/
/* 		<br />*/
/* 		<br />*/
/* 		<br />*/
/* 		<br />*/
/* 		<br />*/
/* 		<div class="starter-template">*/
/* 			<div class="row">*/
/* 				<nav id="menu" class="col-lg-3">*/
/* 			<div class="chose">*/
/* 					{% if app.user %}*/
/* 					<h4>Derniers tessons ajoutés</h4>*/
/* 					{{ render(controller("LIFOClassifBundle:Platform:menu")) }} {%*/
/* 					endif %}*/
/* 				</div>*/
/* 				</nav>*/
/* */
/* 				<div id="content" class="col-lg-9">{% block body %} {% endblock %}</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<hr>*/
/* */
/* 		{% block footer %} {% endblock %}*/
/* */
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 	<script src="/Classification/web/bootstrap/js/jquery.js"></script>*/
/* 	<script src="/Classification/web/bootstrap/js/bootstrap.min.js"></script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
