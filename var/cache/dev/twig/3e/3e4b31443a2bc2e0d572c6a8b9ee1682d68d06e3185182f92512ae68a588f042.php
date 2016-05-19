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
        $__internal_62cc4dc0a7e4c2d01e0b3c200d6fffe0488f8a41e06cd180c20ffd7596169188 = $this->env->getExtension("native_profiler");
        $__internal_62cc4dc0a7e4c2d01e0b3c200d6fffe0488f8a41e06cd180c20ffd7596169188->enter($__internal_62cc4dc0a7e4c2d01e0b3c200d6fffe0488f8a41e06cd180c20ffd7596169188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_62cc4dc0a7e4c2d01e0b3c200d6fffe0488f8a41e06cd180c20ffd7596169188->leave($__internal_62cc4dc0a7e4c2d01e0b3c200d6fffe0488f8a41e06cd180c20ffd7596169188_prof);

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
