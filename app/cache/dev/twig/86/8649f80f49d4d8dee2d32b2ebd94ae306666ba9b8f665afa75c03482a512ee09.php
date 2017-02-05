<?php

/* base.html.twig */
class __TwigTemplate_6dffbf7974ffeed9121617d2d9005a4c1ac16569b86c8052a9357da3ffc6fcc5 extends Twig_Template
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
        $__internal_af3a3814ac5ed1227f431ed91980d2ad9b845ea4c54df60425b9f14a3c63ca1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3a3814ac5ed1227f431ed91980d2ad9b845ea4c54df60425b9f14a3c63ca1e->enter($__internal_af3a3814ac5ed1227f431ed91980d2ad9b845ea4c54df60425b9f14a3c63ca1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
</head>
<body>
    {

        <div class=\"container\">
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "    </div>
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_af3a3814ac5ed1227f431ed91980d2ad9b845ea4c54df60425b9f14a3c63ca1e->leave($__internal_af3a3814ac5ed1227f431ed91980d2ad9b845ea4c54df60425b9f14a3c63ca1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45bc96befecfa742eef6255e37ac93824d292990b51ebd79863a2b557e184c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bc96befecfa742eef6255e37ac93824d292990b51ebd79863a2b557e184c1d->enter($__internal_45bc96befecfa742eef6255e37ac93824d292990b51ebd79863a2b557e184c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_45bc96befecfa742eef6255e37ac93824d292990b51ebd79863a2b557e184c1d->leave($__internal_45bc96befecfa742eef6255e37ac93824d292990b51ebd79863a2b557e184c1d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76c47c81b5eda20e3d2b55292a0e3515da374c083fde2fad1159ac3e74917fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c47c81b5eda20e3d2b55292a0e3515da374c083fde2fad1159ac3e74917fc7->enter($__internal_76c47c81b5eda20e3d2b55292a0e3515da374c083fde2fad1159ac3e74917fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_76c47c81b5eda20e3d2b55292a0e3515da374c083fde2fad1159ac3e74917fc7->leave($__internal_76c47c81b5eda20e3d2b55292a0e3515da374c083fde2fad1159ac3e74917fc7_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_925068921f89f7445f607cb32fb678986a802b777d88684b2127ff83a8503c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925068921f89f7445f607cb32fb678986a802b777d88684b2127ff83a8503c0d->enter($__internal_925068921f89f7445f607cb32fb678986a802b777d88684b2127ff83a8503c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_925068921f89f7445f607cb32fb678986a802b777d88684b2127ff83a8503c0d->leave($__internal_925068921f89f7445f607cb32fb678986a802b777d88684b2127ff83a8503c0d_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb0fa561ff87f6846535cda03610240fee0c6a1e36919cb43cef4396343a3a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0fa561ff87f6846535cda03610240fee0c6a1e36919cb43cef4396343a3a24->enter($__internal_cb0fa561ff87f6846535cda03610240fee0c6a1e36919cb43cef4396343a3a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
    ";
        
        $__internal_cb0fa561ff87f6846535cda03610240fee0c6a1e36919cb43cef4396343a3a24->leave($__internal_cb0fa561ff87f6846535cda03610240fee0c6a1e36919cb43cef4396343a3a24_prof);

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
        return array (  111 => 21,  105 => 20,  94 => 18,  83 => 6,  71 => 5,  60 => 23,  58 => 20,  55 => 19,  53 => 18,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
</head>
<body>
    {

        <div class=\"container\">
        {% block body %}{% endblock %}
    </div>
    {% block javascripts %}

    {% endblock %}
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "base.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/app/Resources/views/base.html.twig");
    }
}
