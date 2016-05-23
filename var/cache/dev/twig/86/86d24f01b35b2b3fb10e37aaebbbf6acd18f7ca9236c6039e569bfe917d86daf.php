<?php

/* LIFOClassifBundle:Platform:menu.html.twig */
class __TwigTemplate_eff946059a16195d1b2583d1f29284c26b611723910e89b708b24af0236b1c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6c5e2c64a1fb3d8a6b6f78529fe8cbce075fd0a30ea6d586d96b52247cfb201 = $this->env->getExtension("native_profiler");
        $__internal_b6c5e2c64a1fb3d8a6b6f78529fe8cbce075fd0a30ea6d586d96b52247cfb201->enter($__internal_b6c5e2c64a1fb3d8a6b6f78529fe8cbce075fd0a30ea6d586d96b52247cfb201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTessons"]) ? $context["listeTessons"] : $this->getContext($context, "listeTessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
            // line 3
            echo "    <li>
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array()))), "html", null, true);
            echo "\">
        ID : ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
            echo " - num Isolation : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "numIsolation", array()), "html", null, true);
            echo " <br/> - Site : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "codeINSEE", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "numSiteCommune", array()), "html", null, true);
            echo " <br/> - US : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "us", array()), "nom", array()), "html", null, true);
            echo "
      </a>
    </li>
\t<hr style=\"width:200px; color:black; background-color:blue; height:1px;\" /> 
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
        
        $__internal_b6c5e2c64a1fb3d8a6b6f78529fe8cbce075fd0a30ea6d586d96b52247cfb201->leave($__internal_b6c5e2c64a1fb3d8a6b6f78529fe8cbce075fd0a30ea6d586d96b52247cfb201_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  36 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for tesson in listeTessons %}*/
/*     <li>*/
/*       <a href="{{ path('lifo_classif_tesson', {'id': tesson.id}) }}">*/
/*         ID : {{ tesson.id }} - num Isolation : {{ tesson.numIsolation }} <br/> - Site : {{tesson.site.codeINSEE}} {{tesson.site.numSiteCommune}} <br/> - US : {{tesson.us.nom}}*/
/*       </a>*/
/*     </li>*/
/* 	<hr style="width:200px; color:black; background-color:blue; height:1px;" /> */
/*   {% endfor %}*/
/* </ul>*/
