<?php

/* AppBundle:Person:new_person.html.twig */
class __TwigTemplate_11d7c07d1733d946651b9b7f5e0bf0d66fd6c48c0a15b41ebc2c191ee6d7ad06 extends Twig_Template
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
        $__internal_3d213b5f77080ff18f1f76165b238b2200598eb182d1ccbe94b0ab2838099909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d213b5f77080ff18f1f76165b238b2200598eb182d1ccbe94b0ab2838099909->enter($__internal_3d213b5f77080ff18f1f76165b238b2200598eb182d1ccbe94b0ab2838099909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:new_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d213b5f77080ff18f1f76165b238b2200598eb182d1ccbe94b0ab2838099909->leave($__internal_3d213b5f77080ff18f1f76165b238b2200598eb182d1ccbe94b0ab2838099909_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96126374df7d9facf597ff6826c034db6e7f5d9a9b03913f28064af347e279af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96126374df7d9facf597ff6826c034db6e7f5d9a9b03913f28064af347e279af->enter($__internal_96126374df7d9facf597ff6826c034db6e7f5d9a9b03913f28064af347e279af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Person:newPerson";
        
        $__internal_96126374df7d9facf597ff6826c034db6e7f5d9a9b03913f28064af347e279af->leave($__internal_96126374df7d9facf597ff6826c034db6e7f5d9a9b03913f28064af347e279af_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_725cf83a7dd5140990a1220e0f4e0ca196c52ad17b62470551ac23744958d41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725cf83a7dd5140990a1220e0f4e0ca196c52ad17b62470551ac23744958d41a->enter($__internal_725cf83a7dd5140990a1220e0f4e0ca196c52ad17b62470551ac23744958d41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Person:newPerson page</h1>

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
<br>
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "

<a class=\"btn btn-primary btn-xs\" href=\"/showAll\">Wróć do listy</a>

";
        
        $__internal_725cf83a7dd5140990a1220e0f4e0ca196c52ad17b62470551ac23744958d41a->leave($__internal_725cf83a7dd5140990a1220e0f4e0ca196c52ad17b62470551ac23744958d41a_prof);

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
        return array (  74 => 13,  70 => 12,  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Person:newPerson{% endblock %}

{% block body %}
<h1>Welcome to the Person:newPerson page</h1>

{{ form_start(form,{'attr':{'class':'form-group jumbotron'} }) }}
{{ form_widget(form.name,{'attr':{'class':'form-control','placeholder':'Podaj imię'} }) }}
{{ form_widget(form.surname,{'attr':{'class':'form-control','placeholder':'Podaj nazwisko'} }) }}
<br>
{{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-xs'} }) }}
{{ form_end(form) }}

<a class=\"btn btn-primary btn-xs\" href=\"/showAll\">Wróć do listy</a>

{% endblock %}
", "AppBundle:Person:new_person.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/new_person.html.twig");
    }
}
