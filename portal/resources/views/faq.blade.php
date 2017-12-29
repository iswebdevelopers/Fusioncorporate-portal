@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Frequently Asked Qusetions
        </h3>
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
		                </ul>
		              </div>
		            </div>
		          </div>
		          <!-- <div class="panel panel-default panel-help">
		            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
		              <div class="panel-heading">
		                <h5>How do I upload a new profile picture?</h5>
		              </div>
		            </a>
		            <div id="rediger-produkt" class="collapse">
		              <div class="panel-body">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
		                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
		              </div>
		            </div>
		          </div>
		        </div> -->
		    </div>
        </div>
    </div>
</div>        
@stop        