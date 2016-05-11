<?php

/* @LIFOClassif/Platform/tesson.html.twig */
class __TwigTemplate_5463be7e231f3b60aea970dd7720349d055558f68c39c80db5cc1614f7d755f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/tesson.html.twig", 1);
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
        $__internal_d70a921d7aa2c66c74289f62d85df3f5da80c2e9e98aad599894123d8db0684a = $this->env->getExtension("native_profiler");
        $__internal_d70a921d7aa2c66c74289f62d85df3f5da80c2e9e98aad599894123d8db0684a->enter($__internal_d70a921d7aa2c66c74289f62d85df3f5da80c2e9e98aad599894123d8db0684a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d70a921d7aa2c66c74289f62d85df3f5da80c2e9e98aad599894123d8db0684a->leave($__internal_d70a921d7aa2c66c74289f62d85df3f5da80c2e9e98aad599894123d8db0684a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0efeb08ea69c88675bba6604392ef7a09e42079d5a3ce84ca960a7831e05a0b7 = $this->env->getExtension("native_profiler");
        $__internal_0efeb08ea69c88675bba6604392ef7a09e42079d5a3ce84ca960a7831e05a0b7->enter($__internal_0efeb08ea69c88675bba6604392ef7a09e42079d5a3ce84ca960a7831e05a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_0efeb08ea69c88675bba6604392ef7a09e42079d5a3ce84ca960a7831e05a0b7->leave($__internal_0efeb08ea69c88675bba6604392ef7a09e42079d5a3ce84ca960a7831e05a0b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f679cd33ba311e9726a0827a6c849669dd21b873700a9cd8c65d04df7019b4d6 = $this->env->getExtension("native_profiler");
        $__internal_f679cd33ba311e9726a0827a6c849669dd21b873700a9cd8c65d04df7019b4d6->enter($__internal_f679cd33ba311e9726a0827a6c849669dd21b873700a9cd8c65d04df7019b4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour travailler sur un tesson
\t</p>
";
        
        $__internal_f679cd33ba311e9726a0827a6c849669dd21b873700a9cd8c65d04df7019b4d6->leave($__internal_f679cd33ba311e9726a0827a6c849669dd21b873700a9cd8c65d04df7019b4d6_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/tesson.html.twig";
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
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour travailler sur un tesson*/
/* 	</p>*/
/* {% endblock %}*/
