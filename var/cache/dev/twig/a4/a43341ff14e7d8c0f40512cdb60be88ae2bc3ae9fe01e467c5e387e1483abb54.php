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

/* interview/addinterview.html.twig */
class __TwigTemplate_7f7a83cdf670598d0d7f4e3f6a52fbb46bb4add661fb7a860cc0af8917f25adf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/addinterview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interview/addinterview.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "interview/addinterview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "
  <main id=\"main\" class=\"main\">
  ";
        // line 7
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "    <div class=\"alert alert-danger\">
        <ul>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </ul>
    </div>
";
        }
        // line 16
        echo "    <div class=\"pagetitle\">
      <h1>Interview</h1>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Let's Programme Interview</h5>
            <form method=\"post\">
              ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Recruiter</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "data", [], "any", false, false, false, 30), "recruiter", [], "any", false, false, false, 30), "fullname", [], "any", false, false, false, 30), "html", null, true);
        echo "\" readonly>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Freelancer</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "data", [], "any", false, false, false, 36), "freelancer", [], "any", false, false, false, 36), "fullname", [], "any", false, false, false, 36), "html", null, true);
        echo "\" readonly>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">etat</label>
                <div class=\"col-sm-10\">
                  ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 42, $this->source); })()), "etat", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 48, $this->source); })()), "interview_date", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Interview link</label>
                <div class=\"col-sm-10\">
                  ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 54, $this->source); })()), "interview_link", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                  ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 100px"]]);
        echo "
                </div>
              </div>
              <div class=\"col-sm-10\">
                <button type=\"submit\" class=\"btn btn-primary\">Submit Interview</button>
              </div>
              ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
            </form>
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
        return "interview/addinterview.html.twig";
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
        return array (  169 => 66,  160 => 60,  151 => 54,  142 => 48,  133 => 42,  124 => 36,  115 => 30,  108 => 26,  96 => 16,  91 => 13,  82 => 11,  78 => 10,  74 => 8,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
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
      <h1>Interview</h1>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Let's Programme Interview</h5>
            <form method=\"post\">
              {{ form_start(formInterview) }}
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Recruiter</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" class=\"form-control\" value=\"{{ formInterview.vars.data.recruiter.fullname }}\" readonly>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Freelancer</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" class=\"form-control\" value=\"{{ formInterview.vars.data.freelancer.fullname }}\" readonly>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">etat</label>
                <div class=\"col-sm-10\">
                  {{ form_widget(formInterview.etat, {'attr': {'class': 'form-control'}}) }}
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                  {{ form_widget(formInterview.interview_date, {'attr': {'class': 'form-control'}}) }}
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Interview link</label>
                <div class=\"col-sm-10\">
                  {{ form_widget(formInterview.interview_link, {'attr': {'class': 'form-control'}}) }}
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                  {{ form_widget(formInterview.description, {'attr': {'class': 'form-control', 'style': 'height: 100px'}}) }}
                </div>
              </div>
              <div class=\"col-sm-10\">
                <button type=\"submit\" class=\"btn btn-primary\">Submit Interview</button>
              </div>
              {{ form_end(formInterview) }}
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
{% endblock %}
", "interview/addinterview.html.twig", "C:\\Users\\mouad\\Documents\\GitHub\\FlixWork\\templates\\interview\\addinterview.html.twig");
    }
}
