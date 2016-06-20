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
        $__internal_093e9cb6e5665f9f0c3441e0e80a73c22b2aa0cff6089d21f5eadf71e6341b36 = $this->env->getExtension("native_profiler");
        $__internal_093e9cb6e5665f9f0c3441e0e80a73c22b2aa0cff6089d21f5eadf71e6341b36->enter($__internal_093e9cb6e5665f9f0c3441e0e80a73c22b2aa0cff6089d21f5eadf71e6341b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_093e9cb6e5665f9f0c3441e0e80a73c22b2aa0cff6089d21f5eadf71e6341b36->leave($__internal_093e9cb6e5665f9f0c3441e0e80a73c22b2aa0cff6089d21f5eadf71e6341b36_prof);

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
