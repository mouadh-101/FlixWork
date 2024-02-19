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

/* registration/index.html.twig */
class __TwigTemplate_6ca1749507f35a640a91f83e667b23bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 6
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

    // line 9
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
                            <span class=\"d-none d-lg-block\">NiceAdmin</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <div class=\"pt-4 pb-2\">
                                <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                                <p class=\"text-center small\">Enter your personal details to create account</p>
                            </div>
                            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row g-3 needs-validation\" novalidate=\"\">
                                <div class=\"col-12\">
                                    <label for=\"yourName\" class=\"form-label\">Your Name</label>
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                </div>
                                <div class=\"col-12\">
                                    <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    <div class=\"invalid-feedback\">Please enter a valid Email address!</div>
                                </div>
                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Password</label>
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    <div class=\"invalid-feedback\">Please enter your password!</div>
                                </div>
                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Confirm Password</label>
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    <div class=\"invalid-feedback\">Please confirm your password!</div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required=\"\">
                                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                                        <div class=\"invalid-feedback\">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                                </div>
                                <div class=\"col-12\">
                                    <p class=\"small mb-0\">Already have an account? <a href=\"pages-login.html\">Log in</a></p>
                                </div>
                            </div>
                            ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
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
        return "registration/index.html.twig";
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
        return array (  210 => 72,  190 => 55,  186 => 54,  178 => 49,  174 => 48,  166 => 43,  162 => 42,  154 => 37,  147 => 33,  125 => 13,  115 => 12,  97 => 9,  79 => 6,  61 => 3,  38 => 1,);
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

{% block body %}
<div class=\"container\">

    <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

                    <div class=\"d-flex justify-content-center py-4\">
                        <a href=\"index.html\" class=\"logo d-flex align-items-center w-auto\">
                            <img src=\"assets/img/logo.png\" alt=\"\">
                            <span class=\"d-none d-lg-block\">NiceAdmin</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <div class=\"pt-4 pb-2\">
                                <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                                <p class=\"text-center small\">Enter your personal details to create account</p>
                            </div>
                            {{ form_start(form) }}
                            <div class=\"row g-3 needs-validation\" novalidate=\"\">
                                <div class=\"col-12\">
                                    <label for=\"yourName\" class=\"form-label\">Your Name</label>
                                    {{ form_widget(form.name, {attr: {'class': 'form-control'}}) }}
                                    <div class=\"invalid-feedback\">Please, enter your name!</div>
                                </div>
                                <div class=\"col-12\">
                                    <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                                    {{ form_widget(form.email, {attr: {'class': 'form-control'}}) }}
                                    {{ form_errors(form.email, {attr: {'class': 'text-danger'}}) }}
                                    <div class=\"invalid-feedback\">Please enter a valid Email address!</div>
                                </div>
                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Password</label>
                                    {{ form_widget(form.password.first,{'attr':{'class':'form-control'}}) }}
                                    {{ form_errors(form.password.first, {attr: {'class': 'text-danger'}}) }}
                                    <div class=\"invalid-feedback\">Please enter your password!</div>
                                </div>
                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Confirm Password</label>
                                    {{ form_widget(form.password.second,{'attr':{'class':'form-control'}}) }}
                                    {{ form_errors(form.password.second, {attr: {'class': 'text-danger'}}) }}
                                    <div class=\"invalid-feedback\">Please confirm your password!</div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required=\"\">
                                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                                        <div class=\"invalid-feedback\">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                                </div>
                                <div class=\"col-12\">
                                    <p class=\"small mb-0\">Already have an account? <a href=\"pages-login.html\">Log in</a></p>
                                </div>
                            </div>
                            {{ form_end(form) }}
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
", "registration/index.html.twig", "C:\\Users\\Ghazy\\Downloads\\Flixwork (2) (2)\\Flixwork\\templates\\registration\\index.html.twig");
    }
}
