<?php if(Session::has('message')): ?>
<div>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<p class="alert <?php echo e(Session::get('class', 'alert-info')); ?>"><?php echo Session::get('message'); ?></p>
</div>
<?php endif; ?>