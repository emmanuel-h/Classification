<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_fdde21abf41d6e31a29e18dddce2ee609597323dda889fe4eb7b3981f5ec3feb extends Twig_Template
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
        $__internal_b234e0af85b5b18152cc23319882887e91248c88f949c2d83003919dd2f8b8ab = $this->env->getExtension("native_profiler");
        $__internal_b234e0af85b5b18152cc23319882887e91248c88f949c2d83003919dd2f8b8ab->enter($__internal_b234e0af85b5b18152cc23319882887e91248c88f949c2d83003919dd2f8b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b234e0af85b5b18152cc23319882887e91248c88f949c2d83003919dd2f8b8ab->leave($__internal_b234e0af85b5b18152cc23319882887e91248c88f949c2d83003919dd2f8b8ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
