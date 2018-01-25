<?php $__env->startSection('content'); ?>
<div class="row">
    <?php if(Session::has('status')): ?>
    <div class="alert col-md-4 col-md-offset-4 <?php echo e(Session::get('level')); ?>">
        <?php echo e(Session::get('status')); ?>

    </div>
    <?php endif; ?>

	<?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<div class="panel panel-default col-md-4 col-md-offset-4">
		<div class="panel-heading">
			Login
		</div>
		<div class="panel-body">
			<form action="<?php echo e(action('AuthenticateController@login')); ?>" method="post">
			<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>