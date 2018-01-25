<div class="tab-pane fade active in" id="carton">
	<?php if(!empty($orderdetails['cartonpack'])): ?>
        <div class="table-responsive">
            <h4>Carton Pack - <?php echo e($order_no); ?></h4>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Description</th>
                        <th>Pack Quantity</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $orderdetails['cartonpack']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order['style']); ?></td>
                        <td><?php echo e($order['item']); ?></td>
                        <td><?php echo e($order['description']); ?></td>
                        <td class="col-xs-1"><?php echo e($order['quantity']); ?></td>
                        <td class="col-xs-1"><?php echo e(isset($order['pick_location']) ? $order['pick_location'] : '6'); ?></td>
                        <td class="col-xs-1">Pack - <?php echo e($order['pack_type']); ?></td>
                        <td class="col-xs-1"><a class="btn btn-primary btn-sm" href="/portal/label/print/<?php echo e(strtolower($order['carton_type'])); ?>/<?php echo e($order['order_number']); ?>/<?php echo e($order['item']); ?>">Generate</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>
            </table>
        </div>
    <?php endif; ?>

    <?php if(!empty($orderdetails['cartonloose'])): ?>
        <div class="table-responsive">
            <h4>Carton Loose</h4>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Style</th>
                        <th>Item Number</th>
                        <th>Description</th>
                        <th>Size</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $orderdetails['cartonloose']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order['style']); ?></td>
                        <td><?php echo e($order['item']); ?></td>
                        <td><?php echo e($order['description']); ?></td>
                        <td class="col-xs-1"><?php echo e($order['item_size']); ?></td>
                        <td class="col-xs-1">Loose</td>
                        <td class="col-xs-1"><?php echo e($order['quantity']); ?></td>
                        <td class="col-xs-1"><a class="btn btn-primary btn-sm" href="/portal/label/print/<?php echo e(strtolower($order['carton_type'])); ?>/<?php echo e($order['order_number']); ?>/<?php echo e($order['item']); ?>">Generate</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <p class="pull-right">
    <?php if((!empty($orderdetails['cartonpack'])) or (!empty($orderdetails['cartonloose']))): ?>
        <a class="btn btn-primary btn-sm" href="/portal/label/print/cartons/<?php echo e($order_no); ?>">Generate all Carton</a>
    <?php endif; ?>
    </p>
</div>