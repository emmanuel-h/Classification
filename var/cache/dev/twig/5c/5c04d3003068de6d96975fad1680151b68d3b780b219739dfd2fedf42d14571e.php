<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2b805f7b108d76787a0231d3c31f49d78f0651fea48816049f08f707ae71c0c2 extends Twig_Template
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
        $__internal_9ab3e363dfa38ab6a95d9768ac84d4cd54183af9f68fc8b6b8c8db638aa0ab14 = $this->env->getExtension("native_profiler");
        $__internal_9ab3e363dfa38ab6a95d9768ac84d4cd54183af9f68fc8b6b8c8db638aa0ab14->enter($__internal_9ab3e363dfa38ab6a95d9768ac84d4cd54183af9f68fc8b6b8c8db638aa0ab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9ab3e363dfa38ab6a95d9768ac84d4cd54183af9f68fc8b6b8c8db638aa0ab14->leave($__internal_9ab3e363dfa38ab6a95d9768ac84d4cd54183af9f68fc8b6b8c8db638aa0ab14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
