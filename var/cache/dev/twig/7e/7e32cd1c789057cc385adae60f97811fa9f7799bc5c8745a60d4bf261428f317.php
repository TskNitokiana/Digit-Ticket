<?php

/* security/index.html.twig */
class __TwigTemplate_3358384b7dd6bf5bb6d355142e8451333e42a3e3474e18f31453080859978732 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 8
        echo "


<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

    

</head>

<body>

  <html lang=\"en-US\">
  <head>

    <meta charset=\"utf-8\">

    <title>Login</title>

    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,700\">

    <!--[if lt IE 9]>
  <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
 <![endif]-->

  </head>

  <body>
  <!--=================================
\tHeader
\t=================================-->
    <header>
        <div class=\"social-links\">
            <div class=\"container\">
                <ul class=\"social\">
                    <li><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-pinterest\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-linkedin\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-flickr\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-youtube\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
                </ul>
            </div>
        </div>
        <nav class=\"navbar yamm navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle fa fa-navicon\"></button>
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img src=\"/img/basic/logo.png\" alt=\"logo\" />
                    </a>
                </div>
                <div class=\"nav_wrapper\">
                    <div class=\"nav_scroll\">
                        <div class=\"nav-search\">
                            <form>
                                <input type=\"text\" placeholder=\"Search\" />
                                <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>

                        <ul class=\"nav navbar-nav\">
                            <li class=\"desactive dropdown\"><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil<i class=\"fa fa-caret-right\"></i></a>
                              
                            </li>
                           
                           
                            <li class=\"yamm-fw dropdown\"><a href=\"#\">Organisateurs<i class=\"fa fa-caret-right\"></i></a>
                            </li>
                           
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Login</a></li>
                            <li class=\"active dropdown\"><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\">Inscription</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>
  
    <div class=\"container\" style=\"width:400px\">
     <h1> Inscription </h1>
      <div id=\"login\">";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->source); })()), 'form_start');
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), 'widget');
        echo "
       <p><input type=\"submit\" value=\"inscrire\"></p>";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        echo "


        <p>Pas encors inscrit? <a href=\"#\">Sign up maintenant</a><span class=\"fontawesome-arrow-right\"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 107,  176 => 103,  174 => 100,  159 => 85,  155 => 84,  143 => 75,  74 => 8,  72 => 7,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}

 {% form_theme form 'bootstrap_4_layout.html.twig' %}



<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

    

</head>

<body>

  <html lang=\"en-US\">
  <head>

    <meta charset=\"utf-8\">

    <title>Login</title>

    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,700\">

    <!--[if lt IE 9]>
  <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
 <![endif]-->

  </head>

  <body>
  <!--=================================
\tHeader
\t=================================-->
    <header>
        <div class=\"social-links\">
            <div class=\"container\">
                <ul class=\"social\">
                    <li><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-pinterest\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-linkedin\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-flickr\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-youtube\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
                </ul>
            </div>
        </div>
        <nav class=\"navbar yamm navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle fa fa-navicon\"></button>
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img src=\"/img/basic/logo.png\" alt=\"logo\" />
                    </a>
                </div>
                <div class=\"nav_wrapper\">
                    <div class=\"nav_scroll\">
                        <div class=\"nav-search\">
                            <form>
                                <input type=\"text\" placeholder=\"Search\" />
                                <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>

                        <ul class=\"nav navbar-nav\">
                            <li class=\"desactive dropdown\"><a href=\"{{path('homepage')}}\">Accueil<i class=\"fa fa-caret-right\"></i></a>
                              
                            </li>
                           
                           
                            <li class=\"yamm-fw dropdown\"><a href=\"#\">Organisateurs<i class=\"fa fa-caret-right\"></i></a>
                            </li>
                           
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"{{path('security_login')}}\">Login</a></li>
                            <li class=\"active dropdown\"><a href=\"{{path('security_registration')}}\">Inscription</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>
  
    <div class=\"container\" style=\"width:400px\">
     <h1> Inscription </h1>
      <div id=\"login\">


        {{form_start(form)}}
     

        {{form_widget(form)}}
       <p><input type=\"submit\" value=\"inscrire\"></p>
       
       
       {{form_end(form)}}


        <p>Pas encors inscrit? <a href=\"#\">Sign up maintenant</a><span class=\"fontawesome-arrow-right\"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>


{% endblock %}
", "security/index.html.twig", "/home/tsiky/Bureau/FINAL/templates/security/index.html.twig");
    }
}
