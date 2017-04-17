<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e98310827277b5ab51430a9292c2f3b236b525229bf03c488b0ff2bd437c891b extends Twig_Template
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
        $__internal_989c0260fbd2ff8886d1354b45944f538d0633f318caed9e3d6f117d649fbfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989c0260fbd2ff8886d1354b45944f538d0633f318caed9e3d6f117d649fbfa8->enter($__internal_989c0260fbd2ff8886d1354b45944f538d0633f318caed9e3d6f117d649fbfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_989c0260fbd2ff8886d1354b45944f538d0633f318caed9e3d6f117d649fbfa8->leave($__internal_989c0260fbd2ff8886d1354b45944f538d0633f318caed9e3d6f117d649fbfa8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fdd8a6d15b8c43f6c3c7afafe6f11346aec3227dd23dea9453e53f75bc501682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd8a6d15b8c43f6c3c7afafe6f11346aec3227dd23dea9453e53f75bc501682->enter($__internal_fdd8a6d15b8c43f6c3c7afafe6f11346aec3227dd23dea9453e53f75bc501682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fdd8a6d15b8c43f6c3c7afafe6f11346aec3227dd23dea9453e53f75bc501682->leave($__internal_fdd8a6d15b8c43f6c3c7afafe6f11346aec3227dd23dea9453e53f75bc501682_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_819daf8356d4ee519ff14c502bee6e0d610d1189801d3d12f51a3498d1f21d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819daf8356d4ee519ff14c502bee6e0d610d1189801d3d12f51a3498d1f21d04->enter($__internal_819daf8356d4ee519ff14c502bee6e0d610d1189801d3d12f51a3498d1f21d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_819daf8356d4ee519ff14c502bee6e0d610d1189801d3d12f51a3498d1f21d04->leave($__internal_819daf8356d4ee519ff14c502bee6e0d610d1189801d3d12f51a3498d1f21d04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ac0fa13bd23622db5f2b880ed632492665ba65b479695d85edd0b1f8309ada7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac0fa13bd23622db5f2b880ed632492665ba65b479695d85edd0b1f8309ada7->enter($__internal_2ac0fa13bd23622db5f2b880ed632492665ba65b479695d85edd0b1f8309ada7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2ac0fa13bd23622db5f2b880ed632492665ba65b479695d85edd0b1f8309ada7->leave($__internal_2ac0fa13bd23622db5f2b880ed632492665ba65b479695d85edd0b1f8309ada7_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/feniks/umbrella/loc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
