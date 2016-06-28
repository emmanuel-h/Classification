<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_60b96128186b41b86560193af879b8130fae47605d6615faef2c30ae542dd02c extends Twig_Template
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
        $__internal_305c2d86547f056905e74d0d5149655869e3d5e9e252ec63f5aeb01a7f042ce3 = $this->env->getExtension("native_profiler");
        $__internal_305c2d86547f056905e74d0d5149655869e3d5e9e252ec63f5aeb01a7f042ce3->enter($__internal_305c2d86547f056905e74d0d5149655869e3d5e9e252ec63f5aeb01a7f042ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_305c2d86547f056905e74d0d5149655869e3d5e9e252ec63f5aeb01a7f042ce3->leave($__internal_305c2d86547f056905e74d0d5149655869e3d5e9e252ec63f5aeb01a7f042ce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
