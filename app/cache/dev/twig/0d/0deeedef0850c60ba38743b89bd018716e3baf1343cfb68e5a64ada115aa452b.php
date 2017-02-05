<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a5e3450a314e10b6ab4d2a078e73b97fd8d5ffa6a9c82360e187c1362bdaf770 extends Twig_Template
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
        $__internal_35f8e3b045c2a6736f977916b1d085fa9276c50565383aeda91d1c6dcc9e5d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f8e3b045c2a6736f977916b1d085fa9276c50565383aeda91d1c6dcc9e5d13->enter($__internal_35f8e3b045c2a6736f977916b1d085fa9276c50565383aeda91d1c6dcc9e5d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f8e3b045c2a6736f977916b1d085fa9276c50565383aeda91d1c6dcc9e5d13->leave($__internal_35f8e3b045c2a6736f977916b1d085fa9276c50565383aeda91d1c6dcc9e5d13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9abfd11c3d64ca730021f3e39a238fc9743f1f956a51f6abe2ff598a2f492b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abfd11c3d64ca730021f3e39a238fc9743f1f956a51f6abe2ff598a2f492b39->enter($__internal_9abfd11c3d64ca730021f3e39a238fc9743f1f956a51f6abe2ff598a2f492b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9abfd11c3d64ca730021f3e39a238fc9743f1f956a51f6abe2ff598a2f492b39->leave($__internal_9abfd11c3d64ca730021f3e39a238fc9743f1f956a51f6abe2ff598a2f492b39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7c8676b308f16bd2a4f01240094fa4d1da3351d9e4360920a693bead29dbe7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c8676b308f16bd2a4f01240094fa4d1da3351d9e4360920a693bead29dbe7f->enter($__internal_f7c8676b308f16bd2a4f01240094fa4d1da3351d9e4360920a693bead29dbe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7c8676b308f16bd2a4f01240094fa4d1da3351d9e4360920a693bead29dbe7f->leave($__internal_f7c8676b308f16bd2a4f01240094fa4d1da3351d9e4360920a693bead29dbe7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_091ee82d8a0d360e2d9a03f18d7892ad77b20cac68a3acd8ec5605d2ee7a079c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091ee82d8a0d360e2d9a03f18d7892ad77b20cac68a3acd8ec5605d2ee7a079c->enter($__internal_091ee82d8a0d360e2d9a03f18d7892ad77b20cac68a3acd8ec5605d2ee7a079c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_091ee82d8a0d360e2d9a03f18d7892ad77b20cac68a3acd8ec5605d2ee7a079c->leave($__internal_091ee82d8a0d360e2d9a03f18d7892ad77b20cac68a3acd8ec5605d2ee7a079c_prof);

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
