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
        $__internal_e7a0625be23223c94f853d06bc7e7e556258b2f46566eb7935611f7f71256982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a0625be23223c94f853d06bc7e7e556258b2f46566eb7935611f7f71256982->enter($__internal_e7a0625be23223c94f853d06bc7e7e556258b2f46566eb7935611f7f71256982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:new_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7a0625be23223c94f853d06bc7e7e556258b2f46566eb7935611f7f71256982->leave($__internal_e7a0625be23223c94f853d06bc7e7e556258b2f46566eb7935611f7f71256982_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98ac935588cd95b19b379931981261b4bab541b7e525ffd2539a0d821d9f56ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ac935588cd95b19b379931981261b4bab541b7e525ffd2539a0d821d9f56ed->enter($__internal_98ac935588cd95b19b379931981261b4bab541b7e525ffd2539a0d821d9f56ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Person:newPerson";
        
        $__internal_98ac935588cd95b19b379931981261b4bab541b7e525ffd2539a0d821d9f56ed->leave($__internal_98ac935588cd95b19b379931981261b4bab541b7e525ffd2539a0d821d9f56ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebc1dd56de04cdcbbb05db09962f758f7fb7d45acb02cf56be95b9eacdab245a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc1dd56de04cdcbbb05db09962f758f7fb7d45acb02cf56be95b9eacdab245a->enter($__internal_ebc1dd56de04cdcbbb05db09962f758f7fb7d45acb02cf56be95b9eacdab245a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Person:newPerson page</h1>

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

<a class=\"btn btn-primary btn-xs\" href=\"/showAll\">Wróć do listy</a>

";
        
        $__internal_ebc1dd56de04cdcbbb05db09962f758f7fb7d45acb02cf56be95b9eacdab245a->leave($__internal_ebc1dd56de04cdcbbb05db09962f758f7fb7d45acb02cf56be95b9eacdab245a_prof);

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
