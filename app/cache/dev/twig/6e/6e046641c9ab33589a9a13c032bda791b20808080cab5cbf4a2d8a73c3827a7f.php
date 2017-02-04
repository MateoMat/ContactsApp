<?php

/* AppBundle:Person:show_person.html.twig */
class __TwigTemplate_f301f76e3cb3721ad9b444fc18f81871d42cb5c212f9b859025516af60d1e5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Person:show_person.html.twig", 1);
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
        $__internal_9de40c6ddc64eb8d806d17b88dc422bf1d603a3baa672273d87724ef57f7fc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de40c6ddc64eb8d806d17b88dc422bf1d603a3baa672273d87724ef57f7fc8a->enter($__internal_9de40c6ddc64eb8d806d17b88dc422bf1d603a3baa672273d87724ef57f7fc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:show_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de40c6ddc64eb8d806d17b88dc422bf1d603a3baa672273d87724ef57f7fc8a->leave($__internal_9de40c6ddc64eb8d806d17b88dc422bf1d603a3baa672273d87724ef57f7fc8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b18d2203931c7bab0e87e3831614d3da49b3f28d5a4515a3446f7d49d0292abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18d2203931c7bab0e87e3831614d3da49b3f28d5a4515a3446f7d49d0292abc->enter($__internal_b18d2203931c7bab0e87e3831614d3da49b3f28d5a4515a3446f7d49d0292abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Szczegóły kontaktu :";
        
        $__internal_b18d2203931c7bab0e87e3831614d3da49b3f28d5a4515a3446f7d49d0292abc->leave($__internal_b18d2203931c7bab0e87e3831614d3da49b3f28d5a4515a3446f7d49d0292abc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_150d46436f792b498d13acd5751ff0e629080e33629db1c783f36e32a63e8738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150d46436f792b498d13acd5751ff0e629080e33629db1c783f36e32a63e8738->enter($__internal_150d46436f792b498d13acd5751ff0e629080e33629db1c783f36e32a63e8738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"jumbotron\">Szczegółowe dane o kontakcie:</h1><br>

    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "</p>

    ";
        // line 10
        if ($this->getAttribute(($context["person"] ?? null), "addres", array(), "any", true, true)) {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "addres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 12
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
                echo "</p>
            ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "number1", array()), "html", null, true);
                echo " 
            ";
                // line 14
                if ($this->getAttribute($context["address"], "number2", array())) {
                    // line 15
                    echo "                /";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "number2", array()), "html", null, true);
                    echo "
            ";
                }
                // line 16
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
";
            // line 19
            if ($this->getAttribute(($context["person"] ?? null), "email", array(), "any", true, true)) {
                // line 20
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "email", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["emails"]) {
                    // line 21
                    echo "        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["emails"], "email", array()), "html", null, true);
                    echo "</p>

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emails'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 26
        echo "
<a href=\"/showAll\" class=\"btn btn-primary\">Wróć na listę</a>

";
        
        $__internal_150d46436f792b498d13acd5751ff0e629080e33629db1c783f36e32a63e8738->leave($__internal_150d46436f792b498d13acd5751ff0e629080e33629db1c783f36e32a63e8738_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Person:show_person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 26,  109 => 21,  104 => 20,  102 => 19,  99 => 18,  92 => 16,  86 => 15,  84 => 14,  78 => 13,  73 => 12,  68 => 11,  66 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Szczegóły kontaktu :{% endblock %}

{% block body %}
    <h1 class=\"jumbotron\">Szczegółowe dane o kontakcie:</h1><br>

    <p>{{ person.name }} {{ person.surname }} {{ person.id }}</p>

    {% if person.addres is defined %}
        {% for address in person.addres %}
            <p>{{ address.city }}</p>
            {{ address.street }} {{ address.number1 }} 
            {% if address.number2 %}
                /{{ address.number2 }}
            {% endif %}</p>
    {% endfor %}

{% if person.email is defined %}
    {% for emails in person.email %}
        <p>{{ emails.email }}</p>

    {% endfor %}
{% endif %}
{% endif %}

<a href=\"/showAll\" class=\"btn btn-primary\">Wróć na listę</a>

{% endblock %}
", "AppBundle:Person:show_person.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/show_person.html.twig");
    }
}
