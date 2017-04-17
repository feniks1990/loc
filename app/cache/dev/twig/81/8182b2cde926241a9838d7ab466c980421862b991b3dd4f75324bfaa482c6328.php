<?php

/* ::base.html.twig */
class __TwigTemplate_4199776e0e7b2713d9ea16937031b89a6945fba561b276965faf5fdc8c7e0482 extends Twig_Template
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
        $__internal_7920915ea25703cd27ba728fd3cc13ec2b58ec7b7cea00885a775c361d1db758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7920915ea25703cd27ba728fd3cc13ec2b58ec7b7cea00885a775c361d1db758->enter($__internal_7920915ea25703cd27ba728fd3cc13ec2b58ec7b7cea00885a775c361d1db758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7920915ea25703cd27ba728fd3cc13ec2b58ec7b7cea00885a775c361d1db758->leave($__internal_7920915ea25703cd27ba728fd3cc13ec2b58ec7b7cea00885a775c361d1db758_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e554d16c9a3cdd624586333d181f916bcf28776dc6d35dae4a1b3595982ce9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e554d16c9a3cdd624586333d181f916bcf28776dc6d35dae4a1b3595982ce9f->enter($__internal_1e554d16c9a3cdd624586333d181f916bcf28776dc6d35dae4a1b3595982ce9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1e554d16c9a3cdd624586333d181f916bcf28776dc6d35dae4a1b3595982ce9f->leave($__internal_1e554d16c9a3cdd624586333d181f916bcf28776dc6d35dae4a1b3595982ce9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c84fc2252daf304be70be915ef1cbca87a235ec7c7fe1ecf8bb202f05bd067dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84fc2252daf304be70be915ef1cbca87a235ec7c7fe1ecf8bb202f05bd067dc->enter($__internal_c84fc2252daf304be70be915ef1cbca87a235ec7c7fe1ecf8bb202f05bd067dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c84fc2252daf304be70be915ef1cbca87a235ec7c7fe1ecf8bb202f05bd067dc->leave($__internal_c84fc2252daf304be70be915ef1cbca87a235ec7c7fe1ecf8bb202f05bd067dc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05b0e8321a4889352490971cbad58cbedb17c9994e68dd3b519e0a6ea029254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05b0e8321a4889352490971cbad58cbedb17c9994e68dd3b519e0a6ea029254->enter($__internal_f05b0e8321a4889352490971cbad58cbedb17c9994e68dd3b519e0a6ea029254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f05b0e8321a4889352490971cbad58cbedb17c9994e68dd3b519e0a6ea029254->leave($__internal_f05b0e8321a4889352490971cbad58cbedb17c9994e68dd3b519e0a6ea029254_prof);

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
