<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0b909d4afabdf9d8e1da739bec7a62e3d9777fabad8a47239d7c32447cc3e5cf extends Twig_Template
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
        $__internal_61a4bb694ff9d45c1fa55ab8155c5a6076cecf743083e8cbb99a4d1f4b010f40 = $this->env->getExtension("native_profiler");
        $__internal_61a4bb694ff9d45c1fa55ab8155c5a6076cecf743083e8cbb99a4d1f4b010f40->enter($__internal_61a4bb694ff9d45c1fa55ab8155c5a6076cecf743083e8cbb99a4d1f4b010f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_61a4bb694ff9d45c1fa55ab8155c5a6076cecf743083e8cbb99a4d1f4b010f40->leave($__internal_61a4bb694ff9d45c1fa55ab8155c5a6076cecf743083e8cbb99a4d1f4b010f40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
