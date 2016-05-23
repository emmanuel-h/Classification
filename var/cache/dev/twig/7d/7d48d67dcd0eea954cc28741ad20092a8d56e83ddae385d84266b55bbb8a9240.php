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
        $__internal_e46c387557c1ca29293fd4752bf1ff696a18ea0ac96dad5d1cc95293db2eae8e = $this->env->getExtension("native_profiler");
        $__internal_e46c387557c1ca29293fd4752bf1ff696a18ea0ac96dad5d1cc95293db2eae8e->enter($__internal_e46c387557c1ca29293fd4752bf1ff696a18ea0ac96dad5d1cc95293db2eae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e46c387557c1ca29293fd4752bf1ff696a18ea0ac96dad5d1cc95293db2eae8e->leave($__internal_e46c387557c1ca29293fd4752bf1ff696a18ea0ac96dad5d1cc95293db2eae8e_prof);

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
