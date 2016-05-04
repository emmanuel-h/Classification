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
        $__internal_d21a3a69632b3073fbf5e525f410f7152e3fb13b2c9f230e2a07a7dc9634f56c = $this->env->getExtension("native_profiler");
        $__internal_d21a3a69632b3073fbf5e525f410f7152e3fb13b2c9f230e2a07a7dc9634f56c->enter($__internal_d21a3a69632b3073fbf5e525f410f7152e3fb13b2c9f230e2a07a7dc9634f56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d21a3a69632b3073fbf5e525f410f7152e3fb13b2c9f230e2a07a7dc9634f56c->leave($__internal_d21a3a69632b3073fbf5e525f410f7152e3fb13b2c9f230e2a07a7dc9634f56c_prof);

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
