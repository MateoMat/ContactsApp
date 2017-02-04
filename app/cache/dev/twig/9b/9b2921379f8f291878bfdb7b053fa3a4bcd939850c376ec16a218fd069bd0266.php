<?php

/* ::base.html.twig */
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
        $__internal_e620a4cd0804d511c1c3059b5e9cc63d8634f60df72b2cdc8c4dc02592ed60ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e620a4cd0804d511c1c3059b5e9cc63d8634f60df72b2cdc8c4dc02592ed60ff->enter($__internal_e620a4cd0804d511c1c3059b5e9cc63d8634f60df72b2cdc8c4dc02592ed60ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e620a4cd0804d511c1c3059b5e9cc63d8634f60df72b2cdc8c4dc02592ed60ff->leave($__internal_e620a4cd0804d511c1c3059b5e9cc63d8634f60df72b2cdc8c4dc02592ed60ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3cf035623e2d3f2627a4f4703f6c80a6a23def983571ffeb8ec0cbab3a77a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3cf035623e2d3f2627a4f4703f6c80a6a23def983571ffeb8ec0cbab3a77a0->enter($__internal_6f3cf035623e2d3f2627a4f4703f6c80a6a23def983571ffeb8ec0cbab3a77a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f3cf035623e2d3f2627a4f4703f6c80a6a23def983571ffeb8ec0cbab3a77a0->leave($__internal_6f3cf035623e2d3f2627a4f4703f6c80a6a23def983571ffeb8ec0cbab3a77a0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2475ceba1f91770e9f141c5da31be61be973ed3688b340ae73aa8d618a5b8360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2475ceba1f91770e9f141c5da31be61be973ed3688b340ae73aa8d618a5b8360->enter($__internal_2475ceba1f91770e9f141c5da31be61be973ed3688b340ae73aa8d618a5b8360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2475ceba1f91770e9f141c5da31be61be973ed3688b340ae73aa8d618a5b8360->leave($__internal_2475ceba1f91770e9f141c5da31be61be973ed3688b340ae73aa8d618a5b8360_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_17fa2806886fa804d1f91d0d83038a90a91a2ec75fca7c0805b8ece511c7a045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fa2806886fa804d1f91d0d83038a90a91a2ec75fca7c0805b8ece511c7a045->enter($__internal_17fa2806886fa804d1f91d0d83038a90a91a2ec75fca7c0805b8ece511c7a045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_17fa2806886fa804d1f91d0d83038a90a91a2ec75fca7c0805b8ece511c7a045->leave($__internal_17fa2806886fa804d1f91d0d83038a90a91a2ec75fca7c0805b8ece511c7a045_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f09acdca2cd6d0675afd656d09f405b17ec027399ffc7d74450828119207559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f09acdca2cd6d0675afd656d09f405b17ec027399ffc7d74450828119207559->enter($__internal_9f09acdca2cd6d0675afd656d09f405b17ec027399ffc7d74450828119207559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
    ";
        
        $__internal_9f09acdca2cd6d0675afd656d09f405b17ec027399ffc7d74450828119207559->leave($__internal_9f09acdca2cd6d0675afd656d09f405b17ec027399ffc7d74450828119207559_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  105 => 20,  94 => 18,  83 => 6,  71 => 5,  60 => 23,  58 => 20,  55 => 19,  53 => 18,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "::base.html.twig", "/Users/mateusz/Desktop/php/ContactsApp/app/Resources/views/base.html.twig");
    }
}
