<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_119dc5ef2a052258437e6dd1b2b7e3fbc43b8fb211c3f579567a0c6c0a925e48 extends Twig_Template
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
        $__internal_91822efa68f49ffa19ce028444fb29b5b55d29e2bcfdfbf1745fb74e286b2fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91822efa68f49ffa19ce028444fb29b5b55d29e2bcfdfbf1745fb74e286b2fbd->enter($__internal_91822efa68f49ffa19ce028444fb29b5b55d29e2bcfdfbf1745fb74e286b2fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91822efa68f49ffa19ce028444fb29b5b55d29e2bcfdfbf1745fb74e286b2fbd->leave($__internal_91822efa68f49ffa19ce028444fb29b5b55d29e2bcfdfbf1745fb74e286b2fbd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acc8236e6c990421825b957d26d8388b136ddac52288a2c1cd80370235b37d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc8236e6c990421825b957d26d8388b136ddac52288a2c1cd80370235b37d0b->enter($__internal_acc8236e6c990421825b957d26d8388b136ddac52288a2c1cd80370235b37d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_acc8236e6c990421825b957d26d8388b136ddac52288a2c1cd80370235b37d0b->leave($__internal_acc8236e6c990421825b957d26d8388b136ddac52288a2c1cd80370235b37d0b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78e8d9d5b93912b7aee61a89ed175200af3c92a2f52e968f62e380820071c07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e8d9d5b93912b7aee61a89ed175200af3c92a2f52e968f62e380820071c07d->enter($__internal_78e8d9d5b93912b7aee61a89ed175200af3c92a2f52e968f62e380820071c07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78e8d9d5b93912b7aee61a89ed175200af3c92a2f52e968f62e380820071c07d->leave($__internal_78e8d9d5b93912b7aee61a89ed175200af3c92a2f52e968f62e380820071c07d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8664cc93df4cea0d84edbda650d954175c85c884888b468e5801186c8c21c75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8664cc93df4cea0d84edbda650d954175c85c884888b468e5801186c8c21c75d->enter($__internal_8664cc93df4cea0d84edbda650d954175c85c884888b468e5801186c8c21c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8664cc93df4cea0d84edbda650d954175c85c884888b468e5801186c8c21c75d->leave($__internal_8664cc93df4cea0d84edbda650d954175c85c884888b468e5801186c8c21c75d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
