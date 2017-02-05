<?php

/* AppBundle:Person:modify.html.twig */
class __TwigTemplate_2f471735f50b339180c45a7e79f05444cc8f1b5ce33d091a2a12787b16e31936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Person:modify.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4768de5c8a0018c65a1929602c6354f73b1b91fc1b9944f301487f9b1710d11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4768de5c8a0018c65a1929602c6354f73b1b91fc1b9944f301487f9b1710d11f->enter($__internal_4768de5c8a0018c65a1929602c6354f73b1b91fc1b9944f301487f9b1710d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4768de5c8a0018c65a1929602c6354f73b1b91fc1b9944f301487f9b1710d11f->leave($__internal_4768de5c8a0018c65a1929602c6354f73b1b91fc1b9944f301487f9b1710d11f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_536da58d90ecbf1a4f695fd389de11cf12313a2edb9769bf24034b54e1d5c5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536da58d90ecbf1a4f695fd389de11cf12313a2edb9769bf24034b54e1d5c5c4->enter($__internal_536da58d90ecbf1a4f695fd389de11cf12313a2edb9769bf24034b54e1d5c5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Person:modify";
        
        $__internal_536da58d90ecbf1a4f695fd389de11cf12313a2edb9769bf24034b54e1d5c5c4->leave($__internal_536da58d90ecbf1a4f695fd389de11cf12313a2edb9769bf24034b54e1d5c5c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1862dcf75527be02bbb26e81a4907810b6ee22d67bf683c2821e27ed2f75c66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1862dcf75527be02bbb26e81a4907810b6ee22d67bf683c2821e27ed2f75c66d->enter($__internal_1862dcf75527be02bbb26e81a4907810b6ee22d67bf683c2821e27ed2f75c66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Edycja kontaktu</h1>

";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-group jumbotron")));
        echo "
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj imię")));
        echo "
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "surname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj nazwisko")));
        echo "

";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["person"] ?? null), "addres", array(), "any", true, true)) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 13, $this->getSourceContext()); })()), "addres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "widget", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "city", array()), 1 => array("attr" => array("class" => "form-control", "placeholder" => "Podaj nazwisko"))), "method"), "html", null, true);
                echo "
            ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "street", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "number1", array()), "html", null, true);
                echo " 
            ";
                // line 16
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "number2", array())) {
                    // line 17
                    echo "                /";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "number2", array()), "html", null, true);
                    echo "
            ";
                }
                // line 18
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 21
        echo "<br>
";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_1862dcf75527be02bbb26e81a4907810b6ee22d67bf683c2821e27ed2f75c66d->leave($__internal_1862dcf75527be02bbb26e81a4907810b6ee22d67bf683c2821e27ed2f75c66d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Person:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  107 => 22,  104 => 21,  96 => 18,  90 => 17,  88 => 16,  82 => 15,  77 => 14,  72 => 13,  70 => 12,  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Person:modify{% endblock %}

{% block body %}
<h1>Edycja kontaktu</h1>

{{ form_start(form,{'attr':{'class':'form-group jumbotron'} }) }}
{{ form_widget(form.name,{'attr':{'class':'form-control','placeholder':'Podaj imię'} }) }}
{{ form_widget(form.surname,{'attr':{'class':'form-control','placeholder':'Podaj nazwisko'} }) }}

{% if person.addres is defined %}
        {% for address in person.addres %}
            {{ form.widget(form.city,{'attr':{'class':'form-control','placeholder':'Podaj nazwisko'} }) }}
            {{ address.street }} {{ address.number1 }} 
            {% if address.number2 %}
                /{{ address.number2 }}
            {% endif %}</p>
    {% endfor %}
{% endif %}
<br>
{{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-xs'} }) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Person:modify.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/modify.html.twig");
    }
}
