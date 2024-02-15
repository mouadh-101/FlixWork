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
    <div class=\"pagetitle\">
      <h1>Postulation</h1>
    </div><!-- End Page Title -->
    <section class=\"section\">
      <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-body\">
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Job title</label>
              <input type=\"text\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["jobTitle"]) || array_key_exists("jobTitle", $context) ? $context["jobTitle"] : (function () { throw new RuntimeError('Variable "jobTitle" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date of postulation</label>
              <input type=\"date\" class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["postulationDate"]) || array_key_exists("postulationDate", $context) ? $context["postulationDate"] : (function () { throw new RuntimeError('Variable "postulationDate" does not exist.', 36, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat </label>
              ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 39, $this->source); })()), "etat", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Default select example"]]);
        // line 45
        echo "
              <div class=\"row mb-3\">
                  ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 47, $this->source); })()), "cover_letter", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control", "style" => "height: 200px"]]);
        echo "
              </div>
                <div class=\"col-sm-10\">
                ";
        // line 50
        if ((((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 50, $this->source); })()) == "rejected") || ((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 50, $this->source); })()) == "approved"))) {
            // line 51
            echo "                  <button type=\"submit\" class=\"btn btn-primary\" disabled>Submit Postulation</button>
                ";
        } else {
            // line 53
            echo "                  <button type=\"submit\" class=\"btn btn-primary\">Submit Postulation</button>
                ";
        }
        // line 55
        echo "                </div>
              ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 56, $this->source); })()), 'form_end');
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
        return array (  167 => 56,  164 => 55,  160 => 53,  156 => 51,  154 => 50,  148 => 47,  144 => 45,  142 => 39,  138 => 38,  133 => 36,  128 => 34,  112 => 21,  108 => 20,  92 => 6,  82 => 5,  72 => 4,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
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
              {{ form_widget(formPstulation.etat, {
        'attr': {
            'class': 'form-select',
            'aria-label': 'Default select example',
            
        }
    }) }}
              <div class=\"row mb-3\">
                  {{ form_row(formPstulation.cover_letter, {'attr': {'class': 'form-control', 'style': 'height: 200px', }}) }}
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
