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

/* user/add.html.twig */
class __TwigTemplate_145adc026f6e1ae7122fa94d33aa1ebe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/add.html.twig", 1);
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
                            <span class=\"d-none d-lg-block\">Creation d'un compte </span>
                        </a>
                    </div><!-- End Logo -->

                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <div class=\"pt-4 pb-2\">
                                <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                                <p class=\"text-center small\">Enter your personal details to create account</p>
                                <p class=\"text-center small\">Entrer les données personelles pour la creation d'un compte FlixWork</p>

</div>
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                                        <div class=\"row g-3 needs-validation\" novalidate=\"\">

                                <div class=\"col-12\">
                                    <label for=\"yourName\" class=\"form-label\">Your Name</label>
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "full_name", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                </div>
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "full_name", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                                <div class=\"col-12\">
                                    <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                   
                                </div>
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                                                                <div class=\"col-12\">
                                    <label for=\"yourEmail\" class=\"form-label\">UserType</label>
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "user_type", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "user_type", [], "any", false, false, false, 57), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Password</label>
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "password", [], "any", false, false, false, 61), "first", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>
                                                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "password", [], "any", false, false, false, 64), "first", [], "any", false, false, false, 64), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Confirm Password</label>
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "password", [], "any", false, false, false, 68), "second", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                   
                                </div>
                                                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), "second", [], "any", false, false, false, 71), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                                <div class=\"col-12\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required=\"\">
                                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                                     
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                                </div>
                                <div class=\"col-12\">
                                    <p class=\"small mb-0\">Already have an account? <a href=\"login\">Log in</a></p>
                                </div>
                            </div>
                            <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "Ajouter", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                    </div>
                            ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
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
        return "user/add.html.twig";
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
        return array (  241 => 91,  236 => 89,  215 => 71,  209 => 68,  202 => 64,  196 => 61,  189 => 57,  183 => 54,  176 => 50,  170 => 47,  163 => 43,  157 => 40,  149 => 35,  125 => 13,  115 => 12,  97 => 9,  79 => 6,  61 => 3,  38 => 1,);
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
                            <span class=\"d-none d-lg-block\">Creation d'un compte </span>
                        </a>
                    </div><!-- End Logo -->

                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <div class=\"pt-4 pb-2\">
                                <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                                <p class=\"text-center small\">Enter your personal details to create account</p>
                                <p class=\"text-center small\">Entrer les données personelles pour la creation d'un compte FlixWork</p>

</div>
                    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                                                        <div class=\"row g-3 needs-validation\" novalidate=\"\">

                                <div class=\"col-12\">
                                    <label for=\"yourName\" class=\"form-label\">Your Name</label>
                                    {{ form_widget(form.full_name, {attr: {'class': 'form-control'}}) }}

                                </div>
                                {{ form_errors(form.full_name, {attr: {'class': 'text-danger'}}) }}

                                <div class=\"col-12\">
                                    <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                                    {{ form_widget(form.email, {attr: {'class': 'form-control'}}) }}
                                   
                                </div>
                                {{ form_errors(form.email, {attr: {'class': 'text-danger'}}) }}

                                                                <div class=\"col-12\">
                                    <label for=\"yourEmail\" class=\"form-label\">UserType</label>
                                    {{ form_widget(form.user_type, {attr: {'class': 'form-control'}}) }}
                                    
                                </div>
                                    {{ form_errors(form.user_type, {attr: {'class': 'text-danger'}}) }}

                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Password</label>
                                    {{ form_widget(form.password.first,{'attr':{'class':'form-control'}}) }}
                                    
                                </div>
                                                                    {{ form_errors(form.password.first, {attr: {'class': 'text-danger'}}) }}

                                <div class=\"col-12\">
                                    <label for=\"yourPassword\" class=\"form-label\">Confirm Password</label>
                                    {{ form_widget(form.password.second,{'attr':{'class':'form-control'}}) }}
                                   
                                </div>
                                                                    {{ form_errors(form.password.second, {attr: {'class': 'text-danger'}}) }}

                                <div class=\"col-12\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required=\"\">
                                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                                     
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                                </div>
                                <div class=\"col-12\">
                                    <p class=\"small mb-0\">Already have an account? <a href=\"login\">Log in</a></p>
                                </div>
                            </div>
                            <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                        {{ form_widget(form.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}
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
{% endblock %}", "user/add.html.twig", "C:\\Users\\Ghazy\\Desktop\\Flixwork (2) (2)\\Flixwork\\templates\\user\\add.html.twig");
    }
}
