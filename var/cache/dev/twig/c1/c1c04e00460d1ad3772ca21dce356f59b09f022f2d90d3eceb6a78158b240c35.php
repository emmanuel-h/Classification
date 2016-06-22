<?php

/* LIFOClassifBundle:Admin:utilisateurAfficherTous.html.twig */
class __TwigTemplate_93ba10c016acdc6de9678b1da105ef876ece2c23b1d73dd7f8c72bf663263a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateurAfficherTous.html.twig", 1);
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
        $__internal_d44d1fb1695618b891d265b2b7cd28b6c4787fbea5d43576c364a1c75540cc5c = $this->env->getExtension("native_profiler");
        $__internal_d44d1fb1695618b891d265b2b7cd28b6c4787fbea5d43576c364a1c75540cc5c->enter($__internal_d44d1fb1695618b891d265b2b7cd28b6c4787fbea5d43576c364a1c75540cc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateurAfficherTous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d44d1fb1695618b891d265b2b7cd28b6c4787fbea5d43576c364a1c75540cc5c->leave($__internal_d44d1fb1695618b891d265b2b7cd28b6c4787fbea5d43576c364a1c75540cc5c_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_0e73377e6f0ebd5e2e895f4b6278d1d0b9c6abadb15e547658bbfcdf2952c0c0 = $this->env->getExtension("native_profiler");
        $__internal_0e73377e6f0ebd5e2e895f4b6278d1d0b9c6abadb15e547658bbfcdf2952c0c0->enter($__internal_0e73377e6f0ebd5e2e895f4b6278d1d0b9c6abadb15e547658bbfcdf2952c0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<br/>
<br/>
";
        // line 7
        if ( !twig_test_empty((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")))) {
            // line 8
            echo "\t<table class=\"table table-bordered table-striped table-hover\">
\t<thead><tr class=\"warning\"><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr></thead>
\t<tbody>
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 12
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur_afficher", array("id" => $this->getAttribute($context["utilisateur"], "id", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
                echo "</a></td>
\t\t\t<td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "rolesToString", array()), "html", null, true);
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t</tbody>
\t</table>
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
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Admin:utilisateurAfficherTous.html.twig", 23)->display($context);
        // line 24
        echo "
";
        
        $__internal_0e73377e6f0ebd5e2e895f4b6278d1d0b9c6abadb15e547658bbfcdf2952c0c0->leave($__internal_0e73377e6f0ebd5e2e895f4b6278d1d0b9c6abadb15e547658bbfcdf2952c0c0_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateurAfficherTous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  86 => 23,  83 => 22,  79 => 20,  74 => 17,  65 => 14,  59 => 13,  56 => 12,  52 => 11,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	<thead><tr class="warning"><td width=10%>Nom d'utilisateur</td><td width=10%>Rôle</td></tr></thead>*/
/* 	<tbody>*/
/*     {% for utilisateur in utilisateurs %}*/
/* 		<tr>*/
/* 			<td><a href="{{ base_url ~path('lifo_classif_admin_utilisateur_afficher', {'id': utilisateur.id}) }}">{{utilisateur.username}}</a></td>*/
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
