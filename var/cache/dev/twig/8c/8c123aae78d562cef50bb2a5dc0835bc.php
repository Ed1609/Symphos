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

/* product/index.html.twig */
class __TwigTemplate_3d3aec000c2e3e8806fe8632cf473a06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 3, $this->source); })()), "libele", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/themify-icons/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/single_styles.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/single_responsive.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "<div class=\"container single_product_container\" style=\"margin-top: 180px;\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"breadcrumbs d-flex flex-row align-items-center\">
                <ul class=\"breadcrumbs d-flex flex-row align-items-center mb-3\">
                    <li><a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product");
        yield "\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 24, $this->source); })()), "typeProduit", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Produit</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-7\">
            <div class=\"single_product_pics\">
                <div class=\"row\">
                    <div class=\"col-lg-3 order-lg-1 order-2\">
                        <div class=\"single_product_thumbnails\">
                            <ul class=\"list-unstyled\">
                                <li><img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 38, $this->source); })()), "ImageUrlDump1", [], "any", false, false, false, 38), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 38, $this->source); })()), "ImageUrlDump1", [], "any", false, false, false, 38), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 38, $this->source); })()), "ImageUrl4", [], "any", false, false, false, 38), "html", null, true);
        yield "\"></li>
                                <li class=\"active\"><img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 39, $this->source); })()), "ImageUrlDump2", [], "any", false, false, false, 39), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 39, $this->source); })()), "ImageUrlDump2", [], "any", false, false, false, 39), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 39, $this->source); })()), "ImageUrl5", [], "any", false, false, false, 39), "html", null, true);
        yield "\"></li>
                                <li><img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 40, $this->source); })()), "ImageUrlDump3", [], "any", false, false, false, 40), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 40, $this->source); })()), "ImageUrlDump2", [], "any", false, false, false, 40), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 40, $this->source); })()), "ImageUrl6", [], "any", false, false, false, 40), "html", null, true);
        yield "\"></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-9 order-lg-2 order-1\">
                        <div class=\"single_product_image\">
                            <div class=\"single_product_image_background\" style=\"background-image:url('";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/single_2.jpg"), "html", null, true);
        yield "')\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-5\">
            <div class=\"product_details\">
                <div class=\"product_details_title\">
                    <h2>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 55, $this->source); })()), "libele", [], "any", false, false, false, 55), "html", null, true);
        yield "</h2>
                    <p>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 56, $this->source); })()), "description1", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
                </div>
                <div class=\"free_delivery d-flex align-items-center justify-content-center\">
                    <span class=\"ti-truck\"></span><span>Free delivery</span>
                </div>
                <div class=\"original_price text-muted\">\$";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 61, $this->source); })()), "prix", [], "any", false, false, false, 61), "html", null, true);
        yield "</div>
                <div class=\"product_price\">\$";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 62, $this->source); })()), "discountPrice", [], "any", false, false, false, 62), "html", null, true);
        yield "</div>
                
                <!-- Alignement des étoiles sur une ligne -->
                <ul class=\"star_rating list-inline\">
                    <li class=\"list-inline-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                </ul>
                
                <div class=\"product_color\">
                    <span>Select Color:</span>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\" style=\"background: #e54e5d\"></li>
                        <li class=\"list-inline-item\" style=\"background: #252525\"></li>
                        <li class=\"list-inline-item\" style=\"background: #60b3f3\"></li>
                    </ul>
                </div>
                <div class=\"quantity d-flex flex-column flex-sm-row align-items-sm-center\">
                    <span>Quantity: </span>
                    <div class=\"quantity_selector d-flex align-items-center\">
                        <span class=\"minus\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                        <span id=\"quantity_value\" class=\"mx-2\">1</span>
                        <span class=\"plus\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                    </div>
                    ";
        // line 88
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })())) {
            // line 89
            yield "                        <div class=\"red_button\">
                            <a id=\"add_to_cart_link\" href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["idProduit" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90), "quantity" => 1, "idUtilisateur" => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })())]), "html", null, true);
            yield "\">add to cart</a>
                        </div>

                        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                        <script>
                            \$(document).ready(function() {
                                var quantity = 1;
                                var price = ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 97, $this->source); })()), "prix", [], "any", false, false, false, 97), "html", null, true);
            yield ";
                                var productId = ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98), "html", null, true);
            yield ";
                                var user = ";
            // line 99
            (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })())), "html", null, true)) : (yield "null"));
            yield ";
                                var userId = user ? user : null;
                        
                                function updateCartLink() {
                                    var total = quantity * price;
                                    var url;
                                    if (user) {
                                        url = \"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["idProduit" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106), "quantity" => "__quantity__", "idUtilisateur" => "__userId__"]), "html", null, true);
            yield "\";
                                        url = url.replace('__quantity__', quantity).replace('__userId__', userId);
                                    } else {
                                        url = \"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("l_ogin");
            yield "\";
                                    }
                                    \$('#add_to_cart_link').attr('href', url);
                                }
                        
                                \$('.plus').click(function() {
                                    quantity++;
                                    \$('#quantity_value').text(quantity);
                                    updateCartLink();
                                });
                        
                                \$('.minus').click(function() {
                                    if (quantity > 1) {
                                        quantity--;
                                        \$('#quantity_value').text(quantity);
                                        updateCartLink();
                                    }
                                });
                        
                                updateCartLink(); // Initial update
                            });
                        </script>

                    ";
        } else {
            // line 133
            yield "                        <div class=\"red_button\">
                            <a id=\"add_to_cart_link\" href=\"";
            // line 134
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("l_ogin");
            yield "\">add to cart</a>
                        </div>
                    ";
        }
        // line 137
        yield "                    <div class=\"product_favorite d-flex flex-column align-items-center justify-content-center\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class=\"tabs_section_container container mt-4\">
    <div class=\"tabs_container\">
        <ul class=\"tabs nav nav-tabs d-flex flex-sm-row flex-column align-items-center justify-content-center\">
            <li class=\"tab active\" data-active-tab=\"tab_1\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab_1\">Description</a>
            </li>
            <li class=\"tab\" data-active-tab=\"tab_2\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab_2\">Information Additionnelle</a>
            </li>
            <li class=\"tab\" data-active-tab=\"tab_3\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab_3\">Avis et Commentaires</a>
            </li>
        </ul>
    </div>

    <div class=\"tab-content mt-3\">
        <!-- Tab Description -->
        <div id=\"tab_1\" class=\"tab-pane fade show active\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"tab_title\">
                        <h4>Description</h4>
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 169, $this->source); })()), "libele", [], "any", false, false, false, 169), "html", null, true);
        yield "</h2>
                        <p>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 170, $this->source); })()), "description2", [], "any", false, false, false, 170), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"tab_image\">
                        <img src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 173, $this->source); })()), "ImageUrl1", [], "any", false, false, false, 173), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 173, $this->source); })()), "libele", [], "any", false, false, false, 173), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 176, $this->source); })()), "libele", [], "any", false, false, false, 176), "html", null, true);
        yield "</h2>
                        <p>";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 177, $this->source); })()), "description3", [], "any", false, false, false, 177), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"col-lg-5 offset-lg-2\">
                    <div class=\"tab_image\">
                        <img src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 182, $this->source); })()), "ImageUrl2", [], "any", false, false, false, 182), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 182, $this->source); })()), "libele", [], "any", false, false, false, 182), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 185, $this->source); })()), "libele", [], "any", false, false, false, 185), "html", null, true);
        yield "</h2>
                        <p>";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 186, $this->source); })()), "description4", [], "any", false, false, false, 186), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"tab_image desc_last\">
                        <img src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 189, $this->source); })()), "ImageUrl3", [], "any", false, false, false, 189), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 189, $this->source); })()), "libele", [], "any", false, false, false, 189), "html", null, true);
        yield "\">
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Additional Info -->
        <div id=\"tab_2\" class=\"tab-pane fade\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"tab_title additional_info_title\">
                        <h4>Information Additionnelle</h4>
                    </div>
                    <p>Couleur disponible: <span>";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 202, $this->source); })()), "couleur", [], "any", false, false, false, 202), "html", null, true);
        yield "</span></p>
                    <p>Taille disponible: <span>";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 203, $this->source); })()), "taille", [], "any", false, false, false, 203), "html", null, true);
        yield "</span></p>
                </div>
            </div>
        </div>

