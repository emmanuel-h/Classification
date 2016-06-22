<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2b805f7b108d76787a0231d3c31f49d78f0651fea48816049f08f707ae71c0c2 extends Twig_Template
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
        $__internal_c37acf882f2be6559c308119f4ff47ba99e4a519f81a6611a1c9a79afdf2e95d = $this->env->getExtension("native_profiler");
        $__internal_c37acf882f2be6559c308119f4ff47ba99e4a519f81a6611a1c9a79afdf2e95d->enter($__internal_c37acf882f2be6559c308119f4ff47ba99e4a519f81a6611a1c9a79afdf2e95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c37acf882f2be6559c308119f4ff47ba99e4a519f81a6611a1c9a79afdf2e95d->leave($__internal_c37acf882f2be6559c308119f4ff47ba99e4a519f81a6611a1c9a79afdf2e95d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
