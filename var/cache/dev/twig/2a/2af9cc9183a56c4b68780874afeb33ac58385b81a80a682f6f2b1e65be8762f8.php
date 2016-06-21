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
        $__internal_5f512ad0db50de3f30c60702d352e25522950a5c0d55198d854a9fd36df17c07 = $this->env->getExtension("native_profiler");
        $__internal_5f512ad0db50de3f30c60702d352e25522950a5c0d55198d854a9fd36df17c07->enter($__internal_5f512ad0db50de3f30c60702d352e25522950a5c0d55198d854a9fd36df17c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5f512ad0db50de3f30c60702d352e25522950a5c0d55198d854a9fd36df17c07->leave($__internal_5f512ad0db50de3f30c60702d352e25522950a5c0d55198d854a9fd36df17c07_prof);

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
