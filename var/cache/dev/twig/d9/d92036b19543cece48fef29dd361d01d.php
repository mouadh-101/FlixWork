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

/* user/index.html.twig */
class __TwigTemplate_4e8ff2852e8272efde8dc7b53a6ec457 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
<div class=\"col-lg-6\">

<div class=\"card\">
            <div class=\"card-body\">
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adduser");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i>
            
              <h5 class=\"card-title\">Liste Des Utilisateurs</h5>

              <!-- Table with stripped rows -->
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>FullName</th>
    <th>Email</th>
    
    <th>UserType</th>
    <th>Suppression</th>
    <th>Modification</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "    <tr>
    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
    
    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userType", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
    <td>
        ";
            // line 38
            echo "       
            <a class=\"btn btn-danger\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Supprimer</a>
       
        
    </td>
     
    <td>
        ";
            // line 46
            echo "        <a class=\"btn btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifuser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Modifier</a>
    </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>







<div class=\"example-wrapper\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/index.html.twig";
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
        return array (  158 => 50,  147 => 46,  138 => 39,  135 => 38,  130 => 35,  125 => 33,  121 => 32,  118 => 31,  114 => 30,  94 => 13,  87 => 8,  77 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block sidebar %}
{% endblock %}

{% block body %}
<div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
<div class=\"col-lg-6\">

<div class=\"card\">
            <div class=\"card-body\">
            <a href=\"{{path('adduser')}}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i>
            
              <h5 class=\"card-title\">Liste Des Utilisateurs</h5>

              <!-- Table with stripped rows -->
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>FullName</th>
    <th>Email</th>
    
    <th>UserType</th>
    <th>Suppression</th>
    <th>Modification</th>
                  </tr>
                </thead>
                <tbody>
                  {% for user in users %}
    <tr>
    <td>{{ user.fullName }}</td>
    <td>{{ user.email }}</td>
    
    <td>{{ user.userType }}</td>
    <td>
        {# Assurez-vous que user.id est défini avant de générer l'URL #}
       
            <a class=\"btn btn-danger\" href=\"{{ path('supp_user', {'id': user.id}) }}\">Supprimer</a>
       
        
    </td>
     
    <td>
        {# Lien vers la route de modification, avec l'identifiant de l'utilisateur #}
        <a class=\"btn btn-success\" href=\"{{ path('modifuser', {'id': user.id}) }}\">Modifier</a>
    </td>
    </tr>
    {% endfor %}
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>







<div class=\"example-wrapper\">

{% endblock %}
", "user/index.html.twig", "C:\\Users\\Ghazy\\Downloads\\Flixwork (2) (2)\\Flixwork\\templates\\user\\index.html.twig");
    }
}
