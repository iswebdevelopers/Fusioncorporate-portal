<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Printed Label History
        </h3>
    </div>
   <?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--label history-->                
    <?php echo $__env->make('partials._history', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--End label history-->
</div>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>