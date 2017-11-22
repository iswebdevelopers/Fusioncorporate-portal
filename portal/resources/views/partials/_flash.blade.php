@if(Session::has('message'))
<div>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<p class="alert {{ Session::get('class', 'alert-info') }}">{!! Session::get('message') !!}</p>
</div>
@endif