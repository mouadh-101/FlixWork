<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* claim/show.html.twig */
class __TwigTemplate_bf598a11ee772b0edc9dd5a847ab1290f8a573d203a884b10a8ad8c563f62e5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseb.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/show.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "claim/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Show Answers</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
            <div class=\"card\">
                <div class=\"card-body\">
                 <h6 class=\"card-subtitle mb-2 text-muted\">id: </h6>
                    <h5 class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Subject : </h6>
                    <h5 class=\"card-title\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 13, $this->source); })()), "subject", [], "any", false, false, false, 13), "html", null, true);
        echo "</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Description : </h6>
                    <h5 class=\"card-title\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
        echo "</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Claim date :/h6>
                    <h5 class=\"card-title\">";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true);
        echo "</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claim etat :/h6>
                    <h5 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 19, $this->source); })()), "etat", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claimer :/h6>
                    <h5 class=\"card-title\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 21, $this->source); })()), "getClaimer", [], "method", false, false, false, 21), "getFullName", [], "method", false, false, false, 21), "html", null, true);
        echo "</h5>
                    
                </div>
            </div>
    </section>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "claim/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  103 => 21,  98 => 19,  93 => 17,  88 => 15,  83 => 13,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Show Answers</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
            <div class=\"card\">
                <div class=\"card-body\">
                 <h6 class=\"card-subtitle mb-2 text-muted\">id: </h6>
                    <h5 class=\"card-title\">{{ claim.id }}</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Subject : </h6>
                    <h5 class=\"card-title\">{{ claim.subject }}</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Description : </h6>
                    <h5 class=\"card-title\"> {{ claim.description }}</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Claim date :/h6>
                    <h5 class=\"card-title\">{{ claim.date|date('Y-m-d') }}</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claim etat :/h6>
                    <h5 class=\"card-title\">{{ claim.etat }}</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claimer :/h6>
                    <h5 class=\"card-title\">{{ claim.getClaimer().getFullName() }}</h5>
                    
                </div>
            </div>
    </section>
</main>
{% endblock %}

", "claim/show.html.twig", "C:\\Users\\admin\\Desktop\\Flixwork\\templates\\claim\\show.html.twig");
    }
}
