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

/* interview/interviewlistf.html.twig */
class __TwigTemplate_69fa1d31030a12af22f323da963c77e6545a34d791f99046c811491adf5ecd98 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/interviewlistf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/interviewlistf.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "interview/interviewlistf.html.twig", 1);
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
      <h1>Interviews</h1>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">List of Interviews </h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Freelancer</th>
                        <th scope=\"col\">Interview Date</th>
                        <th scope=\"col\">Interview link</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interviews"]) || array_key_exists("interviews", $context) ? $context["interviews"] : (function () { throw new RuntimeError('Variable "interviews" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["interview"]) {
            // line 32
            echo "                    <tr>
                        <th scope=\"row\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showinterview", ["id_i" => twig_get_attribute($this->env, $this->source, $context["interview"], "id", [], "any", false, false, false, 33), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 33, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></th>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interview"], "freelancer", [], "any", false, false, false, 34), "getFullName", [], "method", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "getInterviewDate", [], "method", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "description", [], "any", false, false, false, 36), 0, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "getInterviewLink", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>
                        ";
            // line 38
            if (((twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 38) == "under consideration") || (twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 38) == "under_consideration"))) {
                // line 39
                echo "                            <td class=\"green\"><span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 39), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 40
$context["interview"], "etat", [], "any", false, false, false, 40) == "rejected")) {
                // line 41
                echo "                            <td class=\"green\"><span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 41), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 42
$context["interview"], "etat", [], "any", false, false, false, 42) == "approved")) {
                // line 43
                echo "                            <td class=\"green\"><span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 43), "html", null, true);
                echo "</span></td>
                        ";
            } else {
                // line 45
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 45), "html", null, true);
                echo "
                        ";
            }
            // line 47
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return "interview/interviewlistf.html.twig";
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
        return array (  162 => 49,  155 => 47,  149 => 45,  143 => 43,  141 => 42,  136 => 41,  134 => 40,  129 => 39,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  105 => 33,  102 => 32,  98 => 31,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Interviews</h1>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">List of Interviews </h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Freelancer</th>
                        <th scope=\"col\">Interview Date</th>
                        <th scope=\"col\">Interview link</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for interview in interviews %}
                    <tr>
                        <th scope=\"row\"><a href=\"{{ path( 'showinterview' ,{'id_i' : interview.id,'id_u' : idUser})}}\">{{interview.id}}</a></th>
                        <td>{{interview.freelancer.getFullName()}}</td>
                        <td>{{interview.getInterviewDate()|date('Y-m-d') }}</td>
                        <td>{{interview.description|slice(0,50) }}</td>
                        <td>{{interview.getInterviewLink()}}</td>
                        {% if interview.etat == 'under consideration' or interview.etat == 'under_consideration' %}
                            <td class=\"green\"><span class=\"badge bg-warning\">{{ interview.etat }}</span></td>
                        {% elseif interview.etat == 'rejected' %}
                            <td class=\"green\"><span class=\"badge bg-danger\">{{ interview.etat }}</span></td>
                        {% elseif interview.etat == 'approved' %}
                            <td class=\"green\"><span class=\"badge bg-success\">{{ interview.etat }}</span></td>
                        {% else %}
                            {{ interview.etat }}
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
  {% endblock %}", "interview/interviewlistf.html.twig", "C:\\Users\\mouad\\Desktop\\Flixwork\\templates\\interview\\interviewlistf.html.twig");
    }
}
