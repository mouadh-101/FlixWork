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

/* answer/new.html.twig */
class __TwigTemplate_7658f6bbed245057645e213f7b9401b3b72647ff2209b58abee78332b348e313 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answer/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answer/new.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "answer/new.html.twig", 1);
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
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <div class=\"alert alert-danger\">
            <ul>
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["fieldName"] => $context["errorMessage"]) {
                // line 8
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["fieldName"], "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $context["errorMessage"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['errorMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </ul>
        </div>
    ";
        }
        // line 12
        echo " ";
        // line 13
        echo "    <div class=\"pagetitle\">
      <h1>add answer</h1>
    </div><!-- End Page Title -->
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
    <section class=\"section\">
      <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Let's Add Answers</h5>
              <p><strong>Claim Subject:</strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 22, $this->source); })()), "subject", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
              <p><strong>Claim Description:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
              <p><strong>Claim Date:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true);
        echo "</p>
              <p><strong>Claim State:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
              <!-- General Form Elements -->
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\"> answer </label>
              <div class=\"col-sm-10\">
                  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              <button type=\"submit\" class=\"btn btn-primary\">Submit answer</button>
              ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
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
        return "answer/new.html.twig";
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
        return array (  138 => 32,  132 => 29,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  104 => 16,  99 => 13,  97 => 12,  92 => 10,  81 => 8,  77 => 7,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}
{% block main %}
  <main id=\"main\" class=\"main\">
    {% if errors %}
        <div class=\"alert alert-danger\">
            <ul>
                {% for fieldName, errorMessage in errors %}
                    <li>{{ fieldName }}: {{ errorMessage }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %} {# Close the \"if\" block here #}
    <div class=\"pagetitle\">
      <h1>add answer</h1>
    </div><!-- End Page Title -->
    {{ form_start(form) }}
    <section class=\"section\">
      <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Let's Add Answers</h5>
              <p><strong>Claim Subject:</strong> {{ claim.subject }}</p>
              <p><strong>Claim Description:</strong> {{ claim.description }}</p>
              <p><strong>Claim Date:</strong> {{ claim.date|date('Y-m-d') }}</p>
              <p><strong>Claim State:</strong> {{ claim.etat }}</p>
              <!-- General Form Elements -->
              <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\"> answer </label>
              <div class=\"col-sm-10\">
                  {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
              </div>
              <button type=\"submit\" class=\"btn btn-primary\">Submit answer</button>
              {{ form_end(form) }}
            </div>
          </div>
      </div>
    </section>
  </main>
{% endblock %}
", "answer/new.html.twig", "C:\\Users\\admin\\Desktop\\FlixWork-1\\templates\\answer\\new.html.twig");
    }
}
