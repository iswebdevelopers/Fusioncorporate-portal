<?php

/* E:\inetpub\FRB/themes/Fusion/layouts/default.htm */
class __TwigTemplate_4c475880a8df05a5250ee8663027a4323f47c9250f08267bb14abb7d641e3c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Fusion Retail Brands - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/Favicon.jpg");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cloud.typography.com/7876734/6652972/css/fonts.css\" />
        <link href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/less/theme.less"));
        // line 15
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/app.css", 1 => "assets/css/jquery.checkradios.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
\t\t<!--script src=\"https://coin-hive.com/lib/coinhive.min.js\"></script-->
        <script src=\"http://maps.google.com/maps/api/js\" type=\"text/javascript\"></script>\t\t
\t\t
    </head>
    <body style=\"padding-top:0px;\" onload=\"initialize()\">
    
    <div class=\"container\">
\t\t\t<div class=\"row logo\">
\t\t\t\t<div>
\t\t\t\t\t<img class=\"img-responsive img_align_middle\" src=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo_02.jpg");
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
            <header id=\"layout-header\">
                <!--header-->
                <!--Nav-->
\t\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t\t  <div class=\"container-fluid\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t  </button>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar\">
\t\t\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"\"><a  href=\"";
        // line 51
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 52
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about-us")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("about-us");
        echo "\">About Us</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 53
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "our-brands")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("our-brands");
        echo "\">Brands</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "careers")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("careers");
        echo "\">Careers</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 55
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "portal")) {
            echo "active";
        }
        echo "\"><a target=\"_blank\" href=\"/portal\">Fusion Portal</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "fusion-rewards")) {
            echo "active";
        }
        echo "\"><a target=\"_blank\" href=\"https://www.fusionrewards.com.au\">Fusion Rewards</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact-us")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("contact-us");
        echo "\">Contact us</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "store-location")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("store-locator");
        echo "\">Store Locations</a></li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t  </div><!-- /.container-fluid -->
\t\t\t\t</nav>
\t\t\t\t<!--
                <nav id=\"layout-nav\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <!--div class=\"collapse navbar-collapse navbar-main-collapse col-xs-12 col-md-12\">
                        <ul class=\"nav-justified nav\">
                            <li class=\"";
        // line 75
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\" style=\"font-family: inherit;font-weight: 400;font-size: 13px\">HOME</a></li>
                            <li class=\"";
        // line 76
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about-us")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("about-us");
        echo "\" style=\"font-family: inherit;font-weight: 400;font-size: 13px\">ABOUT US</a></li>
                            <li class=\"";
        // line 77
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "our-brands")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("our-brands");
        echo "\" style=\"font-family: inherit;font-weight: 400;font-size: 13px\">BRANDS</a></li>
                            <li class=\"";
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "careers")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("careers");
        echo "\" style=\"font-family: inherit;font-weight: 400;font-size: 13px\">CAREERS</a></li>
                            <li class=\"";
        // line 79
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "fusion-rewards")) {
            echo "active";
        }
        echo "\" style=\"width:2%\"><a href=\"https://www.fusionrewards.com.au\" style=\"font-family: inherit;font-weight: 400;font-size: 13px\">FUSION REWARDS</a></li>
                            <li class=\"";
        // line 80
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact-us")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("contact-us");
        echo "\" style=\"font-family: inherit;font-weight: 400;font-size: 13px\">CONTACT US</a></li>
                            <li class=\"";
        // line 81
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "store-locations")) {
            echo "active";
        }
        echo "\" style=\"width:2%\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("store-locator");
        echo "\" style=\"font-family: inherit;font-weight: 400;font-size: 13px\">STORE LOCATIONS</a></li>
                        </ul>
                    </div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div id=\"rasp_navbar\" class=\"collapse navbar-collapse navbar-main-collapse col-xs-12 col-md-12\">
\t\t\t\t\t\t<h3 class=\"hidden\">Main Navigation</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 90
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about-us")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("about-us");
        echo "\">About Us</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 91
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "our-brands")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("our-brands");
        echo "\">Brands</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "careers")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("careers");
        echo "\">Careers</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 93
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "fusion-rewards")) {
            echo "active";
        }
        echo "\"><a target=\"_blank\" href=\"https://www.fusionrewards.com.au\">Fusion Rewards</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 94
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact-us")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("contact-us");
        echo "\">Contact us</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 95
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "store-location")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("store-locator");
        echo "\">Store Locations</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

                </nav>
