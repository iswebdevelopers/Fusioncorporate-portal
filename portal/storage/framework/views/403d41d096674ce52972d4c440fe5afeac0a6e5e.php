<div class="tab-pane fade active in" id="print">
<br/>
	<?php if(count($prints) > 0): ?>
    	<table id="printfiles" class="table table-striped table-bordered table-hover">
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
		    	<?php $__currentLoopData = $prints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $print): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    		<tr>
                        <td><?php echo e($print->order_id); ?></td>
                        <td><?php echo e($print->updated_at); ?></td>
                        <td><?php echo e($print->type); ?></td>
                        <td><?php echo e($print->quantity); ?></td>
                        <td>
                            <button type="button" class="btn btn-default" onclick="printZPL(<?php echo e($print->id); ?>);">ZPL</button>
                        </td>
                    </tr>
		    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
		</table>
	<?php else: ?>
		<h5 class="alert alert-info">There are no files to print.</h5>
	<?php endif; ?>		
</div>