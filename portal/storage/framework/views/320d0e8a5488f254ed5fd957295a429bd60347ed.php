<div class="tab-pane fade active in" id="carton">
    <form action="<?php echo e(action('LabelController@createticket')); ?>" method="post">
        <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
        <input name="type" class="form-control" type="hidden" value="carton">
    <!-- Carton -->
    <div class="col-xs-12">
    <?php if(!empty($orderdetails['cartonpack'])): ?>
        <h4>Carton Pack - <?php echo e($order_no); ?></h4>     
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="label_options">
                <thead>
                    <tr>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Description</th>
                        <th>Pack Quantity</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Over Print</th>
                        <th data-type="pack">Select (<a href="#" class="selectall">All</a>/<a href="#" class="selectnone">None</a>)</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $orderdetails['cartonpack']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <input class="form-control <?php echo e($order['item']); ?>" name="data[<?php echo e($order['item']); ?>][location_type]" type="hidden" value="<?php echo e($order['location_type']); ?>">
                        <input class="form-control <?php echo e($order['item']); ?>" name="data[<?php echo e($order['item']); ?>][location]" type="hidden" value="<?php echo e($order['location']); ?>">
                        <input class="form-control <?php echo e($order['item']); ?>" name="data[<?php echo e($order['item']); ?>][item]" type="hidden" value="<?php echo e($order['item']); ?>">
                        <input class="form-control <?php echo e($order['item']); ?>" name="data[<?php echo e($order['item']); ?>][order_no]" type="hidden" value="<?php echo e($order['order_number']); ?>">
                        <td><?php echo e($order['style']); ?></td>
                        <td><?php echo e($order['item']); ?></td>
                        <td><?php echo e($order['description']); ?></td>
                        <td class="col-xs-1"><?php echo e(isset($order['pick_location']) ? $order['pick_location'] : '6'); ?></td>
                        <td class="col-xs-1">Pack - <?php echo e($order['pack_type']); ?></td>
                        <td class="col-xs-1"><input class="form-control <?php echo e($order['item']); ?>" name="data[<?php echo e($order['item']); ?>][qty]" type="text" value="<?php echo e($order['quantity']); ?>" required></td>
                        <td class="col-xs-1"><input class="form-control <?php echo e($order['item']); ?>" name="data[<?php echo e($order['item']); ?>][over_print_qty]" type="number" value="0" required></td>
                        <td class="col-xs-1"><input type="checkbox" id="btn_select_check" class="pack" data-item="<?php echo e($order['item']); ?>" checked></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody>
            </table>
            </div>
    <?php else: ?>
    <h4>Carton Pack</h4>
        <div class="alert alert-danger col-md-6">
            No carton labels to print for this order.
        </div>    
    <?php endif; ?> 
    </div>
    <div class="col-xs-12">
        <?php if(!empty($orderdetails['cartonloose'])): ?>
            <h4>Carton Loose - <?php echo e($order_no); ?></h4>     
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="label_options">
                    <thead>
                        <tr>
                            <th>Style</th>
                            <th>Item Number</th>
                            <th>Description</th>
                            <th>Carton Quantity</th>
                            <th>Type</th>
                            <th>Quantity</th>
                            <th>Over Print</th>
                            <th data-type="loose">Select (<a href="#" class="selectall">All</a>/<a href="#" class="selectnone">None</a>)</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php $__currentLoopData = $orderdetails['cartonloose']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <input name="data[<?php echo e($order['item']); ?>][location_type]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['location_type']); ?>">
                        <input name="data[<?php echo e($order['item']); ?>][location]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['location']); ?>">
                        <input name="data[<?php echo e($order['item']); ?>][item]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['item']); ?>">
                        <input name="data[<?php echo e($order['item']); ?>][order_no]" class="form-control <?php echo e($order['item']); ?>" type="hidden" value="<?php echo e($order['order_number']); ?>">
                        <td><?php echo e($order['style']); ?></td>
                        <td><?php echo e($order['item']); ?></td>
                        <td><?php echo e($order['description']); ?></td>
                        <td class="col-xs-1"><?php echo e($order['pick_location']); ?></td>
                        <td class="col-xs-1">Loose</td>
                        <td class="col-xs-1"><input name="data[<?php echo e($order['item']); ?>][qty]" class="form-control <?php echo e($order['item']); ?>" type="text" value="<?php echo e($order['quantity']); ?>" required></td>
                        <td class="col-xs-1"><input name="data[<?php echo e($order['item']); ?>][over_print_qty]" class="form-control <?php echo e($order['item']); ?>" type="number" value="0" required></td>
                        <td class="col-xs-1"><input type="checkbox" id="btn_select_check" class="loose" data-item="<?php echo e($order['item']); ?>" checked></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
        <?php else: ?>
            <h4>Carton Loose</h4>
            <div class="alert alert-danger col-md-6">
                No carton labels to print for this order.
            </div>    
        <?php endif; ?>
</div>
    <?php if(!empty($orderdetails['cartonpack']) || !empty($orderdetails['cartonloose'])): ?>
        <button type="submit" class="btn btn-primary btn-sm pull-right">Save &amp; Generate</button>
    <?php endif; ?>         
    </form>   
</div>