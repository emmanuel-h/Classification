<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e869cb5bb79a13d7f742ee7e7c63a85d465eb51b815a125e0fcbe53e3933d959 extends Twig_Template
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
        $__internal_1c17f1369d46e1f336cab96917d64e46fe75f51b5d21cac0611a733d7a81caba = $this->env->getExtension("native_profiler");
        $__internal_1c17f1369d46e1f336cab96917d64e46fe75f51b5d21cac0611a733d7a81caba->enter($__internal_1c17f1369d46e1f336cab96917d64e46fe75f51b5d21cac0611a733d7a81caba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1c17f1369d46e1f336cab96917d64e46fe75f51b5d21cac0611a733d7a81caba->leave($__internal_1c17f1369d46e1f336cab96917d64e46fe75f51b5d21cac0611a733d7a81caba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
