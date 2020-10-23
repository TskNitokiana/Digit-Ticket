<?php

/* email/generateQr.html.twig */
class __TwigTemplate_8342395b253d6e2b555021e40b63ad15c259fd3b33aeb8977294d6a65efef7ad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/generateQr.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/generateQr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/generateQr.html.twig"));

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

        echo " Index ";
        
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
        echo "Votre ticket:
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/jquery.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/qrcode.js")), "html", null, true);
        echo "\"></script>
<input id=\"text\" type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new Twig_Error_Runtime('Variable "reference" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" style=\"width:80%\" hidden /><br />




<style type=\"text/css\">
            body {
                font-family: sans-serif;
                background-color: #fff;
                color: #535353;
                margin: 5px;
            }
            
            table {
                border-collapse: collapse;
                padding: 0;
                width: 100%;
            }
            
            td {
                padding: 0;
                vertical-align: top;
            }
            
            .ticket-title {
                color: #999;
                font-size: 16px;
                letter-spacing: 0;
                line-height: 16px;
                margin-top: 10px;
            }
            
            .ticket-info {
                color: #535353;
                font-size: 14px;
                line-height: 21px;
            }
            
            .ticket-wrapper {
                border: 2px solid #e62948;
                border-top: 12px solid #e62948;
                margin: 15px auto 0;
                padding-bottom: 15px;
                width: 650px;
            }
            
            .ticket-wrapper:first-child {
                margin-top: 0;
            }
            
            .ticket-table {}
            
            .ticket-table .first-col {
                width: 570px;
            }
            
            .ticket-logo {
                border-left: 2px dashed #ccc;
                text-align: center;
                vertical-align: middle;
            }
            
            .ticket-logo img {
                height: 189px;
                width: 38px;
            }
            
            .ticket-name-div {
                border-bottom: 2px dotted #ccc;
                margin: 0 12px 0 22px;
                padding: 15px 0px 15px 0;
                text-align: left;
            }
            
            .ticket-event-longtitle {
                color: #535353;
                font-size: 22px;
                letter-spacing: -1px;
                line-height: 22px;
            }
            
            .ticket-event-shorttitle {
                color: #535353;
                font-size: 18px;
                letter-spacing: -1px;
                line-height: 22px;
            }
            
            .ticket-event-details {
                border-bottom: 2px dotted #ccc;
                margin: 0 12px 0px 22px;
                padding: 15px 0px 15px 0;
                text-align: left;
            }
            
            .ticket-event-details .first-col {
                text-align: left;
                width: 40%;
            }
            
            .ticket-event-details .second-col {
                text-align: right;
                vertical-align: top;
                width: 60%;
            }
            
            .ticket-venue {
                color: #535353;
                font-size: 14px;
                line-height: 21px;
            }
            
            .ticket-venue:first-child {
                font-size: 16px;
            }
            
            .ticket-ticket-details {
                margin: 0 12px 0px 22px;
                text-align: left;
            }
            
            .ticket-ticket-details .first-col {
                border-right: 2px dashed #ccc;
                padding-top: 4px;
                text-align: left;
                vertical-align: top;
                width: 150px;
            }
            
            .ticket-ticket-details .second-col {
                padding: 4px 0px 0px 32px;
                text-align: left;
                width: 225px;
            }
            
            .ticket-ticket-details .third-col {
                text-align: right;
            }
            
            .ticket-qr-code{
                height: 95px;
                margin-top: 10px;
                width: 95px;
            }
            
            /* Print specific styles */
            @media print {
                a[href]:after, abbr[title]:after {
                    content: \"\";
                }
                
                .ticket-wrapper {
                    width: 16cm;
                }
                
                .ticket-table .first-col {
                    width: 13.8cm;
                }
                
                .ticket-logo img {
                    height: auto;
                    max-width: 100%;
                }
                
                .ticket-ticket-details .first-col {
                    width: 4cm;
                }
                
                .ticket-ticket-details .second-col {
                    width: 6cm;
                }
                
                .ticket-ticket-details .third-col {
                    width: 2.5cm;
                }
                
                @page {
                    margin: 1cm;
                }
            }
        </style>
    </head>
    <body>
        <!-- Start Ticket -->
        <div class=\"ticket-wrapper\">
            <table class=\"ticket-table\">
                <tr>
                    <td class=\"first-col\">
                        <!-- title -->
                        <div class=\"ticket-name-div\">
                            <span class=\"ticket-event-longtitle\">";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 199, $this->source); })()), "title", []), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.ticket-name-div -->
                        <!-- venue details start -->
                        <div class=\"ticket-event-details\">
                            <table>
                                <tr>
                                    <td class=\"first-col\">
                                        <div class=\"ticket-info\">
                                            Le ";
        // line 208
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 208, $this->source); })()), "dateStart", []), "d-m-Y"), "html", null, true);
        echo " <br> de ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 208, $this->source); })()), "dateStart", []), "H:i"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 208, $this->source); })()), "dateEnd", []), "H:i"), "html", null, true);
        echo " 
                                        
                                        </div>
                                        <!-- /.ticket-info -->
                                        <!-- /.ticket-title -->
                                    
                                        <!-- /.ticket-info -->
                                    </td>
                                    <!-- /.first-col -->
                                    <td class=\"second-col\">
                                        <div class=\"ticket-title\">
                                            Lieu:
                                        </div>
                                        <div class=\"ticket-venue\">
                                            ";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 222, $this->source); })()), "location", []), "html", null, true);
        echo "
                                        </div>
                                    
                                        <!-- /.ticket-venue -->
                                    </td>
                                    <!-- /.second-col -->
                                </tr>
                            </table>
                        </div>
                        <!-- /.ticket-event-details -->
                        <!-- ticket details start -->
                        <div class=\"ticket-ticket-details\">
                            <table>
                                <tr>
                                    <td class=\"first-col\">
                                        
                                        <!-- /.ticket-title -->
                                        <div class=\"ticket-info\">
                                            ";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new Twig_Error_Runtime('Variable "reference" does not exist.', 240, $this->source); })()), "html", null, true);
        echo "
                                        </div>
                                        <!-- /.ticket-info -->
                                        <div class=\"ticket-title\">
                                            PRIX
                                        </div>
                                        <!-- /.ticket-title -->
                                        <div class=\"ticket-info\">
                                            ";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 248, $this->source); })()), "price", []), "html", null, true);
        echo "
                                        </div>
                                        <!-- /.ticket-info -->
                                    </td>
                                    <!-- /.first-col -->
                                    <td class=\"second-col\">
                                        <div class=\"ticket-title\">
                                            Commande N° ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new Twig_Error_Runtime('Variable "reference" does not exist.', 255, $this->source); })()), "html", null, true);
        echo "
                                        </div>
                                        <!-- /.ticket-title -->
                                        <div class=\"ticket-info\">

                                          Commandé par ";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 260, $this->source); })()), "username", []), "html", null, true);
        echo "
                                        </div>
                                        <!-- /.ticket-info -->
                                       
                                        <!-- /.ticket-title -->
                                    
                                        <!-- /.ticket-info -->
                                    </td>
                                    <!-- /.second-col -->
                                    <td class=\"third-col\">
                                        <a href=\"#\" target=\"_blank\">
                                        <div id=\"qrcode\" style=\"width:100px; height:100px; margin-top:15px;\"></div>
                                        </a>
                                    </td>
                                    <!-- /.third-col -->
                                </tr>
                            </table>
                        </div>
                        <!-- /.ticket-ticket-details -->
                    </td>
                   
                    <!-- /.ticket-logo -->
                </tr>
            </table>
            <!-- /.ticket-table -->
        </div>














