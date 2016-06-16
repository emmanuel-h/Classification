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
        $__internal_8bcaff5cc4be6eb3bc991fc78599d4ca0df12b8a88e23aff2bf1135174ff06ba = $this->env->getExtension("native_profiler");
        $__internal_8bcaff5cc4be6eb3bc991fc78599d4ca0df12b8a88e23aff2bf1135174ff06ba->enter($__internal_8bcaff5cc4be6eb3bc991fc78599d4ca0df12b8a88e23aff2bf1135174ff06ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8bcaff5cc4be6eb3bc991fc78599d4ca0df12b8a88e23aff2bf1135174ff06ba->leave($__internal_8bcaff5cc4be6eb3bc991fc78599d4ca0df12b8a88e23aff2bf1135174ff06ba_prof);

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
