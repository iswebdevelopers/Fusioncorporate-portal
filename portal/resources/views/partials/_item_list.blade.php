<div class="col-md-10 col-sm-12 col-xs-12">
@if(isset($items))
    @if(count($items) > 0)
        <div class="panel panel-default">
           <!--  <div class="panel-heading">
                Order List
            </div> -->
            <div class="panel-body">
                <div class="table-responsive">
                    <form action="{{ action('LabelController@printitem') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="type" type="hidden" value="item"/> 
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Description</th>
                                <th>Size</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>   
                        @foreach ($items as $item)
                            <input name="data[{{$item['item_number']}}][description]" type="hidden" value="{{$item['description']}}"/>
                            <input name="data[{{$item['item_number']}}][colour]" type="hidden" value="{{$item['colour']}}"/>
                            <input name="data[{{$item['item_number']}}][item_size]" type="hidden" value="{{$item['item_size']}}"/>
                            <input name="data[{{$item['item_number']}}][barcode]" type="hidden" value="{{$item['barcode']}}"/>
                            <input name="data[{{$item['item_number']}}][item]" type="hidden" value="{{$item['item_number']}}"/>
                            <input name="data[{{$item['item_number']}}][barcode_type]" type="hidden" value="{{$item['barcode_type']}}"/>
                            <tr>
                                <td>{{$item['item_number']}}</td>
                                <td>{{$item['description'].' '.$item['colour']}}</td>
                                <td>{{$item['item_size']}}</td>
                                <td><input type="number" name="data[{{$item['item_number']}}][quantity]" value="{{$item['quantity']}}"></td>
                            </tr>
                        @endforeach    
                        </tbody>
                    </table><button type="submit" class="btn btn-primary btn-sm pull-right">Save &amp; Generate</button> </form>    
                </div>
            </div>
        </div>
    @else
    	@include('errors.error-list')
        <div class="alert alert-danger col-md-6">
            No items found.
        </div>
    @endif
@endif                      
</div>