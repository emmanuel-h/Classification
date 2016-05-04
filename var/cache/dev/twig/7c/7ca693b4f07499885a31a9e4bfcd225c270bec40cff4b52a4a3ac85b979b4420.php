<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_192af36d8be7592a1a6208af515651a1f55993933cdaa7649dacda6eae21b6b3 extends Twig_Template
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
        $__internal_eb4d321009690cffafbd962b7976e1cd3af12d9c097b59fc00e64067f8790314 = $this->env->getExtension("native_profiler");
        $__internal_eb4d321009690cffafbd962b7976e1cd3af12d9c097b59fc00e64067f8790314->enter($__internal_eb4d321009690cffafbd962b7976e1cd3af12d9c097b59fc00e64067f8790314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eb4d321009690cffafbd962b7976e1cd3af12d9c097b59fc00e64067f8790314->leave($__internal_eb4d321009690cffafbd962b7976e1cd3af12d9c097b59fc00e64067f8790314_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
