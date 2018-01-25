<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Label Options
        </h4>
    </div>
    <?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--labels Options-->                
    <div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
            	<?php echo $__env->make('partials._flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <ul class="nav nav-pills nav-justified">  
                    <li class="active"><a href="#carton" data-toggle="tab">Carton</a></li>
                    <li class=""><a href="#sticky" data-toggle="tab">Unit</a></li>
                    <li class=""><a href="#mixed" data-toggle="tab">Mixed</a></li>
                </ul>
                <div class="tab-content">
                <!-- Admin and supplier restricted -->
                   
                    <!-- End restriction -->

                    <!-- Admin and warehouse restricted -->
                        <?php echo $__env->make('labels.carton_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('labels.sticky_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('labels.mixed_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
                </div>          
            </div>
        </div>
                </div>
    <!--End label Options-->
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>