<?php

/* @LIFOClassif/Admin/utilisateurAfficherTous.html.twig */
class __TwigTemplate_9df7e72e38999eeffaed10aba43e8f5090ac788ed99988f6cc0061970c499f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/utilisateurAfficherTous.html.twig", 1);
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
        $__internal_2d43e1f443509c87ba3a2903c38e7f70f71a0fa22852c90511c1be1d62a56300 = $this->env->getExtension("native_profiler");
        $__internal_2d43e1f443509c87ba3a2903c38e7f70f71a0fa22852c90511c1be1d62a56300->enter($__internal_2d43e1f443509c87ba3a2903c38e7f70f71a0fa22852c90511c1be1d62a56300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateurAfficherTous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d43e1f443509c87ba3a2903c38e7f70f71a0fa22852c90511c1be1d62a56300->leave($__internal_2d43e1f443509c87ba3a2903c38e7f70f71a0fa22852c90511c1be1d62a56300_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_121df8688d8584da68ff1627b64928f42dce034ca6d7f9705602889e3be55642 = $this->env->getExtension("native_profiler");
        $__internal_121df8688d8584da68ff1627b64928f42dce034ca6d7f9705602889e3be55642->enter($__internal_121df8688d8584da68ff1627b64928f42dce034ca6d7f9705602889e3be55642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "@LIFOClassif/Admin/utilisateurAfficherTous.html.twig", 23)->display($context);
        // line 24
        echo "
";
        
        $__internal_121df8688d8584da68ff1627b64928f42dce034ca6d7f9705602889e3be55642->leave($__internal_121df8688d8584da68ff1627b64928f42dce034ca6d7f9705602889e3be55642_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/utilisateurAfficherTous.html.twig";
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
