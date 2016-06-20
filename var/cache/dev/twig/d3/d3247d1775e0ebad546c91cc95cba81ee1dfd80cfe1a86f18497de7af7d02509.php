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
        $__internal_b75f4c349540030bed2fad213f87001c5aa90f26af254d470df92f0c01632a92 = $this->env->getExtension("native_profiler");
        $__internal_b75f4c349540030bed2fad213f87001c5aa90f26af254d470df92f0c01632a92->enter($__internal_b75f4c349540030bed2fad213f87001c5aa90f26af254d470df92f0c01632a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b75f4c349540030bed2fad213f87001c5aa90f26af254d470df92f0c01632a92->leave($__internal_b75f4c349540030bed2fad213f87001c5aa90f26af254d470df92f0c01632a92_prof);

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
