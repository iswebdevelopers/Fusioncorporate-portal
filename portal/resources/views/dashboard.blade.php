@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Dashboard
        </h4>
    </div>
    
    @include('errors.error-list')

    <!--Pending Order List-->                
    <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            Orders
            </div> 
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>Supplier</th>
                                <th>Order date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $order) 
                            <tr>
                                <td><a href="/portal/label/order/{{$order['order_number']}}">{{$order['order_number']}}</a></td>
                                <td>{{$order['supplier']}}</td>
                                <td>{{$order['approval_date']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a href="/portal/label/orders">View more <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>              
    </div>
    <!--End Order List-->
    <!--account settings-->
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Account Settings
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <span class="list-group-item">
                     Name: {{$user['name']}}
                    </span>
                    <span class="list-group-item">
                     Email: {{$user['email']}}
                    </span>
                    <!-- <span class="list-group-item">
                     Contact
                    </span> -->
                </div>
                <div class="text-right">
                    <a data-vbtype="ajax" class="venbobox" href="/portal/user/recovery/{{$user['id']}}">Account Settings <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--end account settings-->
                
    <!--label history-->                
    @include('partials._history')
    <!--End label history-->
</div>
@stop