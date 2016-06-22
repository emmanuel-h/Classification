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
        $__internal_266109925b8e8ee74a7d084c6b24e37b3f6218b7f00a22900d7fea1255268efc = $this->env->getExtension("native_profiler");
        $__internal_266109925b8e8ee74a7d084c6b24e37b3f6218b7f00a22900d7fea1255268efc->enter($__internal_266109925b8e8ee74a7d084c6b24e37b3f6218b7f00a22900d7fea1255268efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_266109925b8e8ee74a7d084c6b24e37b3f6218b7f00a22900d7fea1255268efc->leave($__internal_266109925b8e8ee74a7d084c6b24e37b3f6218b7f00a22900d7fea1255268efc_prof);

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
