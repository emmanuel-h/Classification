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
        $__internal_adb4a25fda33ba7e876a658d6ede3768e89bbe292672f0a38da12d6f5bfdf86d = $this->env->getExtension("native_profiler");
        $__internal_adb4a25fda33ba7e876a658d6ede3768e89bbe292672f0a38da12d6f5bfdf86d->enter($__internal_adb4a25fda33ba7e876a658d6ede3768e89bbe292672f0a38da12d6f5bfdf86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_adb4a25fda33ba7e876a658d6ede3768e89bbe292672f0a38da12d6f5bfdf86d->leave($__internal_adb4a25fda33ba7e876a658d6ede3768e89bbe292672f0a38da12d6f5bfdf86d_prof);

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
