<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_45e723778b5bc60d80c1588e862006a11014a019cbd23ab944b3cef23f8005ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae11fa921e6a7bb999fd11eeff0953a479a1c3f18b4a24a7f8c5afa781058456 = $this->env->getExtension("native_profiler");
        $__internal_ae11fa921e6a7bb999fd11eeff0953a479a1c3f18b4a24a7f8c5afa781058456->enter($__internal_ae11fa921e6a7bb999fd11eeff0953a479a1c3f18b4a24a7f8c5afa781058456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae11fa921e6a7bb999fd11eeff0953a479a1c3f18b4a24a7f8c5afa781058456->leave($__internal_ae11fa921e6a7bb999fd11eeff0953a479a1c3f18b4a24a7f8c5afa781058456_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b7fc6ee836a89207bfc907694faeee46a77dc11b812f1ffc6efb8d3739458dec = $this->env->getExtension("native_profiler");
        $__internal_b7fc6ee836a89207bfc907694faeee46a77dc11b812f1ffc6efb8d3739458dec->enter($__internal_b7fc6ee836a89207bfc907694faeee46a77dc11b812f1ffc6efb8d3739458dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b7fc6ee836a89207bfc907694faeee46a77dc11b812f1ffc6efb8d3739458dec->leave($__internal_b7fc6ee836a89207bfc907694faeee46a77dc11b812f1ffc6efb8d3739458dec_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a9b84f9c38ebfa47534e2268fa91f8eac167e347fca62d6b2d21f2c3ba80471 = $this->env->getExtension("native_profiler");
        $__internal_0a9b84f9c38ebfa47534e2268fa91f8eac167e347fca62d6b2d21f2c3ba80471->enter($__internal_0a9b84f9c38ebfa47534e2268fa91f8eac167e347fca62d6b2d21f2c3ba80471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0a9b84f9c38ebfa47534e2268fa91f8eac167e347fca62d6b2d21f2c3ba80471->leave($__internal_0a9b84f9c38ebfa47534e2268fa91f8eac167e347fca62d6b2d21f2c3ba80471_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% set messages = {*/
/*     'purge' : {*/
/*         status:  'success',*/
/*         title:   'The profiler database was purged successfully',*/
/*         message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'*/
/*     },*/
/*     'no_token' : {*/
/*         status:  'error',*/
/*         title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',*/
/*         message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token "' ~ token|default('') ~ '" was not found in the database.'*/
/*     },*/
/*     'upload_error' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'No file given or the file was not uploaded successfully.'*/
/*     },*/
/*     'already_exists' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'The token already exists in the database.'*/
/*     }*/
/* } %}*/
/* */
/* {% block summary %}*/
/*     <div class="status status-{{ messages[about].status }}">*/
/*         <div class="container">*/
/*             <h2>{{ messages[about].status|title }}</h2>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>{{ messages[about].title }}</h2>*/
/*     <p>{{ messages[about].message }}</p>*/
/* {% endblock %}*/
/* */
