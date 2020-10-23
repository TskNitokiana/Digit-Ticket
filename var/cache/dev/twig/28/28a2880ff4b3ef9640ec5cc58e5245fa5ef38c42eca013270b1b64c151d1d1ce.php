<?php

/* event/details.html.twig */
class __TwigTemplate_96d5e04840f36d5ecd9725697d9624fb795e24fb69fe5d3a20542e818a6f4fbd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/details.html.twig"));

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

        echo " Details ";
        
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
        echo "<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->
<head>
<meta charset=\"utf-8\">
<title>DIGIT-TICKET</title>

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
<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/w3.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mCustomScrollbar.css\">
<link rel=\"stylesheet\" href=\"/css/main.css\">

<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/blue.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/orange.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/red.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/green.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/purple.css\">-->

<script async  src=\"/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
<script defer  src=\"/js/jquery.js\"></script>
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
        <li ><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-pinterest\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-linkedin\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-flickr\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-youtube\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
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
            <li class=\"active dropdown\"><a href=\"#\">Home <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li><a href=\"index.html\">Home1</a></li>
                <li><a href=\"home2.html\">Home2</a> </li>
              </ul>
            </li>
          
              <ul class=\"dropdown-menu\">
              \t
                <li>
                  <div class=\"yamm-content\">
                    <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"yamm-blog\"> <img src=\"/img/news/blog1.png\" alt=\"dummy\">
                          <h4><a href=\"blog-detail.html\">Justin Timberlake Threw Himself 'Inside Llewyn Davis'</a></h4>
                        </div>
                        <!--yamm artist info--> 
                        <a class=\"to-page\" href=\"blog.html\">View All posts</a> </div>
                      <!--col-->
                      
                      <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/h.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/c.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/d.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/e.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/f.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/g.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                        </div>
                        <!--row--> 
                      </div>
                      <!--col--> 
                      
                    </div>
                    <!--row--> 
                  </div>
                  <!--yamm content--> 
                </li>
              </ul>
            </li>
            <li class=\"dropdown\"><a href=\"#\">Events <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li><a href=\"events.html\">Events</a> </li>
                <li><a href=\"event-detail.html\">Event Detail</a> </li>
              </ul>
            </li>
            <li class=\"yamm-fw dropdown\"><a href=\"#\">Artist <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li>
                  <div class=\"yamm-content\">
                    <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                          <div class=\"yamm-artist-info\">
                            <h2>featured artist</h2>
                            <div class=\"col-lg-5 col-md-6 col-sm-12 col-xs-12\"> <img src=\"/img/artist/artist3.jpg\" alt=\"\"> </div>
                            <div class=\"col-lg-7 col-md-6 col-sm-12 col-xs-12\">
                              <h4><a href=\"artist-detail.html\">enrique iglesias</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivation</p>
                            </div>
                            <!--col--> 
                          </div>
                          <!--yamm artist info--> 
                        </div>
                        <!--row--> 
                      </div>
                      <!--col-->
                      
                      <div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\">
                        <ul class=\"yamm-artist-name\">
                          <li><a href=\"artist-detail.html\">enrique iglesias</a></li>
                          <li> <a href=\"artist-detail.html\">Justin Timberlake</a></li>
                          <li><a href=\"artist-detail.html\">Madonna</a></li>
                          <li><a href=\"artist-detail.html\">britney spears</a></li>
                          <li class=\"to-page\"><a href=\"artist.html\">View All</a></li>
                        </ul>
                      </div>
                      <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                        <div class=\"yamm-artist-album\">
                          <h2>Top 5 album</h2>
                          <a href=\"album-detail.html\"><img src=\"/img/albums/10.jpg\" alt=\"\"></a> <a href=\"album-detail.html\"><img src=\"/img/albums/11.jpg\" alt=\"\"></a> <a href=\"album-detail.html\"><img src=\"/img/albums/12.jpg\" alt=\"\"></a> <a href=\"album-detail.html\"><img src=\"/img/albums/13.jpg\" alt=\"\"></a> </div>
                      </div>
                      <!--yamm artist album--> 
                      
                    </div>
                    <!--row--> 
                  </div>
                  <!--yamm content--> 
                </li>
              </ul>
            </li>
            <li class=\"dropdown\"><a href=\"#\">Albums <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li><a href=\"album.html\">Albums</a> </li>
                <li><a href=\"album-detail.html\">Album Detail</a> </li>
              </ul>
            </li>
            <li class=\"yamm-fw dropdown\"><a href=\"#\" >Videos <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li>
                  <div class=\"yamm-content\">
                    <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"video-feed\"> <img src=\"/img/videos/video1.jpg\" alt=\"\"/> <a href=\"#\"><span class=\"fa fa-play\"></span></a>
                          <h5>Music Band Concert - 2013</h5>
                        </div>
                        <!--\\\\video-feed--> 
                        <a class=\"to-page\" href=\"videos.html\">View All videos</a> </div>
                      <!--col-->
                      
                      <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"video-feed\"> <img src=\"/img/videos/1.jpg\" alt=\"\"/> <a href=\"video-detail.html\"><span class=\"fa fa-play\"></span></a>
                              <h6>1 week ago</h6>
                            </div>
                            <!--\\\\video-feed-->
                            <h4>Enrique concert</h4>
                            <p>I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivationf</p>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"video-feed\"> <img src=\"/img/videos/2.jpg\" alt=\"\"/> <a href=\"video-detail.html\"><span class=\"fa fa-play\"></span></a>
                              <h6>1 week ago</h6>
                            </div>
                            <!--\\\\video-feed-->
                            <h4>Enrique concert</h4>
                            <p>I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivationf</p>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"video-feed\"> <img src=\"/img/videos/3.jpg\" alt=\"\"/> <a href=\"video-detail.html\"><span class=\"fa fa-play\"></span></a>
                              <h6>1 week ago</h6>
                            </div>
                            <!--\\\\video-feed-->
                            <h4>Enrique concert</h4>
                            <p>I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivationf</p>
                          </div>
                        </div>
                        <!--row--> 
                      </div>
                      <!--col--> 
                      
                    </div>
                    <!--row--> 
                  </div>
                  <!--yamm content--> 
                </li>
              </ul>
            </li>
            <li><a href=\"gallery.html\">Gallery</a></li>
            <li><a href=\"news.html\">News</a></li>
            <li><a href=\"contact.html\" >Contact</a></li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
        
      </div>
    </div>
  </nav>
