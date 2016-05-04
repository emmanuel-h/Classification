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
        $__internal_a1384739603f6f68a39980f0c1ca3a6aba2b68ef0a4d912618529a8f0ba0419c = $this->env->getExtension("native_profiler");
        $__internal_a1384739603f6f68a39980f0c1ca3a6aba2b68ef0a4d912618529a8f0ba0419c->enter($__internal_a1384739603f6f68a39980f0c1ca3a6aba2b68ef0a4d912618529a8f0ba0419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a1384739603f6f68a39980f0c1ca3a6aba2b68ef0a4d912618529a8f0ba0419c->leave($__internal_a1384739603f6f68a39980f0c1ca3a6aba2b68ef0a4d912618529a8f0ba0419c_prof);

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
