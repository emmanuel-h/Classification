<?php

/* @LIFOClassif/Security/login.html.twig */
class __TwigTemplate_3c537874b96f556a39ee85130a98f61bc168cadc8f6334feffaa23edf1cdaa84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Security/login.html.twig", 1);
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
        $__internal_8ecac954e092bdbcd4f70594b7dc0f3f944c58d3b97c10c56cb87b1aaf6c2374 = $this->env->getExtension("native_profiler");
        $__internal_8ecac954e092bdbcd4f70594b7dc0f3f944c58d3b97c10c56cb87b1aaf6c2374->enter($__internal_8ecac954e092bdbcd4f70594b7dc0f3f944c58d3b97c10c56cb87b1aaf6c2374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecac954e092bdbcd4f70594b7dc0f3f944c58d3b97c10c56cb87b1aaf6c2374->leave($__internal_8ecac954e092bdbcd4f70594b7dc0f3f944c58d3b97c10c56cb87b1aaf6c2374_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6564e19a9138587df681b333b241d1001e16b35fb81eff55252dc30682d0e59c = $this->env->getExtension("native_profiler");
        $__internal_6564e19a9138587df681b333b241d1001e16b35fb81eff55252dc30682d0e59c->enter($__internal_6564e19a9138587df681b333b241d1001e16b35fb81eff55252dc30682d0e59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Authentification";
        
        $__internal_6564e19a9138587df681b333b241d1001e16b35fb81eff55252dc30682d0e59c->leave($__internal_6564e19a9138587df681b333b241d1001e16b35fb81eff55252dc30682d0e59c_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_22ada56bc766d8036a6f909f411768b8fb192551250c112df35b81f4d23f7e7f = $this->env->getExtension("native_profiler");
        $__internal_22ada56bc766d8036a6f909f411768b8fb192551250c112df35b81f4d23f7e7f->enter($__internal_22ada56bc766d8036a6f909f411768b8fb192551250c112df35b81f4d23f7e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_22ada56bc766d8036a6f909f411768b8fb192551250c112df35b81f4d23f7e7f->leave($__internal_22ada56bc766d8036a6f909f411768b8fb192551250c112df35b81f4d23f7e7f_prof);

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
