<?php

/* @LIFOClassif/Admin/allUsers.html.twig */
class __TwigTemplate_2b67f1b803f76e309d1950609c66ec64439b641a0b99420be77737f7afda7d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/allUsers.html.twig", 1);
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
        $__internal_030fee430da1159a53cb81c843f9a3c535af360d55d10eb9fc9b587824a279db = $this->env->getExtension("native_profiler");
        $__internal_030fee430da1159a53cb81c843f9a3c535af360d55d10eb9fc9b587824a279db->enter($__internal_030fee430da1159a53cb81c843f9a3c535af360d55d10eb9fc9b587824a279db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/allUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_030fee430da1159a53cb81c843f9a3c535af360d55d10eb9fc9b587824a279db->leave($__internal_030fee430da1159a53cb81c843f9a3c535af360d55d10eb9fc9b587824a279db_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_14a4b63dec8774a8bddf3ffab47e42582823e66fcfc8dba53e8f1b8e5c9f9dd7 = $this->env->getExtension("native_profiler");
        $__internal_14a4b63dec8774a8bddf3ffab47e42582823e66fcfc8dba53e8f1b8e5c9f9dd7->enter($__internal_14a4b63dec8774a8bddf3ffab47e42582823e66fcfc8dba53e8f1b8e5c9f9dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "@LIFOClassif/Admin/allUsers.html.twig", 24)->display($context);
        // line 25
        echo "
";
        
        $__internal_14a4b63dec8774a8bddf3ffab47e42582823e66fcfc8dba53e8f1b8e5c9f9dd7->leave($__internal_14a4b63dec8774a8bddf3ffab47e42582823e66fcfc8dba53e8f1b8e5c9f9dd7_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/allUsers.html.twig";
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
