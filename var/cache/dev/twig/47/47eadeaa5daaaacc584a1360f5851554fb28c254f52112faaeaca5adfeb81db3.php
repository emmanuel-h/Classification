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
        $__internal_69efd549d93b7f6731f90ffbe34f807028809485f93a6d8e4b364cbc36b4ca4c = $this->env->getExtension("native_profiler");
        $__internal_69efd549d93b7f6731f90ffbe34f807028809485f93a6d8e4b364cbc36b4ca4c->enter($__internal_69efd549d93b7f6731f90ffbe34f807028809485f93a6d8e4b364cbc36b4ca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:allUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69efd549d93b7f6731f90ffbe34f807028809485f93a6d8e4b364cbc36b4ca4c->leave($__internal_69efd549d93b7f6731f90ffbe34f807028809485f93a6d8e4b364cbc36b4ca4c_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_3cbe6ee287397629997018fe9234d635b9270c363c8b1bcd6735d97fe599200d = $this->env->getExtension("native_profiler");
        $__internal_3cbe6ee287397629997018fe9234d635b9270c363c8b1bcd6735d97fe599200d->enter($__internal_3cbe6ee287397629997018fe9234d635b9270c363c8b1bcd6735d97fe599200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<br/>
<br/>
";
        // line 7
        if ( !twig_test_empty((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")))) {
            // line 8
            echo "\t<TABLE border=1>
\t<tr><td width=5%></td><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr>
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 11
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_admin_afficher_utilisateur", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\">Voir</a>
\t\t\t</td>
\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "rolesToString", array()), "html", null, true);
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t</table>
";
        } else {
            // line 21
            echo "    <p>Il n'y a aucun utilisateur enregistré.</p>
";
        }
        // line 23
        echo "
";
        // line 24
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Admin:allUsers.html.twig", 24)->display($context);
        // line 25
        echo "
";
        
        $__internal_3cbe6ee287397629997018fe9234d635b9270c363c8b1bcd6735d97fe599200d->leave($__internal_3cbe6ee287397629997018fe9234d635b9270c363c8b1bcd6735d97fe599200d_prof);

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
        return array (  90 => 25,  88 => 24,  85 => 23,  81 => 21,  77 => 19,  68 => 16,  64 => 15,  59 => 13,  55 => 11,  51 => 10,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <br/>*/
/* <br/>*/
/* {% if utilisateurs is not empty %}*/
/* 	<TABLE border=1>*/
/* 	<tr><td width=5%></td><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr>*/
/*     {% for utilisateur in utilisateurs %}*/
/* 		<tr>*/
/* 			<td>*/
/* 			<a href="{{ path('lifo_classif_admin_afficher_utilisateur', {'id': utilisateur.id}) }}">Voir</a>*/
/* 			</td>*/
/* 			<td>{{ utilisateur.username }}</td>*/
/* 			<td>{{ utilisateur.rolesToString }}</td>*/
/* 		</tr>*/
/*     {% endfor %}*/
/* 	</table>*/
/* {% else %}*/
/*     <p>Il n'y a aucun utilisateur enregistré.</p>*/
/* {% endif %}*/
/* */
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* {% endblock %}*/
