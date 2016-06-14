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
        $__internal_4d1023f15d35128797d61bfd82b705a0e9e0f90d63d6f14c3885c85b78331bc6 = $this->env->getExtension("native_profiler");
        $__internal_4d1023f15d35128797d61bfd82b705a0e9e0f90d63d6f14c3885c85b78331bc6->enter($__internal_4d1023f15d35128797d61bfd82b705a0e9e0f90d63d6f14c3885c85b78331bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4d1023f15d35128797d61bfd82b705a0e9e0f90d63d6f14c3885c85b78331bc6->leave($__internal_4d1023f15d35128797d61bfd82b705a0e9e0f90d63d6f14c3885c85b78331bc6_prof);

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
