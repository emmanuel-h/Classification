<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_234d61d3e1e7a6dbe0d691a579ef9fae9d587c213b5b8453c5c969e8b3b3997e extends Twig_Template
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
        $__internal_f8cdc442fbb7d403f7eb3b11ae871b64583a6a2569dab8e1302877915643b35b = $this->env->getExtension("native_profiler");
        $__internal_f8cdc442fbb7d403f7eb3b11ae871b64583a6a2569dab8e1302877915643b35b->enter($__internal_f8cdc442fbb7d403f7eb3b11ae871b64583a6a2569dab8e1302877915643b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f8cdc442fbb7d403f7eb3b11ae871b64583a6a2569dab8e1302877915643b35b->leave($__internal_f8cdc442fbb7d403f7eb3b11ae871b64583a6a2569dab8e1302877915643b35b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
