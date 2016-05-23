<?php

/* LIFOClassifBundle:Admin:allUsers.html.twig */
class __TwigTemplate_d99edc8ad5702cf7659fc0ccd0b976e3dc48d07768b99775a9538ae07e7d0fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:allUsers.html.twig", 1);
        $this->blocks = array(
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_106ac9f2ae8afedc6c5339aaf7025dc0711336e4460d0ff12f2be69f5e9630d9 = $this->env->getExtension("native_profiler");
        $__internal_106ac9f2ae8afedc6c5339aaf7025dc0711336e4460d0ff12f2be69f5e9630d9->enter($__internal_106ac9f2ae8afedc6c5339aaf7025dc0711336e4460d0ff12f2be69f5e9630d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:allUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_106ac9f2ae8afedc6c5339aaf7025dc0711336e4460d0ff12f2be69f5e9630d9->leave($__internal_106ac9f2ae8afedc6c5339aaf7025dc0711336e4460d0ff12f2be69f5e9630d9_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_870d70a1920b56fd6454cfb6c649ddf005c2ec63416faef9bfb805359b0a57c0 = $this->env->getExtension("native_profiler");
        $__internal_870d70a1920b56fd6454cfb6c649ddf005c2ec63416faef9bfb805359b0a57c0->enter($__internal_870d70a1920b56fd6454cfb6c649ddf005c2ec63416faef9bfb805359b0a57c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<br/>
<br/>
";
        // line 7
        if ( !twig_test_empty((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")))) {
            // line 8
            echo "\t<table class=\"table table-bordered table-striped table-hover\">
\t<thead><tr class=\"warning\"><td width=5%></td><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr></thead>
\t<tbody>
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 12
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t<a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_admin_afficher_utilisateur", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\">Voir</a>
\t\t\t</td>
\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "rolesToString", array()), "html", null, true);
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t</tbody>
\t</table>
";
        } else {
            // line 23
            echo "    <p>Il n'y a aucun utilisateur enregistré.</p>
";
        }
        // line 25
        echo "
";
        // line 26
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Admin:allUsers.html.twig", 26)->display($context);
        // line 27
        echo "
";
        
        $__internal_870d70a1920b56fd6454cfb6c649ddf005c2ec63416faef9bfb805359b0a57c0->leave($__internal_870d70a1920b56fd6454cfb6c649ddf005c2ec63416faef9bfb805359b0a57c0_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:allUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  90 => 26,  87 => 25,  83 => 23,  78 => 20,  69 => 17,  65 => 16,  60 => 14,  56 => 12,  52 => 11,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <br/>*/
/* <br/>*/
/* {% if utilisateurs is not empty %}*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 	<thead><tr class="warning"><td width=5%></td><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr></thead>*/
/* 	<tbody>*/
/*     {% for utilisateur in utilisateurs %}*/
/* 		<tr>*/
/* 			<td>*/
/* 			<a href="{{ path('lifo_classif_admin_afficher_utilisateur', {'id': utilisateur.id}) }}">Voir</a>*/
/* 			</td>*/
/* 			<td>{{ utilisateur.username }}</td>*/
/* 			<td>{{ utilisateur.rolesToString }}</td>*/
/* 		</tr>*/
/*     {% endfor %}*/
/* 	</tbody>*/
/* 	</table>*/
/* {% else %}*/
/*     <p>Il n'y a aucun utilisateur enregistré.</p>*/
/* {% endif %}*/
/* */
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* {% endblock %}*/
