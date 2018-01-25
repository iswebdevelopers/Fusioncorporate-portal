<!-- Sticky No Price -->
<div class="tab-pane fade" id="sticky">
<?php if(!empty($orderdetails['orderdetails'])): ?>
<h4>Sticky - <?php echo e($order_no); ?></h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
            <form action="<?php echo e(action('LabelController@createticket')); ?>" method="post">
            <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
            <input name="type" class="form-control" type="hidden" value="sticky">
            <?php $__currentLoopData = $orderdetails['orderdetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order['style']); ?></td>
                    <td><?php echo e($order['item']); ?></td>
                    <td><?php echo e($order['description']); ?></td>
                    <td class="col-xs-1"><?php echo e($order['qty']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
            </tbody>
        </table><a class="btn btn-primary btn-sm pull-right" href="/portal/label/print/stickies/<?php echo e($order_no); ?>">Generate</a>
        </div>
    </form>
<?php else: ?>
<h4>Sticky</h4>
    <div class="alert alert-danger col-md-6">
        No Sticky labels to print for this order.
    </div>
<?php endif; ?>
</div>