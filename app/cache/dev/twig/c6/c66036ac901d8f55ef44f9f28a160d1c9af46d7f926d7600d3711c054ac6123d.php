<?php

/* AppBundle:Person:modify.html.twig */
class __TwigTemplate_80545b4827b1467e644cc07bb42603050ca2bee4e15da4921891ee7a18ed2a66 extends Twig_Template
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
        $__internal_0e6a1eb86c16adc62b2e99376770a1e682ef0abf9c136739754378a3a3cc3833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6a1eb86c16adc62b2e99376770a1e682ef0abf9c136739754378a3a3cc3833->enter($__internal_0e6a1eb86c16adc62b2e99376770a1e682ef0abf9c136739754378a3a3cc3833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6a1eb86c16adc62b2e99376770a1e682ef0abf9c136739754378a3a3cc3833->leave($__internal_0e6a1eb86c16adc62b2e99376770a1e682ef0abf9c136739754378a3a3cc3833_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76abd7b4294f545f1c3854b56fbe33e9f2793fc76b220bdd00bdc30629fc4e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76abd7b4294f545f1c3854b56fbe33e9f2793fc76b220bdd00bdc30629fc4e1e->enter($__internal_76abd7b4294f545f1c3854b56fbe33e9f2793fc76b220bdd00bdc30629fc4e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Person:modify";
        
        $__internal_76abd7b4294f545f1c3854b56fbe33e9f2793fc76b220bdd00bdc30629fc4e1e->leave($__internal_76abd7b4294f545f1c3854b56fbe33e9f2793fc76b220bdd00bdc30629fc4e1e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b558d334071d31a85a04115fe4144586ad8102775d5852f9df8654719020f730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b558d334071d31a85a04115fe4144586ad8102775d5852f9df8654719020f730->enter($__internal_b558d334071d31a85a04115fe4144586ad8102775d5852f9df8654719020f730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Person:modify page</h1>

";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group jumbotron")));
        echo "
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj imię")));
        echo "
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj nazwisko")));
        echo "
<br>
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-xs")));
        echo "
";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_b558d334071d31a85a04115fe4144586ad8102775d5852f9df8654719020f730->leave($__internal_b558d334071d31a85a04115fe4144586ad8102775d5852f9df8654719020f730_prof);

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
        return array (  74 => 13,  70 => 12,  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}AppBundle:Person:modify{% endblock %}

{% block body %}
<h1>Welcome to the Person:modify page</h1>

{{ form_start(form,{'attr':{'class':'form-group jumbotron'} }) }}
{{ form_widget(form.name,{'attr':{'class':'form-control','placeholder':'Podaj imię'} }) }}
{{ form_widget(form.surname,{'attr':{'class':'form-control','placeholder':'Podaj nazwisko'} }) }}
<br>
{{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-xs'} }) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Person:modify.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/modify.html.twig");
    }
}
