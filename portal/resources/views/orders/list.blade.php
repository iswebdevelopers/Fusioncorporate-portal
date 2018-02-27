@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Order List
        </h4>
    </div>
    <!--Order List-->                
    @include('partials._order_list')
    <!--End Order List-->  
</div>
@stop