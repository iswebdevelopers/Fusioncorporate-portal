<div class="tab-pane fade in" id="print-sticky">
	<?php if(count($stickies) > 0): ?>
    	<table id="stickyfiles" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Print Date</th>
                    <th>Label Type</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <button type="button" class="btn btn-default pull-right" id="print-all" data-type="sticky">Print All</button>
		    	<?php $__currentLoopData = $stickies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sticky): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    		<tr data-id="<?php echo e($sticky->id); ?>">
                        <td><a href="/portal/label/order/<?php echo e($sticky->order_id); ?>"><?php echo e($sticky->order_id); ?></a></td>
                        <td><?php echo e($sticky->updated_at); ?></td>
                        <td><?php echo e($sticky->type); ?></td>
                        <td><?php echo e($sticky->quantity); ?></td>
                        <td>
                            <button type="button" class="btn btn-sm" onclick="printZPL(<?php echo e($sticky->id); ?>);">Print</button>
                        </td>
                    </tr>
		    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
		</table>
	<?php else: ?>
	<h5 class="alert alert-info">There are no archived files.</h5>
	<?php endif; ?>		
</div>