<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_192af36d8be7592a1a6208af515651a1f55993933cdaa7649dacda6eae21b6b3 extends Twig_Template
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
        $__internal_39de54b46b0d90650fb161e23cd5aa5c050977cfb7b2620c92e30c4add893f01 = $this->env->getExtension("native_profiler");
        $__internal_39de54b46b0d90650fb161e23cd5aa5c050977cfb7b2620c92e30c4add893f01->enter($__internal_39de54b46b0d90650fb161e23cd5aa5c050977cfb7b2620c92e30c4add893f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_39de54b46b0d90650fb161e23cd5aa5c050977cfb7b2620c92e30c4add893f01->leave($__internal_39de54b46b0d90650fb161e23cd5aa5c050977cfb7b2620c92e30c4add893f01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