\t\t\t\t\t<!-- Tab Reviews -->

\t\t\t\t\t<div id=\"tab_3\" class=\"tab_container\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- User Reviews -->

\t\t\t\t\t\t\t<div class=\"col-lg-6 reviews_col\">
\t\t\t\t\t\t\t\t<div class=\"tab_title reviews_title\">
\t\t\t\t\t\t\t\t\t<h4>Reviews (2)</h4>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- User Review -->

\t\t\t\t\t\t\t\t<div class=\"user_review_container d-flex flex-column flex-sm-row\">
\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user_pic\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_rating\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"star_rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">27 Aug 2016</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_name\">Brandon William</div>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- User Review -->

\t\t\t\t\t\t\t\t<div class=\"user_review_container d-flex flex-column flex-sm-row\">
\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user_pic\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_rating\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"star_rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">27 Aug 2016</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_name\">Brandon William</div>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Add Review -->

\t\t\t\t\t\t\t<div class=\"col-lg-6 add_review_col\">

\t\t\t\t\t\t\t\t<div class=\"add_review\">
\t\t\t\t\t\t\t\t\t<form id=\"review_form\" action=\"post\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h1>Add Review</h1>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"review_name\" class=\"form_input input_name\" type=\"text\" name=\"name\" placeholder=\"Name*\" required=\"required\" data-error=\"Name is required.\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"review_email\" class=\"form_input input_email\" type=\"email\" name=\"email\" placeholder=\"Email*\" required=\"required\" data-error=\"Valid email is required.\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h1>Your Rating:</h1>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"user_star_rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"review_message\" class=\"input_review\" name=\"message\"  placeholder=\"Your Review\" rows=\"4\" required data-error=\"Please, leave us a review.\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-left text-sm-right\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"review_submit\" type=\"submit\" class=\"red_button review_submit_btn trans_300\" value=\"Submit\">submit</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 304
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

        // line 305
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/single_custom.js"), "html", null, true);
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
        return "product/index.html.twig";
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
        return array (  609 => 312,  605 => 311,  601 => 310,  597 => 309,  593 => 308,  589 => 307,  585 => 306,  580 => 305,  567 => 304,  456 => 203,  452 => 202,  434 => 189,  428 => 186,  424 => 185,  416 => 182,  408 => 177,  404 => 176,  396 => 173,  390 => 170,  386 => 169,  352 => 137,  346 => 134,  343 => 133,  316 => 109,  310 => 106,  300 => 99,  296 => 98,  292 => 97,  282 => 90,  279 => 89,  277 => 88,  248 => 62,  244 => 61,  236 => 56,  232 => 55,  220 => 46,  207 => 40,  199 => 39,  191 => 38,  172 => 24,  168 => 23,  161 => 18,  148 => 17,  135 => 14,  131 => 13,  127 => 12,  123 => 11,  119 => 10,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ instance.libele }}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
    <link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/themify-icons/themify-icons.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/single_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/single_responsive.css') }}\">
{% endblock %}

