@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Label Options
        </h4>
    </div>
    @include('errors.error-list')
    <!--labels Options-->                
    <div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
            	@include('partials._flash')
                <ul class="nav nav-pills nav-justified">  
                    <li class="active"><a href="#carton" data-toggle="tab">Carton</a></li>
                    <li class=""><a href="#unit" data-toggle="tab">Unit</a></li>
                    <li class=""><a href="#mixed" data-toggle="tab">Mixed</a></li>
                </ul>
                <div class="tab-content">
                <!-- Admin and supplier restricted -->
                   
                    <!-- End restriction -->

                    <!-- Admin and warehouse restricted -->
                        @include('labels.carton_tab')
                        @include('labels.sticky_tab')
                        @include('labels.mixed_tab')  
                </div>          
            </div>
        </div>
                </div>
    <!--End label Options-->
</div>
@stop 