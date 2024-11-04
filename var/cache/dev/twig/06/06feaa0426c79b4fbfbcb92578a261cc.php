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

/* _navbar.html.twig */
class __TwigTemplate_a3f96bd67f8d40fb625ee0f9019b3caa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        yield "<header class=\"header trans_30\">
    <div class=\"top_nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"top_nav_left\">
                        Livraison gratuite pour les commandes à Brazzaville de plus de 10.000FCFA
                    </div>
                </div>
                <div class=\"col-md-6 text-right\">
                    <div class=\"top_nav_right\">
                        <ul class=\"top_nav_menu\">
                            <li class=\"account\">
                                ";
        // line 14
        if (array_key_exists("PrenomUtilisateur", $context)) {
            // line 15
            yield "                                    <a href=\"#\" aria-label=\"Mon Compte\">
                                        Bonjour ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["PrenomUtilisateur"]) || array_key_exists("PrenomUtilisateur", $context) ? $context["PrenomUtilisateur"] : (function () { throw new RuntimeError('Variable "PrenomUtilisateur" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "
                                        <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"account_selection\">
                                        <li><a href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" aria-label=\"Déconnexion\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>Déconnexion</a></li>
                                    </ul>
                                ";
        } else {
            // line 23
            yield "                                    <a href=\"#\" aria-label=\"Mon Compte\">
                                        Mon Compte
                                        <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"account_selection\">
                                        <li><a href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" aria-label=\"Connexion\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                                        <li><a href=\"";
            // line 29
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" aria-label=\"Inscription\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Inscription</a></li>
                                    </ul>
                                ";
        }
        // line 32
        yield "                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"main_nav_container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-right\">
                    <div class=\"logo_container\">
                        <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\" aria-label=\"Home\">Allo<span>Shopy</span></a>
                    </div>
                    <nav class=\"navbar\" role=\"navigation\">
                        <ul class=\"navbar_menu\">
                            <li><a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\" aria-label=\"Accueil\">Accueil</a></li>
                            <li><a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "Boutique"]);
        yield "\" aria-label=\"Boutique\">Boutique</a></li>
                            <li><a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "promotion"]);
        yield "\" aria-label=\"Promotion\">Promotion</a></li>
                            <li><a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.contact");
        yield "\" aria-label=\"Contact\">Contact</a></li>
                        </ul>
                        <ul class=\"navbar_user\">
                            <li><a href=\"#\" aria-label=\"Search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        yield "\" aria-label=\"User\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a></li>
                            <li class=\"checkout\">
                                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" aria-label=\"Shopping Cart\">
                                    <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>
                                    <span id=\"checkout_items\" class=\"checkout_items\">";
        // line 60
        (((array_key_exists("cart_quantity", $context) &&  !(null === (isset($context["cart_quantity"]) || array_key_exists("cart_quantity", $context) ? $context["cart_quantity"] : (function () { throw new RuntimeError('Variable "cart_quantity" does not exist.', 60, $this->source); })())))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cart_quantity"]) || array_key_exists("cart_quantity", $context) ? $context["cart_quantity"] : (function () { throw new RuntimeError('Variable "cart_quantity" does not exist.', 60, $this->source); })()), "html", null, true)) : (yield 0));
        yield "</span>
                                </a>
                            </li>
                        </ul>
                        <div class=\"hamburger_container\">
                            <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

\t<div class=\"fs_menu_overlay\"></div>
\t<div class=\"hamburger_menu\">
\t\t<div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
\t\t<div class=\"hamburger_menu_content text-right\">
\t\t\t<ul class=\"menu_top_nav\">
\t\t\t\t<li class=\"menu_item has-children\">
                    ";
        // line 81
        if (array_key_exists("PrenomUtilisateur", $context)) {
            // line 82
            yield "                        <a href=\"#\" aria-label=\"Mon Compte\">
                            Bonjour ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["PrenomUtilisateur"]) || array_key_exists("PrenomUtilisateur", $context) ? $context["PrenomUtilisateur"] : (function () { throw new RuntimeError('Variable "PrenomUtilisateur" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "
                            <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                        </a>
                        <ul class=\"account_selection\">
                            <li><a href=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" aria-label=\"Déconnexion\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>Déconnexion</a></li>
                        </ul>
                    ";
        } else {
            // line 90
            yield "                        <a href=\"#\" aria-label=\"Mon Compte\">
                            Mon Compte
                            <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                        </a>
                        <ul class=\"account_selection\">
                            <li><a href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("l_ogin");
            yield "\" aria-label=\"Connexion\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                            <li><a href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            yield "\" aria-label=\"Inscription\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Inscription</a></li>
                        </ul>
                    ";
        }
        // line 99
        yield "\t\t\t\t</li>
                    <li class=\"menu_item\"><a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\" aria-label=\"Accueil\">Accueil</a></li>
                    <li class=\"menu_item\"><a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "Boutique"]);
        yield "\" aria-label=\"Boutique\">Boutique</a></li>
                    <li class=\"menu_item\"><a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "promotion"]);
        yield "\" aria-label=\"Promotion\">Promotion</a></li>
                    <li class=\"menu_item\"><a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.contact");
        yield "\" aria-label=\"Contact\">Contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_navbar.html.twig";
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
        return array (  223 => 103,  219 => 102,  215 => 101,  211 => 100,  208 => 99,  202 => 96,  198 => 95,  191 => 90,  185 => 87,  178 => 83,  175 => 82,  173 => 81,  149 => 60,  144 => 58,  139 => 56,  132 => 52,  128 => 51,  124 => 50,  120 => 49,  113 => 45,  98 => 32,  92 => 29,  88 => 28,  81 => 23,  75 => 20,  68 => 16,  65 => 15,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"header trans_30\">
    <div class=\"top_nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"top_nav_left\">
                        Livraison gratuite pour les commandes à Brazzaville de plus de 10.000FCFA
                    </div>
                </div>
                <div class=\"col-md-6 text-right\">
                    <div class=\"top_nav_right\">
                        <ul class=\"top_nav_menu\">
                            <li class=\"account\">
                                {% if PrenomUtilisateur is defined %}
                                    <a href=\"#\" aria-label=\"Mon Compte\">
                                        Bonjour {{PrenomUtilisateur }}
                                        <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"account_selection\">
                                        <li><a href=\"{{ path('app_logout') }}\" aria-label=\"Déconnexion\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>Déconnexion</a></li>
                                    </ul>
                                {% else %}
                                    <a href=\"#\" aria-label=\"Mon Compte\">
                                        Mon Compte
                                        <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"account_selection\">
                                        <li><a href=\"{{ path('app_login') }}\" aria-label=\"Connexion\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                                        <li><a href=\"{{ path('app_register') }}\" aria-label=\"Inscription\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Inscription</a></li>
                                    </ul>
                                {% endif %}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"main_nav_container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-right\">
                    <div class=\"logo_container\">
                        <a href=\"{{ path('Accueil') }}\" aria-label=\"Home\">Allo<span>Shopy</span></a>
                    </div>
                    <nav class=\"navbar\" role=\"navigation\">
                        <ul class=\"navbar_menu\">
                            <li><a href=\"{{ path('Accueil') }}\" aria-label=\"Accueil\">Accueil</a></li>
                            <li><a href=\"{{ path('all-product', {'category': 'Boutique'}) }}\" aria-label=\"Boutique\">Boutique</a></li>
                            <li><a href=\"{{ path('all-product', {'category': 'promotion'}) }}\" aria-label=\"Promotion\">Promotion</a></li>
                            <li><a href=\"{{ path('user.contact') }}\" aria-label=\"Contact\">Contact</a></li>
                        </ul>
                        <ul class=\"navbar_user\">
                            <li><a href=\"#\" aria-label=\"Search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"{{ path('profil') }}\" aria-label=\"User\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a></li>
                            <li class=\"checkout\">
                                <a href=\"{{path('app_cart')}}\" aria-label=\"Shopping Cart\">
                                    <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>
                                    <span id=\"checkout_items\" class=\"checkout_items\">{{ cart_quantity ?? 0 }}</span>
                                </a>
                            </li>
                        </ul>
                        <div class=\"hamburger_container\">
                            <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

\t<div class=\"fs_menu_overlay\"></div>
\t<div class=\"hamburger_menu\">
\t\t<div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
\t\t<div class=\"hamburger_menu_content text-right\">
\t\t\t<ul class=\"menu_top_nav\">
\t\t\t\t<li class=\"menu_item has-children\">
                    {% if PrenomUtilisateur is defined %}
                        <a href=\"#\" aria-label=\"Mon Compte\">
                            Bonjour {{PrenomUtilisateur }}
                            <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                        </a>
                        <ul class=\"account_selection\">
                            <li><a href=\"{{ path('app_logout') }}\" aria-label=\"Déconnexion\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>Déconnexion</a></li>
                        </ul>
                    {% else %}
                        <a href=\"#\" aria-label=\"Mon Compte\">
                            Mon Compte
                            <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                        </a>
                        <ul class=\"account_selection\">
                            <li><a href=\"{{ path('l_ogin') }}\" aria-label=\"Connexion\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                            <li><a href=\"{{ path('register') }}\" aria-label=\"Inscription\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Inscription</a></li>
                        </ul>
                    {% endif %}
\t\t\t\t</li>
                    <li class=\"menu_item\"><a href=\"{{ path('Accueil') }}\" aria-label=\"Accueil\">Accueil</a></li>
                    <li class=\"menu_item\"><a href=\"{{ path('all-product', {'category': 'Boutique'}) }}\" aria-label=\"Boutique\">Boutique</a></li>
                    <li class=\"menu_item\"><a href=\"{{ path('all-product', {'category': 'promotion'}) }}\" aria-label=\"Promotion\">Promotion</a></li>
                    <li class=\"menu_item\"><a href=\"{{ path('user.contact') }}\" aria-label=\"Contact\">Contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>", "_navbar.html.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/_navbar.html.twig");
    }
}
