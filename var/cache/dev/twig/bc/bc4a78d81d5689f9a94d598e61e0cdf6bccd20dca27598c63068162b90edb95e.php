<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2a55348bdc79fef7c345e9fbf14d1abfac658302403b01faf5b90bce95098384 extends Twig_Template
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
        $__internal_3e2bf3109a7c46665f148ec2c161d3a8ba50cf294b7f31cfd2c01b9ddf887715 = $this->env->getExtension("native_profiler");
        $__internal_3e2bf3109a7c46665f148ec2c161d3a8ba50cf294b7f31cfd2c01b9ddf887715->enter($__internal_3e2bf3109a7c46665f148ec2c161d3a8ba50cf294b7f31cfd2c01b9ddf887715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3e2bf3109a7c46665f148ec2c161d3a8ba50cf294b7f31cfd2c01b9ddf887715->leave($__internal_3e2bf3109a7c46665f148ec2c161d3a8ba50cf294b7f31cfd2c01b9ddf887715_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
