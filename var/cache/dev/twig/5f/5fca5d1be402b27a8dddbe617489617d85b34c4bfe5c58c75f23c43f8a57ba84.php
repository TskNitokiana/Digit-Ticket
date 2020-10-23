<?php

/* event/new.html.twig */
class __TwigTemplate_473f2246c2e4e8de8def11ea9e1d4eb90b3295e31b8ed67db86a947d6857dd05 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/new.html.twig"));

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

        echo "New Event";
        
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

        // line 6
        echo "        <!--=================================
\tHeader
\t=================================-->
    <header>
        <div class=\"social-links\">
            <div class=\"container\" width=\"80%\">
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
                            <li class=\"active dropdown\"><a href=\"#\">Accueil<i class=\"fa fa-caret-right\"></i></a>
                              
                            </li>
                           
                           
                            <li class=\"yamm-fw dropdown\"><a href=\"#\">Organisateurs<i class=\"fa fa-caret-right\"></i></a>
                            </li>
                           
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Login</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>
    <h1 style=\"text-align:center\">Creation evenement</h1>

    ";
        // line 61
        echo twig_include($this->env, $context, "event/_form.html.twig");
        echo "
    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">back to list</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  132 => 61,  118 => 50,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}New Event{% endblock %}

{% block body %}
        <!--=================================
\tHeader
\t=================================-->
    <header>
        <div class=\"social-links\">
            <div class=\"container\" width=\"80%\">
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
                            <li class=\"active dropdown\"><a href=\"#\">Accueil<i class=\"fa fa-caret-right\"></i></a>
                              
                            </li>
                           
                           
                            <li class=\"yamm-fw dropdown\"><a href=\"#\">Organisateurs<i class=\"fa fa-caret-right\"></i></a>
                            </li>
                           
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"{{path('security_login')}}\">Login</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>
    <h1 style=\"text-align:center\">Creation evenement</h1>

    {{ include('event/_form.html.twig') }}
    <a href=\"{{ path('homepage') }}\">back to list</a>
{% endblock %}
", "event/new.html.twig", "/home/bob/Bureau/projet_ticket/FINAL/templates/event/new.html.twig");
    }
}
