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
        $__internal_7d102659814d70470d060f3194606cba806f1820d6dd5d9388cda3c51d26e1fa = $this->env->getExtension("native_profiler");
        $__internal_7d102659814d70470d060f3194606cba806f1820d6dd5d9388cda3c51d26e1fa->enter($__internal_7d102659814d70470d060f3194606cba806f1820d6dd5d9388cda3c51d26e1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7d102659814d70470d060f3194606cba806f1820d6dd5d9388cda3c51d26e1fa->leave($__internal_7d102659814d70470d060f3194606cba806f1820d6dd5d9388cda3c51d26e1fa_prof);

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
