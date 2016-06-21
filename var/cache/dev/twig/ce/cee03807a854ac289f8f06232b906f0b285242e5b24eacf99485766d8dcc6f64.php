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
        $__internal_fea5dba1dcdc2e4bfefdc5e8d1599f0adcc02e57bba851b5b97ad698f6023980 = $this->env->getExtension("native_profiler");
        $__internal_fea5dba1dcdc2e4bfefdc5e8d1599f0adcc02e57bba851b5b97ad698f6023980->enter($__internal_fea5dba1dcdc2e4bfefdc5e8d1599f0adcc02e57bba851b5b97ad698f6023980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fea5dba1dcdc2e4bfefdc5e8d1599f0adcc02e57bba851b5b97ad698f6023980->leave($__internal_fea5dba1dcdc2e4bfefdc5e8d1599f0adcc02e57bba851b5b97ad698f6023980_prof);

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
