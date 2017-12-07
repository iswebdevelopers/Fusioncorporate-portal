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
                <em>@if(isset($user_settings['carton']['printer'])){{$user_settings['carton']['printer']}}@else NONE @endif</em>
            </div>
        </div>
        <div class="form-group">
            <label>User Settings:</label>
            <div class="list-group" id="user-printer-list" hidden">
            <em>Carton Printer: </em>
            <a href="#" class="list-group-item list-group-item-action carton">@if(isset($user_settings['carton']['printer'])){{$user_settings['carton']['printer']}}@else NONE @endif</a>
            <br/>
            <em>Sticky Printer: </em>
            <a href="#" class="list-group-item list-group-item-action sticky">@if(isset($user_settings['sticky']['printer'])){{$user_settings['sticky']['printer']}}@else NONE @endif</a>    
            </div>
        </div>
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
            <form id="formPrinterSetting" class="modal-body" style="overflow:hidden">
                <div class="col-xs-6">
                    <div class="form-group">
                        {{csrf_field()}}
                        <label for="sticky" class="col-xs-3">Sticky:</label>
                        <select name="sticky[printer]" class="form-control" id="sticky-select" required></select>
                    </div>
                    <div class="form-group">
                        <label for="density" class="col-xs-3">Density:</label>
                        <select name="sticky[density]" class="form-control" required>
                            @foreach ($printer_settings['density'] as $key => $value)
                                @if ((isset( $user_settings['sticky']['density'])) and ($key == $user_settings['sticky']['density']))
                                    <option value="{{$key}}" selected>{{$value}}</option>
                                @else
                                    <option value="{{$key}}">{{$value}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sticky">Width:</label>
                        <input name="sticky[width]" class="form-control" value="{{$user_settings['sticky']['width'] or 148}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="sticky">Height:()</label>
                        <input name="sticky[height]" class="form-control" value="{{$user_settings['sticky']['height'] or 48}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="sticky">Label Per Row:</label>
                        <input name="sticky[count]" class="form-control" value="{{$user_settings['sticky']['count'] or 1}}" required/>
                    </div>
                </div>
                <div class="col-xs-6">    
                    <div class="form-group" >
                        <label for="carton" class="col-xs-3">Carton:</label>
                        <select name="carton[printer]" class="form-control" id="carton-select" class="col-xs-5" required></select>
                    </div>
                    <div class="form-group">
                        <label for="density" class="col-xs-3">Density:</label>
                        <select name="carton[density]" class="form-control" required>
                            @foreach ($printer_settings['density'] as $key => $value)
                                @if ((isset( $user_settings['carton']['density'])) and ($key == $user_settings['carton']['density']))
                                    <option value="{{$key}}" selected>{{$value}}</option>
                                @else
                                    <option value="{{$key}}">{{$value}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="carton">Width:</label>
                        <input name="carton[width]" class="form-control" value="{{$user_settings['carton']['width'] or 105}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="carton">Height:</label>
                        <input name="carton[height]" class="form-control" value="{{$user_settings['carton']['height'] or 150}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="carton">Label Per Row:</label>
                        <input name="carton[count]" class="form-control" value="{{$user_settings['carton']['count'] or 1}}" required/>
                    </div>
                </div>        
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="setPrinterSetting({{$user['id']}});">Set</button>
            </div>
        </div>
    </div>
</div>