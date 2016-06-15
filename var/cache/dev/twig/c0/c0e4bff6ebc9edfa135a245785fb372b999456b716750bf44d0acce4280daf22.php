<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f792913e334e508cf3e53237d60c60b9e337e19f133dfde54cdb07c345ca7636 extends Twig_Template
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
        $__internal_41734c1964fc8ea2ed2e2fe370bebf1361f90b9ccca710930c98988457c1f707 = $this->env->getExtension("native_profiler");
        $__internal_41734c1964fc8ea2ed2e2fe370bebf1361f90b9ccca710930c98988457c1f707->enter($__internal_41734c1964fc8ea2ed2e2fe370bebf1361f90b9ccca710930c98988457c1f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_41734c1964fc8ea2ed2e2fe370bebf1361f90b9ccca710930c98988457c1f707->leave($__internal_41734c1964fc8ea2ed2e2fe370bebf1361f90b9ccca710930c98988457c1f707_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
