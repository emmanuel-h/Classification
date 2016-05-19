<?php

/* LIFOUserBundle:Security:login.html.twig */
class __TwigTemplate_83a9caa3c6d41295d64f09c0b598d2901e42cd045b7c4b45ec5afb7d96b26bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOUserBundle:Security:login.html.twig", 1);
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
        $__internal_b2bf02ae05e9c9bba993f70611e92fc0d8c0c8534e2655529446fc7952211df2 = $this->env->getExtension("native_profiler");
        $__internal_b2bf02ae05e9c9bba993f70611e92fc0d8c0c8534e2655529446fc7952211df2->enter($__internal_b2bf02ae05e9c9bba993f70611e92fc0d8c0c8534e2655529446fc7952211df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2bf02ae05e9c9bba993f70611e92fc0d8c0c8534e2655529446fc7952211df2->leave($__internal_b2bf02ae05e9c9bba993f70611e92fc0d8c0c8534e2655529446fc7952211df2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe91f567c4aca502d22871b85c03918bc79a914b3fd94fda3c3964748a0d334c = $this->env->getExtension("native_profiler");
        $__internal_fe91f567c4aca502d22871b85c03918bc79a914b3fd94fda3c3964748a0d334c->enter($__internal_fe91f567c4aca502d22871b85c03918bc79a914b3fd94fda3c3964748a0d334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Authentification";
        
        $__internal_fe91f567c4aca502d22871b85c03918bc79a914b3fd94fda3c3964748a0d334c->leave($__internal_fe91f567c4aca502d22871b85c03918bc79a914b3fd94fda3c3964748a0d334c_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_56d7661e40a3a9507be273511415e61b40f18b19da80d04fed0e4becc20e6845 = $this->env->getExtension("native_profiler");
        $__internal_56d7661e40a3a9507be273511415e61b40f18b19da80d04fed0e4becc20e6845->enter($__internal_56d7661e40a3a9507be273511415e61b40f18b19da80d04fed0e4becc20e6845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_56d7661e40a3a9507be273511415e61b40f18b19da80d04fed0e4becc20e6845->leave($__internal_56d7661e40a3a9507be273511415e61b40f18b19da80d04fed0e4becc20e6845_prof);

    }

    public function getTemplateName()
    {
        return "LIFOUserBundle:Security:login.html.twig";
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
