<!-- SUpplier labels -->
<div class="@if((strtolower($user['roles']) != 'warehouse') and (strtolower($user['roles']) != 'administrator')) {{'tab-pane fade active in'}} @else {{'tab-pane fade'}} @endif" id="supplier">
    <div class="table-responsive">
    <p class="pull-right">
        <a class="btn btn-primary btn-md" href="/portal/label/print/stickies/{{$order_no}}">Generate all sticky</a>
    @if((!empty($orderdetails['cartonpack'])) or (!empty($orderdetails['cartonloose'])))
        <a class="btn btn-primary btn-md" href="/portal/label/print/cartons/{{$order_no}}">Generate all Carton</a>
    @endif
    </p>
    @if(!empty($orderdetails['cartonpack']))
        <h4>Supplier Carton Pack</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Quantity</th>
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
                    <td><a class="btn btn-primary btn-sm" href="/portal/label/print/{{strtolower($order['carton_type'])}}/{{$order['order_number']}}/{{$order['item']}}">Generate</a></td>
                </tr>
            @endforeach    
            </tbody>
        </table>
        @endif
    </div>
    @if(!empty($orderdetails['cartonloose']))
        <h4>Supplier Carton Loose</h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Quantity</th>
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
                    <td><a class="btn btn-primary btn-sm" href="/portal/label/print/{{strtolower($order['carton_type'])}}/{{$order['order_number']}}/{{$order['item']}}">Generate</a></td>
                </tr>
            @endforeach    
            </tbody>
        </table>
    </div>
    @endif
</div>