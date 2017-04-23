<?php

/* ::base.html.twig */
class __TwigTemplate_7571a55c2f72cc40ffd7c1fd74433f92b94cb0af4a15297603fd706994bf7f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c610ec77db1d48764f85063fd214dc52e91edf9386db654243c536613b87e328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c610ec77db1d48764f85063fd214dc52e91edf9386db654243c536613b87e328->enter($__internal_c610ec77db1d48764f85063fd214dc52e91edf9386db654243c536613b87e328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "    </body>
</html>
";
        
        $__internal_c610ec77db1d48764f85063fd214dc52e91edf9386db654243c536613b87e328->leave($__internal_c610ec77db1d48764f85063fd214dc52e91edf9386db654243c536613b87e328_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7935a806b58d1f2b469ecc70b0c54ee7198145adc56309a3cf4cdf9399f49733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7935a806b58d1f2b469ecc70b0c54ee7198145adc56309a3cf4cdf9399f49733->enter($__internal_7935a806b58d1f2b469ecc70b0c54ee7198145adc56309a3cf4cdf9399f49733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7935a806b58d1f2b469ecc70b0c54ee7198145adc56309a3cf4cdf9399f49733->leave($__internal_7935a806b58d1f2b469ecc70b0c54ee7198145adc56309a3cf4cdf9399f49733_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_647caf3c746fc0539b737c3961a4cf799084bd3b1cc41143988d94a659d8343d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647caf3c746fc0539b737c3961a4cf799084bd3b1cc41143988d94a659d8343d->enter($__internal_647caf3c746fc0539b737c3961a4cf799084bd3b1cc41143988d94a659d8343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_647caf3c746fc0539b737c3961a4cf799084bd3b1cc41143988d94a659d8343d->leave($__internal_647caf3c746fc0539b737c3961a4cf799084bd3b1cc41143988d94a659d8343d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eae40bb65db19ff08d4a38a1270e1947f4b48dc254f8631fb6b8a2bf238c959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eae40bb65db19ff08d4a38a1270e1947f4b48dc254f8631fb6b8a2bf238c959->enter($__internal_8eae40bb65db19ff08d4a38a1270e1947f4b48dc254f8631fb6b8a2bf238c959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8eae40bb65db19ff08d4a38a1270e1947f4b48dc254f8631fb6b8a2bf238c959->leave($__internal_8eae40bb65db19ff08d4a38a1270e1947f4b48dc254f8631fb6b8a2bf238c959_prof);

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
        return array (  77 => 10,  66 => 6,  55 => 5,  46 => 11,  44 => 10,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/feniks/umbrella/loc/app/Resources/views/base.html.twig");
    }
}
