<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ce59f62d951dce66ca5e94e50cff53fd311118f0886bb27add64e98b2611846 extends Twig_Template
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
        $__internal_e2bd3304f2c1d35009677f00c94ccb3c89759fbcafa2648087a67ffb4dc69cd8 = $this->env->getExtension("native_profiler");
        $__internal_e2bd3304f2c1d35009677f00c94ccb3c89759fbcafa2648087a67ffb4dc69cd8->enter($__internal_e2bd3304f2c1d35009677f00c94ccb3c89759fbcafa2648087a67ffb4dc69cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e2bd3304f2c1d35009677f00c94ccb3c89759fbcafa2648087a67ffb4dc69cd8->leave($__internal_e2bd3304f2c1d35009677f00c94ccb3c89759fbcafa2648087a67ffb4dc69cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
