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
        $__internal_21423ee8a69d166228dfdeeb7f4c9fddddef00f4c2feb24522450f0d11d48e60 = $this->env->getExtension("native_profiler");
        $__internal_21423ee8a69d166228dfdeeb7f4c9fddddef00f4c2feb24522450f0d11d48e60->enter($__internal_21423ee8a69d166228dfdeeb7f4c9fddddef00f4c2feb24522450f0d11d48e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_21423ee8a69d166228dfdeeb7f4c9fddddef00f4c2feb24522450f0d11d48e60->leave($__internal_21423ee8a69d166228dfdeeb7f4c9fddddef00f4c2feb24522450f0d11d48e60_prof);

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
