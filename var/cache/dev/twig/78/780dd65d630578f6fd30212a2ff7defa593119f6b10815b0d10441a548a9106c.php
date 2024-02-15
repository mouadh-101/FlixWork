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

/* postulation/detailpostulationf.html.twig */
class __TwigTemplate_99be38ba3a4e9ee0691a4cb765f5996cef15106f02ab95a0c3e5f4a15d3eb839 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/detailpostulationf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/detailpostulationf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postulation/detailpostulationf.html.twig", 1);
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
          <h2>Postulation Details</h2>
          <ol>
            <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_postulation", ["id" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 20, $this->source); })())]), "html", null, true);
        echo "\">Postulation</a>
            <li>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
          </ol>
        </div>
    </section>
    <!-- ======= Portfolio Details Section ======= -->
    <section id=\"portfolio-details class=portfolio-details\">
      <div class=\"container\">
        <div class=\"row gy-4\">
            <div class=\"portfolio-info\">
              <h3>Job informations</h3>
              <ul>
                <li><strong>Title :</strong>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</li>
                <li><strong>Recruiter :</strong> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 33, $this->source); })()), "recruiter", [], "any", false, false, false, 33), "getFullName", [], "method", false, false, false, 33), "html", null, true);
        echo "</li>
                <li><strong>Deadline :</strong> ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 34, $this->source); })()), "deadline", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
        echo "</li>
                <li><strong>Salary :</strong> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 35, $this->source); })()), "salary", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
              </ul>
            </div>
            <div class=\"portfolio-info\">
                <h3>Postulation informations</h3>
                <p class=\"card-text\">
                    ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "etat", [], "any", false, false, false, 41) == "under consideration")) {
            // line 42
            echo "                    <span class=\"badge bg-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 42, $this->source); })()), "etat", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 43, $this->source); })()), "etat", [], "any", false, false, false, 43) == "rejected")) {
            // line 44
            echo "                        <span class=\"badge bg-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "etat", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 45, $this->source); })()), "etat", [], "any", false, false, false, 45) == "approved")) {
            // line 46
            echo "                        <span class=\"badge bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 46, $this->source); })()), "etat", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 48, $this->source); })()), "etat", [], "any", false, false, false, 48), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                <p>
                <h6 class=\"card-subtitle mb-2 text-muted\">Date of postulation : ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 51, $this->source); })()), "getPostulationDate", [], "method", false, false, false, 51), "Y-m-d"), "html", null, true);
        echo "</h6>
                
                <h6 class=\"card-subtitle mb-2 text-muted\">Cover letter  </h6>
                <p class=\"card-text\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 54, $this->source); })()), "getCoverLetter", [], "method", false, false, false, 54), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatepost", ["id_p" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 55, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Update postulation | </a>
                    <a href\"=";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletepost", ["id_p" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 56, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Delete postulation</a>
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
        return "postulation/detailpostulationf.html.twig";
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
        return array (  202 => 5,  192 => 4,  172 => 56,  168 => 55,  164 => 54,  158 => 51,  155 => 50,  149 => 48,  143 => 46,  141 => 45,  136 => 44,  134 => 43,  129 => 42,  127 => 41,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  92 => 21,  88 => 20,  72 => 6,  69 => 4,  59 => 3,  36 => 1,);
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
          <h2>Postulation Details</h2>
          <ol>
            <li><a href=\"{{ path( 'list_postulation' , {'id': idUser})}}\">Postulation</a>
            <li>{{job.title}}</li>
          </ol>
        </div>
    </section>
    <!-- ======= Portfolio Details Section ======= -->
    <section id=\"portfolio-details class=portfolio-details\">
      <div class=\"container\">
        <div class=\"row gy-4\">
            <div class=\"portfolio-info\">
              <h3>Job informations</h3>
              <ul>
                <li><strong>Title :</strong>{{job.title}}</li>
                <li><strong>Recruiter :</strong> {{job.recruiter.getFullName()}}</li>
                <li><strong>Deadline :</strong> {{ job.deadline|date('Y-m-d') }}</li>
                <li><strong>Salary :</strong> {{job.salary}}</li>
              </ul>
            </div>
            <div class=\"portfolio-info\">
                <h3>Postulation informations</h3>
                <p class=\"card-text\">
                    {% if post.etat == 'under consideration' %}
                    <span class=\"badge bg-warning\">{{ post.etat }}</span>
                    {% elseif post.etat == 'rejected' %}
                        <span class=\"badge bg-danger\">{{ post.etat }}</span>
                    {% elseif post.etat == 'approved' %}
                        <span class=\"badge bg-success\">{{ post.etat }}</span>
                    {% else %}
                        {{ post.etat }}
                    {% endif %}
                <p>
                <h6 class=\"card-subtitle mb-2 text-muted\">Date of postulation : {{ post.getPostulationDate()|date('Y-m-d') }}</h6>
                
                <h6 class=\"card-subtitle mb-2 text-muted\">Cover letter  </h6>
                <p class=\"card-text\">{{ post.getCoverLetter() }}</p>
                <a href=\"{{ path( 'updatepost' , {'id_p' :post.id,'id_u' :idUser})}}\" class=\"card-link\">Update postulation | </a>
                    <a href\"={{ path( 'deletepost' , {'id_p' :post.id,'id_u': idUser})}}\" class=\"card-link\">Delete postulation</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  </main><!-- End #main -->
{% endblock %}

", "postulation/detailpostulationf.html.twig", "C:\\Users\\mouad\\Documents\\GitHub\\FlixWork\\templates\\postulation\\detailpostulationf.html.twig");
    }
}
