<?php

/* AppBundle:Email:add_email.html.twig */
class __TwigTemplate_3aa0f184f3dc0674fbf7147ed2510d77443867e256002b884f3e68c317814ea9 extends Twig_Template
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
        $__internal_b4f5f0e0cca4c0070f51caa702a06c1029b1a35ab9edb8a31536f6030e9c1f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f5f0e0cca4c0070f51caa702a06c1029b1a35ab9edb8a31536f6030e9c1f9b->enter($__internal_b4f5f0e0cca4c0070f51caa702a06c1029b1a35ab9edb8a31536f6030e9c1f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:add_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f5f0e0cca4c0070f51caa702a06c1029b1a35ab9edb8a31536f6030e9c1f9b->leave($__internal_b4f5f0e0cca4c0070f51caa702a06c1029b1a35ab9edb8a31536f6030e9c1f9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f23cfbd5195cdcb5d0d76213530ff2160124bc2d233daf9118086119c0277724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23cfbd5195cdcb5d0d76213530ff2160124bc2d233daf9118086119c0277724->enter($__internal_f23cfbd5195cdcb5d0d76213530ff2160124bc2d233daf9118086119c0277724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Email:addEmail";
        
        $__internal_f23cfbd5195cdcb5d0d76213530ff2160124bc2d233daf9118086119c0277724->leave($__internal_f23cfbd5195cdcb5d0d76213530ff2160124bc2d233daf9118086119c0277724_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcca2745a116349d592744a7cc64ef4faeb94ca1b640207b23409fb788b33cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcca2745a116349d592744a7cc64ef4faeb94ca1b640207b23409fb788b33cc3->enter($__internal_fcca2745a116349d592744a7cc64ef4faeb94ca1b640207b23409fb788b33cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Email:addEmail page</h1>

";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group jumbotron")));
        echo "
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "person", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj imię")));
        echo "
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj email")));
        echo "
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rodzaj adresu")));
        echo "
<br>
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_fcca2745a116349d592744a7cc64ef4faeb94ca1b640207b23409fb788b33cc3->leave($__internal_fcca2745a116349d592744a7cc64ef4faeb94ca1b640207b23409fb788b33cc3_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Email:addEmail{% endblock %}

{% block body %}
<h1>Welcome to the Email:addEmail page</h1>

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
