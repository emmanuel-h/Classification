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
        $__internal_ab796666b145d10422e3c66cdf25c817bbe219afa4b61fc71e6ed55dc97bd05f = $this->env->getExtension("native_profiler");
        $__internal_ab796666b145d10422e3c66cdf25c817bbe219afa4b61fc71e6ed55dc97bd05f->enter($__internal_ab796666b145d10422e3c66cdf25c817bbe219afa4b61fc71e6ed55dc97bd05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ab796666b145d10422e3c66cdf25c817bbe219afa4b61fc71e6ed55dc97bd05f->leave($__internal_ab796666b145d10422e3c66cdf25c817bbe219afa4b61fc71e6ed55dc97bd05f_prof);

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
