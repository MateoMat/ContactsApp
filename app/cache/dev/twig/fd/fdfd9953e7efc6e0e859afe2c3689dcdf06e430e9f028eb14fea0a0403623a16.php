<?php

/* AppBundle:Person:show_person.html.twig */
class __TwigTemplate_2c1ad7782362eb5db0d139233121f70f5ba9487020cd3650178172663f921929 extends Twig_Template
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
        $__internal_92b834aae53afebbb582ccbbdc6683e6c24e4c71e8c22a4bd00177b1c53f7d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b834aae53afebbb582ccbbdc6683e6c24e4c71e8c22a4bd00177b1c53f7d4c->enter($__internal_92b834aae53afebbb582ccbbdc6683e6c24e4c71e8c22a4bd00177b1c53f7d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:show_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b834aae53afebbb582ccbbdc6683e6c24e4c71e8c22a4bd00177b1c53f7d4c->leave($__internal_92b834aae53afebbb582ccbbdc6683e6c24e4c71e8c22a4bd00177b1c53f7d4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_684f7364d67f5785a1ba9d20b53bb062d2823d5eb6e4f75c3904ac8d0abb9c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684f7364d67f5785a1ba9d20b53bb062d2823d5eb6e4f75c3904ac8d0abb9c14->enter($__internal_684f7364d67f5785a1ba9d20b53bb062d2823d5eb6e4f75c3904ac8d0abb9c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Szczegóły kontaktu :";
        
        $__internal_684f7364d67f5785a1ba9d20b53bb062d2823d5eb6e4f75c3904ac8d0abb9c14->leave($__internal_684f7364d67f5785a1ba9d20b53bb062d2823d5eb6e4f75c3904ac8d0abb9c14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04a274ddf2aeb909800af41fe367bd8d2db72f21186eae0ad5857296da8235f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a274ddf2aeb909800af41fe367bd8d2db72f21186eae0ad5857296da8235f5->enter($__internal_04a274ddf2aeb909800af41fe367bd8d2db72f21186eae0ad5857296da8235f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"jumbotron\">Szczegółowe dane o kontakcie:</h1><br>

    <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 8, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 8, $this->getSourceContext()); })()), "surname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 8, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</p>

    ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["person"] ?? null), "addres", array(), "any", true, true)) {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 11, $this->getSourceContext()); })()), "addres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 12
                echo "            <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "city", array()), "html", null, true);
                echo "</p>
            ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "street", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "number1", array()), "html", null, true);
                echo " 
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "number2", array())) {
                    // line 15
                    echo "                /";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "number2", array()), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["person"] ?? null), "email", array(), "any", true, true)) {
                // line 20
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 20, $this->getSourceContext()); })()), "email", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["emails"]) {
                    // line 21
                    echo "        <p><b>adres e-mail: </b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["emails"], "email", array()), "html", null, true);
                    echo "</p>

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emails'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 25
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["person"] ?? null), "phone", array(), "any", true, true)) {
                // line 26
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 26, $this->getSourceContext()); })()), "phone", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["phones"]) {
                    // line 27
                    echo "                <p><b>Numer telefonu: </b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["phones"], "number", array()), "html", null, true);
                    echo "</p>

            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phones'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "        ";
            }
        }
        // line 32
        echo "
<a href=\"/showAll\" class=\"btn btn-primary\">Wróć na listę</a>

";
        
        $__internal_04a274ddf2aeb909800af41fe367bd8d2db72f21186eae0ad5857296da8235f5->leave($__internal_04a274ddf2aeb909800af41fe367bd8d2db72f21186eae0ad5857296da8235f5_prof);

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
        return array (  142 => 32,  138 => 30,  128 => 27,  123 => 26,  120 => 25,  109 => 21,  104 => 20,  102 => 19,  99 => 18,  92 => 16,  86 => 15,  84 => 14,  78 => 13,  73 => 12,  68 => 11,  66 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
        <p><b>adres e-mail: </b>{{ emails.email }}</p>

    {% endfor %}
{% endif %}
        {% if person.phone is defined %}
            {% for phones in person.phone %}
                <p><b>Numer telefonu: </b>{{ phones.number }}</p>

            {% endfor %}
        {% endif %}
{% endif %}

<a href=\"/showAll\" class=\"btn btn-primary\">Wróć na listę</a>

{% endblock %}
", "AppBundle:Person:show_person.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/show_person.html.twig");
    }
}
