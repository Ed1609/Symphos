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

/* category/index.html copy.twig */
class __TwigTemplate_ad6f467bd32981e32c17bbca7bc3d672 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html copy.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html copy.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html copy.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"container single_product_container\">
    <div class=\"row\">
        <div class=\"col\">
            <!-- Breadcrumbs -->
            <div class=\"breadcrumbs d-flex flex-row align-items-center\">
                <ul>
                    <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 14, $this->source); })()), "type_produit", [], "any", false, false, false, 14), "slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 14, $this->source); })()), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 14, $this->source); })()), "type_produit", [], "any", false, false, false, 14), "html", null, true);
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
                    <div class=\"col-lg-3 thumbnails_col order-lg-1 order-2\">
                        <div class=\"single_product_thumbnails\">
                            <ul>
                                <li><img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 28, $this->source); })()), "ImageUrlDump1", [], "any", false, false, false, 28), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 28, $this->source); })()), "libele", [], "any", false, false, false, 28), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 28, $this->source); })()), "ImageUrl4", [], "any", false, false, false, 28), "html", null, true);
        yield "\"></li>
                                <li class=\"active\"><img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 29, $this->source); })()), "ImageUrlDump2", [], "any", false, false, false, 29), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 29, $this->source); })()), "libele", [], "any", false, false, false, 29), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 29, $this->source); })()), "ImageUrl5", [], "any", false, false, false, 29), "html", null, true);
        yield "\"></li>
                                <li><img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 30, $this->source); })()), "ImageUrlDump3", [], "any", false, false, false, 30), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 30, $this->source); })()), "libele", [], "any", false, false, false, 30), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 30, $this->source); })()), "ImageUrl6", [], "any", false, false, false, 30), "html", null, true);
        yield "\"></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-9 image_col order-lg-2 order-1\">
                        <div class=\"single_product_image\">
                            <div class=\"single_product_image_background\" style=\"background-image:url('";
        // line 36
        yield "images/single_2.jpg";
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
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 45, $this->source); })()), "libele", [], "any", false, false, false, 45), "html", null, true);
        yield "</h2>
                    <p>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 46, $this->source); })()), "description1", [], "any", false, false, false, 46), "html", null, true);
        yield "</p>
                </div>
                <div class=\"free_delivery d-flex flex-row align-items-center justify-content-center\">
                    <span class=\"ti-truck\"></span><span>free delivery</span>
                </div>
                <div class=\"original_price\">\$";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 51, $this->source); })()), "prix", [], "any", false, false, false, 51), "html", null, true);
        yield "</div>
                <div class=\"product_price\">\$";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 52, $this->source); })()), "discountPrice", [], "any", false, false, false, 52), "html", null, true);
        yield "</div>
                <ul class=\"star_rating\">
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                </ul>
                <div class=\"product_color\">
                    <span>Select Color:</span>
                    <ul>
                        <li style=\"background: #e54e5d\"></li>
                        <li style=\"background: #252525\"></li>
                        <li style=\"background: #60b3f3\"></li>
                    </ul>
                </div>
                <div class=\"quantity d-flex flex-column flex-sm-row align-items-sm-center\">
                    <span>Quantity:</span>
                    <div class=\"quantity_selector\">
                        <span class=\"minus\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                        <span id=\"quantity_value\">1</span>
                        <span class=\"plus\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                    </div>
                    <div class=\"red_button add_to_cart_button\">
                        <a id=\"add_to_cart_link\" href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76), "quantity" => 1, "clientId" => 2]), "html", null, true);
        yield "\">add to cart</a>
                    </div>
                    <div class=\"product_favorite d-flex flex-column align-items-center justify-content-center\"></div>
                </div>

                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                <script>
                    \$(document).ready(function() {
                        var quantity = 1;
                        var price = ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 85, $this->source); })()), "prix", [], "any", false, false, false, 85), "html", null, true);
        yield ";
                        var productId = ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86), "html", null, true);
        yield ";
                
                        function updateCartLink() {
                            var total = quantity * price;
                            var url = \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90), "quantity" => "__quantity__", "clientId" => 2]), "html", null, true);
        yield "\";
                            url = url.replace('__quantity__', quantity).replace('__total__', total);
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

            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class=\"tabs_section_container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"tabs_container\">
                    <ul class=\"tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center\">
                        <li class=\"tab active\" data-active-tab=\"tab_1\"><span>Description</span></li>
                        <li class=\"tab\" data-active-tab=\"tab_2\"><span>Information Additionnelle</span></li>
                        <li class=\"tab\" data-active-tab=\"tab_3\"><span>Avis et commentaires</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <!-- Tab Description -->
                <div id=\"tab_1\" class=\"tab_container active\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 desc_col\">
                            <div class=\"tab_title\">
                                <h4>Description</h4>
                            </div>
                            <div class=\"tab_text_block\">
                                <h2>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 142, $this->source); })()), "libele", [], "any", false, false, false, 142), "html", null, true);
        yield "</h2>
                                <p>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 143, $this->source); })()), "description2", [], "any", false, false, false, 143), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"tab_image\">
                                <img src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 146, $this->source); })()), "ImageUrl1", [], "any", false, false, false, 146), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 146, $this->source); })()), "libele", [], "any", false, false, false, 146), "html", null, true);
        yield "\">
                            </div>
                            <div class=\"tab_text_block\">
                                <h2>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 149, $this->source); })()), "libele", [], "any", false, false, false, 149), "html", null, true);
        yield "</h2>
                                <p>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 150, $this->source); })()), "description3", [], "any", false, false, false, 150), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-lg-5 offset-lg-2 desc_col\">
                            <div class=\"tab_image\">
                                <img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 155, $this->source); })()), "ImageUrl2", [], "any", false, false, false, 155), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 155, $this->source); })()), "libele", [], "any", false, false, false, 155), "html", null, true);
        yield "\">
                            </div>
                            <div class=\"tab_text_block\">
                                <h2>";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 158, $this->source); })()), "libele", [], "any", false, false, false, 158), "html", null, true);
        yield "</h2>
                                <p>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 159, $this->source); })()), "description4", [], "any", false, false, false, 159), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"tab_image desc_last\">
                                <img src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 162, $this->source); })()), "ImageUrl3", [], "any", false, false, false, 162), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 162, $this->source); })()), "libele", [], "any", false, false, false, 162), "html", null, true);
        yield "\">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Additional Info -->
                <div id=\"tab_2\" class=\"tab_container\">
                    <div class=\"row\">
                        <div class=\"col additional_info_col\">
                            <div class=\"tab_title additional_info_title\">
                                <h4>Additional Information</h4>
                            </div>
                            <p>Couleur disponible: <span>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 175, $this->source); })()), "couleur", [], "any", false, false, false, 175), "html", null, true);
        yield "</span></p>
                            <p>Taille disponible: <span>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 176, $this->source); })()), "taille", [], "any", false, false, false, 176), "html", null, true);
        yield "</span></p>
                        </div>
                    </div>
                </div>

                <!-- Tab Reviews -->
                <div id=\"tab_3\" class=\"tab_container\">
                    <div class=\"row\">
                        <!-- User Reviews -->


                        <!-- Add Review -->
                        <div class=\"col-lg-6 add_review_col\">
                            <div class=\"add_review\">
                                <form id=\"review_form\" action=\"\" method=\"post\">
                                    <div>
                                        <h1>Add Review</h1>
                                        <input id=\"review_name\" class=\"form_input input_name\" type=\"text\" name=\"name\" placeholder=\"Name*\" required=\"required\" data-error=\"Name is required.\">
                                        <input id=\"review_email\" class=\"form_input input_email\" type=\"email\" name=\"email\" placeholder=\"Email*\" required=\"required\" data-error=\"Valid email is required.\">
                                    </div>
                                    <div>
                                        <h1>Rating:</h1>
                                        <ul class=\"user_star_rating\">
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                        </ul>
                                        <textarea id=\"review_message\" class=\"input_review\" name=\"message\" placeholder=\"Your Review\" rows=\"4\" required data-error=\"Please, leave us a review.\"></textarea>
                                    </div>
                                    <div class=\"text-left text-sm-right\">
                                        <button id=\"review_submit\" type=\"submit\" class=\"red_button review_submit_btn\">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        return "category/index.html copy.twig";
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
        return array (  364 => 176,  360 => 175,  342 => 162,  336 => 159,  332 => 158,  324 => 155,  316 => 150,  312 => 149,  304 => 146,  298 => 143,  294 => 142,  239 => 90,  232 => 86,  228 => 85,  216 => 76,  189 => 52,  185 => 51,  177 => 46,  173 => 45,  161 => 36,  148 => 30,  140 => 29,  132 => 28,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{instance.libele}}{% endblock %}

