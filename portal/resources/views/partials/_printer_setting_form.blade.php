<div class="alert alert-info">
    In order to detect and set the local printers to print the generated labels, it is necessary to install print client - <a class="btn btn-default btn-xs" href="https://qz.io/download/" target='_blank'>Download Print Client</a>
</div>
<button style="opacity:.5; font-size:18px; padding:10px;" class="close tip" data-toggle="tooltip" title="" id="launch" href="#" onclick="launchQZ();" style="display: none;" data-original-title="Launch QZ"></button>
<form id="formPrinterSetting" class="modal-body" style="overflow:hidden">
    <input type="hidden" name="id" value="{{$user['id']}}"/>
    <div class="col-xs-6">
        <div class="form-group">
            {{csrf_field()}}
            <label for="sticky" class="col-xs-3">Unit:</label>
            <select name="sticky[printer]" class="form-control" id="sticky-select" required></select>
        </div>
        <div class="form-group">
            <div class="checkbox">
                    <label><input name="sticky[passthroughmode]" type="checkbox" <?php if (isset($user_setting->settings['sticky']['passthroughmode'])) echo ($user_setting->settings['sticky']['passthroughmode']=='on' ? 'checked' : '');?>> Enable pass through mode</label>
                    <span id="help-Block" class="help-block"><i class="fa fa-info-circle"> </i> Enable only if passthrough mode on printer preferences is also enabled</span>
            </div>
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
            <label for="sticky">Width:(mm)</label>
            <input name="sticky[width]" class="form-control" value="{{$user_setting->settings['sticky']['width'] or 35}}" required/>
        </div>
        <div class="form-group">
            <label for="sticky">Height:(mm)</label>
            <input name="sticky[height]" class="form-control" value="{{$user_setting->settings['sticky']['height'] or 40}}" required/>
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
            <div class="checkbox">
                    <label><input name="carton[passthroughmode]" type="checkbox" <?php if (isset($user_setting->settings['carton']['passthroughmode'])) echo ($user_setting->settings['carton']['passthroughmode']=='on' ? 'checked' : '');?>>Enable pass through mode</label>
                    <span id="helpBlock" class="help-block"><i class="fa fa-info-circle"> </i> Enable only if passthrough mode on printer preferences is also enabled</span>
            </div>
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
            <label for="carton">Width:(mm)</label>
            <input name="carton[width]" class="form-control" value="{{$user_setting->settings['carton']['width'] or 105}}" required/>
        </div>
        <div class="form-group">
            <label for="carton">Height:(mm)</label>
            <input name="carton[height]" class="form-control" value="{{$user_setting->settings['carton']['height'] or 150}}" required/>
        </div>
        <div class="form-group">
            <label for="carton">Label Per Row:</label>
            <input name="carton[count]" class="form-control" value="{{$user_setting->settings['carton']['count'] or 1}}" required/>
        </div>
    </div>        

    <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Set</button>

</form>