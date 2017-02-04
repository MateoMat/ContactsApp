<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b8ed2d88407f464f7e350fad696f9fb9ebf54420b8ec60c615ba008fa35451ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1d8e091d83a283b56dab718fc188981ed941b87ca63e7106a96adde7bcc2fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d8e091d83a283b56dab718fc188981ed941b87ca63e7106a96adde7bcc2fba->enter($__internal_d1d8e091d83a283b56dab718fc188981ed941b87ca63e7106a96adde7bcc2fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d8e091d83a283b56dab718fc188981ed941b87ca63e7106a96adde7bcc2fba->leave($__internal_d1d8e091d83a283b56dab718fc188981ed941b87ca63e7106a96adde7bcc2fba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_837170b67925d089f70da867763db101979b50c84c2533c2c71ba532c302fd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837170b67925d089f70da867763db101979b50c84c2533c2c71ba532c302fd99->enter($__internal_837170b67925d089f70da867763db101979b50c84c2533c2c71ba532c302fd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_837170b67925d089f70da867763db101979b50c84c2533c2c71ba532c302fd99->leave($__internal_837170b67925d089f70da867763db101979b50c84c2533c2c71ba532c302fd99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e92de2717bf5bcd5de619d3600d0e9c7d6aad7b64b138698060cbcb12d4e88fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92de2717bf5bcd5de619d3600d0e9c7d6aad7b64b138698060cbcb12d4e88fc->enter($__internal_e92de2717bf5bcd5de619d3600d0e9c7d6aad7b64b138698060cbcb12d4e88fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e92de2717bf5bcd5de619d3600d0e9c7d6aad7b64b138698060cbcb12d4e88fc->leave($__internal_e92de2717bf5bcd5de619d3600d0e9c7d6aad7b64b138698060cbcb12d4e88fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_851013a5cb53dc040499c448b5f10a93391457bb05ab10cb2a908c464d4c7b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851013a5cb53dc040499c448b5f10a93391457bb05ab10cb2a908c464d4c7b85->enter($__internal_851013a5cb53dc040499c448b5f10a93391457bb05ab10cb2a908c464d4c7b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_851013a5cb53dc040499c448b5f10a93391457bb05ab10cb2a908c464d4c7b85->leave($__internal_851013a5cb53dc040499c448b5f10a93391457bb05ab10cb2a908c464d4c7b85_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
