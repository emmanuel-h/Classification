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
        $__internal_0762c6ec0f3d988598bf7d731eb1511ca248bd55621d556247ea49d2d702b162 = $this->env->getExtension("native_profiler");
        $__internal_0762c6ec0f3d988598bf7d731eb1511ca248bd55621d556247ea49d2d702b162->enter($__internal_0762c6ec0f3d988598bf7d731eb1511ca248bd55621d556247ea49d2d702b162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0762c6ec0f3d988598bf7d731eb1511ca248bd55621d556247ea49d2d702b162->leave($__internal_0762c6ec0f3d988598bf7d731eb1511ca248bd55621d556247ea49d2d702b162_prof);

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
