<div class="tab-pane fade active in" id="carton">
	<div class="table-responsive">
    <p class="pull-right">
    @if((!empty($orderdetails['cartonpack'])) or (!empty($orderdetails['cartonloose'])))
        <a class="btn btn-primary btn-md" href="/portal/label/print/cartons/{{$order_no}}">Generate all Carton</a>
    @endif
    </p>
    @if(!empty($orderdetails['cartonpack']))
        <h4>Carton Pack</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Quantity</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($orderdetails['cartonpack'] as $order)
                <tr>
                    <td>{{$order['order_number']}}</td>
                    <td>{{$order['style']}}</td>
                    <td>{{$order['item']}}</td>
                    <td>{{$order['quantity']}}</td>
                    <td>Pack - {{$order['pack_type']}}</td>
                    <td><a class="btn btn-primary btn-sm" href="/portal/label/print/{{strtolower($order['carton_type'])}}/{{$order['order_number']}}/{{$order['item']}}">Generate</a></td>
                </tr>
            @endforeach    
            </tbody>
        </table>
        @endif
    </div>
    @if(!empty($orderdetails['cartonloose']))
        <h4>Carton Loose</h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Quantity</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($orderdetails['cartonloose'] as $order)
                <tr>
                    <td>{{$order['order_number']}}</td>
                    <td>{{$order['style']}}</td>
                    <td>{{$order['item']}}</td>
                    <td>{{$order['quantity']}}</td>
                    <td>Loose</td>
                    <td><a class="btn btn-primary btn-sm" href="/portal/label/print/{{strtolower($order['carton_type'])}}/{{$order['order_number']}}/{{$order['item']}}">Generate</a></td>
                </tr>
            @endforeach    
            </tbody>
        </table>
    </div>
    @endif
</div>