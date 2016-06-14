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
        $__internal_b385d58a38871bd43efca030cfd032ace52d4e9e855600628ae1bc545dfeadf8 = $this->env->getExtension("native_profiler");
        $__internal_b385d58a38871bd43efca030cfd032ace52d4e9e855600628ae1bc545dfeadf8->enter($__internal_b385d58a38871bd43efca030cfd032ace52d4e9e855600628ae1bc545dfeadf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b385d58a38871bd43efca030cfd032ace52d4e9e855600628ae1bc545dfeadf8->leave($__internal_b385d58a38871bd43efca030cfd032ace52d4e9e855600628ae1bc545dfeadf8_prof);

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
