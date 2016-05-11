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
        $__internal_9708a41b8bd41f5c7ae48ecad91ecb4d5ed82b3d96d97cb392b13f4a58ba08ac = $this->env->getExtension("native_profiler");
        $__internal_9708a41b8bd41f5c7ae48ecad91ecb4d5ed82b3d96d97cb392b13f4a58ba08ac->enter($__internal_9708a41b8bd41f5c7ae48ecad91ecb4d5ed82b3d96d97cb392b13f4a58ba08ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lifo_classif_tesson");
        echo "\">Tesson</a>
\t<br/>
\t<br/>
      </p>
    </div>
 
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\"></div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "      </div>
 
    </div>
 
    <hr>
 
    ";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo " 
  </div>

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "  </body>
</html>";
        
        $__internal_9708a41b8bd41f5c7ae48ecad91ecb4d5ed82b3d96d97cb392b13f4a58ba08ac->leave($__internal_9708a41b8bd41f5c7ae48ecad91ecb4d5ed82b3d96d97cb392b13f4a58ba08ac_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1a8fb14cdf745627c5ae6eadd9b6c922099a5f733f4457e4a40fff2dc6718ed = $this->env->getExtension("native_profiler");
        $__internal_a1a8fb14cdf745627c5ae6eadd9b6c922099a5f733f4457e4a40fff2dc6718ed->enter($__internal_a1a8fb14cdf745627c5ae6eadd9b6c922099a5f733f4457e4a40fff2dc6718ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Classification";
        
        $__internal_a1a8fb14cdf745627c5ae6eadd9b6c922099a5f733f4457e4a40fff2dc6718ed->leave($__internal_a1a8fb14cdf745627c5ae6eadd9b6c922099a5f733f4457e4a40fff2dc6718ed_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e48da689b1126effe53ffcaf9e52f4913dacb3fabf0b9015ee94d8568e60276 = $this->env->getExtension("native_profiler");
        $__internal_0e48da689b1126effe53ffcaf9e52f4913dacb3fabf0b9015ee94d8568e60276->enter($__internal_0e48da689b1126effe53ffcaf9e52f4913dacb3fabf0b9015ee94d8568e60276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "      ";
        
        $__internal_0e48da689b1126effe53ffcaf9e52f4913dacb3fabf0b9015ee94d8568e60276->leave($__internal_0e48da689b1126effe53ffcaf9e52f4913dacb3fabf0b9015ee94d8568e60276_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_49f1114cd0d57f45d0341764203b6abf58adf485e37248c25bb256c1ce8bc3a5 = $this->env->getExtension("native_profiler");
        $__internal_49f1114cd0d57f45d0341764203b6abf58adf485e37248c25bb256c1ce8bc3a5->enter($__internal_49f1114cd0d57f45d0341764203b6abf58adf485e37248c25bb256c1ce8bc3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "    ";
        
        $__internal_49f1114cd0d57f45d0341764203b6abf58adf485e37248c25bb256c1ce8bc3a5->leave($__internal_49f1114cd0d57f45d0341764203b6abf58adf485e37248c25bb256c1ce8bc3a5_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49cb71851ed3e4a859016265f34208f438caad33677e30c8ee3bdc64645290a3 = $this->env->getExtension("native_profiler");
        $__internal_49cb71851ed3e4a859016265f34208f438caad33677e30c8ee3bdc64645290a3->enter($__internal_49cb71851ed3e4a859016265f34208f438caad33677e30c8ee3bdc64645290a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_49cb71851ed3e4a859016265f34208f438caad33677e30c8ee3bdc64645290a3->leave($__internal_49cb71851ed3e4a859016265f34208f438caad33677e30c8ee3bdc64645290a3_prof);

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
        return array (  150 => 46,  144 => 45,  137 => 41,  131 => 40,  124 => 33,  118 => 32,  106 => 6,  98 => 49,  96 => 45,  91 => 42,  89 => 40,  81 => 34,  79 => 32,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  40 => 10,  37 => 8,  33 => 6,  26 => 1,);
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
/*     <a href="{{ path('lifo_classif_tesson') }}">Tesson</a>*/
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
