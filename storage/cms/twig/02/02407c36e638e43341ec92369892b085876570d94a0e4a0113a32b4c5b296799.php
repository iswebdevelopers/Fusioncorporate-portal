<?php

/* E:\inetpub\FRB/themes/Fusion/pages/home1.htm */
class __TwigTemplate_0d3eaa64fbd5f8d9d1053907f648b61bff94722eda7964cb1ee87e9a98ef093d extends Twig_Template
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
        echo "<div class=\"row bg_gray\">
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <img class=\"img-responsive img_align_middle\" src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/welcome.png");
        echo "\">
            </div>
            <div class=\"col-xs-12 col-sm-7 col-md-7 text-center\">
                <h2>WELCOME TO FUSION</h2>
                <p>Drawing on over 150 years of history and experience, our brands – Diana Ferrari, Mathers, Williams and Colorado – are landmarks of the Australian retail landscape, renowned for their quality products and rich heritage. </p>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("about-us");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-primary\">Find out more</button></a>
            </div>
    </div>
\t
\t
    <div class=\"row col-xs-12 col-md-12 top15\">    
        <div class=\"col-sm-6 col-md-6\" style = \"border-right:1px solid #222;\">
            <h3>JOIN FUSION REWARDS1</h3>
            <p class=\"col-xs-6 col-md-6\" style=\"    padding-left: 1px;\">Earn points and enjoy amazing rewards every time you shop with your favourite Fusion Brands. The more you shop, the better your rewards! Track your points
            and start enjoying the benefits!</p>
            <img src=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/fusionrewards.jpg");
        echo "\" alt=\"Fusionrewards\"/>
            <a href =\"https://www.fusionrewards.com.au\"><button type=\"button\" class=\"btn btn-md btn-primary\">Join Now</button></a>
        </div>
        <div class=\"col-sm-6 col-md-6\">
            <h3>LOG IN TO FUSION REWARDS</h3>
            
            <form class=\"form-horizontal top5\" name=\"FusionService\" action=\"#\">
              <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" >Card No/Email</label>
                <div class=\"col-sm-7\">
                  <!--input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Card No/Email\"-->
\t\t\t\t  <input name=\"ctl00\$txtCardNumber\" id=\"ctl00_txtCardNumber\" type=\"text\" class=\"form-control\" onclick=\"this.value='';\" onfocus=\"this.select()\" onblur=\"this.value=!this.value?'Username':this.value;\" placeholder=\"Card No/Email\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-3 control-label\" >Password</label>
                <div class=\"col-sm-7\">
                  <!--input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"-->
\t\t\t\t  <input name=\"ctl00\$txtCardNumber\" id=\"ctl00_txtPassword\" type=\"password\" class=\"form-control\" onclick=\"this.value='';\" onfocus=\"this.select()\" onblur=\"this.value=!this.value?'password':this.value;\" placeholder=\"Password\">
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-4\">
                  <button type=\"submit\" class=\"btn btn-primary\" id=\"button1\">Go</button>
                </div>
\t\t\t\t<div id=\"DivResult\"></div>
              </div>
            </form>
        </div>
    </div>  




\t
    <div class=\"row row col-xs-12 col-md-12 top15\">
        <div class=\"col-xs-12 col-md-12\" style=\"border-top:1px solid #222;\">
            <h3>OUR BRANDS</h3>
            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/diana-ferrari.png");
        echo "\" alt=\"Diana Ferrari\" />
                <div class=\"caption text-center\">
                    <h3 style=\"margin-top:5px\"><img src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/DianaFerrariLogo_130x20px.jpg");
        echo "\" alt=\"Diana Ferrari\" width=\"130px\" height=\"20px\" /></h3>
                    <p>
                        <a href=\"https://www.dianaferrari.com.au\" target=\"_blank\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>

            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 67
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/mathers.png");
        echo "\" alt=\"Mathers\" />
                <div class=\"caption text-center\">
                    <h3 style=\"margin-top:5px\"><img src=\"";
        // line 69
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/MathersLogo_130x20px.jpg");
        echo "\" alt=\"Mathers\" width=\"130px\" height=\"20px\" /></h3>
                    <p>
                        <a href=\"https://www.mathers.com.au\" target=\"_blank\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>

            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 77
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/williams.jpg");
        echo "\" alt=\"Williams Shoes\" />
                <div class=\"caption text-center\">
                    <h3 style=\"margin-top:5px\"><img src=\"";
        // line 79
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/WilliamsLogo_130x20px.jpg");
        echo "\" alt=\"Williams\" width=\"130px\" height=\"20px\" /></h3>
                    <p>
                        <a href=\"https://www.williamsshoes.com.au\" target=\"_blank\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 86
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/colorado.jpg");
        echo "\" alt=\"Colorado\" />
                <div class=\"caption text-center\">
                    <h3 style=\"margin-top:5px\"><img src=\"";
        // line 88
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/ColoradoLogo_130x20px.jpg");
        echo "\" alt=\"Colorado\" width=\"130px\" height=\"20px\" /></h3>
                    <p>
                        <a href=\"https://www.colorado.com.au\" target=\"_blank\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/pages/home1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 88,  133 => 86,  123 => 79,  118 => 77,  107 => 69,  102 => 67,  91 => 59,  86 => 57,  44 => 18,  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div class="row bg_gray">*/
