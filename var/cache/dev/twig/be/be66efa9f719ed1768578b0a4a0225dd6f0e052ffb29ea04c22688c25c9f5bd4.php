<?php

/* LIFOClassifBundle:Admin:utilisateurAfficher.html.twig */
class __TwigTemplate_55af234e97703f30f36ba0bd0789536d7f05cb71cc0952de9de105596fc56ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig", 1);
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
        $__internal_6db04b06ffc5af1f4c72e54a0b0a8d6d7afcabe45851256827783483bf40f424 = $this->env->getExtension("native_profiler");
        $__internal_6db04b06ffc5af1f4c72e54a0b0a8d6d7afcabe45851256827783483bf40f424->enter($__internal_6db04b06ffc5af1f4c72e54a0b0a8d6d7afcabe45851256827783483bf40f424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db04b06ffc5af1f4c72e54a0b0a8d6d7afcabe45851256827783483bf40f424->leave($__internal_6db04b06ffc5af1f4c72e54a0b0a8d6d7afcabe45851256827783483bf40f424_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_d5f2259e933d54e6d6a406362f8dc4746c57e818bdb326db29e433a980b0944e = $this->env->getExtension("native_profiler");
        $__internal_d5f2259e933d54e6d6a406362f8dc4746c57e818bdb326db29e433a980b0944e->enter($__internal_d5f2259e933d54e6d6a406362f8dc4746c57e818bdb326db29e433a980b0944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rolesToString", array()), "html", null, true);
        echo "
\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formModifierRole"]) ? $context["formModifierRole"] : $this->getContext($context, "formModifierRole")), 'form');
        echo "
\t\t</fieldset>
\t</p>
</div>
<a class=\"btn btn-primary\" href=\"#null\" onclick=\"javascript:history.back();\">Page précédente</a>

";
        
        $__internal_d5f2259e933d54e6d6a406362f8dc4746c57e818bdb326db29e433a980b0944e->leave($__internal_d5f2259e933d54e6d6a406362f8dc4746c57e818bdb326db29e433a980b0944e_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateurAfficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/* 			{{ user.rolesToString }}*/
/* 			{{ form(formModifierRole) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* </div>*/
/* <a class="btn btn-primary" href="#null" onclick="javascript:history.back();">Page précédente</a>*/
/* */
/* {% endblock %}*/
