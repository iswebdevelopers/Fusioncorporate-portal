<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Supplier List
        </h3>
    </div>
    <?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if($suppliers): ?>
    <!--supplier List-->                
    <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="panel panel-default">
             <div class="panel-heading">
                Suppliers 
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="suppliers-list" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>contact</th>
                                <th>Phone</th>
                               <!--  <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($supplier['name']); ?></td>
                                    <td>
                                        <?php $__currentLoopData = explode(';', $supplier['email']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($email); ?><br/>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($supplier['contact']); ?></td>
                                    <td><?php echo e($supplier['phone']); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>              
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>