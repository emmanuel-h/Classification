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
        $__internal_50f42bab663c99ea108a20d242bfcf29482aebc40a23e63d0e8518cd2332e9d3 = $this->env->getExtension("native_profiler");
        $__internal_50f42bab663c99ea108a20d242bfcf29482aebc40a23e63d0e8518cd2332e9d3->enter($__internal_50f42bab663c99ea108a20d242bfcf29482aebc40a23e63d0e8518cd2332e9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_50f42bab663c99ea108a20d242bfcf29482aebc40a23e63d0e8518cd2332e9d3->leave($__internal_50f42bab663c99ea108a20d242bfcf29482aebc40a23e63d0e8518cd2332e9d3_prof);

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
