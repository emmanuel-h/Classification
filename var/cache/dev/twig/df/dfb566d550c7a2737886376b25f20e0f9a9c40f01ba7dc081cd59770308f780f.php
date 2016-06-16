<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_40e5d7438b0ae04051cb9597ed426ff6523a70945b0afb5fa534846f5d8f1873 extends Twig_Template
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
        $__internal_eafe304a2443354032b17e36666bc45fe6f2c35a540eddb9214ba98e077c6491 = $this->env->getExtension("native_profiler");
        $__internal_eafe304a2443354032b17e36666bc45fe6f2c35a540eddb9214ba98e077c6491->enter($__internal_eafe304a2443354032b17e36666bc45fe6f2c35a540eddb9214ba98e077c6491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_eafe304a2443354032b17e36666bc45fe6f2c35a540eddb9214ba98e077c6491->leave($__internal_eafe304a2443354032b17e36666bc45fe6f2c35a540eddb9214ba98e077c6491_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
