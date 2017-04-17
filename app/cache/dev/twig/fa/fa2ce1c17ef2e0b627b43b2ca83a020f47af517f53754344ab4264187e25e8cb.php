<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b24957bc045dd2a6bc9f8ac23382c13c6970fbe25944bc0a53ce12b2c04cb90 extends Twig_Template
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
        $__internal_01959966e661dfbc617b2c67b6f5eea217f5a51755fced91b0d6995a655eb4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01959966e661dfbc617b2c67b6f5eea217f5a51755fced91b0d6995a655eb4b7->enter($__internal_01959966e661dfbc617b2c67b6f5eea217f5a51755fced91b0d6995a655eb4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01959966e661dfbc617b2c67b6f5eea217f5a51755fced91b0d6995a655eb4b7->leave($__internal_01959966e661dfbc617b2c67b6f5eea217f5a51755fced91b0d6995a655eb4b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_666f0ae7422306576bef665f8ca62f74e5d80152fabdbefed1e666ae82165c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666f0ae7422306576bef665f8ca62f74e5d80152fabdbefed1e666ae82165c14->enter($__internal_666f0ae7422306576bef665f8ca62f74e5d80152fabdbefed1e666ae82165c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_666f0ae7422306576bef665f8ca62f74e5d80152fabdbefed1e666ae82165c14->leave($__internal_666f0ae7422306576bef665f8ca62f74e5d80152fabdbefed1e666ae82165c14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c56c317e2a161959b36641669eb9779bb8a66d1fcd8f2ede4f4fb452a82aae9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56c317e2a161959b36641669eb9779bb8a66d1fcd8f2ede4f4fb452a82aae9a->enter($__internal_c56c317e2a161959b36641669eb9779bb8a66d1fcd8f2ede4f4fb452a82aae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c56c317e2a161959b36641669eb9779bb8a66d1fcd8f2ede4f4fb452a82aae9a->leave($__internal_c56c317e2a161959b36641669eb9779bb8a66d1fcd8f2ede4f4fb452a82aae9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc0c59b41e63d0279dc160cff5c377da9310e9b119a8316cf700075ee98ed6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0c59b41e63d0279dc160cff5c377da9310e9b119a8316cf700075ee98ed6f8->enter($__internal_dc0c59b41e63d0279dc160cff5c377da9310e9b119a8316cf700075ee98ed6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc0c59b41e63d0279dc160cff5c377da9310e9b119a8316cf700075ee98ed6f8->leave($__internal_dc0c59b41e63d0279dc160cff5c377da9310e9b119a8316cf700075ee98ed6f8_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/feniks/umbrella/loc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
