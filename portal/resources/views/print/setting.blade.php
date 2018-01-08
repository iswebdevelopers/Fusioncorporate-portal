@extends('layout.app')

@section('content')
<div id="qz-alert" style="position: fixed; width: 60%; margin: 0 4% 0 16%; z-index: 900;"></div>
<div id="qz-pin" style="position: fixed; width: 30%; margin: 0 66% 0 4%; z-index: 900;"></div>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Printer
        </h4>
    </div>
    @if (!empty($message))
         <div class="alert col-md-4 col-md-offset-4 alert-{{$status}}">
             {{$message}}
         </div>
    @endif
    <!--account settings-->
    <div class="col-md-6 col-sm-12 col-xs-12">        
        <div class="panel panel-default">
            <div class="panel-heading">
                Settings
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @include('partials._user_printer_list')
                    @include('partials._printer_setting_form')        
                </div>
            </div>
        </div>
    </div>         
</div>
<script type="text/javascript" src="{{ asset('js/printer/main.js')}}"></script>
@stop