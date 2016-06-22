<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6ae3a7788342e4d54ee337787e0c22ee312d3b011a7a4590218b70de69c98aa extends Twig_Template
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
        $__internal_f0731a8c035ac274ec5e2b07136b8dd202cc958b09da4b1ed8d8d95a06b7284a = $this->env->getExtension("native_profiler");
        $__internal_f0731a8c035ac274ec5e2b07136b8dd202cc958b09da4b1ed8d8d95a06b7284a->enter($__internal_f0731a8c035ac274ec5e2b07136b8dd202cc958b09da4b1ed8d8d95a06b7284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f0731a8c035ac274ec5e2b07136b8dd202cc958b09da4b1ed8d8d95a06b7284a->leave($__internal_f0731a8c035ac274ec5e2b07136b8dd202cc958b09da4b1ed8d8d95a06b7284a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
