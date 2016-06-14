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
        $__internal_d3fc3e3dfdec39f58b975e6eb96c25cd00c7017debbb9d283a3440afb114d852 = $this->env->getExtension("native_profiler");
        $__internal_d3fc3e3dfdec39f58b975e6eb96c25cd00c7017debbb9d283a3440afb114d852->enter($__internal_d3fc3e3dfdec39f58b975e6eb96c25cd00c7017debbb9d283a3440afb114d852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d3fc3e3dfdec39f58b975e6eb96c25cd00c7017debbb9d283a3440afb114d852->leave($__internal_d3fc3e3dfdec39f58b975e6eb96c25cd00c7017debbb9d283a3440afb114d852_prof);

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
