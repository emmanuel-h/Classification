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
        $__internal_14d29dab3da0df5dfdf08941d3f5db666dc4e965249ef34136ef3f2f6c9adf69 = $this->env->getExtension("native_profiler");
        $__internal_14d29dab3da0df5dfdf08941d3f5db666dc4e965249ef34136ef3f2f6c9adf69->enter($__internal_14d29dab3da0df5dfdf08941d3f5db666dc4e965249ef34136ef3f2f6c9adf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_14d29dab3da0df5dfdf08941d3f5db666dc4e965249ef34136ef3f2f6c9adf69->leave($__internal_14d29dab3da0df5dfdf08941d3f5db666dc4e965249ef34136ef3f2f6c9adf69_prof);

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
