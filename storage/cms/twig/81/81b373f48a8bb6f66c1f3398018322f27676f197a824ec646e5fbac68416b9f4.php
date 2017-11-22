<?php

/* E:\inetpub\FRB/themes/Fusion/pages/about-us.htm */
class __TwigTemplate_88f18c8d6738d4b6ccc7c77930644de7b8d27f0bd4217427226b6b0730569ecb extends Twig_Template
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
        echo "<div class=\"row content_min_height\">
    <div class=\"about-us\">
    \t<img class=\"img-responsive img_align_middle\" src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/about-us.png");
        echo "\"/>
\t    <div class=\"col-md-6 col-md-offset-3\">
\t    \t<h3>WELCOME TO FUSION</h3>
\t    \t<p> Drawing on over 150 years of history and experience, Fusion Retail Brands is the custodian of some of Australia’s most iconic footwear and apparel brands - Diana Ferrari, Williams, Mathers and Colorado. Our brands are landmarks of the Australian retail landscape, renowned for their quality products and ongoing commitment to customer satisfaction.</p> 
\t\t\t<p>Dedicated to growth, excellence and evolution, we employ over 1,500 people in over 190 stores across Australia. Our success is predicated on connecting with consumers in authentic and unexpected ways, while remaining true to the rich heritage of each of our brands.</p> 
\t\t\t<!-- <p class=\"top10\"><a href=\"\" class=\"btn btn-primary\" role=\"button\">Shop Now</a></p> -->
\t    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/pages/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div class="row content_min_height">*/
/*     <div class="about-us">*/
/*     	<img class="img-responsive img_align_middle" src="{{ ('assets/images/about-us.png')|theme }}"/>*/
/* 	    <div class="col-md-6 col-md-offset-3">*/
/* 	    	<h3>WELCOME TO FUSION</h3>*/
/* 	    	<p> Drawing on over 150 years of history and experience, Fusion Retail Brands is the custodian of some of Australia’s most iconic footwear and apparel brands - Diana Ferrari, Williams, Mathers and Colorado. Our brands are landmarks of the Australian retail landscape, renowned for their quality products and ongoing commitment to customer satisfaction.</p> */
/* 			<p>Dedicated to growth, excellence and evolution, we employ over 1,500 people in over 190 stores across Australia. Our success is predicated on connecting with consumers in authentic and unexpected ways, while remaining true to the rich heritage of each of our brands.</p> */
/* 			<!-- <p class="top10"><a href="" class="btn btn-primary" role="button">Shop Now</a></p> -->*/
/* 	    </div>*/
/*     </div>*/
/* </div>*/
