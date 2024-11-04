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

/* home/index.html.twig */
class __TwigTemplate_75194a3fa3a1adc7ca267c89b2adcb3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        yield "\">
\t<link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "<div class=\"super_container\">
\t<!-- Slider -->
\t";
        // line 18
        if (( !(null === (isset($context["EnPromotion"]) || array_key_exists("EnPromotion", $context) ? $context["EnPromotion"] : (function () { throw new RuntimeError('Variable "EnPromotion" does not exist.', 18, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["EnPromotion"]) || array_key_exists("EnPromotion", $context) ? $context["EnPromotion"] : (function () { throw new RuntimeError('Variable "EnPromotion" does not exist.', 18, $this->source); })()), "NonCollection", [], "any", false, false, false, 18)))) {
            // line 19
            yield "
\t\t<div class=\"main_slider\" style=\"background-image:url(";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["EnPromotion"]) || array_key_exists("EnPromotion", $context) ? $context["EnPromotion"] : (function () { throw new RuntimeError('Variable "EnPromotion" does not exist.', 20, $this->source); })()), "SlidePromo", [], "any", false, false, false, 20), "html", null, true);
            yield ")\">
\t\t\t<div class=\"container fill_height\">
\t\t\t\t<div class=\"row align-items-center fill_height\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"main_slider_content\">
\t\t\t\t\t\t\t<h6>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["EnPromotion"]) || array_key_exists("EnPromotion", $context) ? $context["EnPromotion"] : (function () { throw new RuntimeError('Variable "EnPromotion" does not exist.', 25, $this->source); })()), "NonCollection", [], "any", false, false, false, 25), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t<h1>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["EnPromotion"]) || array_key_exists("EnPromotion", $context) ? $context["EnPromotion"] : (function () { throw new RuntimeError('Variable "EnPromotion" does not exist.', 26, $this->source); })()), "DetailPromo", [], "any", false, false, false, 26), "html", null, true);
            yield "</h1>
\t\t\t\t\t\t\t<div class=\"red_button shop_now_button\"><a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["EnPromotion"]) || array_key_exists("EnPromotion", $context) ? $context["EnPromotion"] : (function () { throw new RuntimeError('Variable "EnPromotion" does not exist.', 27, $this->source); })()), "slug", [], "any", false, false, false, 27), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["EnPromotion"]) || array_key_exists("EnPromotion", $context) ? $context["EnPromotion"] : (function () { throw new RuntimeError('Variable "EnPromotion" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\">Acheter</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 34
            yield "\t<div class=\"main_slider\" style=\"background-image:url(images/slider_1.jpg)\">
\t\t<div class=\"container fill_height\">
\t\t\t<div class=\"row align-items-center fill_height\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"main_slider_content\">
\t\t\t\t\t\t<h6>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["homme"]) || array_key_exists("homme", $context) ? $context["homme"] : (function () { throw new RuntimeError('Variable "homme" does not exist.', 39, $this->source); })()), 0, [], "array", false, false, false, 39), "NonCollection", [], "any", false, false, false, 39), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t<h1>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["homme"]) || array_key_exists("homme", $context) ? $context["homme"] : (function () { throw new RuntimeError('Variable "homme" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "DetailPromo", [], "any", false, false, false, 40), "html", null, true);
            yield "</h1>
\t\t\t\t\t\t<div class=\"red_button shop_now_button\"><a href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product");
            yield "\">Consulter</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>DetailPromo
\t\t</div>
\t</div>
\t";
        }
        // line 48
        yield "\t
\t<!-- Banner -->

\t<div class=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"banner_item align-items-center\" style=\"background-image:url(images/banner_1.jpg)\">
\t\t\t\t\t\t<div class=\"banner_category\">
\t\t\t\t\t\t\t<a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "femme"]);
        yield "\">Femmes</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"banner_item align-items-center\" style=\"background-image:url(images/banner_2.jpg)\">
\t\t\t\t\t\t<div class=\"banner_category\">
\t\t\t\t\t\t\t<a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "accessoire"]);
        yield "\">Accessories</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"banner_item align-items-center\" style=\"background-image:url(images/banner_3.jpg)\">
