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
        $__internal_1e032d43956ac0b91c17ca850f842c75b9f4e23445c4bf6f64459b2e0b736d25 = $this->env->getExtension("native_profiler");
        $__internal_1e032d43956ac0b91c17ca850f842c75b9f4e23445c4bf6f64459b2e0b736d25->enter($__internal_1e032d43956ac0b91c17ca850f842c75b9f4e23445c4bf6f64459b2e0b736d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e032d43956ac0b91c17ca850f842c75b9f4e23445c4bf6f64459b2e0b736d25->leave($__internal_1e032d43956ac0b91c17ca850f842c75b9f4e23445c4bf6f64459b2e0b736d25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87e79480a3715372468f6ebcdfa923796a9df69e3d337714decaae796ee95a0f = $this->env->getExtension("native_profiler");
        $__internal_87e79480a3715372468f6ebcdfa923796a9df69e3d337714decaae796ee95a0f->enter($__internal_87e79480a3715372468f6ebcdfa923796a9df69e3d337714decaae796ee95a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_87e79480a3715372468f6ebcdfa923796a9df69e3d337714decaae796ee95a0f->leave($__internal_87e79480a3715372468f6ebcdfa923796a9df69e3d337714decaae796ee95a0f_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_410b66c9fd51ba1bc05d43eaada6cdec7a1481c5b5447b919de1ed771e82036b = $this->env->getExtension("native_profiler");
        $__internal_410b66c9fd51ba1bc05d43eaada6cdec7a1481c5b5447b919de1ed771e82036b->enter($__internal_410b66c9fd51ba1bc05d43eaada6cdec7a1481c5b5447b919de1ed771e82036b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_410b66c9fd51ba1bc05d43eaada6cdec7a1481c5b5447b919de1ed771e82036b->leave($__internal_410b66c9fd51ba1bc05d43eaada6cdec7a1481c5b5447b919de1ed771e82036b_prof);

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
