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
        $__internal_d7b890830d54cecf6dad0374ac3693d9c5f1c63e7e0241f009125f22da69d687 = $this->env->getExtension("native_profiler");
        $__internal_d7b890830d54cecf6dad0374ac3693d9c5f1c63e7e0241f009125f22da69d687->enter($__internal_d7b890830d54cecf6dad0374ac3693d9c5f1c63e7e0241f009125f22da69d687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d7b890830d54cecf6dad0374ac3693d9c5f1c63e7e0241f009125f22da69d687->leave($__internal_d7b890830d54cecf6dad0374ac3693d9c5f1c63e7e0241f009125f22da69d687_prof);

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
