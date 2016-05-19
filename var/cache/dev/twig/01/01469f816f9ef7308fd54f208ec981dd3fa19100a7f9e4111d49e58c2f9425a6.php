<?php

/* LIFOClassifBundle:Security:login.html.twig */
class __TwigTemplate_cc209a980d5ec969f75d752fbf3846ef146b84dc96a9151baa6c59c1962feb69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dc08e344a5d4266b84ab377307d42170973e1aa3be6319cffd5b2e8972a6a6d = $this->env->getExtension("native_profiler");
        $__internal_6dc08e344a5d4266b84ab377307d42170973e1aa3be6319cffd5b2e8972a6a6d->enter($__internal_6dc08e344a5d4266b84ab377307d42170973e1aa3be6319cffd5b2e8972a6a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc08e344a5d4266b84ab377307d42170973e1aa3be6319cffd5b2e8972a6a6d->leave($__internal_6dc08e344a5d4266b84ab377307d42170973e1aa3be6319cffd5b2e8972a6a6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca22f82beaa5f34978189aacd3bd030d395dc146a817eb89fcbc72c915463bc = $this->env->getExtension("native_profiler");
        $__internal_bca22f82beaa5f34978189aacd3bd030d395dc146a817eb89fcbc72c915463bc->enter($__internal_bca22f82beaa5f34978189aacd3bd030d395dc146a817eb89fcbc72c915463bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Authentification";
        
        $__internal_bca22f82beaa5f34978189aacd3bd030d395dc146a817eb89fcbc72c915463bc->leave($__internal_bca22f82beaa5f34978189aacd3bd030d395dc146a817eb89fcbc72c915463bc_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_0121f4b248b68c0c215a120916ecaae8ba31cbcb78cefd62755c226663fd4bee = $this->env->getExtension("native_profiler");
        $__internal_0121f4b248b68c0c215a120916ecaae8ba31cbcb78cefd62755c226663fd4bee->enter($__internal_0121f4b248b68c0c215a120916ecaae8ba31cbcb78cefd62755c226663fd4bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
  ";
        // line 8
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "
  <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_0121f4b248b68c0c215a120916ecaae8ba31cbcb78cefd62755c226663fd4bee->leave($__internal_0121f4b248b68c0c215a120916ecaae8ba31cbcb78cefd62755c226663fd4bee_prof);

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
        return array (  74 => 14,  69 => 12,  66 => 11,  60 => 9,  57 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Authentification{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* {% endblock %}*/
