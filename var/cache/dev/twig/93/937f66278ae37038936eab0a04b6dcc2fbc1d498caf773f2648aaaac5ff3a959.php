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
";
        // line 4
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "    <div class=\"alert alert-danger\">
        <ul>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    </div>
";
        }
        // line 13
        echo "    <div class=\"pagetitle\">
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
        // line 25
        echo twig_escape_filter($this->env, (isset($context["jobTitle"]) || array_key_exists("jobTitle", $context) ? $context["jobTitle"] : (function () { throw new RuntimeError('Variable "jobTitle" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date of postulation</label>
              <input type=\"date\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["postulationDate"]) || array_key_exists("postulationDate", $context) ? $context["postulationDate"] : (function () { throw new RuntimeError('Variable "postulationDate" does not exist.', 27, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\" disabled>
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat </label>
              ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
              ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 30, $this->source); })()), "etat", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Default select example"]]);
        // line 35
        echo "
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Cover Letter</label>
                  <textarea class=\"form-control\" style=\"height: 100px\"  disabled >";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["cover"]) || array_key_exists("cover", $context) ? $context["cover"] : (function () { throw new RuntimeError('Variable "cover" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</textarea><br>
                  <div class=\"col-sm-10\">
                ";
        // line 39
        if ((((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 39, $this->source); })()) == "rejected") || ((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 39, $this->source); })()) == "approved"))) {
            // line 40
            echo "                  <button type=\"submit\" class=\"btn btn-primary\" disabled>Submit Postulation</button>
                ";
        } else {
            // line 42
            echo "                  <button type=\"submit\" class=\"btn btn-primary\">Submit Postulation</button>
                ";
        }
        // line 44
        echo "                </div>
                  </div>
                
              ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPstulation"]) || array_key_exists("formPstulation", $context) ? $context["formPstulation"] : (function () { throw new RuntimeError('Variable "formPstulation" does not exist.', 47, $this->source); })()), 'form_end');
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
        return array (  149 => 47,  144 => 44,  140 => 42,  136 => 40,  134 => 39,  129 => 37,  125 => 35,  123 => 30,  119 => 29,  114 => 27,  109 => 25,  95 => 13,  90 => 10,  81 => 8,  77 => 7,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
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
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Cover Letter</label>
                  <textarea class=\"form-control\" style=\"height: 100px\"  disabled >{{cover}}</textarea><br>
                  <div class=\"col-sm-10\">
                {% if state == 'rejected' or state == 'approved' %}
                  <button type=\"submit\" class=\"btn btn-primary\" disabled>Submit Postulation</button>
                {% else %}
                  <button type=\"submit\" class=\"btn btn-primary\">Submit Postulation</button>
                {%endif %}
                </div>
                  </div>
                
              {{ form_end(formPstulation) }}
              <!-- End General Form Elements -->

            </div>
        </div>
      </div>
    </section>

  </main>
{% endblock %}
", "postulation/postuler.html.twig", "C:\\Users\\mouad\\Documents\\GitHub\\FlixWork\\templates\\postulation\\postuler.html.twig");
    }
}
