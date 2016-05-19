<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86107a69d681939bdb0574796856d663aa92856d8be744e527380e27af9bf22b extends Twig_Template
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
        $__internal_89bd1cc9188947f20cb321fcda9330e0956f05a19a6e3767b2c64026ba428622 = $this->env->getExtension("native_profiler");
        $__internal_89bd1cc9188947f20cb321fcda9330e0956f05a19a6e3767b2c64026ba428622->enter($__internal_89bd1cc9188947f20cb321fcda9330e0956f05a19a6e3767b2c64026ba428622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_89bd1cc9188947f20cb321fcda9330e0956f05a19a6e3767b2c64026ba428622->leave($__internal_89bd1cc9188947f20cb321fcda9330e0956f05a19a6e3767b2c64026ba428622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
