<?php

/* @LIFOClassif/pagination.html.twig */
class __TwigTemplate_05db87f32015e86345e391eb6bcd27c17ff2ea52514be356c309973ccfead15a extends Twig_Template
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
        // line 1
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nbPages", array()) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) > 1)) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paramsRoute", array()), array("page" => 1))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 11
(isset($context["pagination"]) ? $context["pagination"] : null), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 1)))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 4), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nbPages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "            <li ";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paramsRoute", array()), array("page" => $context["p"]))), "html", null, true);
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
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nbPages", array()))) {
                // line 27
                echo "            <li>
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 29
(isset($context["pagination"]) ? $context["pagination"] : null), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 1)))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 35
(isset($context["pagination"]) ? $context["pagination"] : null), "paramsRoute", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nbPages", array())))), "html", null, true);
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
        return array (  101 => 40,  93 => 35,  92 => 34,  84 => 29,  83 => 28,  80 => 27,  78 => 26,  75 => 25,  65 => 21,  61 => 20,  54 => 19,  49 => 18,  46 => 16,  38 => 11,  37 => 10,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if pagination.nbPages > 0 %}*/
/*     <ul class="pagination">*/
/*         {% if pagination.page > 1 %}*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': 1})) }}">*/
/*                     <<*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page-1})) }}">*/
/*                     <*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}*/
/*         {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}*/
/*             <li {% if p == pagination.page %}class="active"{% endif %}>*/
/*                 <a href="{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': p})) }}">*/
/*                     {{ p }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if pagination.page < pagination.nbPages %}*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page+1})) }}">*/
/*                     >*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.nbPages})) }}">*/
/*                     >>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
