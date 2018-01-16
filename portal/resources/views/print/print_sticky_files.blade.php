<div class="tab-pane fade in" id="print-sticky">
	@if(count($stickies) > 0)
    	<table id="stickyfiles" class="table table-striped table-bordered table-hover">
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
                <button type="button" class="btn btn-default pull-right" id="print-all" data-type="sticky">Print All</button>
		    	@foreach($stickies as $sticky)
		    		<tr data-id="{{$sticky->id}}">
                        <td><a href="/portal/label/order/{{$sticky->order_id}}">{{$sticky->order_id}}</a></td>
                        <td>{{$sticky->updated_at}}</td>
                        <td>{{$sticky->type}}</td>
                        <td>{{$sticky->quantity}}</td>
                        <td>
                            <button type="button" class="btn btn-sm" onclick="printZPL({{$sticky->id}});">Print</button>
                        </td>
                    </tr>
		    	@endforeach
		    </tbody>
		</table>
	@else
	<h5 class="alert alert-info">There are no archived files.</h5>
	@endif		
</div>