</header>

      <!--=================================
      bread crums
      =================================-->
        <section class=\"breadcrumb\">
             <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-lg-6 col-md-6 col-sm-6\">
                          <h1>DETAILS DE L ÉVÈNEMENTS </h1>
                      </div>
                      
                      <div class=\"col-lg-6 col-md-6 col-sm-6\">
                          <ul>
                              <li><a href=\"#\">Home</a></li>
                              <li><a href=\"#\">latest events</a></li>
                          </ul>
                      </div>
                  </div>
             </div>
        </section>
      <!--=================================
      videos
      =================================-->
      
      <section id=\"latest-events\">
          <div class=\"container\">
              <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-5\">
                          <div class=\"event-feed latest\">
                              <img src=\"/img/blog/weezevent_homepage-1900x1267.jpg\" alt=\"\">
                              <div class=\"date\">
                                  <span class=\"day\">";
        // line 309
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 309, $this->source); })()), "dateStart", []), "d"), "html", null, true);
        echo "</span>
                                  <span class=\"month\">";
        // line 310
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 310, $this->source); })()), "dateStart", []), "F"), "html", null, true);
        echo "</span>
                              </div>
                              <h5>";
        // line 312
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 312, $this->source); })()), "title", []), "html", null, true);
        echo "</h5>
                              <ul>
                                  <li><b class=\" fa fa-location-arrow\"></b> ";
        // line 314
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 314, $this->source); })()), "location", []), "html", null, true);
        echo "</li>
                                  <li><b class=\" fa fa-clock-o\"></b> ";
        // line 315
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 315, $this->source); })()), "dateStart", []), "H:i"), "html", null, true);
        echo "  - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 315, $this->source); })()), "dateEnd", []), "H:i"), "html", null, true);
        echo " </li>
                                  <li><b class=\" fa fa-money\"></b> PRIX ";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 316, $this->source); })()), "price", []), "html", null, true);
        echo " \$ </li>
                                  
                              
                         



<link rel=\"stylesheet\" href=\"css/w3.css\">
<body>

