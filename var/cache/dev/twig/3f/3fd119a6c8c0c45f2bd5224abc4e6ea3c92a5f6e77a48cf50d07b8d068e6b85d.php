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

/* answer/showAll.html.twig */
class __TwigTemplate_dcdfd9fd890599bf124068b4a96246c2e1825e2db750c8ad8ff33773a586ca7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answer/showAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answer/showAll.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "answer/showAll.html.twig", 1);
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
    <h1>List of Answers</h1>
  </div><!-- End Page Title -->

  <section class=\"section dashboard\">
    <div class=\"row\">

      <!-- Left side columns -->
      <!-- Recent Sales -->
      <div class=\"col-12\">
        <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of answers</h5>

            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Answer</th>
                  <th scope=\"col\">Claim subject</th>
                  <th scope=\"col\">Answer for</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 32
            echo "                <tr>
                  <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showanswer", ["id_a" => twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 33), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 33, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "description", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "claim", [], "any", false, false, false, 35), "subject", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            (( !(null === twig_get_attribute($this->env, $this->source, $context["answer"], "answerFor", [], "any", false, false, false, 36))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "answerFor", [], "any", false, false, false, 36), "getFullName", [], "method", false, false, false, 36), "html", null, true))) : (print ("N/A")));
            echo "</td>
                  <td>
                    <div class=\"d-flex\">
                      <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editAnswer", ["id_a" => twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 39), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 39, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary me-2 bg-transparent border-0\">
                        <i class=\"material-icons text-primary\">edit</i>
                      </a>
                      <form method=\"post\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteAnswer", ["id_a" => twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 42), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 42, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this answer?');\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              </tbody>
            </table>

          </div>
          <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of answers For me</h5>

            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Answer</th>
                  <th scope=\"col\">Claim subject</th>
                  <th scope=\"col\">Answer</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answersFor"]) || array_key_exists("answersFor", $context) ? $context["answersFor"] : (function () { throw new RuntimeError('Variable "answersFor" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answerf"]) {
            // line 71
            echo "                <tr>
                  <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showanswer", ["id_a" => twig_get_attribute($this->env, $this->source, $context["answerf"], "id", [], "any", false, false, false, 72), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 72, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answerf"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answerf"], "description", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                  <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answerf"], "claim", [], "any", false, false, false, 74), "subject", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                  <td>";
            // line 75
            (( !(null === twig_get_attribute($this->env, $this->source, $context["answerf"], "answer", [], "any", false, false, false, 75))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answerf"], "answer", [], "any", false, false, false, 75), "getFullName", [], "method", false, false, false, 75), "html", null, true))) : (print ("N/A")));
            echo "</td>
                  <td>
                    <div class=\"d-flex\">
                      <form method=\"post\" action=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteAnswer", ["id_a" => twig_get_attribute($this->env, $this->source, $context["answerf"], "id", [], "any", false, false, false, 78), "id_u" => (isset($context["idU"]) || array_key_exists("idU", $context) ? $context["idU"] : (function () { throw new RuntimeError('Variable "idU" does not exist.', 78, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this answer?');\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answerf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return "answer/showAll.html.twig";
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
        return array (  208 => 87,  193 => 78,  187 => 75,  183 => 74,  179 => 73,  173 => 72,  170 => 71,  166 => 70,  145 => 51,  130 => 42,  124 => 39,  118 => 36,  114 => 35,  110 => 34,  104 => 33,  101 => 32,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}

{% block main %}
<main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
    <h1>List of Answers</h1>
  </div><!-- End Page Title -->

  <section class=\"section dashboard\">
    <div class=\"row\">

      <!-- Left side columns -->
      <!-- Recent Sales -->
      <div class=\"col-12\">
        <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of answers</h5>

            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Answer</th>
                  <th scope=\"col\">Claim subject</th>
                  <th scope=\"col\">Answer for</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for answer in answers %}
                <tr>
                  <td><a href=\"{{ path('showanswer', {'id_a': answer.id, 'id_u':idU}) }}\">{{ answer.id }}</a></td>
                  <td>{{ answer.description }}</td>
                  <td>{{ answer.claim.subject }}</td>
                  <td>{{ answer.answerFor is not null ? answer.answerFor.getFullName() : 'N/A' }}</td>
                  <td>
                    <div class=\"d-flex\">
                      <a href=\"{{ path('editAnswer', {'id_a': answer.id,'id_u':idU}) }}\" class=\"btn btn-primary me-2 bg-transparent border-0\">
                        <i class=\"material-icons text-primary\">edit</i>
                      </a>
                      <form method=\"post\" action=\"{{ path('deleteAnswer', {'id_a': answer.id,'id_u':idU}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this answer?');\">
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
          <div class=\"card recent-sales overflow-auto\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">List of answers For me</h5>

            <table class=\"table table-borderless datatable\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Answer</th>
                  <th scope=\"col\">Claim subject</th>
                  <th scope=\"col\">Answer</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for answerf in answersFor %}
                <tr>
                  <td><a href=\"{{ path('showanswer', {'id_a': answerf.id, 'id_u':idU}) }}\">{{ answerf.id }}</a></td>
                  <td>{{ answerf.description }}</td>
                  <td>{{ answerf.claim.subject }}</td>
                  <td>{{ answerf.answer is not null ? answerf.answer.getFullName() : 'N/A' }}</td>
                  <td>
                    <div class=\"d-flex\">
                      <form method=\"post\" action=\"{{ path('deleteAnswer', {'id_a': answerf.id,'id_u':idU}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this answer?');\">
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

        </div>
      </div><!-- End Recent Sales -->
    </div>
  </section>

</main>
{% endblock %}
", "answer/showAll.html.twig", "C:\\Users\\admin\\Desktop\\FlixWork-1\\templates\\answer\\showAll.html.twig");
    }
}
