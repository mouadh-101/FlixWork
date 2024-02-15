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
        echo "
<main id=\"main\">
    !-- End Breadcrumbs --
    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
        <div class=\"d-flex justify-content-between align-items-center\"
          <h2>Postulation Details</h2>
          <ol>
            <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_postulation", ["id" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 13, $this->source); })())]), "html", null, true);
        echo "\">Postulation</a>
            <li>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
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
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</li>
                <li><strong>Recruiter :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 26, $this->source); })()), "recruiter", [], "any", false, false, false, 26), "getFullName", [], "method", false, false, false, 26), "html", null, true);
        echo "</li>
                <li><strong>Deadline :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 27, $this->source); })()), "deadline", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true);
        echo "</li>
                <li><strong>Salary :</strong> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 28, $this->source); })()), "salary", [], "any", false, false, false, 28), "html", null, true);
        echo "</li>
              </ul>
            </div>
            <div class=\"portfolio-info\">
                <h3>Postulation informations</h3>
                <p class=\"card-text\">
                    ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 34, $this->source); })()), "etat", [], "any", false, false, false, 34) == "under consideration")) {
            // line 35
            echo "                    <span class=\"badge bg-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "etat", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "etat", [], "any", false, false, false, 36) == "rejected")) {
            // line 37
            echo "                        <span class=\"badge bg-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "etat", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 38, $this->source); })()), "etat", [], "any", false, false, false, 38) == "approved")) {
            // line 39
            echo "                        <span class=\"badge bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 39, $this->source); })()), "etat", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
                    ";
        } else {
            // line 41
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "etat", [], "any", false, false, false, 41), "html", null, true);
            echo "
                    ";
        }
        // line 43
        echo "                <p>
                <h6 class=\"card-subtitle mb-2 text-muted\">Date of postulation : ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "getPostulationDate", [], "method", false, false, false, 44), "Y-m-d"), "html", null, true);
        echo "</h6>
                
                <h6 class=\"card-subtitle mb-2 text-muted\">Cover letter  </h6>
                <p class=\"card-text\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 47, $this->source); })()), "getCoverLetter", [], "method", false, false, false, 47), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatepost", ["id_p" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo "\" class=\"card-link\">Update postulation | </a>
                    <a href\"=";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletepost", ["id_p" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 49, $this->source); })())]), "html", null, true);
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
        return array (  195 => 5,  185 => 4,  165 => 49,  161 => 48,  157 => 47,  151 => 44,  148 => 43,  142 => 41,  136 => 39,  134 => 38,  129 => 37,  127 => 36,  122 => 35,  120 => 34,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  85 => 14,  81 => 13,  72 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    {% block hero %}
    {% endblock %}

<main id=\"main\">
    !-- End Breadcrumbs --
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

", "postulation/detailpostulationf.html.twig", "C:\\xampp\\htdocs\\Flixwork\\templates\\postulation\\detailpostulationf.html.twig");
    }
}