<div class=\"w3-container\">

  <button onclick=\"document.getElementById('id01').style.display='block'\" class=\"w3-button w3-green w3-large\">Tickets</button>

  <div id=\"id01\" class=\"w3-modal\">
    <div class=\"w3-modal-content w3-card-4 w3-animate-zoom\" style=\"max-width:600px\">

      <div class=\"w3-center\"><br>
        <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"w3-button w3-xlarge w3-hover-red w3-display-topright\" title=\"Close Modal\">&times;</span>
        <img src=\"img_avatar4.png\" alt=\"Avatar\" style=\"width:30%\" class=\"w3-circle w3-margin-top\">
      </div>

      <form class=\"w3-container\" action=\"\" method=\"post\">
        <div class=\"w3-section\">
  <input type=\"text\" name=\"user\" placeholder=\"title ici\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 340, $this->source); })()), "user", []), "id", []), "html", null, true);
        echo "\" hidden>
<br>
<h1 style=\"color:black\">";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 342, $this->source); })()), "title", []), "html", null, true);
        echo " </h1>
<p style=\"color:black\">Nombre de ticket:</p>
<select name=\"nombre\" >
 ";
        // line 345
        $context["nbr"] = 1;
        // line 346
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new Twig_Error_Runtime('Variable "tickets" does not exist.', 346, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 347
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "events", []) == twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 347, $this->source); })()), "id", []))) {
                // line 348
                echo "
  <option value=\"";
                // line 349
                echo twig_escape_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new Twig_Error_Runtime('Variable "nbr" does not exist.', 349, $this->source); })()), "html", null, true);
                echo "\" name=\"nombre\">
    ";
                // line 350
                echo twig_escape_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new Twig_Error_Runtime('Variable "nbr" does not exist.', 350, $this->source); })()), "html", null, true);
                echo "
";
                // line 351
                $context["nbr"] = ((isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new Twig_Error_Runtime('Variable "nbr" does not exist.', 351, $this->source); })()) + 1);
                // line 352
                echo "  </option>
 ";
            }
            // line 354
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<br><br>

</select><br>
 <button class=\"w3-button w3-block w3-green w3-section w3-padding\" type=\"submit\">Ticket</button>
     
        </div>
      </form>

      <div class=\"w3-container w3-border-top w3-padding-16 w3-light-grey\">
        <button onclick=\"document.getElementById('id01').style.display='none'\" type=\"button\" class=\"w3-button w3-red\">Cancel</button>
        
      </div>

    </div>
  </div>
</div>

</ul>
                              
                          </div><!--\\\\event-feed latest-->


















                          
                      </div><!--//col-->
                      
                      <div class=\"col-lg-8 col-md-8 col-sm-7\">
                          <div class=\"event-info\">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nibh pharetra, congue lectus at, malesuada augue. Donec tincidunt faucibus lacus. Curabitur vitae euismod lectus. Vestibulum sagittis scelerisque tincidunt. Aliquam sit amet arcu felis. Ut posuere augue vitae velit rhoncus sodales. Vestibulum eleifend accumsan ligula ut ornare. Pellentesque iaculis sed mi dapibus volutpat.</p>
                              <p>Pellentesque cursus sit amet arcu a adipiscing. Curabitur feugiat enim id nibh facilisis tincidunt. Mauris sodales metus sit amet nisi laoreet hendrerit. Pellentesque consequat turpis et metus aliquet, at scelerisque ante bibendum. Duis condimentum quam at quam facilisis, eu sagittis tortor mattis. Aenean consequat iaculis odio id porta. Aenean lacus risus, varius eu orci nec, fringilla suscipit augue. Nunc porttitor lobortis ipsum.</p>
                              
                              </div><!--\\\\video-feed-->
                          </div><!--//event-info-->
                      </div><!--//col-->
              </div><!--row-->
          </div><!--//container-->  
      </section>