<script type=\"text/javascript\">
var qrcode = new QRCode(document.getElementById(\"qrcode\"), {
\twidth : 100,
\theight : 100
});

function makeCode (){\t\t
\tvar elText = document.getElementById(\"text\");
\t
\tif (!elText.value) {
\t\talert(\"Input a text\");
\t\telText.focus();
\t\treturn;
\t}
\t
\tqrcode.makeCode(elText.value);
}

makeCode();

\$(\"#text\").
\ton(\"blur\", function () {
\t\tmakeCode();
\t}).
\ton(\"keydown\", function (e) {
\t\tif (e.keyCode == 13) {
\t\t\tmakeCode();
\t\t}
\t});
</script>
<br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "email/generateQr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 260,  351 => 255,  341 => 248,  330 => 240,  309 => 222,  288 => 208,  276 => 199,  83 => 9,  79 => 8,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Index {% endblock %}

{% block body %}
Votre ticket:
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('/js/jquery.min.js'))}}\"></script>
        <script type=\"text/javascript\" src=\"{{ absolute_url(asset('/js/qrcode.js'))}}\"></script>
<input id=\"text\" type=\"text\" value=\"{{reference}}\" style=\"width:80%\" hidden /><br />




<style type=\"text/css\">
            body {
                font-family: sans-serif;
                background-color: #fff;
                color: #535353;
                margin: 5px;
            }
            
            table {
                border-collapse: collapse;
                padding: 0;
                width: 100%;
            }
            
            td {
                padding: 0;
                vertical-align: top;
            }
            
            .ticket-title {
                color: #999;
                font-size: 16px;
                letter-spacing: 0;
                line-height: 16px;
                margin-top: 10px;
            }
            
            .ticket-info {
                color: #535353;
                font-size: 14px;
                line-height: 21px;
            }
            
            .ticket-wrapper {
                border: 2px solid #e62948;
                border-top: 12px solid #e62948;
                margin: 15px auto 0;
                padding-bottom: 15px;
                width: 650px;
            }
            
            .ticket-wrapper:first-child {
                margin-top: 0;
            }
            
            .ticket-table {}
            
            .ticket-table .first-col {
                width: 570px;
            }
            
            .ticket-logo {
                border-left: 2px dashed #ccc;
                text-align: center;
                vertical-align: middle;
            }
            
            .ticket-logo img {
                height: 189px;
                width: 38px;
            }
            
            .ticket-name-div {
                border-bottom: 2px dotted #ccc;
                margin: 0 12px 0 22px;
                padding: 15px 0px 15px 0;
                text-align: left;
            }
            
            .ticket-event-longtitle {
                color: #535353;
                font-size: 22px;
                letter-spacing: -1px;
                line-height: 22px;
            }
            
            .ticket-event-shorttitle {
                color: #535353;
                font-size: 18px;
                letter-spacing: -1px;
                line-height: 22px;
            }
            
            .ticket-event-details {
                border-bottom: 2px dotted #ccc;
                margin: 0 12px 0px 22px;
                padding: 15px 0px 15px 0;
                text-align: left;
            }
            
            .ticket-event-details .first-col {
                text-align: left;
                width: 40%;
            }
            
            .ticket-event-details .second-col {
                text-align: right;
                vertical-align: top;
                width: 60%;
            }
            
            .ticket-venue {
                color: #535353;
                font-size: 14px;
                line-height: 21px;
            }
            
            .ticket-venue:first-child {
                font-size: 16px;
            }
            
            .ticket-ticket-details {
                margin: 0 12px 0px 22px;
                text-align: left;
            }
            
            .ticket-ticket-details .first-col {
                border-right: 2px dashed #ccc;
                padding-top: 4px;
                text-align: left;
                vertical-align: top;
                width: 150px;
            }
            
            .ticket-ticket-details .second-col {
                padding: 4px 0px 0px 32px;
                text-align: left;
                width: 225px;
            }
            
            .ticket-ticket-details .third-col {
                text-align: right;
            }
            
            .ticket-qr-code{
                height: 95px;
                margin-top: 10px;
                width: 95px;
            }
            
            /* Print specific styles */
            @media print {
                a[href]:after, abbr[title]:after {
                    content: \"\";
                }
                
                .ticket-wrapper {
                    width: 16cm;
                }
                
                .ticket-table .first-col {
                    width: 13.8cm;
                }
                
                .ticket-logo img {
                    height: auto;
                    max-width: 100%;
                }
                
                .ticket-ticket-details .first-col {
                    width: 4cm;
                }
                
                .ticket-ticket-details .second-col {
                    width: 6cm;
                }
                
                .ticket-ticket-details .third-col {
                    width: 2.5cm;
                }
                
                @page {
                    margin: 1cm;
                }
            }
        </style>
    </head>
    <body>
        <!-- Start Ticket -->
        <div class=\"ticket-wrapper\">
            <table class=\"ticket-table\">
                <tr>
                    <td class=\"first-col\">
                        <!-- title -->
                        <div class=\"ticket-name-div\">
                            <span class=\"ticket-event-longtitle\">{{event.title}}</span>
                        </div>
                        <!-- /.ticket-name-div -->
                        <!-- venue details start -->
                        <div class=\"ticket-event-details\">
                            <table>
                                <tr>
                                    <td class=\"first-col\">
                                        <div class=\"ticket-info\">
                                            Le {{ event.dateStart|date('d-m-Y') }} <br> de {{ event.dateStart|date('H:i') }} à {{ event.dateEnd|date('H:i') }} 
                                        
                                        </div>
                                        <!-- /.ticket-info -->
                                        <!-- /.ticket-title -->
                                    
                                        <!-- /.ticket-info -->
                                    </td>
                                    <!-- /.first-col -->
                                    <td class=\"second-col\">
                                        <div class=\"ticket-title\">
                                            Lieu:
                                        </div>
                                        <div class=\"ticket-venue\">
                                            {{event.location}}
                                        </div>
                                    
                                        <!-- /.ticket-venue -->
                                    </td>
                                    <!-- /.second-col -->
                                </tr>
                            </table>
                        </div>
                        <!-- /.ticket-event-details -->
                        <!-- ticket details start -->
                        <div class=\"ticket-ticket-details\">
                            <table>
                                <tr>
                                    <td class=\"first-col\">
                                        
                                        <!-- /.ticket-title -->
                                        <div class=\"ticket-info\">
                                            {{reference}}
                                        </div>
                                        <!-- /.ticket-info -->
                                        <div class=\"ticket-title\">
                                            PRIX
                                        </div>
                                        <!-- /.ticket-title -->
                                        <div class=\"ticket-info\">
                                            {{event.price}}
                                        </div>
                                        <!-- /.ticket-info -->
                                    </td>
                                    <!-- /.first-col -->
                                    <td class=\"second-col\">
                                        <div class=\"ticket-title\">
                                            Commande N° {{reference}}
                                        </div>
                                        <!-- /.ticket-title -->
                                        <div class=\"ticket-info\">

                                          Commandé par {{user.username}}
                                        </div>
                                        <!-- /.ticket-info -->
                                       
                                        <!-- /.ticket-title -->
                                    
                                        <!-- /.ticket-info -->
                                    </td>
                                    <!-- /.second-col -->
                                    <td class=\"third-col\">
                                        <a href=\"#\" target=\"_blank\">
                                        <div id=\"qrcode\" style=\"width:100px; height:100px; margin-top:15px;\"></div>
                                        </a>
                                    </td>
                                    <!-- /.third-col -->
                                </tr>
                            </table>
                        </div>
                        <!-- /.ticket-ticket-details -->
                    </td>
                   
                    <!-- /.ticket-logo -->
                </tr>
            </table>
            <!-- /.ticket-table -->
        </div>














<script type=\"text/javascript\">
var qrcode = new QRCode(document.getElementById(\"qrcode\"), {
\twidth : 100,
\theight : 100
});

function makeCode (){\t\t
\tvar elText = document.getElementById(\"text\");
\t
\tif (!elText.value) {
\t\talert(\"Input a text\");
\t\telText.focus();
\t\treturn;
\t}
\t
\tqrcode.makeCode(elText.value);
}

makeCode();

\$(\"#text\").
\ton(\"blur\", function () {
\t\tmakeCode();
\t}).
\ton(\"keydown\", function (e) {
\t\tif (e.keyCode == 13) {
\t\t\tmakeCode();
\t\t}
\t});
</script>
<br>

{% endblock %}", "email/generateQr.html.twig", "/home/bob/Bureau/projet_ticket/FINAL/templates/email/generateQr.html.twig");
    }
}
