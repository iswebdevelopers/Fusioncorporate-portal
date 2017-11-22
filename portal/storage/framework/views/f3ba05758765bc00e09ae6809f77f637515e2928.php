<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="page-header">
            Password Reset
        </h3>
    </div>    
    <?php if( $errors->count() > 0 ): ?>
        <div class="alert col-md-4 col-md-offset-4 alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($message); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul> 
        </div>
    <?php endif; ?>
    <?php if(!empty($data['message'])): ?>
         <div class="alert col-md-4 col-md-offset-4 alert-<?php echo e($data['status']); ?>">
             <?php echo e($data['message']); ?>

         </div>
    <?php endif; ?>
    <!--account settings-->
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Account Settings
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <form action="" method="post">
                    <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
                    <input name="token" type="hidden" value="<?php echo e($token ? $token : ''); ?>">
                        <div class="form-group">
                            <label>UserName</label>
                            <input class="form-control" name="email" type="email" value="<?php echo e(empty($input['email']) ? '' : $input['email']); ?>" placeholder="john.smith@mail.com">
                        </div>
                       <div class="form-group">
                            <label>New Password</label>
                            <input class="form-control" name="password" type="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" name="password_confirmation" type="password" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end account settings-->
</div>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layout.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>