<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
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
        $__internal_2bedc140d000496d94223cd82bb8eeb51a9657b6876a056980382b62510a87ea = $this->env->getExtension("native_profiler");
        $__internal_2bedc140d000496d94223cd82bb8eeb51a9657b6876a056980382b62510a87ea->enter($__internal_2bedc140d000496d94223cd82bb8eeb51a9657b6876a056980382b62510a87ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bedc140d000496d94223cd82bb8eeb51a9657b6876a056980382b62510a87ea->leave($__internal_2bedc140d000496d94223cd82bb8eeb51a9657b6876a056980382b62510a87ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dce69948efb8ebda9afee782377081725857a760b54b4745e37ddc2244a7d59d = $this->env->getExtension("native_profiler");
        $__internal_dce69948efb8ebda9afee782377081725857a760b54b4745e37ddc2244a7d59d->enter($__internal_dce69948efb8ebda9afee782377081725857a760b54b4745e37ddc2244a7d59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_dce69948efb8ebda9afee782377081725857a760b54b4745e37ddc2244a7d59d->leave($__internal_dce69948efb8ebda9afee782377081725857a760b54b4745e37ddc2244a7d59d_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_3334dd5ff09eeda268eff29542d43747d712fe97f22db37ccee92df2b5f0ceba = $this->env->getExtension("native_profiler");
        $__internal_3334dd5ff09eeda268eff29542d43747d712fe97f22db37ccee92df2b5f0ceba->enter($__internal_3334dd5ff09eeda268eff29542d43747d712fe97f22db37ccee92df2b5f0ceba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_3334dd5ff09eeda268eff29542d43747d712fe97f22db37ccee92df2b5f0ceba->leave($__internal_3334dd5ff09eeda268eff29542d43747d712fe97f22db37ccee92df2b5f0ceba_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