\t</div><!--pageContent-->
</div><!--ajaxwrap-->    
<!--=================================
\tLatest blog
\t=================================-->
<section id=\"latest-blog\">
  <div class=\"container\">
    <div class=\"row\">
      <h1 style=\"margin-bottom:10%\">AUTRES ÉVÈNEMENTS</h1>
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <article class=\"blog-post\"> <img src=\"/img/blog/big-concert-P3Z2LEB.jpeg\" alt=\"\"/>
          <div class=\"hover\"> <a href=\"blog-detail.html\">
            <h2>Miguel to Muse: the week in music</h2>
            <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation as...</p>
            <ul>
              <li>Admin</li>
              <li>5 hours ago</li>
              <li>2 Comments</li>
            </ul>
            </a> </div>
        </article>
      </div>
      <!--\\\\blog-post-->
      
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <article class=\"blog-post\"> <img src=\"/img/blog/fetard-signe-astro_1.jpg\" alt=\"\"/>
          <div class=\"hover\"> <a href=\"blog-detail.html\">
            <h2>Kenny Chesney kicks off Austin’s country music</h2>
            <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation as...</p>
            <ul>
              <li>Admin</li>
              <li>5 hours ago</li>
              <li>2 Comments</li>
            </ul>
            </a> </div>
        </article>
      </div>
      <!--\\\\blog-post-->
      
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <article class=\"blog-post\"> <img src=\"/img/blog/weezevent_homepage-1900x1267.jpg\" alt=\"\"/>
          <div class=\"hover\"> <a href=\"blog-detail.html\">
            <h2>CHRISTIAN REY - LIVE MUSIC</h2>
            <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation as...</p>
            <ul>
              <li>Admin</li>
              <li>5 hours ago</li>
              <li>2 Comments</li>
            </ul>
            </a> </div>
        </article>
      </div>
      <!--\\\\blog-post--> 
      
    </div>
  </div>
</section>

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
              <li><a href=\"#\">HOME</a></li>
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

<script defer  src=\"/js/bootstrap.min.js\"></script>
<script defer  src=\"/js/jquery.easing-1.3.pack.js\"></script>
<script defer  src=\"/js/jquery.mCustomScrollbar.concat.min.js\"></script> 
<script defer  src=\"/js/jquery.mousewheel.min.js\"></script> 
<script defer  src=\"/js/jflickrfeed.min.js\"></script> 
<script defer  src=\"/js/jquery.flexslider-min.js\"></script> 
<script defer  src=\"/js/jquery.carouFredSel-6.2.1-packed.js\"></script> 
<script defer  src=\"/js/tweetie.min.js\"></script> 
<script defer  src=\"/js/jquery.prettyPhoto.js\"></script> 
<script defer  src=\"/jPlayer/jquery.jplayer.min.js\"></script> 
<script defer  src=\"/jPlayer/add-on/jplayer.playlist.min.js\"></script> 
<script defer  src=\"/js/jquery.vegas.min.js\"></script> 
<script defer  src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script> 
<script defer  src=\"/js/jquery.calendar-widget.js\"></script> 
<script defer  src=\"/js/isotope.js\"></script>
<script defer  src=\"/js/main.js\"></script>   

<script>/*Place Your Google Analytics code here*/</script>

</body>
</html>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 354,  461 => 352,  459 => 351,  455 => 350,  451 => 349,  448 => 348,  446 => 347,  441 => 346,  439 => 345,  433 => 342,  428 => 340,  401 => 316,  395 => 315,  391 => 314,  386 => 312,  381 => 310,  377 => 309,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Details {% endblock %}

{% block body %}
<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->
<head>
<meta charset=\"utf-8\">
<title>DIGIT-TICKET</title>

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
<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/w3.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mCustomScrollbar.css\">
<link rel=\"stylesheet\" href=\"/css/main.css\">

<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/blue.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/orange.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/red.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/green.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/purple.css\">-->

