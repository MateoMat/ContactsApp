<?php

/* AppBundle:Addres:new_addres.html.twig */
class __TwigTemplate_ab6c1ceed94a9ce502c384336129ed2f7304f23072ad9e46ddeba765cdd58651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Addres:new_addres.html.twig", 1);
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
        $__internal_843a1b3b70af609086d4119b1acb3c17266e55eb7f9f11d2910ccc1e5cf60b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843a1b3b70af609086d4119b1acb3c17266e55eb7f9f11d2910ccc1e5cf60b84->enter($__internal_843a1b3b70af609086d4119b1acb3c17266e55eb7f9f11d2910ccc1e5cf60b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Addres:new_addres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_843a1b3b70af609086d4119b1acb3c17266e55eb7f9f11d2910ccc1e5cf60b84->leave($__internal_843a1b3b70af609086d4119b1acb3c17266e55eb7f9f11d2910ccc1e5cf60b84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7cfe74b37e269a4757a3e646f0b5141f7b8d434b5ba31785d97324406f152c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cfe74b37e269a4757a3e646f0b5141f7b8d434b5ba31785d97324406f152c1->enter($__internal_f7cfe74b37e269a4757a3e646f0b5141f7b8d434b5ba31785d97324406f152c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Addres:newAddres";
        
        $__internal_f7cfe74b37e269a4757a3e646f0b5141f7b8d434b5ba31785d97324406f152c1->leave($__internal_f7cfe74b37e269a4757a3e646f0b5141f7b8d434b5ba31785d97324406f152c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c071e2d14cfda0c5a01d385ae1d73205303b9e69cb4cfbbffc9056f62f928acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c071e2d14cfda0c5a01d385ae1d73205303b9e69cb4cfbbffc9056f62f928acb->enter($__internal_c071e2d14cfda0c5a01d385ae1d73205303b9e69cb4cfbbffc9056f62f928acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Addres:newAddres page</h1>

";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-group jumbotron")));
        echo "
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "city", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Miasto")));
        echo "
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "street", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ulica")));
        echo "
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "number1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numer domu")));
        echo "
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "number2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numer mieszkania")));
        echo "
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "person", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numer mieszkania")));
        echo "
<br>
";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_end');
        echo "

<a class=\"btn btn-primary btn-xs\" href=\"/showAll\">Wróć do listy</a>

";
        
        $__internal_c071e2d14cfda0c5a01d385ae1d73205303b9e69cb4cfbbffc9056f62f928acb->leave($__internal_c071e2d14cfda0c5a01d385ae1d73205303b9e69cb4cfbbffc9056f62f928acb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Addres:new_addres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  82 => 15,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Addres:newAddres{% endblock %}

{% block body %}
<h1>Welcome to the Addres:newAddres page</h1>

{{ form_start(form,{'attr':{'class':'form-group jumbotron'} }) }}
{{ form_widget(form.city,{'attr':{'class':'form-control','placeholder':'Miasto'} }) }}
{{ form_widget(form.street,{'attr':{'class':'form-control','placeholder':'Ulica'} }) }}
{{ form_widget(form.number1,{'attr':{'class':'form-control','placeholder':'Numer domu'} }) }}
{{ form_widget(form.number2,{'attr':{'class':'form-control','placeholder':'Numer mieszkania'} }) }}
{{ form_widget(form.person,{'attr':{'class':'form-control','placeholder':'Numer mieszkania'} }) }}
<br>
{{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-xs'} }) }}
{{ form_end(form) }}

<a class=\"btn btn-primary btn-xs\" href=\"/showAll\">Wróć do listy</a>

{% endblock %}
", "AppBundle:Addres:new_addres.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Addres/new_addres.html.twig");
    }
}
