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
        $__internal_81a5fe4fda27d1b04e6bcf2314d04571df167035d0c897edbb75c49d476dc8c2 = $this->env->getExtension("native_profiler");
        $__internal_81a5fe4fda27d1b04e6bcf2314d04571df167035d0c897edbb75c49d476dc8c2->enter($__internal_81a5fe4fda27d1b04e6bcf2314d04571df167035d0c897edbb75c49d476dc8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_81a5fe4fda27d1b04e6bcf2314d04571df167035d0c897edbb75c49d476dc8c2->leave($__internal_81a5fe4fda27d1b04e6bcf2314d04571df167035d0c897edbb75c49d476dc8c2_prof);

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
