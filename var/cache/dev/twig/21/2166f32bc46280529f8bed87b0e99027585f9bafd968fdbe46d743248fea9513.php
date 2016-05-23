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
        $__internal_646773d2294e8bde6f073abaeb42bd8964acc4807c2ead1487f7c0e8bda495ae = $this->env->getExtension("native_profiler");
        $__internal_646773d2294e8bde6f073abaeb42bd8964acc4807c2ead1487f7c0e8bda495ae->enter($__internal_646773d2294e8bde6f073abaeb42bd8964acc4807c2ead1487f7c0e8bda495ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_646773d2294e8bde6f073abaeb42bd8964acc4807c2ead1487f7c0e8bda495ae->leave($__internal_646773d2294e8bde6f073abaeb42bd8964acc4807c2ead1487f7c0e8bda495ae_prof);

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
