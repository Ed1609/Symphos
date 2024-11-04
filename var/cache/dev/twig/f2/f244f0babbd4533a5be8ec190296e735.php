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

/* navbar.html.twig */
class __TwigTemplate_ba4eaa8c1f0db72f27fe1c2a5f63534f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        yield "<header class=\"header trans_30\">
    <div class=\"top_nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"top_nav_left\"> Livraison gratuite !! </div>
                </div>
                <div class=\"col-md-6 text-right\">
                    <div class=\"top_nav_right\">
                        <ul class=\"top_nav_menu\">
                            <li class=\"account\">
                                <a href=\"#\">
                                    Mon Compte
                                <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"account_selection\">
                                    <li><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("l_ogin");
        yield "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                                    <li><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Inscription</a></li>
                                </ul>
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
                        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">Allo <span>Shopy</span></a>
                    </div>
                    <nav class=\"navbar\">
                        <ul class=\"navbar_menu\">
                            <li><a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">Accueil</a></li>
                            <li><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "Boutique"]);
        yield "\">Boutique</a></li>
                            <li><a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "promotion"]);
        yield "\">Promotion</a></li>
                            <li><a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.contact");
        yield "\">Contact</a></li>
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

<div class=\"fs_menu_overlay\"></div>
<div class=\"hamburger_menu\">
\t<div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
\t<div class=\"hamburger_menu_content text-right\">
\t\t<ul class=\"menu_top_nav\">
                <li class=\"menu_item\"><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("l_ogin");
        yield "\" aria-label=\"Contact\">Se connecter</a></li>
                <li class=\"menu_item\"><a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\" aria-label=\"Contact\">S'inscrire</a></li>            
                <li class=\"menu_item\"><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\" aria-label=\"Accueil\">Accueil</a></li>
                <li class=\"menu_item\"><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "Boutique"]);
        yield "\" aria-label=\"Boutique\">Boutique</a></li>
                <li class=\"menu_item\"><a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all-product", ["category" => "promotion"]);
        yield "\" aria-label=\"Promotion\">Promotion</a></li>
                <li class=\"menu_item\"><a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.contact");
        yield "\" aria-label=\"Contact\">Contact</a></li>
\t\t</ul>
\t</div>
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
        return "navbar.html.twig";
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
        return array (  146 => 61,  142 => 60,  138 => 59,  134 => 58,  130 => 57,  126 => 56,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  87 => 32,  70 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"header trans_30\">
    <div class=\"top_nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"top_nav_left\"> Livraison gratuite !! </div>
                </div>
                <div class=\"col-md-6 text-right\">
                    <div class=\"top_nav_right\">
                        <ul class=\"top_nav_menu\">
                            <li class=\"account\">
                                <a href=\"#\">
                                    Mon Compte
                                <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"account_selection\">
                                    <li><a href=\"{{ path('l_ogin') }}\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                                    <li><a href=\"{{ path('register') }}\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Inscription</a></li>
                                </ul>
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
                        <a href=\"{{ path('Accueil') }}\">Allo <span>Shopy</span></a>
                    </div>
                    <nav class=\"navbar\">
                        <ul class=\"navbar_menu\">
                            <li><a href=\"{{ path('Accueil') }}\">Accueil</a></li>
                            <li><a href=\"{{ path('all-product', {'category': 'Boutique'}) }}\">Boutique</a></li>
                            <li><a href=\"{{ path('all-product', {'category': 'promotion'}) }}\">Promotion</a></li>
                            <li><a href=\"{{ path('user.contact')}}\">Contact</a></li>
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

<div class=\"fs_menu_overlay\"></div>
<div class=\"hamburger_menu\">
\t<div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
\t<div class=\"hamburger_menu_content text-right\">
\t\t<ul class=\"menu_top_nav\">
                <li class=\"menu_item\"><a href=\"{{ path('l_ogin') }}\" aria-label=\"Contact\">Se connecter</a></li>
                <li class=\"menu_item\"><a href=\"{{ path('register') }}\" aria-label=\"Contact\">S'inscrire</a></li>            
                <li class=\"menu_item\"><a href=\"{{ path('Accueil') }}\" aria-label=\"Accueil\">Accueil</a></li>
                <li class=\"menu_item\"><a href=\"{{ path('all-product', {'category': 'Boutique'}) }}\" aria-label=\"Boutique\">Boutique</a></li>
                <li class=\"menu_item\"><a href=\"{{ path('all-product', {'category': 'promotion'}) }}\" aria-label=\"Promotion\">Promotion</a></li>
                <li class=\"menu_item\"><a href=\"{{ path('user.contact') }}\" aria-label=\"Contact\">Contact</a></li>
\t\t</ul>
\t</div>
</div>", "navbar.html.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/navbar.html.twig");
    }
}
