<?php

/* @LIFOClassif/Platform/index.html.twig */
class __TwigTemplate_6c5727bd5ba52cac76d8756f50842e6d94474be7170dde15522885ae5d5c1fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/index.html.twig", 1);
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
        $__internal_933da049a3648d9e1620ff14be50db0f3d07dbc4dc7a743f9805aa8ca2380d89 = $this->env->getExtension("native_profiler");
        $__internal_933da049a3648d9e1620ff14be50db0f3d07dbc4dc7a743f9805aa8ca2380d89->enter($__internal_933da049a3648d9e1620ff14be50db0f3d07dbc4dc7a743f9805aa8ca2380d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933da049a3648d9e1620ff14be50db0f3d07dbc4dc7a743f9805aa8ca2380d89->leave($__internal_933da049a3648d9e1620ff14be50db0f3d07dbc4dc7a743f9805aa8ca2380d89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91a9fb8c44b0f37fb0b0b671294119d928be637c4efb5fdf9133608b50c4a7f8 = $this->env->getExtension("native_profiler");
        $__internal_91a9fb8c44b0f37fb0b0b671294119d928be637c4efb5fdf9133608b50c4a7f8->enter($__internal_91a9fb8c44b0f37fb0b0b671294119d928be637c4efb5fdf9133608b50c4a7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_91a9fb8c44b0f37fb0b0b671294119d928be637c4efb5fdf9133608b50c4a7f8->leave($__internal_91a9fb8c44b0f37fb0b0b671294119d928be637c4efb5fdf9133608b50c4a7f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8fdc2db1875e467b377a6bc62127eeff35268df790da5b9455a0e682f9c63b4 = $this->env->getExtension("native_profiler");
        $__internal_e8fdc2db1875e467b377a6bc62127eeff35268df790da5b9455a0e682f9c63b4->enter($__internal_e8fdc2db1875e467b377a6bc62127eeff35268df790da5b9455a0e682f9c63b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8fdc2db1875e467b377a6bc62127eeff35268df790da5b9455a0e682f9c63b4->leave($__internal_e8fdc2db1875e467b377a6bc62127eeff35268df790da5b9455a0e682f9c63b4_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/index.html.twig";
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
