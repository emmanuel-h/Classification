<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2a446e5ac6af4f7a88c19e194a270fcde08946a8b53844bf6034b1b01a0cfcfe extends Twig_Template
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
        $__internal_ab8246d7eaddbf9fc7fc14a191f8105e46ccc8e3e5ea2d516c90f3c2ad0ecf61 = $this->env->getExtension("native_profiler");
        $__internal_ab8246d7eaddbf9fc7fc14a191f8105e46ccc8e3e5ea2d516c90f3c2ad0ecf61->enter($__internal_ab8246d7eaddbf9fc7fc14a191f8105e46ccc8e3e5ea2d516c90f3c2ad0ecf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ab8246d7eaddbf9fc7fc14a191f8105e46ccc8e3e5ea2d516c90f3c2ad0ecf61->leave($__internal_ab8246d7eaddbf9fc7fc14a191f8105e46ccc8e3e5ea2d516c90f3c2ad0ecf61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
