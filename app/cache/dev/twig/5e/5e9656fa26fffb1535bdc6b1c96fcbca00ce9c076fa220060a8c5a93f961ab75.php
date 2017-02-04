<?php

/* default/index.html.twig */
class __TwigTemplate_b96a54832572e8beb692c47c932f6e2aee7b2204ad7a8e81cd182ecc89d538cf extends Twig_Template
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
        $__internal_16e6d6e6d92337eb384f65156ed8b338ff1fdadbc1043ab24d3c645eb897d2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e6d6e6d92337eb384f65156ed8b338ff1fdadbc1043ab24d3c645eb897d2c0->enter($__internal_16e6d6e6d92337eb384f65156ed8b338ff1fdadbc1043ab24d3c645eb897d2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e6d6e6d92337eb384f65156ed8b338ff1fdadbc1043ab24d3c645eb897d2c0->leave($__internal_16e6d6e6d92337eb384f65156ed8b338ff1fdadbc1043ab24d3c645eb897d2c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b2914d658d0c9962fbf13efd903c969a66295a17f8881bfeff11e0c0afe3284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2914d658d0c9962fbf13efd903c969a66295a17f8881bfeff11e0c0afe3284->enter($__internal_9b2914d658d0c9962fbf13efd903c969a66295a17f8881bfeff11e0c0afe3284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <h1> Witaj w kontaktach</h1>
    </div>
    
    <a class=\"btn btn-primary\" href=\"/showAll\">Wszystkie osoby</a>
    <a class=\"btn btn-primary\" href=\"/newPerson\">Dodaj osobę</a>
    <a class=\"btn btn-primary\" href=\"/newAddres\">Dodaj Adres</a>


";
        
        $__internal_9b2914d658d0c9962fbf13efd903c969a66295a17f8881bfeff11e0c0afe3284->leave($__internal_9b2914d658d0c9962fbf13efd903c969a66295a17f8881bfeff11e0c0afe3284_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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


{% endblock %}
", "default/index.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/app/Resources/views/default/index.html.twig");
    }
}
