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
        $__internal_b8659d8b37d5bc76d4532578d490095b8f5d94996b90abd909d2f09bfee79fd7 = $this->env->getExtension("native_profiler");
        $__internal_b8659d8b37d5bc76d4532578d490095b8f5d94996b90abd909d2f09bfee79fd7->enter($__internal_b8659d8b37d5bc76d4532578d490095b8f5d94996b90abd909d2f09bfee79fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b8659d8b37d5bc76d4532578d490095b8f5d94996b90abd909d2f09bfee79fd7->leave($__internal_b8659d8b37d5bc76d4532578d490095b8f5d94996b90abd909d2f09bfee79fd7_prof);

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
