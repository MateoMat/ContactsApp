<?php

/* AppBundle:Addres:new_addres.html.twig */
class __TwigTemplate_0b7cac8442778af9e9cc27740c13f2f6ac6fd60d8faa669634dff80e1abcae52 extends Twig_Template
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
        $__internal_5eb6eb3d49c85e21b6fdcdf5066f58591b617da214f4644f3b4cd6afdd9da346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb6eb3d49c85e21b6fdcdf5066f58591b617da214f4644f3b4cd6afdd9da346->enter($__internal_5eb6eb3d49c85e21b6fdcdf5066f58591b617da214f4644f3b4cd6afdd9da346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Addres:new_addres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb6eb3d49c85e21b6fdcdf5066f58591b617da214f4644f3b4cd6afdd9da346->leave($__internal_5eb6eb3d49c85e21b6fdcdf5066f58591b617da214f4644f3b4cd6afdd9da346_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d49bb185eb25e55ffaae0cd94966235d6c7b85ce28f43e53bdab6e2f9b4f9ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49bb185eb25e55ffaae0cd94966235d6c7b85ce28f43e53bdab6e2f9b4f9ded->enter($__internal_d49bb185eb25e55ffaae0cd94966235d6c7b85ce28f43e53bdab6e2f9b4f9ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Addres:newAddres";
        
        $__internal_d49bb185eb25e55ffaae0cd94966235d6c7b85ce28f43e53bdab6e2f9b4f9ded->leave($__internal_d49bb185eb25e55ffaae0cd94966235d6c7b85ce28f43e53bdab6e2f9b4f9ded_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da606b5b8e78fa2a69b691d9c46f3c704680470ecaa0c4ecfdcd0eb19210b219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da606b5b8e78fa2a69b691d9c46f3c704680470ecaa0c4ecfdcd0eb19210b219->enter($__internal_da606b5b8e78fa2a69b691d9c46f3c704680470ecaa0c4ecfdcd0eb19210b219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Addres:newAddres page</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numer domu")));
        echo "
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numer mieszkania")));
        echo "
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "person", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numer mieszkania")));
        echo "
<br>
";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_da606b5b8e78fa2a69b691d9c46f3c704680470ecaa0c4ecfdcd0eb19210b219->leave($__internal_da606b5b8e78fa2a69b691d9c46f3c704680470ecaa0c4ecfdcd0eb19210b219_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

{% endblock %}
", "AppBundle:Addres:new_addres.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Addres/new_addres.html.twig");
    }
}