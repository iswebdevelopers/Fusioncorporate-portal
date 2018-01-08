<!-- Sticky No Price -->
<div class="tab-pane fade" id="stnp">
@if(!empty($orderdetails['orderdetails']))
<h4>Sticky</h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Quantity</th>
                    <th>Over Print</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <form action="{{ action('LabelController@createticket') }}" method="post">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input name="type" class="form-control" type="hidden" value="sticky">
            @foreach ($orderdetails['orderdetails'] as $order)
                <tr>
                    <input name="data[{{$order['item']}}][location_type]" class="form-control" type="hidden" value="{{$order['location_type']}}">
                    <input name="data[{{$order['item']}}][location]" class="form-control" type="hidden" value="{{$order['location']}}">
                    <input name="data[{{$order['item']}}][item]" class="form-control" type="hidden" value="{{$order['item']}}">
                    <input name="data[{{$order['item']}}][order_no]" class="form-control" type="hidden" value="{{$order['order_no']}}">
                    <input name="data[{{$order['item']}}][retail]" class="form-control" type="hidden" value="{{$order['retail']}}">
                    <input name="data[{{$order['item']}}][country]" class="form-control" type="hidden" value="{{$order['country']}}">
                    <td>{{$order['order_no']}}</td>
                    <td>{{$order['style']}}</td>
                    <td>{{$order['item']}}</td>
                    <td class="col-xs-1"><input name="data[{{$order['item']}}][qty]" class="form-control" type="text" value="{{$order['qty']}}"></td>
                    <td class="col-xs-1"><input name="data[{{$order['item']}}][over_print_qty]" class="form-control" type="number" required value="0"></td>
                    <td><button type="button" class="btn btn-danger btn-sm" id="btn_delete"><i class="fa fa-times"></i> Delete</button></td>
                </tr>
            @endforeach        
            </tbody>
        </table><button type="submit" class="btn btn-primary pull-right">Save &amp; Generate</button>
        </div>
    </form>
@else
<h4>Sticky</h4>
    <div class="alert alert-danger col-md-6">
        No Sticky labels to print for this order.
    </div>
@endif
</div>