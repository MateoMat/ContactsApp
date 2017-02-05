<?php

/* AppBundle:Phone:add_phone.html.twig */
class __TwigTemplate_536daba09191775823abb3e07099ba788ddd963b95d4a9d67504447153aad725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Phone:add_phone.html.twig", 1);
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
        $__internal_df4bad640ad72bd72b51373c8124055a08809dec6256aa4b3aaa1934a46baa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4bad640ad72bd72b51373c8124055a08809dec6256aa4b3aaa1934a46baa1d->enter($__internal_df4bad640ad72bd72b51373c8124055a08809dec6256aa4b3aaa1934a46baa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Phone:add_phone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4bad640ad72bd72b51373c8124055a08809dec6256aa4b3aaa1934a46baa1d->leave($__internal_df4bad640ad72bd72b51373c8124055a08809dec6256aa4b3aaa1934a46baa1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32b67cfafbc1d18ec9691e850eeee834c225710f023cb040ce60bd9c29cdeabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b67cfafbc1d18ec9691e850eeee834c225710f023cb040ce60bd9c29cdeabc->enter($__internal_32b67cfafbc1d18ec9691e850eeee834c225710f023cb040ce60bd9c29cdeabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Phone:addPhone";
        
        $__internal_32b67cfafbc1d18ec9691e850eeee834c225710f023cb040ce60bd9c29cdeabc->leave($__internal_32b67cfafbc1d18ec9691e850eeee834c225710f023cb040ce60bd9c29cdeabc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c3cd067fc4e015b10dea8b674558da48b90d29b5ee109d14fa1ee8b47793b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c3cd067fc4e015b10dea8b674558da48b90d29b5ee109d14fa1ee8b47793b2->enter($__internal_b3c3cd067fc4e015b10dea8b674558da48b90d29b5ee109d14fa1ee8b47793b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Phone:addPhone page</h1>
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-group jumbotron")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "person", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj imię")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "number", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Podaj numer telefonu")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rodzaj adresu")));
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

";
        
        $__internal_b3c3cd067fc4e015b10dea8b674558da48b90d29b5ee109d14fa1ee8b47793b2->leave($__internal_b3c3cd067fc4e015b10dea8b674558da48b90d29b5ee109d14fa1ee8b47793b2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Phone:add_phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  73 => 12,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Phone:addPhone{% endblock %}

{% block body %}
<h1>Welcome to the Phone:addPhone page</h1>
    {{ form_start(form,{'attr':{'class':'form-group jumbotron'} }) }}
    {{ form_widget(form.person,{'attr':{'class':'form-control','placeholder':'Podaj imię'} }) }}
    {{ form_widget(form.number,{'attr':{'class':'form-control','placeholder':'Podaj numer telefonu'} }) }}
    {{ form_widget(form.type,{'attr':{'class':'form-control','placeholder':'Rodzaj adresu'} }) }}
    <br>
    {{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-xs'} }) }}
    {{ form_end(form) }}

{% endblock %}
", "AppBundle:Phone:add_phone.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Phone/add_phone.html.twig");
    }
}
