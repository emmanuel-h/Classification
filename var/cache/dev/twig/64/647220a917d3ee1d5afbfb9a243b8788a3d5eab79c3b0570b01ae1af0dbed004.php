<?php

/* @LIFOClassif/Security/login.html.twig */
class __TwigTemplate_3c537874b96f556a39ee85130a98f61bc168cadc8f6334feffaa23edf1cdaa84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Security/login.html.twig", 1);
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
        $__internal_68e4fe2b18cb36792d0ceba459ff0cf04a301c50daa56aaa5f62f610fce5213c = $this->env->getExtension("native_profiler");
        $__internal_68e4fe2b18cb36792d0ceba459ff0cf04a301c50daa56aaa5f62f610fce5213c->enter($__internal_68e4fe2b18cb36792d0ceba459ff0cf04a301c50daa56aaa5f62f610fce5213c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e4fe2b18cb36792d0ceba459ff0cf04a301c50daa56aaa5f62f610fce5213c->leave($__internal_68e4fe2b18cb36792d0ceba459ff0cf04a301c50daa56aaa5f62f610fce5213c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff388eef9986bca100e8df0c810df25981cc4ba8efa5ade575d85b8a3b88b15a = $this->env->getExtension("native_profiler");
        $__internal_ff388eef9986bca100e8df0c810df25981cc4ba8efa5ade575d85b8a3b88b15a->enter($__internal_ff388eef9986bca100e8df0c810df25981cc4ba8efa5ade575d85b8a3b88b15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Authentification";
        
        $__internal_ff388eef9986bca100e8df0c810df25981cc4ba8efa5ade575d85b8a3b88b15a->leave($__internal_ff388eef9986bca100e8df0c810df25981cc4ba8efa5ade575d85b8a3b88b15a_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_267ff438f17fc65f4c394c99c223242a8f933a9a2f96ca65a5fb977ab99534b6 = $this->env->getExtension("native_profiler");
        $__internal_267ff438f17fc65f4c394c99c223242a8f933a9a2f96ca65a5fb977ab99534b6->enter($__internal_267ff438f17fc65f4c394c99c223242a8f933a9a2f96ca65a5fb977ab99534b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_267ff438f17fc65f4c394c99c223242a8f933a9a2f96ca65a5fb977ab99534b6->leave($__internal_267ff438f17fc65f4c394c99c223242a8f933a9a2f96ca65a5fb977ab99534b6_prof);

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