\t\t\t\t\t\t<div class=\"banner_category\">
\t\t\t\t\t\t\t<a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "homme"]);
        yield "\">Hommes</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- New Arrivals -->

\t<div class=\"new_arrivals\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title new_arrivals_title\">
\t\t\t\t\t\t<h2>Nouveautés</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"new_arrivals_sorting\">
\t\t\t\t\t\t<ul class=\"arrivals_grid_sorting clearfix button-group filters-button-group\">
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked\" data-filter=\"*\">Tous</li>
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".women\">Femmes</li>
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".accessories\">Accessores</li>
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".men\">Hommes</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"product-grid\" data-isotope='{ \"itemSelector\": \".product-item\", \"layoutMode\": \"fitRows\" }'>

\t\t\t\t\t\t<!-- Product 1 -->
\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["femme"]);
        foreach ($context['_seq'] as $context["_key"] => $context["femme"]) {
            // line 108
            yield "\t\t\t\t\t\t<div class=\"product-item women\">
\t\t\t\t\t\t\t<div class=\"product discount product_filter\">
\t\t\t\t\t\t\t<a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "slug", [], "any", false, false, false, 110), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "ImageUrl", [], "any", false, false, false, 112), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "libele", [], "any", false, false, false, 112), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>-\$20</span></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "libele", [], "any", false, false, false, 117), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "prix", [], "any", false, false, false, 118), "html", null, true);
            yield "<span>\$";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "discountPrice", [], "any", false, false, false, 118), "html", null, true);
            yield "</span></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["idProduit" => CoreExtension::getAttribute($this->env, $this->source, $context["femme"], "id", [], "any", false, false, false, 122), "quantity" => 1, "idUtilisateur" => 2]), "html", null, true);
            yield "\">Ajouter au panier</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['femme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "\t\t\t\t\t\t<!-- Product 2 -->
