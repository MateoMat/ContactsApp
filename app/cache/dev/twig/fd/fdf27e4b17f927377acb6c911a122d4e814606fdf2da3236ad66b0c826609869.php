<?php

/* default/index.html.twig */
class __TwigTemplate_891a5415595681b80ce12990bb91e119a7fbe111a970c8bb7f2fb546b91ead8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1208024a235bdb27205cbc543337f40ab55e29fdf4d970f72871f80964731a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1208024a235bdb27205cbc543337f40ab55e29fdf4d970f72871f80964731a28->enter($__internal_1208024a235bdb27205cbc543337f40ab55e29fdf4d970f72871f80964731a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1208024a235bdb27205cbc543337f40ab55e29fdf4d970f72871f80964731a28->leave($__internal_1208024a235bdb27205cbc543337f40ab55e29fdf4d970f72871f80964731a28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c1fbe6125567e530da638dbfc0f1aa21004281ecc7baeae20eecd867e1d2bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1fbe6125567e530da638dbfc0f1aa21004281ecc7baeae20eecd867e1d2bea->enter($__internal_0c1fbe6125567e530da638dbfc0f1aa21004281ecc7baeae20eecd867e1d2bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h1> Witaj w kontaktach</h1>
    </div>
    
    <a class=\"btn btn-primary\" href=\"/showAll\">Wszystkie osoby</a>
    <a class=\"btn btn-primary\" href=\"/newPerson\">Dodaj osobę</a>
    <a class=\"btn btn-primary\" href=\"/newAddres\">Dodaj Adres</a>
    <a class=\"btn btn-primary\" href=\"/newPhone\">Dodaj telefon</a>


";
        
        $__internal_0c1fbe6125567e530da638dbfc0f1aa21004281ecc7baeae20eecd867e1d2bea->leave($__internal_0c1fbe6125567e530da638dbfc0f1aa21004281ecc7baeae20eecd867e1d2bea_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"jumbotron\">
        <h1> Witaj w kontaktach</h1>
    </div>
    
    <a class=\"btn btn-primary\" href=\"/showAll\">Wszystkie osoby</a>
    <a class=\"btn btn-primary\" href=\"/newPerson\">Dodaj osobę</a>
    <a class=\"btn btn-primary\" href=\"/newAddres\">Dodaj Adres</a>
    <a class=\"btn btn-primary\" href=\"/newPhone\">Dodaj telefon</a>


{% endblock %}
", "default/index.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/app/Resources/views/default/index.html.twig");
    }
}
