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
        $__internal_a5aba7ff877b9996e6345f510d4a46caa79f263c75cb09d50e82d0083a41f379 = $this->env->getExtension("native_profiler");
        $__internal_a5aba7ff877b9996e6345f510d4a46caa79f263c75cb09d50e82d0083a41f379->enter($__internal_a5aba7ff877b9996e6345f510d4a46caa79f263c75cb09d50e82d0083a41f379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a5aba7ff877b9996e6345f510d4a46caa79f263c75cb09d50e82d0083a41f379->leave($__internal_a5aba7ff877b9996e6345f510d4a46caa79f263c75cb09d50e82d0083a41f379_prof);

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
