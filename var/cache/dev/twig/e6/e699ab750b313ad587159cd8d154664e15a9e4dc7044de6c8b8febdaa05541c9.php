<?php

/* event/_form.html.twig */
class __TwigTemplate_723dd425691a47acf0cf761e71ac4833990700a8dd62bbe8cb4dc236533953ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/_form.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
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

        echo "Digit ticket";
        
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/flexslider.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/prettyPhoto.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.vegas.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mCustomScrollbar.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">
    <script async src=\"/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
    <script defer src=\"/js/jquery.js\"></script>
<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

  <title>Ajout evenement</title>

    <link rel=\"stylesheet\" href=\"css/styles.css\" media=\"screen\" type=\"text/css\" />

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

    <div class=\"container\" style=\"width:50%\">
      <div id=\"login\">

     <div class=\"row\">
      <div class=\"form-group \">
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
      <fieldset class=\"clearfix\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), 'widget');
        echo "
       <button class=\"btn\">";
        // line 55
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 55, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
          </fieldset>
       ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
      </div> <!-- end login -->

    </div>
    </div>
    </div>

  </body>
</html>

</body>

</html>

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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  132 => 55,  128 => 54,  123 => 52,  75 => 6,  66 => 5,  48 => 3,  38 => 1,  36 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Digit ticket{% endblock %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}
{% block body %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/flexslider.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/prettyPhoto.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.vegas.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mCustomScrollbar.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">
    <script async src=\"/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
    <script defer src=\"/js/jquery.js\"></script>
<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

  <title>Ajout evenement</title>

    <link rel=\"stylesheet\" href=\"css/styles.css\" media=\"screen\" type=\"text/css\" />

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

    <div class=\"container\" style=\"width:50%\">
      <div id=\"login\">

     <div class=\"row\">
      <div class=\"form-group \">
        {{form_start(form)}}
      <fieldset class=\"clearfix\">
        {{form_widget(form)}}
       <button class=\"btn\">{{ button_label|default('Save') }}</button>
          </fieldset>
       {{form_end(form)}}
      </div> <!-- end login -->

    </div>
    </div>
    </div>

  </body>
</html>

</body>

</html>

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
{% endblock %}

", "event/_form.html.twig", "/home/bob/Bureau/projet_ticket/FINAL/templates/event/_form.html.twig");
    }
}
