<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_89c7021ddd755d62b46b1abeabd567c52a37e98a7b5f046d58da1985e63ef83d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b340b39f09827028c838ca812b0c7259a43b080129e40e74109c99a3bdc17d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b340b39f09827028c838ca812b0c7259a43b080129e40e74109c99a3bdc17d2->enter($__internal_2b340b39f09827028c838ca812b0c7259a43b080129e40e74109c99a3bdc17d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b340b39f09827028c838ca812b0c7259a43b080129e40e74109c99a3bdc17d2->leave($__internal_2b340b39f09827028c838ca812b0c7259a43b080129e40e74109c99a3bdc17d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b58872e2d0b061d3a0bc8d898bee4f0c9fc0d3e421fcdbbb6af706f4b4ca7a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58872e2d0b061d3a0bc8d898bee4f0c9fc0d3e421fcdbbb6af706f4b4ca7a57->enter($__internal_b58872e2d0b061d3a0bc8d898bee4f0c9fc0d3e421fcdbbb6af706f4b4ca7a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b58872e2d0b061d3a0bc8d898bee4f0c9fc0d3e421fcdbbb6af706f4b4ca7a57->leave($__internal_b58872e2d0b061d3a0bc8d898bee4f0c9fc0d3e421fcdbbb6af706f4b4ca7a57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82dd5d4b425ad0c1ceb6c6f60ef5fec60162f81295e6b40b849e80e6a2d34579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82dd5d4b425ad0c1ceb6c6f60ef5fec60162f81295e6b40b849e80e6a2d34579->enter($__internal_82dd5d4b425ad0c1ceb6c6f60ef5fec60162f81295e6b40b849e80e6a2d34579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_82dd5d4b425ad0c1ceb6c6f60ef5fec60162f81295e6b40b849e80e6a2d34579->leave($__internal_82dd5d4b425ad0c1ceb6c6f60ef5fec60162f81295e6b40b849e80e6a2d34579_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab061fd292f7552ca146c2ba974e79d390c2fe0a2d6a36a9b08b11b0b9b8ffa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab061fd292f7552ca146c2ba974e79d390c2fe0a2d6a36a9b08b11b0b9b8ffa9->enter($__internal_ab061fd292f7552ca146c2ba974e79d390c2fe0a2d6a36a9b08b11b0b9b8ffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab061fd292f7552ca146c2ba974e79d390c2fe0a2d6a36a9b08b11b0b9b8ffa9->leave($__internal_ab061fd292f7552ca146c2ba974e79d390c2fe0a2d6a36a9b08b11b0b9b8ffa9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
