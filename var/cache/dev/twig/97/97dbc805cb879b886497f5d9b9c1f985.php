<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* category/index.html.twig */
class __TwigTemplate_bd61e73cdd27598e4469e542828d4add extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Produit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/themify-icons/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/categories_styles.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/categories_responsive.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        yield "<div class=\"super_container\">
    <!-- Sidebar and Products Rendering -->
    <div class=\"container product_section_container\">
        <div class=\"row\">
            <div class=\"col product_section clearfix\">
                <div class=\"breadcrumbs d-flex flex-row align-items-center\">
                    <ul>
                        <li><a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">Accueil</a></li>
                        <li class=\"active\">
                            <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })())]), "html", null, true);
        yield "\">
                                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 27, $this->source); })())), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Product List -->
                <div class=\"product-grid\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            yield "                        <div class=\"product-item men\">
                            <div class=\"product discount product_filter\">
                                <div class=\"product_image\">
                                <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 39), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">
                                    <img src=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ImageUrl", [], "any", false, false, false, 40)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "libele", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
                                </a>
                                </div>
                                <div class=\"product_info\">
                                    <h6 class=\"product_name\">
                                        ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "libele", [], "any", false, false, false, 45), "html", null, true);
            yield "
                                    </h6>
                                    <div class=\"product_price\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "discountPrice", [], "any", false, false, false, 47)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "discountPrice", [], "any", false, false, false, 47)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 47))), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                </div>

                <!-- Pagination -->
                <div class=\"pages d-flex flex-row align-items-center\">
                    <div class=\"page_current\">
                        <span>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageActuelle"]) || array_key_exists("pageActuelle", $context) ? $context["pageActuelle"] : (function () { throw new RuntimeError('Variable "pageActuelle" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "</span>
                        <ul class=\"page_selection\">
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["nombreDePages"]) || array_key_exists("nombreDePages", $context) ? $context["nombreDePages"] : (function () { throw new RuntimeError('Variable "nombreDePages" does not exist.', 59, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            yield "                                <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 60, $this->source); })()), "page" => $context["i"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                        </ul>
                    </div>
                    <div class=\"page_total\"><span>de</span> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombreDePages"]) || array_key_exists("nombreDePages", $context) ? $context["nombreDePages"] : (function () { throw new RuntimeError('Variable "nombreDePages" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "</div>
                    ";
        // line 65
        if (((isset($context["pageActuelle"]) || array_key_exists("pageActuelle", $context) ? $context["pageActuelle"] : (function () { throw new RuntimeError('Variable "pageActuelle" does not exist.', 65, $this->source); })()) < (isset($context["nombreDePages"]) || array_key_exists("nombreDePages", $context) ? $context["nombreDePages"] : (function () { throw new RuntimeError('Variable "nombreDePages" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "                        <div class=\"page_next\">
                            <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 67, $this->source); })()), "page" => ((isset($context["pageActuelle"]) || array_key_exists("pageActuelle", $context) ? $context["pageActuelle"] : (function () { throw new RuntimeError('Variable "pageActuelle" does not exist.', 67, $this->source); })()) + 1)]), "html", null, true);
            yield "\">
                                <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
                            </a>
                        </div>
                    ";
        }
        // line 72
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/categories_custom.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "category/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  336 => 86,  332 => 85,  328 => 84,  324 => 83,  320 => 82,  316 => 81,  312 => 80,  307 => 79,  294 => 78,  278 => 72,  270 => 67,  267 => 66,  265 => 65,  261 => 64,  257 => 62,  246 => 60,  242 => 59,  237 => 57,  230 => 52,  219 => 47,  214 => 45,  204 => 40,  200 => 39,  195 => 36,  191 => 35,  180 => 27,  176 => 26,  171 => 24,  162 => 17,  149 => 16,  136 => 13,  132 => 12,  128 => 11,  124 => 10,  120 => 9,  116 => 8,  112 => 7,  108 => 6,  103 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit {{category}}{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
    <link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/themify-icons/themify-icons.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/categories_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/categories_responsive.css') }}\">
{% endblock %}

{% block body %}
<div class=\"super_container\">
    <!-- Sidebar and Products Rendering -->
    <div class=\"container product_section_container\">
        <div class=\"row\">
            <div class=\"col product_section clearfix\">
                <div class=\"breadcrumbs d-flex flex-row align-items-center\">
                    <ul>
                        <li><a href=\"{{ path('Accueil') }}\">Accueil</a></li>
                        <li class=\"active\">
                            <a href=\"{{ path('all-product', {'category': category}) }}\">
                                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>{{ category | capitalize }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Product List -->
                <div class=\"product-grid\">
                    {% for product in products %}
                        <div class=\"product-item men\">
                            <div class=\"product discount product_filter\">
                                <div class=\"product_image\">
                                <a href=\"{{ path('product.show', {'slug':product.slug,'id': product.id}) }}\">
                                    <img src=\"{{ asset(product.ImageUrl) }}\" alt=\"{{ product.libele }}\">
                                </a>
                                </div>
                                <div class=\"product_info\">
                                    <h6 class=\"product_name\">
                                        {{ product.libele }}
                                    </h6>
                                    <div class=\"product_price\">{{ product.discountPrice ? product.discountPrice : product.prix }}</div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <!-- Pagination -->
                <div class=\"pages d-flex flex-row align-items-center\">
                    <div class=\"page_current\">
                        <span>{{ pageActuelle }}</span>
                        <ul class=\"page_selection\">
                            {% for i in 1..nombreDePages %}
                                <li><a href=\"{{ path('all-product', {'category': category, 'page': i}) }}\">{{ i }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"page_total\"><span>de</span> {{ nombreDePages }}</div>
                    {% if pageActuelle < nombreDePages %}
                        <div class=\"page_next\">
                            <a href=\"{{ path('all-product', {'category': category, 'page': pageActuelle + 1}) }}\">
                                <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
    <script src=\"{{ asset('plugins/easing/easing.js') }}\"></script>
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}\"></script>
    <script src=\"{{ asset('js/categories_custom.js')}}\"></script>
{% endblock %}
", "category/index.html.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/category/index.html.twig");
    }
}
