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
        $__internal_750a61db37c4e5c363aebf32d1c4ce879d3f26a2049c2c164e5d3d048891df0b = $this->env->getExtension("native_profiler");
        $__internal_750a61db37c4e5c363aebf32d1c4ce879d3f26a2049c2c164e5d3d048891df0b->enter($__internal_750a61db37c4e5c363aebf32d1c4ce879d3f26a2049c2c164e5d3d048891df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750a61db37c4e5c363aebf32d1c4ce879d3f26a2049c2c164e5d3d048891df0b->leave($__internal_750a61db37c4e5c363aebf32d1c4ce879d3f26a2049c2c164e5d3d048891df0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d9af3b5edf93fbe4dd44ff6e1f69a175be5b02b66944971fdb19f415aa43215 = $this->env->getExtension("native_profiler");
        $__internal_8d9af3b5edf93fbe4dd44ff6e1f69a175be5b02b66944971fdb19f415aa43215->enter($__internal_8d9af3b5edf93fbe4dd44ff6e1f69a175be5b02b66944971fdb19f415aa43215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_8d9af3b5edf93fbe4dd44ff6e1f69a175be5b02b66944971fdb19f415aa43215->leave($__internal_8d9af3b5edf93fbe4dd44ff6e1f69a175be5b02b66944971fdb19f415aa43215_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eeeda0634674bd2d2b4b9f886a77ae963f0b8250bf9cebec0421f14f756a5ef = $this->env->getExtension("native_profiler");
        $__internal_6eeeda0634674bd2d2b4b9f886a77ae963f0b8250bf9cebec0421f14f756a5ef->enter($__internal_6eeeda0634674bd2d2b4b9f886a77ae963f0b8250bf9cebec0421f14f756a5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6eeeda0634674bd2d2b4b9f886a77ae963f0b8250bf9cebec0421f14f756a5ef->leave($__internal_6eeeda0634674bd2d2b4b9f886a77ae963f0b8250bf9cebec0421f14f756a5ef_prof);

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
