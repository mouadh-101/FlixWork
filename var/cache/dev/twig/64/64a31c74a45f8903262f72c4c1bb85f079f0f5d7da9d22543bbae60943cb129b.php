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

/* claim/show_all.html.twig */
class __TwigTemplate_99f9b0d604176acdd47257fdc04c0f58a438e4a8b6c86e091edf17069dc11a63 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/show_all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/show_all.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "claim/show_all.html.twig", 1);
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
    <h1>List of Claims</h1>
  </div><!-- End Page Title -->

  <section class=\"section dashboard\">
    <div class=\"row\">
      <!-- Left side columns -->
      <!-- Recent Sales -->
      <div class=\"col-12\">
        <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of Claims</h5>
            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Subject</th>
                  <th scope=\"col\">Description</th>
                  <th scope=\"col\">Claim Date</th>
                  <th scope=\"col\">Claim Etat</th>
                  <th scope=\"col\">Claimer</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new RuntimeError('Variable "claims" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 31
            echo "                <tr>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "subject", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "description", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "date", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "getClaimer", [], "method", false, false, false, 37), "getFullName", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                      <i class=\"material-icons\">edit</i> <span class=\"material-symbols-outlined\"></span>
                    </a>
                    <form method=\"post\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\">
                      <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                      <button type=\"submit\" class=\"btn btn-danger\"><i class=\"material-icons\">delete</i> <span class=\"material-symbols-outlined\"></span>
                      </button>
                    </form>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claim'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div><!-- End Recent Sales -->
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
        return "claim/show_all.html.twig";
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
        return array (  148 => 50,  134 => 42,  128 => 39,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  100 => 31,  96 => 30,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}

{% block main %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>List of Claims</h1>
  </div><!-- End Page Title -->

  <section class=\"section dashboard\">
    <div class=\"row\">
      <!-- Left side columns -->
      <!-- Recent Sales -->
      <div class=\"col-12\">
        <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of Claims</h5>
            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Subject</th>
                  <th scope=\"col\">Description</th>
                  <th scope=\"col\">Claim Date</th>
                  <th scope=\"col\">Claim Etat</th>
                  <th scope=\"col\">Claimer</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for claim in claims %}
                <tr>
                  <td>{{ claim.id }}</td>
                  <td>{{ claim.subject }}</td>
                  <td>{{ claim.description }}</td>
                  <td>{{ claim.date|date('Y-m-d') }}</td>
                  <td>{{ claim.etat }}</td>
                  <td>{{ claim.getClaimer().getFullName() }}</td>
                  <td>
                    <a href=\"{{ path('editClaim', {'id': claim.id}) }}\" class=\"btn btn-primary\">
                      <i class=\"material-icons\">edit</i> <span class=\"material-symbols-outlined\"></span>
                    </a>
                    <form method=\"post\" action=\"{{ path('deleteClaim', {'id': claim.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\">
                      <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                      <button type=\"submit\" class=\"btn btn-danger\"><i class=\"material-icons\">delete</i> <span class=\"material-symbols-outlined\"></span>
                      </button>
                    </form>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- End Recent Sales -->
    </div>
  </section>
</main>
{% endblock %}
", "claim/show_all.html.twig", "C:\\Users\\admin\\Desktop\\Flixwork\\templates\\claim\\show_all.html.twig");
    }
}
