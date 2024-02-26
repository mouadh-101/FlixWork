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

/* claim/show2.html.twig */
class __TwigTemplate_8352b72dee89489c676eb74c3be71fea8f2337f271b2514d246a3d2d486a52b4 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/show2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/show2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "claim/show2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Show Answers</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
            <div class=\"card\">
                <div class=\"card-body\">
                 <h6 class=\"card-subtitle mb-2 text-muted\">id: </h6>
                    <h5 class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Subject : </h6>
                    <h5 class=\"card-title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 14, $this->source); })()), "subject", [], "any", false, false, false, 14), "html", null, true);
        echo "</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Description : </h6>
                    <h5 class=\"card-title\"> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</h5>
                     <h6 class=\"card-subtitle mb-2 text-muted\">Claim date :</h6>
                    <h5 class=\"card-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
        echo "</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claim etat :</h6>
                    <p>
                      ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 21, $this->source); })()), "etat", [], "any", false, false, false, 21) == "In Process")) {
            // line 22
            echo "                        <span class=\"badge bg-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 22, $this->source); })()), "etat", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 23, $this->source); })()), "etat", [], "any", false, false, false, 23) == "Not Yet")) {
            // line 24
            echo "                        <span class=\"badge bg-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 24, $this->source); })()), "etat", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
                      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25) == "Answered")) {
            // line 26
            echo "                        <span class=\"badge bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 26, $this->source); })()), "etat", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
                      ";
        } else {
            // line 28
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 28, $this->source); })()), "etat", [], "any", false, false, false, 28), "html", null, true);
            echo "
                      ";
        }
        // line 30
        echo "                    </p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claimer :</h6>
                    <h5 class=\"card-title\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 32, $this->source); })()), "getClaimer", [], "method", false, false, false, 32), "getFullName", [], "method", false, false, false, 32), "html", null, true);
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
        return "claim/show2.html.twig";
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
        return array (  131 => 32,  127 => 30,  121 => 28,  115 => 26,  113 => 25,  108 => 24,  106 => 23,  101 => 22,  99 => 21,  93 => 18,  88 => 16,  83 => 14,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                     <h6 class=\"card-subtitle mb-2 text-muted\">Claim date :</h6>
                    <h5 class=\"card-title\">{{ claim.date|date('Y-m-d') }}</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claim etat :</h6>
                    <p>
                      {% if claim.etat == 'In Process' %}
                        <span class=\"badge bg-warning\">{{ claim.etat }}</span>
                      {% elseif claim.etat == 'Not Yet' %}
                        <span class=\"badge bg-danger\">{{ claim.etat }}</span>
                      {% elseif claim.etat == 'Answered' %}
                        <span class=\"badge bg-success\">{{ claim.etat }}</span>
                      {% else %}
                        {{ claim.etat }}
                      {% endif %}
                    </p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Claimer :</h6>
                    <h5 class=\"card-title\">{{ claim.getClaimer().getFullName() }}</h5>
                    
                </div>
            </div>
    </section>
</main>
{% endblock %}
", "claim/show2.html.twig", "C:\\Users\\admin\\Desktop\\FlixWork-1\\templates\\claim\\show2.html.twig");
    }
}
