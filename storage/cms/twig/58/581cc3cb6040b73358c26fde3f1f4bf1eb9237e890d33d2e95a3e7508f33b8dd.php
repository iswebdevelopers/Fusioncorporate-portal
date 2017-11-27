<?php

/* C:\development\frb/themes/Fusion/partials/footer.htm */
class __TwigTemplate_b9577c2fe1d9f5882b83ee9271e918bc5acc728f66d55207781e82bce0f2c5c3 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"footer clearfix top15 col-xs-12 col-sm-12 col-md-12\">
\t\t<div class=\"col-md-8 col-md-offset-3\">
\t    \t<div class=\"col-md-4 text-center\">
\t\t\t\t<h6  style=\"font-weight: bold;\">ABOUT US</h6>
\t\t\t\t<p><a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact-us");
        echo "\">Contact Us</a></p>
\t\t\t\t<p><a href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("store-locator");
        echo "\">Store Locations</a></p>
\t\t\t\t<p><a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("careers");
        echo "\">Careers</a></p>
\t    \t</div>
\t    \t<div class=\"col-md-4 text-center\">
\t    \t\t<h6 style=\"font-weight: bold;\">TERMS &amp; CONDITIONS</h6>
\t    \t\t<p><a target=\"_blank\" href=\"https://www.fusionrewards.com.au\">Fusion Rewards Program</a></p>
\t   \t\t\t<p><a href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("terms");
        echo "\">Website Terms Of Use</a></p>
\t    \t\t<p><a href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("privacy");
        echo "\">Privacy Policy</a></p>
\t    \t</div>\t    \t
\t    </div>  
    </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\development\\frb/themes/Fusion/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  42 => 13,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
\t<div class=\"footer clearfix top15 col-xs-12 col-sm-12 col-md-12\">
\t\t<div class=\"col-md-8 col-md-offset-3\">
\t    \t<div class=\"col-md-4 text-center\">
\t\t\t\t<h6  style=\"font-weight: bold;\">ABOUT US</h6>
\t\t\t\t<p><a href=\"{{ 'contact-us'|page }}\">Contact Us</a></p>
\t\t\t\t<p><a href=\"{{ 'store-locator'|page }}\">Store Locations</a></p>
\t\t\t\t<p><a href=\"{{ 'careers'|page }}\">Careers</a></p>
\t    \t</div>
\t    \t<div class=\"col-md-4 text-center\">
\t    \t\t<h6 style=\"font-weight: bold;\">TERMS &amp; CONDITIONS</h6>
\t    \t\t<p><a target=\"_blank\" href=\"https://www.fusionrewards.com.au\">Fusion Rewards Program</a></p>
\t   \t\t\t<p><a href=\"{{ 'terms'|page }}\">Website Terms Of Use</a></p>
\t    \t\t<p><a href=\"{{ 'privacy'|page }}\">Privacy Policy</a></p>
\t    \t</div>\t    \t
\t    </div>  
    </div> 
</div>", "C:\\development\\frb/themes/Fusion/partials/footer.htm", "");
    }
}
