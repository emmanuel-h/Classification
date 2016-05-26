<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_09cef9bae2906abca2834371f6473d25f4feda85bbd508126436cee8663d51be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edfc7c4f4987a9079d7b9aedb5b03fb952e687ba0aa246b76b3dbdc6b9994f6e = $this->env->getExtension("native_profiler");
        $__internal_edfc7c4f4987a9079d7b9aedb5b03fb952e687ba0aa246b76b3dbdc6b9994f6e->enter($__internal_edfc7c4f4987a9079d7b9aedb5b03fb952e687ba0aa246b76b3dbdc6b9994f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_edfc7c4f4987a9079d7b9aedb5b03fb952e687ba0aa246b76b3dbdc6b9994f6e->leave($__internal_edfc7c4f4987a9079d7b9aedb5b03fb952e687ba0aa246b76b3dbdc6b9994f6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
