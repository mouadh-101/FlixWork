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

/* claim/showall.html.twig */
class __TwigTemplate_97a1cf695be866a73c95425018b433e31934a6a472afdd1fa012ed0a7ed25797 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/showall.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/showall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "claim/showall.html.twig", 1);
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
        <div class=\"card-body\">
          <form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addClaim", ["id" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 15, $this->source); })())]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to Add new Claim ?');\">
            <button type=\"submit\" class=\"btn btn-primary\">
              <i class=\"material-icons\"></i> Add Claim
            </button>
          </form>
        </div>
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new RuntimeError('Variable "claims" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 38
            echo "                <tr>
                  <td><a href='";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 39), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 39, $this->source); })())]), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "subject", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                  <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "description", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                  <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "date", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 44) == "In Process")) {
                // line 45
                echo "                      <span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 45), "html", null, true);
                echo "</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
$context["claim"], "etat", [], "any", false, false, false, 46) == "Not Yet")) {
                // line 47
                echo "                      <span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 47), "html", null, true);
                echo "</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 48
$context["claim"], "etat", [], "any", false, false, false, 48) == "Answered")) {
                // line 49
                echo "                      <span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 49), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 51
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "etat", [], "any", false, false, false, 51), "html", null, true);
                echo "
                    ";
            }
            // line 53
            echo "                  </td>
                  <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "getClaimFor", [], "method", false, false, false, 54), "getFullName", [], "method", false, false, false, 54), "html", null, true);
            echo "</td>
                  <td>
                    <div class=\"d-flex\">
                      <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClaim", ["id_c" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 57), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 57, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary me-2\">
                        <i class=\"material-icons\"></i> Edit
                      </a>
                      <form method=\"post\" action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 60), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 60, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\" class=\"me-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                          <i class=\"material-icons\"></i> Delete
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
        // line 70
        echo "              </tbody>
            </table>
          </div>
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
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["claimsFor"]) || array_key_exists("claimsFor", $context) ? $context["claimsFor"] : (function () { throw new RuntimeError('Variable "claimsFor" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["claimf"]) {
            // line 90
            echo "              <tr>
                <td><a href='";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 91), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 91, $this->source); })())]), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "</a></td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "subject", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "description", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "date", [], "any", false, false, false, 94), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 96) == "In Process")) {
                // line 97
                echo "                    <span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 97), "html", null, true);
                echo "</span>
                  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 98
$context["claimf"], "etat", [], "any", false, false, false, 98) == "Not Yet")) {
                // line 99
                echo "                    <span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 99), "html", null, true);
                echo "</span>
                  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 100
$context["claimf"], "etat", [], "any", false, false, false, 100) == "Answered")) {
                // line 101
                echo "                    <span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 101), "html", null, true);
                echo "</span>
                  ";
            } else {
                // line 103
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claimf"], "etat", [], "any", false, false, false, 103), "html", null, true);
                echo "
                  ";
            }
            // line 105
            echo "                </td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claimf"], "getClaimer", [], "method", false, false, false, 106), "getFullName", [], "method", false, false, false, 106), "html", null, true);
            echo "</td>
                <td>
                  <div class=\"d-flex\">
                    <form method=\"post\" action=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClaim", ["id" => twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 109), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 109, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\" class=\"me-2\">
                      <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                      <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"material-icons\"></i> Delete
                      </button>
                    </form>
                    <form method=\"post\" action=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addanswer", ["id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 115, $this->source); })()), "id_c" => twig_get_attribute($this->env, $this->source, $context["claimf"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to answer this claim?');\">
                      <input type=\"hidden\" name=\"_method\" value=\"Add\">
                      <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"material-icons\"> </i> Add Answer
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
        // line 125
        echo "            </tbody>
          </table>
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
        return "claim/showall.html.twig";
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
        return array (  300 => 125,  284 => 115,  275 => 109,  269 => 106,  266 => 105,  260 => 103,  254 => 101,  252 => 100,  247 => 99,  245 => 98,  240 => 97,  238 => 96,  233 => 94,  229 => 93,  225 => 92,  219 => 91,  216 => 90,  212 => 89,  191 => 70,  175 => 60,  169 => 57,  163 => 54,  160 => 53,  154 => 51,  148 => 49,  146 => 48,  141 => 47,  139 => 46,  134 => 45,  132 => 44,  127 => 42,  123 => 41,  119 => 40,  113 => 39,  110 => 38,  106 => 37,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
        <div class=\"card-body\">
          <form method=\"post\" action=\"{{ path('addClaim', {'id':idU}) }}\" onsubmit=\"return confirm('Are you sure you want to Add new Claim ?');\">
            <button type=\"submit\" class=\"btn btn-primary\">
              <i class=\"material-icons\"></i> Add Claim
            </button>
          </form>
        </div>
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
                      <a href=\"{{ path('editClaim', {'id_c': claim.id,'id_u':idU}) }}\" class=\"btn btn-primary me-2\">
                        <i class=\"material-icons\"></i> Edit
                      </a>
                      <form method=\"post\" action=\"{{ path('deleteClaim', {'id': claim.id,'id_u':idU}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\" class=\"me-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                          <i class=\"material-icons\"></i> Delete
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
                      <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"material-icons\"></i> Delete
                      </button>
                    </form>
                    <form method=\"post\" action=\"{{ path('addanswer', {'id_u':idU, 'id_c': claimf.id}) }}\" onsubmit=\"return confirm('Are you sure you want to answer this claim?');\">
                      <input type=\"hidden\" name=\"_method\" value=\"Add\">
                      <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"material-icons\"> </i> Add Answer
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </div><!-- End Recent Sales -->
    </div>
  </section>
</main>
{% endblock %}
", "claim/showall.html.twig", "C:\\Users\\admin\\Desktop\\FlixWork-1\\templates\\claim\\showall.html.twig");
    }
}
