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

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "  <main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
      <h1>Interview</h1>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Let's Programme Interview</h5>
            <form method=\"post\">
              ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Recruiter</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "data", [], "any", false, false, false, 19), "recruiter", [], "any", false, false, false, 19), "fullname", [], "any", false, false, false, 19), "html", null, true);
        echo "\" readonly>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Freelancer</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "data", [], "any", false, false, false, 25), "freelancer", [], "any", false, false, false, 25), "fullname", [], "any", false, false, false, 25), "html", null, true);
        echo "\" readonly>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">etat</label>
                <div class=\"col-sm-10\">
                  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 31, $this->source); })()), "etat", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 37, $this->source); })()), "interview_date", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Interview link</label>
                <div class=\"col-sm-10\">
                  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 43, $this->source); })()), "interview_link", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 100px"]]);
        echo "
                </div>
              </div>
              <div class=\"col-sm-10\">
                <button type=\"submit\" class=\"btn btn-primary\">Submit Interview</button>
              </div>
              ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterview"]) || array_key_exists("formInterview", $context) ? $context["formInterview"] : (function () { throw new RuntimeError('Variable "formInterview" does not exist.', 55, $this->source); })()), 'form_end');
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
        return array (  142 => 55,  133 => 49,  124 => 43,  115 => 37,  106 => 31,  97 => 25,  88 => 19,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb.html.twig' %}

{% block main %}
  <main id=\"main\" class=\"main\">
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
", "interview/addinterview.html.twig", "C:\\Users\\mouad\\Desktop\\Flixwork\\templates\\interview\\addinterview.html.twig");
    }
}
