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
        $__internal_1f3b14459465b1c6c4be4431f83a8b373ef5a98738796f0ef32f3ab72b97bdf3 = $this->env->getExtension("native_profiler");
        $__internal_1f3b14459465b1c6c4be4431f83a8b373ef5a98738796f0ef32f3ab72b97bdf3->enter($__internal_1f3b14459465b1c6c4be4431f83a8b373ef5a98738796f0ef32f3ab72b97bdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1f3b14459465b1c6c4be4431f83a8b373ef5a98738796f0ef32f3ab72b97bdf3->leave($__internal_1f3b14459465b1c6c4be4431f83a8b373ef5a98738796f0ef32f3ab72b97bdf3_prof);

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
