<?php

/* @LIFOClassif/pagination.html.twig */
class __TwigTemplate_1b1d5f0ad33cd2c894f45dca99b2308a62f38d977c6837924b3e6b39fa0571e1 extends Twig_Template
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
        $__internal_4d799fccf8b0cfe5e48886a68ecbdd1ea88f144f60cdd2ec4c5da851bcc1b355 = $this->env->getExtension("native_profiler");
        $__internal_4d799fccf8b0cfe5e48886a68ecbdd1ea88f144f60cdd2ec4c5da851bcc1b355->enter($__internal_4d799fccf8b0cfe5e48886a68ecbdd1ea88f144f60cdd2ec4c5da851bcc1b355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/pagination.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => 1)))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 11
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1))))), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 16
            echo "
        ";
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "            <li ";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $context["p"])))), "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))) {
                // line 27
                echo "            <li>
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 29
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1))))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 35
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))))), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 40
            echo "    </ul>
";
        }
        
        $__internal_4d799fccf8b0cfe5e48886a68ecbdd1ea88f144f60cdd2ec4c5da851bcc1b355->leave($__internal_4d799fccf8b0cfe5e48886a68ecbdd1ea88f144f60cdd2ec4c5da851bcc1b355_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  96 => 35,  95 => 34,  87 => 29,  86 => 28,  83 => 27,  81 => 26,  78 => 25,  68 => 21,  64 => 20,  57 => 19,  52 => 18,  49 => 16,  41 => 11,  40 => 10,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if pagination.nbPages > 0 %}*/
/*     <ul class="pagination">*/
/*         {% if pagination.page > 1 %}*/
/*             <li>*/
/*                 <a href="{{ base_url ~path(pagination.nomRoute, pagination.paramsRoute|merge({'page': 1})) }}">*/
/*                     <<*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ base_url ~path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page-1})) }}">*/
/*                     <*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}*/
/*         {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}*/
/*             <li {% if p == pagination.page %}class="active"{% endif %}>*/
/*                 <a href="{{ base_url ~path(pagination.nomRoute, pagination.paramsRoute|merge({'page': p})) }}">*/
/*                     {{ p }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if pagination.page < pagination.nbPages %}*/
/*             <li>*/
/*                 <a href="{{ base_url ~path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page+1})) }}">*/
/*                     >*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ base_url ~path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.nbPages})) }}">*/
/*                     >>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
