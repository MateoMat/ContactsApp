<?php

/* AppBundle:Person:show_all.html.twig */
class __TwigTemplate_7bc053d2f1a4e335ff0563a69304e4b0358fe0149d0fe0a5435f59eb365a80df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Person:show_all.html.twig", 1);
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
        $__internal_2eff630dabd1037a77a5c72ecec36e53750d409a276e720c78bb10e353172090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eff630dabd1037a77a5c72ecec36e53750d409a276e720c78bb10e353172090->enter($__internal_2eff630dabd1037a77a5c72ecec36e53750d409a276e720c78bb10e353172090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:show_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eff630dabd1037a77a5c72ecec36e53750d409a276e720c78bb10e353172090->leave($__internal_2eff630dabd1037a77a5c72ecec36e53750d409a276e720c78bb10e353172090_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e59a6aec6efa3959972f4ff24c2b9a4e422ad04e5a36bab8a8c2b87c2196ed8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59a6aec6efa3959972f4ff24c2b9a4e422ad04e5a36bab8a8c2b87c2196ed8d->enter($__internal_e59a6aec6efa3959972f4ff24c2b9a4e422ad04e5a36bab8a8c2b87c2196ed8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista wszystkich osób";
        
        $__internal_e59a6aec6efa3959972f4ff24c2b9a4e422ad04e5a36bab8a8c2b87c2196ed8d->leave($__internal_e59a6aec6efa3959972f4ff24c2b9a4e422ad04e5a36bab8a8c2b87c2196ed8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9232853c293151415edbac29077c8efcbe81c0b765769a9117c115d1a4472b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9232853c293151415edbac29077c8efcbe81c0b765769a9117c115d1a4472b60->enter($__internal_9232853c293151415edbac29077c8efcbe81c0b765769a9117c115d1a4472b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"jumbotron\">
    <h1>Lista wszystkich osób</h1>

    <a class=\"btn btn-info btn-xs\" href=\"/\">Strona główna</a>
    <a class=\"btn btn-info btn-xs\" href=\"/newPerson\">Dodaj osobę</a>
    <a class=\"btn btn-info btn-xs\" href=\"/newAddres\">Dodaj adres</a>
    <a class=\"btn btn-info btn-xs\" href=\"/addEmail\">Dodaj email</a>
</div>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 15
            echo "
        <p><b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "</b></p>



        <a class=\"btn btn-primary btn-xs\" href=\"/show/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "\">Szczegóły</a>
        <a class=\"btn btn-primary btn-xs\" href=\"/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "\">Zmień</a>
        <a class=\"btn btn-primary btn-xs\" href=\"/delete/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "\">Usuń</a>
        <hr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "


";
        
        $__internal_9232853c293151415edbac29077c8efcbe81c0b765769a9117c115d1a4472b60->leave($__internal_9232853c293151415edbac29077c8efcbe81c0b765769a9117c115d1a4472b60_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Person:show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  91 => 23,  87 => 22,  83 => 21,  74 => 17,  70 => 16,  67 => 15,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Lista wszystkich osób{% endblock %}

{% block body %}
<div class=\"jumbotron\">
    <h1>Lista wszystkich osób</h1>

    <a class=\"btn btn-info btn-xs\" href=\"/\">Strona główna</a>
    <a class=\"btn btn-info btn-xs\" href=\"/newPerson\">Dodaj osobę</a>
    <a class=\"btn btn-info btn-xs\" href=\"/newAddres\">Dodaj adres</a>
    <a class=\"btn btn-info btn-xs\" href=\"/addEmail\">Dodaj email</a>
</div>
    {% for person in persons %}

        <p><b>{{ person.name }}
                {{ person.surname }} {{ person.id }}</b></p>



        <a class=\"btn btn-primary btn-xs\" href=\"/show/{{ person.id }}\">Szczegóły</a>
        <a class=\"btn btn-primary btn-xs\" href=\"/edit/{{ person.id }}\">Zmień</a>
        <a class=\"btn btn-primary btn-xs\" href=\"/delete/{{ person.id }}\">Usuń</a>
        <hr>

    {% endfor %}



{% endblock %}
", "AppBundle:Person:show_all.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/show_all.html.twig");
    }
}
