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
        $__internal_2670b8e915284355140c3238a19b69b36fa8aee312e602697c71e28ee535c2fc = $this->env->getExtension("native_profiler");
        $__internal_2670b8e915284355140c3238a19b69b36fa8aee312e602697c71e28ee535c2fc->enter($__internal_2670b8e915284355140c3238a19b69b36fa8aee312e602697c71e28ee535c2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2670b8e915284355140c3238a19b69b36fa8aee312e602697c71e28ee535c2fc->leave($__internal_2670b8e915284355140c3238a19b69b36fa8aee312e602697c71e28ee535c2fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_757af54145cfcb7ad473b37632b20cd86d3bb40bcec83fbf8ccff9036b3c775f = $this->env->getExtension("native_profiler");
        $__internal_757af54145cfcb7ad473b37632b20cd86d3bb40bcec83fbf8ccff9036b3c775f->enter($__internal_757af54145cfcb7ad473b37632b20cd86d3bb40bcec83fbf8ccff9036b3c775f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_757af54145cfcb7ad473b37632b20cd86d3bb40bcec83fbf8ccff9036b3c775f->leave($__internal_757af54145cfcb7ad473b37632b20cd86d3bb40bcec83fbf8ccff9036b3c775f_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ed8d89b846713643f43cac48078c1b8e355a302708295b372362d89d15a54f28 = $this->env->getExtension("native_profiler");
        $__internal_ed8d89b846713643f43cac48078c1b8e355a302708295b372362d89d15a54f28->enter($__internal_ed8d89b846713643f43cac48078c1b8e355a302708295b372362d89d15a54f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_ed8d89b846713643f43cac48078c1b8e355a302708295b372362d89d15a54f28->leave($__internal_ed8d89b846713643f43cac48078c1b8e355a302708295b372362d89d15a54f28_prof);

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
