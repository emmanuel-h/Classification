<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c3983a749d4b379ff4b5220a43e5d64b92caf26e5ef644bbe432bfc9b2e08122 extends Twig_Template
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
        $__internal_6f2d961dc688f1e16bdaa2861215f717192e8c081949031d3e3d3aa15a33272f = $this->env->getExtension("native_profiler");
        $__internal_6f2d961dc688f1e16bdaa2861215f717192e8c081949031d3e3d3aa15a33272f->enter($__internal_6f2d961dc688f1e16bdaa2861215f717192e8c081949031d3e3d3aa15a33272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6f2d961dc688f1e16bdaa2861215f717192e8c081949031d3e3d3aa15a33272f->leave($__internal_6f2d961dc688f1e16bdaa2861215f717192e8c081949031d3e3d3aa15a33272f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
