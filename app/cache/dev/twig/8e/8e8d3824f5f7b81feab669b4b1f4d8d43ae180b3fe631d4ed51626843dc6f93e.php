<?php

/* form_div_layout.html.twig */
class __TwigTemplate_8517fb31d355bd41691cac2f020c7ef7bad9d0fc859b0f1ca4796f3954656289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08d40fc680c120f9f855171428ed158b97b1e4158cb3bfafc3c56b71aafb625f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d40fc680c120f9f855171428ed158b97b1e4158cb3bfafc3c56b71aafb625f->enter($__internal_08d40fc680c120f9f855171428ed158b97b1e4158cb3bfafc3c56b71aafb625f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('range_widget', $context, $blocks);
        // line 183
        $this->displayBlock('button_widget', $context, $blocks);
        // line 197
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 202
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 231
        $this->displayBlock('button_label', $context, $blocks);
        // line 235
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 243
        $this->displayBlock('form_row', $context, $blocks);
        // line 251
        $this->displayBlock('button_row', $context, $blocks);
        // line 257
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 263
        $this->displayBlock('form', $context, $blocks);
        // line 269
        $this->displayBlock('form_start', $context, $blocks);
        // line 282
        $this->displayBlock('form_end', $context, $blocks);
        // line 289
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 293
        $this->displayBlock('form_errors', $context, $blocks);
        // line 303
        $this->displayBlock('form_rest', $context, $blocks);
        // line 310
        echo "
";
        // line 313
        $this->displayBlock('form_rows', $context, $blocks);
        // line 319
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 336
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 350
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_08d40fc680c120f9f855171428ed158b97b1e4158cb3bfafc3c56b71aafb625f->leave($__internal_08d40fc680c120f9f855171428ed158b97b1e4158cb3bfafc3c56b71aafb625f_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_727fc8fad5de4cfdf2725eeed4ff0a561513a72f111aaddadbd96692b5460773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727fc8fad5de4cfdf2725eeed4ff0a561513a72f111aaddadbd96692b5460773->enter($__internal_727fc8fad5de4cfdf2725eeed4ff0a561513a72f111aaddadbd96692b5460773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_727fc8fad5de4cfdf2725eeed4ff0a561513a72f111aaddadbd96692b5460773->leave($__internal_727fc8fad5de4cfdf2725eeed4ff0a561513a72f111aaddadbd96692b5460773_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_903635b1b8e299813dabfc5c10c42f645de1d35420cb15a6243d5bebc2b4d3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903635b1b8e299813dabfc5c10c42f645de1d35420cb15a6243d5bebc2b4d3da->enter($__internal_903635b1b8e299813dabfc5c10c42f645de1d35420cb15a6243d5bebc2b4d3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_903635b1b8e299813dabfc5c10c42f645de1d35420cb15a6243d5bebc2b4d3da->leave($__internal_903635b1b8e299813dabfc5c10c42f645de1d35420cb15a6243d5bebc2b4d3da_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_dc894dbde4455eca5efe5d5b2991b78656959c8ec43ab5dc138e48fb1452626c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc894dbde4455eca5efe5d5b2991b78656959c8ec43ab5dc138e48fb1452626c->enter($__internal_dc894dbde4455eca5efe5d5b2991b78656959c8ec43ab5dc138e48fb1452626c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_dc894dbde4455eca5efe5d5b2991b78656959c8ec43ab5dc138e48fb1452626c->leave($__internal_dc894dbde4455eca5efe5d5b2991b78656959c8ec43ab5dc138e48fb1452626c_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c008a4406bbdd543842db36c7904bb26044c5c0d91d8e85274584f475a5f805d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c008a4406bbdd543842db36c7904bb26044c5c0d91d8e85274584f475a5f805d->enter($__internal_c008a4406bbdd543842db36c7904bb26044c5c0d91d8e85274584f475a5f805d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_c008a4406bbdd543842db36c7904bb26044c5c0d91d8e85274584f475a5f805d->leave($__internal_c008a4406bbdd543842db36c7904bb26044c5c0d91d8e85274584f475a5f805d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_23677261dec64e25326a35da3b75c18bd7b495e41fa7feb2f91d3085551d0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23677261dec64e25326a35da3b75c18bd7b495e41fa7feb2f91d3085551d0782->enter($__internal_23677261dec64e25326a35da3b75c18bd7b495e41fa7feb2f91d3085551d0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_23677261dec64e25326a35da3b75c18bd7b495e41fa7feb2f91d3085551d0782->leave($__internal_23677261dec64e25326a35da3b75c18bd7b495e41fa7feb2f91d3085551d0782_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_ed5e4d840f4149d1dacae2059323c60a01d513ed9a837d83f483b5fd5900116c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5e4d840f4149d1dacae2059323c60a01d513ed9a837d83f483b5fd5900116c->enter($__internal_ed5e4d840f4149d1dacae2059323c60a01d513ed9a837d83f483b5fd5900116c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_ed5e4d840f4149d1dacae2059323c60a01d513ed9a837d83f483b5fd5900116c->leave($__internal_ed5e4d840f4149d1dacae2059323c60a01d513ed9a837d83f483b5fd5900116c_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_22e669597a2256f5cbac0bfa2c5f6514bfd52fb4e74fa9a9a3f363ab9ccdc9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e669597a2256f5cbac0bfa2c5f6514bfd52fb4e74fa9a9a3f363ab9ccdc9d9->enter($__internal_22e669597a2256f5cbac0bfa2c5f6514bfd52fb4e74fa9a9a3f363ab9ccdc9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_22e669597a2256f5cbac0bfa2c5f6514bfd52fb4e74fa9a9a3f363ab9ccdc9d9->leave($__internal_22e669597a2256f5cbac0bfa2c5f6514bfd52fb4e74fa9a9a3f363ab9ccdc9d9_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4a379edd52f06862c633710424c22145d27bfcbfb217ea1c41eafe573f309b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a379edd52f06862c633710424c22145d27bfcbfb217ea1c41eafe573f309b82->enter($__internal_4a379edd52f06862c633710424c22145d27bfcbfb217ea1c41eafe573f309b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_4a379edd52f06862c633710424c22145d27bfcbfb217ea1c41eafe573f309b82->leave($__internal_4a379edd52f06862c633710424c22145d27bfcbfb217ea1c41eafe573f309b82_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_75da0a90b68e218a763028ef6f3e01f6dd195fd95756ce6e3b9244c6562449b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75da0a90b68e218a763028ef6f3e01f6dd195fd95756ce6e3b9244c6562449b7->enter($__internal_75da0a90b68e218a763028ef6f3e01f6dd195fd95756ce6e3b9244c6562449b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_75da0a90b68e218a763028ef6f3e01f6dd195fd95756ce6e3b9244c6562449b7->leave($__internal_75da0a90b68e218a763028ef6f3e01f6dd195fd95756ce6e3b9244c6562449b7_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_42c67705c4607142052cf56253ed6f5ed855cded970c829bb1f173e55dc3a3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c67705c4607142052cf56253ed6f5ed855cded970c829bb1f173e55dc3a3f1->enter($__internal_42c67705c4607142052cf56253ed6f5ed855cded970c829bb1f173e55dc3a3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_42c67705c4607142052cf56253ed6f5ed855cded970c829bb1f173e55dc3a3f1->leave($__internal_42c67705c4607142052cf56253ed6f5ed855cded970c829bb1f173e55dc3a3f1_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ee2a5e7941448398ac4ed0c78f67a01fda52417ce7d3b92577d2b84841ac8b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2a5e7941448398ac4ed0c78f67a01fda52417ce7d3b92577d2b84841ac8b01->enter($__internal_ee2a5e7941448398ac4ed0c78f67a01fda52417ce7d3b92577d2b84841ac8b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ee2a5e7941448398ac4ed0c78f67a01fda52417ce7d3b92577d2b84841ac8b01->leave($__internal_ee2a5e7941448398ac4ed0c78f67a01fda52417ce7d3b92577d2b84841ac8b01_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6df266c43ebe908b24261b7fe5e98711c70a5c5761d15757237b4f4624860b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df266c43ebe908b24261b7fe5e98711c70a5c5761d15757237b4f4624860b65->enter($__internal_6df266c43ebe908b24261b7fe5e98711c70a5c5761d15757237b4f4624860b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_6df266c43ebe908b24261b7fe5e98711c70a5c5761d15757237b4f4624860b65->leave($__internal_6df266c43ebe908b24261b7fe5e98711c70a5c5761d15757237b4f4624860b65_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4fcf7e5b705290e9b4ff26f2fd7210a7776c22111d1b8fe9de4e4d108c4531ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcf7e5b705290e9b4ff26f2fd7210a7776c22111d1b8fe9de4e4d108c4531ea->enter($__internal_4fcf7e5b705290e9b4ff26f2fd7210a7776c22111d1b8fe9de4e4d108c4531ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_4fcf7e5b705290e9b4ff26f2fd7210a7776c22111d1b8fe9de4e4d108c4531ea->leave($__internal_4fcf7e5b705290e9b4ff26f2fd7210a7776c22111d1b8fe9de4e4d108c4531ea_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_fe12397e533bf34747b39e0c158463905a5f8d38ff67da3846b74d19ffcea4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe12397e533bf34747b39e0c158463905a5f8d38ff67da3846b74d19ffcea4eb->enter($__internal_fe12397e533bf34747b39e0c158463905a5f8d38ff67da3846b74d19ffcea4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_fe12397e533bf34747b39e0c158463905a5f8d38ff67da3846b74d19ffcea4eb->leave($__internal_fe12397e533bf34747b39e0c158463905a5f8d38ff67da3846b74d19ffcea4eb_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_8250e1432f01c21adb7952caf9bc094c0d99860c1fd1a7a1d76ab72879ba3be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8250e1432f01c21adb7952caf9bc094c0d99860c1fd1a7a1d76ab72879ba3be7->enter($__internal_8250e1432f01c21adb7952caf9bc094c0d99860c1fd1a7a1d76ab72879ba3be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8250e1432f01c21adb7952caf9bc094c0d99860c1fd1a7a1d76ab72879ba3be7->leave($__internal_8250e1432f01c21adb7952caf9bc094c0d99860c1fd1a7a1d76ab72879ba3be7_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_7bfbf0f1e2a05d13eb1e1dadfd29c45dd019e49d9cc7ca8648649d2fa89add2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfbf0f1e2a05d13eb1e1dadfd29c45dd019e49d9cc7ca8648649d2fa89add2d->enter($__internal_7bfbf0f1e2a05d13eb1e1dadfd29c45dd019e49d9cc7ca8648649d2fa89add2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7bfbf0f1e2a05d13eb1e1dadfd29c45dd019e49d9cc7ca8648649d2fa89add2d->leave($__internal_7bfbf0f1e2a05d13eb1e1dadfd29c45dd019e49d9cc7ca8648649d2fa89add2d_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6da9d0059f65edc54d5d7a911225c987da5ddda726830cab84a95bf9e12e2245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da9d0059f65edc54d5d7a911225c987da5ddda726830cab84a95bf9e12e2245->enter($__internal_6da9d0059f65edc54d5d7a911225c987da5ddda726830cab84a95bf9e12e2245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_6da9d0059f65edc54d5d7a911225c987da5ddda726830cab84a95bf9e12e2245->leave($__internal_6da9d0059f65edc54d5d7a911225c987da5ddda726830cab84a95bf9e12e2245_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_b14dd26219a6f891046609a6bae0cebcc816474314dd3fd0774cf8fb7417856a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14dd26219a6f891046609a6bae0cebcc816474314dd3fd0774cf8fb7417856a->enter($__internal_b14dd26219a6f891046609a6bae0cebcc816474314dd3fd0774cf8fb7417856a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b14dd26219a6f891046609a6bae0cebcc816474314dd3fd0774cf8fb7417856a->leave($__internal_b14dd26219a6f891046609a6bae0cebcc816474314dd3fd0774cf8fb7417856a_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_74afa53063eeed19aea862c0c4143933dc04d9e9e4f47f4e28bb4668bdc14f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74afa53063eeed19aea862c0c4143933dc04d9e9e4f47f4e28bb4668bdc14f57->enter($__internal_74afa53063eeed19aea862c0c4143933dc04d9e9e4f47f4e28bb4668bdc14f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_74afa53063eeed19aea862c0c4143933dc04d9e9e4f47f4e28bb4668bdc14f57->leave($__internal_74afa53063eeed19aea862c0c4143933dc04d9e9e4f47f4e28bb4668bdc14f57_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_196b3a0f25d7d2b6f04f7d3c45f523a34aacf58ac24f3b7c8ac19a8e1e0f6fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196b3a0f25d7d2b6f04f7d3c45f523a34aacf58ac24f3b7c8ac19a8e1e0f6fa1->enter($__internal_196b3a0f25d7d2b6f04f7d3c45f523a34aacf58ac24f3b7c8ac19a8e1e0f6fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_196b3a0f25d7d2b6f04f7d3c45f523a34aacf58ac24f3b7c8ac19a8e1e0f6fa1->leave($__internal_196b3a0f25d7d2b6f04f7d3c45f523a34aacf58ac24f3b7c8ac19a8e1e0f6fa1_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_295bae7e0d0decfa40a9869d4f0d68f0db49d325c87f2a121eb1b7f278f13223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295bae7e0d0decfa40a9869d4f0d68f0db49d325c87f2a121eb1b7f278f13223->enter($__internal_295bae7e0d0decfa40a9869d4f0d68f0db49d325c87f2a121eb1b7f278f13223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_295bae7e0d0decfa40a9869d4f0d68f0db49d325c87f2a121eb1b7f278f13223->leave($__internal_295bae7e0d0decfa40a9869d4f0d68f0db49d325c87f2a121eb1b7f278f13223_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_18b8ec325f7544621fbecc3be15747ff91562ebf4afaa971e4cd358e66872bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b8ec325f7544621fbecc3be15747ff91562ebf4afaa971e4cd358e66872bc3->enter($__internal_18b8ec325f7544621fbecc3be15747ff91562ebf4afaa971e4cd358e66872bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_18b8ec325f7544621fbecc3be15747ff91562ebf4afaa971e4cd358e66872bc3->leave($__internal_18b8ec325f7544621fbecc3be15747ff91562ebf4afaa971e4cd358e66872bc3_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_0c9a14d4803e39698f6d033375704bf6bac562e69e8f518909362085484f0146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9a14d4803e39698f6d033375704bf6bac562e69e8f518909362085484f0146->enter($__internal_0c9a14d4803e39698f6d033375704bf6bac562e69e8f518909362085484f0146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0c9a14d4803e39698f6d033375704bf6bac562e69e8f518909362085484f0146->leave($__internal_0c9a14d4803e39698f6d033375704bf6bac562e69e8f518909362085484f0146_prof);

    }

    // line 178
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_d04b66699ebb425f321ba7b16fc3fdbb76d6c81031b842f88d6228b5568cf9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04b66699ebb425f321ba7b16fc3fdbb76d6c81031b842f88d6228b5568cf9fc->enter($__internal_d04b66699ebb425f321ba7b16fc3fdbb76d6c81031b842f88d6228b5568cf9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d04b66699ebb425f321ba7b16fc3fdbb76d6c81031b842f88d6228b5568cf9fc->leave($__internal_d04b66699ebb425f321ba7b16fc3fdbb76d6c81031b842f88d6228b5568cf9fc_prof);

    }

    // line 183
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1fd7eb6aa54a7dd71ba5bf668ab5137801e165f7a51561f4fc765e65c7f72ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd7eb6aa54a7dd71ba5bf668ab5137801e165f7a51561f4fc765e65c7f72ff4->enter($__internal_1fd7eb6aa54a7dd71ba5bf668ab5137801e165f7a51561f4fc765e65c7f72ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 184
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 185
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 186
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 187
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 188
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 191
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 194
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_1fd7eb6aa54a7dd71ba5bf668ab5137801e165f7a51561f4fc765e65c7f72ff4->leave($__internal_1fd7eb6aa54a7dd71ba5bf668ab5137801e165f7a51561f4fc765e65c7f72ff4_prof);

    }

    // line 197
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_1c07aba7fc742c3d5e849aa0cbc9bbe8ad44e9ec75a18f71756aff4f523ad96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c07aba7fc742c3d5e849aa0cbc9bbe8ad44e9ec75a18f71756aff4f523ad96f->enter($__internal_1c07aba7fc742c3d5e849aa0cbc9bbe8ad44e9ec75a18f71756aff4f523ad96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_1c07aba7fc742c3d5e849aa0cbc9bbe8ad44e9ec75a18f71756aff4f523ad96f->leave($__internal_1c07aba7fc742c3d5e849aa0cbc9bbe8ad44e9ec75a18f71756aff4f523ad96f_prof);

    }

    // line 202
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_053723fc825c3b360d292e3ab627ca5dc976a4cc8d31f2a4f386fff8721ee090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053723fc825c3b360d292e3ab627ca5dc976a4cc8d31f2a4f386fff8721ee090->enter($__internal_053723fc825c3b360d292e3ab627ca5dc976a4cc8d31f2a4f386fff8721ee090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 204
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_053723fc825c3b360d292e3ab627ca5dc976a4cc8d31f2a4f386fff8721ee090->leave($__internal_053723fc825c3b360d292e3ab627ca5dc976a4cc8d31f2a4f386fff8721ee090_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_512f781dc48b83476376f7a9a37ab08c5ea102349f0e8800f47d470d0f1b0f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512f781dc48b83476376f7a9a37ab08c5ea102349f0e8800f47d470d0f1b0f07->enter($__internal_512f781dc48b83476376f7a9a37ab08c5ea102349f0e8800f47d470d0f1b0f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 211
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 212
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 214
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 215
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 217
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 218
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 219
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 220
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 221
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 224
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 227
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_512f781dc48b83476376f7a9a37ab08c5ea102349f0e8800f47d470d0f1b0f07->leave($__internal_512f781dc48b83476376f7a9a37ab08c5ea102349f0e8800f47d470d0f1b0f07_prof);

    }

    // line 231
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_50cea73265509edc68c81bea1168124eb7a49f9fe9bd0568fb8b3e1f16cb9c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cea73265509edc68c81bea1168124eb7a49f9fe9bd0568fb8b3e1f16cb9c30->enter($__internal_50cea73265509edc68c81bea1168124eb7a49f9fe9bd0568fb8b3e1f16cb9c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_50cea73265509edc68c81bea1168124eb7a49f9fe9bd0568fb8b3e1f16cb9c30->leave($__internal_50cea73265509edc68c81bea1168124eb7a49f9fe9bd0568fb8b3e1f16cb9c30_prof);

    }

    // line 235
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_b911975fdcfdafb0061dbb4cfdf9c07fe586db43fe50202da15b70748ca62f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b911975fdcfdafb0061dbb4cfdf9c07fe586db43fe50202da15b70748ca62f7c->enter($__internal_b911975fdcfdafb0061dbb4cfdf9c07fe586db43fe50202da15b70748ca62f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 240
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_b911975fdcfdafb0061dbb4cfdf9c07fe586db43fe50202da15b70748ca62f7c->leave($__internal_b911975fdcfdafb0061dbb4cfdf9c07fe586db43fe50202da15b70748ca62f7c_prof);

    }

    // line 243
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1de814fbe6cdb1118366ab59a5c8ab11cbcecded8041d93cb4db03557eb3e95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de814fbe6cdb1118366ab59a5c8ab11cbcecded8041d93cb4db03557eb3e95e->enter($__internal_1de814fbe6cdb1118366ab59a5c8ab11cbcecded8041d93cb4db03557eb3e95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 244
        echo "<div>";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo "</div>";
        
        $__internal_1de814fbe6cdb1118366ab59a5c8ab11cbcecded8041d93cb4db03557eb3e95e->leave($__internal_1de814fbe6cdb1118366ab59a5c8ab11cbcecded8041d93cb4db03557eb3e95e_prof);

    }

    // line 251
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d2361212fece8f16315063212545956288c0d9c0e5a466c0805b33c8e8505abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2361212fece8f16315063212545956288c0d9c0e5a466c0805b33c8e8505abe->enter($__internal_d2361212fece8f16315063212545956288c0d9c0e5a466c0805b33c8e8505abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 252
        echo "<div>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 254
        echo "</div>";
        
        $__internal_d2361212fece8f16315063212545956288c0d9c0e5a466c0805b33c8e8505abe->leave($__internal_d2361212fece8f16315063212545956288c0d9c0e5a466c0805b33c8e8505abe_prof);

    }

    // line 257
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_fd05b94af167808adc2176fcff3a0fbf58ee9fdb77aecf96ae231a936cf85e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd05b94af167808adc2176fcff3a0fbf58ee9fdb77aecf96ae231a936cf85e9c->enter($__internal_fd05b94af167808adc2176fcff3a0fbf58ee9fdb77aecf96ae231a936cf85e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_fd05b94af167808adc2176fcff3a0fbf58ee9fdb77aecf96ae231a936cf85e9c->leave($__internal_fd05b94af167808adc2176fcff3a0fbf58ee9fdb77aecf96ae231a936cf85e9c_prof);

    }

    // line 263
    public function block_form($context, array $blocks = array())
    {
        $__internal_6da7132f07edc924dea12ce0542ef7d0901b5bf2fc1fda60bda3aa3a75589baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da7132f07edc924dea12ce0542ef7d0901b5bf2fc1fda60bda3aa3a75589baf->enter($__internal_6da7132f07edc924dea12ce0542ef7d0901b5bf2fc1fda60bda3aa3a75589baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 264
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 266
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_6da7132f07edc924dea12ce0542ef7d0901b5bf2fc1fda60bda3aa3a75589baf->leave($__internal_6da7132f07edc924dea12ce0542ef7d0901b5bf2fc1fda60bda3aa3a75589baf_prof);

    }

    // line 269
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_18d5d408dbedade90db6d7e5dc8103f21a6fe6452e2f0ab59f7cfc796a25afa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d5d408dbedade90db6d7e5dc8103f21a6fe6452e2f0ab59f7cfc796a25afa3->enter($__internal_18d5d408dbedade90db6d7e5dc8103f21a6fe6452e2f0ab59f7cfc796a25afa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 270
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 271
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 272
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 274
            $context["form_method"] = "POST";
        }
        // line 276
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 277
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 278
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_18d5d408dbedade90db6d7e5dc8103f21a6fe6452e2f0ab59f7cfc796a25afa3->leave($__internal_18d5d408dbedade90db6d7e5dc8103f21a6fe6452e2f0ab59f7cfc796a25afa3_prof);

    }

    // line 282
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_cfcc7353cc01265c32dc53c3fc6b211ef8a0eb491061af1b9cac6e421532a253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcc7353cc01265c32dc53c3fc6b211ef8a0eb491061af1b9cac6e421532a253->enter($__internal_cfcc7353cc01265c32dc53c3fc6b211ef8a0eb491061af1b9cac6e421532a253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 283
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 284
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 286
        echo "</form>";
        
        $__internal_cfcc7353cc01265c32dc53c3fc6b211ef8a0eb491061af1b9cac6e421532a253->leave($__internal_cfcc7353cc01265c32dc53c3fc6b211ef8a0eb491061af1b9cac6e421532a253_prof);

    }

    // line 289
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_267d98ff164f0324105a85b97bc6d7d24845922958108d061e2a8b99cac7749d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267d98ff164f0324105a85b97bc6d7d24845922958108d061e2a8b99cac7749d->enter($__internal_267d98ff164f0324105a85b97bc6d7d24845922958108d061e2a8b99cac7749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 290
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_267d98ff164f0324105a85b97bc6d7d24845922958108d061e2a8b99cac7749d->leave($__internal_267d98ff164f0324105a85b97bc6d7d24845922958108d061e2a8b99cac7749d_prof);

    }

    // line 293
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_02e3f0506cad598aeaf0184c0585f077e9829a5277ff6cac60976ec38a87cdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e3f0506cad598aeaf0184c0585f077e9829a5277ff6cac60976ec38a87cdb7->enter($__internal_02e3f0506cad598aeaf0184c0585f077e9829a5277ff6cac60976ec38a87cdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 294
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 295
            echo "<ul>";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 297
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "</ul>";
        }
        
        $__internal_02e3f0506cad598aeaf0184c0585f077e9829a5277ff6cac60976ec38a87cdb7->leave($__internal_02e3f0506cad598aeaf0184c0585f077e9829a5277ff6cac60976ec38a87cdb7_prof);

    }

    // line 303
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_410a703ea92682862d84a5dcd54975b92c38894dfd7423911ec7358ed496d351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410a703ea92682862d84a5dcd54975b92c38894dfd7423911ec7358ed496d351->enter($__internal_410a703ea92682862d84a5dcd54975b92c38894dfd7423911ec7358ed496d351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 305
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 306
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_410a703ea92682862d84a5dcd54975b92c38894dfd7423911ec7358ed496d351->leave($__internal_410a703ea92682862d84a5dcd54975b92c38894dfd7423911ec7358ed496d351_prof);

    }

    // line 313
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_ceed60cfc1196150285c97b8b4ea1aae9502094f3951ad5a6f9d56f9ff70153d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceed60cfc1196150285c97b8b4ea1aae9502094f3951ad5a6f9d56f9ff70153d->enter($__internal_ceed60cfc1196150285c97b8b4ea1aae9502094f3951ad5a6f9d56f9ff70153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 315
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ceed60cfc1196150285c97b8b4ea1aae9502094f3951ad5a6f9d56f9ff70153d->leave($__internal_ceed60cfc1196150285c97b8b4ea1aae9502094f3951ad5a6f9d56f9ff70153d_prof);

    }

    // line 319
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_e5fa6a19009b929e7ffc4d04f17e08f530a7cdef9c30830b6bb19adf3076cadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fa6a19009b929e7ffc4d04f17e08f530a7cdef9c30830b6bb19adf3076cadd->enter($__internal_e5fa6a19009b929e7ffc4d04f17e08f530a7cdef9c30830b6bb19adf3076cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 320
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 321
        if (($context["read_only"] ?? $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 322
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 323
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !($context["read_only"] ?? $this->getContext($context, "read_only")))) {
                // line 325
                echo " ";
                // line 326
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 327
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 328
$context["attrvalue"] === true)) {
                    // line 329
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 330
$context["attrvalue"] === false)) {
                    // line 331
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e5fa6a19009b929e7ffc4d04f17e08f530a7cdef9c30830b6bb19adf3076cadd->leave($__internal_e5fa6a19009b929e7ffc4d04f17e08f530a7cdef9c30830b6bb19adf3076cadd_prof);

    }

    // line 336
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_a247b15df32a1516bcad55fb9664d58ef77723422b8bb976a8af86a450514ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a247b15df32a1516bcad55fb9664d58ef77723422b8bb976a8af86a450514ed9->enter($__internal_a247b15df32a1516bcad55fb9664d58ef77723422b8bb976a8af86a450514ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 337
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 339
            echo " ";
            // line 340
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 342
$context["attrvalue"] === true)) {
                // line 343
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 344
$context["attrvalue"] === false)) {
                // line 345
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a247b15df32a1516bcad55fb9664d58ef77723422b8bb976a8af86a450514ed9->leave($__internal_a247b15df32a1516bcad55fb9664d58ef77723422b8bb976a8af86a450514ed9_prof);

    }

    // line 350
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_85356914350bcb3187bb207bce041a383ae4c02481aa48e7c48c67ad1a8c35b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85356914350bcb3187bb207bce041a383ae4c02481aa48e7c48c67ad1a8c35b3->enter($__internal_85356914350bcb3187bb207bce041a383ae4c02481aa48e7c48c67ad1a8c35b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 351
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
$context["attrvalue"] === true)) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 358
$context["attrvalue"] === false)) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_85356914350bcb3187bb207bce041a383ae4c02481aa48e7c48c67ad1a8c35b3->leave($__internal_85356914350bcb3187bb207bce041a383ae4c02481aa48e7c48c67ad1a8c35b3_prof);

    }

    // line 364
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_83db5a471700d31e31304924542bb4d8f282fbed0bc7eace7ec68870110524a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83db5a471700d31e31304924542bb4d8f282fbed0bc7eace7ec68870110524a7->enter($__internal_83db5a471700d31e31304924542bb4d8f282fbed0bc7eace7ec68870110524a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_83db5a471700d31e31304924542bb4d8f282fbed0bc7eace7ec68870110524a7->leave($__internal_83db5a471700d31e31304924542bb4d8f282fbed0bc7eace7ec68870110524a7_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1292 => 372,  1290 => 371,  1285 => 370,  1283 => 369,  1278 => 368,  1276 => 367,  1274 => 366,  1270 => 365,  1264 => 364,  1249 => 359,  1247 => 358,  1242 => 357,  1240 => 356,  1235 => 355,  1233 => 354,  1231 => 353,  1227 => 352,  1218 => 351,  1212 => 350,  1197 => 345,  1195 => 344,  1190 => 343,  1188 => 342,  1183 => 341,  1181 => 340,  1179 => 339,  1175 => 338,  1169 => 337,  1163 => 336,  1147 => 331,  1145 => 330,  1140 => 329,  1138 => 328,  1133 => 327,  1131 => 326,  1129 => 325,  1124 => 324,  1120 => 323,  1116 => 322,  1112 => 321,  1106 => 320,  1100 => 319,  1089 => 315,  1085 => 314,  1079 => 313,  1067 => 306,  1065 => 305,  1061 => 304,  1055 => 303,  1047 => 299,  1039 => 297,  1035 => 296,  1033 => 295,  1031 => 294,  1025 => 293,  1016 => 290,  1010 => 289,  1003 => 286,  1000 => 284,  998 => 283,  992 => 282,  982 => 278,  980 => 277,  953 => 276,  950 => 274,  947 => 272,  945 => 271,  943 => 270,  937 => 269,  930 => 266,  928 => 265,  926 => 264,  920 => 263,  913 => 258,  907 => 257,  900 => 254,  898 => 253,  896 => 252,  890 => 251,  883 => 248,  881 => 247,  879 => 246,  877 => 245,  875 => 244,  869 => 243,  862 => 240,  856 => 235,  845 => 231,  822 => 227,  818 => 224,  815 => 221,  814 => 220,  813 => 219,  811 => 218,  809 => 217,  806 => 215,  804 => 214,  801 => 212,  799 => 211,  797 => 210,  791 => 209,  784 => 204,  782 => 203,  776 => 202,  769 => 199,  767 => 198,  761 => 197,  748 => 194,  744 => 191,  741 => 188,  740 => 187,  739 => 186,  737 => 185,  735 => 184,  729 => 183,  722 => 180,  720 => 179,  714 => 178,  707 => 175,  705 => 174,  699 => 173,  692 => 170,  690 => 169,  684 => 168,  677 => 165,  675 => 164,  669 => 163,  661 => 160,  659 => 159,  653 => 158,  646 => 155,  644 => 154,  638 => 153,  631 => 150,  629 => 149,  623 => 148,  616 => 145,  610 => 144,  603 => 141,  601 => 140,  595 => 139,  588 => 136,  586 => 135,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 364,  153 => 350,  151 => 336,  149 => 319,  147 => 313,  144 => 310,  142 => 303,  140 => 293,  138 => 289,  136 => 282,  134 => 269,  132 => 263,  130 => 257,  128 => 251,  126 => 243,  124 => 235,  122 => 231,  120 => 209,  118 => 202,  116 => 197,  114 => 183,  112 => 178,  110 => 173,  108 => 168,  106 => 163,  104 => 158,  102 => 153,  100 => 148,  98 => 144,  96 => 139,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
