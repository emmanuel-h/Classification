<?php

/* LIFOClassifBundle:Admin:utilisateur.html.twig */
class __TwigTemplate_979a2cf9ad469f202f46f21ee155fe863274654c4bc9252a5e1c4d816240de9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateur.html.twig", 1);
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
        $__internal_a859eb8a946b91c35d919e2777944f731880b9f4e2aae62889c8e27c15760ee7 = $this->env->getExtension("native_profiler");
        $__internal_a859eb8a946b91c35d919e2777944f731880b9f4e2aae62889c8e27c15760ee7->enter($__internal_a859eb8a946b91c35d919e2777944f731880b9f4e2aae62889c8e27c15760ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a859eb8a946b91c35d919e2777944f731880b9f4e2aae62889c8e27c15760ee7->leave($__internal_a859eb8a946b91c35d919e2777944f731880b9f4e2aae62889c8e27c15760ee7_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e80fbb68617a33b9d4be26938d107ca0658833659e2b0198b7076df8a14d3ee4 = $this->env->getExtension("native_profiler");
        $__internal_e80fbb68617a33b9d4be26938d107ca0658833659e2b0198b7076df8a14d3ee4->enter($__internal_e80fbb68617a33b9d4be26938d107ca0658833659e2b0198b7076df8a14d3ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
<p>
<font color = \"red\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
        echo "</font>
<fieldset>
<legend>Ajouter un utilisateur</legend>
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAddUser"]) ? $context["formAddUser"] : $this->getContext($context, "formAddUser")), 'form');
        echo "
</fieldset>
</p>
</div>

";
        
        $__internal_e80fbb68617a33b9d4be26938d107ca0658833659e2b0198b7076df8a14d3ee4->leave($__internal_e80fbb68617a33b9d4be26938d107ca0658833659e2b0198b7076df8a14d3ee4_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* <p>*/
/* <font color = "red">{{messageImportant}}</font>*/
/* <fieldset>*/
/* <legend>Ajouter un utilisateur</legend>*/
/* {{ form(formAddUser) }}*/
/* </fieldset>*/
/* </p>*/
/* </div>*/
/* */
/* {% endblock %}*/
