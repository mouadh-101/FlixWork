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

/* interview/detailinterviewf.html.twig */
class __TwigTemplate_69f07569ba150bd736b8e1e3c3a8eb0431084d2ed85c029b24234458cb943c66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'hero' => [$this, 'block_hero'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/detailinterviewf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/detailinterviewf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interview/detailinterviewf.html.twig", 1);
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
        echo "    ";
        $this->displayBlock('hero', $context, $blocks);
        // line 6
        echo "<style>
    #main.main {
        padding: 200px;
    }
    #breadcrumbs {
        padding-left: 150px;
        padding-right: 150px;
    }
</style>
<main id=\"main\">
    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
        <div class=\"d-flex justify-content-between align-items-center\"
          <h2>Interview Details</h2>
          <ol>
            <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_interview", ["id" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 20, $this->source); })())]), "html", null, true);
        echo "\">Interview</a>
            <li>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
          </ol>
        </div>
    </section>
    <!-- ======= Portfolio Details Section ======= -->
    <section id=\"portfolio-details class=portfolio-details\">
      <div class=\"container\">
        <div class=\"row gy-4\">
            <div class=\"portfolio-info\">
                <h3>Interview informations</h3>
                <p class=\"card-text\">
                    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 32, $this->source); })()), "etat", [], "any", false, false, false, 32) == "under consideration")) {
            // line 33
            echo "                    <span class=\"badge bg-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 33, $this->source); })()), "etat", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 34, $this->source); })()), "etat", [], "any", false, false, false, 34) == "rejected")) {
            // line 35
            echo "                        <span class=\"badge bg-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 35, $this->source); })()), "etat", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 36, $this->source); })()), "etat", [], "any", false, false, false, 36) == "approved")) {
            // line 37
            echo "                        <span class=\"badge bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 37, $this->source); })()), "etat", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                    ";
        } else {
            // line 39
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 39, $this->source); })()), "etat", [], "any", false, false, false, 39), "html", null, true);
            echo "
                    ";
        }
        // line 41
        echo "                <p>
                <h6 class=\"card-subtitle mb-2 text-muted\">Recruiter : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 42, $this->source); })()), "recruiter", [], "any", false, false, false, 42), "getFullName", [], "method", false, false, false, 42), "html", null, true);
        echo "</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Freelancer: ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 43, $this->source); })()), "freelancer", [], "any", false, false, false, 43), "getFullName", [], "method", false, false, false, 43), "html", null, true);
        echo "</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Link : ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 44, $this->source); })()), "getInterviewLink", [], "method", false, false, false, 44), "html", null, true);
        echo "</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Date of Interview : ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 45, $this->source); })()), "getInterviewDate", [], "method", false, false, false, 45), "Y-m-d"), "html", null, true);
        echo "</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Interview description :</h6>
                <p class=\"card-text\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteinterview", ["id_i" => twig_get_attribute($this->env, $this->source, (isset($context["interview"]) || array_key_exists("interview", $context) ? $context["interview"] : (function () { throw new RuntimeError('Variable "interview" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Delete Interview</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 5
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "interview/detailinterviewf.html.twig";
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
        return array (  188 => 5,  178 => 4,  158 => 48,  154 => 47,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  134 => 41,  128 => 39,  122 => 37,  120 => 36,  115 => 35,  113 => 34,  108 => 33,  106 => 32,  92 => 21,  88 => 20,  72 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    {% block hero %}
    {% endblock %}
<style>
    #main.main {
        padding: 200px;
    }
    #breadcrumbs {
        padding-left: 150px;
        padding-right: 150px;
    }
</style>
<main id=\"main\">
    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
        <div class=\"d-flex justify-content-between align-items-center\"
          <h2>Interview Details</h2>
          <ol>
            <li><a href=\"{{ path( 'list_interview' , {'id': idUser})}}\">Interview</a>
            <li>{{ interview.id }}</li>
          </ol>
        </div>
    </section>
    <!-- ======= Portfolio Details Section ======= -->
    <section id=\"portfolio-details class=portfolio-details\">
      <div class=\"container\">
        <div class=\"row gy-4\">
            <div class=\"portfolio-info\">
                <h3>Interview informations</h3>
                <p class=\"card-text\">
                    {% if interview.etat == 'under consideration' %}
                    <span class=\"badge bg-warning\">{{ interview.etat }}</span>
                    {% elseif interview.etat == 'rejected' %}
                        <span class=\"badge bg-danger\">{{ interview.etat }}</span>
                    {% elseif interview.etat == 'approved' %}
                        <span class=\"badge bg-success\">{{ interview.etat }}</span>
                    {% else %}
                        {{ post.etat }}
                    {% endif %}
                <p>
                <h6 class=\"card-subtitle mb-2 text-muted\">Recruiter : {{interview.recruiter.getFullName()}}</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Freelancer: {{interview.freelancer.getFullName()}}</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Link : {{ interview.getInterviewLink()}}</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Date of Interview : {{ interview.getInterviewDate()|date('Y-m-d') }}</h6>
                <h6 class=\"card-subtitle mb-2 text-muted\">Interview description :</h6>
                <p class=\"card-text\">{{interview.description}}</p>
                <a href=\"{{ path( 'deleteinterview' , {'id_i' : interview.id,'id_u' : idUser})}}\" class=\"card-link\">Delete Interview</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  </main><!-- End #main -->
{% endblock %}
", "interview/detailinterviewf.html.twig", "C:\\Users\\mouad\\Documents\\GitHub\\FlixWork\\templates\\interview\\detailinterviewf.html.twig");
    }
}
