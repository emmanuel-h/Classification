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
        $__internal_a7aebf700ca81c1e205fe61caf73c542b9db4a51c3b45c3b818b0472274fd8d2 = $this->env->getExtension("native_profiler");
        $__internal_a7aebf700ca81c1e205fe61caf73c542b9db4a51c3b45c3b818b0472274fd8d2->enter($__internal_a7aebf700ca81c1e205fe61caf73c542b9db4a51c3b45c3b818b0472274fd8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7aebf700ca81c1e205fe61caf73c542b9db4a51c3b45c3b818b0472274fd8d2->leave($__internal_a7aebf700ca81c1e205fe61caf73c542b9db4a51c3b45c3b818b0472274fd8d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_654a5d7cce00cb78c1794849b096969edbb4414377d808ea7d175ab9de169968 = $this->env->getExtension("native_profiler");
        $__internal_654a5d7cce00cb78c1794849b096969edbb4414377d808ea7d175ab9de169968->enter($__internal_654a5d7cce00cb78c1794849b096969edbb4414377d808ea7d175ab9de169968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_654a5d7cce00cb78c1794849b096969edbb4414377d808ea7d175ab9de169968->leave($__internal_654a5d7cce00cb78c1794849b096969edbb4414377d808ea7d175ab9de169968_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_26aaa3efc1269ad68d464c06f6d9923ff0594f5136360a4fb8ad6e4f3a3b4ddc = $this->env->getExtension("native_profiler");
        $__internal_26aaa3efc1269ad68d464c06f6d9923ff0594f5136360a4fb8ad6e4f3a3b4ddc->enter($__internal_26aaa3efc1269ad68d464c06f6d9923ff0594f5136360a4fb8ad6e4f3a3b4ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26aaa3efc1269ad68d464c06f6d9923ff0594f5136360a4fb8ad6e4f3a3b4ddc->leave($__internal_26aaa3efc1269ad68d464c06f6d9923ff0594f5136360a4fb8ad6e4f3a3b4ddc_prof);

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