/*             <div class="col-xs-12 col-sm-5 col-md-5">*/
/*                 <img class="img-responsive img_align_middle" src="{{ ('assets/images/welcome.png')|theme }}">*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-7 col-md-7 text-center">*/
/*                 <h2>WELCOME TO FUSION</h2>*/
/*                 <p>Drawing on over 150 years of history and experience, our brands – Diana Ferrari, Mathers, Williams and Colorado – are landmarks of the Australian retail landscape, renowned for their quality products and rich heritage. </p>*/
/*                 <a href="{{ 'about-us'|page }}"><button type="button" class="btn btn-primary btn-primary">Find out more</button></a>*/
/*             </div>*/
/*     </div>*/
/* 	*/
/* 	*/
/*     <div class="row col-xs-12 col-md-12 top15">    */
/*         <div class="col-sm-6 col-md-6" style = "border-right:1px solid #222;">*/
/*             <h3>JOIN FUSION REWARDS1</h3>*/
/*             <p class="col-xs-6 col-md-6" style="    padding-left: 1px;">Earn points and enjoy amazing rewards every time you shop with your favourite Fusion Brands. The more you shop, the better your rewards! Track your points*/
/*             and start enjoying the benefits!</p>*/
/*             <img src="{{ 'assets/images/fusionrewards.jpg'|theme }}" alt="Fusionrewards"/>*/
/*             <a href ="https://www.fusionrewards.com.au"><button type="button" class="btn btn-md btn-primary">Join Now</button></a>*/
/*         </div>*/
/*         <div class="col-sm-6 col-md-6">*/
/*             <h3>LOG IN TO FUSION REWARDS</h3>*/
/*             */
/*             <form class="form-horizontal top5" name="FusionService" action="#">*/
/*               <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-3 control-label" >Card No/Email</label>*/
/*                 <div class="col-sm-7">*/
/*                   <!--input type="email" class="form-control" id="inputEmail3" placeholder="Card No/Email"-->*/
/* 				  <input name="ctl00$txtCardNumber" id="ctl00_txtCardNumber" type="text" class="form-control" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Username':this.value;" placeholder="Card No/Email">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-3 control-label" >Password</label>*/
/*                 <div class="col-sm-7">*/
/*                   <!--input type="password" class="form-control" id="inputPassword3" placeholder="Password"-->*/
/* 				  <input name="ctl00$txtCardNumber" id="ctl00_txtPassword" type="password" class="form-control" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'password':this.value;" placeholder="Password">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-sm-offset-3 col-sm-4">*/
/*                   <button type="submit" class="btn btn-primary" id="button1">Go</button>*/
/*                 </div>*/
/* 				<div id="DivResult"></div>*/
/*               </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>  */
/* */
/* */
/* */
/* */
/* 	*/
/*     <div class="row row col-xs-12 col-md-12 top15">*/
/*         <div class="col-xs-12 col-md-12" style="border-top:1px solid #222;">*/
/*             <h3>OUR BRANDS</h3>*/
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/diana-ferrari.png'|theme }}" alt="Diana Ferrari" />*/
/*                 <div class="caption text-center">*/
/*                     <h3 style="margin-top:5px"><img src="{{ 'assets/images/icons/DianaFerrariLogo_130x20px.jpg'|theme }}" alt="Diana Ferrari" width="130px" height="20px" /></h3>*/
/*                     <p>*/
/*                         <a href="https://www.dianaferrari.com.au" target="_blank" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/mathers.png'|theme }}" alt="Mathers" />*/
/*                 <div class="caption text-center">*/
/*                     <h3 style="margin-top:5px"><img src="{{ 'assets/images/icons/MathersLogo_130x20px.jpg'|theme }}" alt="Mathers" width="130px" height="20px" /></h3>*/
/*                     <p>*/
/*                         <a href="https://www.mathers.com.au" target="_blank" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/williams.jpg'|theme }}" alt="Williams Shoes" />*/
/*                 <div class="caption text-center">*/
/*                     <h3 style="margin-top:5px"><img src="{{ 'assets/images/icons/WilliamsLogo_130x20px.jpg'|theme }}" alt="Williams" width="130px" height="20px" /></h3>*/
/*                     <p>*/
/*                         <a href="https://www.williamsshoes.com.au" target="_blank" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/colorado.jpg'|theme }}" alt="Colorado" />*/
/*                 <div class="caption text-center">*/
/*                     <h3 style="margin-top:5px"><img src="{{ 'assets/images/icons/ColoradoLogo_130x20px.jpg'|theme }}" alt="Colorado" width="130px" height="20px" /></h3>*/
/*                     <p>*/
/*                         <a href="https://www.colorado.com.au" target="_blank" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
