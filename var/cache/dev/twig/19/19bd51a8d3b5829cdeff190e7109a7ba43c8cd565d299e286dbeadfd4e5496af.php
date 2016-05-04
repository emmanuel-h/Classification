<?php

/* @LIFOClassif/Platform/telechargement.html.twig */
class __TwigTemplate_579c39c5f29609dec7659d7c732d715fc6342c9c64be58b6f264b61b7fbb30ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/telechargement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_238bde18b30d06273a8f80feb28ac3e33e5fb13bff587d4316266a50cee85cc4 = $this->env->getExtension("native_profiler");
        $__internal_238bde18b30d06273a8f80feb28ac3e33e5fb13bff587d4316266a50cee85cc4->enter($__internal_238bde18b30d06273a8f80feb28ac3e33e5fb13bff587d4316266a50cee85cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_238bde18b30d06273a8f80feb28ac3e33e5fb13bff587d4316266a50cee85cc4->leave($__internal_238bde18b30d06273a8f80feb28ac3e33e5fb13bff587d4316266a50cee85cc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a4d2eabe7821f0b6728e565662a6781a69965778c26a17da04d39ce7fda5772 = $this->env->getExtension("native_profiler");
        $__internal_4a4d2eabe7821f0b6728e565662a6781a69965778c26a17da04d39ce7fda5772->enter($__internal_4a4d2eabe7821f0b6728e565662a6781a69965778c26a17da04d39ce7fda5772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_4a4d2eabe7821f0b6728e565662a6781a69965778c26a17da04d39ce7fda5772->leave($__internal_4a4d2eabe7821f0b6728e565662a6781a69965778c26a17da04d39ce7fda5772_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d4a472425a8cbd2381bbaddec298c4e52efdbcebc155c85997dee255d55e97f = $this->env->getExtension("native_profiler");
        $__internal_3d4a472425a8cbd2381bbaddec298c4e52efdbcebc155c85997dee255d55e97f->enter($__internal_3d4a472425a8cbd2381bbaddec298c4e52efdbcebc155c85997dee255d55e97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_3d4a472425a8cbd2381bbaddec298c4e52efdbcebc155c85997dee255d55e97f->leave($__internal_3d4a472425a8cbd2381bbaddec298c4e52efdbcebc155c85997dee255d55e97f_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/telechargement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Téléchargement{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour télécharger une image*/
/* 	</p>*/
/* {% endblock %}*/
