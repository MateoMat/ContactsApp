<?php

/* base.html.twig */
class __TwigTemplate_c6522083414c753896cac89fceef972675071bb2fca507d19e6a3b0e5bd83ada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_568648ff9b5490dc605d9c0f63b0671949eea86684a12dd40e3bd533bfc21db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568648ff9b5490dc605d9c0f63b0671949eea86684a12dd40e3bd533bfc21db6->enter($__internal_568648ff9b5490dc605d9c0f63b0671949eea86684a12dd40e3bd533bfc21db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_568648ff9b5490dc605d9c0f63b0671949eea86684a12dd40e3bd533bfc21db6->leave($__internal_568648ff9b5490dc605d9c0f63b0671949eea86684a12dd40e3bd533bfc21db6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b072500c7637da7612c9ae4ae88f3cf95d873e05b87c146f88db7a2610e9ddec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b072500c7637da7612c9ae4ae88f3cf95d873e05b87c146f88db7a2610e9ddec->enter($__internal_b072500c7637da7612c9ae4ae88f3cf95d873e05b87c146f88db7a2610e9ddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b072500c7637da7612c9ae4ae88f3cf95d873e05b87c146f88db7a2610e9ddec->leave($__internal_b072500c7637da7612c9ae4ae88f3cf95d873e05b87c146f88db7a2610e9ddec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cffb781282492455193b6bc9ea90532a6d68a817538e1d248aea6ba8887e898b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffb781282492455193b6bc9ea90532a6d68a817538e1d248aea6ba8887e898b->enter($__internal_cffb781282492455193b6bc9ea90532a6d68a817538e1d248aea6ba8887e898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cffb781282492455193b6bc9ea90532a6d68a817538e1d248aea6ba8887e898b->leave($__internal_cffb781282492455193b6bc9ea90532a6d68a817538e1d248aea6ba8887e898b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_825ae5e12beb366b9af5836b9ccbcf28ffdd8cf3f5a17e69931b0dd055bccde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825ae5e12beb366b9af5836b9ccbcf28ffdd8cf3f5a17e69931b0dd055bccde9->enter($__internal_825ae5e12beb366b9af5836b9ccbcf28ffdd8cf3f5a17e69931b0dd055bccde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_825ae5e12beb366b9af5836b9ccbcf28ffdd8cf3f5a17e69931b0dd055bccde9->leave($__internal_825ae5e12beb366b9af5836b9ccbcf28ffdd8cf3f5a17e69931b0dd055bccde9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42a2336006d19713158002d468d3402bc8ce5ddd8f27d222a35ebce6a5c34b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a2336006d19713158002d468d3402bc8ce5ddd8f27d222a35ebce6a5c34b6d->enter($__internal_42a2336006d19713158002d468d3402bc8ce5ddd8f27d222a35ebce6a5c34b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42a2336006d19713158002d468d3402bc8ce5ddd8f27d222a35ebce6a5c34b6d->leave($__internal_42a2336006d19713158002d468d3402bc8ce5ddd8f27d222a35ebce6a5c34b6d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/app/Resources/views/base.html.twig");
    }
}
