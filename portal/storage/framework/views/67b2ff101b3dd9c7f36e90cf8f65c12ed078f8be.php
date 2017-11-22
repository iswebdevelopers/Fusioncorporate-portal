<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Dashboard
        </h3>
    </div>
    
    <?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--Pending Order List-->                
    <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            Orders Pending to be printed
            </div> 
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>Supplier</th>
                                <th>Order date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <tr>
                                <td><?php echo e($order['order_number']); ?></td>
                                <td><?php echo e($order['supplier']); ?></td>
                                <td><?php echo e($order['approval_date']); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a href="/label/orders">View more <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>              
    </div>
    <!--End Order List-->
    <!--account settings-->
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Account Settings
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <span class="list-group-item">
                     Name: <?php echo e($user['name']); ?>

                    </span>
                    <span class="list-group-item">
                     Email: <?php echo e($user['email']); ?>

                    </span>
                    <!-- <span class="list-group-item">
                     Contact
                    </span> -->
                </div>
                <div class="text-right">
                    <a data-vbtype="ajax" class="venbobox" href="/user/recovery/<?php echo e($user['id']); ?>">Account Settings <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--end account settings-->
                
    <!--label history-->                
    <?php echo $__env->make('partials._history', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--End label history-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>