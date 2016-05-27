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
        $__internal_ff7cec52b635c10b837a99708975de308d79ade2b2eb404e1b2a7816c8ad29c0 = $this->env->getExtension("native_profiler");
        $__internal_ff7cec52b635c10b837a99708975de308d79ade2b2eb404e1b2a7816c8ad29c0->enter($__internal_ff7cec52b635c10b837a99708975de308d79ade2b2eb404e1b2a7816c8ad29c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
</head>
<body>

\t<div class=\"navbar navbar-inverse navbar-fixed-top\">

\t\t<div class=\"container\", id=\"menu_top\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Nouveau</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a></li>
\t\t\t\t\t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_ARCHEOLOGUE")) {
            // line 28
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor");
            echo "\">Paramètres<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor");
            echo "\">Type de décor</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_positionDecor");
            echo "\">Position de décor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
            echo "\">Administration<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t                <li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t                <li class=\"dropdown-header\">Utilisateur</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur_afficherTous");
            echo "\">Afficher la liste</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur");
            echo "\">Ajouter</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur_rechercher");
            echo "\">Rechercher</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t</ul>
            \t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Déconnexion</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<br /> <br />
\t<div class=\"container theme-showcase\" role=\"main\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t";
        // line 57
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 58
            echo "\t\t\t\t\t\t<h4>Derniers tessons ajoutés</h4>
\t\t\t\t\t\t";
            // line 59
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LIFOClassifBundle:Platform:menu"));
            echo " ";
        }
        // line 61
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"content\" class=\"col-lg-9\">";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t\t</div>

\t\t";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "
\t</div>
\t<script src=\" ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\" ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_ff7cec52b635c10b837a99708975de308d79ade2b2eb404e1b2a7816c8ad29c0->leave($__internal_ff7cec52b635c10b837a99708975de308d79ade2b2eb404e1b2a7816c8ad29c0_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b0e43b60a5be38e1b8bdb182c0a3343cb0d958b22ba185a3e1d4b580870aba3 = $this->env->getExtension("native_profiler");
        $__internal_9b0e43b60a5be38e1b8bdb182c0a3343cb0d958b22ba185a3e1d4b580870aba3->enter($__internal_9b0e43b60a5be38e1b8bdb182c0a3343cb0d958b22ba185a3e1d4b580870aba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_9b0e43b60a5be38e1b8bdb182c0a3343cb0d958b22ba185a3e1d4b580870aba3->leave($__internal_9b0e43b60a5be38e1b8bdb182c0a3343cb0d958b22ba185a3e1d4b580870aba3_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfdcf3fb12c72d008f373543ab58ef72e152f086ab796cc0ba2af41474d95570 = $this->env->getExtension("native_profiler");
        $__internal_bfdcf3fb12c72d008f373543ab58ef72e152f086ab796cc0ba2af41474d95570->enter($__internal_bfdcf3fb12c72d008f373543ab58ef72e152f086ab796cc0ba2af41474d95570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_bfdcf3fb12c72d008f373543ab58ef72e152f086ab796cc0ba2af41474d95570->leave($__internal_bfdcf3fb12c72d008f373543ab58ef72e152f086ab796cc0ba2af41474d95570_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9b825f1bb2634610a38dc92d2931eeffde061ea8ccb211cff4b816d2a212d334 = $this->env->getExtension("native_profiler");
        $__internal_9b825f1bb2634610a38dc92d2931eeffde061ea8ccb211cff4b816d2a212d334->enter($__internal_9b825f1bb2634610a38dc92d2931eeffde061ea8ccb211cff4b816d2a212d334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_9b825f1bb2634610a38dc92d2931eeffde061ea8ccb211cff4b816d2a212d334->leave($__internal_9b825f1bb2634610a38dc92d2931eeffde061ea8ccb211cff4b816d2a212d334_prof);

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
        return array (  202 => 67,  190 => 64,  178 => 10,  168 => 71,  164 => 70,  160 => 68,  158 => 67,  152 => 64,  147 => 61,  143 => 59,  140 => 58,  138 => 57,  126 => 48,  122 => 46,  115 => 42,  111 => 41,  107 => 40,  99 => 36,  96 => 35,  89 => 31,  85 => 30,  79 => 28,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  54 => 16,  50 => 15,  45 => 13,  40 => 11,  36 => 10,  25 => 1,);
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
/* </head>*/
/* <body>*/
/* */
/* 	<div class="navbar navbar-inverse navbar-fixed-top">*/
/* */
/* 		<div class="container", id="menu_top">*/
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
/* 		<br /> <br />*/
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
/* 	<script src=" {{ asset('bootstrap/js/jquery.min.js') }}"></script>*/
/* 	<script src=" {{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/* </body>*/
/* </html>*/
