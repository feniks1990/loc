<?php

/* urlurlGenBundle:Default:index.html.twig */
class __TwigTemplate_262974798609ac4e46655e95d78a5afb967a7907bba39f18f3eff46bd8e9f5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "urlurlGenBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_555328cf5110ad87ddb86248c1ed83ee5aee899d5c5951f7cc1695daa7ee05dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555328cf5110ad87ddb86248c1ed83ee5aee899d5c5951f7cc1695daa7ee05dd->enter($__internal_555328cf5110ad87ddb86248c1ed83ee5aee899d5c5951f7cc1695daa7ee05dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "urlurlGenBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_555328cf5110ad87ddb86248c1ed83ee5aee899d5c5951f7cc1695daa7ee05dd->leave($__internal_555328cf5110ad87ddb86248c1ed83ee5aee899d5c5951f7cc1695daa7ee05dd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_684f3256bfccb965f5612a43041e71451f209ab7de8f1d9f131911f6f9b014b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684f3256bfccb965f5612a43041e71451f209ab7de8f1d9f131911f6f9b014b0->enter($__internal_684f3256bfccb965f5612a43041e71451f209ab7de8f1d9f131911f6f9b014b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/inde.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_684f3256bfccb965f5612a43041e71451f209ab7de8f1d9f131911f6f9b014b0->leave($__internal_684f3256bfccb965f5612a43041e71451f209ab7de8f1d9f131911f6f9b014b0_prof);

    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_42adb18caaf5477192ed8b048cdb7b2aafb552a8a94dabc066dfe40c5c6d144c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42adb18caaf5477192ed8b048cdb7b2aafb552a8a94dabc066dfe40c5c6d144c->enter($__internal_42adb18caaf5477192ed8b048cdb7b2aafb552a8a94dabc066dfe40c5c6d144c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 8
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/angular.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_42adb18caaf5477192ed8b048cdb7b2aafb552a8a94dabc066dfe40c5c6d144c->leave($__internal_42adb18caaf5477192ed8b048cdb7b2aafb552a8a94dabc066dfe40c5c6d144c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8b0e90d6302d90664b0ed4d03a24550e76c108e34e9d0d7069194b9c3ff8b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b0e90d6302d90664b0ed4d03a24550e76c108e34e9d0d7069194b9c3ff8b41->enter($__internal_a8b0e90d6302d90664b0ed4d03a24550e76c108e34e9d0d7069194b9c3ff8b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <h1>Проверка</h1>
";
        
        $__internal_a8b0e90d6302d90664b0ed4d03a24550e76c108e34e9d0d7069194b9c3ff8b41->leave($__internal_a8b0e90d6302d90664b0ed4d03a24550e76c108e34e9d0d7069194b9c3ff8b41_prof);

    }

    public function getTemplateName()
    {
        return "urlurlGenBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  80 => 13,  71 => 10,  67 => 9,  62 => 8,  56 => 7,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/inde.css') }}\" >
        <link rel=\"stylesheet\" href=\"{{ asset('js/bootstrap-3/css/bootstrap.css') }}\">
    {% endblock %}
    {% block javascript %}
        <script src=\"{{ asset('js/angular.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap-3/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    {% endblock %}

{% block body %}
    <h1>Проверка</h1>
{% endblock %}", "urlurlGenBundle:Default:index.html.twig", "/home/feniks/umbrella/loc/src/url/urlGenBundle/Resources/views/Default/index.html.twig");
    }
}
