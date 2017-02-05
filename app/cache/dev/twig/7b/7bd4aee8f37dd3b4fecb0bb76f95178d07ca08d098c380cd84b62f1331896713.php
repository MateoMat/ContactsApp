<?php

/* AppBundle:Email:add_email.html.twig */
class __TwigTemplate_0973441740f6df769536abd733cc7b476a862ef2262348650853a8004b3dca6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Email:add_email.html.twig", 1);
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
        $__internal_3177591e5f0b6fd01b16e656a88f2e38f25c3ce8a35883e15b76a8a28958c993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3177591e5f0b6fd01b16e656a88f2e38f25c3ce8a35883e15b76a8a28958c993->enter($__internal_3177591e5f0b6fd01b16e656a88f2e38f25c3ce8a35883e15b76a8a28958c993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:add_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3177591e5f0b6fd01b16e656a88f2e38f25c3ce8a35883e15b76a8a28958c993->leave($__internal_3177591e5f0b6fd01b16e656a88f2e38f25c3ce8a35883e15b76a8a28958c993_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3e87572f673f5a4891e90a9385f243f042e10a0f6b264f66b72c6e71ebb7d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e87572f673f5a4891e90a9385f243f042e10a0f6b264f66b72c6e71ebb7d9e->enter($__internal_d3e87572f673f5a4891e90a9385f243f042e10a0f6b264f66b72c6e71ebb7d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dodaj nowy email";
        
        $__internal_d3e87572f673f5a4891e90a9385f243f042e10a0f6b264f66b72c6e71ebb7d9e->leave($__internal_d3e87572f673f5a4891e90a9385f243f042e10a0f6b264f66b72c6e71ebb7d9e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeae8c8473d6a8a9296e2d234ba84cb9893ee268219d20c48f1e85fde4249771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeae8c8473d6a8a9296e2d234ba84cb9893ee268219d20c48f1e85fde4249771->enter($__internal_eeae8c8473d6a8a9296e2d234ba84cb9893ee268219d20c48f1e85fde4249771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Dodaj nowy email</h1>

";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-group jumbotron")));
        echo "
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "person", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj imię")));
        echo "
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj email")));
        echo "
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rodzaj adresu")));
        echo "
<br>
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_eeae8c8473d6a8a9296e2d234ba84cb9893ee268219d20c48f1e85fde4249771->leave($__internal_eeae8c8473d6a8a9296e2d234ba84cb9893ee268219d20c48f1e85fde4249771_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Email:add_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Dodaj nowy email{% endblock %}

{% block body %}
<h1>Dodaj nowy email</h1>

{{ form_start(form,{'attr':{'class':'form-group jumbotron'} }) }}
{{ form_widget(form.person,{'attr':{'class':'form-control','placeholder':'Podaj imię'} }) }}
{{ form_widget(form.email,{'attr':{'class':'form-control','placeholder':'Podaj email'} }) }}
{{ form_widget(form.type,{'attr':{'class':'form-control','placeholder':'Rodzaj adresu'} }) }}
<br>
{{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-xs'} }) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Email:add_email.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Email/add_email.html.twig");
    }
}
