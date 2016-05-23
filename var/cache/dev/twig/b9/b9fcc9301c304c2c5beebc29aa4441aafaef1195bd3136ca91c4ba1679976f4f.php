<?php

/* LIFOClassifBundle::layoutAdmin.html.twig */
class __TwigTemplate_bc85a8408e10c2b4663222f7de80f72f7ddde689141173b4df11892d438f4dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b04cdee32bbbb97f60e22f54056c17dfb30197aa58f6ad0bd4bbb89a713730e1 = $this->env->getExtension("native_profiler");
        $__internal_b04cdee32bbbb97f60e22f54056c17dfb30197aa58f6ad0bd4bbb89a713730e1->enter($__internal_b04cdee32bbbb97f60e22f54056c17dfb30197aa58f6ad0bd4bbb89a713730e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b04cdee32bbbb97f60e22f54056c17dfb30197aa58f6ad0bd4bbb89a713730e1->leave($__internal_b04cdee32bbbb97f60e22f54056c17dfb30197aa58f6ad0bd4bbb89a713730e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b2167b728fbd81fddf8db37e4efa24cf6941b307e513661d6aa714efda504e4 = $this->env->getExtension("native_profiler");
        $__internal_7b2167b728fbd81fddf8db37e4efa24cf6941b307e513661d6aa714efda504e4->enter($__internal_7b2167b728fbd81fddf8db37e4efa24cf6941b307e513661d6aa714efda504e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t
     <p>
     <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_suppression");
        echo "\">Suppression</a>
     <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_ajout");
        echo "\">Ajout</a>
     <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur");
        echo "\">Utilisateur</a>
    \t";
        // line 9
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 11
        echo "    \t
    ";
        
        $__internal_7b2167b728fbd81fddf8db37e4efa24cf6941b307e513661d6aa714efda504e4->leave($__internal_7b2167b728fbd81fddf8db37e4efa24cf6941b307e513661d6aa714efda504e4_prof);

    }

    // line 9
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4500da1fb9a4122a22a91058ef8ba110bf89580d96dd6d2ccf4fe197a4ee2a65 = $this->env->getExtension("native_profiler");
        $__internal_4500da1fb9a4122a22a91058ef8ba110bf89580d96dd6d2ccf4fe197a4ee2a65->enter($__internal_4500da1fb9a4122a22a91058ef8ba110bf89580d96dd6d2ccf4fe197a4ee2a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 10
        echo "    \t";
        
        $__internal_4500da1fb9a4122a22a91058ef8ba110bf89580d96dd6d2ccf4fe197a4ee2a65->leave($__internal_4500da1fb9a4122a22a91058ef8ba110bf89580d96dd6d2ccf4fe197a4ee2a65_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  67 => 9,  59 => 11,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/* 	*/
/*      <p>*/
/*      <a href="{{ path('lifo_classif_admin_suppression') }}">Suppression</a>*/
/*      <a href="{{ path('lifo_classif_admin_ajout') }}">Ajout</a>*/
/*      <a href="{{ path('lifo_classif_admin_utilisateur') }}">Utilisateur</a>*/
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
