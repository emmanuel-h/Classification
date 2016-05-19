<?php

/* LIFOClassifBundle:Platform:tesson.html.twig */
class __TwigTemplate_15d248a09ffea0fb775fe3f599fcd38529064bdfc740d5528a4417b15b6c16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:tesson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10096fa7ca3774f2b1160e42f9fa603c144221c832fb7c79d7fb04b7f36a4577 = $this->env->getExtension("native_profiler");
        $__internal_10096fa7ca3774f2b1160e42f9fa603c144221c832fb7c79d7fb04b7f36a4577->enter($__internal_10096fa7ca3774f2b1160e42f9fa603c144221c832fb7c79d7fb04b7f36a4577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10096fa7ca3774f2b1160e42f9fa603c144221c832fb7c79d7fb04b7f36a4577->leave($__internal_10096fa7ca3774f2b1160e42f9fa603c144221c832fb7c79d7fb04b7f36a4577_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c87b8722ef2c8b754e83be58068d41eafdb596730f2bbd17372ea6b0ff62dd93 = $this->env->getExtension("native_profiler");
        $__internal_c87b8722ef2c8b754e83be58068d41eafdb596730f2bbd17372ea6b0ff62dd93->enter($__internal_c87b8722ef2c8b754e83be58068d41eafdb596730f2bbd17372ea6b0ff62dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_c87b8722ef2c8b754e83be58068d41eafdb596730f2bbd17372ea6b0ff62dd93->leave($__internal_c87b8722ef2c8b754e83be58068d41eafdb596730f2bbd17372ea6b0ff62dd93_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_773216f34fdaa8062bd4a3dfbed2bb05954982ca6bfe75e1e000d110bba86cc8 = $this->env->getExtension("native_profiler");
        $__internal_773216f34fdaa8062bd4a3dfbed2bb05954982ca6bfe75e1e000d110bba86cc8->enter($__internal_773216f34fdaa8062bd4a3dfbed2bb05954982ca6bfe75e1e000d110bba86cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeNumerisation"]) ? $context["listeNumerisation"] : $this->getContext($context, "listeNumerisation")));
        foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
            // line 7
            echo "\t<p>
\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()), "html", null, true);
            echo "
\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
            echo "\"/>
\t</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_773216f34fdaa8062bd4a3dfbed2bb05954982ca6bfe75e1e000d110bba86cc8->leave($__internal_773216f34fdaa8062bd4a3dfbed2bb05954982ca6bfe75e1e000d110bba86cc8_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  62 => 8,  59 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	{% for numerisation in listeNumerisation %}*/
/* 	<p>*/
/* 	{{ numerisation.typeNumerisation.nom }}*/
/* 	<img src="{{ asset(numerisation.webPath) }}" alt="{{ numerisation.alt }}"/>*/
/* 	</p>*/
/* 	{% endfor %}*/
/* {% endblock %}*/
