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
            'hero' => [$this, 'block_hero'],
            'categories' => [$this, 'block_categories'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/interviewlistf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/interviewlistf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interview/interviewlistf.html.twig", 1);
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
        $this->displayBlock('hero', $context, $blocks);
        // line 6
        echo "<style>
  .features{
    padding-top:200px;
  }
</style>
";
        // line 11
        $this->displayBlock('categories', $context, $blocks);
        
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 12
        echo "    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Interviews</h2>
          <p>Here is a list of your Interviews </p>
        </div>
      <section class=\"section dashboard\">
      
      <div class=\"row\">

        <!-- Left side columns -->
            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\"data-aos=\"fade-up\">
                <div class=\"card-body\">
                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Recruiter</th>
                        <th scope=\"col\">Interview Date</th>
                        <th scope=\"col\">Interview link</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interviews"]) || array_key_exists("interviews", $context) ? $context["interviews"] : (function () { throw new RuntimeError('Variable "interviews" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["interview"]) {
            // line 41
            echo "                    <tr>
                        <th scope=\"row\"><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showinterview", ["id_i" => twig_get_attribute($this->env, $this->source, $context["interview"], "id", [], "any", false, false, false, 42), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 42, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></th>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interview"], "recruiter", [], "any", false, false, false, 43), "getFullName", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "getInterviewDate", [], "method", false, false, false, 44), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "getInterviewLink", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "description", [], "any", false, false, false, 46), 0, 50), "html", null, true);
            echo "</td>
                        ";
            // line 47
            if (((twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 47) == "under consideration") || (twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 47) == "under_consideration"))) {
                // line 48
                echo "                            <td class=\"green\"><span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 48), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 49
$context["interview"], "etat", [], "any", false, false, false, 49) == "rejected")) {
                // line 50
                echo "                            <td class=\"green\"><span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 50), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["interview"], "etat", [], "any", false, false, false, 51) == "approved")) {
                // line 52
                echo "                            <td class=\"green\"><span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 52), "html", null, true);
                echo "</span></td>
                        ";
            } else {
                // line 54
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interview"], "etat", [], "any", false, false, false, 54), "html", null, true);
                echo "
                        ";
            }
            // line 56
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      </div>
    </section>
      </div>
    </section>
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
        return array (  211 => 58,  204 => 56,  198 => 54,  192 => 52,  190 => 51,  185 => 50,  183 => 49,  178 => 48,  176 => 47,  172 => 46,  168 => 45,  164 => 44,  160 => 43,  154 => 42,  151 => 41,  147 => 40,  117 => 12,  107 => 11,  89 => 4,  79 => 11,  72 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
{% block hero %}
{% endblock %}
<style>
  .features{
    padding-top:200px;
  }
</style>
{% block categories %}
    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Interviews</h2>
          <p>Here is a list of your Interviews </p>
        </div>
      <section class=\"section dashboard\">
      
      <div class=\"row\">

        <!-- Left side columns -->
            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\"data-aos=\"fade-up\">
                <div class=\"card-body\">
                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Recruiter</th>
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
                        <td>{{interview.recruiter.getFullName()}}</td>
                        <td>{{interview.getInterviewDate()|date('Y-m-d') }}</td>
                        <td>{{interview.getInterviewLink()}}</td>
                        <td>{{interview.description|slice(0,50) }}</td>
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
      </div>
    </section>
  {% endblock %}
{% endblock %}



", "interview/interviewlistf.html.twig", "C:\\Users\\mouad\\Documents\\GitHub\\FlixWork\\templates\\interview\\interviewlistf.html.twig");
    }
}
