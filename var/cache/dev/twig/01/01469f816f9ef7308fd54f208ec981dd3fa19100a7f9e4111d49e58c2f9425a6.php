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
        $__internal_58b27de3c90652594793037187e09ce12c6440105a63097671d2af870b72164f = $this->env->getExtension("native_profiler");
        $__internal_58b27de3c90652594793037187e09ce12c6440105a63097671d2af870b72164f->enter($__internal_58b27de3c90652594793037187e09ce12c6440105a63097671d2af870b72164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b27de3c90652594793037187e09ce12c6440105a63097671d2af870b72164f->leave($__internal_58b27de3c90652594793037187e09ce12c6440105a63097671d2af870b72164f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_281d236c05d86bd2344d3f37c6d1c48afbb53e68d0d61fff4a1c33fb6fde4831 = $this->env->getExtension("native_profiler");
        $__internal_281d236c05d86bd2344d3f37c6d1c48afbb53e68d0d61fff4a1c33fb6fde4831->enter($__internal_281d236c05d86bd2344d3f37c6d1c48afbb53e68d0d61fff4a1c33fb6fde4831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Authentification";
        
        $__internal_281d236c05d86bd2344d3f37c6d1c48afbb53e68d0d61fff4a1c33fb6fde4831->leave($__internal_281d236c05d86bd2344d3f37c6d1c48afbb53e68d0d61fff4a1c33fb6fde4831_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_9b38e8042c512e5b87c24a5c91a44e1fdca6696541b6e4537a94a356c5d35452 = $this->env->getExtension("native_profiler");
        $__internal_9b38e8042c512e5b87c24a5c91a44e1fdca6696541b6e4537a94a356c5d35452->enter($__internal_9b38e8042c512e5b87c24a5c91a44e1fdca6696541b6e4537a94a356c5d35452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_9b38e8042c512e5b87c24a5c91a44e1fdca6696541b6e4537a94a356c5d35452->leave($__internal_9b38e8042c512e5b87c24a5c91a44e1fdca6696541b6e4537a94a356c5d35452_prof);

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
