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
      <form method=\"post\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addClaim", ["id" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to Add new Claim ?');\">
                        <button type=\"submit\" class=\"\">
                          <i class=\"\">Add Claim</i>
                        </button>
            </form>
        <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of My Claims</h5>
            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Subject</th>
                  <th scope=\"col\">Description</th>
                  <th scope=\"col\">Claim Date</th>
                  <th scope=\"col\">Claim Etat</th>
                  <th scope=\"col\">Claim for</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new RuntimeError('Variable "claims" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 36
            echo "                <tr>
                  <td><a href='";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 37), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 37, $this->source); })())]), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "subject", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                  <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                  <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "date", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 42) == "In Process")) {
                // line 43
                echo "                      <span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 43), "html", null, true);
                echo "</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
$context["claim"], "etat", [], "any", false, false, false, 44) == "Not Yet")) {
                // line 45
                echo "                      <span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 45), "html", null, true);
                echo "</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
$context["claim"], "etat", [], "any", false, false, false, 46) == "Answered")) {
                // line 47
                echo "                      <span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 47), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 49
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 49), "html", null, true);
                echo "
                    ";
            }
            // line 51
            echo "                  </td>
                  <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "getClaimFor", [], "method", false, false, false, 52), "getFullName", [], "method", false, false, false, 52), "html", null, true);
            echo "</td>
                  <td>
                    <div class=\"d-flex\">
                      <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClaim", ["id_c" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 55), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 55, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary me-2 bg-transparent border-0\">
                        <i class=\"material-icons text-primary\">edit</i>
                      </a>
                      <form method=\"post\" action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 58), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 58, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\" class=\"me-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button type=\"submit\" class=\"btn btn-danger bg-transparent border-0\">
                          <i class=\"material-icons text-danger\">delete</i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claim'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "              </tbody>
            </table>
          </div>
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of Claims For me</h5>
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["claimsFor"]) || array_key_exists("claimsFor", $context) ? $context["claimsFor"] : (function () { throw new RuntimeError('Variable "claimsFor" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["claimf"]) {
            // line 87
            echo "                <tr>
                  <td><a href='";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 88), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 88, $this->source); })())]), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "subject", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                  <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "description", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                  <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "date", [], "any", false, false, false, 91), "Y-m-d"), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 93) == "In Process")) {
                // line 94
                echo "                      <span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 94), "html", null, true);
                echo "</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 95
$context["claimf"], "etat", [], "any", false, false, false, 95) == "Not Yet")) {
                // line 96
                echo "                      <span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 96), "html", null, true);
                echo "</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
$context["claimf"], "etat", [], "any", false, false, false, 97) == "Answered")) {
                // line 98
                echo "                      <span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 98), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 100
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 100), "html", null, true);
                echo "
                    ";
            }
            // line 102
            echo "                  </td>
                  <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claimf"], "getClaimer", [], "method", false, false, false, 103), "getFullName", [], "method", false, false, false, 103), "html", null, true);
            echo "</td>
                  <td>
                    <div class=\"d-flex\">
                      <form method=\"post\" action=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 106), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 106, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\" class=\"me-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button type=\"submit\" class=\"btn btn-danger bg-transparent border-0\">
                          <i class=\"material-icons text-danger\">delete</i>
                        </button>
                      </form>
                      
                      <form method=\"post\" action=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addanswer", ["id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 113, $this->source); })()), "id_c" => twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to answer this claim?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"Add\">
                        <button type=\"submit\" class=\"btn btn-primary bg-transparent border-0\">
                          <i class=\"material-icons text-primary\">add_comment</i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claimf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
        return array (  298 => 123,  282 => 113,  272 => 106,  266 => 103,  263 => 102,  257 => 100,  251 => 98,  249 => 97,  244 => 96,  242 => 95,  237 => 94,  235 => 93,  230 => 91,  226 => 90,  222 => 89,  216 => 88,  213 => 87,  209 => 86,  189 => 68,  173 => 58,  167 => 55,  161 => 52,  158 => 51,  152 => 49,  146 => 47,  144 => 46,  139 => 45,  137 => 44,  132 => 43,  130 => 42,  125 => 40,  121 => 39,  117 => 38,  111 => 37,  108 => 36,  104 => 35,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
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
      <form method=\"post\" action=\"{{ path('addClaim', {'id':idU}) }}\" onsubmit=\"return confirm('Are you sure you want to Add new Claim ?');\">
                        <button type=\"submit\" class=\"\">
                          <i class=\"\">Add Claim</i>
                        </button>
            </form>
        <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of My Claims</h5>
            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Subject</th>
                  <th scope=\"col\">Description</th>
                  <th scope=\"col\">Claim Date</th>
                  <th scope=\"col\">Claim Etat</th>
                  <th scope=\"col\">Claim for</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for claim in claims %}
                <tr>
                  <td><a href='{{ path('showClaim', {'id': claim.id , 'id_u':idU}) }}'>{{ claim.id }}</a></td>
                  <td>{{ claim.subject }}</td>
                  <td>{{ claim.description }}</td>
                  <td>{{ claim.date|date('Y-m-d') }}</td>
                  <td>
                    {% if claim.etat == 'In Process' %}
                      <span class=\"badge bg-warning\">{{ claim.etat }}</span>
                    {% elseif claim.etat == 'Not Yet' %}
                      <span class=\"badge bg-danger\">{{ claim.etat }}</span>
                    {% elseif claim.etat == 'Answered' %}
                      <span class=\"badge bg-success\">{{ claim.etat }}</span>
                    {% else %}
                      {{ claim.etat }}
                    {% endif %}
                  </td>
                  <td>{{ claim.getClaimFor().getFullName() }}</td>
                  <td>
                    <div class=\"d-flex\">
                      <a href=\"{{ path('editClaim', {'id_c': claim.id,'id_u':idU}) }}\" class=\"btn btn-primary me-2 bg-transparent border-0\">
                        <i class=\"material-icons text-primary\">edit</i>
                      </a>
                      <form method=\"post\" action=\"{{ path('deleteClaim', {'id': claim.id,'id_u':idU}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\" class=\"me-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button type=\"submit\" class=\"btn btn-danger bg-transparent border-0\">
                          <i class=\"material-icons text-danger\">delete</i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of Claims For me</h5>
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
                {% for claimf in claimsFor %}
                <tr>
                  <td><a href='{{ path('showClaim', {'id': claimf.id , 'id_u':idU}) }}'>{{ claimf.id }}</a></td>
                  <td>{{ claimf.subject }}</td>
                  <td>{{ claimf.description }}</td>
                  <td>{{ claimf.date|date('Y-m-d') }}</td>
                  <td>
                    {% if claimf.etat == 'In Process' %}
                      <span class=\"badge bg-warning\">{{ claimf.etat }}</span>
                    {% elseif claimf.etat == 'Not Yet' %}
                      <span class=\"badge bg-danger\">{{ claimf.etat }}</span>
                    {% elseif claimf.etat == 'Answered' %}
                      <span class=\"badge bg-success\">{{ claimf.etat }}</span>
                    {% else %}
                      {{ claimf.etat }}
                    {% endif %}
                  </td>
                  <td>{{ claimf.getClaimer().getFullName() }}</td>
                  <td>
                    <div class=\"d-flex\">
                      <form method=\"post\" action=\"{{ path('deleteClaim', {'id': claimf.id,'id_u':idU}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\" class=\"me-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button type=\"submit\" class=\"btn btn-danger bg-transparent border-0\">
                          <i class=\"material-icons text-danger\">delete</i>
                        </button>
                      </form>
                      
                      <form method=\"post\" action=\"{{ path('addanswer', {'id_u':idU, 'id_c': claimf.id}) }}\" onsubmit=\"return confirm('Are you sure you want to answer this claim?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"Add\">
                        <button type=\"submit\" class=\"btn btn-primary bg-transparent border-0\">
                          <i class=\"material-icons text-primary\">add_comment</i>
                        </button>
                      </form>
                    </div>
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
", "claim/show_all.html.twig", "C:\\Users\\admin\\Desktop\\FlixWork-1\\templates\\claim\\show_all.html.twig");
    }
}
