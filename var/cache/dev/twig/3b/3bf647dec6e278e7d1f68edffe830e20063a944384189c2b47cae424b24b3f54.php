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
        $__internal_5451864911a2bbc4d2ff2273807df6711a870f11a3681f95a543c6bb865799da = $this->env->getExtension("native_profiler");
        $__internal_5451864911a2bbc4d2ff2273807df6711a870f11a3681f95a543c6bb865799da->enter($__internal_5451864911a2bbc4d2ff2273807df6711a870f11a3681f95a543c6bb865799da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5451864911a2bbc4d2ff2273807df6711a870f11a3681f95a543c6bb865799da->leave($__internal_5451864911a2bbc4d2ff2273807df6711a870f11a3681f95a543c6bb865799da_prof);

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
