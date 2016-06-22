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
        $__internal_b707efb8915196d49777f9fd4d9c415de95c844f3693ffd4577cfe4f6b27f2da = $this->env->getExtension("native_profiler");
        $__internal_b707efb8915196d49777f9fd4d9c415de95c844f3693ffd4577cfe4f6b27f2da->enter($__internal_b707efb8915196d49777f9fd4d9c415de95c844f3693ffd4577cfe4f6b27f2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_b707efb8915196d49777f9fd4d9c415de95c844f3693ffd4577cfe4f6b27f2da->leave($__internal_b707efb8915196d49777f9fd4d9c415de95c844f3693ffd4577cfe4f6b27f2da_prof);

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
