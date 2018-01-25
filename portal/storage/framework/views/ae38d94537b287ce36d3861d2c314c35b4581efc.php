<div class="tab-pane fade in" id="archive">
<br/>
	<?php if(count($archives) > 0): ?>
    	<table id="printfiles" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Archived Date</th>
                    <th>Label Type</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
		    	<?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    		<tr>
                        <td><a href="/portal/label/order/<?php echo e($archive->order_id); ?>"><?php echo e($archive->order_id); ?></a></td>
                        <td><?php echo e($archive->updated_at); ?></td>
                        <td><?php echo e($archive->type); ?></td>
                        <td><?php echo e($archive->quantity); ?></td>
                        <td>
                            <button type="button" class="btn btn-sm" onclick="printZPL(<?php echo e($archive->id); ?>);">ZPL</button>
                        </td>
                    </tr>
		    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
		</table>
	<?php else: ?>
	<h5 class="alert alert-info">There are no archived files.</h5>
	<?php endif; ?>		
</div>