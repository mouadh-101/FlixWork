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

/* base.html.twig */
class __TwigTemplate_12a4c142edecf2b6b36e3dae028d2b141a4b93080368e85faf77029af1946652 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'vendor' => [$this, 'block_vendor'],
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'main' => [$this, 'block_main'],
            'notes' => [$this, 'block_notes'],
            'about' => [$this, 'block_about'],
            'stat' => [$this, 'block_stat'],
            'jobs' => [$this, 'block_jobs'],
            'categories' => [$this, 'block_categories'],
            'freelancer' => [$this, 'block_freelancer'],
            'contact' => [$this, 'block_contact'],
            'footer' => [$this, 'block_footer'],
            'vendorjs' => [$this, 'block_vendorjs'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- vendorf CSS Files -->
  ";
        // line 19
        $this->displayBlock('vendor', $context, $blocks);
        // line 28
        echo "
  <!-- Template Main CSS File -->
  ";
        // line 30
        $this->displayBlock('css', $context, $blocks);
        // line 33
        echo "
  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 88
        echo "<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  ";
        // line 91
        $this->displayBlock('hero', $context, $blocks);
        // line 110
        echo "<!-- End Hero -->
 ";
        // line 111
        $this->displayBlock('main', $context, $blocks);
        // line 788
        echo "<!-- End #main -->

  <!-- ======= Footer ======= -->
  ";
        // line 791
        $this->displayBlock('footer', $context, $blocks);
        // line 812
        echo "<!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- vendorf JS Files -->
  ";
        // line 817
        $this->displayBlock('vendorjs', $context, $blocks);
        // line 826
        echo "
  <!-- Template Main JS File -->
  ";
        // line 828
        $this->displayBlock('js', $context, $blocks);
        // line 831
        echo "
</body>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " FlixWork ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_vendor($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor"));

        // line 20
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 31
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylef.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "  <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <a href=\"index.html\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Latest offre</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Freelancers</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Formations & workshops</a></li>
          <!-- <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Sign in / Sign up</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 92
        echo "  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center\">
          <h1 data-aos=\"fade-up\">Forget the Old Norms,Embrace the Future of Work</h1>
          <h2 data-aos=\"fade-up\" data-aos-delay=\"400\">Discover Top Freelancers and Job Opportunities Right Now !</h2>
          <div data-aos=\"fade-up\" data-aos-delay=\"800\">
            <a href=\"#about\" class=\"btn-get-started scrollto\">Get Started</a>
          </div>
        </div>
        <div class=\"col-lg-6 order-1 order-lg-2 hero-img\" data-aos=\"fade-left\" data-aos-delay=\"200\">
          <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-img.png"), "html", null, true);
        echo "\" class=\"img-fluid animated\" alt=\"\">
        </div>
      </div>
    </div>

  </section>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 112
        echo "  <main id=\"main\">

    <!-- ======= notes Section ======= -->
    ";
        // line 115
        $this->displayBlock('notes', $context, $blocks);
        // line 132
        echo "<!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    ";
        // line 135
        $this->displayBlock('about', $context, $blocks);
        // line 162
        echo "<!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    ";
        // line 165
        $this->displayBlock('stat', $context, $blocks);
        // line 215
        echo "<!-- End Counts Section -->

    <!-- ======= jobs Section ======= -->
    ";
        // line 218
        $this->displayBlock('jobs', $context, $blocks);
        // line 312
        echo "<!-- End More Services Section -->

    <!-- ======= Categories Section ======= -->
    ";
        // line 315
        $this->displayBlock('categories', $context, $blocks);
        // line 401
        echo "<!-- End categories Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    ";
        // line 558
        $this->displayBlock('freelancer', $context, $blocks);
        // line 645
        echo "<!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"box\" data-aos=\"zoom-in-right\" data-aos-delay=\"200\">
              <h3>Free</h3>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-md-0\">
            <div class=\"box recommended\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <h3>Business</h3>
              <h4><sup>\$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-lg-0\">
            <div class=\"box\" data-aos=\"zoom-in-left\" data-aos-delay=\"200\">
              <h3>Developer</h3>
              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    ";
        // line 715
        $this->displayBlock('contact', $context, $blocks);
        // line 785
        echo "<!-- End Contact Section -->

  </main>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_notes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notes"));

        // line 116
        echo "    <section id=\"clients\" class=\"clients clients\">
      <div class=\"container\">
        
        <div class=\"row\">

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clients/client-1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\">
          </div>
          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clients/client-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\">
          </div>

        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        // line 136
        echo "    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>About Us</h2>
        </div>

        <div class=\"row content\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"150\">
            <p>
              FlexiWork is a revolutionary platform designed to unleash the potential of flexible work. Our mission is to connect top freelancers with the most exciting opportunities, empowering businesses to find the talent they need and freelancers to realize their full potential. With FlexiWork, the future of work is in your hands.
            </p>

            </ul>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <ul>
              <li><i class=\"ri-check-double-line\"></i> Empowerment: We believe in empowering freelancers and businesses alike to take control of their work opportunities and career paths.</li>
              <li><i class=\"ri-check-double-line\"></i> Collaboration: We foster a culture of collaboration, where freelancers and businesses work together seamlessly to achieve success.</li>
              <li><i class=\"ri-check-double-line\"></i> Flexibility: We champion flexibility, providing opportunities for freelancers to work on projects that align with their skills and preferences, and for businesses to find the right talent for their needs.</li>
             <a href=\"#\" class=\"btn-learn-more\">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_stat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stat"));

        // line 166
        echo "    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start\" data-aos=\"fade-right\" data-aos-delay=\"150\">
            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/counts-img.svg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
          </div>

          <div class=\"col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"content d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-smile\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"65\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-journal-richtext\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"85\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-clock\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"18\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-award\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
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

    // line 218
    public function block_jobs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jobs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jobs"));

        // line 219
        echo "    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"icon\"><i class=\"bx bxl-dribbble\"></i></div>
              <h4 class=\"title\"><a href=\"\">Lorem Ipsum</a></h4>
              <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"icon\"><i class=\"bx bx-file\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"icon\"><i class=\"bx bx-tachometer\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"icon\"><i class=\"bx bx-world\"></i></div>
              <h4 class=\"title\"><a href=\"\">Nemo Enim</a></h4>
              <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End jobs Section -->

    <!-- ======= More jobs Section ======= -->
    <section id=\"more-services\" class=\"more-services\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-md-6 d-flex align-items-stretch\">
            <div class=\"card\" style='background-image: url(\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/more-services-1.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Lobira Duno</a></h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"card\" style='background-image: url(\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/more-services-2.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Limere Radses</a></h5>
                <p class=\"card-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/more-services-3.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nive Lodo</a></h5>
                <p class=\"card-text\">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/more-services-4.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Pale Treda</a></h5>
                <p class=\"card-text\">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 315
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 316
        echo "    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Features</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-lg-3 col-md-4\">
            <div class=\"icon-box\">
              <i class=\"ri-store-line\" style=\"color: #ffbb2c;\"></i>
              <h3><a href=\"\">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-bar-chart-box-line\" style=\"color: #5578ff;\"></i>
              <h3><a href=\"\">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-calendar-todo-line\" style=\"color: #e80368;\"></i>
              <h3><a href=\"\">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-lg-0\">
            <div class=\"icon-box\">
              <i class=\"ri-paint-brush-line\" style=\"color: #e361ff;\"></i>
              <h3><a href=\"\">Magni Dolores</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-database-2-line\" style=\"color: #47aeff;\"></i>
              <h3><a href=\"\">Nemo Enim</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-gradienter-line\" style=\"color: #ffa76e;\"></i>
              <h3><a href=\"\">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-file-list-3-line\" style=\"color: #11dbcf;\"></i>
              <h3><a href=\"\">Midela Teren</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-price-tag-2-line\" style=\"color: #4233ff;\"></i>
              <h3><a href=\"\">Pira Neve</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-anchor-line\" style=\"color: #b2904f;\"></i>
              <h3><a href=\"\">Dirada Pack</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-disc-line\" style=\"color: #b20969;\"></i>
              <h3><a href=\"\">Moton Ideal</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-base-station-line\" style=\"color: #ff5828;\"></i>
              <h3><a href=\"\">Verdo Park</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-fingerprint-line\" style=\"color: #29cc61;\"></i>
              <h3><a href=\"\">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 558
    public function block_freelancer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "freelancer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "freelancer"));

        // line 559
        echo "    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"member-img\">
                <img src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/team-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"member-img\">
                <img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/team-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"member-img\">
                <img src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/team-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"member-img\">
                <img src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/team-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 715
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        // line 716
        echo "    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Contact Us</h2>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"contact-about\">
              <h3>FlixWork</h3>
              <p>FlexiWork is a revolutionary platform designed to unleash the potential of flexible work.</p>
              <div class=\"social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info\">
              <div>
                <i class=\"ri-map-pin-line\"></i>
                <p>1, Pôle Technologique, 2 Rue André Ampère<br>Ariana 2083</p>
              </div>

              <div>
                <i class=\"ri-mail-send-line\"></i>
                <p>info@flixwork.tn</p>
              </div>

              <div>
                <i class=\"ri-phone-line\"></i>
                <p>+216 71 147 258</p>
              </div>

            </div>
          </div>

          <div class=\"col-lg-5 col-md-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 791
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 792
        echo "  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"row d-flex align-items-center\">
        <div class=\"col-lg-6 text-lg-left text-center\">
          <div class=\"copyright\">
            &copy; Copyright <strong>FlixWork</strong>. All Rights Reserved
          </div>

        </div>
        <div class=\"col-lg-6\">
          <nav class=\"footer-links text-lg-right text-center pt-2 pt-lg-0\">
            <a href=\"#intro\" class=\"scrollto\">Home</a>
            <a href=\"#about\" class=\"scrollto\">About</a>
            <a href=\"#\">Privacy Policy</a>
            <a href=\"#\">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 817
    public function block_vendorjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendorjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendorjs"));

        // line 818
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 819
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendorf/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 828
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 829
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mainf.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  1393 => 829,  1383 => 828,  1371 => 824,  1367 => 823,  1363 => 822,  1359 => 821,  1355 => 820,  1351 => 819,  1346 => 818,  1336 => 817,  1306 => 792,  1296 => 791,  1217 => 716,  1207 => 715,  1177 => 626,  1156 => 608,  1135 => 590,  1114 => 572,  1099 => 559,  1089 => 558,  994 => 316,  984 => 315,  961 => 300,  949 => 291,  936 => 281,  924 => 272,  869 => 219,  859 => 218,  804 => 171,  797 => 166,  787 => 165,  751 => 136,  741 => 135,  723 => 125,  717 => 122,  709 => 116,  699 => 115,  686 => 785,  684 => 715,  612 => 645,  610 => 558,  594 => 545,  586 => 540,  574 => 531,  566 => 526,  554 => 517,  546 => 512,  534 => 503,  526 => 498,  514 => 489,  506 => 484,  494 => 475,  486 => 470,  474 => 461,  466 => 456,  454 => 447,  446 => 442,  434 => 433,  426 => 428,  397 => 401,  395 => 315,  390 => 312,  388 => 218,  383 => 215,  381 => 165,  376 => 162,  374 => 135,  369 => 132,  367 => 115,  362 => 112,  352 => 111,  335 => 104,  321 => 92,  311 => 91,  263 => 51,  257 => 47,  247 => 46,  234 => 31,  224 => 30,  212 => 26,  208 => 25,  204 => 24,  200 => 23,  196 => 22,  192 => 21,  187 => 20,  177 => 19,  158 => 8,  144 => 831,  142 => 828,  138 => 826,  136 => 817,  129 => 812,  127 => 791,  122 => 788,  120 => 111,  117 => 110,  115 => 91,  110 => 88,  108 => 46,  93 => 33,  91 => 30,  87 => 28,  85 => 19,  76 => 13,  68 => 8,  59 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block title %} FlixWork {% endblock %}</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{asset('img/favicon.png')}}\" rel=\"icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- vendorf CSS Files -->
  {% block vendor %}
  <link href=\"{{asset('vendorf/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendorf/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendorf/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendorf/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendorf/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendorf/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendorf/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
  {% endblock %}

  <!-- Template Main CSS File -->
  {% block css %}
  <link href=\"{{asset('css/stylef.css')}}\" rel=\"stylesheet\">
  {% endblock %}

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  {% block header %}
  <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <a href=\"index.html\"><img src=\"{{asset('img/logo.png')}}\" alt=\"\" class=\"img-fluid\"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Latest offre</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Freelancers</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Formations & workshops</a></li>
          <!-- <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Sign in / Sign up</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  {% endblock %}<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  {% block hero %}
  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center\">
          <h1 data-aos=\"fade-up\">Forget the Old Norms,Embrace the Future of Work</h1>
          <h2 data-aos=\"fade-up\" data-aos-delay=\"400\">Discover Top Freelancers and Job Opportunities Right Now !</h2>
          <div data-aos=\"fade-up\" data-aos-delay=\"800\">
            <a href=\"#about\" class=\"btn-get-started scrollto\">Get Started</a>
          </div>
        </div>
        <div class=\"col-lg-6 order-1 order-lg-2 hero-img\" data-aos=\"fade-left\" data-aos-delay=\"200\">
          <img src=\"{{asset('img/hero-img.png')}}\" class=\"img-fluid animated\" alt=\"\">
        </div>
      </div>
    </div>

  </section>
  {% endblock %}<!-- End Hero -->
 {% block main %}
  <main id=\"main\">

    <!-- ======= notes Section ======= -->
    {% block notes %}
    <section id=\"clients\" class=\"clients clients\">
      <div class=\"container\">
        
        <div class=\"row\">

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('img/clients/client-1.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\">
          </div>
          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('img/clients/client-2.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\">
          </div>

        </div>

      </div>
    </section>
    {% endblock %}<!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    {% block about %}
    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>About Us</h2>
        </div>

        <div class=\"row content\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"150\">
            <p>
              FlexiWork is a revolutionary platform designed to unleash the potential of flexible work. Our mission is to connect top freelancers with the most exciting opportunities, empowering businesses to find the talent they need and freelancers to realize their full potential. With FlexiWork, the future of work is in your hands.
            </p>

            </ul>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <ul>
              <li><i class=\"ri-check-double-line\"></i> Empowerment: We believe in empowering freelancers and businesses alike to take control of their work opportunities and career paths.</li>
              <li><i class=\"ri-check-double-line\"></i> Collaboration: We foster a culture of collaboration, where freelancers and businesses work together seamlessly to achieve success.</li>
              <li><i class=\"ri-check-double-line\"></i> Flexibility: We champion flexibility, providing opportunities for freelancers to work on projects that align with their skills and preferences, and for businesses to find the right talent for their needs.</li>
             <a href=\"#\" class=\"btn-learn-more\">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    {% endblock %}<!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    {% block stat %}
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start\" data-aos=\"fade-right\" data-aos-delay=\"150\">
            <img src=\"{{asset('img/counts-img.svg')}}\" alt=\"\" class=\"img-fluid\">
          </div>

          <div class=\"col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"content d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-smile\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"65\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-journal-richtext\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"85\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-clock\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"18\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-award\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    {% endblock %}<!-- End Counts Section -->

    <!-- ======= jobs Section ======= -->
    {% block jobs  %}
    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"icon\"><i class=\"bx bxl-dribbble\"></i></div>
              <h4 class=\"title\"><a href=\"\">Lorem Ipsum</a></h4>
              <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"icon\"><i class=\"bx bx-file\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"icon\"><i class=\"bx bx-tachometer\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"icon\"><i class=\"bx bx-world\"></i></div>
              <h4 class=\"title\"><a href=\"\">Nemo Enim</a></h4>
              <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End jobs Section -->

    <!-- ======= More jobs Section ======= -->
    <section id=\"more-services\" class=\"more-services\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-md-6 d-flex align-items-stretch\">
            <div class=\"card\" style='background-image: url(\"{{asset('img/more-services-1.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Lobira Duno</a></h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"card\" style='background-image: url(\"{{asset('img/more-services-2.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Limere Radses</a></h5>
                <p class=\"card-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"{{asset('img/more-services-3.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nive Lodo</a></h5>
                <p class=\"card-text\">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"{{asset('img/more-services-4.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Pale Treda</a></h5>
                <p class=\"card-text\">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    {% endblock %}<!-- End More Services Section -->

    <!-- ======= Categories Section ======= -->
    {% block categories %}
    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Features</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-lg-3 col-md-4\">
            <div class=\"icon-box\">
              <i class=\"ri-store-line\" style=\"color: #ffbb2c;\"></i>
              <h3><a href=\"\">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-bar-chart-box-line\" style=\"color: #5578ff;\"></i>
              <h3><a href=\"\">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-calendar-todo-line\" style=\"color: #e80368;\"></i>
              <h3><a href=\"\">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-lg-0\">
            <div class=\"icon-box\">
              <i class=\"ri-paint-brush-line\" style=\"color: #e361ff;\"></i>
              <h3><a href=\"\">Magni Dolores</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-database-2-line\" style=\"color: #47aeff;\"></i>
              <h3><a href=\"\">Nemo Enim</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-gradienter-line\" style=\"color: #ffa76e;\"></i>
              <h3><a href=\"\">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-file-list-3-line\" style=\"color: #11dbcf;\"></i>
              <h3><a href=\"\">Midela Teren</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-price-tag-2-line\" style=\"color: #4233ff;\"></i>
              <h3><a href=\"\">Pira Neve</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-anchor-line\" style=\"color: #b2904f;\"></i>
              <h3><a href=\"\">Dirada Pack</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-disc-line\" style=\"color: #b20969;\"></i>
              <h3><a href=\"\">Moton Ideal</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-base-station-line\" style=\"color: #ff5828;\"></i>
              <h3><a href=\"\">Verdo Park</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-fingerprint-line\" style=\"color: #29cc61;\"></i>
              <h3><a href=\"\">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section>
    {% endblock %}<!-- End categories Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-1.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-2.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-3.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-4.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-4.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-5.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-5.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-6.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-6.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-7.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-7.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-8.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-8.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('img/portfolio/portfolio-9.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('img/portfolio/portfolio-9.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    {% block freelancer %}
    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"member-img\">
                <img src=\"{{asset('img/team/team-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"member-img\">
                <img src=\"{{asset('img/team/team-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"member-img\">
                <img src=\"{{asset('img/team/team-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"member-img\">
                <img src=\"{{asset('img/team/team-4.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    {% endblock %}<!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"box\" data-aos=\"zoom-in-right\" data-aos-delay=\"200\">
              <h3>Free</h3>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-md-0\">
            <div class=\"box recommended\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <h3>Business</h3>
              <h4><sup>\$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-lg-0\">
            <div class=\"box\" data-aos=\"zoom-in-left\" data-aos-delay=\"200\">
              <h3>Developer</h3>
              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    {% block contact %}
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Contact Us</h2>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"contact-about\">
              <h3>FlixWork</h3>
              <p>FlexiWork is a revolutionary platform designed to unleash the potential of flexible work.</p>
              <div class=\"social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info\">
              <div>
                <i class=\"ri-map-pin-line\"></i>
                <p>1, Pôle Technologique, 2 Rue André Ampère<br>Ariana 2083</p>
              </div>

              <div>
                <i class=\"ri-mail-send-line\"></i>
                <p>info@flixwork.tn</p>
              </div>

              <div>
                <i class=\"ri-phone-line\"></i>
                <p>+216 71 147 258</p>
              </div>

            </div>
          </div>

          <div class=\"col-lg-5 col-md-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    {% endblock %}<!-- End Contact Section -->

  </main>
  {% endblock %}<!-- End #main -->

  <!-- ======= Footer ======= -->
  {% block footer %}
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"row d-flex align-items-center\">
        <div class=\"col-lg-6 text-lg-left text-center\">
          <div class=\"copyright\">
            &copy; Copyright <strong>FlixWork</strong>. All Rights Reserved
          </div>

        </div>
        <div class=\"col-lg-6\">
          <nav class=\"footer-links text-lg-right text-center pt-2 pt-lg-0\">
            <a href=\"#intro\" class=\"scrollto\">Home</a>
            <a href=\"#about\" class=\"scrollto\">About</a>
            <a href=\"#\">Privacy Policy</a>
            <a href=\"#\">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  {% endblock %}<!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- vendorf JS Files -->
  {% block vendorjs %}
  <script src=\"{{asset('vendorf/purecounter/purecounter_vanilla.js')}}\"></script>
  <script src=\"{{asset('vendorf/aos/aos.js')}}\"></script>
  <script src=\"{{asset('vendorf/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('vendorf/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{asset('vendorf/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{asset('vendorf/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{asset('vendorf/php-email-form/validate.js')}}\"></script>
  {% endblock %}

  <!-- Template Main JS File -->
  {% block js %}
  <script src=\"{{asset('js/mainf.js')}}\"></script>
  {% endblock %}

</body>


</html>", "base.html.twig", "C:\\Users\\mouad\\Documents\\GitHub\\FlixWork\\templates\\base.html.twig");
    }
}
