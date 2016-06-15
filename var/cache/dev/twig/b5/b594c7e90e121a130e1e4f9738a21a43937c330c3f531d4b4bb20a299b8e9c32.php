<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_89c3f5bbfe5789cad080cf9036c1bda0ab9b2bf3dd525334730cf33d2bc81247 extends Twig_Template
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
        $__internal_318cf68e4d9e9843bf87843dd18aac2fa5ef15b5c6b6921902d0083b3b86e9e3 = $this->env->getExtension("native_profiler");
        $__internal_318cf68e4d9e9843bf87843dd18aac2fa5ef15b5c6b6921902d0083b3b86e9e3->enter($__internal_318cf68e4d9e9843bf87843dd18aac2fa5ef15b5c6b6921902d0083b3b86e9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_318cf68e4d9e9843bf87843dd18aac2fa5ef15b5c6b6921902d0083b3b86e9e3->leave($__internal_318cf68e4d9e9843bf87843dd18aac2fa5ef15b5c6b6921902d0083b3b86e9e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
