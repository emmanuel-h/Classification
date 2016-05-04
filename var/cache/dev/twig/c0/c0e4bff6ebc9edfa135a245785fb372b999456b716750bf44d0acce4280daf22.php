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
        $__internal_ac2317b35f9a8154826ceac1ac897afca6ed19bd501c104efe88e0d9f6172552 = $this->env->getExtension("native_profiler");
        $__internal_ac2317b35f9a8154826ceac1ac897afca6ed19bd501c104efe88e0d9f6172552->enter($__internal_ac2317b35f9a8154826ceac1ac897afca6ed19bd501c104efe88e0d9f6172552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ac2317b35f9a8154826ceac1ac897afca6ed19bd501c104efe88e0d9f6172552->leave($__internal_ac2317b35f9a8154826ceac1ac897afca6ed19bd501c104efe88e0d9f6172552_prof);

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
