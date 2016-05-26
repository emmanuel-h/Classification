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
        $__internal_fad4241772cecb7f74a1ce5063322aebe5cfaf053c7f2f5eb66bfbd581f3bb4d = $this->env->getExtension("native_profiler");
        $__internal_fad4241772cecb7f74a1ce5063322aebe5cfaf053c7f2f5eb66bfbd581f3bb4d->enter($__internal_fad4241772cecb7f74a1ce5063322aebe5cfaf053c7f2f5eb66bfbd581f3bb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor");
            echo "\">Paramètres<b class=\"caret\"></b></a>
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
        
        $__internal_fad4241772cecb7f74a1ce5063322aebe5cfaf053c7f2f5eb66bfbd581f3bb4d->leave($__internal_fad4241772cecb7f74a1ce5063322aebe5cfaf053c7f2f5eb66bfbd581f3bb4d_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_812e07c3d1617a1f5eff15bfc515e15a03c700a9759428df902308d99711df0a = $this->env->getExtension("native_profiler");
        $__internal_812e07c3d1617a1f5eff15bfc515e15a03c700a9759428df902308d99711df0a->enter($__internal_812e07c3d1617a1f5eff15bfc515e15a03c700a9759428df902308d99711df0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_812e07c3d1617a1f5eff15bfc515e15a03c700a9759428df902308d99711df0a->leave($__internal_812e07c3d1617a1f5eff15bfc515e15a03c700a9759428df902308d99711df0a_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_44bb5b20108c6b016c360b18ed11bc913f0399b97c817785a535864de9fc45a8 = $this->env->getExtension("native_profiler");
        $__internal_44bb5b20108c6b016c360b18ed11bc913f0399b97c817785a535864de9fc45a8->enter($__internal_44bb5b20108c6b016c360b18ed11bc913f0399b97c817785a535864de9fc45a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_44bb5b20108c6b016c360b18ed11bc913f0399b97c817785a535864de9fc45a8->leave($__internal_44bb5b20108c6b016c360b18ed11bc913f0399b97c817785a535864de9fc45a8_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        $__internal_09e86eac404a1527af7f46001c7e3af407e5590804d6749fdb3fae72f2165816 = $this->env->getExtension("native_profiler");
        $__internal_09e86eac404a1527af7f46001c7e3af407e5590804d6749fdb3fae72f2165816->enter($__internal_09e86eac404a1527af7f46001c7e3af407e5590804d6749fdb3fae72f2165816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_09e86eac404a1527af7f46001c7e3af407e5590804d6749fdb3fae72f2165816->leave($__internal_09e86eac404a1527af7f46001c7e3af407e5590804d6749fdb3fae72f2165816_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_214dc1ecce256420ed5a81701cccf07a9a18855ca707d8fc0ac2602769b877d0 = $this->env->getExtension("native_profiler");
        $__internal_214dc1ecce256420ed5a81701cccf07a9a18855ca707d8fc0ac2602769b877d0->enter($__internal_214dc1ecce256420ed5a81701cccf07a9a18855ca707d8fc0ac2602769b877d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "\t<script src=\"../bootstrap/js/jquery.js\"></script>
\t<script src=\"../bootstrap/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_214dc1ecce256420ed5a81701cccf07a9a18855ca707d8fc0ac2602769b877d0->leave($__internal_214dc1ecce256420ed5a81701cccf07a9a18855ca707d8fc0ac2602769b877d0_prof);

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
        return array (  210 => 76,  204 => 75,  192 => 71,  180 => 65,  168 => 10,  160 => 79,  158 => 75,  153 => 72,  151 => 71,  142 => 65,  137 => 62,  133 => 60,  130 => 59,  128 => 58,  113 => 47,  108 => 45,  105 => 44,  102 => 43,  95 => 39,  91 => 38,  85 => 36,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  51 => 15,  46 => 13,  41 => 11,  37 => 10,  26 => 1,);
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
/* 							<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="{{ path('lifo_classif_parametres_typeDecor') }}">Paramètres<b class="caret"></b></a>*/
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
