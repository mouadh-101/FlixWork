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

/* interview/detailinterview.html.twig */
class __TwigTemplate_3ab74007ece3322c907cffba7c2b2f8b6b057dd44777fcfd6e9eb7fed5cb3896 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/detailinterview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/detailinterview.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "interview/detailinterview.html.twig", 1);
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
        <h1>Interview</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Interview Details</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Recruiter:</h6>
                    <p class=\"card-text\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 12, $this->source); })()), "recruiter", [], "any", false, false, false, 12), "getFullName", [], "method", false, false, false, 12), "html", null, true);
        echo "</p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Freelancer:</h6>
                    <p class=\"card-text\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 14, $this->source); })()), "freelancer", [], "any", false, false, false, 14), "getFullName", [], "method", false, false, false, 14), "html", null, true);
        echo "</p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Date of Interview :</h6>
                    <p class=\"card-text\">";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 16, $this->source); })()), "getInterviewDate", [], "method", false, false, false, 16), "Y-m-d"), "html", null, true);
        echo "</p>
                    <p class=\"card-text\">";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 17, $this->source); })()), "etat", [], "any", false, false, false, 17) == "under consideration")) {
            // line 18
            echo "                        <span class=\"badge bg-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 18, $this->source); })()), "etat", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 19, $this->source); })()), "etat", [], "any", false, false, false, 19) == "rejected")) {
            // line 20
            echo "                        <span class=\"badge bg-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 20, $this->source); })()), "etat", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 21, $this->source); })()), "etat", [], "any", false, false, false, 21) == "approved")) {
            // line 22
            echo "                        <span class=\"badge bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 22, $this->source); })()), "etat", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                    ";
        } else {
            // line 24
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 24, $this->source); })()), "etat", [], "any", false, false, false, 24), "html", null, true);
            echo "
                    ";
        }
        // line 26
        echo "                    </p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Description:</h6>
                    <p class=\"card-text\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateinterview", ["id_i" => twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Update Interview </a>
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteinterview", ["id_i" => twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Delete Interview</a>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_interview", ["id" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 31, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Back to Interview</a>
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
        return "interview/detailinterview.html.twig";
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
        return array (  137 => 31,  133 => 30,  129 => 29,  125 => 28,  121 => 26,  115 => 24,  109 => 22,  107 => 21,  102 => 20,  100 => 19,  95 => 18,  93 => 17,  89 => 16,  84 => 14,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Interview</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Interview Details</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Recruiter:</h6>
                    <p class=\"card-text\">{{interview.recruiter.getFullName()}}</p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Freelancer:</h6>
                    <p class=\"card-text\">{{interview.freelancer.getFullName()}}</p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Date of Interview :</h6>
                    <p class=\"card-text\">{{ interview.getInterviewDate()|date('Y-m-d') }}</p>
                    <p class=\"card-text\">{% if interview.etat == 'under consideration' %}
                        <span class=\"badge bg-warning\">{{ interview.etat }}</span>
                    {% elseif interview.etat == 'rejected' %}
                        <span class=\"badge bg-danger\">{{interview.etat }}</span>
                    {% elseif interview.etat == 'approved' %}
                        <span class=\"badge bg-success\">{{ interview.etat }}</span>
                    {% else %}
                        {{ interview.etat }}
                    {% endif %}
                    </p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Description:</h6>
                    <p class=\"card-text\">{{interview.description}}</p>
                    <a href=\"{{ path( 'updateinterview' , {'id_i' : interview.id,'id_u' : idUser})}}\" class=\"card-link\">Update Interview </a>
                    <a href=\"{{ path( 'deleteinterview' , {'id_i' : interview.id,'id_u' : idUser})}}\" class=\"card-link\">Delete Interview</a>
                    <a href=\"{{ path( 'list_interview' , {'id' : idUser})}}\" class=\"card-link\">Back to Interview</a>
                </div>
            </div>
    </section>
</main>
{% endblock %}
", "interview/detailinterview.html.twig", "C:\\Users\\mouad\\Desktop\\Flixwork\\templates\\interview\\detailinterview.html.twig");
    }
}