\t\t\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["homme"]);
        foreach ($context['_seq'] as $context["_key"] => $context["homme"]) {
            // line 127
            yield "\t\t\t\t\t\t<div class=\"product-item men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t<a href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "slug", [], "any", false, false, false, 129), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "ImageUrl", [], "any", false, false, false, 131), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "libele", [], "any", false, false, false, 131), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center\"><span>new</span></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "libele", [], "any", false, false, false, 136), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "discountPrice", [], "any", false, false, false, 137)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "discountPrice", [], "any", false, false, false, 137)) : (CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "prix", [], "any", false, false, false, 137))), "html", null, true);
            yield "</span></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["idProduit" => CoreExtension::getAttribute($this->env, $this->source, $context["homme"], "id", [], "any", false, false, false, 141), "quantity" => 1, "idUtilisateur" => 2]), "html", null, true);
            yield "\">Ajouter au panier</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['homme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "
\t\t\t\t\t\t<!-- Product 4 -->

\t\t\t\t\t\t";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["accessoire"]);
        foreach ($context['_seq'] as $context["_key"] => $context["accessoire"]) {
            // line 148
            yield "\t\t\t\t\t\t<div class=\"product-item accessories\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t<a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "slug", [], "any", false, false, false, 150), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "ImageUrl", [], "any", false, false, false, 152), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "libele", [], "any", false, false, false, 152), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>sale</span></div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "libele", [], "any", false, false, false, 157), "html", null, true);
            yield "</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "discountPrice", [], "any", false, false, false, 158)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "discountPrice", [], "any", false, false, false, 158)) : (CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "prix", [], "any", false, false, false, 158))), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["idProduit" => CoreExtension::getAttribute($this->env, $this->source, $context["accessoire"], "id", [], "any", false, false, false, 162), "quantity" => 1, "idUtilisateur" => 2]), "html", null, true);
            yield "\">Ajouter au panier</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['accessoire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "
\t\t\t\t\t\t<!-- Product 5 -->

\t\t\t\t\t\t<div class=\"product-item women men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_5.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Pryma Headphones, Rose Gold & Grey</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$180.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 6 -->

\t\t\t\t\t\t<div class=\"product-item accessories\">
\t\t\t\t\t\t\t<div class=\"product discount product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_6.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>-\$20</span></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"#single.html\">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$520.00<span>\$590.00</span></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 7 -->

\t\t\t\t\t\t<div class=\"product-item women\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_7.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$610.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 8 -->

\t\t\t\t\t\t<div class=\"product-item accessories\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_8.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Blue Yeti USB Microphone Blackout Edition</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$120.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 9 -->

\t\t\t\t\t\t<div class=\"product-item men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_9.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>sale</span></div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$410.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 10 -->

\t\t\t\t\t\t<div class=\"product-item men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_10.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Pryma Headphones, Rose Gold & Grey</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$180.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Promo Dynamique-->

\t<div class=\"deal_ofthe_week\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"deal_ofthe_week_img\">
\t\t\t\t\t\t<img src=\"images/deal_ofthe_week.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-right deal_ofthe_week_col\">
\t\t\t\t\t<div class=\"deal_ofthe_week_content d-flex flex-column align-items-center float-right\">
\t\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t\t<h2>Deal Of The Week</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"timer\">
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"day\" class=\"timer_num\">03</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Day</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"hour\" class=\"timer_num\">15</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Hours</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"minute\" class=\"timer_num\">45</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Mins</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"second\" class=\"timer_num\">23</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Sec</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"red_button deal_ofthe_week_button\"><a href=\"#\">shop now</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Best Sellers -->

\t<div class=\"best_sellers\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title new_arrivals_title\">
\t\t\t\t\t\t<h2>Nos meilleurs ventes</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"product_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme product_slider\">

\t\t\t\t\t\t\t<!-- Slide 1 -->
\t\t\t\t\t\t\t";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["BestSeller"]);
        foreach ($context['_seq'] as $context["_key"] => $context["BestSeller"]) {
            yield "\t
\t\t\t\t\t\t\t<div class=\"owl-item product_slider_item\">
\t\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product discount\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "slug", [], "any", false, false, false, 330), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "id", [], "any", false, false, false, 330)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "ImageUrl", [], "any", false, false, false, 332), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "libele", [], "any", false, false, false, 332), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>-\$20</span></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\">";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "libele", [], "any", false, false, false, 337), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "discountPrice", [], "any", false, false, false, 338)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "discountPrice", [], "any", false, false, false, 338)) : (CoreExtension::getAttribute($this->env, $this->source, $context["BestSeller"], "prix", [], "any", false, false, false, 338))), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['BestSeller'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        yield "
\t\t\t\t\t\t<!-- Slider Navigation -->

\t\t\t\t\t\t<div class=\"product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column\">
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column\">
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Benefit -->

\t<div class=\"benefit\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row benefit_row\">
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-truck\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>free shipping</h6>
\t\t\t\t\t\t\t<p>Suffered Alteration in Some Form</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>cach on delivery</h6>
\t\t\t\t\t\t\t<p>The Internet Tend To Repeat</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>45 days return</h6>
\t\t\t\t\t\t\t<p>Making it Look Like Readable</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>opening all week</h6>
\t\t\t\t\t\t\t<p>8AM - 09PM</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Blogs -->

\t<div class=\"blogs\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Latest Blogs</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row blogs_container\">
\t\t\t\t<div class=\"col-lg-4 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t\t\t\t<div class=\"blog_background\" style=\"background-image:url(images/blog_1.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\">Here are the trends I see coming this fall</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\">by admin | dec 01, 2017</span>
\t\t\t\t\t\t\t<a class=\"blog_more\" href=\"#\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t\t\t\t<div class=\"blog_background\" style=\"background-image:url(images/blog_2.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\">Here are the trends I see coming this fall</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\">by admin | dec 01, 2017</span>
\t\t\t\t\t\t\t<a class=\"blog_more\" href=\"#\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t\t\t\t<div class=\"blog_background\" style=\"background-image:url(images/blog_3.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\">Here are the trends I see coming this fall</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\">by admin | dec 01, 2017</span>
\t\t\t\t\t\t\t<a class=\"blog_more\" href=\"#\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Newsletter -->

\t<div class=\"newsletter\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center\">
\t\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t\t<p>Subscribe to our newsletter and get 20% off your first purchase</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<form action=\"post\">
\t\t\t\t\t\t<div class=\"newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center\">
\t\t\t\t\t\t\t<input id=\"newsletter_email\" type=\"email\" placeholder=\"Your email\" required=\"required\" data-error=\"Valid email is required.\">
\t\t\t\t\t\t\t<button id=\"newsletter_submit\" type=\"submit\" class=\"newsletter_submit_btn trans_300\" value=\"Submit\">subscribe</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 477
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

        // line 478
        yield "\t<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
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
        return "home/index.html.twig";
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
        return array (  805 => 484,  801 => 483,  797 => 482,  793 => 481,  789 => 480,  785 => 479,  780 => 478,  767 => 477,  627 => 346,  613 => 338,  609 => 337,  599 => 332,  594 => 330,  585 => 326,  422 => 165,  413 => 162,  406 => 158,  402 => 157,  392 => 152,  387 => 150,  383 => 148,  379 => 147,  374 => 144,  365 => 141,  358 => 137,  354 => 136,  344 => 131,  339 => 129,  335 => 127,  331 => 126,  328 => 125,  319 => 122,  310 => 118,  306 => 117,  296 => 112,  291 => 110,  287 => 108,  283 => 107,  244 => 71,  234 => 64,  224 => 57,  213 => 48,  203 => 41,  199 => 40,  195 => 39,  188 => 34,  178 => 27,  174 => 26,  170 => 25,  162 => 20,  159 => 19,  157 => 18,  153 => 16,  140 => 15,  127 => 12,  123 => 11,  119 => 10,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
\t<link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">
{% endblock %}

{% block body %}
<div class=\"super_container\">
\t<!-- Slider -->
\t{% if EnPromotion is not null and EnPromotion.NonCollection is not null %}

\t\t<div class=\"main_slider\" style=\"background-image:url({{EnPromotion.SlidePromo}})\">
\t\t\t<div class=\"container fill_height\">
\t\t\t\t<div class=\"row align-items-center fill_height\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"main_slider_content\">
\t\t\t\t\t\t\t<h6>{{EnPromotion.NonCollection}}</h6>
\t\t\t\t\t\t\t<h1>{{EnPromotion.DetailPromo}}</h1>
\t\t\t\t\t\t\t<div class=\"red_button shop_now_button\"><a href=\"{{ path('product.show', {'slug': EnPromotion.slug,'id': EnPromotion.id}) }}\">Acheter</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% else %}
\t<div class=\"main_slider\" style=\"background-image:url(images/slider_1.jpg)\">
\t\t<div class=\"container fill_height\">
\t\t\t<div class=\"row align-items-center fill_height\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"main_slider_content\">
\t\t\t\t\t\t<h6>{{homme[0].NonCollection}}</h6>
\t\t\t\t\t\t<h1>{{homme[0].DetailPromo}}</h1>
\t\t\t\t\t\t<div class=\"red_button shop_now_button\"><a href=\"{{ path('all-product') }}\">Consulter</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>DetailPromo
\t\t</div>
\t</div>
\t{% endif %}
\t
\t<!-- Banner -->

\t<div class=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"banner_item align-items-center\" style=\"background-image:url(images/banner_1.jpg)\">
\t\t\t\t\t\t<div class=\"banner_category\">
\t\t\t\t\t\t\t<a href=\"{{ path('all-product', {'category': 'femme'}) }}\">Femmes</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"banner_item align-items-center\" style=\"background-image:url(images/banner_2.jpg)\">
\t\t\t\t\t\t<div class=\"banner_category\">
\t\t\t\t\t\t\t<a href=\"{{ path('all-product', {'category': 'accessoire'}) }}\">Accessories</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"banner_item align-items-center\" style=\"background-image:url(images/banner_3.jpg)\">
\t\t\t\t\t\t<div class=\"banner_category\">
\t\t\t\t\t\t\t<a href=\"{{ path('all-product', {'category': 'homme'}) }}\">Hommes</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- New Arrivals -->

\t<div class=\"new_arrivals\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title new_arrivals_title\">
\t\t\t\t\t\t<h2>Nouveautés</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"new_arrivals_sorting\">
\t\t\t\t\t\t<ul class=\"arrivals_grid_sorting clearfix button-group filters-button-group\">
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked\" data-filter=\"*\">Tous</li>
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".women\">Femmes</li>
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".accessories\">Accessores</li>
\t\t\t\t\t\t\t<li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".men\">Hommes</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"product-grid\" data-isotope='{ \"itemSelector\": \".product-item\", \"layoutMode\": \"fitRows\" }'>

\t\t\t\t\t\t<!-- Product 1 -->
\t\t\t\t\t\t{% for femme in femme %}
\t\t\t\t\t\t<div class=\"product-item women\">
\t\t\t\t\t\t\t<div class=\"product discount product_filter\">
\t\t\t\t\t\t\t<a href=\"{{ path('product.show', {'slug': femme.slug,'id': femme.id}) }}\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ femme.ImageUrl }}\" alt=\"{{ femme.libele }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>-\$20</span></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\">{{ femme.libele }}</h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\${{ femme.prix }}<span>\${{ femme.discountPrice }}</span></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"{{ path('add_card', {'idProduit': femme.id, 'quantity': 1, 'idUtilisateur': 2}) }}\">Ajouter au panier</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<!-- Product 2 -->
\t\t\t\t\t\t{% for homme in homme %}
\t\t\t\t\t\t<div class=\"product-item men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t<a href=\"{{ path('product.show', {'slug':homme.slug,'id': homme.id}) }}\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ homme.ImageUrl }}\" alt=\"{{ homme.libele }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center\"><span>new</span></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\">{{ homme.libele }}</h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\${{ homme.discountPrice ? homme.discountPrice : homme.prix }}</span></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"{{ path('add_card', {'idProduit': homme.id, 'quantity': 1, 'idUtilisateur': 2}) }}\">Ajouter au panier</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t<!-- Product 4 -->

\t\t\t\t\t\t{% for accessoire in accessoire %}
\t\t\t\t\t\t<div class=\"product-item accessories\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t<a href=\"{{ path('product.show', {'slug':accessoire.slug,'id': accessoire.id}) }}\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ accessoire.ImageUrl }}\" alt=\"{{ accessoire.libele }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>sale</span></div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">{{ accessoire.libele }}</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\${{ accessoire.discountPrice ? accessoire.discountPrice : accessoire.prix }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"{{ path('add_card', {'idProduit': accessoire.id, 'quantity': 1, 'idUtilisateur': 2}) }}\">Ajouter au panier</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t<!-- Product 5 -->

\t\t\t\t\t\t<div class=\"product-item women men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_5.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Pryma Headphones, Rose Gold & Grey</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$180.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 6 -->

\t\t\t\t\t\t<div class=\"product-item accessories\">
\t\t\t\t\t\t\t<div class=\"product discount product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_6.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>-\$20</span></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"#single.html\">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$520.00<span>\$590.00</span></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 7 -->

\t\t\t\t\t\t<div class=\"product-item women\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_7.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$610.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 8 -->

\t\t\t\t\t\t<div class=\"product-item accessories\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_8.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Blue Yeti USB Microphone Blackout Edition</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$120.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 9 -->

\t\t\t\t\t\t<div class=\"product-item men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_9.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>sale</span></div>
\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$410.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Product 10 -->

\t\t\t\t\t\t<div class=\"product-item men\">
\t\t\t\t\t\t\t<div class=\"product product_filter\">
\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/product_10.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"favorite\"></div>
\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\"><a href=\"single.html\">Pryma Headphones, Rose Gold & Grey</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\$180.00</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"red_button add_to_cart_button\"><a href=\"#\">add to cart</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Promo Dynamique-->

\t<div class=\"deal_ofthe_week\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"deal_ofthe_week_img\">
\t\t\t\t\t\t<img src=\"images/deal_ofthe_week.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-right deal_ofthe_week_col\">
\t\t\t\t\t<div class=\"deal_ofthe_week_content d-flex flex-column align-items-center float-right\">
\t\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t\t<h2>Deal Of The Week</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"timer\">
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"day\" class=\"timer_num\">03</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Day</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"hour\" class=\"timer_num\">15</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Hours</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"minute\" class=\"timer_num\">45</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Mins</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-inline-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div id=\"second\" class=\"timer_num\">23</div>
\t\t\t\t\t\t\t\t<div class=\"timer_unit\">Sec</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"red_button deal_ofthe_week_button\"><a href=\"#\">shop now</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Best Sellers -->

\t<div class=\"best_sellers\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title new_arrivals_title\">
\t\t\t\t\t\t<h2>Nos meilleurs ventes</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"product_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme product_slider\">

\t\t\t\t\t\t\t<!-- Slide 1 -->
\t\t\t\t\t\t\t{% for BestSeller in BestSeller %}\t
\t\t\t\t\t\t\t<div class=\"owl-item product_slider_item\">
\t\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product discount\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product.show', {'slug': BestSeller.slug,'id': BestSeller.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{BestSeller.ImageUrl}}\" alt=\"{{BestSeller.libele}}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"favorite favorite_left\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>-\$20</span></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_info\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\">{{BestSeller.libele}}</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_price\">\${{ BestSeller.discountPrice ? BestSeller.discountPrice : BestSeller.prix }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t<!-- Slider Navigation -->

\t\t\t\t\t\t<div class=\"product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column\">
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column\">
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Benefit -->

\t<div class=\"benefit\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row benefit_row\">
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-truck\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>free shipping</h6>
\t\t\t\t\t\t\t<p>Suffered Alteration in Some Form</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>cach on delivery</h6>
\t\t\t\t\t\t\t<p>The Internet Tend To Repeat</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>45 days return</h6>
\t\t\t\t\t\t\t<p>Making it Look Like Readable</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 benefit_col\">
\t\t\t\t\t<div class=\"benefit_item d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div class=\"benefit_icon\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"benefit_content\">
\t\t\t\t\t\t\t<h6>opening all week</h6>
\t\t\t\t\t\t\t<p>8AM - 09PM</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Blogs -->

\t<div class=\"blogs\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Latest Blogs</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row blogs_container\">
\t\t\t\t<div class=\"col-lg-4 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t\t\t\t<div class=\"blog_background\" style=\"background-image:url(images/blog_1.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\">Here are the trends I see coming this fall</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\">by admin | dec 01, 2017</span>
\t\t\t\t\t\t\t<a class=\"blog_more\" href=\"#\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t\t\t\t<div class=\"blog_background\" style=\"background-image:url(images/blog_2.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\">Here are the trends I see coming this fall</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\">by admin | dec 01, 2017</span>
\t\t\t\t\t\t\t<a class=\"blog_more\" href=\"#\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t\t\t\t<div class=\"blog_background\" style=\"background-image:url(images/blog_3.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\">Here are the trends I see coming this fall</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\">by admin | dec 01, 2017</span>
\t\t\t\t\t\t\t<a class=\"blog_more\" href=\"#\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Newsletter -->

\t<div class=\"newsletter\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center\">
\t\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t\t<p>Subscribe to our newsletter and get 20% off your first purchase</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<form action=\"post\">
\t\t\t\t\t\t<div class=\"newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center\">
\t\t\t\t\t\t\t<input id=\"newsletter_email\" type=\"email\" placeholder=\"Your email\" required=\"required\" data-error=\"Valid email is required.\">
\t\t\t\t\t\t\t<button id=\"newsletter_submit\" type=\"submit\" class=\"newsletter_submit_btn trans_300\" value=\"Submit\">subscribe</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
\t<script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
\t<script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}\"></script>
\t<script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
\t<script src=\"{{ asset('plugins/easing/easing.js') }}\"></script>
\t<script src=\"{{ asset('js/custom.js') }}\"></script>
{% endblock %}", "home/index.html.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/home/index.html.twig");
    }
}
