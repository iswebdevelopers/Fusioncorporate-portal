<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Label Options
        </h3>
    </div>
    <?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--labels Options-->                
    <div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
            	<?php echo $__env->make('partials._flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <ul class="nav nav-pills">  
                <!-- Admin and Warehouse restricted -->
                <?php if(($user['roles'] == 'administrator') || ($user['roles'] == 'warehouse')): ?> 
                    <li class="active"><a href="#carton" data-toggle="tab">Carton</a>
                    </li>
                    <li class=""><a href="#stnp" data-toggle="tab">Sticky No Price</a>
                    </li>
                <?php endif; ?>
                
                <!-- Admin and supplier restricted -->
                <?php if($user['roles'] != 'warehouse'): ?>
                    <li class=""><a href="#supplier" data-toggle="tab">Supplier</a>
                    </li>
                <?php endif; ?>
                </ul>

                <div class="tab-content">
                <!-- Admin and supplier restricted -->
                    <?php if($user['roles'] != 'warehouse'): ?>
                        <?php echo $__env->make('labels.supplier_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endif; ?>
                    <!-- End restriction -->

                    <!-- Admin and warehouse restricted -->
                    <?php if(($user['roles'] == 'administrator') || ($user['roles'] == 'warehouse')): ?>
                        <?php echo $__env->make('labels.carton_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('labels.sticky_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endif; ?>    
                </div>          
            </div>
        </div>
                </div>
    <!--End label Options-->
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>