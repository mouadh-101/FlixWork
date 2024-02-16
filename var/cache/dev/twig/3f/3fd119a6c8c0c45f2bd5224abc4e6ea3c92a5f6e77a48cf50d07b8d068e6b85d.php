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
                  <th scope=\"col\">Answer</th>
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showanswer", ["id" => twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 33)]), "html", null, true);
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
            (( !(null === twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 36))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 36), "getFullName", [], "method", false, false, false, 36), "html", null, true))) : (print ("N/A")));
            echo "</td>
                  <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editAnswer", ["id" => twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"\">
                      <i class=\"material-icons\">edit</i> <span class=\"material-symbols-outlined\">
</span>
                    </a>
                    <form method=\"post\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteAnswer", ["id" => twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this answer?');\">
                      <button type=\"submit\" class=\"\">
                        <i class=\"material-icons\">delete</i> <span class=\"material-symbols-outlined\"></span>
                      </button>
                    </form>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
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
        return array (  144 => 50,  130 => 42,  123 => 38,  118 => 36,  114 => 35,  110 => 34,  104 => 33,  101 => 32,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
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
                  <th scope=\"col\">Answer</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for answer in answers %}
                <tr>
                  <td><a href=\"{{ path('showanswer', {'id': answer.id}) }}\">{{ answer.id }}</a></td>
                  <td>{{ answer.description }}</td>
                  <td>{{ answer.claim.subject }}</td>
                  <td>{{ answer.answer is not null ? answer.answer.getFullName() : 'N/A' }}</td>
                  <td>
                    <a href=\"{{ path('editAnswer', {'id': answer.id}) }}\" class=\"\">
                      <i class=\"material-icons\">edit</i> <span class=\"material-symbols-outlined\">
</span>
                    </a>
                    <form method=\"post\" action=\"{{ path('deleteAnswer', {'id': answer.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this answer?');\">
                      <button type=\"submit\" class=\"\">
                        <i class=\"material-icons\">delete</i> <span class=\"material-symbols-outlined\"></span>
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
", "answer/showAll.html.twig", "C:\\Users\\admin\\Desktop\\Flixwork\\templates\\answer\\showAll.html.twig");
    }
}
