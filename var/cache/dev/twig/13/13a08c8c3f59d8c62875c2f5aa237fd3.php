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

/* security/login.html.twig */
class __TwigTemplate_841fa8ed6e06c71e4cdd2305a905a074 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
            'sidebar' => [$this, 'block_sidebar'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
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

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"container\">

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              <div class=\"d-flex justify-content-center py-4\">
                <a href=\"index.html\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"assets/img/logo.png\" alt=\"\">
                  <span class=\"d-none d-lg-block\">Welcome To FlixWork</span>
                </a>
              </div><!-- End Logo -->

              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
                    <p class=\"text-center small\">Enter your email &amp; password to login</p>
                  </div>

                       <form class=\"row g-3 needs-validation\" novalidate=\"\" method=\"post\">


                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Email</label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"text\" name=\"email\" class=\"form-control\" id=\"yourEmail\" required=\"\">
                        <div class=\"invalid-feedback\">Please enter your email.</div>
                      </div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Password</label>
                      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"yourPassword\" required=\"\">
                      <div class=\"invalid-feedback\">Please enter your password!</div>
                    </div>
                    
                     <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                    >


                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" value=\"true\" id=\"rememberMe\">
                        <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <button class=\"btn btn-primary w-100\" type=\"submit\">Login</button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Don't have account? <a href=\"";
        // line 69
        echo "adduser";
        echo "\">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  206 => 69,  189 => 55,  145 => 13,  135 => 12,  116 => 10,  98 => 6,  80 => 4,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block header %}
{% endblock %}
{% block footer %}
{% endblock %}
{% block sidebar %}
{% endblock %}


{% block title %}Log in!{% endblock %}

{% block body %}
<div class=\"container\">

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              <div class=\"d-flex justify-content-center py-4\">
                <a href=\"index.html\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"assets/img/logo.png\" alt=\"\">
                  <span class=\"d-none d-lg-block\">Welcome To FlixWork</span>
                </a>
              </div><!-- End Logo -->

              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
                    <p class=\"text-center small\">Enter your email &amp; password to login</p>
                  </div>

                       <form class=\"row g-3 needs-validation\" novalidate=\"\" method=\"post\">


                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Email</label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"text\" name=\"email\" class=\"form-control\" id=\"yourEmail\" required=\"\">
                        <div class=\"invalid-feedback\">Please enter your email.</div>
                      </div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Password</label>
                      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"yourPassword\" required=\"\">
                      <div class=\"invalid-feedback\">Please enter your password!</div>
                    </div>
                    
                     <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"{{ csrf_token('authenticate') }}\"
                                    >


                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" value=\"true\" id=\"rememberMe\">
                        <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <button class=\"btn btn-primary w-100\" type=\"submit\">Login</button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Don't have account? <a href=\"{{'adduser'}}\">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Ghazy\\Desktop\\Flixwork (2) (2)\\Flixwork\\templates\\security\\login.html.twig");
    }
}
