@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Supplier List
        </h3>
    </div>
    @include('errors.error-list')
    @if($suppliers)
    <!--supplier List-->                
    <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="panel panel-default">
             <div class="panel-heading">
                Suppliers 
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="suppliers-list" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>contact</th>
                                <th>Phone</th>
                               <!--  <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                                <tr>
                                    <td>{{$supplier['id']}}</td>
                                    <td>{{$supplier['name']}}</td>
                                    <td>
                                        @foreach (explode(';', $supplier['email']) as $email)
                                            {{$email}}<br/>
                                        @endforeach
                                    </td>
                                    <td>{{$supplier['contact']}}</td>
                                    <td>{{$supplier['phone']}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>              
    </div>
    @endif
</div>
@stop