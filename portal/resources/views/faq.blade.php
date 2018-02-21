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
									<li>Install print client - <a target="_blank" href="https://qz.io/download/" class="btn btn-default btn-xs">Download</a>and Install the Client</li>
									<li>Start the installed client - QZ Tray</li>
									<li>Go to <a target="_blank" href="/portal/printer/setting" class="btn btn-default btn-xs">settings </a> page. You will see all the printers connected to you system will appear if the qz tray client has been already started and running. If not start the client and refresh the page again and you will be able to set the values. If you cannot find the printer, please add printers to the system first and refresh. If you have problem figuring out the values, send the <em>~WC</em> or through the printer tool to print configurations label which will give you all the details required.</li>
									<li>Set for both Carton and Unit printer.</li>
									<h4>To do - local printer</h4>
									<li>Make sure the settings are same in the printer as well i.e If you have enabled the pass-through mode on setting form please enable it on the printer setting as well and also the label size as printer paper settings.</li>
									<li>Paper setting on local printers has to be set as label size in mm. Once these are set and applied, please print a test page on the local printer to ensure that the setting has been applied before printing from the portal</li>
									<li>If everything has been set up properly, there will be sample labels for both will be generated and can be print as test samples before proceeding to print in bulks.</li>
									<li>Go to <a target="_blank" href="/portal/printer/setting" class="btn btn-default btn-xs">settings </a> page. sample carton label has order no: 1234567 and Unit has 7654321. Every time you set printer settings these will regenerated base don your settings and can be used to test if the label printing and settings are done correctly.</li> 
								</ul>
								<div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Download QZ Tray" href="/portal/img/1.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/1.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Printer Properties" href="/portal/img/2.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/2.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Set Paper height and width" href="/portal/img/3.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/3.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Tools - Print Configuration Label" href="/portal/img/4.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/4.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Sample Configuration Label" href="/portal/img/5.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/5.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Print a test page on local printer" href="/portal/img/6.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/6.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="List of local printers will be available in setting form" href="/portal/img/7.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/7.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Once set - they will show on print shop page" href="/portal/img/8.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/8.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Sample Label Generated" href="/portal/img/9.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/9.jpg">
			                        </a>
			                    </div>
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
					 			<ul>
						    		<li>Make sure that the local printer settings are same as the one on the website.</li>
						    		<li>Check and set the page size on the printer as same as the one you have set up on the website (make sure it is in mm)</li>
						    		<li>Try reducing the density setting (increase or decrease)</li>
						    		<li>Every time the printer settings are changed on the website, sample labels are regenerated based on your printer settings - please print them out see if it prints correctly.</li>
					    		</ul>
					    		<div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Printer Properties" href="/portal/img/2.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/2.jpg">
			                        </a>
			                    </div>
			                    <div class="col-md-2 col-sm-4 col-xs-6">
			                        <a id="firstlink" class="img-gallery" data-gall="gall1" data-title="Set Paper height and width" href="/portal/img/3.jpg">
			                            <img style="height:100px;width:100px;" src="/portal/img/3.jpg">
			                        </a>
			                    </div>
					  		</div>
						</div>
					</div>
				</div>
		    </div>
        </div>
    </div>
</div>        
@stop        