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

/* postulation/postulationlistr.html.twig */
class __TwigTemplate_78193aa25120fabee297037973473c9a1f2ff0484636b42a3c5b36136f61690b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postulationlistr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postulationlistr.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "postulation/postulationlistr.html.twig", 1);
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
                        <th scope=\"col\">Freelancer</th>
                        <th scope=\"col\">Etat</th>
                        <th scope=\"col\">Interview</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 33
            echo "                    <tr>
                        <th scope=\"row\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showpost", ["id_p" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 34), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 34, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></th>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getPostulationDate", [], "method", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCoverLetter", [], "method", false, false, false, 36), 0, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "job", [], "any", false, false, false, 37), "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getFreelancer", [], "method", false, false, false, 38), "getFullName", [], "method", false, false, false, 38), "html", null, true);
            echo "</td>
                        ";
            // line 39
            if (((twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 39) == "under consideration") || (twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 39) == "under_consideration"))) {
                // line 40
                echo "                            <td class=\"green\"><span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 40), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["post"], "etat", [], "any", false, false, false, 41) == "rejected")) {
                // line 42
                echo "                            <td class=\"green\"><span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 42), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
$context["post"], "etat", [], "any", false, false, false, 43) == "approved")) {
                // line 44
                echo "                            <td class=\"green\"><span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 44), "html", null, true);
                echo "</span></td>
                        ";
            } else {
                // line 46
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 46), "html", null, true);
                echo "
                        ";
            }
            // line 48
            echo "                        <th scope=\"row\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addInterview", ["id_r" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 48, $this->source); })()), "id_f" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getFreelancer", [], "method", false, false, false, 48), "getId", [], "method", false, false, false, 48)]), "html", null, true);
            echo "\">Interview</a></th>

                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "postulation/postulationlistr.html.twig";
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
        return array (  167 => 52,  156 => 48,  150 => 46,  144 => 44,  142 => 43,  137 => 42,  135 => 41,  130 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  106 => 34,  103 => 33,  99 => 32,  68 => 3,  58 => 2,  35 => 1,);
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
                        <th scope=\"col\">Freelancer</th>
                        <th scope=\"col\">Etat</th>
                        <th scope=\"col\">Interview</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for post in postulations %}
                    <tr>
                        <th scope=\"row\"><a href=\"{{ path( 'showpost' , {'id_p' : post.id,'id_u' : idUser})}}\">{{post.id}}</a></th>
                        <td>{{post.getPostulationDate()|date('Y-m-d') }}</td>
                        <td>{{post.getCoverLetter()|slice(0,50) }}</td>
                        <td>{{post.job.title}}</td>
                        <td>{{post.getFreelancer().getFullName()}}</td>
                        {% if post.etat == 'under consideration' or post.etat == 'under_consideration' %}
                            <td class=\"green\"><span class=\"badge bg-warning\">{{ post.etat }}</span></td>
                        {% elseif post.etat == 'rejected' %}
                            <td class=\"green\"><span class=\"badge bg-danger\">{{ post.etat }}</span></td>
                        {% elseif post.etat == 'approved' %}
                            <td class=\"green\"><span class=\"badge bg-success\">{{ post.etat }}</span></td>
                        {% else %}
                            {{ post.etat }}
                        {% endif %}
                        <th scope=\"row\"><a href=\"{{ path('addInterview', {'id_r': idUser, 'id_f': post.getFreelancer().getId() }) }}\">Interview</a></th>

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
  {% endblock %}", "postulation/postulationlistr.html.twig", "C:\\Users\\mouad\\Desktop\\Flixwork\\templates\\postulation\\postulationlistr.html.twig");
    }
}
