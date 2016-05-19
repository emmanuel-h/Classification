<?php

/* LIFOClassifBundle:Admin:afficherUtilisateur.html.twig */
class __TwigTemplate_f0d23cafdf2d51a3c1c6a2019309a5f5fbf622bc6c33d31c91b7e2c34d367523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:afficherUtilisateur.html.twig", 1);
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
        $__internal_79d5e1563dd315a4b98e67023a0e50c4fe9dd370b1cd42053816fb0b50477744 = $this->env->getExtension("native_profiler");
        $__internal_79d5e1563dd315a4b98e67023a0e50c4fe9dd370b1cd42053816fb0b50477744->enter($__internal_79d5e1563dd315a4b98e67023a0e50c4fe9dd370b1cd42053816fb0b50477744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:afficherUtilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d5e1563dd315a4b98e67023a0e50c4fe9dd370b1cd42053816fb0b50477744->leave($__internal_79d5e1563dd315a4b98e67023a0e50c4fe9dd370b1cd42053816fb0b50477744_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e8d1cb6255ed052432336a3bfa9864239cce4f2f67d04c836f25445d7e454a2d = $this->env->getExtension("native_profiler");
        $__internal_e8d1cb6255ed052432336a3bfa9864239cce4f2f67d04c836f25445d7e454a2d->enter($__internal_e8d1cb6255ed052432336a3bfa9864239cce4f2f67d04c836f25445d7e454a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
\t<font color = \"red\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
        echo "</font>
\t<p>
\t\t<fieldset>
\t\t\t<legend>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</legend>
\t\t\tRole actuel : 
\t\t\t";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "\t\t\tAdministrateur
\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t";
            if ($this->env->getExtension('security')->isGranted("ROLE_ARCHEOLOGUE")) {
                // line 15
                echo "\t\t\t\tArchéologue
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\tUtilisateur standard
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formModifierRole"]) ? $context["formModifierRole"] : $this->getContext($context, "formModifierRole")), 'form');
        echo "
\t\t</fieldset>
\t</p>
</div>

";
        
        $__internal_e8d1cb6255ed052432336a3bfa9864239cce4f2f67d04c836f25445d7e454a2d->leave($__internal_e8d1cb6255ed052432336a3bfa9864239cce4f2f67d04c836f25445d7e454a2d_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:afficherUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  72 => 19,  68 => 17,  64 => 15,  61 => 14,  57 => 12,  55 => 11,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<font color = "red">{{messageImportant}}</font>*/
/* 	<p>*/
/* 		<fieldset>*/
/* 			<legend>{{user.username}}</legend>*/
/* 			Role actuel : */
/* 			{% if is_granted('ROLE_ADMIN') %}*/
/* 			Administrateur*/
/* 			{% else %}*/
/* 				{% if is_granted('ROLE_ARCHEOLOGUE') %}*/
/* 				Archéologue*/
/* 				{% else %}*/
/* 					Utilisateur standard*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* 			{{ form(formModifierRole) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* </div>*/
/* */
/* {% endblock %}*/
