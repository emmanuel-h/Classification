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
        $__internal_d8f2f137f7bace4547dbc4065d0d7009516e13b21a73e3ef0db68cfb15f48b04 = $this->env->getExtension("native_profiler");
        $__internal_d8f2f137f7bace4547dbc4065d0d7009516e13b21a73e3ef0db68cfb15f48b04->enter($__internal_d8f2f137f7bace4547dbc4065d0d7009516e13b21a73e3ef0db68cfb15f48b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d8f2f137f7bace4547dbc4065d0d7009516e13b21a73e3ef0db68cfb15f48b04->leave($__internal_d8f2f137f7bace4547dbc4065d0d7009516e13b21a73e3ef0db68cfb15f48b04_prof);

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
