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
        $__internal_b141af785242b7a026cd15b1b652327edc09018f2b7ca46b3a52569f2e91b418 = $this->env->getExtension("native_profiler");
        $__internal_b141af785242b7a026cd15b1b652327edc09018f2b7ca46b3a52569f2e91b418->enter($__internal_b141af785242b7a026cd15b1b652327edc09018f2b7ca46b3a52569f2e91b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b141af785242b7a026cd15b1b652327edc09018f2b7ca46b3a52569f2e91b418->leave($__internal_b141af785242b7a026cd15b1b652327edc09018f2b7ca46b3a52569f2e91b418_prof);

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
