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
        $__internal_ddb10684cdd630358fc3cf3ff0896f4f2099272c3468d8a9b6a679f44e7da1bf = $this->env->getExtension("native_profiler");
        $__internal_ddb10684cdd630358fc3cf3ff0896f4f2099272c3468d8a9b6a679f44e7da1bf->enter($__internal_ddb10684cdd630358fc3cf3ff0896f4f2099272c3468d8a9b6a679f44e7da1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ddb10684cdd630358fc3cf3ff0896f4f2099272c3468d8a9b6a679f44e7da1bf->leave($__internal_ddb10684cdd630358fc3cf3ff0896f4f2099272c3468d8a9b6a679f44e7da1bf_prof);

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
