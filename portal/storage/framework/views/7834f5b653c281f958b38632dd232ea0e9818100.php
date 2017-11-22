<!-- search panel -->
<div class="col-md-10 col-sm-12 col-xs-12">
	<div class="panel panel-default">
	<div class="panel-body">
		<form action="<?php echo e(action('OrderController@orderlist')); ?>" method="post" class="form-inline">
			<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
			<div class="form-group">
                <label>Order ID</label>
                <input name="order_no" class="form-control" type="number" value="<?php echo e((empty($input['order_no'])) ? '' : $input['order_no']); ?>" required="true">
			</div>
			<!-- <div class="form-group">	
				<label>Item Number</label>
                <input name="item_number" class="form-control" type="number" value="<?php echo e((empty($input['item_number'])) ? '' : $input['item_number']); ?>">
            </div>
            -->
            <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	</div>			
</div>
<!-- end search panel -->