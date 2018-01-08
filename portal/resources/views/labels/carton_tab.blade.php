<div class="tab-pane fade active in" id="carton">
    <form action="{{ action('LabelController@createticket') }}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="type" class="form-control" type="hidden" value="carton">
    <!-- Carton -->
    <div class="col-xs-12">
    @if(!empty($orderdetails['cartonpack']))
        <h4>Carton Pack</h4>     
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Order No.</th>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Quantity</th>
                        <th>Over Print</th>
                        <th>Sort Order Type</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orderdetails['cartonpack'] as $order)
                    <tr>
                        <input name="data[{{$order['item']}}][location_type]" class="form-control" type="hidden" value="{{$order['location_type']}}">
                        <input name="data[{{$order['item']}}][location]" class="form-control" type="hidden" value="{{$order['location']}}">
                        <input name="data[{{$order['item']}}][item]" class="form-control" type="hidden" value="{{$order['item']}}">
                        <input name="data[{{$order['item']}}][order_no]" class="form-control" type="hidden" value="{{$order['order_number']}}">
                        <td>{{$order['order_number']}}</td>
                        <td>{{$order['style']}}</td>
                        <td>{{$order['item']}}</td>
                        <td class="col-xs-1"><input name="data[{{$order['item']}}][qty]" class="form-control" type="text" value="{{$order['quantity']}}" required></td>
                        <td class="col-xs-1"><input name="data[{{$order['item']}}][over_print_qty]" class="form-control" type="number" value="0" required></td>
                        <td class="col-xs-2">
                            <select class="form-control" name="data[{{$order['item']}}][sort_order_type]">
                                <option value="PL" selected>Pack Then Loose</option>
                            </select>
                        </td>
                        <td class="col-xs-1">Pack - {{$order['pack_type']}}</td>
                        <td><button type="button" class="btn btn-danger btn-sm" id="btn_delete"><i class="fa fa-times"></i> Delete
                            </button></td>
                    </tr>
                @endforeach 
                </tbody>
            </table>
            </div>
    @else
    <h4>Carton Pack</h4>
        <div class="alert alert-danger col-md-6">
            No carton labels to print for this order.
        </div>    
    @endif 
    </div>
    <div class="col-xs-12">
    @if(!empty($orderdetails['cartonloose']))
        <h4>Warehouse Carton Loose</h4>     
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Order No.</th>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Quantity</th>
                        <th>Over Print</th>
                        <th>Sort Order Type</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            @foreach ($orderdetails['cartonloose'] as $order)
                <tr>
                    <input name="data[{{$order['item']}}][location_type]" class="form-control" type="hidden" value="{{$order['location_type']}}">
                    <input name="data[{{$order['item']}}][location]" class="form-control" type="hidden" value="{{$order['location']}}">
                    <input name="data[{{$order['item']}}][item]" class="form-control" type="hidden" value="{{$order['item']}}">
                    <input name="data[{{$order['item']}}][order_no]" class="form-control" type="hidden" value="{{$order['order_number']}}">
                    <td>{{$order['order_number']}}</td>
                    <td>{{$order['style']}}</td>
                    <td>{{$order['item']}}</td>
                    <td class="col-xs-1"><input name="data[{{$order['item']}}][qty]" class="form-control" type="text" value="{{$order['quantity']}}" required></td>
                    <td class="col-xs-1"><input name="data[{{$order['item']}}][over_print_qty]" class="form-control" type="number" value="0" required></td>
                    <td class="col-xs-2">
                        <select class="form-control" name="data[{{$order['item']}}][sort_order_type]">
                            <option value="L" selected>Loose</option>
                        </select>
                    </td>
                    <td class="col-xs-1">Loose</td>
                    <td><button type="button" class="btn btn-danger btn-sm" id="btn_delete"><i class="fa fa-times"></i> Delete
                        </button></td>
                </tr>
            @endforeach
                </tbody>
            </table>
            </div>
    @else
    <h4>Carton Loose</h4>
        <div class="alert alert-danger col-md-6">
            No carton labels to print for this order.
        </div>    
    @endif
</div>
    @if (!empty($orderdetails['cartonpack']) || !empty($orderdetails['cartonloose']))
    <button type="submit" class="btn btn-primary pull-right">Save &amp; Generate</button>
    @endif         
    </form>   
</div>