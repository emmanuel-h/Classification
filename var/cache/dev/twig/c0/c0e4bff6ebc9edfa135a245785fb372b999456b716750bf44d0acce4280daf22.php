<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f792913e334e508cf3e53237d60c60b9e337e19f133dfde54cdb07c345ca7636 extends Twig_Template
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
        $__internal_4e1cea76a69e5969bddc6a8c0486261d4e69903e70cfe7a382bc6c2a5358a55f = $this->env->getExtension("native_profiler");
        $__internal_4e1cea76a69e5969bddc6a8c0486261d4e69903e70cfe7a382bc6c2a5358a55f->enter($__internal_4e1cea76a69e5969bddc6a8c0486261d4e69903e70cfe7a382bc6c2a5358a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4e1cea76a69e5969bddc6a8c0486261d4e69903e70cfe7a382bc6c2a5358a55f->leave($__internal_4e1cea76a69e5969bddc6a8c0486261d4e69903e70cfe7a382bc6c2a5358a55f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
