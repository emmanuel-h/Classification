<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a84fc38c244c514cac7d49c21a60467d3c0ed02c75693d78576abfb02f79ef4 = $this->env->getExtension("native_profiler");
        $__internal_8a84fc38c244c514cac7d49c21a60467d3c0ed02c75693d78576abfb02f79ef4->enter($__internal_8a84fc38c244c514cac7d49c21a60467d3c0ed02c75693d78576abfb02f79ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a84fc38c244c514cac7d49c21a60467d3c0ed02c75693d78576abfb02f79ef4->leave($__internal_8a84fc38c244c514cac7d49c21a60467d3c0ed02c75693d78576abfb02f79ef4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_445d4ae84de9cbadf22af4496ceb06c5d451f06665a5b941be9ea7c3fd084725 = $this->env->getExtension("native_profiler");
        $__internal_445d4ae84de9cbadf22af4496ceb06c5d451f06665a5b941be9ea7c3fd084725->enter($__internal_445d4ae84de9cbadf22af4496ceb06c5d451f06665a5b941be9ea7c3fd084725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_445d4ae84de9cbadf22af4496ceb06c5d451f06665a5b941be9ea7c3fd084725->leave($__internal_445d4ae84de9cbadf22af4496ceb06c5d451f06665a5b941be9ea7c3fd084725_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a9c3a59d2e394f32ee4c0550a585a42d126737e4de1b5d189057d837700c3a = $this->env->getExtension("native_profiler");
        $__internal_34a9c3a59d2e394f32ee4c0550a585a42d126737e4de1b5d189057d837700c3a->enter($__internal_34a9c3a59d2e394f32ee4c0550a585a42d126737e4de1b5d189057d837700c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
\t <form id=\"monForm\" method=\"post\">
        <fieldset>
        <legend>Connexion</legend>
        <p><label for=\"id\">Identifiant :&nbsp;</label><input type=\"text\" name=\"id\" id=\"id\" onblur=\"veridID(this)\" /></p>
        <p><label for=\"password\">Mot de passe :&nbsp;</label><input type=\"password\" name=\"password\" /></p>
        <p><label name=\"nostyle\">&nbsp;</label>
        <input type=\"submit\" value=\"Envoyer\" name=\"envoyer\" />
        <input type=\"reset\" value=\"Tout effacer\" /></p>
        </fieldset>
    </form>
";
        
        $__internal_34a9c3a59d2e394f32ee4c0550a585a42d126737e4de1b5d189057d837700c3a->leave($__internal_34a9c3a59d2e394f32ee4c0550a585a42d126737e4de1b5d189057d837700c3a_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* 	 <form id="monForm" method="post">*/
/*         <fieldset>*/
/*         <legend>Connexion</legend>*/
/*         <p><label for="id">Identifiant :&nbsp;</label><input type="text" name="id" id="id" onblur="veridID(this)" /></p>*/
/*         <p><label for="password">Mot de passe :&nbsp;</label><input type="password" name="password" /></p>*/
/*         <p><label name="nostyle">&nbsp;</label>*/
/*         <input type="submit" value="Envoyer" name="envoyer" />*/
/*         <input type="reset" value="Tout effacer" /></p>*/
/*         </fieldset>*/
/*     </form>*/
/* {% endblock %}*/
