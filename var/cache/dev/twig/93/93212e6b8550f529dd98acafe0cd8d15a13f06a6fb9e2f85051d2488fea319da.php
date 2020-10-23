<?php

/* event/homepage.html.twig */
class __TwigTemplate_d60d2dc5cb68d7743007ac50b7c7d64fe3ff2c8534d2df9bd43c65df15a3c705 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/homepage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>Home page</title>

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
                            <li class=\"active dropdown\"><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil<i class=\"fa fa-caret-right\"></i></a>
                              
                            </li>
                           
                        
                           
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Login</a></li>
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\">Inscription</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>


    <!--=================================
JPlayer (Audio Player)
=================================-->




    <div id=\"ajaxArea\">
        <div class=\"pageContentArea\">
            <!--=================================
      Home
      =================================-->
            <section id=\"home-slider\">
                <div class=\"container\">
                    <div class=\"home-inner\">

                        <div id=\"homeSliderNav\" class=\"slider-nav\">
                            <a id=\"home-prev\" href=\"#\" class=\"prev fa fa-chevron-left\"></a>
                            <a id=\"home-next\" href=\"#\" class=\"next fa fa-chevron-right\"></a>
                        </div>
                        <!--sliderNav-->
<div id=\"flex-home\" style = \"width:100% ; height:400px\" class=\"flexslider\" data-animation=\"slide\" data-animationSpeed=\"1000\" data-autoPlay=\"true\" data-slideshowSpeed=\"7000\">
              <ul class=\"slides\">
                <li> <img src=\"/img/slider/756c708_QeXqAesCNLJSpJhmUPqIPeQd.jpg\" style = \"width:100% ; height:100%\" alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
                <li> <img src=\"/img/slider/gazelles_2014_01_0.jpg\" style = \"width:100% ; height:100%\" alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
                <li> <img src=\"/img/digit.jpeg\" style = \"width:100% ; height:100%\" alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
                <li> <img src=\"/img/slider/gazelles_2014_01_0.jpg.jpg\" style = \"width:100% ; height:100%\"alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
            </div>
                    </div>
                </div>
            </section>
            <!--=================================
      Player Wraper
      =================================-->
            <div class=\"rockPlayerHolder\"></div>
            <!--=================================
      Latest Albumbs
      =================================-->
        <div class=\"container\">
          <div class=\"row\">
            <h1>Liste des evenements</h1>";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEvents"]) || array_key_exists("listeEvents", $context) ? $context["listeEvents"] : (function () { throw new Twig_Error_Runtime('Variable "listeEvents" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listeEvent"]) {
            // line 157
            echo "            <div class=\"col-lg-3 col-md-3 col-sm-3\">
              <article class=\"blog-post\"> <img src=\"/img/blog/weezevent_homepage-1900x1267.jpg\" alt=\"\"/>
                <div class=\"hover\"> <a href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_details", ["id" => twig_get_attribute($this->env, $this->source, $context["listeEvent"], "id", [])]), "html", null, true);
            echo "\">
                  <h2>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "title", []), "html", null, true);
            echo "</h2>
                  <p>'";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "description", []), "html", null, true);
            echo "...'</p>
                  <ul>
                    <li>Organizer</li>
                    <li>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "location", []), "html", null, true);
            echo "</li>
                  </ul>
                  </a> </div>
              </article>
            </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "            
          </div>
        </div>
      </section>

            <div class=\"clearfix\"></div>
            <!--=================================
      Upcoming events
      =================================-->

            <section id=\"updates\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-3 col-sm-3\">
                            <h1>Évènements à venir</h1>";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEvents"]) || array_key_exists("listeEvents", $context) ? $context["listeEvents"] : (function () { throw new Twig_Error_Runtime('Variable "listeEvents" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listeEvent"]) {
            // line 186
            echo "                            <div class=\"event-feed\">
                                <div class=\"date\"> <span class=\"day\">";
            // line 187
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "dateStart", []), "d"), "html", null, true);
            echo "</span> <span class=\"month\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "dateStart", []), "F"), "html", null, true);
            echo "</span> </div>
                                <h5>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "title", []), "html", null, true);
            echo "</h5>
                                <p>at";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "location", []), "html", null, true);
            echo "</p><br>
                                <p><a class=\"btn\" href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_details", ["id" => twig_get_attribute($this->env, $this->source, $context["listeEvent"], "id", [])]), "html", null, true);
            echo "\">ticket</a> <p></div>
                            <!--\\\\event-->";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
                        </div>
                        <!--latest events-->

                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <h1>latest news</h1>";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEvents"]) || array_key_exists("listeEvents", $context) ? $context["listeEvents"] : (function () { throw new Twig_Error_Runtime('Variable "listeEvents" does not exist.', 199, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listeEvent"]) {
            // line 200
            echo "                            <div class=\"news-feed\"> <img src=\"/img/news/1.jpg\" alt=\"dummy\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_details", ["id" => twig_get_attribute($this->env, $this->source, $context["listeEvent"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listeEvent"], "title", []), "html", null, true);
            echo "</a>
                                <ul>
                                    <li>4 hours ago</li>
                                    <li><span class=\"fa fa-comment\"></span>5 comments</li>
                                </ul>
                                <p>'Description de l evenement '.</p>
                            </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                            

                        </div>
                        <!--latest news-->
                        <div class=\"col-lg-3 col-md-3 col-sm-3\">
                            <h1>videos</h1>
                            <div class=\"video-feed\"> <img src=\"/img/videos/100.webp\" alt=\"\"/> 
                                <h6>1 week ago</h6>
                                    </div>
              <!--\\\\video-feed-->
              
                              <div class=\"video-feed\"> <img src=\"/img/videos/200w.webp\" alt=\"\"/> 
                <h6>1 week ago</h6>
              </div>
              <!--\\\\video-feed-->
              
              <div class=\"video-feed\"> <img src=\"/img/videos/giphy.webp\" alt=\"\"/> 
                <h6>1 week ago</h6>
              </div>
                            <!--\\\\video-feed-->
                             
                        </div>
                        <!--latest videos-->
                    </div>
                </div>
            </section>
        </div>
        <!--pageContent-->
    </div>
    <!--ajaxwrap-->
    <!--=================================
\tLatest blog
\t=================================-->


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
                                <li><a href=\"#\"> Accueil </a></li>
                                <li><a href=\"#\"> Gallery</a></li>
                                <li><a href=\"#\"> événements </a></li>
                            </ul>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <ul class=\"sitemap\">
                                <li><a href=\"#\"> video </a></li>
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
        return "event/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 208,  283 => 200,  279 => 199,  272 => 193,  264 => 190,  260 => 189,  256 => 188,  250 => 187,  247 => 186,  243 => 185,  227 => 170,  216 => 164,  210 => 161,  206 => 160,  202 => 159,  198 => 157,  194 => 156,  124 => 88,  120 => 87,  110 => 80,  29 => 1,);
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
    <title>Home page</title>

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
                            <li class=\"active dropdown\"><a href=\"{{path('homepage')}}\">Accueil<i class=\"fa fa-caret-right\"></i></a>
                              
                            </li>
                           
                        
                           
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"{{path('security_login')}}\">Login</a></li>
                            <li><a href=\"{{path('security_registration')}}\">Inscription</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

                </div>
            </div>
        </nav>
    </header>


    <!--=================================
JPlayer (Audio Player)
=================================-->




    <div id=\"ajaxArea\">
        <div class=\"pageContentArea\">
            <!--=================================
      Home
      =================================-->
            <section id=\"home-slider\">
                <div class=\"container\">
                    <div class=\"home-inner\">

                        <div id=\"homeSliderNav\" class=\"slider-nav\">
                            <a id=\"home-prev\" href=\"#\" class=\"prev fa fa-chevron-left\"></a>
                            <a id=\"home-next\" href=\"#\" class=\"next fa fa-chevron-right\"></a>
                        </div>
                        <!--sliderNav-->
<div id=\"flex-home\" style = \"width:100% ; height:400px\" class=\"flexslider\" data-animation=\"slide\" data-animationSpeed=\"1000\" data-autoPlay=\"true\" data-slideshowSpeed=\"7000\">
              <ul class=\"slides\">
                <li> <img src=\"/img/slider/756c708_QeXqAesCNLJSpJhmUPqIPeQd.jpg\" style = \"width:100% ; height:100%\" alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
                <li> <img src=\"/img/slider/gazelles_2014_01_0.jpg\" style = \"width:100% ; height:100%\" alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
                <li> <img src=\"/img/digit.jpeg\" style = \"width:100% ; height:100%\" alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
                <li> <img src=\"/img/slider/gazelles_2014_01_0.jpg.jpg\" style = \"width:100% ; height:100%\"alt=\"\" >
                  <div class=\"flex-caption\">
                    <h2>events theme</h2>
                  </div>
                </li>
            </div>
                    </div>
                </div>
            </section>
            <!--=================================
      Player Wraper
      =================================-->
            <div class=\"rockPlayerHolder\"></div>
            <!--=================================
      Latest Albumbs
      =================================-->
        <div class=\"container\">
          <div class=\"row\">
            <h1>Liste des evenements</h1>
            {% for listeEvent in listeEvents %}
            <div class=\"col-lg-3 col-md-3 col-sm-3\">
              <article class=\"blog-post\"> <img src=\"/img/blog/weezevent_homepage-1900x1267.jpg\" alt=\"\"/>
                <div class=\"hover\"> <a href=\"{{path('event_details',{'id': listeEvent.id})}}\">
                  <h2>{{listeEvent.title}}</h2>
                  <p>'{{listeEvent.description}}...'</p>
                  <ul>
                    <li>Organizer</li>
                    <li>{{listeEvent.location}}</li>
                  </ul>
                  </a> </div>
              </article>
            </div>
            {% endfor %}
            
          </div>
        </div>
      </section>

            <div class=\"clearfix\"></div>
            <!--=================================
      Upcoming events
      =================================-->

            <section id=\"updates\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-3 col-sm-3\">
                            <h1>Évènements à venir</h1>
                            {% for listeEvent in listeEvents %}
                            <div class=\"event-feed\">
                                <div class=\"date\"> <span class=\"day\">{{listeEvent.dateStart|date('d')}}</span> <span class=\"month\">{{listeEvent.dateStart|date(\"F\")}}</span> </div>
                                <h5>{{listeEvent.title}}</h5>
                                <p>at {{listeEvent.location}}</p><br>
                                <p><a class=\"btn\" href=\"{{path('event_details',{'id': listeEvent.id})}}\">ticket</a> <p></div>
                            <!--\\\\event-->
                            {% endfor %}

                        </div>
                        <!--latest events-->

                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <h1>latest news</h1>
                            {% for listeEvent in listeEvents %}
                            <div class=\"news-feed\"> <img src=\"/img/news/1.jpg\" alt=\"dummy\"> <a href=\"{{path('event_details',{'id': listeEvent.id})}}\">{{listeEvent.title}}</a>
                                <ul>
                                    <li>4 hours ago</li>
                                    <li><span class=\"fa fa-comment\"></span>5 comments</li>
                                </ul>
                                <p>'Description de l evenement '.</p>
                            </div>
                            {% endfor %}
                            

                        </div>
                        <!--latest news-->
                        <div class=\"col-lg-3 col-md-3 col-sm-3\">
                            <h1>videos</h1>
                            <div class=\"video-feed\"> <img src=\"/img/videos/100.webp\" alt=\"\"/> 
                                <h6>1 week ago</h6>
                                    </div>
              <!--\\\\video-feed-->
              
                              <div class=\"video-feed\"> <img src=\"/img/videos/200w.webp\" alt=\"\"/> 
                <h6>1 week ago</h6>
              </div>
              <!--\\\\video-feed-->
              
              <div class=\"video-feed\"> <img src=\"/img/videos/giphy.webp\" alt=\"\"/> 
                <h6>1 week ago</h6>
              </div>
                            <!--\\\\video-feed-->
                             
                        </div>
                        <!--latest videos-->
                    </div>
                </div>
            </section>
        </div>
        <!--pageContent-->
    </div>
    <!--ajaxwrap-->
    <!--=================================
\tLatest blog
\t=================================-->


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
                                <li><a href=\"#\"> Accueil </a></li>
                                <li><a href=\"#\"> Gallery</a></li>
                                <li><a href=\"#\"> événements </a></li>
                            </ul>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <ul class=\"sitemap\">
                                <li><a href=\"#\"> video </a></li>
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

</html>", "event/homepage.html.twig", "/home/tsiky/Bureau/FINAL/templates/event/homepage.html.twig");
    }
}
