<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2a33474c747d757f0a0d36acaa963be181bebc117504b240000ef0f532495d2f extends Twig_Template
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
        $__internal_9d76d35870c733e189bae616a6b1861821f4d82b5b8609f4297e27f998ee1319 = $this->env->getExtension("native_profiler");
        $__internal_9d76d35870c733e189bae616a6b1861821f4d82b5b8609f4297e27f998ee1319->enter($__internal_9d76d35870c733e189bae616a6b1861821f4d82b5b8609f4297e27f998ee1319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9d76d35870c733e189bae616a6b1861821f4d82b5b8609f4297e27f998ee1319->leave($__internal_9d76d35870c733e189bae616a6b1861821f4d82b5b8609f4297e27f998ee1319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
