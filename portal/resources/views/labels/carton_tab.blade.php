<div class="tab-pane fade active in" id="carton">
    <!-- Carton -->
    @if(!empty($orderdetails['cartonpack']))
        <h4>Warehouse Carton Pack Labels</h4>     
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
                <form action="{{ action('LabelController@createticket') }}" method="post">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="type" class="form-control" type="hidden" value="carton">
                @foreach ($orderdetails['cartonpack'] as $order)
                    <input name="data[{{$order['item']}}][location_type]" class="form-control" type="hidden" value="{{$order['location_type']}}">
                    <input name="data[{{$order['item']}}][location]" class="form-control" type="hidden" value="{{$order['location']}}">
                    <input name="data[{{$order['item']}}][item]" class="form-control" type="hidden" value="{{$order['item']}}">
                    <input name="data[{{$order['item']}}][order_no]" class="form-control" type="hidden" value="{{$order['order_number']}}">
                    <tr>
                        <td>{{$order['order_number']}}</td>
                        <td>{{$order['style']}}</td>
                        <td>{{$order['item']}}</td>
                        <td class="col-xs-1"><input name="data[{{$order['item']}}][qty]" class="form-control" type="text" value="{{$order['quantity']}}"></td>
                        <td class="col-xs-1"><input name="data[{{$order['item']}}][over_print_qty]" class="form-control" type="number" value="0" required></td>
                        <td >
                            <select class="form-control" name="data[{{$order['item']}}][sort_order_type]">
                                <option value="PL" <?php if((empty($input['sort_order_type'])) ? '' : $input['sort_order_type'] == 'PL'){echo "selected";}?>>Pack Then Loose</option>
                                <option value="L" <?php if((empty($input['sort_order_type'])) ? '' : $input['sort_order_type'] == 'L'){echo "selected";}?>>Loose</option>
                            </select>
                        </td>
                        <td>Pack</td>
                        <td><button type="button" class="btn btn-danger btn-sm" id="btn_delete"><i class="fa fa-times"></i> Delete
                            </button></td>
                    </tr>
                @endforeach 
                @foreach ($orderdetails['cartonloose'] as $order)
                    <input name="data[{{$order['item']}}][location_type]" class="form-control" type="hidden" value="{{$order['location_type']}}">
                    <input name="data[{{$order['item']}}][location]" class="form-control" type="hidden" value="{{$order['location']}}">
                    <input name="data[{{$order['item']}}][item]" class="form-control" type="hidden" value="{{$order['item']}}">
                    <input name="data[{{$order['item']}}][order_no]" class="form-control" type="hidden" value="{{$order['order_number']}}">
                    <tr>
                        <td>{{$order['order_number']}}</td>
                        <td>{{$order['style']}}</td>
                        <td>{{$order['item']}}</td>
                        <td class="col-xs-1"><input name="data[{{$order['item']}}][qty]" class="form-control" type="text" value="{{$order['quantity']}}"></td>
                        <td class="col-xs-1"><input name="data[{{$order['item']}}][over_print_qty]" class="form-control" type="number" value="0" required></td>
                        <td >
                            <select class="form-control" name="data[{{$order['item']}}][sort_order_type]">
                                <option value="L" <?php if((empty($input['sort_order_type'])) ? '' : $input['sort_order_type'] == 'L'){echo "selected";}?>>Loose</option>
                                <option value="PL" <?php if((empty($input['sort_order_type'])) ? '' : $input['sort_order_type'] == 'PL'){echo "selected";}?>>Pack Then Loose</option>
                            </select>
                        </td>
                        <td>Loose</td>
                        <td><button type="button" class="btn btn-danger btn-sm" id="btn_delete"><i class="fa fa-times"></i> Delete
                            </button></td>
                    </tr>
                @endforeach        
                </tbody>
            </table><button type="submit" class="btn btn-primary">Save &amp; Generate</button>
            </div>
        </form>
    @else
    <h4>Warehouse Carton Pack Labels</h4>
        <div class="alert alert-danger col-md-6">
            No carton labels to print for this order.
        </div>    
    @endif    
</div>