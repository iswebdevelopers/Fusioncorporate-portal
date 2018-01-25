<?php $__env->startSection('content'); ?>
<div id="qz-alert" style="position: fixed; width: 60%; margin: 0 4% 0 16%; z-index: 900;"></div>
<div id="qz-pin" style="position: fixed; width: 30%; margin: 0 66% 0 4%; z-index: 900;"></div>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-header">
            Printer
        </h4>
    </div>
    <?php if(!empty($message)): ?>
         <div class="alert col-md-4 col-md-offset-4 alert-<?php echo e($status); ?>">
             <?php echo e($message); ?>

         </div>
    <?php endif; ?>
    <!--account settings-->
    <div class="col-md-6 col-sm-12 col-xs-12">        
        <div class="panel panel-default">
            <div class="panel-heading">
                Settings
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <?php echo $__env->make('partials._user_printer_list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('partials._printer_setting_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
                </div>
            </div>
        </div>
    </div>         
</div>
<script type="text/javascript" src="<?php echo e(asset('js/printer/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>