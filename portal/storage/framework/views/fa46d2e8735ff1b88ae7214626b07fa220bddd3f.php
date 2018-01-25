<div class="col-md-10 col-sm-12 col-xs-12">
    <?php if(count($labels) > 0): ?>
        <div class="panel panel-default">
            <?php if($nav): ?> 
                <div class="panel-body">
                	<nav aria-label="Page navigation" class="pagination-nav">
                		<?php if(array_key_exists('current_page',$labels)): ?>	
        			  		<h4>Page <?php echo e($labels['current_page']); ?> of <?php echo e($labels['last_page']); ?></h4>
        			  		<ul class="pagination">
        				  		<?php if($labels['current_page'] > 1): ?>	
        					    	<li>
        					      		<a href="<?php echo e(url()->current()); ?>?page=<?php echo e($labels['current_page'] - 1); ?>" aria-label="Previous">
        					        		<span aria-hidden="true">&laquo;</span>
        					      		</a>
        					    	</li>
        					    <?php endif; ?>
        				    	<?php if($labels['current_page'] < $labels['last_page']): ?>
        					    	<li>
        					      		<a href="<?php echo e(url()->current()); ?>?page=<?php echo e($labels['current_page'] + 1); ?>" aria-label="Next">
        					        		<span aria-hidden="true">&raquo;</span>
        					      		</a>
        					    	</li>
        				    	<?php endif; ?>
        				  	</ul>
        			  	<?php endif; ?>
        			</nav>
            <?php else: ?>
                <div class="panel-heading">
                    Printed Label History
                </div>
                <div class="panel-body">       
            <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                    <!-- warehouse table is different from other users -->
                    <?php if(strtolower($user['roles']) == 'warehouse'): ?>
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>printed date</th>
                                <th>Type</th>
                                <th>No. of Cartons</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $labels['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                <td><?php echo e($label['order']); ?></td>
                                <td><?php echo e($label['date']); ?></td>
                                <td><?php echo e($label['type']); ?></td>
                                <td><?php echo e($label['cartons']); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    <?php endif; ?>
                    <!-- Admin and suppliers is different -->
                    <?php if(strtolower($user['roles']) != 'warehouse'): ?>
                        <thead>
                            <tr>
                                <th>label ID</th>
                                <th>Order No.</th>
                                <th>printed date</th>
                                <th>No. of Cartons</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $labels['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                <td><?php echo e($label['id']); ?></td>
                                <td><a href="/portal/label/order/<?php echo e($label['order']); ?>"><?php echo e($label['order']); ?></a></td>
                                <td><?php echo e($label['date']); ?></td>
                                <td><?php echo e($label['cartons']); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    <?php endif; ?>    
                    </table>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-danger col-md-6">
                No label history found.
        </div>
    <?php endif; ?>              
</div>