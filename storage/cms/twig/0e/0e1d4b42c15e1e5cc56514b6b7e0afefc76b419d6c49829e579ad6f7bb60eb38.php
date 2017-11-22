<?php

/* E:\inetpub\FRB/themes/Fusion/pages/contact-us.htm */
class __TwigTemplate_b72feb2c4769ccce6f9dab2c9dc4ad2d6d8082d203bb2262384c312b594199ef extends Twig_Template
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
    <div class=\"about-us\">
    \t<img class=\"img-responsive img_align_middle\" src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/contact-us.png");
        echo "\"/>
\t    <div class=\"col-md-6 col-md-offset-3\">
\t    \t<h3>CONTACT US</h3>
\t    \t<p> For any questions, feedback or comments relating to Fusion Retail Brands, please contact us via our details below.</p>
\t    \t<p>Fusion Retail Brands Pty Ltd</p>
\t\t\t<p>Level 1, 850 Lorimer St, Port Melbourne VIC 3207</p>
\t\t\t<!--p>PO Box 690, Richmond VIC 3121</p-->
\t\t\t<p>P: 03 9420 8444</p>
\t\t\t<p>F: 03 9420 8400</p>
\t\t\t<p>ACN 151 836 083</p>
\t\t\t<p>Alternatively, please complete the form below and we will respond to your message as soon as possible.</p>
\t\t\t<div id=\"result\"></div>
\t\t\t<form class=\"form-horizontal top5\" data-request=\"onSend\" data-request-update=\"calcresult: '#result'\">
              <div class=\"form-group\">
                <label for=\"inputfirstname\" class=\"col-sm-3 control-label\">First Name</label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"first_name\" class=\"form-control\" id=\"inputfirstname\" placeholder=\"John\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"inputlastname\" class=\"col-sm-3 control-label\">Last Name</label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"last_name\" class=\"form-control\" id=\"inputlastname\" placeholder=\"Doe\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"inputemail\" class=\"col-sm-3 control-label\">Email Address</label>
                <div class=\"col-sm-9\">
                  <input type=\"email\" name =\"email_address\" class=\"form-control\" id=\"inputemail\" placeholder=\"John.Doe@mail.com\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"inputmessage\" class=\"col-sm-3 control-label\">Message</label>
                <div class=\"col-sm-9\">
                  <textarea name =\"message\" class=\"form-control\" id=\"inputmessage\" rows=\"5\"></textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-4\">
                  <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                </div>
              </div>
            </form>
\t    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/pages/contact-us.htm";
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
/* <div class="row">*/
/*     <div class="about-us">*/
/*     	<img class="img-responsive img_align_middle" src="{{ ('assets/images/contact-us.png')|theme }}"/>*/
/* 	    <div class="col-md-6 col-md-offset-3">*/
/* 	    	<h3>CONTACT US</h3>*/
/* 	    	<p> For any questions, feedback or comments relating to Fusion Retail Brands, please contact us via our details below.</p>*/
/* 	    	<p>Fusion Retail Brands Pty Ltd</p>*/
/* 			<p>Level 1, 850 Lorimer St, Port Melbourne VIC 3207</p>*/
/* 			<!--p>PO Box 690, Richmond VIC 3121</p-->*/
/* 			<p>P: 03 9420 8444</p>*/
/* 			<p>F: 03 9420 8400</p>*/
/* 			<p>ACN 151 836 083</p>*/
/* 			<p>Alternatively, please complete the form below and we will respond to your message as soon as possible.</p>*/
/* 			<div id="result"></div>*/
/* 			<form class="form-horizontal top5" data-request="onSend" data-request-update="calcresult: '#result'">*/
/*               <div class="form-group">*/
/*                 <label for="inputfirstname" class="col-sm-3 control-label">First Name</label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="text" name="first_name" class="form-control" id="inputfirstname" placeholder="John">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="inputlastname" class="col-sm-3 control-label">Last Name</label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="text" name="last_name" class="form-control" id="inputlastname" placeholder="Doe">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="inputemail" class="col-sm-3 control-label">Email Address</label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="email" name ="email_address" class="form-control" id="inputemail" placeholder="John.Doe@mail.com">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="inputmessage" class="col-sm-3 control-label">Message</label>*/
/*                 <div class="col-sm-9">*/
/*                   <textarea name ="message" class="form-control" id="inputmessage" rows="5"></textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-sm-offset-3 col-sm-4">*/
/*                   <button type="submit" class="btn btn-primary">Send</button>*/
/*                 </div>*/
/*               </div>*/
/*             </form>*/
/* 	    </div>*/
/*     </div>*/
/* </div>*/
