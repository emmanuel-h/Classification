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
        $__internal_591517ff70dffc26077e691ed28c787facede66abe3dac1b0bf70fa84d354acc = $this->env->getExtension("native_profiler");
        $__internal_591517ff70dffc26077e691ed28c787facede66abe3dac1b0bf70fa84d354acc->enter($__internal_591517ff70dffc26077e691ed28c787facede66abe3dac1b0bf70fa84d354acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css")), "html", null, true);
        echo "\"
\trel=\"stylesheet\">
<link href=\" ";
        // line 13
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css")), "html", null, true);
        echo "\"
\trel=\"stylesheet\">
<link href=\" ";
        // line 15
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("styles/layout.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\" ";
        // line 16
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("styles/menu.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\" ";
        // line 17
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("styles/table.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\" ";
        // line 18
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("fancybox/source/jquery.fancybox.css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<script type=\"text/javascript\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("fancybox/source/jquery.fancybox.pack.js")), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 21
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 22
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/foToolTip.js")), "html", null, true);
        echo "\"></script>
</head>
<body>

\t<div class=\"navbar navbar-inverse navbar-fixed-top\">

\t\t<div class=\"container\" id=\"menu_top\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_upload")), "html", null, true);
        echo "\">Nouveau</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_recherche")), "html", null, true);
        echo "\">Recherche</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_classification")), "html", null, true);
        echo "\">Classification</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations")), "html", null, true);
        echo "\">Numérisations</a></li>
\t\t\t\t\t\t";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_ARCHEOLOGUE")) {
            // line 35
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor");
            echo "\">Paramètres<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_parametres_typeDecor")), "html", null, true);
            echo "\">Type de décor</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_parametres_positionDecor")), "html", null, true);
            echo "\">Position de décor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
            echo "\">Administration<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t                <li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t                <li class=\"dropdown-header\">Utilisateur</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur_afficherTous")), "html", null, true);
            echo "\">Afficher la liste</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur")), "html", null, true);
            echo "\">Ajouter</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur_rechercher")), "html", null, true);
            echo "\">Rechercher</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t</ul>
            \t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("logout")), "html", null, true);
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
        // line 64
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 65
            echo "\t\t\t\t\t\t  <h4>Derniers tessons ajoutés</h4>
\t\t\t\t\t\t  ";
            // line 66
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LIFOClassifBundle:Platform:menu"));
            echo "
\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"content\" class=\"col-lg-9\">";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t\t</div>

