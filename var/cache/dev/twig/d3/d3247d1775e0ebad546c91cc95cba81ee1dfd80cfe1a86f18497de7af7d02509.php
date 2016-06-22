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
        $__internal_7882afebef0d0cab0c2d99ebdfd7101269eb02ab9b72b72bd634210b92d0163a = $this->env->getExtension("native_profiler");
        $__internal_7882afebef0d0cab0c2d99ebdfd7101269eb02ab9b72b72bd634210b92d0163a->enter($__internal_7882afebef0d0cab0c2d99ebdfd7101269eb02ab9b72b72bd634210b92d0163a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7882afebef0d0cab0c2d99ebdfd7101269eb02ab9b72b72bd634210b92d0163a->leave($__internal_7882afebef0d0cab0c2d99ebdfd7101269eb02ab9b72b72bd634210b92d0163a_prof);

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
