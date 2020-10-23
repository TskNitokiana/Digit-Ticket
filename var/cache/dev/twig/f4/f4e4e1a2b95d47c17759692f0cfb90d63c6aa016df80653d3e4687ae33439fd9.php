<?php

/* admin/admin.html.twig */
class __TwigTemplate_cda36d7aea9c438e2b5bc58e95a29aece2df26f37d172af872063c081d2ff41a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->

<head>
    <meta charset=\"utf-8\">
    <title>Admin</title>

    <!--=================================
Meta tags
=================================-->
    <meta name=\"description\" content=\"\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />
    <meta name=\"viewport\" content=\"minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no\" />

    <!--=================================
Style Sheets
=================================-->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\">

    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/flexslider.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/prettyPhoto.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.vegas.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mCustomScrollbar.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/blue.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/orange.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/red.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/green.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/purple.css\">-->

    <script async src=\"/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
    <script defer src=\"/js/jquery.js\"></script>

    <!-- import bootstrap -->

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
                            <li class=\"dropdown\">
                                <a href=\"#\">
                                    <i class=\"fa fa-caret-right\"></i></a>
                            </li>
                            Bonjour ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->source); })()), "user", []), "username", []), "html", null, true);
        echo " ";
        echo "(";
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->source); })()), "user", []), "email", []), "html", null, true);
        echo " ";
        echo ")";
        echo " 
                             
                             <li class=\"dropdown\"><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">ACCEUIL<i class=\"fa fa-caret-right\"></i></a>
                               
                            </li>
                  
                   ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 93, $this->source); })()), "user", []), "rolesVerif", []) == "ROLE_ORGANIZER")) {
            // line 94
            echo "                             <li class=\"dropdown\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_event");
            echo "\">crée un événement<i class=\"fa fa-caret-right\"></i></a>
                               
                            </li>
                  ";
        }
        // line 97
        echo "    
            
                            <li class=\"dropdown\"><a href=\"#\">Profil<i class=\"fa fa-caret-right\"></i></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"#\">Modifié profil</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ticket</a>
                                    </li>
                                        <li>
                                        <a href=\"#\">Following</a>
                                    </li>
                                    <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\">déconnexion</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>

    <!--=================================
Vegas Slider Images
=================================-->

    <ul class=\"vegas-slides hidden\">
        <li><img data-fade='2000' src=\"/img/BG/bg1.jpg\" alt=\"\" /></li>
        <li><img data-fade='2000' src=\"/img/BG/bg2.jpg\" alt=\"\" /></li>
        <li><img data-fade='2000' src=\"/img/BG/bg3.jpg\" alt=\"\" /></li>
        <li><img data-fade='2000' src=\"/img/BG/bg4.jpg\" alt=\"\" /></li>
    </ul>

    <!--=================================
JPlayer (Audio Player)
=================================-->



    <div id=\"ajaxArea\">
        <div class=\"pageContentArea\">
            <!--=================================
      bread crums
      =================================-->
            <section class=\"breadcrumb\">

                
                <div class=\"container\">
                ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 148, $this->source); })()), "user", []), "rolesVerif", []) == "ROLE_CLIENT")) {
            // line 149
            echo "                    
                ";
        }
        // line 151
        echo "

            </section>
            <div class=\"clearfix\"></div>

        </div>
        <!--pageContent-->
    </div>


    <!--=================================
