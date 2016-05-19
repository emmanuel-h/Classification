<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1f677e2e4074d7e3a3cce935261183e6abb59c6ad9c837af733aac016a05b37b extends Twig_Template
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
        $__internal_4bcd4a65482b69e5555e9622ac8a53f6eb7bbb991502c0b15fbb4ec1057c3d3f = $this->env->getExtension("native_profiler");
        $__internal_4bcd4a65482b69e5555e9622ac8a53f6eb7bbb991502c0b15fbb4ec1057c3d3f->enter($__internal_4bcd4a65482b69e5555e9622ac8a53f6eb7bbb991502c0b15fbb4ec1057c3d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4bcd4a65482b69e5555e9622ac8a53f6eb7bbb991502c0b15fbb4ec1057c3d3f->leave($__internal_4bcd4a65482b69e5555e9622ac8a53f6eb7bbb991502c0b15fbb4ec1057c3d3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
