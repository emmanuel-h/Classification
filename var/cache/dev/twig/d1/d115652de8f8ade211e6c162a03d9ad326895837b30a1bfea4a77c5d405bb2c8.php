<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_90a717331f861df98333f62278c4902d8fd9e0fbe9d908fff7822e036f01eab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51f3d938f97fdf9ef4c16e45a085046f0ebf9a18b15f40d0f7a7a3410606816c = $this->env->getExtension("native_profiler");
        $__internal_51f3d938f97fdf9ef4c16e45a085046f0ebf9a18b15f40d0f7a7a3410606816c->enter($__internal_51f3d938f97fdf9ef4c16e45a085046f0ebf9a18b15f40d0f7a7a3410606816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_51f3d938f97fdf9ef4c16e45a085046f0ebf9a18b15f40d0f7a7a3410606816c->leave($__internal_51f3d938f97fdf9ef4c16e45a085046f0ebf9a18b15f40d0f7a7a3410606816c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2521a038efe4d91fc963c7036ed34f98dd54a441201dc8dad6d418c6c55d2190 = $this->env->getExtension("native_profiler");
        $__internal_2521a038efe4d91fc963c7036ed34f98dd54a441201dc8dad6d418c6c55d2190->enter($__internal_2521a038efe4d91fc963c7036ed34f98dd54a441201dc8dad6d418c6c55d2190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_2521a038efe4d91fc963c7036ed34f98dd54a441201dc8dad6d418c6c55d2190->leave($__internal_2521a038efe4d91fc963c7036ed34f98dd54a441201dc8dad6d418c6c55d2190_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fcb9d3ca80fc99d5129260e1040486ba278b4e754929c0ad34f21533f884814d = $this->env->getExtension("native_profiler");
        $__internal_fcb9d3ca80fc99d5129260e1040486ba278b4e754929c0ad34f21533f884814d->enter($__internal_fcb9d3ca80fc99d5129260e1040486ba278b4e754929c0ad34f21533f884814d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fcb9d3ca80fc99d5129260e1040486ba278b4e754929c0ad34f21533f884814d->leave($__internal_fcb9d3ca80fc99d5129260e1040486ba278b4e754929c0ad34f21533f884814d_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d706efd6b403cacf73f2883fb29bf6c1d70a02bd29c9dcdff3189ab3c05277e1 = $this->env->getExtension("native_profiler");
        $__internal_d706efd6b403cacf73f2883fb29bf6c1d70a02bd29c9dcdff3189ab3c05277e1->enter($__internal_d706efd6b403cacf73f2883fb29bf6c1d70a02bd29c9dcdff3189ab3c05277e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_d706efd6b403cacf73f2883fb29bf6c1d70a02bd29c9dcdff3189ab3c05277e1->leave($__internal_d706efd6b403cacf73f2883fb29bf6c1d70a02bd29c9dcdff3189ab3c05277e1_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_57d2cc8c853caf69f628f4311042fbde3342015b76f3a411f21494fee318d495 = $this->env->getExtension("native_profiler");
        $__internal_57d2cc8c853caf69f628f4311042fbde3342015b76f3a411f21494fee318d495->enter($__internal_57d2cc8c853caf69f628f4311042fbde3342015b76f3a411f21494fee318d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_57d2cc8c853caf69f628f4311042fbde3342015b76f3a411f21494fee318d495->leave($__internal_57d2cc8c853caf69f628f4311042fbde3342015b76f3a411f21494fee318d495_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b2c43468d1f88ae14916d8e0f816d704db9e80245b6b854a40f269e814b079f5 = $this->env->getExtension("native_profiler");
        $__internal_b2c43468d1f88ae14916d8e0f816d704db9e80245b6b854a40f269e814b079f5->enter($__internal_b2c43468d1f88ae14916d8e0f816d704db9e80245b6b854a40f269e814b079f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b2c43468d1f88ae14916d8e0f816d704db9e80245b6b854a40f269e814b079f5->leave($__internal_b2c43468d1f88ae14916d8e0f816d704db9e80245b6b854a40f269e814b079f5_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7ef2c4b9fa78ff8d65282d8b8d6939265cc8d9754df3b7aa719e8b3ad0a71ee7 = $this->env->getExtension("native_profiler");
        $__internal_7ef2c4b9fa78ff8d65282d8b8d6939265cc8d9754df3b7aa719e8b3ad0a71ee7->enter($__internal_7ef2c4b9fa78ff8d65282d8b8d6939265cc8d9754df3b7aa719e8b3ad0a71ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_7ef2c4b9fa78ff8d65282d8b8d6939265cc8d9754df3b7aa719e8b3ad0a71ee7->leave($__internal_7ef2c4b9fa78ff8d65282d8b8d6939265cc8d9754df3b7aa719e8b3ad0a71ee7_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_dbad7bbefd2040d419630d3356b6595af4c4a4eec8a8e76eb2555fac2565655f = $this->env->getExtension("native_profiler");
        $__internal_dbad7bbefd2040d419630d3356b6595af4c4a4eec8a8e76eb2555fac2565655f->enter($__internal_dbad7bbefd2040d419630d3356b6595af4c4a4eec8a8e76eb2555fac2565655f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dbad7bbefd2040d419630d3356b6595af4c4a4eec8a8e76eb2555fac2565655f->leave($__internal_dbad7bbefd2040d419630d3356b6595af4c4a4eec8a8e76eb2555fac2565655f_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_03dbb230f3100607ce6290c50b114504a378b359de2c6a42b7755ffafd4487d8 = $this->env->getExtension("native_profiler");
        $__internal_03dbb230f3100607ce6290c50b114504a378b359de2c6a42b7755ffafd4487d8->enter($__internal_03dbb230f3100607ce6290c50b114504a378b359de2c6a42b7755ffafd4487d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03dbb230f3100607ce6290c50b114504a378b359de2c6a42b7755ffafd4487d8->leave($__internal_03dbb230f3100607ce6290c50b114504a378b359de2c6a42b7755ffafd4487d8_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_c65d6f51617c51a7cfa21e860c46b6b2b0c931f68ef3f3f1fff3114525bf9c51 = $this->env->getExtension("native_profiler");
        $__internal_c65d6f51617c51a7cfa21e860c46b6b2b0c931f68ef3f3f1fff3114525bf9c51->enter($__internal_c65d6f51617c51a7cfa21e860c46b6b2b0c931f68ef3f3f1fff3114525bf9c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c65d6f51617c51a7cfa21e860c46b6b2b0c931f68ef3f3f1fff3114525bf9c51->leave($__internal_c65d6f51617c51a7cfa21e860c46b6b2b0c931f68ef3f3f1fff3114525bf9c51_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a43c059b539398249a3c33dc0a7da3ba941a47de71516d853994d30d54d8b5d2 = $this->env->getExtension("native_profiler");
        $__internal_a43c059b539398249a3c33dc0a7da3ba941a47de71516d853994d30d54d8b5d2->enter($__internal_a43c059b539398249a3c33dc0a7da3ba941a47de71516d853994d30d54d8b5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_a43c059b539398249a3c33dc0a7da3ba941a47de71516d853994d30d54d8b5d2->leave($__internal_a43c059b539398249a3c33dc0a7da3ba941a47de71516d853994d30d54d8b5d2_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 80,  321 => 79,  309 => 73,  305 => 72,  301 => 71,  298 => 70,  296 => 69,  290 => 68,  278 => 62,  274 => 61,  270 => 60,  267 => 59,  265 => 58,  259 => 57,  247 => 51,  243 => 50,  239 => 49,  235 => 48,  228 => 47,  226 => 46,  220 => 45,  213 => 42,  207 => 41,  200 => 38,  194 => 37,  187 => 34,  184 => 33,  182 => 32,  180 => 31,  176 => 30,  174 => 29,  168 => 28,  162 => 27,  155 => 22,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 79,  95 => 78,  93 => 68,  90 => 67,  88 => 57,  85 => 56,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  73 => 37,  70 => 36,  68 => 27,  65 => 26,  62 => 24,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }
}
/* {% use "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/* {##}</div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
