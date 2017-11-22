<!-- SUpplier labels -->
<div class="tab-pane fade" id="supplier">
    <div class="table-responsive">
    <p>
        <a class="btn btn-primary btn-lg" href="/label/print/stickies/<?php echo e($order_no); ?>">Print all sticky labels</a>
    <?php if((!empty($orderdetails['cartonpack'])) or (!empty($orderdetails['cartonloose']))): ?>
        <a class="btn btn-primary btn-lg" href="/label/print/cartons/<?php echo e($order_no); ?>">Print all Carton labels</a>
    <?php endif; ?>
    </p>
    <?php if(!empty($orderdetails['cartonpack'])): ?>
        <h4>Supplier Carton Pack Labels</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $orderdetails['cartonpack']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order['order_number']); ?></td>
                    <td><?php echo e($order['style']); ?></td>
                    <td><?php echo e($order['item']); ?></td>
                    <td><?php echo e($order['quantity']); ?></td>
                    <td><a class="btn btn-primary btn-sm" href="/label/print/<?php echo e(strtolower($order['carton_type'])); ?>/<?php echo e($order['order_number']); ?>/<?php echo e($order['item']); ?>">Print</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </tbody>
        </table>
        <?php endif; ?>
    </div>
    <?php if(!empty($orderdetails['cartonloose'])): ?>
        <h4>Supplier Carton Loose Labels</h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Style</th>
                    <th>Item Number</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $orderdetails['cartonloose']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order['order_number']); ?></td>
                    <td><?php echo e($order['style']); ?></td>
                    <td><?php echo e($order['item']); ?></td>
                    <td><?php echo e($order['quantity']); ?></td>
                    <td><a class="btn btn-primary btn-sm" href="/label/print/<?php echo e(strtolower($order['carton_type'])); ?>/<?php echo e($order['order_number']); ?>/<?php echo e($order['item']); ?>">Print</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>