<div class="col-md-10 col-sm-12 col-xs-12">
<?php if(isset($orders)): ?>
    <?php if(count($orders) > 0): ?>
        <div class="panel panel-default">
           <!--  <div class="panel-heading">
                Order List
            </div> -->
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
                                <td><a href="/portal/label/order/<?php echo e($order['order_number']); ?>"><?php echo e($order['order_number']); ?></a></td>
                                <td><?php echo e($order['supplier']); ?></td>
                                <td><?php echo e($order['approval_date']); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                    </table>     
                </div>
            </div>
        </div>
    <?php else: ?>
    	<?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="alert alert-danger col-md-6">
            No orders found.
        </div>
    <?php endif; ?>
<?php endif; ?>                      
</div>