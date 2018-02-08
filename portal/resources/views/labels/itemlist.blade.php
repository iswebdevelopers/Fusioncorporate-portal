@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Item List
        </h4>
    </div>
    @include('errors.error-list')
    <!-- search panel -->
    <div class="col-md-10 col-sm-12 col-xs-12">
        @include('partials._flash')
        <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ action('ItemController@itemlist') }}" method="post" class="form-inline">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="form-group">
                    <label>SKU/Barcode</label>
                    <input name="item" class="form-control" type="number" value="{{ (empty($input['item'])) ? '' : $input['item']}}">
                </div>
                <div class="form-group"><strong>(Or)</strong></div>
                <div class="form-group">
                    <label>Barcode</label>
                    <input name="barcode" class="form-control" type="number" value="{{ (empty($input['barcode'])) ? '' : $input['barcode']}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>          
    </div>
    <!-- end search panel -->
    <!--item List-->
    @include('partials._item_list')
    <!--End item List-->  
</div>
@stop