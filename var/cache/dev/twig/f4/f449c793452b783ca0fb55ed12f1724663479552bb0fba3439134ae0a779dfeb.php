<?php

/* @LIFOClassif/Admin/afficherUtilisateur.html.twig */
class __TwigTemplate_bf46e5820a4b32e71aa5b199617467b31f2ef8dbc4719cf18e028f47716ec958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/afficherUtilisateur.html.twig", 1);
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
        $__internal_4f57112a62f7459f4be53b5e9440721f5b54805696cd181d75079fd7922eb8f0 = $this->env->getExtension("native_profiler");
        $__internal_4f57112a62f7459f4be53b5e9440721f5b54805696cd181d75079fd7922eb8f0->enter($__internal_4f57112a62f7459f4be53b5e9440721f5b54805696cd181d75079fd7922eb8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/afficherUtilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f57112a62f7459f4be53b5e9440721f5b54805696cd181d75079fd7922eb8f0->leave($__internal_4f57112a62f7459f4be53b5e9440721f5b54805696cd181d75079fd7922eb8f0_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_54bdcc8ffc2f3cfc3f844c22af86b7d5490d7538f48a4abde35559ed6e77fd0f = $this->env->getExtension("native_profiler");
        $__internal_54bdcc8ffc2f3cfc3f844c22af86b7d5490d7538f48a4abde35559ed6e77fd0f->enter($__internal_54bdcc8ffc2f3cfc3f844c22af86b7d5490d7538f48a4abde35559ed6e77fd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
<a href=\"#null\" onclick=\"javascript:history.back();\">Page précédente</a>

";
        
        $__internal_54bdcc8ffc2f3cfc3f844c22af86b7d5490d7538f48a4abde35559ed6e77fd0f->leave($__internal_54bdcc8ffc2f3cfc3f844c22af86b7d5490d7538f48a4abde35559ed6e77fd0f_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/afficherUtilisateur.html.twig";
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
/* <a href="#null" onclick="javascript:history.back();">Page précédente</a>*/
/* */
/* {% endblock %}*/
