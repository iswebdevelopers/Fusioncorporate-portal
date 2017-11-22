<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">
            Order List
        </h3>
    </div>
    <?php echo $__env->make('errors.error-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Order search form -->
    <?php echo $__env->make('partials._order_search_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End Order Search form -->
    <!--Order List-->
    <?php echo $__env->make('partials._list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--End Order List-->  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>