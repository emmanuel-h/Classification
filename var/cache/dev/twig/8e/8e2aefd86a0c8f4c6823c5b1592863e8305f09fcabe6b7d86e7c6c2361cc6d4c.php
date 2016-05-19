<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8d90e8f9c957b2f98f4319302557aded947b5bbfc627f37ea58b1d00a6634316 extends Twig_Template
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
        $__internal_41478cc99eee0561104b036bfa7a6321a3edd8bbf7fabe581055998d58b8c794 = $this->env->getExtension("native_profiler");
        $__internal_41478cc99eee0561104b036bfa7a6321a3edd8bbf7fabe581055998d58b8c794->enter($__internal_41478cc99eee0561104b036bfa7a6321a3edd8bbf7fabe581055998d58b8c794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_41478cc99eee0561104b036bfa7a6321a3edd8bbf7fabe581055998d58b8c794->leave($__internal_41478cc99eee0561104b036bfa7a6321a3edd8bbf7fabe581055998d58b8c794_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
