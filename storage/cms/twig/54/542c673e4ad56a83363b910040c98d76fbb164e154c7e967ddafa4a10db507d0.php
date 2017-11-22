<?php

/* E:\inetpub\FRB/themes/Fusion/partials/footer.htm */
class __TwigTemplate_31296134d1a88e32e992c830b044c16073dff9ac8ffdee0e51e2ee50ea09f461 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFilter("contact-us");
        echo "\">Contact Us</a></p>
\t\t\t\t<p><a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("store-locator");
        echo "\">Store Locations</a></p>
\t\t\t\t<p><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("careers");
        echo "\">Careers</a></p>
\t    \t</div>
\t    \t<div class=\"col-md-4 text-center\">
\t    \t\t<h6 style=\"font-weight: bold;\">TERMS &amp; CONDITIONS</h6>
\t    \t\t<p><a target=\"_blank\" href=\"https://www.fusionrewards.com.au\">Fusion Rewards Program</a></p>
\t   \t\t\t<p><a href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->pageFilter("terms");
        echo "\">Website Terms Of Use</a></p>
\t    \t\t<p><a href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->pageFilter("privacy");
        echo "\">Privacy Policy</a></p>
\t    \t</div>\t    \t
\t    </div>  
    </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  42 => 13,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="footer clearfix top15 col-xs-12 col-sm-12 col-md-12">*/
/* 		<div class="col-md-8 col-md-offset-3">*/
/* 	    	<div class="col-md-4 text-center">*/
/* 				<h6  style="font-weight: bold;">ABOUT US</h6>*/
/* 				<p><a href="{{ 'contact-us'|page }}">Contact Us</a></p>*/
/* 				<p><a href="{{ 'store-locator'|page }}">Store Locations</a></p>*/
/* 				<p><a href="{{ 'careers'|page }}">Careers</a></p>*/
/* 	    	</div>*/
/* 	    	<div class="col-md-4 text-center">*/
/* 	    		<h6 style="font-weight: bold;">TERMS &amp; CONDITIONS</h6>*/
/* 	    		<p><a target="_blank" href="https://www.fusionrewards.com.au">Fusion Rewards Program</a></p>*/
/* 	   			<p><a href="{{ 'terms'|page }}">Website Terms Of Use</a></p>*/
/* 	    		<p><a href="{{ 'privacy'|page }}">Privacy Policy</a></p>*/
/* 	    	</div>	    	*/
/* 	    </div>  */
/*     </div> */
/* </div>*/
