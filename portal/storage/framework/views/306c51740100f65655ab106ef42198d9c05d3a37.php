<!-- Sticky No Price -->
<div class="tab-pane fade" id="sticky">
<?php if(!empty($orderdetails['orderdetails'])): ?>
<h4>Unit - <?php echo e($order_no); ?></h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Over Print</th>
                    <th data-type="sticky">Select (<a href="#" class="selectall">All</a>/<a href="#" class="selectnone">None</a>)</th>
                </tr>
            </thead>
            <tbody>
            <form action="<?php echo e(action('LabelController@createticket')); ?>" method="post">
            <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
            <input name="type" class="form-control" type="hidden" value="sticky">
            <?php $__currentLoopData = $orderdetails['orderdetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <input name="data[<?php echo e($order['item']); ?>][location_type]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['location_type']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][location]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['location']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][item]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['item']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][order_no]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['order_no']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][retail]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['retail']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][country]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['country']); ?>">
                    <td><?php echo e($order['style']); ?></td>
                    <td><?php echo e($order['item']); ?></td>
                    <td><?php echo e($order['description']); ?></td>
                    <td class="col-xs-1"><input name="data[<?php echo e($order['item']); ?>][qty]" class="form-control <?php echo e($order['item']); ?>" type="text" value="<?php echo e($order['qty']); ?>"></td>
                    <td class="col-xs-1"><input name="data[<?php echo e($order['item']); ?>][over_print_qty]" class="form-control <?php echo e($order['item']); ?>" type="number" required value="0"></td>
                    <td class="col-xs-1"><input type="checkbox" id="btn_select_check" class="sticky" data-item="<?php echo e($order['item']); ?>" checked></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
            </tbody>
        </table><button type="submit" class="btn btn-primary btn-sm pull-right">Save &amp; Generate</button>
        </div>
    </form>
<?php else: ?>
<h4>Sticky</h4>
    <div class="alert alert-danger col-md-6">
        No Sticky labels to print for this order.
    </div>
<?php endif; ?>
</div>