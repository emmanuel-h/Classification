<?php

/* @LIFOClassif/Admin/utilisateurAfficher.html.twig */
class __TwigTemplate_5348cc77dfc9a0e56b61b1f66eeba8febb2f9ab3973e13a67e564e549a297939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/utilisateurAfficher.html.twig", 1);
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
        $__internal_4fa1427fca8cd88ab47a272eb1b60a3a6a3f4abce08570ccfe09ff547711cab3 = $this->env->getExtension("native_profiler");
        $__internal_4fa1427fca8cd88ab47a272eb1b60a3a6a3f4abce08570ccfe09ff547711cab3->enter($__internal_4fa1427fca8cd88ab47a272eb1b60a3a6a3f4abce08570ccfe09ff547711cab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateurAfficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa1427fca8cd88ab47a272eb1b60a3a6a3f4abce08570ccfe09ff547711cab3->leave($__internal_4fa1427fca8cd88ab47a272eb1b60a3a6a3f4abce08570ccfe09ff547711cab3_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_100ca67ac132f97732495611ec2b28706cebd4551ddc876e665a18e249192de2 = $this->env->getExtension("native_profiler");
        $__internal_100ca67ac132f97732495611ec2b28706cebd4551ddc876e665a18e249192de2->enter($__internal_100ca67ac132f97732495611ec2b28706cebd4551ddc876e665a18e249192de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_100ca67ac132f97732495611ec2b28706cebd4551ddc876e665a18e249192de2->leave($__internal_100ca67ac132f97732495611ec2b28706cebd4551ddc876e665a18e249192de2_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/utilisateurAfficher.html.twig";
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
