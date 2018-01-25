@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Frequently Asked Questions
        </h4>
		<div class="form-group col-md-8">
            <div class="tab-content panels-faq">
		        <div class="panel-group" id="help-accordion-1">
					<div class="panel panel-default panel-help">
						<a href="#printer-setup" data-toggle="collapse" data-parent="#help-accordion-1">
							<div class="panel-heading">
								<h5>Setting up Printer - !Important to Generate and print labels</h5>
							</div>
						</a>
						<div id="printer-setup" class="collapse in">
							<div class="panel-body">
								<ul>
									<li>Without setting the printer values, no label will be generated.</li>
									<li>Install print client - <a target="_blank" href="https://qz.io/download/" class="btn btn-default btn-xs">Download</a></li>
									<li>Start the installed client</li>
									<li>Go to <a target="_blank" href="/portal/printer/setting" class="btn btn-default btn-xs">settings </a> page and set the values. If you have problem figuring out the values, send this <em>~WC</em> to the printer and this will tell the printer to print a Configuration Label which will give you all the details required.</li>
									<li>Make sure the settings are same in the printer as well</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel panel-default panel-help">
						<a href="#alignment" data-toggle="collapse" data-parent="#help-accordion-1">
						  	<div class="panel-heading">
						    	<h5>Labels are printing to the sides/ not aligned in the center / text cut off?</h5>
						  	</div>
						</a>
						<div id="alignment" class="collapse">
					 		<div class="panel-body">
					    		<li>Make sure that the label printer settings that used to generate are same as the ones you set on the website</li>
					    		<li>Check and set the page size on the printer as same as the one you have set up on the website (make sure it is in mm)</li>
					    		<li>Try reducing the density setting (increase or decrease)</li>
					    		<li>Every time the printer settings is changed on the website, please regenerate the labels since the labels will be generated based on your printer settings - if you print previously generated labels, they might not be printing right.</li>
					  		</div>
						</div>
					</div>
				</div>
		    </div>
        </div>
    </div>
</div>        
@stop        