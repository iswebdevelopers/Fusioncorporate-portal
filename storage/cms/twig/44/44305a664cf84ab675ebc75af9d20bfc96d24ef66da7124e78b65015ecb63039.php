<?php

/* C:\development\frb/themes/Fusion/pages/store-locator.htm */
class __TwigTemplate_38769db766fe17ce2f5ceb7bfb1536df37f0cb31ddf0bb1ae29ada5a660ec957 extends Twig_Template
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
 \t<div class=\"locator\">
    \t<img src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/store-locator.png");
        echo "\"/>
\t</div>
\t<div class=\"text-center\">
   \t<h3 class=\"text-center\">STORE LOCATIONS</h3>
</div>
<div class=\"col-md-12\">
\t<p class=\"alert alert-danger no-store-result\">No Stores found for your search.</p>
\t<form class=\"clearfix\" id=\"map-form\">
\t\t<div class=\"form-group brand-box clearfix\">
\t\t\t<label class=\"col-md-3 col-md-offset-1 text-center\">DIANA FERRARI:
\t\t\t\t<input type=\"radio\" class=\"checkradios\" name=\"division\" value=\"41\"/>
\t\t\t</label>
\t\t\t<label class=\" col-md-2 col-md-offset-1 text-center\">MATHERS:
\t\t\t\t<input type=\"radio\" class=\"checkradios\" name=\"division\" value=\"01\"/>
\t\t\t</label>
\t\t\t<label class=\" col-md-2 col-md-offset-1 text-center\">WILLIAMS:
\t\t\t\t<input type=\"radio\" class=\"checkradios\" name=\"division\" value=\"20\"/>
\t\t\t</label>\t
\t\t</div>\t
\t\t<div class=\"form-group col-md-12\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t\tPOSTCODE&nbsp;&nbsp;<input type=\"number\" name=\"postcode\" maxlength=\"4\" >&nbsp;&nbsp;WITHIN&nbsp;&nbsp; 
\t\t\t\t\t<label>
\t\t\t\t\t\t<select class=\"form-control\" name=\"distance\">
\t\t\t\t\t\t  <option>10</option>
\t\t\t\t\t\t  <option>20</option>
\t\t\t\t\t\t  <option>30</option>
\t\t\t\t\t\t  <option>40</option>
\t\t\t\t\t\t  <option>50</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</label>
\t\t\t\t\t&nbsp;&nbsp;KM&nbsp;&nbsp;
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">GO</button>\t
\t\t\t</div>\t
\t\t\t<div class=\"col-md-6 state-box\">
\t\t\t\t<p>quicklinks:
\t\t\t\t<label class=\"control control--checkbox state-control\"><a href=\"#\" data-state=\"VIC\" boxclick(this,'VIC')>VIC</a></label>
\t\t\t\t<label class=\"control control--checkbox  state-control\"><a href=\"#\" data-state=\"VNSW\">NSW</a></label>
\t\t\t\t<label class=\"control control--checkbox  state-control\"><a href=\"#\" data-state=\"ACT\">ACT</a></label>
\t\t\t\t<label class=\"control control--checkbox  state-control\"><a href=\"#\" data-state=\"NT\">NT</a></label>
\t\t\t\t<label class=\"control control--checkbox  state-control\"><a href=\"#\" data-state=\"WA\">WA</a></label>
\t\t\t\t<label class=\"control control--checkbox  state-control\"><a href=\"#\" data-state=\"QLD\">QLD</a></label>
\t\t\t\t<label class=\"control control--checkbox  state-control\"><a href=\"#\" data-state=\"SA\">SA</a></label>
\t\t\t\t<label class=\"control control--checkbox  state-control\"><a href=\"#\" data-state=\"TAS\">TAS</a></label></p>
\t\t\t</div>\t
\t\t</div>\t
\t</form>\t
</div>
<div class=\"col-xs-12\" >
\t<div id=\"map\" style=\"width:100%; height:600px;\"></div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\development\\frb/themes/Fusion/pages/store-locator.htm";
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
/* <div class="row col-xs-12 col-md-12">*/
/*  	<div class="locator">*/
/*     	<img src="{{ ('assets/images/store-locator.png')|theme }}"/>*/
/* 	</div>*/
/* 	<div class="text-center">*/
/*    	<h3 class="text-center">STORE LOCATIONS</h3>*/
/* </div>*/
/* <div class="col-md-12">*/
/* 	<p class="alert alert-danger no-store-result">No Stores found for your search.</p>*/
/* 	<form class="clearfix" id="map-form">*/
/* 		<div class="form-group brand-box clearfix">*/
/* 			<label class="col-md-3 col-md-offset-1 text-center">DIANA FERRARI:*/
/* 				<input type="radio" class="checkradios" name="division" value="41"/>*/
/* 			</label>*/
/* 			<label class=" col-md-2 col-md-offset-1 text-center">MATHERS:*/
/* 				<input type="radio" class="checkradios" name="division" value="01"/>*/
/* 			</label>*/
/* 			<label class=" col-md-2 col-md-offset-1 text-center">WILLIAMS:*/
/* 				<input type="radio" class="checkradios" name="division" value="20"/>*/
/* 			</label>	*/
/* 		</div>	*/
/* 		<div class="form-group col-md-12">*/
/* 			<div class="col-md-6">*/
/* 					POSTCODE&nbsp;&nbsp;<input type="number" name="postcode" maxlength="4" >&nbsp;&nbsp;WITHIN&nbsp;&nbsp; */
/* 					<label>*/
/* 						<select class="form-control" name="distance">*/
/* 						  <option>10</option>*/
/* 						  <option>20</option>*/
/* 						  <option>30</option>*/
/* 						  <option>40</option>*/
/* 						  <option>50</option>*/
/* 						</select>*/
/* 					</label>*/
/* 					&nbsp;&nbsp;KM&nbsp;&nbsp;*/
/* 					<button type="submit" class="btn btn-primary">GO</button>	*/
/* 			</div>	*/
/* 			<div class="col-md-6 state-box">*/
/* 				<p>quicklinks:*/
/* 				<label class="control control--checkbox state-control"><a href="#" data-state="VIC" boxclick(this,'VIC')>VIC</a></label>*/
/* 				<label class="control control--checkbox  state-control"><a href="#" data-state="VNSW">NSW</a></label>*/
/* 				<label class="control control--checkbox  state-control"><a href="#" data-state="ACT">ACT</a></label>*/
/* 				<label class="control control--checkbox  state-control"><a href="#" data-state="NT">NT</a></label>*/
/* 				<label class="control control--checkbox  state-control"><a href="#" data-state="WA">WA</a></label>*/
/* 				<label class="control control--checkbox  state-control"><a href="#" data-state="QLD">QLD</a></label>*/
/* 				<label class="control control--checkbox  state-control"><a href="#" data-state="SA">SA</a></label>*/
/* 				<label class="control control--checkbox  state-control"><a href="#" data-state="TAS">TAS</a></label></p>*/
/* 			</div>	*/
/* 		</div>	*/
/* 	</form>	*/
/* </div>*/
/* <div class="col-xs-12" >*/
/* 	<div id="map" style="width:100%; height:600px;"></div>*/
/* </div>*/
/* </div>*/
