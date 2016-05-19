<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_069e4de95511d201e360349269558d5f2cb9b7f19733cf904933e2ac49abf388 extends Twig_Template
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
        $__internal_bd9790e31e30ea1fd7c27cc04ffb03b12090cdd83d28f9e75dd82b2846878e0a = $this->env->getExtension("native_profiler");
        $__internal_bd9790e31e30ea1fd7c27cc04ffb03b12090cdd83d28f9e75dd82b2846878e0a->enter($__internal_bd9790e31e30ea1fd7c27cc04ffb03b12090cdd83d28f9e75dd82b2846878e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_bd9790e31e30ea1fd7c27cc04ffb03b12090cdd83d28f9e75dd82b2846878e0a->leave($__internal_bd9790e31e30ea1fd7c27cc04ffb03b12090cdd83d28f9e75dd82b2846878e0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php $method = strtoupper($method) ?>*/
/* <?php $form_method = $method === 'GET' || $method === 'POST' ? $method : 'POST' ?>*/
/* <form name="<?php echo $name ?>" method="<?php echo strtolower($form_method) ?>"<?php if ($action !== ''): ?> action="<?php echo $action ?>"<?php endif ?><?php foreach ($attr as $k => $v) { printf(' %s="%s"', $view->escape($k), $view->escape($v)); } ?><?php if ($multipart): ?> enctype="multipart/form-data"<?php endif ?>>*/
/* <?php if ($form_method !== $method): ?>*/
/*     <input type="hidden" name="_method" value="<?php echo $method ?>" />*/
/* <?php endif ?>*/
/* */
