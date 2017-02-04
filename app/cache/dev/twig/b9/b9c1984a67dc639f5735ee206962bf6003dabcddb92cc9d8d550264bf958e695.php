<?php

/* AppBundle:Person:new_person.html.twig */
class __TwigTemplate_b3f38f02ac5af725d1a0ef3406abba444811ddf8f5dfcfecb44c9a64611e0b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Person:new_person.html.twig", 1);
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
        $__internal_f198dd603e2425a368af72998cdc90e6b9cd47a8e9cb50d6ebe593a5439e6828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f198dd603e2425a368af72998cdc90e6b9cd47a8e9cb50d6ebe593a5439e6828->enter($__internal_f198dd603e2425a368af72998cdc90e6b9cd47a8e9cb50d6ebe593a5439e6828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:new_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f198dd603e2425a368af72998cdc90e6b9cd47a8e9cb50d6ebe593a5439e6828->leave($__internal_f198dd603e2425a368af72998cdc90e6b9cd47a8e9cb50d6ebe593a5439e6828_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb0b2108163dea0708ce5a649170a4cb46f95f463f78079b5925435c12cea6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0b2108163dea0708ce5a649170a4cb46f95f463f78079b5925435c12cea6d2->enter($__internal_fb0b2108163dea0708ce5a649170a4cb46f95f463f78079b5925435c12cea6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Person:newPerson";
        
        $__internal_fb0b2108163dea0708ce5a649170a4cb46f95f463f78079b5925435c12cea6d2->leave($__internal_fb0b2108163dea0708ce5a649170a4cb46f95f463f78079b5925435c12cea6d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0de8944e80b77d5679d5edac3986388798136564f24a2c1cc33c0a96601a8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0de8944e80b77d5679d5edac3986388798136564f24a2c1cc33c0a96601a8f1->enter($__internal_f0de8944e80b77d5679d5edac3986388798136564f24a2c1cc33c0a96601a8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Person:newPerson page</h1>

";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group jumbotron")));
        echo "
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Miasto")));
        echo "
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "street", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ulica")));
        echo "
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "NUmer 1")));
        echo "
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numer 2")));
        echo "
<br>
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_f0de8944e80b77d5679d5edac3986388798136564f24a2c1cc33c0a96601a8f1->leave($__internal_f0de8944e80b77d5679d5edac3986388798136564f24a2c1cc33c0a96601a8f1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Person:new_person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  78 => 14,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}AppBundle:Person:newPerson{% endblock %}

{% block body %}
<h1>Welcome to the Person:newPerson page</h1>

{{ form_start(form,{'attr':{'class':'form-group jumbotron'} }) }}
{{ form_widget(form.city,{'attr':{'class':'form-control','placeholder':'Miasto'} }) }}
{{ form_widget(form.street,{'attr':{'class':'form-control','placeholder':'Ulica'} }) }}
{{ form_widget(form.number1,{'attr':{'class':'form-control','placeholder':'NUmer 1'} }) }}
{{ form_widget(form.number2,{'attr':{'class':'form-control','placeholder':'Numer 2'} }) }}
<br>
{{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-xs'} }) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Person:new_person.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/new_person.html.twig");
    }
}
