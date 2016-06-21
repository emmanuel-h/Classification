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
        $__internal_4153468c2072ef252a7af73c46144dd2d8b2d4d654dc5ab530f149aa35b2cda0 = $this->env->getExtension("native_profiler");
        $__internal_4153468c2072ef252a7af73c46144dd2d8b2d4d654dc5ab530f149aa35b2cda0->enter($__internal_4153468c2072ef252a7af73c46144dd2d8b2d4d654dc5ab530f149aa35b2cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4153468c2072ef252a7af73c46144dd2d8b2d4d654dc5ab530f149aa35b2cda0->leave($__internal_4153468c2072ef252a7af73c46144dd2d8b2d4d654dc5ab530f149aa35b2cda0_prof);

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
