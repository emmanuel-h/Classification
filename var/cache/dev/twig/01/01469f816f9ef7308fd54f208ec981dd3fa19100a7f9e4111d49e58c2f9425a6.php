<?php

/* LIFOClassifBundle:Security:login.html.twig */
class __TwigTemplate_cc209a980d5ec969f75d752fbf3846ef146b84dc96a9151baa6c59c1962feb69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37508b9a8a5b8a87dccecd1faf3de1b237a739a87aef303651d8664938f5545c = $this->env->getExtension("native_profiler");
        $__internal_37508b9a8a5b8a87dccecd1faf3de1b237a739a87aef303651d8664938f5545c->enter($__internal_37508b9a8a5b8a87dccecd1faf3de1b237a739a87aef303651d8664938f5545c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Authentification</title>

\t<link href=\"../bootstrap/css/bootstrap.min.css\"
\trel=\"stylesheet\">
\t
    <link href=\"../styles/signin.css\" rel=\"stylesheet\">

  </head>

  <body>

    <div class=\"container\">

      <form class=\"form-signin\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("login_check")), "html", null, true);
        echo "\" method=\"post\">
        <h2 class=\"form-signin-heading\">S'authentifier</h2>
        <label for=\"username\" class=\"sr-only\">Nom d'utilisateur</label>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Nom d'utilisateur\" required autofocus>
        <label for=\"password\" class=\"sr-only\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
      </form>

    </div>

  </body>
</html>
";
        
        $__internal_37508b9a8a5b8a87dccecd1faf3de1b237a739a87aef303651d8664938f5545c->leave($__internal_37508b9a8a5b8a87dccecd1faf3de1b237a739a87aef303651d8664938f5545c_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 25,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>Authentification</title>*/
/* */
/* 	<link href="../bootstrap/css/bootstrap.min.css"*/
/* 	rel="stylesheet">*/
/* 	*/
/*     <link href="../styles/signin.css" rel="stylesheet">*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <div class="container">*/
/* */
/*       <form class="form-signin" action="{{ base_url ~path('login_check') }}" method="post">*/
/*         <h2 class="form-signin-heading">S'authentifier</h2>*/
/*         <label for="username" class="sr-only">Nom d'utilisateur</label>*/
/*         <input type="text" id="username" name="_username" class="form-control" placeholder="Nom d'utilisateur" required autofocus>*/
/*         <label for="password" class="sr-only">Mot de passe</label>*/
/*         <input type="password" id="password" name="_password" class="form-control" placeholder="Mot de passe" required>*/
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>*/
/*       </form>*/
/* */
/*     </div>*/
/* */
/*   </body>*/
/* </html>*/
/* */
