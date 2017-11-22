<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Search
        </h3>
    </div>

    <!-- search panel -->
    <div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="panel panel-default">
        	<div class="panel-body">
    			<form action="<?php echo e(action('LabelController@search')); ?>" method="post" class="form-inline">
    				<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
    				<div class="form-group">
    	                <label>Order ID</label>
    	                <input name="order_no" class="form-control" type="number" value="<?php echo e((empty($input['order_no'])) ? '' : $input['order_no']); ?>" required="true">
    				</div>
    				<div class="form-group">	
    					<label>Item Number</label>
    	                <input name="item_number" class="form-control" type="number" value="<?php echo e((empty($input['item_number'])) ? '' : $input['item_number']); ?>">
    	            </div>
    	            <div class="form-group">
    	            	<label>Carton Type</label>
    	            	<select class="form-control" name="carton_type" id="custom-select">
    	                    <option value="cartonpack" <?php if ((empty($input['carton_type'])) ? '' : $input['carton_type'] == 'cartonpack') {
        echo "selected";
    }?>>Pack</option>
    	                    <option value="cartonloose" <?php if ((empty($input['carton_type'])) ? '' : $input['carton_type'] == 'cartonloose') {
        echo "selected";
    }?>>Loose</option>
    	                </select>
    	            </div>
    	            <button type="submit" class="btn btn-primary">Submit</button>
    			</form>
    		</div>
		</div>			
    </div>
    <!-- end search panel -->

    <!-- list -->
    <?php if( $errors->count() > 0 ): ?>
        <div class="alert alert-danger col-md-12">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <strong><?php echo e($message); ?></strong>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?> 
    <div class="col-md-12 col-sm-12 col-xs-12"> 
            <?php if(isset($orders)): ?>
                <?php if(count($orders) > 0): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Order Search List
                    </div>
                    <div class="panel-body">
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
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($order['order_number']); ?></td>
                                        <td><?php echo e($order['style']); ?></td>
                                        <td><?php echo e($order['item']); ?></td>
                                        <td><?php echo e($order['quantity']); ?></td>
                                        <td><a class="btn btn-primary btn-sm" href="/label/<?php echo e(strtolower($order['carton_type'])); ?>/<?php echo e($order['order_number']); ?>/<?php echo e($order['item']); ?>">Print</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                    <div class="alert alert-danger col-md-6">
                        No orders found.
                    </div>
                <?php endif; ?>
            <?php endif; ?>              
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>