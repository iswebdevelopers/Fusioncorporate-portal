<div class="tab-pane fade" id="mixed">
	<h4>Mixed</h4>
	<div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Type</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
            <form action="{{ action('LabelController@printmixed') }}" method="post">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input name="type" class="form-control" type="hidden" value="cartonmixed">
                <tr>
                <input name="order_no" class="form-control" type="hidden" value="{{$order_no}}">
                    <td>{{$order_no}}</td>
                    <td>Mixed Carton</td>
                    <td class="col-xs-1"><input name="quantity" class="form-control" type="text" value="4"></td>
                </tr>
            </tbody>
        </table><button type="submit" class="btn btn-primary btn-sm pull-right">Generate</button>
        </div>
    </form>
</div>    