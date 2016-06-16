<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_12830d54346a14ca152c70427b8c4ad6a1f6472cfbfd7d6b5543e67299eee63f extends Twig_Template
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
        $__internal_dbb5d62a14fc8fe6d78e6687da011081b749ca5ef87eb99d8dcd5e440225dae4 = $this->env->getExtension("native_profiler");
        $__internal_dbb5d62a14fc8fe6d78e6687da011081b749ca5ef87eb99d8dcd5e440225dae4->enter($__internal_dbb5d62a14fc8fe6d78e6687da011081b749ca5ef87eb99d8dcd5e440225dae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dbb5d62a14fc8fe6d78e6687da011081b749ca5ef87eb99d8dcd5e440225dae4->leave($__internal_dbb5d62a14fc8fe6d78e6687da011081b749ca5ef87eb99d8dcd5e440225dae4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
