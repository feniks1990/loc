<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d766b3183f9b960794aa8b455f00582d74600a1a4cce48aa9b6cdb7fbd30d743 extends Twig_Template
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
        $__internal_e0ade0bf70223ebfa37a2b4a9e40ddbbc20671db2b67d06f788f36e8738e5516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ade0bf70223ebfa37a2b4a9e40ddbbc20671db2b67d06f788f36e8738e5516->enter($__internal_e0ade0bf70223ebfa37a2b4a9e40ddbbc20671db2b67d06f788f36e8738e5516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ade0bf70223ebfa37a2b4a9e40ddbbc20671db2b67d06f788f36e8738e5516->leave($__internal_e0ade0bf70223ebfa37a2b4a9e40ddbbc20671db2b67d06f788f36e8738e5516_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07c7f0eacb7bc377e0ec4cf848714b9f36f637d96309f999b5fe410494873492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c7f0eacb7bc377e0ec4cf848714b9f36f637d96309f999b5fe410494873492->enter($__internal_07c7f0eacb7bc377e0ec4cf848714b9f36f637d96309f999b5fe410494873492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07c7f0eacb7bc377e0ec4cf848714b9f36f637d96309f999b5fe410494873492->leave($__internal_07c7f0eacb7bc377e0ec4cf848714b9f36f637d96309f999b5fe410494873492_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7cdbde07c396401e7a942e8d92c47da156b293e31fd7567230de8d71803654f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cdbde07c396401e7a942e8d92c47da156b293e31fd7567230de8d71803654f->enter($__internal_a7cdbde07c396401e7a942e8d92c47da156b293e31fd7567230de8d71803654f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7cdbde07c396401e7a942e8d92c47da156b293e31fd7567230de8d71803654f->leave($__internal_a7cdbde07c396401e7a942e8d92c47da156b293e31fd7567230de8d71803654f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_353fc53551ca3a27e06dcd8247d99773fcbc1637682ac745475793585bfd5b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353fc53551ca3a27e06dcd8247d99773fcbc1637682ac745475793585bfd5b5b->enter($__internal_353fc53551ca3a27e06dcd8247d99773fcbc1637682ac745475793585bfd5b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_353fc53551ca3a27e06dcd8247d99773fcbc1637682ac745475793585bfd5b5b->leave($__internal_353fc53551ca3a27e06dcd8247d99773fcbc1637682ac745475793585bfd5b5b_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/feniks/umbrella/loc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
