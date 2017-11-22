<?php if(!empty($data)): ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $carton['carton_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			^XA
				^FX Top section.
				^CF0,50
				^FO90,50^FDOrder No: <?php echo e($carton['order_number']); ?>^FS
				^FO90,120^FDStyle No: <?php echo e($carton['style']); ?>^FS
				^FO90,180^FDSize: <?php echo e($carton['item_size']); ?>^FS
				^FO90,250^FH^FDColour: <?php echo e(str_replace('~',' _7e ',$carton['colour'])); ?>^FS
				^FO90,320^FDQty: <?php echo e($carton['pick_location']); ?>^FS

				^FX Second.
				^CF0,30
				^FO50,400^FDItem No  <?php echo e($carton['item']); ?>^FS
				^FO50,450^FH^FDDescription   <?php echo e(str_replace('~',' _7e ',$carton['description'])); ?>^FS

				^FX Third section with barcode.
				^BY3,2,230
				^FO30,550^BCN,150,N,N,Y
				^FD<?php echo e($carton['product_indicator_barcode']); ?>^FS
				^FO30,720
				^A0N,50,40
				^FD<?php echo e($carton['product_indicator_number']); ?>^FS

				^FX Fourth section (the two boxes on the bottom).
				^BY2,2,150
				^FO30,850^BCN,150,N,N,Y
				^FD<?php echo e($details['barcode']); ?>^FS
				^FO30,1020
				^A0N,50,40
				^FD<?php echo e($details['number']); ?>^FS
			^XZ
			<br/>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php echo $__env->make('labels.templates.mixedcarton', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
<?php endif; ?>