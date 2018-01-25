<?php $__env->startSection('content'); ?>
<div id="qz-alert" style="position: fixed; width: 60%; margin: 0 4% 0 15%; z-index: 900;"></div>
<div id="qz-pin" style="position: fixed; width: 30%; margin: 0 66% 0 4%; z-index: 900;"></div>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Print Shop
        </h4>
        <div class="row-spread">
            <?php echo $__env->make('partials._flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        	<div class="col-md-5">
                <?php echo $__env->make('print.connection_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
                <?php echo $__env->make('print.printer_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="col-md-6">
            <ul class="nav nav-pills" id="print-tab">
                <li class="active"><a class="change" href="#print-carton" data-type="carton" data-toggle="tab">Carton</a></li>
                <li class=""><a class="change" id="print-tab" href="#print-sticky" data-type="sticky" data-toggle="tab">Sticky</a></li>
                <li class=""><a href="#archive" data-toggle="tab">Archived</a></li>
            </ul>
            <div class="tab-content">
                <?php echo $__env->make('print.print_carton_files', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('print.print_sticky_files', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('print.print_archived_files', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>    
    </div>     
</div>
<script type="text/javascript" src="<?php echo e(asset('js/printer/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>