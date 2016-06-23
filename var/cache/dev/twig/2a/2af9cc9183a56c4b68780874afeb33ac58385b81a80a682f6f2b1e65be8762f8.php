<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1b8509220ce52c7986133230581f4e546aa4cb807f22b99f576faf2dafdc7e54 extends Twig_Template
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
        $__internal_ce890a5dd841cba7047d643aeeb1492849ddfedaf94bb2e0bad5b52cdde7d5d4 = $this->env->getExtension("native_profiler");
        $__internal_ce890a5dd841cba7047d643aeeb1492849ddfedaf94bb2e0bad5b52cdde7d5d4->enter($__internal_ce890a5dd841cba7047d643aeeb1492849ddfedaf94bb2e0bad5b52cdde7d5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ce890a5dd841cba7047d643aeeb1492849ddfedaf94bb2e0bad5b52cdde7d5d4->leave($__internal_ce890a5dd841cba7047d643aeeb1492849ddfedaf94bb2e0bad5b52cdde7d5d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
