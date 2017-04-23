<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e23d23822dad40bf70d7649a84321e0539d5f32ed92b0b227c7b6d904f0098d extends Twig_Template
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
        $__internal_96e87d8f7b95f09a77d6c5707f1ae8f34c3bec3e0a46c154f381ed75b9bbf78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e87d8f7b95f09a77d6c5707f1ae8f34c3bec3e0a46c154f381ed75b9bbf78e->enter($__internal_96e87d8f7b95f09a77d6c5707f1ae8f34c3bec3e0a46c154f381ed75b9bbf78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e87d8f7b95f09a77d6c5707f1ae8f34c3bec3e0a46c154f381ed75b9bbf78e->leave($__internal_96e87d8f7b95f09a77d6c5707f1ae8f34c3bec3e0a46c154f381ed75b9bbf78e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b29ff726235b9ec33c23c109d44ba38fa77de41851d1da6d62caf6389d24b090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29ff726235b9ec33c23c109d44ba38fa77de41851d1da6d62caf6389d24b090->enter($__internal_b29ff726235b9ec33c23c109d44ba38fa77de41851d1da6d62caf6389d24b090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b29ff726235b9ec33c23c109d44ba38fa77de41851d1da6d62caf6389d24b090->leave($__internal_b29ff726235b9ec33c23c109d44ba38fa77de41851d1da6d62caf6389d24b090_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96a0d2d0caa6317cab03bf06794a344ee3ebed557a59f1cd58dc64bfcf132821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a0d2d0caa6317cab03bf06794a344ee3ebed557a59f1cd58dc64bfcf132821->enter($__internal_96a0d2d0caa6317cab03bf06794a344ee3ebed557a59f1cd58dc64bfcf132821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96a0d2d0caa6317cab03bf06794a344ee3ebed557a59f1cd58dc64bfcf132821->leave($__internal_96a0d2d0caa6317cab03bf06794a344ee3ebed557a59f1cd58dc64bfcf132821_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f999f8d24e705ae97cb2a5d8a4ef7a853d0c1c97142ae5a6838c22c55e553fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f999f8d24e705ae97cb2a5d8a4ef7a853d0c1c97142ae5a6838c22c55e553fd->enter($__internal_8f999f8d24e705ae97cb2a5d8a4ef7a853d0c1c97142ae5a6838c22c55e553fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f999f8d24e705ae97cb2a5d8a4ef7a853d0c1c97142ae5a6838c22c55e553fd->leave($__internal_8f999f8d24e705ae97cb2a5d8a4ef7a853d0c1c97142ae5a6838c22c55e553fd_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
