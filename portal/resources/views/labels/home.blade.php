@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Label Options
        </h3>
    </div>
    @include('errors.error-list')
    <!--labels Options-->                
    <div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
            	@include('partials._flash')
                <ul class="nav nav-pills">  
                <!-- Admin and Warehouse restricted -->
                @if((strtolower($user['roles']) == 'administrator') || (strtolower($user['roles']) == 'warehouse')) 
                    <li class="active"><a href="#carton" data-toggle="tab">Carton</a>
                    </li>
                    <li class=""><a href="#stnp" data-toggle="tab">Sticky No Price</a>
                    </li>
                @endif
                
                <!-- Admin and supplier restricted -->
                @if(strtolower($user['roles']) != 'warehouse')
                    @if(strtolower($user['roles']) == 'administrator')
                        <li class="">
                    @else
                        <li class="active">       
                    @endif    
                        <a href="#supplier" data-toggle="tab">Supplier</a>
                    </li>
                @endif
                <li class=""><a href="#mixed" data-toggle="tab">Mixed</a></li>
                </ul>
                <div class="tab-content">
                <!-- Admin and supplier restricted -->
                    @if(strtolower($user['roles']) != 'warehouse')
                        @include('labels.supplier_tab')
                    @endif
                    <!-- End restriction -->

                    <!-- Admin and warehouse restricted -->
                    @if((strtolower($user['roles']) == 'administrator') || (strtolower($user['roles']) == 'warehouse'))
                        @include('labels.carton_tab')
                        @include('labels.sticky_tab')
                    @endif  
                    @include('labels.mixed_tab')  
                </div>          
            </div>
        </div>
                </div>
    <!--End label Options-->
</div>
@stop 