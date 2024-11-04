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

/* product/brouillon.html.twig */
class __TwigTemplate_ad2a1b7b578cb55bdc1018ab501f3fd3 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/brouillon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/brouillon.html.twig"));

        // line 1
        yield "<div class=\"container single_product_container\" style=\"margin-top: 180px;\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"breadcrumbs d-flex flex-row align-items-center\">
                <ul class=\"breadcrumbs d-flex flex-row align-items-center mb-3\">
                    <li><a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product");
        yield "\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 7, $this->source); })()), "typeProduit", [], "any", false, false, false, 7), "html", null, true);
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
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 21, $this->source); })()), "ImageUrlDump1", [], "any", false, false, false, 21), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 21, $this->source); })()), "libele", [], "any", false, false, false, 21), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 21, $this->source); })()), "ImageUrl4", [], "any", false, false, false, 21), "html", null, true);
        yield "\"></li>
                                <li class=\"active\"><img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 22, $this->source); })()), "ImageUrlDump2", [], "any", false, false, false, 22), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 22, $this->source); })()), "libele", [], "any", false, false, false, 22), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 22, $this->source); })()), "ImageUrl5", [], "any", false, false, false, 22), "html", null, true);
        yield "\"></li>
                                <li><img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 23, $this->source); })()), "ImageUrlDump3", [], "any", false, false, false, 23), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 23, $this->source); })()), "libele", [], "any", false, false, false, 23), "html", null, true);
        yield "\" data-image=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 23, $this->source); })()), "ImageUrl6", [], "any", false, false, false, 23), "html", null, true);
        yield "\"></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-9 order-lg-2 order-1\">
                        <div class=\"single_product_image\">
                            <div class=\"single_product_image_background\" style=\"background-image:url('";
        // line 29
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
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 38, $this->source); })()), "libele", [], "any", false, false, false, 38), "html", null, true);
        yield "</h2>
                    <p>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 39, $this->source); })()), "description1", [], "any", false, false, false, 39), "html", null, true);
        yield "</p>
                </div>
                <div class=\"free_delivery d-flex align-items-center justify-content-center\">
                    <span class=\"ti-truck\"></span><span>Free delivery</span>
                </div>
                <div class=\"original_price text-muted\">\$";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 44, $this->source); })()), "prix", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                <div class=\"product_price\">\$";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 45, $this->source); })()), "discountPrice", [], "any", false, false, false, 45), "html", null, true);
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
                    <span>Quantity:</span>
                    <div class=\"quantity_selector d-flex align-items-center\">
                        <span class=\"minus\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                        <span id=\"quantity_value\" class=\"mx-2\">1</span>
                        <span class=\"plus\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                    </div>
                    <div class=\"red_button add_to_cart_button\">
                        <a id=\"add_to_cart_link\" href=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72), "quantity" => 1, "clientId" => 2]), "html", null, true);
        yield "\">add to cart</a>
                    </div>
                    <div class=\"product_favorite d-flex flex-column align-items-center justify-content-center\"></div>
                </div>

                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                <script>
                    \$(document).ready(function() {
                        var quantity = 1;
                        var price = ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 81, $this->source); })()), "prix", [], "any", false, false, false, 81), "html", null, true);
        yield ";
                        var productId = ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "html", null, true);
        yield ";
                
                        function updateCartLink() {
                            var total = quantity * price;
                            var url = \"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86), "quantity" => "__quantity__", "clientId" => 2]), "html", null, true);
        yield "\";
                            url = url.replace('__quantity__', quantity);
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
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 139, $this->source); })()), "libele", [], "any", false, false, false, 139), "html", null, true);
        yield "</h2>
                        <p>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 140, $this->source); })()), "description2", [], "any", false, false, false, 140), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"tab_image\">
                        <img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 143, $this->source); })()), "ImageUrl1", [], "any", false, false, false, 143), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 143, $this->source); })()), "libele", [], "any", false, false, false, 143), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 146, $this->source); })()), "libele", [], "any", false, false, false, 146), "html", null, true);
        yield "</h2>
                        <p>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 147, $this->source); })()), "description3", [], "any", false, false, false, 147), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"col-lg-5 offset-lg-2\">
                    <div class=\"tab_image\">
                        <img src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 152, $this->source); })()), "ImageUrl2", [], "any", false, false, false, 152), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 152, $this->source); })()), "libele", [], "any", false, false, false, 152), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"tab_text_block\">
                        <h2>";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 155, $this->source); })()), "libele", [], "any", false, false, false, 155), "html", null, true);
        yield "</h2>
                        <p>";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 156, $this->source); })()), "description4", [], "any", false, false, false, 156), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"tab_image desc_last\">
                        <img src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 159, $this->source); })()), "ImageUrl3", [], "any", false, false, false, 159), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 159, $this->source); })()), "libele", [], "any", false, false, false, 159), "html", null, true);
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
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 172, $this->source); })()), "couleur", [], "any", false, false, false, 172), "html", null, true);
        yield "</span></p>
                    <p>Taille disponible: <span>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 173, $this->source); })()), "taille", [], "any", false, false, false, 173), "html", null, true);
        yield "</span></p>
                </div>
            </div>
        </div>

        <!-- Tab Reviews -->
        <div id=\"tab_3\" class=\"tab-pane fade\">
            <div class=\"row\">
                <!-- User Reviews -->
                <div class=\"col-lg-6\">
                    <div class=\"reviews\">
                        <h4>Reviews</h4>
                        <!-- Example review -->
                        <div class=\"review\">
                            <div class=\"review_user\">
                                <h5>John Doe</h5>
                                <span>5 stars</span>
                            </div>
                            <p>This is a review of the product.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Add Review -->
                <div class=\"col-lg-6\">
                    <div class=\"add_review\">
                        <form id=\"review_form\" action=\"\" method=\"post\">
                            <div class=\"form-group\">
                                <h1>Add Review</h1>
                                <input id=\"review_name\" class=\"form-control\" type=\"text\" name=\"name\" placeholder=\"Name*\" required>
                            </div>
                            <div class=\"form-group\">
                                <input id=\"review_email\" class=\"form-control\" type=\"text\" name=\"email\" placeholder=\"Email*\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea id=\"review_message\" class=\"form-control\" name=\"message\" placeholder=\"Your Review*\" rows=\"4\" required></textarea>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary\">Submit Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/brouillon.html.twig";
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
        return array (  314 => 173,  310 => 172,  292 => 159,  286 => 156,  282 => 155,  274 => 152,  266 => 147,  262 => 146,  254 => 143,  248 => 140,  244 => 139,  188 => 86,  181 => 82,  177 => 81,  165 => 72,  135 => 45,  131 => 44,  123 => 39,  119 => 38,  107 => 29,  94 => 23,  86 => 22,  78 => 21,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container single_product_container\" style=\"margin-top: 180px;\">
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
                                <li><img src=\"{{ instance.ImageUrlDump1 }}\" alt=\"{{ instance.libele }}\" data-image=\"{{ instance.ImageUrl4 }}\"></li>
                                <li class=\"active\"><img src=\"{{ instance.ImageUrlDump2 }}\" alt=\"{{ instance.libele }}\" data-image=\"{{ instance.ImageUrl5 }}\"></li>
                                <li><img src=\"{{ instance.ImageUrlDump3 }}\" alt=\"{{ instance.libele }}\" data-image=\"{{ instance.ImageUrl6 }}\"></li>
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
                    <span>Quantity:</span>
                    <div class=\"quantity_selector d-flex align-items-center\">
                        <span class=\"minus\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                        <span id=\"quantity_value\" class=\"mx-2\">1</span>
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
                            url = url.replace('__quantity__', quantity);
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

        <!-- Tab Reviews -->
        <div id=\"tab_3\" class=\"tab-pane fade\">
            <div class=\"row\">
                <!-- User Reviews -->
                <div class=\"col-lg-6\">
                    <div class=\"reviews\">
                        <h4>Reviews</h4>
                        <!-- Example review -->
                        <div class=\"review\">
                            <div class=\"review_user\">
                                <h5>John Doe</h5>
                                <span>5 stars</span>
                            </div>
                            <p>This is a review of the product.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Add Review -->
                <div class=\"col-lg-6\">
                    <div class=\"add_review\">
                        <form id=\"review_form\" action=\"\" method=\"post\">
                            <div class=\"form-group\">
                                <h1>Add Review</h1>
                                <input id=\"review_name\" class=\"form-control\" type=\"text\" name=\"name\" placeholder=\"Name*\" required>
                            </div>
                            <div class=\"form-group\">
                                <input id=\"review_email\" class=\"form-control\" type=\"text\" name=\"email\" placeholder=\"Email*\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea id=\"review_message\" class=\"form-control\" name=\"message\" placeholder=\"Your Review*\" rows=\"4\" required></textarea>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary\">Submit Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "product/brouillon.html.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/product/brouillon.html.twig");
    }
}
