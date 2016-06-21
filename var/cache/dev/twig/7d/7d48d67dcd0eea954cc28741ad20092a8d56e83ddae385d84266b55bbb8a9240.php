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
        $__internal_7d0fef1174f90b9488b3f9ab9d59403cbfc72e2ed909f43b4f299893c9eebada = $this->env->getExtension("native_profiler");
        $__internal_7d0fef1174f90b9488b3f9ab9d59403cbfc72e2ed909f43b4f299893c9eebada->enter($__internal_7d0fef1174f90b9488b3f9ab9d59403cbfc72e2ed909f43b4f299893c9eebada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7d0fef1174f90b9488b3f9ab9d59403cbfc72e2ed909f43b4f299893c9eebada->leave($__internal_7d0fef1174f90b9488b3f9ab9d59403cbfc72e2ed909f43b4f299893c9eebada_prof);

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
