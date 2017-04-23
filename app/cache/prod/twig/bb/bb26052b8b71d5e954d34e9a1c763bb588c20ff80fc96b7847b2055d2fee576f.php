<?php

/* urlUrlGenerateShortBundle:Default:index.html.twig */
class __TwigTemplate_6ee3343d0604d3dfec15d15dc33140940dbaf02399f68079968c2ddd6419b68c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Генератор URL";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        // line 9
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"row header_block\">

        <h1>Генератор коротких URL</h1>
    </div>

    <div class=\"row left \">

        ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-inline")));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameUrl", array()), 'label', array("label_attr" => array("class" => "text-primary")));
        echo "


            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameUrl", array()), 'widget', array("value" => "", "attr" => array("class" => "form-control")));
        echo "

        </div>

        <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fullUrl", array()), 'label', array("label_attr" => array("class" => "text-primary")));
        echo "


            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fullUrl", array()), 'widget', array("value" => "", "attr" => array("class" => "form-control")));
        echo "

            ";
        // line 38
        if ((($context["error"] ?? null) != "no")) {
            // line 39
            echo "                <div class=\"error-short\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 41
        echo "        </div>


        <div>
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "saveUrl", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>

        ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>


    <div class=\"row right\">

        <div class=\"title text-primary\">Ваши ссылки</div>

        <ul class=\"listShort\">
            ";
        // line 58
        if ((($context["listUrl"] ?? null) != "no")) {
            // line 59
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listUrl"] ?? null));
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
        return array (  173 => 66,  169 => 64,  166 => 63,  152 => 60,  147 => 59,  145 => 58,  132 => 48,  126 => 45,  120 => 41,  114 => 39,  112 => 38,  107 => 36,  101 => 33,  93 => 28,  87 => 25,  81 => 22,  77 => 21,  68 => 14,  65 => 13,  59 => 10,  54 => 9,  51 => 8,  45 => 5,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "urlUrlGenerateShortBundle:Default:index.html.twig", "/home/feniks/umbrella/loc/src/url/UrlGenerateShortBundle/Resources/views/Default/index.html.twig");
    }
}
