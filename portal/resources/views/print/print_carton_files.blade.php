<div class="tab-pane fade active in" id="print-carton">
	@if(count($cartons) > 0)
    	<table id="cartonfiles" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Print Date</th>
                    <th>Label Type</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <a class="btn btn-default pull-right" id="print-all" data-type="carton">Print All</a>
		    	@foreach($cartons as $carton)
		    		<tr data-id="{{$carton->id}}">
                        <td><a href="/portal/label/order/{{$carton->order_id}}">{{$carton->order_id}}</a></td>
                        <td>{{$carton->updated_at}}</td>
                        <td>{{$carton->type}}</td>
                        <td>{{$carton->description}}</td>
                        <td>{{$carton->quantity}}</td>
                        <td>
                            <a class="btn btn-default btn-sm" onclick="printZPL({{$carton->id}});">Print</a>
                            <a class="btn btn-default btn-sm" onclick="printArchive({{$carton->id}});">Remove</a>
                        </td>
                    </tr>
		    	@endforeach
		    </tbody>
		</table>
	@else
		<h5 class="alert alert-info">There are no carton label files to print.</h5>
	@endif		
</div>