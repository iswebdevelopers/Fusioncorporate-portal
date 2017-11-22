<?php

/* C:\development\frb/themes/Fusion/pages/home.htm */
class __TwigTemplate_d80fc131f46979c3053d8197ed65f0e636eeb09e308846e429f9f73895c71dc3 extends Twig_Template
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
        echo "<div class=\"row col-xs-12 col-md-12\">
        <div class=\"vertical-align bg-grey\" style=\"background-color: #eee\">
            <div class=\"col-xs-6 col-md-6\">
                <img class=\"img-thumbnail\" src=\"";
        // line 4
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/welcome.png");
        echo "\"/>
            </div>
            <div class=\"col-xs-6 col-md-6 text-center\">
                <h2>WELCOME TO FUSION</h2>
                <p>WELCOME TO FUSION - Drawing on over 150 years of history and experience, our brands – Diana Ferrari, Mathers, Williams and Colorado – are landmarks of the Australian retail landscape, renowned for their quality products and rich heritage. </p>
                <a href =\"/about-us\"><button  type=\"button\" class=\"btn btn-primary btn-primary\">Find out more</button></a>
            </div>
        </div>
    </div>
    <div class=\"row col-xs-12 col-md-12 top15\">    
        <div class=\"col-sm-6 col-md-6\" style = \"border-right:1px solid #222;\">
            <h3>JOIN FUSION REWARDS</h3>
            <p class=\"col-xs-6 col-md-6\">Earn points and enjoy amazing rewards every time you shop with your favourite Fusion Brands. The more you shop, the better your rewards! Track your points
            and start enjoying the benefits!</p>
            <img src=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/fusionrewards.jpg");
        echo "\" alt=\"Fusionrewards\"/>
            <a href =\"https://www.fusionrewards.com.au\"><button type=\"button\" class=\"btn btn-md btn-primary\">Join Now</button></a>
        </div>
        <div class=\"col-sm-6 col-md-6\">
            <h3>LOG IN TO FUSION REWARDS</h3>
            <h4>FUSION REWARDS LOGIN</h4>
            <form class=\"form-horizontal top5\">
              <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Card No/Email</label>
                <div class=\"col-sm-7\">
                  <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Card No/Email\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-3 control-label\">Password</label>
                <div class=\"col-sm-7\">
                  <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-4\">
                  <button type=\"submit\" class=\"btn btn-primary\">Go</button>
                </div>
              </div>
            </form>
        </div>
    </div>    
    <div class=\"row row col-xs-12 col-md-12 top15\">
        <div class=\"col-xs-12 col-md-12\" style=\"border-top:1px solid #222;\">
            <h3>OUR BRANDS</h3>
            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 49
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/diana-ferrari.png");
        echo "\" alt=\"Diana Ferrari\" />
                <div class=\"caption text-center\">
                    <h3>Diana Ferrari</h3>
                    <p>
                        <a href=\"https://www.dianaferrari.com.au\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>

            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/mathers.png");
        echo "\" alt=\"Mathers\" />
                <div class=\"caption text-center\">
                    <h3>Mathers</h3>
                    <p>
                        <a href=\"https://www.mathers.com.au\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>

            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 69
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/williams.png");
        echo "\" alt=\"Williams Shoes\" />
                <div class=\"caption text-center\">
                    <h3>Williams</h3>
                    <p>
                        <a href=\"https://www.williamsshoes.com.au\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3 top15\">
                <img src=\"";
        // line 78
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/colorado.png");
        echo "\" alt=\"Colorado\" />
                <div class=\"caption text-center\">
                    <h3>Colorado</h3>
                    <p>
                        <a href=\"https://www.colorado.com.au\" class=\"btn btn-primary\" role=\"button\">Shop Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\development\\frb/themes/Fusion/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 78,  101 => 69,  88 => 59,  75 => 49,  41 => 18,  24 => 4,  19 => 1,);
    }
}
/* <div class="row col-xs-12 col-md-12">*/
/*         <div class="vertical-align bg-grey" style="background-color: #eee">*/
/*             <div class="col-xs-6 col-md-6">*/
/*                 <img class="img-thumbnail" src="{{ ('assets/images/welcome.png')|theme }}"/>*/
/*             </div>*/
/*             <div class="col-xs-6 col-md-6 text-center">*/
/*                 <h2>WELCOME TO FUSION</h2>*/
/*                 <p>WELCOME TO FUSION - Drawing on over 150 years of history and experience, our brands – Diana Ferrari, Mathers, Williams and Colorado – are landmarks of the Australian retail landscape, renowned for their quality products and rich heritage. </p>*/
/*                 <a href ="/about-us"><button  type="button" class="btn btn-primary btn-primary">Find out more</button></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row col-xs-12 col-md-12 top15">    */
/*         <div class="col-sm-6 col-md-6" style = "border-right:1px solid #222;">*/
/*             <h3>JOIN FUSION REWARDS</h3>*/
/*             <p class="col-xs-6 col-md-6">Earn points and enjoy amazing rewards every time you shop with your favourite Fusion Brands. The more you shop, the better your rewards! Track your points*/
/*             and start enjoying the benefits!</p>*/
/*             <img src="{{ 'assets/images/fusionrewards.jpg'|theme }}" alt="Fusionrewards"/>*/
/*             <a href ="https://www.fusionrewards.com.au"><button type="button" class="btn btn-md btn-primary">Join Now</button></a>*/
/*         </div>*/
/*         <div class="col-sm-6 col-md-6">*/
/*             <h3>LOG IN TO FUSION REWARDS</h3>*/
/*             <h4>FUSION REWARDS LOGIN</h4>*/
/*             <form class="form-horizontal top5">*/
/*               <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-3 control-label">Card No/Email</label>*/
/*                 <div class="col-sm-7">*/
/*                   <input type="email" class="form-control" id="inputEmail3" placeholder="Card No/Email">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-3 control-label">Password</label>*/
/*                 <div class="col-sm-7">*/
/*                   <input type="password" class="form-control" id="inputPassword3" placeholder="Password">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-sm-offset-3 col-sm-4">*/
/*                   <button type="submit" class="btn btn-primary">Go</button>*/
/*                 </div>*/
/*               </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>    */
/*     <div class="row row col-xs-12 col-md-12 top15">*/
/*         <div class="col-xs-12 col-md-12" style="border-top:1px solid #222;">*/
/*             <h3>OUR BRANDS</h3>*/
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/diana-ferrari.png'|theme }}" alt="Diana Ferrari" />*/
/*                 <div class="caption text-center">*/
/*                     <h3>Diana Ferrari</h3>*/
/*                     <p>*/
/*                         <a href="https://www.dianaferrari.com.au" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/mathers.png'|theme }}" alt="Mathers" />*/
/*                 <div class="caption text-center">*/
/*                     <h3>Mathers</h3>*/
/*                     <p>*/
/*                         <a href="https://www.mathers.com.au" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/williams.png'|theme }}" alt="Williams Shoes" />*/
/*                 <div class="caption text-center">*/
/*                     <h3>Williams</h3>*/
/*                     <p>*/
/*                         <a href="https://www.williamsshoes.com.au" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-6 col-md-3 top15">*/
/*                 <img src="{{ 'assets/images/icons/colorado.png'|theme }}" alt="Colorado" />*/
/*                 <div class="caption text-center">*/
/*                     <h3>Colorado</h3>*/
/*                     <p>*/
/*                         <a href="https://www.colorado.com.au" class="btn btn-primary" role="button">Shop Now</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
