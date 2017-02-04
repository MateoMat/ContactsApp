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
        $__internal_efbb9af304e1bc3111d947030fb85aec2dccfd963fc39b9676fe54ce1a3cb8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbb9af304e1bc3111d947030fb85aec2dccfd963fc39b9676fe54ce1a3cb8c9->enter($__internal_efbb9af304e1bc3111d947030fb85aec2dccfd963fc39b9676fe54ce1a3cb8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Person:show_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efbb9af304e1bc3111d947030fb85aec2dccfd963fc39b9676fe54ce1a3cb8c9->leave($__internal_efbb9af304e1bc3111d947030fb85aec2dccfd963fc39b9676fe54ce1a3cb8c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bd6105fe792893b6009f58594204d9f1550e4eb965aa93ba9ff3a51c075a138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd6105fe792893b6009f58594204d9f1550e4eb965aa93ba9ff3a51c075a138->enter($__internal_7bd6105fe792893b6009f58594204d9f1550e4eb965aa93ba9ff3a51c075a138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Person:showPerson";
        
        $__internal_7bd6105fe792893b6009f58594204d9f1550e4eb965aa93ba9ff3a51c075a138->leave($__internal_7bd6105fe792893b6009f58594204d9f1550e4eb965aa93ba9ff3a51c075a138_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a5f3d242bd659ee58dd62af4862664612a3a0475eaa5814d2ce1fb72e98886a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5f3d242bd659ee58dd62af4862664612a3a0475eaa5814d2ce1fb72e98886a->enter($__internal_2a5f3d242bd659ee58dd62af4862664612a3a0475eaa5814d2ce1fb72e98886a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Person:showPerson page</h1>

<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo "</p>
<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</p>

";
        
        $__internal_2a5f3d242bd659ee58dd62af4862664612a3a0475eaa5814d2ce1fb72e98886a->leave($__internal_2a5f3d242bd659ee58dd62af4862664612a3a0475eaa5814d2ce1fb72e98886a_prof);

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
        return array (  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}AppBundle:Person:showPerson{% endblock %}

{% block body %}
<h1>Welcome to the Person:showPerson page</h1>

<p>{{ person.name }}</p>
<p>{{ person.surname }}</p>

{% endblock %}
", "AppBundle:Person:show_person.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/src/AppBundle/Resources/views/Person/show_person.html.twig");
    }
}
