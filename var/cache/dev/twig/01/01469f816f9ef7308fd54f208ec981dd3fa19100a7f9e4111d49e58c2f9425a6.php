<?php

/* LIFOClassifBundle:Security:login.html.twig */
class __TwigTemplate_cc209a980d5ec969f75d752fbf3846ef146b84dc96a9151baa6c59c1962feb69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5357dad77d1a7c9eeb0004f87f7edbc3614a15fff56981991dc4fd5e3eb52391 = $this->env->getExtension("native_profiler");
        $__internal_5357dad77d1a7c9eeb0004f87f7edbc3614a15fff56981991dc4fd5e3eb52391->enter($__internal_5357dad77d1a7c9eeb0004f87f7edbc3614a15fff56981991dc4fd5e3eb52391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5357dad77d1a7c9eeb0004f87f7edbc3614a15fff56981991dc4fd5e3eb52391->leave($__internal_5357dad77d1a7c9eeb0004f87f7edbc3614a15fff56981991dc4fd5e3eb52391_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef9e29ab897699490e3daf42e281063089320826e1863df72615aaff3b7086ec = $this->env->getExtension("native_profiler");
        $__internal_ef9e29ab897699490e3daf42e281063089320826e1863df72615aaff3b7086ec->enter($__internal_ef9e29ab897699490e3daf42e281063089320826e1863df72615aaff3b7086ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Authentification";
        
        $__internal_ef9e29ab897699490e3daf42e281063089320826e1863df72615aaff3b7086ec->leave($__internal_ef9e29ab897699490e3daf42e281063089320826e1863df72615aaff3b7086ec_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_39576505433667f34f349f825c3262935542165d05c6da5f10f8925f66702bad = $this->env->getExtension("native_profiler");
        $__internal_39576505433667f34f349f825c3262935542165d05c6da5f10f8925f66702bad->enter($__internal_39576505433667f34f349f825c3262935542165d05c6da5f10f8925f66702bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_39576505433667f34f349f825c3262935542165d05c6da5f10f8925f66702bad->leave($__internal_39576505433667f34f349f825c3262935542165d05c6da5f10f8925f66702bad_prof);

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
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
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