<script async  src=\"/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
<script defer  src=\"/js/jquery.js\"></script>
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
        <li ><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-pinterest\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-linkedin\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-flickr\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-youtube\"></span></a></li>
        <li ><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
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
            <li class=\"active dropdown\"><a href=\"#\">Home <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li><a href=\"index.html\">Home1</a></li>
                <li><a href=\"home2.html\">Home2</a> </li>
              </ul>
            </li>
          
              <ul class=\"dropdown-menu\">
              \t
                <li>
                  <div class=\"yamm-content\">
                    <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"yamm-blog\"> <img src=\"/img/news/blog1.png\" alt=\"dummy\">
                          <h4><a href=\"blog-detail.html\">Justin Timberlake Threw Himself 'Inside Llewyn Davis'</a></h4>
                        </div>
                        <!--yamm artist info--> 
                        <a class=\"to-page\" href=\"blog.html\">View All posts</a> </div>
                      <!--col-->
                      
                      <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/h.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/c.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/d.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/e.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/f.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"yamm-blog-detail clearfix\"> <img src=\"/img/news/g.png\" alt=\"/\">
                              <h4><a href=\"blog-detail.html\">Justin Timberlake</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.</p>
                            </div>
                          </div>
                        </div>
                        <!--row--> 
                      </div>
                      <!--col--> 
                      
                    </div>
                    <!--row--> 
                  </div>
                  <!--yamm content--> 
                </li>
              </ul>
            </li>
            <li class=\"dropdown\"><a href=\"#\">Events <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li><a href=\"events.html\">Events</a> </li>
                <li><a href=\"event-detail.html\">Event Detail</a> </li>
              </ul>
            </li>
            <li class=\"yamm-fw dropdown\"><a href=\"#\">Artist <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li>
                  <div class=\"yamm-content\">
                    <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                          <div class=\"yamm-artist-info\">
                            <h2>featured artist</h2>
                            <div class=\"col-lg-5 col-md-6 col-sm-12 col-xs-12\"> <img src=\"/img/artist/artist3.jpg\" alt=\"\"> </div>
                            <div class=\"col-lg-7 col-md-6 col-sm-12 col-xs-12\">
                              <h4><a href=\"artist-detail.html\">enrique iglesias</a></h4>
                              <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivation</p>
                            </div>
                            <!--col--> 
                          </div>
                          <!--yamm artist info--> 
                        </div>
                        <!--row--> 
                      </div>
                      <!--col-->
                      
                      <div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\">
                        <ul class=\"yamm-artist-name\">
                          <li><a href=\"artist-detail.html\">enrique iglesias</a></li>
                          <li> <a href=\"artist-detail.html\">Justin Timberlake</a></li>
                          <li><a href=\"artist-detail.html\">Madonna</a></li>
                          <li><a href=\"artist-detail.html\">britney spears</a></li>
                          <li class=\"to-page\"><a href=\"artist.html\">View All</a></li>
                        </ul>
                      </div>
                      <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                        <div class=\"yamm-artist-album\">
                          <h2>Top 5 album</h2>
                          <a href=\"album-detail.html\"><img src=\"/img/albums/10.jpg\" alt=\"\"></a> <a href=\"album-detail.html\"><img src=\"/img/albums/11.jpg\" alt=\"\"></a> <a href=\"album-detail.html\"><img src=\"/img/albums/12.jpg\" alt=\"\"></a> <a href=\"album-detail.html\"><img src=\"/img/albums/13.jpg\" alt=\"\"></a> </div>
                      </div>
                      <!--yamm artist album--> 
                      
                    </div>
                    <!--row--> 
                  </div>
                  <!--yamm content--> 
                </li>
              </ul>
            </li>
            <li class=\"dropdown\"><a href=\"#\">Albums <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li><a href=\"album.html\">Albums</a> </li>
                <li><a href=\"album-detail.html\">Album Detail</a> </li>
              </ul>
            </li>
            <li class=\"yamm-fw dropdown\"><a href=\"#\" >Videos <i class=\"fa fa-caret-right\"></i></a>
              <ul class=\"dropdown-menu\">
              \t
                <li>
                  <div class=\"yamm-content\">
                    <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"video-feed\"> <img src=\"/img/videos/video1.jpg\" alt=\"\"/> <a href=\"#\"><span class=\"fa fa-play\"></span></a>
                          <h5>Music Band Concert - 2013</h5>
                        </div>
                        <!--\\\\video-feed--> 
                        <a class=\"to-page\" href=\"videos.html\">View All videos</a> </div>
                      <!--col-->
                      
                      <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"video-feed\"> <img src=\"/img/videos/1.jpg\" alt=\"\"/> <a href=\"video-detail.html\"><span class=\"fa fa-play\"></span></a>
                              <h6>1 week ago</h6>
                            </div>
                            <!--\\\\video-feed-->
                            <h4>Enrique concert</h4>
                            <p>I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivationf</p>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"video-feed\"> <img src=\"/img/videos/2.jpg\" alt=\"\"/> <a href=\"video-detail.html\"><span class=\"fa fa-play\"></span></a>
                              <h6>1 week ago</h6>
                            </div>
                            <!--\\\\video-feed-->
                            <h4>Enrique concert</h4>
                            <p>I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivationf</p>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <div class=\"video-feed\"> <img src=\"/img/videos/3.jpg\" alt=\"\"/> <a href=\"video-detail.html\"><span class=\"fa fa-play\"></span></a>
                              <h6>1 week ago</h6>
                            </div>
                            <!--\\\\video-feed-->
                            <h4>Enrique concert</h4>
                            <p>I use uncertainty as motivation and hopefully Rob uses it as motivation.I use uncertainty as motivation and hopefully Rob uses it as motivationf</p>
                          </div>
                        </div>
                        <!--row--> 
                      </div>
                      <!--col--> 
                      
                    </div>
                    <!--row--> 
                  </div>
                  <!--yamm content--> 
                </li>
              </ul>
            </li>
            <li><a href=\"gallery.html\">Gallery</a></li>
            <li><a href=\"news.html\">News</a></li>
            <li><a href=\"contact.html\" >Contact</a></li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
        
      </div>
    </div>
  </nav>
