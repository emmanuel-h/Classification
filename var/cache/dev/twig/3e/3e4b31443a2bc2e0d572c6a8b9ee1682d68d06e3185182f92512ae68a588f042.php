<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1b966b4d0606720f0bb59de15708cc0c8497731e725bfe5e42dd971e8e42cac5 extends Twig_Template
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
        $__internal_1cf3d5c98fd8d6c3485edf77962ffbc5fb1dc2889868ad7dd4d419c7b0478f0f = $this->env->getExtension("native_profiler");
        $__internal_1cf3d5c98fd8d6c3485edf77962ffbc5fb1dc2889868ad7dd4d419c7b0478f0f->enter($__internal_1cf3d5c98fd8d6c3485edf77962ffbc5fb1dc2889868ad7dd4d419c7b0478f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1cf3d5c98fd8d6c3485edf77962ffbc5fb1dc2889868ad7dd4d419c7b0478f0f->leave($__internal_1cf3d5c98fd8d6c3485edf77962ffbc5fb1dc2889868ad7dd4d419c7b0478f0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
