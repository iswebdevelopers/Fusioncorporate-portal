<div class="tab-pane fade active in" id="carton">
    <!-- Carton -->
    <?php if(!empty($orderdetails['cartonpack'])): ?>
        <h4>Warehouse Carton Pack Labels</h4>     
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Order No.</th>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Quantity</th>
                        <th>Over Print</th>
                        <th>Sort Order Type</th>
                        <th>Printer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <form action="<?php echo e(action('LabelController@label_request_create')); ?>" method="post">
                <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
                <input name="type" class="form-control" type="hidden" value="carton">
                <?php $__currentLoopData = $orderdetails['cartonpack']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input name="data[<?php echo e($order['item']); ?>][qty]" class="form-control" type="hidden" value="<?php echo e($order['qty_ordered']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][location_type]" class="form-control" type="hidden" value="<?php echo e($order['location_type']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][location]" class="form-control" type="hidden" value="<?php echo e($order['location']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][item]" class="form-control" type="hidden" value="<?php echo e($order['item']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][order_no]" class="form-control" type="hidden" value="<?php echo e($order['order_no']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][retail]" class="form-control" type="hidden" value="<?php echo e($order['retail']); ?>">
                    <input name="data[<?php echo e($order['item']); ?>][country]" class="form-control" type="hidden" value="<?php echo e($order['country']); ?>">
                    <tr>
                        <td><?php echo e($order['order_number']); ?></td>
                        <td><?php echo e($order['style']); ?></td>
                        <td><?php echo e($order['item']); ?></td>
                        <td><?php echo e($order['quantity']); ?></td>
                        <td><input name="data[<?php echo e($order['item']); ?>][over_print_qty]" class="form-control" type="number" value="0" required></td>
                        <td>
                            <select class="form-control" name="data[<?php echo e($order['item']); ?>][sort_order_type]">
                                <option value="L" <?php if((empty($input['sort_order_type'])) ? '' : $input['sort_order_type'] == 'L'){echo "selected";}?>>Loose</option>
                                <option value="PL" <?php if((empty($input['sort_order_type'])) ? '' : $input['sort_order_type'] == 'PL'){echo "selected";}?>>Pack Then Loose</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="data[<?php echo e($order['item']); ?>][printer]">
                                <option value="C1" <?php if((empty($input['printer'])) ? '' : $input['printer'] == 'C1'){echo "selected";}?>>Pack Then Loose</option>
                                <option value="C2" <?php if((empty($input['printer'])) ? '' : $input['printer'] == 'C2'){echo "selected";}?>>Loose</option>
                            </select>
                        </td>
                        <td><button type="button" class="btn btn-danger btn-sm" id="btn_delete"><i class="fa fa-times"></i> Delete
                            </button></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                </tbody>
            </table><button type="submit" class="btn btn-primary">Save &amp; Print</button>
            </div>
        </form>
    <?php else: ?>
    <h4>Warehouse Carton Pack Labels</h4>
        <div class="alert alert-danger col-md-6">
            No carton labels to print for this order.
        </div>    
    <?php endif; ?>    
</div>