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
        $__internal_ae18999cf12cc91d1521429d10f30ca76b136ff7d3efa6d07bd2c61bc9ffb2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae18999cf12cc91d1521429d10f30ca76b136ff7d3efa6d07bd2c61bc9ffb2f7->enter($__internal_ae18999cf12cc91d1521429d10f30ca76b136ff7d3efa6d07bd2c61bc9ffb2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:show_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae18999cf12cc91d1521429d10f30ca76b136ff7d3efa6d07bd2c61bc9ffb2f7->leave($__internal_ae18999cf12cc91d1521429d10f30ca76b136ff7d3efa6d07bd2c61bc9ffb2f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e7c06f9781654a9a3aac4b65f280d073c49f3108e60c41786eda355f08735dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7c06f9781654a9a3aac4b65f280d073c49f3108e60c41786eda355f08735dc->enter($__internal_9e7c06f9781654a9a3aac4b65f280d073c49f3108e60c41786eda355f08735dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista wszystkich osób";
        
        $__internal_9e7c06f9781654a9a3aac4b65f280d073c49f3108e60c41786eda355f08735dc->leave($__internal_9e7c06f9781654a9a3aac4b65f280d073c49f3108e60c41786eda355f08735dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22f86054b68a887acb9300f6c939f4d234efb3a3e624b953d2f2340988003b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f86054b68a887acb9300f6c939f4d234efb3a3e624b953d2f2340988003b02->enter($__internal_22f86054b68a887acb9300f6c939f4d234efb3a3e624b953d2f2340988003b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Lista wszystkich osób</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 9
            echo "
            <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo "</p>

            ";
            // line 13
            if ($this->getAttribute($context["person"], "addres", array(), "any", true, true)) {
                // line 14
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["person"], "addres", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 15
                    echo "                    <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
                    echo "</p>
                    ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
                    echo "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
            }
            // line 19
            echo "
            <a class=\"btn btn-primary btn-xs\" href=\"/delete/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "\">Usuń</a>
            <a class=\"btn btn-primary btn-xs\" href=\"/edit/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "\">Zmień</a>
        <hr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_22f86054b68a887acb9300f6c939f4d234efb3a3e624b953d2f2340988003b02->leave($__internal_22f86054b68a887acb9300f6c939f4d234efb3a3e624b953d2f2340988003b02_prof);

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
        return array (  103 => 21,  99 => 20,  96 => 19,  93 => 18,  85 => 16,  80 => 15,  75 => 14,  73 => 13,  68 => 11,  64 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    <h1>Lista wszystkich osób</h1>

    {% for person in persons %}

            <p>{{ person.name }}
                {{ person.surname }}</p>

            {% if person.addres is defined %}
                {% for address in person.addres %}
                    <p>{{ address.city }}</p>
                    {{ address.street }}</p>
                    {% endfor %}
            {% endif %}

            <a class=\"btn btn-primary btn-xs\" href=\"/delete/{{ person.id }}\">Usuń</a>
            <a class=\"btn btn-primary btn-xs\" href=\"/edit/{{ person.id }}\">Zmień</a>
        <hr>

    {% endfor %}
{% endblock %}
", "AppBundle:Person:show_all.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/show_all.html.twig");
    }
}
