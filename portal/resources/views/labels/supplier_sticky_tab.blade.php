<!-- Sticky No Price -->
<div class="tab-pane fade" id="sticky">
@if(!empty($orderdetails['orderdetails']))
<h4>Sticky - {{$order_no}}</h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
            <form action="{{ action('LabelController@createticket') }}" method="post">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input name="type" class="form-control" type="hidden" value="sticky">
            @foreach ($orderdetails['orderdetails'] as $order)
                <tr>
                    <td>{{$order['style']}}</td>
                    <td>{{$order['item']}}</td>
                    <td>{{$order['description']}}</td>
                    <td class="col-xs-1">{{$order['qty']}}</td>
                </tr>
            @endforeach        
            </tbody>
        </table><a class="btn btn-primary btn-sm pull-right" href="/portal/label/print/stickies/{{$order_no}}">Generate</a>
        </div>
@else
<h4>Sticky</h4>
    <div class="alert alert-danger col-md-6">
        No Sticky labels to print for this order.
    </div>
@endif
</div>