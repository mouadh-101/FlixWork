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

/* postulation/postuler.html.twig */
class __TwigTemplate_aea10a0cab3ead9929caea1d47e81e343689d26f17cefcc8ada72897de5da6a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postuler.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postuler.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "postulation/postuler.html.twig", 1);
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

    <section class=\"section\">
      <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Let's postulate</h5>

              <!-- General Form Elements -->
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Job title</label>
              <input type=\"text\" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["jobTitle"]) || array_key_exists("jobTitle", $context) ? $context["jobTitle"] : (function () { throw new RuntimeError('Variable "jobTitle" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date of postulation</label>
              <input type=\"date\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["postulationDate"]) || array_key_exists("postulationDate", $context) ? $context["postulationDate"] : (function () { throw new RuntimeError('Variable "postulationDate" does not exist.', 19, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat </label>
              ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
              ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 22, $this->source); })()), "etat", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Default select example"]]);
        // line 27
        echo "
              <div class=\"row mb-3\">
                  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 29, $this->source); })()), "cover_letter", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control", "style" => "height: 200px"]]);
        echo "
              </div>
                <div class=\"col-sm-10\">
                ";
        // line 32
        if ((((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 32, $this->source); })()) == "rejected") || ((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 32, $this->source); })()) == "approved"))) {
            // line 33
            echo "                  <button type=\"submit\" class=\"btn btn-primary\" disabled>Submit Postulation</button>
                ";
        } else {
            // line 35
            echo "                  <button type=\"submit\" class=\"btn btn-primary\">Submit Postulation</button>
                ";
        }
        // line 37
        echo "                </div>
              ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 38, $this->source); })()), 'form_end');
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
        return "postulation/postuler.html.twig";
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
        return array (  123 => 38,  120 => 37,  116 => 35,  112 => 33,  110 => 32,  104 => 29,  100 => 27,  98 => 22,  94 => 21,  89 => 19,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Postulation</h1>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Let's postulate</h5>

              <!-- General Form Elements -->
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Job title</label>
              <input type=\"text\" class=\"form-control\" value=\"{{ jobTitle }}\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date of postulation</label>
              <input type=\"date\" class=\"form-control\" value=\"{{ postulationDate|date('Y-m-d') }}\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat </label>
              {{ form_start(formPstulation) }}
              {{ form_widget(formPstulation.etat, {
        'attr': {
            'class': 'form-select',
            'aria-label': 'Default select example'
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
", "postulation/postuler.html.twig", "C:\\Users\\mouad\\Desktop\\Flixwork\\templates\\postulation\\postuler.html.twig");
    }
}
