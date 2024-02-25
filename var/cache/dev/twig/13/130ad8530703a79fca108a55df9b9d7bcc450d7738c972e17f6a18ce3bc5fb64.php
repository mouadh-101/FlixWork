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

/* claim/new.html.twig */
class __TwigTemplate_b268d843566daa0993a67af3feb2295c7d8ec6389d4e55482a82a1ca2650838c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/new.html.twig"));

        $this->parent = $this->loadTemplate("baseb.html.twig", "claim/new.html.twig", 1);
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
    ";
        // line 5
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "        <div class=\"alert alert-danger\">
            <ul>
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["fieldName"] => $context["errorMessage"]) {
                // line 9
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
            // line 11
            echo "            </ul>
        </div>
    ";
        }
        // line 14
        echo "    <div class=\"pagetitle\">
        <h1>Add Claim</h1>
    </div><!-- End Page Title -->

    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Let's Add Claim</h5>
                    <!-- General Form Elements -->
                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Subject</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "subject", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "etat", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <div class=\"col-sm-10 offset-sm-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">Submit Claim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
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
        return "claim/new.html.twig";
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
        return array (  163 => 63,  147 => 50,  137 => 43,  127 => 36,  117 => 29,  103 => 18,  97 => 14,  92 => 11,  81 => 9,  77 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
    {% endif %}
    <div class=\"pagetitle\">
        <h1>Add Claim</h1>
    </div><!-- End Page Title -->

    {{ form_start(form) }}

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Let's Add Claim</h5>
                    <!-- General Form Elements -->
                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Subject</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.subject, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Etat</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.etat, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <div class=\"col-sm-10 offset-sm-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">Submit Claim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{ form_end(form) }}
</main>
{% endblock %}
", "claim/new.html.twig", "C:\\Users\\admin\\Desktop\\FlixWork-1\\templates\\claim\\new.html.twig");
    }
}
