<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Users List
        </h3>
    </div>
    <?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(isset($users)): ?>
    <!--Order List-->                
    <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="pull-right">
                    <a href="user/new"><button class="btn btn-primary btn-sm btn-side">New User</button></a>
                </span>
                Users 
            </div>
           <div class="panel-body">
                <div class="table-responsive">
                    <table id="users-list" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($_user['role_id'] ? $_user['role_id'] : ''); ?></td>
                                    <td><?php echo e(ucfirst($_user['name'])); ?></td>
                                    <td><?php echo e($_user['email']); ?></td>
                                    <td><?php echo e(ucfirst($_user['role'])); ?></td>
                                    <td><a data-vbtype="ajax" class="venbobox" href="/user/recovery/<?php echo e($_user['id']); ?>" >Recover Password</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>              
    </div>
    <!--End Order List-->    	
    <?php endif; ?>  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>