<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            New User
        </h3>
    </div>    
    <?php if(!empty($message)): ?>
         <div class="alert col-md-4 col-md-offset-4 alert-<?php echo e($status); ?>">
             <?php echo e($message); ?>

         </div>
    <?php endif; ?>
    <?php if( $errors->count() > 0 ): ?>
        <div class="alert alert-danger col-md-4 col-md-offset-4">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($message); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul> 
        </div>
    <?php endif; ?>
    <!--account settings-->
    <div class="col-md-6 col-sm-12 col-xs-12">        
        <div class="panel panel-default">
            <div class="panel-heading">
                Account Settings
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <form action="<?php echo e(action('UserController@create')); ?>" method="post">
                    <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
                    <input name="token" type="hidden" id="token" value="<?php echo e($token); ?>" />
                    <?php if($user['roles'] == 'administrator'): ?>
                        <div class="form-group">
                            <label>Role *</label>
                            <select class="form-control" name="role" id="role">
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value=<?php echo e($role); ?>><?php echo e($role); ?></option> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    <?php endif; ?>
                        <div class="form-group">
                            <label>Name *</label>
                            <input class="form-control" name="name" type="text" value="<?php echo e((empty($input['name'])) ? '' : $input['name']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input class="form-control" name="email" type="email" value="<?php echo e((empty($input['email'])) ? '' : $input['email']); ?>" placeholder="john.smith@mail.com" required>
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input class="form-control" name="password" type="password" required>
                        </div>
                        <div id="extra-fields">
                            <div class="form-group" id="Supplier">
                                <label>Supplier *</label>
                                <input class="form-control supplier" id="supplier_box" name="role_id" type="text">
                            </div>
                            <div class="form-group" id="Warehouse">
                                <label>Warehouse *</label>
                                <input class="form-control warehouse" id="warehouse_box" name="role_id" type="text">
                            </div>
                            <div class="form-group">
                            <label>Creator</label>
                            <input class="form-control " id="creator" name="creator" type="text" value="<?php echo e($user['id']); ?>" >
                        </div>
                        </div>    
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end account settings-->
</div>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>