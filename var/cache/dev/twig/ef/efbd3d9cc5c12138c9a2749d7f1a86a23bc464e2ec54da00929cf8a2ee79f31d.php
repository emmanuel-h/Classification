<?php

/* layout.html.twig */
class __TwigTemplate_6b38e3adfb8c555dff7f4b99cf2d24b614bf91d13ec68765fb9c776960db16bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_189b155c1ce296be027201126f2c52d401ea82cc11b836e44bea6ebe68c3482c = $this->env->getExtension("native_profiler");
        $__internal_189b155c1ce296be027201126f2c52d401ea82cc11b836e44bea6ebe68c3482c->enter($__internal_189b155c1ce296be027201126f2c52d401ea82cc11b836e44bea6ebe68c3482c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 8
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
   ";
        // line 10
        echo "  </head>
  <body>

\t
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1></h1>
      <p>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("lifo_classif_telechargement");
        echo "\">Téléchargement</a>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("lifo_classif_upload");
        echo "\">Upload</a>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lifo_classif_recherche");
        echo "\">Recherche</a>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
        echo "\">Classification</a>
\t";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("lifo_classif_admin");
            echo "\">Administration</a>
\t";
        }
        // line 25
        echo "\t<br/>
\t<br/>
      </p>
    </div>
 
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\"></div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo " 
  </div>

\t";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "  </body>
</html>";
        
        $__internal_189b155c1ce296be027201126f2c52d401ea82cc11b836e44bea6ebe68c3482c->leave($__internal_189b155c1ce296be027201126f2c52d401ea82cc11b836e44bea6ebe68c3482c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d37a3b8251048a682a0dfd666913fd80196d0d44bca5ace10ef47e82c17f3b35 = $this->env->getExtension("native_profiler");
        $__internal_d37a3b8251048a682a0dfd666913fd80196d0d44bca5ace10ef47e82c17f3b35->enter($__internal_d37a3b8251048a682a0dfd666913fd80196d0d44bca5ace10ef47e82c17f3b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_d37a3b8251048a682a0dfd666913fd80196d0d44bca5ace10ef47e82c17f3b35->leave($__internal_d37a3b8251048a682a0dfd666913fd80196d0d44bca5ace10ef47e82c17f3b35_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_c187ff60fab05d4ef8f15e4ae9cd72d909f9743299e19022a7a01362b5c9ee4b = $this->env->getExtension("native_profiler");
        $__internal_c187ff60fab05d4ef8f15e4ae9cd72d909f9743299e19022a7a01362b5c9ee4b->enter($__internal_c187ff60fab05d4ef8f15e4ae9cd72d909f9743299e19022a7a01362b5c9ee4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "      ";
        
        $__internal_c187ff60fab05d4ef8f15e4ae9cd72d909f9743299e19022a7a01362b5c9ee4b->leave($__internal_c187ff60fab05d4ef8f15e4ae9cd72d909f9743299e19022a7a01362b5c9ee4b_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ec88d2953e27a02c845b28ad80765ea764dfad11b0b37c95aa0ba8a06aee1c3f = $this->env->getExtension("native_profiler");
        $__internal_ec88d2953e27a02c845b28ad80765ea764dfad11b0b37c95aa0ba8a06aee1c3f->enter($__internal_ec88d2953e27a02c845b28ad80765ea764dfad11b0b37c95aa0ba8a06aee1c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "    ";
        
        $__internal_ec88d2953e27a02c845b28ad80765ea764dfad11b0b37c95aa0ba8a06aee1c3f->leave($__internal_ec88d2953e27a02c845b28ad80765ea764dfad11b0b37c95aa0ba8a06aee1c3f_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_697100c3f259d473984dfa3adec247539062c4738a826f50463a289f8e990221 = $this->env->getExtension("native_profiler");
        $__internal_697100c3f259d473984dfa3adec247539062c4738a826f50463a289f8e990221->enter($__internal_697100c3f259d473984dfa3adec247539062c4738a826f50463a289f8e990221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_697100c3f259d473984dfa3adec247539062c4738a826f50463a289f8e990221->leave($__internal_697100c3f259d473984dfa3adec247539062c4738a826f50463a289f8e990221_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  150 => 47,  143 => 43,  137 => 42,  130 => 35,  124 => 34,  112 => 6,  104 => 51,  102 => 47,  97 => 44,  95 => 42,  87 => 36,  85 => 34,  74 => 25,  68 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Classification{% endblock %}</title>*/
/* 	{# {% block stylesheets %} #}*/
/* 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*    {# {% endblock %} #}*/
/*   </head>*/
/*   <body>*/
/* */
/* 	*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1></h1>*/
/*       <p>*/
/*     <a href="{{ path('lifo_classif_telechargement') }}">Téléchargement</a>*/
/*     <a href="{{ path('lifo_classif_upload') }}">Upload</a>*/
/*     <a href="{{ path('lifo_classif_recherche') }}">Recherche</a>*/
/*     <a href="{{ path('lifo_classif_classification') }}">Classification</a>*/
/* 	{% if is_granted('ROLE_ADMIN') %}*/
/* 		<a href="{{ path('lifo_classif_admin') }}">Administration</a>*/
/* 	{% endif %}*/
/* 	<br/>*/
/* 	<br/>*/
/*       </p>*/
/*     </div>*/
/*  */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3"></div>*/
/*  */
/*       <div id="content" class="col-md-9">*/
/*       {% block body %}*/
/*       {% endblock %}*/
/*       </div>*/
/*  */
/*     </div>*/
/*  */
/*     <hr>*/
/*  */
/*     {% block footer %}*/
/*     {% endblock %}*/
/*  */
/*   </div>*/
/* */
/* 	{% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/*   </body>*/
/* </html>*/
