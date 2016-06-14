<?php

/* @LIFOClassif/Security/login.html.twig */
class __TwigTemplate_3c537874b96f556a39ee85130a98f61bc168cadc8f6334feffaa23edf1cdaa84 extends Twig_Template
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
        $__internal_604a25859ba2126e68b5ee87eb2c7efa20278e36142b2156b34b64baf13024c1 = $this->env->getExtension("native_profiler");
        $__internal_604a25859ba2126e68b5ee87eb2c7efa20278e36142b2156b34b64baf13024c1->enter($__internal_604a25859ba2126e68b5ee87eb2c7efa20278e36142b2156b34b64baf13024c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Security/login.html.twig"));

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

    <!-- Bootstrap core CSS -->
\t<link href=\"../bootstrap/css/bootstrap.min.css\"
\trel=\"stylesheet\">
\t
    <link href=\"../styles/signin.css\" rel=\"stylesheet\">

  </head>

  <body>

    <div class=\"container\">

      <form class=\"form-signin\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <h2 class=\"form-signin-heading\">S'authentifier</h2>
        <label for=\"username\" class=\"sr-only\">Nom d'utilisateur</label>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Nom d'utilisateur\" required autofocus>
        <label for=\"password\" class=\"sr-only\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>
";
        
        $__internal_604a25859ba2126e68b5ee87eb2c7efa20278e36142b2156b34b64baf13024c1->leave($__internal_604a25859ba2126e68b5ee87eb2c7efa20278e36142b2156b34b64baf13024c1_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 26,  22 => 1,);
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
/*     <!-- Bootstrap core CSS -->*/
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
/*       <form class="form-signin" action="{{ path('login_check') }}" method="post">*/
/*         <h2 class="form-signin-heading">S'authentifier</h2>*/
/*         <label for="username" class="sr-only">Nom d'utilisateur</label>*/
/*         <input type="text" id="username" name="_username" class="form-control" placeholder="Nom d'utilisateur" required autofocus>*/
/*         <label for="password" class="sr-only">Mot de passe</label>*/
/*         <input type="password" id="password" name="_password" class="form-control" placeholder="Mot de passe" required>*/
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>*/
/*       </form>*/
/* */
/*     </div> <!-- /container -->*/
/* */
/*   </body>*/
/* </html>*/
/* */