\tFooter
\t=================================-->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-sitemap\"></span>browse around</h4>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <ul class=\"sitemap\">
                                <li><a href=\"\">HOME</a></li>
                                <li><a href=\"#\">NEWS</a></li>
                                <li><a href=\"#\">events</a></li>
                                <li><a href=\"#\">artists</a></li>
                            </ul>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <ul class=\"sitemap\">
                                <li><a href=\"#\">VIDEOS</a></li>
                                <li><a href=\"#\">GALLERY</a></li>
                                <li><a href=\"#\">CONTACT</a></li>
                                <li><a href=\"#\">FEATURES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--\\\\column-->

                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-twitter\"></span>Latest Tweet</h4>
                    <div class=\"latest-tweet\" data-username=\"envato\" data-limit=\"2\"></div>
                </div>
                <!--\\\\column-->

                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-flickr\"></span>Flicker Feed</h4>
                    <ul id=\"flicker-feed\" data-limit=\"6\" data-userID=\"52617155@N08\"></ul>
                </div>
                <!--\\\\column-->

                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-envelope\"></span>newsletter signup</h4>
                    <form id=\"newsletter\">
                        <input placeholder=\"Enter your email address here\" />
                        <button class=\"submit-btn\">submit</button>
                    </form>
                </div>
                <!--\\\\column-->

            </div>
            <!--\\\\row-->
        </div>
        <!--\\\\container-->
    </footer>

    <!--=================================
Script Source
=================================-->

    <script defer src=\"/js/bootstrap.min.js\"></script>
    <script defer src=\"/js/jquery.easing-1.3.pack.js\"></script>
    <script defer src=\"/js/jquery.mCustomScrollbar.concat.min.js\"></script>
    <script defer src=\"/js/jquery.mousewheel.min.js\"></script>
    <script defer src=\"/js/jflickrfeed.min.js\"></script>
    <script defer src=\"/js/jquery.flexslider-min.js\"></script>
    <script defer src=\"/js/jquery.carouFredSel-6.2.1-packed.js\"></script>
    <script defer src=\"/js/tweetie.min.js\"></script>
    <script defer src=\"/js/jquery.prettyPhoto.js\"></script>
    <script defer src=\"/jPlayer/jquery.jplayer.min.js\"></script>
    <script defer src=\"/jPlayer/add-on/jplayer.playlist.min.js\"></script>
    <script defer src=\"/js/jquery.vegas.min.js\"></script>
    <script defer src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
    <script defer src=\"/js/jquery.calendar-widget.js\"></script>
    <script defer src=\"/js/isotope.js\"></script>
    <script defer src=\"/js/main.js\"></script>

    <script>
        /*Place Your Google Analytics code here*/
    </script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 151,  203 => 149,  201 => 148,  160 => 110,  145 => 97,  137 => 94,  135 => 93,  128 => 89,  117 => 87,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->

<head>
    <meta charset=\"utf-8\">
    <title>Admin</title>

    <!--=================================
Meta tags
=================================-->
    <meta name=\"description\" content=\"\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />
    <meta name=\"viewport\" content=\"minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no\" />

    <!--=================================
