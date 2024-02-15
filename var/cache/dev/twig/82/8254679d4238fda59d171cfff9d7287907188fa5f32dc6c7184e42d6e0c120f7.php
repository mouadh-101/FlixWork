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

/* postulation/postulationlistf.html.twig */
class __TwigTemplate_91dd6396746783fb4b38952d2ac30ebbb55db4fcc116ccb0ce77e1a70411fcb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'hero' => [$this, 'block_hero'],
            'stat' => [$this, 'block_stat'],
            'categories' => [$this, 'block_categories'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postulationlistf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postulation/postulationlistf.html.twig"));

        // line 2
        $context["approvedPostulations"] = twig_array_filter($this->env, (isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 2, $this->source); })()), function ($__post__) use ($context, $macros) { $context["post"] = $__post__; return (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 2, $this->source); })()), "etat", [], "any", false, false, false, 2) == "approved"); });
        // line 3
        $context["rejectedPostulations"] = twig_array_filter($this->env, (isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 3, $this->source); })()), function ($__post__) use ($context, $macros) { $context["post"] = $__post__; return (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "etat", [], "any", false, false, false, 3) == "rejected"); });
        // line 4
        $context["underPostulations"] = twig_array_filter($this->env, (isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 4, $this->source); })()), function ($__post__) use ($context, $macros) { $context["post"] = $__post__; return ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "etat", [], "any", false, false, false, 4) == "under_consideration") || (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "etat", [], "any", false, false, false, 4) == "under consideration")); });
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "postulation/postulationlistf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    ";
        $this->displayBlock('hero', $context, $blocks);
        // line 8
        echo "    <br><br><br><br><br><br><br>
    ";
        // line 9
        $this->displayBlock('stat', $context, $blocks);
        // line 57
        echo "    ";
        $this->displayBlock('categories', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 7
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stat"));

        // line 10
        echo "    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start\" data-aos=\"fade-right\" data-aos-delay=\"150\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/counts.svg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
          </div>

          <div class=\"col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"content d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-journal-richtext\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Postulations : </strong> you have postulated <strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 25, $this->source); })())), "html", null, true);
        echo "</strong> untel now </p>
                  </div>
                </div>
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-smile\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["approvedPostulations"]) || array_key_exists("approvedPostulations", $context) ? $context["approvedPostulations"] : (function () { throw new RuntimeError('Variable "approvedPostulations" does not exist.', 31, $this->source); })())), "html", null, true);
        echo "\" data-purecounter-duration=\"1\" class=\"purecounter\">65</span>
                    <p><strong>Aproved Postulations : ";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["approvedPostulations"]) || array_key_exists("approvedPostulations", $context) ? $context["approvedPostulations"] : (function () { throw new RuntimeError('Variable "approvedPostulations" does not exist.', 32, $this->source); })())), "html", null, true);
        echo " </strong>of your postulations are approved</p>
                  </div>
                </div>
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-clock\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["underPostulations"]) || array_key_exists("underPostulations", $context) ? $context["underPostulations"] : (function () { throw new RuntimeError('Variable "underPostulations" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "\" data-purecounter-duration=\"1\" class=\"purecounter\">18</span>
                    <p><strong>Under consideration Postulations : ";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["underPostulations"]) || array_key_exists("underPostulations", $context) ? $context["underPostulations"] : (function () { throw new RuntimeError('Variable "underPostulations" does not exist.', 39, $this->source); })())), "html", null, true);
        echo " </strong> of your postulations are under consideration</p>
                  </div>
                </div>
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-frown\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["rejectedPostulations"]) || array_key_exists("rejectedPostulations", $context) ? $context["rejectedPostulations"] : (function () { throw new RuntimeError('Variable "rejectedPostulations" does not exist.', 45, $this->source); })())), "html", null, true);
        echo "\" data-purecounter-duration=\"1\" class=\"purecounter\">18</span>
                    <p><strong>Rejected Postulations : ";
        // line 46
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["rejectedPostulations"]) || array_key_exists("rejectedPostulations", $context) ? $context["rejectedPostulations"] : (function () { throw new RuntimeError('Variable "rejectedPostulations" does not exist.', 46, $this->source); })())), "html", null, true);
        echo " </strong> of your postulations are rejected</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 58
        echo "    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Postulations</h2>
          <p>Here is a list of your postulations </p>
        </div>
      <section class=\"section dashboard\">
      
      <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\"data-aos=\"fade-up\">
                <div class=\"card-body\">
                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Postulation Date</th>
                        <th scope=\"col\">Cover letter</th>
                        <th scope=\"col\">Job Title</th>
                        <th scope=\"col\">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postulations"]) || array_key_exists("postulations", $context) ? $context["postulations"] : (function () { throw new RuntimeError('Variable "postulations" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 83
            echo "                    <tr>
                        <th scope=\"row\"><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showpost", ["id_p" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 84), "id_u" => (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 84, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "</a></th>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getPostulationDate", [], "method", false, false, false, 85), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCoverLetter", [], "method", false, false, false, 86), 0, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "job", [], "any", false, false, false, 87), "title", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                        ";
            // line 88
            if (((twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 88) == "under consideration") || (twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 88) == "under_consideration"))) {
                // line 89
                echo "                            <td class=\"green\"><span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 89), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 90
$context["post"], "etat", [], "any", false, false, false, 90) == "rejected")) {
                // line 91
                echo "                            <td class=\"green\"><span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 91), "html", null, true);
                echo "</span></td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 92
$context["post"], "etat", [], "any", false, false, false, 92) == "approved")) {
                // line 93
                echo "                            <td class=\"green\"><span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 93), "html", null, true);
                echo "</span></td>
                        ";
            } else {
                // line 95
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "etat", [], "any", false, false, false, 95), "html", null, true);
                echo "
                        ";
            }
            // line 97
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      </div>
    </section>
      </div>
    </section>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "postulation/postulationlistf.html.twig";
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
        return array (  306 => 99,  299 => 97,  293 => 95,  287 => 93,  285 => 92,  280 => 91,  278 => 90,  273 => 89,  271 => 88,  267 => 87,  263 => 86,  259 => 85,  253 => 84,  250 => 83,  246 => 82,  220 => 58,  210 => 57,  189 => 46,  185 => 45,  176 => 39,  172 => 38,  163 => 32,  159 => 31,  150 => 25,  146 => 24,  134 => 15,  127 => 10,  117 => 9,  107 => 7,  97 => 6,  86 => 57,  84 => 9,  81 => 8,  78 => 6,  68 => 5,  57 => 1,  55 => 4,  53 => 3,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set approvedPostulations = postulations|filter(post => post.etat == 'approved') %}
{% set rejectedPostulations = postulations|filter(post => post.etat == 'rejected') %}
{% set underPostulations = postulations|filter(post => post.etat == 'under_consideration' or post.etat == 'under consideration') %}
  {% block main %}
    {% block hero %}
    {% endblock %}
    <br><br><br><br><br><br><br>
    {% block stat %}
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start\" data-aos=\"fade-right\" data-aos-delay=\"150\">
            <img src=\"{{asset('img/counts.svg')}}\" alt=\"\" class=\"img-fluid\">
          </div>

          <div class=\"col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"content d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-journal-richtext\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"{{ postulations|length }}\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Postulations : </strong> you have postulated <strong>{{ postulations|length }}</strong> untel now </p>
                  </div>
                </div>
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-smile\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"{{approvedPostulations|length}}\" data-purecounter-duration=\"1\" class=\"purecounter\">65</span>
                    <p><strong>Aproved Postulations : {{approvedPostulations|length}} </strong>of your postulations are approved</p>
                  </div>
                </div>
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-clock\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"{{underPostulations|length}}\" data-purecounter-duration=\"1\" class=\"purecounter\">18</span>
                    <p><strong>Under consideration Postulations : {{underPostulations|length}} </strong> of your postulations are under consideration</p>
                  </div>
                </div>
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-frown\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"{{rejectedPostulations|length}}\" data-purecounter-duration=\"1\" class=\"purecounter\">18</span>
                    <p><strong>Rejected Postulations : {{rejectedPostulations|length}} </strong> of your postulations are rejected</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    {% endblock %}
    {% block categories %}
    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Postulations</h2>
          <p>Here is a list of your postulations </p>
        </div>
      <section class=\"section dashboard\">
      
      <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\"data-aos=\"fade-up\">
                <div class=\"card-body\">
                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Postulation Date</th>
                        <th scope=\"col\">Cover letter</th>
                        <th scope=\"col\">Job Title</th>
                        <th scope=\"col\">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for post in postulations %}
                    <tr>
                        <th scope=\"row\"><a href=\"{{ path( 'showpost' ,{'id_p' : post.id,'id_u' : idUser})}}\">{{post.id}}</a></th>
                        <td>{{post.getPostulationDate()|date('Y-m-d') }}</td>
                        <td>{{post.getCoverLetter()|slice(0,50) }}</td>
                        <td>{{post.job.title}}</td>
                        {% if post.etat == 'under consideration' or post.etat == 'under_consideration' %}
                            <td class=\"green\"><span class=\"badge bg-warning\">{{ post.etat }}</span></td>
                        {% elseif post.etat == 'rejected' %}
                            <td class=\"green\"><span class=\"badge bg-danger\">{{ post.etat }}</span></td>
                        {% elseif post.etat == 'approved' %}
                            <td class=\"green\"><span class=\"badge bg-success\">{{ post.etat }}</span></td>
                        {% else %}
                            {{ post.etat }}
                        {% endif %}
                    </tr>
                    {% endfor %}

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      </div>
    </section>
      </div>
    </section>
  {% endblock %}
{% endblock %}
", "postulation/postulationlistf.html.twig", "C:\\xampp\\htdocs\\Flixwork\\templates\\postulation\\postulationlistf.html.twig");
    }
}
