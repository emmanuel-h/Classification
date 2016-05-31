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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f71235516347763a1c2acfa5b35e34df229c10a3d835064004136e11489db71 = $this->env->getExtension("native_profiler");
        $__internal_0f71235516347763a1c2acfa5b35e34df229c10a3d835064004136e11489db71->enter($__internal_0f71235516347763a1c2acfa5b35e34df229c10a3d835064004136e11489db71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
<link href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<script type=\"text/javascript\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>

\t<div class=\"navbar navbar-inverse navbar-fixed-top\">

\t\t<div class=\"container\" id=\"menu_top\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Nouveau</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a></li>
\t\t\t\t\t\t";
        // line 32
        if ($this->env->getExtension('security')->isGranted("ROLE_ARCHEOLOGUE")) {
            // line 33
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor");
            echo "\">Paramètres<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor");
            echo "\">Type de décor</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_positionDecor");
            echo "\">Position de décor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
            echo "\">Administration<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t                <li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t                <li class=\"dropdown-header\">Utilisateur</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur_afficherTous");
            echo "\">Afficher la liste</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur");
            echo "\">Ajouter</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur_rechercher");
            echo "\">Rechercher</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t</ul>
            \t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Déconnexion</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<br />
\t<div class=\"container theme-showcase\" role=\"main\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t";
        // line 62
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 63
            echo "\t\t\t\t\t\t<h4>Derniers tessons ajoutés</h4>
\t\t\t\t\t\t";
            // line 64
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LIFOClassifBundle:Platform:menu"));
            echo " ";
        }
        // line 66
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"content\" class=\"col-lg-9\">";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t\t</div>

\t\t";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "
\t</div>
</body>
</html>";
        
        $__internal_0f71235516347763a1c2acfa5b35e34df229c10a3d835064004136e11489db71->leave($__internal_0f71235516347763a1c2acfa5b35e34df229c10a3d835064004136e11489db71_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7b1eb0ea15812fe60923dc50b84e47789771ca997cc400bf0f6392e13275ea9 = $this->env->getExtension("native_profiler");
        $__internal_a7b1eb0ea15812fe60923dc50b84e47789771ca997cc400bf0f6392e13275ea9->enter($__internal_a7b1eb0ea15812fe60923dc50b84e47789771ca997cc400bf0f6392e13275ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_a7b1eb0ea15812fe60923dc50b84e47789771ca997cc400bf0f6392e13275ea9->leave($__internal_a7b1eb0ea15812fe60923dc50b84e47789771ca997cc400bf0f6392e13275ea9_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85312e208459272de536dc84ce08ad321479a6987409694946b5eac42bebc9e = $this->env->getExtension("native_profiler");
        $__internal_f85312e208459272de536dc84ce08ad321479a6987409694946b5eac42bebc9e->enter($__internal_f85312e208459272de536dc84ce08ad321479a6987409694946b5eac42bebc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_f85312e208459272de536dc84ce08ad321479a6987409694946b5eac42bebc9e->leave($__internal_f85312e208459272de536dc84ce08ad321479a6987409694946b5eac42bebc9e_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a007ad503b51720f0157b499bd27c4387ebbbb4000e90348cc8fb205d771c0d2 = $this->env->getExtension("native_profiler");
        $__internal_a007ad503b51720f0157b499bd27c4387ebbbb4000e90348cc8fb205d771c0d2->enter($__internal_a007ad503b51720f0157b499bd27c4387ebbbb4000e90348cc8fb205d771c0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_a007ad503b51720f0157b499bd27c4387ebbbb4000e90348cc8fb205d771c0d2->leave($__internal_a007ad503b51720f0157b499bd27c4387ebbbb4000e90348cc8fb205d771c0d2_prof);

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
        return array (  214 => 72,  202 => 69,  190 => 10,  180 => 73,  178 => 72,  172 => 69,  167 => 66,  163 => 64,  160 => 63,  158 => 62,  146 => 53,  142 => 51,  135 => 47,  131 => 46,  127 => 45,  119 => 41,  116 => 40,  109 => 36,  105 => 35,  99 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  45 => 13,  40 => 11,  36 => 10,  25 => 1,);
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
/* <link href=" {{ asset ('styles/menu.css') }}" rel="stylesheet" />*/
/* <link href=" {{ asset ('styles/table.css') }}" rel="stylesheet" />*/
/* <link rel="stylesheet" href=" {{ asset ('fancybox/source/jquery.fancybox.css') }}" type="text/css" media="screen" />*/
/* <script type="text/javascript" src=" {{ asset('bootstrap/js/jquery.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('fancybox/source/jquery.fancybox.pack.js') }}"></script>*/
/* <script src=" {{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/* </head>*/
/* <body>*/
/* */
/* 	<div class="navbar navbar-inverse navbar-fixed-top">*/
/* */
/* 		<div class="container" id="menu_top">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li><a href="{{ path('lifo_classif_upload') }}">Nouveau</a></li>*/
/* 						<li><a href="{{ path('lifo_classif_recherche') }}">Recherche</a></li>*/
/* 						<li><a href="{{ path('lifo_classif_classification') }}">Classification</a></li>*/
/* 						{% if is_granted('ROLE_ARCHEOLOGUE') %}*/
/* 							<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="{{ path('lifo_classif_parametres_typeDecor') }}">Paramètres<b class="caret"></b></a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<li><a href="{{ path('lifo_classif_parametres_typeDecor') }}">Type de décor</a></li>*/
/* 									<li><a href="{{ path('lifo_classif_parametres_positionDecor') }}">Position de décor</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						{% if is_granted('ROLE_ADMIN') %}*/
/* 							<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="{{ path('lifo_classif_admin') }}">Administration<b class="caret"></b></a>*/
/* 								<ul class="dropdown-menu">*/
/* 					                <li role="separator" class="divider"></li>*/
/* 					                <li class="dropdown-header">Utilisateur</li>*/
/* 									<li><a href="{{ path('lifo_classif_admin_utilisateur_afficherTous') }}">Afficher la liste</a></li>*/
/* 									<li><a href="{{ path('lifo_classif_admin_utilisateur') }}">Ajouter</a></li>*/
/* 									<li><a href="{{ path('lifo_classif_admin_utilisateur_rechercher') }}">Rechercher</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						</ul>*/
/*             			<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a href="{{ path('logout') }}">Déconnexion</a></li>*/
/* 					</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 		<br />*/
/* 	<div class="container theme-showcase" role="main">*/
/* 			<div class="row">*/
/* 				<div class="col-lg-3">*/
/* 					<div class="menu">*/
/* 						{% if app.user %}*/
/* 						<h4>Derniers tessons ajoutés</h4>*/
/* 						{{ render(controller("LIFOClassifBundle:Platform:menu")) }} {%*/
/* 						endif %}*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div id="content" class="col-lg-9">{% block body %} {% endblock %}</div>*/
/* 			</div>*/
/* */
/* 		{% block footer %} {% endblock %}*/
/* */
/* 	</div>*/
/* </body>*/
/* </html>*/
