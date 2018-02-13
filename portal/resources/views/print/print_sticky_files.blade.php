<div class="tab-pane fade in" id="print-sticky">
	@if(count($stickies) > 0)
    	<table id="stickyfiles" class="table table-striped table-bordered table-hover">
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
                <a class="btn btn-default pull-right" id="print-all" data-type="sticky">Print All</a>
		    	@foreach($stickies as $sticky)
		    		<tr data-id="{{$sticky->id}}">
                        <td><a href="/portal/label/order/{{$sticky->order_id}}">{{$sticky->order_id}}</a></td>
                        <td>{{$sticky->updated_at}}</td>
                        <td>{{$sticky->type}}</td>
                        <td>{{$sticky->description}}</td>
                        <td>{{$sticky->quantity}}</td>
                        <td>
                            <a class="btn btn-default btn-sm" onclick="printZPL({{$sticky->id}});">Print</a>
                            <a class="btn btn-default btn-sm" onclick="printArchive({{$sticky->id}});">Remove</a>
                        </td>
                    </tr>
		    	@endforeach
		    </tbody>
		</table>
	@else
	<h5 class="alert alert-info">There are no unit label files.</h5>
	@endif		
</div>