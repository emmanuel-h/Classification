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
        $__internal_7d66f1f34591de541c8340b0f2d870f8da6bc9d7bb3edc548e5b7ed387f76eec = $this->env->getExtension("native_profiler");
        $__internal_7d66f1f34591de541c8340b0f2d870f8da6bc9d7bb3edc548e5b7ed387f76eec->enter($__internal_7d66f1f34591de541c8340b0f2d870f8da6bc9d7bb3edc548e5b7ed387f76eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7d66f1f34591de541c8340b0f2d870f8da6bc9d7bb3edc548e5b7ed387f76eec->leave($__internal_7d66f1f34591de541c8340b0f2d870f8da6bc9d7bb3edc548e5b7ed387f76eec_prof);

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
