<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_60b96128186b41b86560193af879b8130fae47605d6615faef2c30ae542dd02c extends Twig_Template
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
        $__internal_80ac69f5c74ff546b5a85cc835809ce7dd65065d67c7ee6239b1863197f2639d = $this->env->getExtension("native_profiler");
        $__internal_80ac69f5c74ff546b5a85cc835809ce7dd65065d67c7ee6239b1863197f2639d->enter($__internal_80ac69f5c74ff546b5a85cc835809ce7dd65065d67c7ee6239b1863197f2639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_80ac69f5c74ff546b5a85cc835809ce7dd65065d67c7ee6239b1863197f2639d->leave($__internal_80ac69f5c74ff546b5a85cc835809ce7dd65065d67c7ee6239b1863197f2639d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
