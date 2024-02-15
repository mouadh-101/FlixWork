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

/* postulation/detailpostulation.html.twig */
class __TwigTemplate_54592d9c8fa468e16375531050da15b07e34be1255abe4151d6a7f598841c02b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/detailpostulation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/detailpostulation.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "postulation/detailpostulation.html.twig", 1);
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
        <h1>Postulation</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "job", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Date of postulation :</h6>
                    <p class=\"card-text\">";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "getPostulationDate", [], "method", false, false, false, 12), "Y-m-d"), "html", null, true);
        echo "</p>
                    <p class=\"card-text\">";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "etat", [], "any", false, false, false, 13) == "under consideration")) {
            // line 14
            echo "                        <span class=\"badge bg-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "etat", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "etat", [], "any", false, false, false, 15) == "rejected")) {
            // line 16
            echo "                        <span class=\"badge bg-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "etat", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "etat", [], "any", false, false, false, 17) == "approved")) {
            // line 18
            echo "                        <span class=\"badge bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "etat", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                    ";
        } else {
            // line 20
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "etat", [], "any", false, false, false, 20), "html", null, true);
            echo "
                    ";
        }
        // line 22
        echo "                    </p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Cover letter : </h6>
                    <p class=\"card-text\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "getCoverLetter", [], "method", false, false, false, 24), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatepost", ["id_p" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 25, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Update postulation </a>
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletepost", ["id_p" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 26, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Delete postulation</a>
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_postulation", ["id" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 27, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Back to postulations</a>
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
        return "postulation/detailpostulation.html.twig";
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
        return array (  130 => 27,  126 => 26,  122 => 25,  118 => 24,  114 => 22,  108 => 20,  102 => 18,  100 => 17,  95 => 16,  93 => 15,  88 => 14,  86 => 13,  82 => 12,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Postulation</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{post.job.title}}</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Date of postulation :</h6>
                    <p class=\"card-text\">{{ post.getPostulationDate()|date('Y-m-d') }}</p>
                    <p class=\"card-text\">{% if post.etat == 'under consideration' %}
                        <span class=\"badge bg-warning\">{{ post.etat }}</span>
                    {% elseif post.etat == 'rejected' %}
                        <span class=\"badge bg-danger\">{{ post.etat }}</span>
                    {% elseif post.etat == 'approved' %}
                        <span class=\"badge bg-success\">{{ post.etat }}</span>
                    {% else %}
                        {{ post.etat }}
                    {% endif %}
                    </p>
                    <h6 class=\"card-subtitle mb-2 text-muted\">Cover letter : </h6>
                    <p class=\"card-text\">{{ post.getCoverLetter() }}</p>
                    <a href=\"{{ path( 'updatepost' , {'id_p' : post.id,'id_u' : idUser})}}\" class=\"card-link\">Update postulation </a>
                    <a href=\"{{ path( 'deletepost' , {'id_p' : post.id,'id_u' : idUser})}}\" class=\"card-link\">Delete postulation</a>
                    <a href=\"{{ path( 'list_postulation' , {'id' : idUser})}}\" class=\"card-link\">Back to postulations</a>
                </div>
            </div>
    </section>
</main>
{% endblock %}
", "postulation/detailpostulation.html.twig", "C:\\Users\\mouad\\Desktop\\Flixwork\\templates\\postulation\\detailpostulation.html.twig");
    }
}