</header>

      <!--=================================
      bread crums
      =================================-->
        <section class=\"breadcrumb\">
             <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-lg-6 col-md-6 col-sm-6\">
                          <h1>DETAILS DE L ÉVÈNEMENTS </h1>
                      </div>
                      
                      <div class=\"col-lg-6 col-md-6 col-sm-6\">
                          <ul>
                              <li><a href=\"#\">Home</a></li>
                              <li><a href=\"#\">latest events</a></li>
                          </ul>
                      </div>
                  </div>
             </div>
        </section>
      <!--=================================
      videos
      =================================-->
      
      <section id=\"latest-events\">
          <div class=\"container\">
              <div class=\"row\">
                      <div class=\"col-lg-4 col-md-4 col-sm-5\">
                          <div class=\"event-feed latest\">
                              <img src=\"/img/blog/weezevent_homepage-1900x1267.jpg\" alt=\"\">
                              <div class=\"date\">
                                  <span class=\"day\">{{events.dateStart|date('d')}}</span>
                                  <span class=\"month\">{{events.dateStart|date(\"F\")}}</span>
                              </div>
                              <h5>{{events.title}}</h5>
                              <ul>
                                  <li><b class=\" fa fa-location-arrow\"></b> {{events.location}}</li>
                                  <li><b class=\" fa fa-clock-o\"></b> {{ events.dateStart|date('H:i') }}  - {{ events.dateEnd|date('H:i') }} </li>
                                  <li><b class=\" fa fa-money\"></b> PRIX {{ events.price }} \$ </li>
                                  
                              
                         



<link rel=\"stylesheet\" href=\"css/w3.css\">
<body>

<div class=\"w3-container\">

  <button onclick=\"document.getElementById('id01').style.display='block'\" class=\"w3-button w3-green w3-large\">Tickets</button>

  <div id=\"id01\" class=\"w3-modal\">
    <div class=\"w3-modal-content w3-card-4 w3-animate-zoom\" style=\"max-width:600px\">

      <div class=\"w3-center\"><br>
        <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"w3-button w3-xlarge w3-hover-red w3-display-topright\" title=\"Close Modal\">&times;</span>
        <img src=\"img_avatar4.png\" alt=\"Avatar\" style=\"width:30%\" class=\"w3-circle w3-margin-top\">
      </div>

      <form class=\"w3-container\" action=\"\" method=\"post\">
        <div class=\"w3-section\">
  <input type=\"text\" name=\"user\" placeholder=\"title ici\" value=\"{{app.user.id}}\" hidden>
<br>
<h1 style=\"color:black\">{{events.title}} </h1>
<p style=\"color:black\">Nombre de ticket:</p>
<select name=\"nombre\" >
 {% set nbr = 1 %}
 {% for ticket in tickets %}
{%  if ticket.events == events.id %}

  <option value=\"{{nbr}}\" name=\"nombre\">
    {{nbr}}
{% set nbr = nbr + 1 %}
  </option>
 {% endif %}
 {% endfor %}<br><br>

</select><br>
 <button class=\"w3-button w3-block w3-green w3-section w3-padding\" type=\"submit\">Ticket</button>
     
        </div>
      </form>

      <div class=\"w3-container w3-border-top w3-padding-16 w3-light-grey\">
        <button onclick=\"document.getElementById('id01').style.display='none'\" type=\"button\" class=\"w3-button w3-red\">Cancel</button>
        
      </div>

    </div>
  </div>
</div>

