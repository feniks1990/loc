<?php

/* urlUrlGenerateShortBundle:Default:index.html.twig */
class __TwigTemplate_4d956aa20bf2e295f6237dd424769d454ee69ddde2c440a8dd668151ebf42466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "urlUrlGenerateShortBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_98fc6cbe6fab0af13ef387d57f81df7386d42b4a8aa8df7d9ebe24926c88941b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fc6cbe6fab0af13ef387d57f81df7386d42b4a8aa8df7d9ebe24926c88941b->enter($__internal_98fc6cbe6fab0af13ef387d57f81df7386d42b4a8aa8df7d9ebe24926c88941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "urlUrlGenerateShortBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98fc6cbe6fab0af13ef387d57f81df7386d42b4a8aa8df7d9ebe24926c88941b->leave($__internal_98fc6cbe6fab0af13ef387d57f81df7386d42b4a8aa8df7d9ebe24926c88941b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7e6e6b2cc9676952a233f31f16d69a774b2094122e1df89f934b54268a41228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e6e6b2cc9676952a233f31f16d69a774b2094122e1df89f934b54268a41228->enter($__internal_a7e6e6b2cc9676952a233f31f16d69a774b2094122e1df89f934b54268a41228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Генератор URL";
        
        $__internal_a7e6e6b2cc9676952a233f31f16d69a774b2094122e1df89f934b54268a41228->leave($__internal_a7e6e6b2cc9676952a233f31f16d69a774b2094122e1df89f934b54268a41228_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_679e952f1be101f4aebb6c7b1614b4994ed40aaa785960def47d5660e719741d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679e952f1be101f4aebb6c7b1614b4994ed40aaa785960def47d5660e719741d->enter($__internal_679e952f1be101f4aebb6c7b1614b4994ed40aaa785960def47d5660e719741d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_679e952f1be101f4aebb6c7b1614b4994ed40aaa785960def47d5660e719741d->leave($__internal_679e952f1be101f4aebb6c7b1614b4994ed40aaa785960def47d5660e719741d_prof);

    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6b38d2a58e2b4438c65a409dd8648f85ba1c85e7dad02b5cb505acb2bd6c25c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b38d2a58e2b4438c65a409dd8648f85ba1c85e7dad02b5cb505acb2bd6c25c0->enter($__internal_6b38d2a58e2b4438c65a409dd8648f85ba1c85e7dad02b5cb505acb2bd6c25c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 9
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6b38d2a58e2b4438c65a409dd8648f85ba1c85e7dad02b5cb505acb2bd6c25c0->leave($__internal_6b38d2a58e2b4438c65a409dd8648f85ba1c85e7dad02b5cb505acb2bd6c25c0_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a111ab64b263ccf59930fc65133c3b8337f09e43f16a109d2dafbcf08630faac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a111ab64b263ccf59930fc65133c3b8337f09e43f16a109d2dafbcf08630faac->enter($__internal_a111ab64b263ccf59930fc65133c3b8337f09e43f16a109d2dafbcf08630faac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"row header_block\">

        <h1>Генератор коротких URL</h1>
    </div>

    <div class=\"row left \">

        ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameUrl", array()), 'label', array("label_attr" => array("class" => "text-primary")));
        echo "


            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameUrl", array()), 'widget', array("value" => "", "attr" => array("class" => "form-control")));
        echo "

        </div>

        <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullUrl", array()), 'label', array("label_attr" => array("class" => "text-primary")));
        echo "


            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullUrl", array()), 'widget', array("value" => "", "attr" => array("class" => "form-control")));
        echo "

            ";
        // line 38
        if ((($context["error"] ?? $this->getContext($context, "error")) != "no")) {
            // line 39
            echo "                <div class=\"error-short\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "</div>
            ";
        }
        // line 41
        echo "        </div>


        <div>
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveUrl", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>

        ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>


    <div class=\"row right\">

        <div class=\"title text-primary\">Ваши ссылки</div>

        <ul class=\"listShort\">
            ";
        // line 58
        if ((($context["listUrl"] ?? $this->getContext($context, "listUrl")) != "no")) {
            // line 59
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listUrl"] ?? $this->getContext($context, "listUrl")));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 60
                echo "                    <li title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nameUrl", array()), "html", null, true);
                echo "\"><a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "shortUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "shortUrl", array()), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            ";
        } else {
            // line 64
            echo "                <div class=\"error-short\">Коротких ссылок не найдено</div>
            ";
        }
        // line 66
        echo "        </ul>

    </div>
";
        
        $__internal_a111ab64b263ccf59930fc65133c3b8337f09e43f16a109d2dafbcf08630faac->leave($__internal_a111ab64b263ccf59930fc65133c3b8337f09e43f16a109d2dafbcf08630faac_prof);

    }

    public function getTemplateName()
    {
        return "urlUrlGenerateShortBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 66,  196 => 64,  193 => 63,  179 => 60,  174 => 59,  172 => 58,  159 => 48,  153 => 45,  147 => 41,  141 => 39,  139 => 38,  134 => 36,  128 => 33,  120 => 28,  114 => 25,  108 => 22,  104 => 21,  95 => 14,  89 => 13,  80 => 10,  75 => 9,  69 => 8,  60 => 5,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}Генератор URL{% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('js/bootstrap-3/css/bootstrap.css') }}\">
    {% endblock %}

    {% block javascript %}
        <script src=\"{{ asset('js/') }}\"></script>
        <script src=\"{{ asset('js/bootstrap-3/js/bootstrap.min.js') }}\"></script>
    {% endblock %}

{% block body %}
    <div class=\"row header_block\">

        <h1>Генератор коротких URL</h1>
    </div>

    <div class=\"row left \">

        {{ form_start(form, {'attr': {'class': 'form-inline'}}) }}
        {{ form_errors(form) }}

        <div class=\"form-group\">
            {{ form_label(form.nameUrl, false, { 'label_attr': {'class': 'text-primary'} }) }}


            {{ form_widget(form.nameUrl,{ 'value': '','attr': {'class': 'form-control' }}) }}

        </div>

        <div class=\"form-group\">
            {{ form_label(form.fullUrl, false, { 'label_attr': {'class': 'text-primary'} }) }}


            {{ form_widget(form.fullUrl,{ 'value': '', 'attr': {'class': 'form-control'}}) }}

            {% if error != 'no' %}
                <div class=\"error-short\">{{ error }}</div>
            {% endif %}
        </div>


        <div>
            {{ form_widget(form.saveUrl,{'attr': {'class': 'btn btn-primary'}}) }}
        </div>

        {{ form_end(form) }}

    </div>


    <div class=\"row right\">

        <div class=\"title text-primary\">Ваши ссылки</div>

        <ul class=\"listShort\">
            {% if listUrl != 'no' %}
                {% for list in listUrl %}
                    <li title=\"{{ list.nameUrl }}\"><a target=\"_blank\" href=\"{{ list.shortUrl }}\">{{ list.shortUrl }}</a>
                    </li>
                {% endfor %}
            {% else %}
                <div class=\"error-short\">Коротких ссылок не найдено</div>
            {% endif %}
        </ul>

    </div>
{% endblock %}

", "urlUrlGenerateShortBundle:Default:index.html.twig", "/home/feniks/umbrella/loc/src/url/UrlGenerateShortBundle/Resources/views/Default/index.html.twig");
    }
}
