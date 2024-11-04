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

/* user/index.html.twig */
class __TwigTemplate_ec15457b7d7be22297ff2f73dced84b1 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container-fluid page-header py-5\" style=\"margin-top:1em;\">
    </div>

    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Informations Personnelles</h4>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Nom:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                        <p><strong>Prenom:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
                        <p><strong>Email:</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Mon Portefeuille</h4>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Solde:</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 29, $this->source); })()), "solde", [], "any", false, false, false, 29), "html", null, true);
        yield " FCFA</p>
                        <p><strong>Derniere transaction: </strong>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</p>
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.wallet");
        yield "\" class=\"shop_now_button\" role=\"button\">Recharger</a>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Infos de livraison</h4>
                    </div>
                    <form action=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison");
        yield "\" method=\"POST\">
                        <div class=\"card-body\">
                            <p><strong>Fréquence de livraison:</strong> 
                                <input type=\"date\" name=\"frequence\" id=\"frequence\" value=\"";
        // line 42
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "FrequenceLivraison", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "FrequenceLivraison", [], "any", false, false, false, 42)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "FrequenceLivraison", [], "any", false, false, false, 42), "html", null, true)) : (yield "Non défini"));
        yield "\">
                            </p>
                            <p><strong>Article à livrer:</strong> 
                                <input type=\"text\" name=\"produit\" id=\"produit\" value=\"";
        // line 45
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "produit", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "produit", [], "any", false, false, false, 45)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "produit", [], "any", false, false, false, 45), "html", null, true)) : (yield "Non défini"));
        yield "\" required>
                            </p>
                            <p><strong>Adresse de livraison:</strong> 
                                <input type=\"text\" name=\"adresse\" id=\"adresse\" value=\"";
        // line 48
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "AdresseUtilisateur", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "AdresseUtilisateur", [], "any", false, false, false, 48)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["parametre"] ?? null), "AdresseUtilisateur", [], "any", false, false, false, 48), "html", null, true)) : (yield "Non défini"));
        yield "\" required>
                            </p>
                            <button type=\"submit\" class=\"red_button shop_now_button\">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Historique des commandes</h4>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 62
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 62, $this->source); })())) > 0)) {
            // line 63
            yield "                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Produit</th>
                                        <th scope=\"col\">Prix</th>
                                        <th scope=\"col\">Quantité</th>
                                        <th scope=\"col\">Total</th>
                                        <th scope=\"col\">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 75
                yield "                                        <tr>
                                            <td>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "libele", [], "any", false, false, false, 76), "html", null, true);
                yield "</td>
                                            <td>";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "prix", [], "any", false, false, false, 77), "html", null, true);
                yield " FCFA</td>
                                            <td>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "quantity", [], "any", false, false, false, 78), "html", null, true);
                yield "</td>
                                            <td>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total_transaction", [], "any", false, false, false, 79), "html", null, true);
                yield " FCFA</td>
                                            <td>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "created_at", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                                </tbody>
                            </table>
                        ";
        } else {
            // line 86
            yield "                            <p>Aucune commande passée.</p>
                        ";
        }
        // line 88
        yield "                    </div>
                </div>
            </div>
        </div>
        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Déconnexion</a>
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
        return "user/index.html.twig";
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
        return array (  249 => 92,  243 => 88,  239 => 86,  234 => 83,  225 => 80,  221 => 79,  217 => 78,  213 => 77,  209 => 76,  206 => 75,  202 => 74,  189 => 63,  187 => 62,  170 => 48,  164 => 45,  158 => 42,  152 => 39,  141 => 31,  137 => 30,  133 => 29,  121 => 20,  117 => 19,  113 => 18,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profil/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block body %}
    <div class=\"container-fluid page-header py-5\" style=\"margin-top:1em;\">
    </div>

    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Informations Personnelles</h4>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Nom:</strong> {{ user.name }}</p>
                        <p><strong>Prenom:</strong> {{ user.firstname }}</p>
                        <p><strong>Email:</strong> {{ user.email }}</p>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Mon Portefeuille</h4>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Solde:</strong> {{wallet.solde}} FCFA</p>
                        <p><strong>Derniere transaction: </strong>{{date}}</p>
                        <a href=\"{{ path('app.wallet')}}\" class=\"shop_now_button\" role=\"button\">Recharger</a>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Infos de livraison</h4>
                    </div>
                    <form action=\"{{ path('livraison') }}\" method=\"POST\">
                        <div class=\"card-body\">
                            <p><strong>Fréquence de livraison:</strong> 
                                <input type=\"date\" name=\"frequence\" id=\"frequence\" value=\"{{ parametre.FrequenceLivraison ?? 'Non défini' }}\">
                            </p>
                            <p><strong>Article à livrer:</strong> 
                                <input type=\"text\" name=\"produit\" id=\"produit\" value=\"{{ parametre.produit ?? 'Non défini' }}\" required>
                            </p>
                            <p><strong>Adresse de livraison:</strong> 
                                <input type=\"text\" name=\"adresse\" id=\"adresse\" value=\"{{ parametre.AdresseUtilisateur ?? 'Non défini' }}\" required>
                            </p>
                            <button type=\"submit\" class=\"red_button shop_now_button\">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Historique des commandes</h4>
                    </div>
                    <div class=\"card-body\">
                        {% if orders|length > 0 %}
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Produit</th>
                                        <th scope=\"col\">Prix</th>
                                        <th scope=\"col\">Quantité</th>
                                        <th scope=\"col\">Total</th>
                                        <th scope=\"col\">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for order in orders %}
                                        <tr>
                                            <td>{{ order.libele }}</td>
                                            <td>{{ order.prix }} FCFA</td>
                                            <td>{{ order.quantity }}</td>
                                            <td>{{ order.total_transaction }} FCFA</td>
                                            <td>{{ order.created_at|date('d/m/Y') }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        {% else %}
                            <p>Aucune commande passée.</p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
    </div>
{% endblock %}
", "user/index.html.twig", "/home/ghost/Documents/Documents/Projet/Alex/formulaire/templates/user/index.html.twig");
    }
}
