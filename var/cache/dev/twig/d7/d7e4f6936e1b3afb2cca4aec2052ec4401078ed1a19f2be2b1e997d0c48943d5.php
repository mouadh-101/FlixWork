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

/* postulation/postulationlist.html.twig */
class __TwigTemplate_26d863ae4f7fed9e848222bf8aec923fac7a0437ddb8072d07cd93620f82fc32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postulationlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postulationlist.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "postulation/postulationlist.html.twig", 1);
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
        echo "  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Postulation</h1>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">List of Postulations</h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Postulation Date</th>
                        <th scope=\"col\">Cover letter</th>
                        <th scope=\"col\">Job Title</th>
                        <th scope=\"col\">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 31
            echo "                    <tr>
                        <th scope=\"row\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showpost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></th>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getPostulationDate", [], "method", false, false, false, 33), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCoverLetter", [], "method", false, false, false, 34), 0, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "job", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 36) == "under consideration")) {
                // line 37
                echo "                            <td class=\"green\"><span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 37), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 38
$context["post"], "etat", [], "any", false, false, false, 38) == "rejected")) {
                // line 39
                echo "                            <td class=\"green\"><span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 39), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 40
$context["post"], "etat", [], "any", false, false, false, 40) == "approved")) {
                // line 41
                echo "                            <td class=\"green\"><span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 41), "html", null, true);
                echo "</span></td>
                        ";
            } else {
                // line 43
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 43), "html", null, true);
                echo "
                        ";
            }
            // line 45
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                    </tbody>
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
        return "postulation/postulationlist.html.twig";
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
        return array (  157 => 47,  150 => 45,  144 => 43,  138 => 41,  136 => 40,  131 => 39,  129 => 38,  124 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  104 => 32,  101 => 31,  97 => 30,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Postulation</h1>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">List of Postulations</h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Postulation Date</th>
                        <th scope=\"col\">Cover letter</th>
                        <th scope=\"col\">Job Title</th>
                        <th scope=\"col\">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for post in postulations %}
                    <tr>
                        <th scope=\"row\"><a href=\"{{ path( 'showpost' , {'id' : post.id})}}\">{{post.id}}</a></th>
                        <td>{{post.getPostulationDate()|date('Y-m-d') }}</td>
                        <td>{{post.getCoverLetter()|slice(0,50) }}</td>
                        <td>{{post.job.title}}</td>
                        {% if post.etat == 'under consideration' %}
                            <td class=\"green\"><span class=\"badge bg-warning\">{{ post.etat }}</span></td>
                        {% elseif post.etat == 'rejected' %}
                            <td class=\"green\"><span class=\"badge bg-danger\">{{ post.etat }}</span></td>
                        {% elseif post.etat == 'approved' %}
                            <td class=\"green\"><span class=\"badge bg-success\">{{ post.etat }}</span></td>
                        {% else %}
                            {{ post.etat }}
                        {% endif %}
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
  {% endblock %}", "postulation/postulationlist.html.twig", "C:\\Users\\mouad\\Desktop\\Flixwork\\templates\\postulation\\postulationlist.html.twig");
    }
}
