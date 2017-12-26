<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Printer</h3>
    </div>

    <div class="panel-body">
        <div class="form-group">
            <label for="printerSearch">Search:</label>
            <input type="text" id="printerSearch" value="zebra" class="form-control">
        </div>
        <div class="form-group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default btn-sm" onclick="findPrinter($('#printerSearch').val(), true);">Find Printer</button>
                <button type="button" class="btn btn-default btn-sm" onclick="findDefaultPrinter(true);">Default Printer</button>
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#askPrinterSettingModal">Set Printer Settings</button>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label>Current:</label>
            <div id="configPrinter">
                <em>@if(isset($user_setting->settings['carton']['printer'])){{$user_setting->settings['carton']['printer']}}@else NONE @endif</em>
            </div>
        </div>

        @include('partials._user_printer_list')
        
        <div class="form-group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#askPrinterSettingModal">Set Printers</button>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
            <label>All</label>
            <div class="list-group" id="printer-list" style="display: hidden">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="askPrinterSettingModal" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('partials._printer_setting_form')
        </div>
    </div>
</div>