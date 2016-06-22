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
        $__internal_51cd7f7867efafee5438287bd07d15c771dcbc0944cdc6dd3abc02b31ea6ea72 = $this->env->getExtension("native_profiler");
        $__internal_51cd7f7867efafee5438287bd07d15c771dcbc0944cdc6dd3abc02b31ea6ea72->enter($__internal_51cd7f7867efafee5438287bd07d15c771dcbc0944cdc6dd3abc02b31ea6ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_51cd7f7867efafee5438287bd07d15c771dcbc0944cdc6dd3abc02b31ea6ea72->leave($__internal_51cd7f7867efafee5438287bd07d15c771dcbc0944cdc6dd3abc02b31ea6ea72_prof);

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
