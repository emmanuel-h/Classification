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
        $__internal_c0e65a4e5c202852b57a6a91caa07db977532a3f6386290c7c8224dd5b2ac4ac = $this->env->getExtension("native_profiler");
        $__internal_c0e65a4e5c202852b57a6a91caa07db977532a3f6386290c7c8224dd5b2ac4ac->enter($__internal_c0e65a4e5c202852b57a6a91caa07db977532a3f6386290c7c8224dd5b2ac4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:allUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e65a4e5c202852b57a6a91caa07db977532a3f6386290c7c8224dd5b2ac4ac->leave($__internal_c0e65a4e5c202852b57a6a91caa07db977532a3f6386290c7c8224dd5b2ac4ac_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_440b08a4ff24ad752c6ea52117a68d2a73ef837d6dd97506e71601196d76b001 = $this->env->getExtension("native_profiler");
        $__internal_440b08a4ff24ad752c6ea52117a68d2a73ef837d6dd97506e71601196d76b001->enter($__internal_440b08a4ff24ad752c6ea52117a68d2a73ef837d6dd97506e71601196d76b001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<br/>
<br/>
";
        // line 7
        if ( !twig_test_empty((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")))) {
            // line 8
            echo "\t<TABLE border=1>
\t<tr><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr>
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
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
                echo "</a>
\t\t\t</td>
\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "rolesToString", array()), "html", null, true);
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</table>
";
        } else {
            // line 20
            echo "    <p>Il n'y a aucun utilisateur enregistré.</p>
";
        }
        // line 22
        echo "
";
        // line 23
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Admin:allUsers.html.twig", 23)->display($context);
        // line 24
        echo "
";
        
        $__internal_440b08a4ff24ad752c6ea52117a68d2a73ef837d6dd97506e71601196d76b001->leave($__internal_440b08a4ff24ad752c6ea52117a68d2a73ef837d6dd97506e71601196d76b001_prof);

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
        return array (  88 => 24,  86 => 23,  83 => 22,  79 => 20,  75 => 18,  66 => 15,  59 => 13,  55 => 11,  51 => 10,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	<tr><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr>*/
/*     {% for utilisateur in utilisateurs %}*/
/* 		<tr>*/
/* 			<td>*/
/* 			<a href="{{ path('lifo_classif_admin_afficher_utilisateur', {'id': utilisateur.id}) }}">{{ utilisateur.username }}</a>*/
/* 			</td>*/
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
