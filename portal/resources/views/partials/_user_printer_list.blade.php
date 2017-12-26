<div class="form-group">
	<label>User Settings:</label>
	<div class="list-group" id="user-printer-list" data-dialog="@if(empty($user_setting)){{'true'}}@else{{'false'}}@endif">
		<em>Carton Printer: </em>
		<a href="#" class="list-group-item list-group-item-action carton">@if(isset($user_setting->settings['carton']['printer'])){{$user_setting->settings['carton']['printer']}}@else NONE @endif</a>
		<br/>
		<em>Sticky Printer: </em>
		<a href="#" class="list-group-item list-group-item-action sticky">@if(isset($user_setting->settings['sticky']['printer'])){{$user_setting->settings['sticky']['printer']}}@else NONE @endif</a>    
	</div>
</div>