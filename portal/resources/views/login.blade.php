@extends('layout.login')

@section('content')
<div class="row">
    @include('partials._browser_notification')
	@include('errors.error-list')
	
	<div class="panel panel-default col-md-4 col-md-offset-4">
		<div class="panel-heading">
			Login
		</div>
		<div class="panel-body">
			<form action="{{ action('AuthenticateController@login') }}" method="post">
			<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
	    		<div class="form-group">
	                <label>Email</label>
	                <input name="email" class="form-control" type="text" placeholder="john.smith@mail.com" required>
	            </div>
	    		<div class="form-group">
	                <label for="password">Password</label>
	                <input id="password" name="password" class="form-control" type="password"  required>
	            </div>
	            <button type="submit" class="btn btn-primary">Submit</button>
	            <a data-vbtype="ajax" class="venbobox pull-right" href="/portal/user/recovery" >Forgotten Password?</a>
    		</form>
		</div>
    </div>		
</div>
@stop