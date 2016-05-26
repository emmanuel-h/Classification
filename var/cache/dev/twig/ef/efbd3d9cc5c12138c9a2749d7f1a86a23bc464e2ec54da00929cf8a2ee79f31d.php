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
        $__internal_a7afe3c8577ff0f0b6d6d5637c428f1f9ea22d7549bef1242a850d55147ab986 = $this->env->getExtension("native_profiler");
        $__internal_a7afe3c8577ff0f0b6d6d5637c428f1f9ea22d7549bef1242a850d55147ab986->enter($__internal_a7afe3c8577ff0f0b6d6d5637c428f1f9ea22d7549bef1242a850d55147ab986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
<link href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"
\trel=\"stylesheet\">
<link href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\"
\trel=\"stylesheet\">
<link href=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>
<body>

\t<div class=\"navbar navbar-inverse navbar-fixed-top\">

\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Upload</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a></li>
\t\t\t\t\t\t";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ARCHEOLOGUE")) {
            // line 36
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"#\">Paramètres<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor");
            echo "\">Type de décor</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_positionDecor");
            echo "\">Position de décor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
            echo "\">Administration</a></li>
\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Déconnexion</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t<div class=\"container theme-showcase\" role=\"main\">
\t\t<div class=\"starter-template\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"chose\">
\t\t\t\t\t\t";
        // line 58
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 59
            echo "\t\t\t\t\t\t<h4>Derniers tessons ajoutés</h4>
\t\t\t\t\t\t";
            // line 60
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LIFOClassifBundle:Platform:menu"));
            echo " ";
        }
        // line 62
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"content\" class=\"col-lg-9\">";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
\t</div>

\t";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "</body>
</html>";
        
        $__internal_a7afe3c8577ff0f0b6d6d5637c428f1f9ea22d7549bef1242a850d55147ab986->leave($__internal_a7afe3c8577ff0f0b6d6d5637c428f1f9ea22d7549bef1242a850d55147ab986_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_269cfdfae25a9a1b850d91e4d49bcb685937975cab9677d55f17ecc501839971 = $this->env->getExtension("native_profiler");
        $__internal_269cfdfae25a9a1b850d91e4d49bcb685937975cab9677d55f17ecc501839971->enter($__internal_269cfdfae25a9a1b850d91e4d49bcb685937975cab9677d55f17ecc501839971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_269cfdfae25a9a1b850d91e4d49bcb685937975cab9677d55f17ecc501839971->leave($__internal_269cfdfae25a9a1b850d91e4d49bcb685937975cab9677d55f17ecc501839971_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a63544ca1c7b9852a4ab7483766b7d6fc6e39c74b7badc9e4db895d78a04a54 = $this->env->getExtension("native_profiler");
        $__internal_5a63544ca1c7b9852a4ab7483766b7d6fc6e39c74b7badc9e4db895d78a04a54->enter($__internal_5a63544ca1c7b9852a4ab7483766b7d6fc6e39c74b7badc9e4db895d78a04a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_5a63544ca1c7b9852a4ab7483766b7d6fc6e39c74b7badc9e4db895d78a04a54->leave($__internal_5a63544ca1c7b9852a4ab7483766b7d6fc6e39c74b7badc9e4db895d78a04a54_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1f7b6a9cca74e81cc53f393fe08ffc743f58045d97e8011c30a6618b6a60e3d1 = $this->env->getExtension("native_profiler");
        $__internal_1f7b6a9cca74e81cc53f393fe08ffc743f58045d97e8011c30a6618b6a60e3d1->enter($__internal_1f7b6a9cca74e81cc53f393fe08ffc743f58045d97e8011c30a6618b6a60e3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_1f7b6a9cca74e81cc53f393fe08ffc743f58045d97e8011c30a6618b6a60e3d1->leave($__internal_1f7b6a9cca74e81cc53f393fe08ffc743f58045d97e8011c30a6618b6a60e3d1_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c2a567618f06c1871de22248af9d6769ff06e0d7928b37a90893e50975a9317 = $this->env->getExtension("native_profiler");
        $__internal_2c2a567618f06c1871de22248af9d6769ff06e0d7928b37a90893e50975a9317->enter($__internal_2c2a567618f06c1871de22248af9d6769ff06e0d7928b37a90893e50975a9317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "\t<script src=\"../bootstrap/js/jquery.js\"></script>
\t<script src=\"../bootstrap/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_2c2a567618f06c1871de22248af9d6769ff06e0d7928b37a90893e50975a9317->leave($__internal_2c2a567618f06c1871de22248af9d6769ff06e0d7928b37a90893e50975a9317_prof);

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
        return array (  208 => 76,  202 => 75,  190 => 71,  178 => 65,  166 => 10,  158 => 79,  156 => 75,  151 => 72,  149 => 71,  140 => 65,  135 => 62,  131 => 60,  128 => 59,  126 => 58,  111 => 47,  106 => 45,  103 => 44,  100 => 43,  93 => 39,  89 => 38,  85 => 36,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  51 => 15,  46 => 13,  41 => 11,  37 => 10,  26 => 1,);
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
/* <link href=" {{ asset('bootstrap/css/bootstrap.min.css') }}"*/
/* 	rel="stylesheet">*/
/* <link href=" {{ asset ('bootstrap/css/bootstrap-theme.min.css') }}"*/
/* 	rel="stylesheet">*/
/* <link href=" {{ asset ('styles/layout.css') }}" rel="stylesheet" />*/
/* </head>*/
/* <body>*/
/* */
/* 	<div class="navbar navbar-inverse navbar-fixed-top">*/
/* */
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 					<span class="sr-only">Toggle navigation</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 			</div>*/
/* 				<div id="navbar" class="navbar-collapse collapse">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li><a href="{{ path('lifo_classif_upload') }}">Upload</a></li>*/
/* 						<li><a href="{{ path('lifo_classif_recherche') }}">Recherche</a></li>*/
/* 						<li><a href="{{ path('lifo_classif_classification') }}">Classification</a></li>*/
/* 						{% if is_granted('ROLE_ARCHEOLOGUE') %}*/
/* 							<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Paramètres<b class="caret"></b></a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<li><a href="{{ path('lifo_classif_parametres_typeDecor') }}">Type de décor</a></li>*/
/* 									<li><a href="{{ path('lifo_classif_parametres_positionDecor') }}">Position de décor</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						{% if is_granted('ROLE_ADMIN') %}*/
/* 						*/
/* 						<li><a href="{{ path('lifo_classif_admin') }}">Administration</a></li>*/
/* 						{% endif %}*/
/* 						<li><a href="{{ path('logout') }}">Déconnexion</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	<div class="container theme-showcase" role="main">*/
/* 		<div class="starter-template">*/
/* 			<div class="row">*/
/* 				<div class="col-lg-3">*/
/* 					<div class="chose">*/
/* 						{% if app.user %}*/
/* 						<h4>Derniers tessons ajoutés</h4>*/
/* 						{{ render(controller("LIFOClassifBundle:Platform:menu")) }} {%*/
/* 						endif %}*/
/* 					</div>*/
/* 				</div>*/
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
/* 	<script src="../bootstrap/js/jquery.js"></script>*/
/* 	<script src="../bootstrap/js/bootstrap.min.js"></script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