{% block body %}

<div class=\"container single_product_container\">
    <div class=\"row\">
        <div class=\"col\">
            <!-- Breadcrumbs -->
            <div class=\"breadcrumbs d-flex flex-row align-items-center\">
                <ul>
                    <li><a href=\"{{ path('Accueil') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('category', {'category': category.type_produit,'slug':instance.slug}) }}\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>{{ category.type_produit}}</a></li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Produit</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-7\">
            <div class=\"single_product_pics\">
                <div class=\"row\">
                    <div class=\"col-lg-3 thumbnails_col order-lg-1 order-2\">
                        <div class=\"single_product_thumbnails\">
                            <ul>
                                <li><img src=\"{{instance.ImageUrlDump1}}\" alt=\"{{ instance.libele }}\" data-image=\"{{instance.ImageUrl4}}\"></li>
                                <li class=\"active\"><img src=\"{{instance.ImageUrlDump2}}\" alt=\"{{ instance.libele }}\" data-image=\"{{instance.ImageUrl5}}\"></li>
                                <li><img src=\"{{instance.ImageUrlDump3}}\" alt=\"{{ instance.libele }}\" data-image=\"{{instance.ImageUrl6}}\"></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-9 image_col order-lg-2 order-1\">
                        <div class=\"single_product_image\">
                            <div class=\"single_product_image_background\" style=\"background-image:url('{{'images/single_2.jpg'}}')\"></div>
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
                <div class=\"free_delivery d-flex flex-row align-items-center justify-content-center\">
                    <span class=\"ti-truck\"></span><span>free delivery</span>
                </div>
                <div class=\"original_price\">\${{ instance.prix }}</div>
                <div class=\"product_price\">\${{ instance.discountPrice }}</div>
                <ul class=\"star_rating\">
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star\" aria-hidden=\"true\"></i></li>
                    <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                </ul>
                <div class=\"product_color\">
                    <span>Select Color:</span>
                    <ul>
                        <li style=\"background: #e54e5d\"></li>
                        <li style=\"background: #252525\"></li>
                        <li style=\"background: #60b3f3\"></li>
                    </ul>
                </div>
                <div class=\"quantity d-flex flex-column flex-sm-row align-items-sm-center\">
                    <span>Quantity:</span>
                    <div class=\"quantity_selector\">
                        <span class=\"minus\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                        <span id=\"quantity_value\">1</span>
                        <span class=\"plus\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                    </div>
                    <div class=\"red_button add_to_cart_button\">
                        <a id=\"add_to_cart_link\" href=\"{{ path('add_card', {'productId': instance.id, 'quantity': 1, 'clientId': 2}) }}\">add to cart</a>
                    </div>
                    <div class=\"product_favorite d-flex flex-column align-items-center justify-content-center\"></div>
                </div>

                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                <script>
                    \$(document).ready(function() {
                        var quantity = 1;
                        var price = {{ instance.prix }};
                        var productId = {{ instance.id }};
                
                        function updateCartLink() {
                            var total = quantity * price;
                            var url = \"{{ path('add_card', {'productId': instance.id, 'quantity': '__quantity__', 'clientId': 2}) }}\";
                            url = url.replace('__quantity__', quantity).replace('__total__', total);
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

            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class=\"tabs_section_container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"tabs_container\">
                    <ul class=\"tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center\">
                        <li class=\"tab active\" data-active-tab=\"tab_1\"><span>Description</span></li>
                        <li class=\"tab\" data-active-tab=\"tab_2\"><span>Information Additionnelle</span></li>
                        <li class=\"tab\" data-active-tab=\"tab_3\"><span>Avis et commentaires</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <!-- Tab Description -->
                <div id=\"tab_1\" class=\"tab_container active\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 desc_col\">
                            <div class=\"tab_title\">
                                <h4>Description</h4>
                            </div>
                            <div class=\"tab_text_block\">
                                <h2>{{ instance.libele }}</h2>
                                <p>{{ instance.description2 }}</p>
                            </div>
                            <div class=\"tab_image\">
                                <img src=\"{{instance.ImageUrl1}}\" alt=\"{{ instance.libele }}\">
                            </div>
                            <div class=\"tab_text_block\">
                                <h2>{{ instance.libele }}</h2>
                                <p>{{ instance.description3 }}</p>
                            </div>
                        </div>
                        <div class=\"col-lg-5 offset-lg-2 desc_col\">
                            <div class=\"tab_image\">
                                <img src=\"{{ instance.ImageUrl2}}\" alt=\"{{ instance.libele }}\">
                            </div>
                            <div class=\"tab_text_block\">
                                <h2>{{ instance.libele }}</h2>
                                <p>{{ instance.description4 }}</p>
                            </div>
                            <div class=\"tab_image desc_last\">
                                <img src=\"{{ instance.ImageUrl3}}\" alt=\"{{ instance.libele }}\">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Additional Info -->
                <div id=\"tab_2\" class=\"tab_container\">
                    <div class=\"row\">
                        <div class=\"col additional_info_col\">
                            <div class=\"tab_title additional_info_title\">
                                <h4>Additional Information</h4>
                            </div>
                            <p>Couleur disponible: <span>{{ instance.couleur }}</span></p>
                            <p>Taille disponible: <span>{{ instance.taille }}</span></p>
                        </div>
                    </div>
                </div>

                <!-- Tab Reviews -->
                <div id=\"tab_3\" class=\"tab_container\">
                    <div class=\"row\">
                        <!-- User Reviews -->


                        <!-- Add Review -->
                        <div class=\"col-lg-6 add_review_col\">
                            <div class=\"add_review\">
                                <form id=\"review_form\" action=\"\" method=\"post\">
                                    <div>
                                        <h1>Add Review</h1>
                                        <input id=\"review_name\" class=\"form_input input_name\" type=\"text\" name=\"name\" placeholder=\"Name*\" required=\"required\" data-error=\"Name is required.\">
                                        <input id=\"review_email\" class=\"form_input input_email\" type=\"email\" name=\"email\" placeholder=\"Email*\" required=\"required\" data-error=\"Valid email is required.\">
                                    </div>
                                    <div>
                                        <h1>Rating:</h1>
                                        <ul class=\"user_star_rating\">
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                            <li><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></li>
                                        </ul>
                                        <textarea id=\"review_message\" class=\"input_review\" name=\"message\" placeholder=\"Your Review\" rows=\"4\" required data-error=\"Please, leave us a review.\"></textarea>
                                    </div>
                                    <div class=\"text-left text-sm-right\">
                                        <button id=\"review_submit\" type=\"submit\" class=\"red_button review_submit_btn\">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "category/index.html copy.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/category/index.html copy.twig");
    }
}
