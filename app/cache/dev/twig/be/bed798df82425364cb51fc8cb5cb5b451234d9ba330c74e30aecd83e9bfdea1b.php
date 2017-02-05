<?php

/* AppBundle:Person:show_all.html.twig */
class __TwigTemplate_99e41a5a2a660182412247844e48370b620b57b92720f7db234f790750a6cff8 extends Twig_Template
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
        $__internal_ad463cd1af0ce50fdf0ebca3f966ba975b479b6dac80a72f5da38be8e7ea92df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad463cd1af0ce50fdf0ebca3f966ba975b479b6dac80a72f5da38be8e7ea92df->enter($__internal_ad463cd1af0ce50fdf0ebca3f966ba975b479b6dac80a72f5da38be8e7ea92df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:show_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad463cd1af0ce50fdf0ebca3f966ba975b479b6dac80a72f5da38be8e7ea92df->leave($__internal_ad463cd1af0ce50fdf0ebca3f966ba975b479b6dac80a72f5da38be8e7ea92df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2b95c6879bdf3ef99ddaca560466c1623d0ff6a977ef3268039cf855352731e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b95c6879bdf3ef99ddaca560466c1623d0ff6a977ef3268039cf855352731e->enter($__internal_e2b95c6879bdf3ef99ddaca560466c1623d0ff6a977ef3268039cf855352731e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista wszystkich osób";
        
        $__internal_e2b95c6879bdf3ef99ddaca560466c1623d0ff6a977ef3268039cf855352731e->leave($__internal_e2b95c6879bdf3ef99ddaca560466c1623d0ff6a977ef3268039cf855352731e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_188e7211ce3862e62b39b59f803d281db65e091c9c8bdbc98dbdeab63abfe916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188e7211ce3862e62b39b59f803d281db65e091c9c8bdbc98dbdeab63abfe916->enter($__internal_188e7211ce3862e62b39b59f803d281db65e091c9c8bdbc98dbdeab63abfe916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"jumbotron\">
    <h1>Lista wszystkich osób</h1>

    <a class=\"btn btn-info btn-xs\" href=\"/\">Strona główna</a>
    <a class=\"btn btn-info btn-xs\" href=\"/newPerson\">Dodaj osobę</a>
    <a class=\"btn btn-info btn-xs\" href=\"/newAddres\">Dodaj adres</a>
    <a class=\"btn btn-info btn-xs\" href=\"/addEmail\">Dodaj email</a>
    <a class=\"btn btn-info btn-xs\" href=\"/addPhone\">Dodaj telefon</a>
</div>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new Twig_Error_Runtime('Variable "persons" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 16
            echo "
        <p><b>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "name", array()), "html", null, true);
            echo "
                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "surname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "id", array()), "html", null, true);
            echo "</b></p>



        <a class=\"btn btn-primary btn-xs\" href=\"/show/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "id", array()), "html", null, true);
            echo "\">Szczegóły</a>
        <a class=\"btn btn-primary btn-xs\" href=\"/edit/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "id", array()), "html", null, true);
            echo "\">Zmień</a>
        <a class=\"btn btn-primary btn-xs\" href=\"/delete/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "id", array()), "html", null, true);
            echo "\">Usuń</a>
        <hr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "


";
        
        $__internal_188e7211ce3862e62b39b59f803d281db65e091c9c8bdbc98dbdeab63abfe916->leave($__internal_188e7211ce3862e62b39b59f803d281db65e091c9c8bdbc98dbdeab63abfe916_prof);

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
        return array (  102 => 28,  92 => 24,  88 => 23,  84 => 22,  75 => 18,  71 => 17,  68 => 16,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    <a class=\"btn btn-info btn-xs\" href=\"/addPhone\">Dodaj telefon</a>
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