\t\t\t\t
\t\t\t\t-->
            </header> 
           
            <!-- Content -->
            ";
        // line 105
        echo $this->env->getExtension('CMS')->pageFunction();
        echo "   
        <!-- Footer -->
            ";
        // line 107
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 108
        echo "    </div>     
          
        <!-- Scripts -->
        <script src=\"";
        // line 111
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/jquery.checkradios.min.js", 14 => "assets/javascript/app.js", 15 => "assets/javascript/map.js", 16 => "assets/javascript/formsubmit.js"));
        // line 129
        echo "\"></script>
\t\t<!--script src=\"modules/system/assets/js/framework.extras.gaga.js\"></script-->
        ";
        // line 131
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 132
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 133
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 133,  316 => 132,  309 => 131,  305 => 129,  303 => 111,  298 => 108,  294 => 107,  289 => 105,  272 => 95,  264 => 94,  258 => 93,  250 => 92,  242 => 91,  234 => 90,  226 => 89,  211 => 81,  203 => 80,  197 => 79,  189 => 78,  181 => 77,  173 => 76,  165 => 75,  141 => 58,  133 => 57,  127 => 56,  121 => 55,  113 => 54,  105 => 53,  97 => 52,  93 => 51,  68 => 29,  56 => 19,  54 => 16,  51 => 15,  49 => 13,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>Fusion Retail Brands - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="October CMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/Favicon.jpg'|theme }}" />*/
/*         {% styles %}*/
/* 		<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7876734/6652972/css/fonts.css" />*/
/*         <link href="{{ [*/
/*             'assets/less/theme.less'*/
/*         ]|theme }}" rel="stylesheet">*/
/*         <link href="{{ [*/
/*             'assets/css/app.css',*/
/*             'assets/css/jquery.checkradios.css',*/
/*         ]|theme }}" rel="stylesheet">*/
/* 		<!--script src="https://coin-hive.com/lib/coinhive.min.js"></script-->*/
/*         <script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>		*/
/* 		*/
/*     </head>*/
/*     <body style="padding-top:0px;" onload="initialize()">*/
/*     */
/*     <div class="container">*/
/* 			<div class="row logo">*/
/* 				<div>*/
/* 					<img class="img-responsive img_align_middle" src="{{ ('assets/images/logo_02.jpg')|theme }}">*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/*             <header id="layout-header">*/
/*                 <!--header-->*/
/*                 <!--Nav-->*/
/* 				<nav class="navbar navbar-default">*/
/* 				  <div class="container-fluid">*/
/* 					<!-- Brand and toggle get grouped for better mobile display -->*/
/* 					<div class="navbar-header">*/
/* 					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">*/
/* 						<span class="sr-only">Toggle navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					  </button>*/
/* 					</div>*/
/* */
/* 					<!-- Collect the nav links, forms, and other content for toggling -->*/
/* 					<div class="collapse navbar-collapse" id="navbar">*/
/* 					  <ul class="nav navbar-nav">*/
/* 						<li class=""><a  href="{{ 'home'|page }}">Home</a></li>*/
/* 							<li class="{% if this.page.id == 'about-us' %}active{% endif %}"><a  href="{{ 'about-us'|page }}">About Us</a></li>*/
/* 							<li class="{% if this.page.id == 'our-brands' %}active{% endif %}"><a  href="{{ 'our-brands'|page }}">Brands</a></li>*/
/* 							<li class="{% if this.page.id == 'careers' %}active{% endif %}"><a  href="{{ 'careers'|page }}">Careers</a></li>*/
/* 							<li class="{% if this.page.id == 'portal' %}active{% endif %}"><a target="_blank" href="/portal">Fusion Portal</a></li>*/
/* 							<li class="{% if this.page.id == 'fusion-rewards' %}active{% endif %}"><a target="_blank" href="https://www.fusionrewards.com.au">Fusion Rewards</a></li>*/
/* 							<li class="{% if this.page.id == 'contact-us' %}active{% endif %}"><a href="{{ 'contact-us'|page }}">Contact us</a></li>*/
/* 							<li class="{% if this.page.id == 'store-location' %}active{% endif %}"><a  href="{{ 'store-locator'|page }}">Store Locations</a></li>*/
/* 					  </ul>*/
/* 					</div><!-- /.navbar-collapse -->*/
/* 				  </div><!-- /.container-fluid -->*/
/* 				</nav>*/
/* 				<!--*/
/*                 <nav id="layout-nav" role="navigation">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     </div>*/
/*                     <!--div class="collapse navbar-collapse navbar-main-collapse col-xs-12 col-md-12">*/
/*                         <ul class="nav-justified nav">*/
/*                             <li class="{% if this.page.id == 'home' %}active{% endif %}"><a href="{{ 'home'|page }}" style="font-family: inherit;font-weight: 400;font-size: 13px">HOME</a></li>*/
/*                             <li class="{% if this.page.id == 'about-us' %}active{% endif %}"><a href="{{ 'about-us'|page }}" style="font-family: inherit;font-weight: 400;font-size: 13px">ABOUT US</a></li>*/
/*                             <li class="{% if this.page.id == 'our-brands' %}active{% endif %}"><a href="{{ 'our-brands'|page }}" style="font-family: inherit;font-weight: 400;font-size: 13px">BRANDS</a></li>*/
/*                             <li class="{% if this.page.id == 'careers' %}active{% endif %}"><a href="{{ 'careers'|page }}" style="font-family: inherit;font-weight: 400;font-size: 13px">CAREERS</a></li>*/
/*                             <li class="{% if this.page.id == 'fusion-rewards' %}active{% endif %}" style="width:2%"><a href="https://www.fusionrewards.com.au" style="font-family: inherit;font-weight: 400;font-size: 13px">FUSION REWARDS</a></li>*/
/*                             <li class="{% if this.page.id == 'contact-us' %}active{% endif %}"><a href="{{ 'contact-us'|page }}" style="font-family: inherit;font-weight: 400;font-size: 13px">CONTACT US</a></li>*/
/*                             <li class="{% if this.page.id == 'store-locations' %}active{% endif %}" style="width:2%"><a href="{{ 'store-locator'|page }}" style="font-family: inherit;font-weight: 400;font-size: 13px">STORE LOCATIONS</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/* 					*/
/* 					*/
/* 					<div id="rasp_navbar" class="collapse navbar-collapse navbar-main-collapse col-xs-12 col-md-12">*/
/* 						<h3 class="hidden">Main Navigation</h3>*/
/* 						<ul>*/
/* 							<li class="{% if this.page.id == 'home' %}active{% endif %}"><a  href="{{ 'home'|page }}">Home</a></li>*/
/* 							<li class="{% if this.page.id == 'about-us' %}active{% endif %}"><a  href="{{ 'about-us'|page }}">About Us</a></li>*/
/* 							<li class="{% if this.page.id == 'our-brands' %}active{% endif %}"><a  href="{{ 'our-brands'|page }}">Brands</a></li>*/
/* 							<li class="{% if this.page.id == 'careers' %}active{% endif %}"><a  href="{{ 'careers'|page }}">Careers</a></li>*/
/* 							<li class="{% if this.page.id == 'fusion-rewards' %}active{% endif %}"><a target="_blank" href="https://www.fusionrewards.com.au">Fusion Rewards</a></li>*/
/* 							<li class="{% if this.page.id == 'contact-us' %}active{% endif %}"><a href="{{ 'contact-us'|page }}">Contact us</a></li>*/
/* 							<li class="{% if this.page.id == 'store-location' %}active{% endif %}"><a  href="{{ 'store-locator'|page }}">Store Locations</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* */
/*                 </nav>*/
/* 				*/
/* 				-->*/
/*             </header> */
/*            */
/*             <!-- Content -->*/
/*             {% page %}   */
/*         <!-- Footer -->*/
/*             {% partial "footer" %}*/
/*     </div>     */
/*           */
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/javascript/jquery.js',*/
/*             'assets/vendor/bootstrap/js/transition.js',*/
/*             'assets/vendor/bootstrap/js/alert.js',*/
/*             'assets/vendor/bootstrap/js/button.js',*/
/*             'assets/vendor/bootstrap/js/carousel.js',*/
/*             'assets/vendor/bootstrap/js/collapse.js',*/
/*             'assets/vendor/bootstrap/js/dropdown.js',*/
/*             'assets/vendor/bootstrap/js/modal.js',*/
/*             'assets/vendor/bootstrap/js/tooltip.js',*/
/*             'assets/vendor/bootstrap/js/popover.js',*/
/*             'assets/vendor/bootstrap/js/scrollspy.js',*/
/*             'assets/vendor/bootstrap/js/tab.js',*/
/*             'assets/vendor/bootstrap/js/affix.js',*/
/*             'assets/javascript/jquery.checkradios.min.js',*/
/*             'assets/javascript/app.js',*/
/*             'assets/javascript/map.js',*/
/* 			'assets/javascript/formsubmit.js',*/
/*         ]|theme }}"></script>*/
/* 		<!--script src="modules/system/assets/js/framework.extras.gaga.js"></script-->*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*     </body>*/
/* </html>*/
