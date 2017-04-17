<?php

/* urlurlGenBundle:Default:index.html.twig */
class __TwigTemplate_262974798609ac4e46655e95d78a5afb967a7907bba39f18f3eff46bd8e9f5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e961f9a54364a890057b46a55df9e0eccaa435939c5ae18990c82c67af7b9e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e961f9a54364a890057b46a55df9e0eccaa435939c5ae18990c82c67af7b9e22->enter($__internal_e961f9a54364a890057b46a55df9e0eccaa435939c5ae18990c82c67af7b9e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "urlurlGenBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
        echo "</head>
<body>
<div class=\"headerPage\">
    <h1>Генератор коротких Url</h1>
</div>
<div class=\"BodyPage\">
    <div>
        <form id=\"firmUrl\" method=\"post\" action=\"\">
            <div class=\"form-inline\">
                <label for=\"urlText\" > Адрес для обработки: </label>
                <input
                        class=\"form-control\"

                        type=\"text\"
                        id=\"urlText\"
                        value=\"\"
                        name=\"fullURL\"
                        placeholder=\"www.site.*\">
                <input class=\"btn-info\" name=\"btn_start\" type=\"submit\" value=\"Обработать\">
            </div>
        </form>
    </div>
</div>
</body>
</html>";
        
        $__internal_e961f9a54364a890057b46a55df9e0eccaa435939c5ae18990c82c67af7b9e22->leave($__internal_e961f9a54364a890057b46a55df9e0eccaa435939c5ae18990c82c67af7b9e22_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5838167f7ac0b9cb27e0d9a8c87ecd2769e5677609aa9b92c34c5d1f164ab8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5838167f7ac0b9cb27e0d9a8c87ecd2769e5677609aa9b92c34c5d1f164ab8f->enter($__internal_d5838167f7ac0b9cb27e0d9a8c87ecd2769e5677609aa9b92c34c5d1f164ab8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "            Генератор URL
        ";
        
        $__internal_d5838167f7ac0b9cb27e0d9a8c87ecd2769e5677609aa9b92c34c5d1f164ab8f->leave($__internal_d5838167f7ac0b9cb27e0d9a8c87ecd2769e5677609aa9b92c34c5d1f164ab8f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9820577461c780a287d23e34d48657ecc99063f3e4b44b8664b02461c421a250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9820577461c780a287d23e34d48657ecc99063f3e4b44b8664b02461c421a250->enter($__internal_9820577461c780a287d23e34d48657ecc99063f3e4b44b8664b02461c421a250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_generator.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_9820577461c780a287d23e34d48657ecc99063f3e4b44b8664b02461c421a250->leave($__internal_9820577461c780a287d23e34d48657ecc99063f3e4b44b8664b02461c421a250_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b78ae0e390b4b4661ecc522a485e3623b1876c366ed54be8f58ecd6b636cb633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78ae0e390b4b4661ecc522a485e3623b1876c366ed54be8f58ecd6b636cb633->enter($__internal_b78ae0e390b4b4661ecc522a485e3623b1876c366ed54be8f58ecd6b636cb633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 15
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/angular.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_b78ae0e390b4b4661ecc522a485e3623b1876c366ed54be8f58ecd6b636cb633->leave($__internal_b78ae0e390b4b4661ecc522a485e3623b1876c366ed54be8f58ecd6b636cb633_prof);

    }

    public function getTemplateName()
    {
        return "urlurlGenBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 17,  118 => 16,  113 => 15,  107 => 14,  98 => 12,  93 => 11,  87 => 10,  79 => 7,  73 => 6,  42 => 19,  39 => 14,  37 => 10,  34 => 9,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html ng-app>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>
        {% block title %}
            Генератор URL
        {% endblock %}
    </title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/index_generator.css') }}\" >
        <link rel=\"stylesheet\" href=\"{{ asset('js/bootstrap-3/css/bootstrap.css') }}\">
    {% endblock %}
    {% block javascript %}
        <script src=\"{{ asset('js/angular.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap-3/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    {% endblock %}
</head>
<body>
<div class=\"headerPage\">
    <h1>Генератор коротких Url</h1>
</div>
<div class=\"BodyPage\">
    <div>
        <form id=\"firmUrl\" method=\"post\" action=\"\">
            <div class=\"form-inline\">
                <label for=\"urlText\" > Адрес для обработки: </label>
                <input
                        class=\"form-control\"

                        type=\"text\"
                        id=\"urlText\"
                        value=\"\"
                        name=\"fullURL\"
                        placeholder=\"www.site.*\">
                <input class=\"btn-info\" name=\"btn_start\" type=\"submit\" value=\"Обработать\">
            </div>
        </form>
    </div>
</div>
</body>
</html>", "urlurlGenBundle:Default:index.html.twig", "/home/feniks/umbrella/loc/src/url/urlGenBundle/Resources/views/Default/index.html.twig");
    }
}
