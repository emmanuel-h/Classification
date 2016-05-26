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
        $__internal_417fc926f2899b6dd1b858fae0a30a5a802910c1ef6f14fc3ab1c215cd6e283e = $this->env->getExtension("native_profiler");
        $__internal_417fc926f2899b6dd1b858fae0a30a5a802910c1ef6f14fc3ab1c215cd6e283e->enter($__internal_417fc926f2899b6dd1b858fae0a30a5a802910c1ef6f14fc3ab1c215cd6e283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_417fc926f2899b6dd1b858fae0a30a5a802910c1ef6f14fc3ab1c215cd6e283e->leave($__internal_417fc926f2899b6dd1b858fae0a30a5a802910c1ef6f14fc3ab1c215cd6e283e_prof);

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
