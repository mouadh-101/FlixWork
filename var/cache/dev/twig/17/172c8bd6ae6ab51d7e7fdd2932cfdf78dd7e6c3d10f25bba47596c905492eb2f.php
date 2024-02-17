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

/* postulation/postule.html.twig */
class __TwigTemplate_6140c56b766f42ae3b29dc68fdcaaa2fa03209508a2fc0d87f42dee8ac5b6c98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postule.html.twig"));

        // line 2
        $context["defaultEtatValue"] = "{{state}}";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "postulation/postule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 4
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<style>
    #main.main {
        padding: 100px;
    }
    #breadcrumbs {
        padding-top:100;
        padding-left: 150px;
        padding-right: 150px;
    }
</style>
  <section id=\"breadcrumbs\" class=\"breadcrumbs\">
        <div class=\"d-flex justify-content-between align-items-center\"
          <h2>Postulation Submit</h2>
          <ol>
            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_jobs");
        echo "\">Jobs</a>
            <li>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["jobTitle"]) || array_key_exists("jobTitle", $context) ? $context["jobTitle"] : (function () { throw new RuntimeError('Variable "jobTitle" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</li>
          </ol>
        </div>
    </section>
  <main id=\"main\" class=\"main\">
  ";
        // line 26
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "    <div class=\"alert alert-danger\">
        <ul>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 30
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </ul>
    </div>
";
        }
        // line 35
        echo "    <div class=\"pagetitle\">
      <h1>Postulation</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
      <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-body\">
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Job title</label>
              <input type=\"text\" class=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["jobTitle"]) || array_key_exists("jobTitle", $context) ? $context["jobTitle"] : (function () { throw new RuntimeError('Variable "jobTitle" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date of postulation</label>
              <input type=\"date\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["postulationDate"]) || array_key_exists("postulationDate", $context) ? $context["postulationDate"] : (function () { throw new RuntimeError('Variable "postulationDate" does not exist.', 45, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat </label>
              ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
              <input type=\"text\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" disabled>
              <div class=\"row mb-3\">
                  ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 50, $this->source); })()), "cover_letter", [], "any", false, false, false, 50), 'row', ["widget" => "textarea", "attr" => ["class" => "form-control", "style" => "height: 200px"], "tag" => "textarea"]);
        echo "
              </div>
                <div class=\"col-sm-10\">
                ";
        // line 53
        if ((((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 53, $this->source); })()) == "rejected") || ((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 53, $this->source); })()) == "approved"))) {
            // line 54
            echo "                  <button type=\"submit\" class=\"btn btn-primary\" disabled>Submit Postulation</button>
                ";
        } else {
            // line 56
            echo "                  <button type=\"submit\" class=\"btn btn-primary\">Submit Postulation</button>
                ";
        }
        // line 58
        echo "                </div>
              ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
              <!-- End General Form Elements -->

            </div>
        </div>
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
        return "postulation/postule.html.twig";
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
        return array (  192 => 59,  189 => 58,  185 => 56,  181 => 54,  179 => 53,  173 => 50,  168 => 48,  164 => 47,  159 => 45,  154 => 43,  144 => 35,  139 => 32,  130 => 30,  126 => 29,  122 => 27,  120 => 26,  112 => 21,  108 => 20,  92 => 6,  82 => 5,  72 => 4,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set defaultEtatValue = '{{state}}' %}
{% block hero %}
  {% endblock %}
{% block main %}
<style>
    #main.main {
        padding: 100px;
    }
    #breadcrumbs {
        padding-top:100;
        padding-left: 150px;
        padding-right: 150px;
    }
</style>
  <section id=\"breadcrumbs\" class=\"breadcrumbs\">
        <div class=\"d-flex justify-content-between align-items-center\"
          <h2>Postulation Submit</h2>
          <ol>
            <li><a href=\"{{ path('list_jobs')}}\">Jobs</a>
            <li>{{ jobTitle }}</li>
          </ol>
        </div>
    </section>
  <main id=\"main\" class=\"main\">
  {% if errors is not empty %}
    <div class=\"alert alert-danger\">
        <ul>
            {% for error in errors %}
                <li>{{ error }}</li>
            {% endfor %}
        </ul>
    </div>
{% endif %}
    <div class=\"pagetitle\">
      <h1>Postulation</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
      <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-body\">
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Job title</label>
              <input type=\"text\" class=\"form-control\" value=\"{{ jobTitle }}\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date of postulation</label>
              <input type=\"date\" class=\"form-control\" value=\"{{ postulationDate|date('Y-m-d') }}\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat </label>
              {{ form_start(formPstulation) }}
              <input type=\"text\" class=\"form-control\" value=\"{{state}}\" disabled>
              <div class=\"row mb-3\">
                  {{ form_row(formPstulation.cover_letter, {'widget': 'textarea','attr': {'class': 'form-control', 'style': 'height: 200px'},'tag': 'textarea'}) }}
              </div>
                <div class=\"col-sm-10\">
                {% if state == 'rejected' or state == 'approved' %}
                  <button type=\"submit\" class=\"btn btn-primary\" disabled>Submit Postulation</button>
                {% else %}
                  <button type=\"submit\" class=\"btn btn-primary\">Submit Postulation</button>
                {%endif %}
                </div>
              {{ form_end(formPstulation) }}
              <!-- End General Form Elements -->

            </div>
        </div>
      </div>
    </section>

  </main>
{% endblock %}

", "postulation/postule.html.twig", "C:\\Users\\mouad\\Documents\\GitHub\\FlixWork\\templates\\postulation\\postule.html.twig");
    }
}