{% block body %}
<div class=\"container single_product_container\" style=\"margin-top: 180px;\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"breadcrumbs d-flex flex-row align-items-center\">
                <ul class=\"breadcrumbs d-flex flex-row align-items-center mb-3\">
                    <li><a href=\"{{ path('Accueil') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('all-product') }}\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>{{ instance.typeProduit }}</a></li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Produit</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-7\">
            <div class=\"single_product_pics\">
                <div class=\"row\">
                    <div class=\"col-lg-3 order-lg-1 order-2\">
                        <div class=\"single_product_thumbnails\">
                            <ul class=\"list-unstyled\">
                                <li><img src=\"{{ instance.ImageUrlDump1 }}\" alt=\"{{ instance.ImageUrlDump1 }}\" data-image=\"{{ instance.ImageUrl4 }}\"></li>
                                <li class=\"active\"><img src=\"{{ instance.ImageUrlDump2 }}\" alt=\"{{ instance.ImageUrlDump2 }}\" data-image=\"{{ instance.ImageUrl5 }}\"></li>
                                <li><img src=\"{{ instance.ImageUrlDump3 }}\" alt=\"{{ instance.ImageUrlDump2 }}\" data-image=\"{{ instance.ImageUrl6 }}\"></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-9 order-lg-2 order-1\">
                        <div class=\"single_product_image\">
                            <div class=\"single_product_image_background\" style=\"background-image:url('{{ asset('images/single_2.jpg') }}')\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-5\">
            <div class=\"product_details\">
                <div class=\"product_details_title\">
                    <h2>{{ instance.libele }}</h2>
                    <p>{{ instance.description1 }}</p>
                </div>
                <div class=\"free_delivery d-flex align-items-center justify-content-center\">
                    <span class=\"ti-truck\"></span><span>Free delivery</span>
                </div>
                <div class=\"original_price text-muted\">\${{ instance.prix }}</div>
                <div class=\"product_price\">\${{ instance.discountPrice }}</div>
                
                <!-- Alignement des étoiles sur une ligne -->
                <ul class=\"star_rating list-inline\">
                    <li class=\"list-inline-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                </ul>
                
                <div class=\"product_color\">
                    <span>Select Color:</span>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\" style=\"background: #e54e5d\"></li>
                        <li class=\"list-inline-item\" style=\"background: #252525\"></li>
                        <li class=\"list-inline-item\" style=\"background: #60b3f3\"></li>
                    </ul>
                </div>
                <div class=\"quantity d-flex flex-column flex-sm-row align-items-sm-center\">
                    <span>Quantity: </span>
                    <div class=\"quantity_selector d-flex align-items-center\">
                        <span class=\"minus\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                        <span id=\"quantity_value\" class=\"mx-2\">1</span>
                        <span class=\"plus\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                    </div>
                    {% if user %}
                        <div class=\"red_button\">
                            <a id=\"add_to_cart_link\" href=\"{{ path('add_card', {'idProduit': instance.id, 'quantity': 1, 'idUtilisateur': user}) }}\">add to cart</a>
                        </div>

                        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                        <script>
                            \$(document).ready(function() {
                                var quantity = 1;
                                var price = {{ instance.prix }};
                                var productId = {{ instance.id }};
                                var user = {{ user ? user|json_encode : 'null' }};
                                var userId = user ? user : null;
                        
                                function updateCartLink() {
                                    var total = quantity * price;
                                    var url;
                                    if (user) {
                                        url = \"{{ path('add_card', {'idProduit': instance.id, 'quantity': '__quantity__', 'idUtilisateur': '__userId__'}) }}\";
                                        url = url.replace('__quantity__', quantity).replace('__userId__', userId);
                                    } else {
                                        url = \"{{ path('l_ogin') }}\";
                                    }
                                    \$('#add_to_cart_link').attr('href', url);
                                }
                        
                                \$('.plus').click(function() {
                                    quantity++;
                                    \$('#quantity_value').text(quantity);
                                    updateCartLink();
                                });
                        
                                \$('.minus').click(function() {
                                    if (quantity > 1) {
                                        quantity--;
                                        \$('#quantity_value').text(quantity);
                                        updateCartLink();
                                    }
                                });
                        
                                updateCartLink(); // Initial update
                            });
                        </script>

                    {% else %}
                        <div class=\"red_button\">
                            <a id=\"add_to_cart_link\" href=\"{{ path('l_ogin') }}\">add to cart</a>
                        </div>
                    {% endif %}
                    <div class=\"product_favorite d-flex flex-column align-items-center justify-content-center\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class=\"tabs_section_container container mt-4\">
    <div class=\"tabs_container\">
        <ul class=\"tabs nav nav-tabs d-flex flex-sm-row flex-column align-items-center justify-content-center\">
            <li class=\"tab active\" data-active-tab=\"tab_1\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab_1\">Description</a>
            </li>
            <li class=\"tab\" data-active-tab=\"tab_2\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab_2\">Information Additionnelle</a>
            </li>
            <li class=\"tab\" data-active-tab=\"tab_3\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab_3\">Avis et Commentaires</a>
            </li>
        </ul>
    </div>

    <div class=\"tab-content mt-3\">
        <!-- Tab Description -->
        <div id=\"tab_1\" class=\"tab-pane fade show active\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"tab_title\">
                        <h4>Description</h4>
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>{{ instance.libele }}</h2>
                        <p>{{ instance.description2 }}</p>
                    </div>
                    <div class=\"tab_image\">
                        <img src=\"{{ instance.ImageUrl1 }}\" alt=\"{{ instance.libele }}\">
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>{{ instance.libele }}</h2>
                        <p>{{ instance.description3 }}</p>
                    </div>
                </div>
                <div class=\"col-lg-5 offset-lg-2\">
                    <div class=\"tab_image\">
                        <img src=\"{{ instance.ImageUrl2 }}\" alt=\"{{ instance.libele }}\">
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>{{ instance.libele }}</h2>
                        <p>{{ instance.description4 }}</p>
                    </div>
                    <div class=\"tab_image desc_last\">
                        <img src=\"{{ instance.ImageUrl3 }}\" alt=\"{{ instance.libele }}\">
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Additional Info -->
        <div id=\"tab_2\" class=\"tab-pane fade\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"tab_title additional_info_title\">
                        <h4>Information Additionnelle</h4>
                    </div>
                    <p>Couleur disponible: <span>{{ instance.couleur }}</span></p>
                    <p>Taille disponible: <span>{{ instance.taille }}</span></p>
                </div>
            </div>
        </div>

