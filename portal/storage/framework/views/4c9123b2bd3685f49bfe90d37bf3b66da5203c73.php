<div class="tab-pane fade active in" id="print-carton">
	<?php if(count($cartons) > 0): ?>
    	<table id="cartonfiles" class="table table-striped table-bordered table-hover">
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
                <button type="button" class="btn btn-default pull-right" id="print-all" data-type="carton">Print All</button>
		    	<?php $__currentLoopData = $cartons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    		<tr data-id="<?php echo e($carton->id); ?>">
                        <td><a href="/portal/label/order/<?php echo e($carton->order_id); ?>"><?php echo e($carton->order_id); ?></a></td>
                        <td><?php echo e($carton->updated_at); ?></td>
                        <td><?php echo e($carton->type); ?></td>
                        <td><?php echo e($carton->quantity); ?></td>
                        <td>
                            <button type="button" class="btn btn-sm" onclick="printZPL(<?php echo e($carton->id); ?>);">Print</button>
                        </td>
                    </tr>
		    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
		</table>
	<?php else: ?>
		<h5 class="alert alert-info">There are no files to print.</h5>
	<?php endif; ?>		
</div>