</ul>
                              
                          </div><!--\\\\event-feed latest-->


















                          
                      </div><!--//col-->
                      
                      <div class=\"col-lg-8 col-md-8 col-sm-7\">
                          <div class=\"event-info\">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nibh pharetra, congue lectus at, malesuada augue. Donec tincidunt faucibus lacus. Curabitur vitae euismod lectus. Vestibulum sagittis scelerisque tincidunt. Aliquam sit amet arcu felis. Ut posuere augue vitae velit rhoncus sodales. Vestibulum eleifend accumsan ligula ut ornare. Pellentesque iaculis sed mi dapibus volutpat.</p>
                              <p>Pellentesque cursus sit amet arcu a adipiscing. Curabitur feugiat enim id nibh facilisis tincidunt. Mauris sodales metus sit amet nisi laoreet hendrerit. Pellentesque consequat turpis et metus aliquet, at scelerisque ante bibendum. Duis condimentum quam at quam facilisis, eu sagittis tortor mattis. Aenean consequat iaculis odio id porta. Aenean lacus risus, varius eu orci nec, fringilla suscipit augue. Nunc porttitor lobortis ipsum.</p>
                              
                              </div><!--\\\\video-feed-->
                          </div><!--//event-info-->
                      </div><!--//col-->
              </div><!--row-->
          </div><!--//container-->  
      </section>
\t</div><!--pageContent-->
</div><!--ajaxwrap-->    
<!--=================================
\tLatest blog
\t=================================-->
<section id=\"latest-blog\">
  <div class=\"container\">
    <div class=\"row\">
      <h1 style=\"margin-bottom:10%\">AUTRES ÉVÈNEMENTS</h1>
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <article class=\"blog-post\"> <img src=\"/img/blog/big-concert-P3Z2LEB.jpeg\" alt=\"\"/>
          <div class=\"hover\"> <a href=\"blog-detail.html\">
            <h2>Miguel to Muse: the week in music</h2>
            <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation as...</p>
            <ul>
              <li>Admin</li>
              <li>5 hours ago</li>
              <li>2 Comments</li>
            </ul>
            </a> </div>
        </article>
      </div>
      <!--\\\\blog-post-->
      
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <article class=\"blog-post\"> <img src=\"/img/blog/fetard-signe-astro_1.jpg\" alt=\"\"/>
          <div class=\"hover\"> <a href=\"blog-detail.html\">
            <h2>Kenny Chesney kicks off Austin’s country music</h2>
            <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation as...</p>
            <ul>
              <li>Admin</li>
              <li>5 hours ago</li>
              <li>2 Comments</li>
            </ul>
            </a> </div>
        </article>
      </div>
      <!--\\\\blog-post-->
      
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <article class=\"blog-post\"> <img src=\"/img/blog/weezevent_homepage-1900x1267.jpg\" alt=\"\"/>
          <div class=\"hover\"> <a href=\"blog-detail.html\">
            <h2>CHRISTIAN REY - LIVE MUSIC</h2>
            <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation as...</p>
            <ul>
              <li>Admin</li>
              <li>5 hours ago</li>
              <li>2 Comments</li>
            </ul>
            </a> </div>
        </article>
      </div>
      <!--\\\\blog-post--> 
      
    </div>
  </div>
</section>

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
              <li><a href=\"#\">HOME</a></li>
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

<script defer  src=\"/js/bootstrap.min.js\"></script>
<script defer  src=\"/js/jquery.easing-1.3.pack.js\"></script>
<script defer  src=\"/js/jquery.mCustomScrollbar.concat.min.js\"></script> 
<script defer  src=\"/js/jquery.mousewheel.min.js\"></script> 
<script defer  src=\"/js/jflickrfeed.min.js\"></script> 
<script defer  src=\"/js/jquery.flexslider-min.js\"></script> 
<script defer  src=\"/js/jquery.carouFredSel-6.2.1-packed.js\"></script> 
<script defer  src=\"/js/tweetie.min.js\"></script> 
<script defer  src=\"/js/jquery.prettyPhoto.js\"></script> 
<script defer  src=\"/jPlayer/jquery.jplayer.min.js\"></script> 
<script defer  src=\"/jPlayer/add-on/jplayer.playlist.min.js\"></script> 
<script defer  src=\"/js/jquery.vegas.min.js\"></script> 
<script defer  src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script> 
<script defer  src=\"/js/jquery.calendar-widget.js\"></script> 
<script defer  src=\"/js/isotope.js\"></script>
<script defer  src=\"/js/main.js\"></script>   

<script>/*Place Your Google Analytics code here*/</script>

</body>
</html>



{% endblock %}", "event/details.html.twig", "/home/bob/Bureau/projet_ticket/FINAL/templates/event/details.html.twig");
    }
}
