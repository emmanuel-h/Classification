<?php

/* @LIFOClassif/Parametres/positionDecor.html.twig */
class __TwigTemplate_4ed6a72381f875d7e92d4ca634314a67d4230eec2e6c56679c10cd111eb80b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Parametres/positionDecor.html.twig", 1);
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
        $__internal_5084e8fdfce35e547784fd2dfd8966717746d0baeee0bb11522ebfc3a30b2a15 = $this->env->getExtension("native_profiler");
        $__internal_5084e8fdfce35e547784fd2dfd8966717746d0baeee0bb11522ebfc3a30b2a15->enter($__internal_5084e8fdfce35e547784fd2dfd8966717746d0baeee0bb11522ebfc3a30b2a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Parametres/positionDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5084e8fdfce35e547784fd2dfd8966717746d0baeee0bb11522ebfc3a30b2a15->leave($__internal_5084e8fdfce35e547784fd2dfd8966717746d0baeee0bb11522ebfc3a30b2a15_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5a14d6469d7370fab6422c7646e5ced5ce48ed97d4bc4a7535f33f948acdc0d2 = $this->env->getExtension("native_profiler");
        $__internal_5a14d6469d7370fab6422c7646e5ced5ce48ed97d4bc4a7535f33f948acdc0d2->enter($__internal_5a14d6469d7370fab6422c7646e5ced5ce48ed97d4bc4a7535f33f948acdc0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
<p>
<fieldset>
<legend>Ajout d'une position de décor</legend>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form');
        echo "
</fieldset>
<fieldset>
<legend>Ajout d'un type de décor</legend>
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form');
        echo "
</fieldset>
</p>
</div>

";
        
        $__internal_5a14d6469d7370fab6422c7646e5ced5ce48ed97d4bc4a7535f33f948acdc0d2->leave($__internal_5a14d6469d7370fab6422c7646e5ced5ce48ed97d4bc4a7535f33f948acdc0d2_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Parametres/positionDecor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* <p>*/
/* <fieldset>*/
/* <legend>Ajout d'une position de décor</legend>*/
/* {{ form(formAjoutDecor) }}*/
/* </fieldset>*/
/* <fieldset>*/
/* <legend>Ajout d'un type de décor</legend>*/
/* {{ form(formAjoutTypeDecor) }}*/
/* </fieldset>*/
/* </p>*/
/* </div>*/
/* */
/* {% endblock %}*/
