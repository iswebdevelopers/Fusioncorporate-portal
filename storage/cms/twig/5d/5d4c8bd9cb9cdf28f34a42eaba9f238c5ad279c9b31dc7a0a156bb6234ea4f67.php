<?php

/* C:\development\frb/themes/Fusion/layouts/default.htm */
class __TwigTemplate_25303f6b878450ca938a446d6b921bbbcd543c6776d81f23d7cb3a422e9d0aa7 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/less/theme.less"));
        // line 14
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/app.css", 1 => "assets/css/jquery.checkradios.css"));
        // line 18
        echo "\" rel=\"stylesheet\">
        <script src=\"http://maps.google.com/maps/api/js\" type=\"text/javascript\"></script>
    </head>
    <body style=\"padding-top:0px;\" onload=\"initialize()\">
    
    <div class=\"container\">
        <div class=\"row col-xs-12 col-md-12\">
            <header id=\"layout-header\">
                <!--header-->
                <img class=\"img-responsive\" src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\"/>
                <!--Nav-->
                <nav id=\"layout-nav\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse col-xs-12 col-md-12\">
                        <ul class=\"nav-justified nav\">
                            <li class=\"";
        // line 40
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">HOME</a></li>
                            <li class=\"";
        // line 41
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about-us")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("about-us");
        echo "\">ABOUT US</a></li>
                            <li class=\"";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "our-brands")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("our-brands");
        echo "\">BRANDS</a></li>
                            <li class=\"";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "careers")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("careers");
        echo "\">CAREERS</a></li>
                            <li class=\"";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "fusion-rewards")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("fusion-rewards");
        echo "\">FUSION REWARDS</a></li>
                            <li class=\"";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact-us")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("contact-us");
        echo "\">CONTACT US</a></li>
                            <li class=\"";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "store-locations")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("store-locator");
        echo "\">STORE LOCATIONS</a></li>
                        </ul>
                    </div>
                </nav>
            </header> 
        </div>    
            <!-- Content -->
            ";
        // line 53
        echo $this->env->getExtension('CMS')->pageFunction();
        echo "   
        <!-- Footer -->
            ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "    </div>     
          
        <!-- Scripts -->
        <script src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/jquery.checkradios.min.js", 14 => "assets/javascript/app.js", 15 => "assets/javascript/map.js"));
        // line 76
        echo "\"></script>
        ";
        // line 77
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 78
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 79
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\development\\frb/themes/Fusion/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 79,  169 => 78,  162 => 77,  159 => 76,  157 => 59,  152 => 56,  148 => 55,  143 => 53,  129 => 46,  121 => 45,  113 => 44,  105 => 43,  97 => 42,  89 => 41,  81 => 40,  65 => 27,  54 => 18,  52 => 15,  49 => 14,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/favicon.ico'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/less/theme.less'*/
/*         ]|theme }}" rel="stylesheet">*/
/*         <link href="{{ [*/
/*             'assets/css/app.css',*/
/*             'assets/css/jquery.checkradios.css',*/
/*         ]|theme }}" rel="stylesheet">*/
/*         <script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>*/
/*     </head>*/
/*     <body style="padding-top:0px;" onload="initialize()">*/
/*     */
/*     <div class="container">*/
/*         <div class="row col-xs-12 col-md-12">*/
/*             <header id="layout-header">*/
/*                 <!--header-->*/
/*                 <img class="img-responsive" src="{{ ('assets/images/logo.png')|theme }}"/>*/
/*                 <!--Nav-->*/
/*                 <nav id="layout-nav" role="navigation">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="collapse navbar-collapse navbar-main-collapse col-xs-12 col-md-12">*/
/*                         <ul class="nav-justified nav">*/
/*                             <li class="{% if this.page.id == 'home' %}active{% endif %}"><a href="{{ 'home'|page }}">HOME</a></li>*/
/*                             <li class="{% if this.page.id == 'about-us' %}active{% endif %}"><a href="{{ 'about-us'|page }}">ABOUT US</a></li>*/
/*                             <li class="{% if this.page.id == 'our-brands' %}active{% endif %}"><a href="{{ 'our-brands'|page }}">BRANDS</a></li>*/
/*                             <li class="{% if this.page.id == 'careers' %}active{% endif %}"><a href="{{ 'careers'|page }}">CAREERS</a></li>*/
/*                             <li class="{% if this.page.id == 'fusion-rewards' %}active{% endif %}"><a href="{{ 'fusion-rewards'|page }}">FUSION REWARDS</a></li>*/
/*                             <li class="{% if this.page.id == 'contact-us' %}active{% endif %}"><a href="{{ 'contact-us'|page }}">CONTACT US</a></li>*/
/*                             <li class="{% if this.page.id == 'store-locations' %}active{% endif %}"><a href="{{ 'store-locator'|page }}">STORE LOCATIONS</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header> */
/*         </div>    */
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
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*     </body>*/
/* </html>*/