Style Sheets
=================================-->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\">

    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/flexslider.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/prettyPhoto.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.vegas.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mCustomScrollbar.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/blue.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/orange.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/red.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/green.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/purple.css\">-->

    <script async src=\"/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
    <script defer src=\"/js/jquery.js\"></script>

    <!-- import bootstrap -->

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
                            <li class=\"dropdown\">
                                <a href=\"#\">
                                    <i class=\"fa fa-caret-right\"></i></a>
                            </li>
                            Bonjour {{app.user.username}} {{\"(\"}} {{app.user.email}} {{\")\"}} 
                             
                             <li class=\"dropdown\"><a href=\"{{path('homepage')}}\">ACCEUIL<i class=\"fa fa-caret-right\"></i></a>
                               
                            </li>
                  
                   {% if app.user.rolesVerif == 'ROLE_ORGANIZER'  %}
                             <li class=\"dropdown\"><a href=\"{{path('event_event')}}\">crée un événement<i class=\"fa fa-caret-right\"></i></a>
                               
                            </li>
                  {% endif %}    
            
                            <li class=\"dropdown\"><a href=\"#\">Profil<i class=\"fa fa-caret-right\"></i></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"#\">Modifié profil</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ticket</a>
                                    </li>
                                        <li>
                                        <a href=\"#\">Following</a>
                                    </li>
                                    <li><a href=\"{{path('security_logout')}}\">déconnexion</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>

    <!--=================================
Vegas Slider Images
=================================-->

    <ul class=\"vegas-slides hidden\">
        <li><img data-fade='2000' src=\"/img/BG/bg1.jpg\" alt=\"\" /></li>
        <li><img data-fade='2000' src=\"/img/BG/bg2.jpg\" alt=\"\" /></li>
        <li><img data-fade='2000' src=\"/img/BG/bg3.jpg\" alt=\"\" /></li>
        <li><img data-fade='2000' src=\"/img/BG/bg4.jpg\" alt=\"\" /></li>
    </ul>

    <!--=================================
JPlayer (Audio Player)
=================================-->



    <div id=\"ajaxArea\">
        <div class=\"pageContentArea\">
            <!--=================================
      bread crums
      =================================-->
            <section class=\"breadcrumb\">

                
                <div class=\"container\">
                {% if app.user.rolesVerif == 'ROLE_CLIENT'  %}
                    
                {% endif %}


            </section>
            <div class=\"clearfix\"></div>

        </div>
        <!--pageContent-->
    </div>


    <!--=================================
\tFooter
\t=================================-->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-sitemap\"></span>browse around</h4>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <ul class=\"sitemap\">
                                <li><a href=\"\">HOME</a></li>
                                <li><a href=\"#\">NEWS</a></li>
                                <li><a href=\"#\">events</a></li>
                                <li><a href=\"#\">artists</a></li>
                            </ul>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <ul class=\"sitemap\">
                                <li><a href=\"#\">VIDEOS</a></li>
                                <li><a href=\"#\">GALLERY</a></li>
                                <li><a href=\"#\">CONTACT</a></li>
                                <li><a href=\"#\">FEATURES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--\\\\column-->

                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-twitter\"></span>Latest Tweet</h4>
                    <div class=\"latest-tweet\" data-username=\"envato\" data-limit=\"2\"></div>
                </div>
                <!--\\\\column-->

                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-flickr\"></span>Flicker Feed</h4>
                    <ul id=\"flicker-feed\" data-limit=\"6\" data-userID=\"52617155@N08\"></ul>
                </div>
                <!--\\\\column-->

                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <h4><span class=\"fa fa-envelope\"></span>newsletter signup</h4>
                    <form id=\"newsletter\">
                        <input placeholder=\"Enter your email address here\" />
                        <button class=\"submit-btn\">submit</button>
                    </form>
                </div>
                <!--\\\\column-->

            </div>
            <!--\\\\row-->
        </div>
        <!--\\\\container-->
    </footer>

    <!--=================================
Script Source
=================================-->

    <script defer src=\"/js/bootstrap.min.js\"></script>
    <script defer src=\"/js/jquery.easing-1.3.pack.js\"></script>
    <script defer src=\"/js/jquery.mCustomScrollbar.concat.min.js\"></script>
    <script defer src=\"/js/jquery.mousewheel.min.js\"></script>
    <script defer src=\"/js/jflickrfeed.min.js\"></script>
    <script defer src=\"/js/jquery.flexslider-min.js\"></script>
    <script defer src=\"/js/jquery.carouFredSel-6.2.1-packed.js\"></script>
    <script defer src=\"/js/tweetie.min.js\"></script>
    <script defer src=\"/js/jquery.prettyPhoto.js\"></script>
    <script defer src=\"/jPlayer/jquery.jplayer.min.js\"></script>
    <script defer src=\"/jPlayer/add-on/jplayer.playlist.min.js\"></script>
    <script defer src=\"/js/jquery.vegas.min.js\"></script>
    <script defer src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
    <script defer src=\"/js/jquery.calendar-widget.js\"></script>
    <script defer src=\"/js/isotope.js\"></script>
    <script defer src=\"/js/main.js\"></script>

    <script>
        /*Place Your Google Analytics code here*/
    </script>

</body>

</html>", "admin/admin.html.twig", "/home/bob/Bureau/projet_ticket/FINAL/templates/admin/admin.html.twig");
    }
}
