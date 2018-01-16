<div class="tab-pane fade active in" id="carton">
	@if(!empty($orderdetails['cartonpack']))
        <div class="table-responsive">
            <h4>Carton Pack - {{$order_no}}</h4>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Description</th>
                        <th>Pack Quantity</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orderdetails['cartonpack'] as $order)
                    <tr>
                        <td>{{$order['style']}}</td>
                        <td>{{$order['item']}}</td>
                        <td>{{$order['description']}}</td>
                        <td class="col-xs-1">{{$order['quantity']}}</td>
                        <td class="col-xs-1">{{$order['pick_location'] or '6'}}</td>
                        <td class="col-xs-1">Pack - {{$order['pack_type']}}</td>
                        <td class="col-xs-1"><a class="btn btn-primary btn-sm" href="/portal/label/print/{{strtolower($order['carton_type'])}}/{{$order['order_number']}}/{{$order['item']}}">Generate</a></td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    @endif

    @if(!empty($orderdetails['cartonloose']))
        <div class="table-responsive">
            <h4>Carton Loose</h4>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Description</th>
                        <th>Size</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orderdetails['cartonloose'] as $order)
                    <tr>
                        <td>{{$order['style']}}</td>
                        <td>{{$order['item']}}</td>
                        <td>{{$order['description']}}</td>
                        <td class="col-xs-1">{{$order['item_size']}}</td>
                        <td class="col-xs-1">Loose</td>
                        <td class="col-xs-1">{{$order['quantity']}}</td>
                        <td class="col-xs-1"><a class="btn btn-primary btn-sm" href="/portal/label/print/{{strtolower($order['carton_type'])}}/{{$order['order_number']}}/{{$order['item']}}">Generate</a></td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    @endif
    <p class="pull-right">
    @if((!empty($orderdetails['cartonpack'])) or (!empty($orderdetails['cartonloose'])))
        <a class="btn btn-primary btn-sm" href="/portal/label/print/cartons/{{$order_no}}">Generate all Carton</a>
    @endif
    </p>
</div>