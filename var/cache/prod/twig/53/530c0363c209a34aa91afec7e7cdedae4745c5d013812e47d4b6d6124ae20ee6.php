<?php

/* LIFOClassifBundle:Security:login.html.twig */
class __TwigTemplate_47a29e283b614e6a872a5784c5c85ef838b76dd0488e8cf40d886d77da3ac9a9 extends Twig_Template
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
        return array (  46 => 26,  19 => 1,);
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