\t\t\t\t\t<!-- Tab Reviews -->

\t\t\t\t\t<div id=\"tab_3\" class=\"tab_container\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- User Reviews -->

\t\t\t\t\t\t\t<div class=\"col-lg-6 reviews_col\">
\t\t\t\t\t\t\t\t<div class=\"tab_title reviews_title\">
\t\t\t\t\t\t\t\t\t<h4>Reviews (2)</h4>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- User Review -->

\t\t\t\t\t\t\t\t<div class=\"user_review_container d-flex flex-column flex-sm-row\">
\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user_pic\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_rating\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"star_rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">27 Aug 2016</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_name\">Brandon William</div>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- User Review -->

\t\t\t\t\t\t\t\t<div class=\"user_review_container d-flex flex-column flex-sm-row\">
\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user_pic\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_rating\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"star_rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">27 Aug 2016</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"user_name\">Brandon William</div>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Add Review -->

\t\t\t\t\t\t\t<div class=\"col-lg-6 add_review_col\">

\t\t\t\t\t\t\t\t<div class=\"add_review\">
\t\t\t\t\t\t\t\t\t<form id=\"review_form\" action=\"post\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h1>Add Review</h1>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"review_name\" class=\"form_input input_name\" type=\"text\" name=\"name\" placeholder=\"Name*\" required=\"required\" data-error=\"Name is required.\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"review_email\" class=\"form_input input_email\" type=\"email\" name=\"email\" placeholder=\"Email*\" required=\"required\" data-error=\"Valid email is required.\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h1>Your Rating:</h1>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"user_star_rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"review_message\" class=\"input_review\" name=\"message\"  placeholder=\"Your Review\" rows=\"4\" required data-error=\"Please, leave us a review.\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-left text-sm-right\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"review_submit\" type=\"submit\" class=\"red_button review_submit_btn trans_300\" value=\"Submit\">submit</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
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
    <script src=\"{{ asset('js/single_custom.js') }}\"></script>
{% endblock %}
", "product/index.html.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/product/index.html.twig");
    }
}
