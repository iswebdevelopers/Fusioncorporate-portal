<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
    <div id="wrapper">
        <?php echo $__env->make('includes.topnav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div id="page-wrapper" style="margin:0px;">
            <div id="page-inner">
                <?php echo $__env->yieldContent('content'); ?>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
            <?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>