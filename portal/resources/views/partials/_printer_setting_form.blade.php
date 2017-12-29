<div class="alert alert-info">
    In order to detect and set the local printers to print the generated labels, it is necessary to install print client - <a class="btn btn-default btn-xs" href="https://qz.io/download/" target='_blank'>Download Print Client</a>
</div>
<form id="formPrinterSetting" class="modal-body" style="overflow:hidden">
    <input type="hidden" name="id" value="{{$user['id']}}"/>
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
                    @if ((isset( $user_setting->settings['sticky']['density'])) and ($key == $user_setting->settings['sticky']['density']))
                        <option value="{{$key}}" selected>{{$value}}</option>
                    @else
                        <option value="{{$key}}">{{$value}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sticky">Width:</label>
            <input name="sticky[width]" class="form-control" value="{{$user_setting->settings['sticky']['width'] or 148}}" required/>
        </div>
        <div class="form-group">
            <label for="sticky">Height:()</label>
            <input name="sticky[height]" class="form-control" value="{{$user_setting->settings['sticky']['height'] or 48}}" required/>
        </div>
        <div class="form-group">
            <label for="sticky">Label Per Row:</label>
            <input name="sticky[count]" class="form-control" value="{{$user_setting->settings['sticky']['count'] or 1}}" required/>
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
                    @if ((isset( $user_setting->settings['carton']['density'])) and ($key == $user_setting->settings['carton']['density']))
                        <option value="{{$key}}" selected>{{$value}}</option>
                    @else
                        <option value="{{$key}}">{{$value}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="carton">Width:</label>
            <input name="carton[width]" class="form-control" value="{{$user_setting->settings['carton']['width'] or 105}}" required/>
        </div>
        <div class="form-group">
            <label for="carton">Height:</label>
            <input name="carton[height]" class="form-control" value="{{$user_setting->settings['carton']['height'] or 150}}" required/>
        </div>
        <div class="form-group">
            <label for="carton">Label Per Row:</label>
            <input name="carton[count]" class="form-control" value="{{$user_setting->settings['carton']['count'] or 1}}" required/>
        </div>
    </div>        
</form>
<div class="modal-footer">
    <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary" onclick="setPrinterSetting({{$user['id']}})">Set</button>
</div>