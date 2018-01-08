@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Order List
        </h4>
    </div>
    <!--Order List-->                
    @include('partials._list')
    <!--End Order List-->  
</div>
@stop