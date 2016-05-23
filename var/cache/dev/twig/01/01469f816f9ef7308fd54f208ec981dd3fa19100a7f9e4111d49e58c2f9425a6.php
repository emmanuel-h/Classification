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
        $__internal_38751424233c25e50f69199388c26233fb58e6de6a338f3059902a4e2632e0c0 = $this->env->getExtension("native_profiler");
        $__internal_38751424233c25e50f69199388c26233fb58e6de6a338f3059902a4e2632e0c0->enter($__internal_38751424233c25e50f69199388c26233fb58e6de6a338f3059902a4e2632e0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38751424233c25e50f69199388c26233fb58e6de6a338f3059902a4e2632e0c0->leave($__internal_38751424233c25e50f69199388c26233fb58e6de6a338f3059902a4e2632e0c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2ba201d110d38d40457111a8e132fee824917f965fd5888c91939e1c0cc5a3f = $this->env->getExtension("native_profiler");
        $__internal_f2ba201d110d38d40457111a8e132fee824917f965fd5888c91939e1c0cc5a3f->enter($__internal_f2ba201d110d38d40457111a8e132fee824917f965fd5888c91939e1c0cc5a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Authentification";
        
        $__internal_f2ba201d110d38d40457111a8e132fee824917f965fd5888c91939e1c0cc5a3f->leave($__internal_f2ba201d110d38d40457111a8e132fee824917f965fd5888c91939e1c0cc5a3f_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_a136ce8fe00bcac511386e16a40fa5740b52f0f3f8b1945ed6154497cbfa75b6 = $this->env->getExtension("native_profiler");
        $__internal_a136ce8fe00bcac511386e16a40fa5740b52f0f3f8b1945ed6154497cbfa75b6->enter($__internal_a136ce8fe00bcac511386e16a40fa5740b52f0f3f8b1945ed6154497cbfa75b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
    <label for=\"username\">Identifiant :</label>
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
        
        $__internal_a136ce8fe00bcac511386e16a40fa5740b52f0f3f8b1945ed6154497cbfa75b6->leave($__internal_a136ce8fe00bcac511386e16a40fa5740b52f0f3f8b1945ed6154497cbfa75b6_prof);

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
/*     <label for="username">Identifiant :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* {% endblock %}*/