\t\t";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
\t</div>
</body>
</html>";
        
        $__internal_591517ff70dffc26077e691ed28c787facede66abe3dac1b0bf70fa84d354acc->leave($__internal_591517ff70dffc26077e691ed28c787facede66abe3dac1b0bf70fa84d354acc_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a0162456c364c140163e28fdc1bd2edf09af2aa0dbde9f395ba42108fcac7a8 = $this->env->getExtension("native_profiler");
        $__internal_5a0162456c364c140163e28fdc1bd2edf09af2aa0dbde9f395ba42108fcac7a8->enter($__internal_5a0162456c364c140163e28fdc1bd2edf09af2aa0dbde9f395ba42108fcac7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_5a0162456c364c140163e28fdc1bd2edf09af2aa0dbde9f395ba42108fcac7a8->leave($__internal_5a0162456c364c140163e28fdc1bd2edf09af2aa0dbde9f395ba42108fcac7a8_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_7207d60f8dbfc7d6cf629751e540aea7fb0fe706d2a26bab24cc3b4669cae3f8 = $this->env->getExtension("native_profiler");
        $__internal_7207d60f8dbfc7d6cf629751e540aea7fb0fe706d2a26bab24cc3b4669cae3f8->enter($__internal_7207d60f8dbfc7d6cf629751e540aea7fb0fe706d2a26bab24cc3b4669cae3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_7207d60f8dbfc7d6cf629751e540aea7fb0fe706d2a26bab24cc3b4669cae3f8->leave($__internal_7207d60f8dbfc7d6cf629751e540aea7fb0fe706d2a26bab24cc3b4669cae3f8_prof);

    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ae881eaf45e54b2bcb312e480e4d300328462899f6e1f24d76d993abe2ca60bc = $this->env->getExtension("native_profiler");
        $__internal_ae881eaf45e54b2bcb312e480e4d300328462899f6e1f24d76d993abe2ca60bc->enter($__internal_ae881eaf45e54b2bcb312e480e4d300328462899f6e1f24d76d993abe2ca60bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_ae881eaf45e54b2bcb312e480e4d300328462899f6e1f24d76d993abe2ca60bc->leave($__internal_ae881eaf45e54b2bcb312e480e4d300328462899f6e1f24d76d993abe2ca60bc_prof);

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
        return array (  223 => 74,  211 => 71,  199 => 10,  189 => 75,  187 => 74,  181 => 71,  176 => 68,  171 => 66,  168 => 65,  166 => 64,  154 => 55,  150 => 53,  143 => 49,  139 => 48,  135 => 47,  127 => 43,  124 => 42,  117 => 38,  113 => 37,  107 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  45 => 13,  40 => 11,  36 => 10,  25 => 1,);
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
/* <link href=" {{ base_url~asset('bootstrap/css/bootstrap.min.css') }}"*/
/* 	rel="stylesheet">*/
/* <link href=" {{ base_url ~asset ('bootstrap/css/bootstrap-theme.min.css') }}"*/
/* 	rel="stylesheet">*/
/* <link href=" {{ base_url ~asset ('styles/layout.css') }}" rel="stylesheet" />*/
/* <link href=" {{ base_url ~asset ('styles/menu.css') }}" rel="stylesheet" />*/
/* <link href=" {{ base_url ~asset ('styles/table.css') }}" rel="stylesheet" />*/
/* <link rel="stylesheet" href=" {{ base_url ~asset ('fancybox/source/jquery.fancybox.css') }}" type="text/css" media="screen" />*/
/* <script type="text/javascript" src=" {{ base_url ~asset('bootstrap/js/jquery.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ base_url ~asset('fancybox/source/jquery.fancybox.pack.js') }}"></script>*/
/* <script src=" {{ base_url ~asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/* <script src=" {{ base_url ~asset('bootstrap/js/foToolTip.js') }}"></script>*/
/* </head>*/
/* <body>*/
/* */
/* 	<div class="navbar navbar-inverse navbar-fixed-top">*/
/* */
/* 		<div class="container" id="menu_top">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li><a href="{{ base_url ~path('lifo_classif_upload') }}">Nouveau</a></li>*/
/* 						<li><a href="{{ base_url ~path('lifo_classif_recherche') }}">Recherche</a></li>*/
/* 						<li><a href="{{ base_url ~path('lifo_classif_classification') }}">Classification</a></li>*/
/* 						<li><a href="{{ base_url ~path('lifo_classif_numerisations') }}">Numérisations</a></li>*/
/* 						{% if is_granted('ROLE_ARCHEOLOGUE') %}*/
/* 							<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="{{ path('lifo_classif_parametres_typeDecor') }}">Paramètres<b class="caret"></b></a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<li><a href="{{ base_url ~path('lifo_classif_parametres_typeDecor') }}">Type de décor</a></li>*/
/* 									<li><a href="{{ base_url ~path('lifo_classif_parametres_positionDecor') }}">Position de décor</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						{% if is_granted('ROLE_ADMIN') %}*/
/* 							<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="{{ path('lifo_classif_admin') }}">Administration<b class="caret"></b></a>*/
/* 								<ul class="dropdown-menu">*/
/* 					                <li role="separator" class="divider"></li>*/
/* 					                <li class="dropdown-header">Utilisateur</li>*/
/* 									<li><a href="{{ base_url ~path('lifo_classif_admin_utilisateur_afficherTous') }}">Afficher la liste</a></li>*/
/* 									<li><a href="{{ base_url ~path('lifo_classif_admin_utilisateur') }}">Ajouter</a></li>*/
/* 									<li><a href="{{ base_url ~path('lifo_classif_admin_utilisateur_rechercher') }}">Rechercher</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						</ul>*/
/*             			<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a href="{{ base_url ~path('logout') }}">Déconnexion</a></li>*/
/* 					</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 		<br />*/
/* 	<div class="container theme-showcase" role="main">*/
/* 			<div class="row">*/
/* 				<div class="col-lg-3">*/
/* 					<div class="menu">*/
/* 						{% if app.user %}*/
/* 						  <h4>Derniers tessons ajoutés</h4>*/
/* 						  {{ render(controller("LIFOClassifBundle:Platform:menu")) }}*/
/* 						{% endif %}*/
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
