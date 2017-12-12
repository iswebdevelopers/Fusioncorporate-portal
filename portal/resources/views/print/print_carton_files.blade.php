<div class="tab-pane fade active in" id="print-carton">
	@if(count($cartons) > 0)
    	<table id="cartonfiles" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Print Date</th>
                    <th>Label Type</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <button type="button" class="btn btn-default pull-right" onclick="printAll('carton');">Print All</button>
		    	@foreach($cartons as $carton)
		    		<tr>
                        <td>{{$carton->order_id}}</td>
                        <td>{{$carton->updated_at}}</td>
                        <td>{{$carton->type}}</td>
                        <td>{{$carton->quantity}}</td>
                        <td>
                            <button type="button" class="btn btn-sm" onclick="printZPL({{$carton->id}});">Print</button>
                        </td>
                    </tr>
		    	@endforeach
		    </tbody>
		</table>
	@else
		<h5 class="alert alert-info">There are no files to print.</h5>
	@endif		
</div>