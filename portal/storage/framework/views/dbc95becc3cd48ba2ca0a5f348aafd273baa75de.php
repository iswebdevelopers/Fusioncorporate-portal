<?php if(!empty($data)): ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		^XA
			^FX Top section.
			^CF0,60
			^FO30,30^FD<?php echo e($item['stockroomlocator']); ?>^FS

			^FX Second.
			^CF0,30
			^FO10,90^FDSize:<?php echo e($item['size']); ?>^FS
			^FO80,90^FDitem: <?php echo e($item['item']); ?>^FS

			^FX Third section with barcode.
			^BY2,2,50
			^FO30,140^BE^FD<?php echo e($item['barcode']); ?>^FS

			^FX Fourth section (the two boxes on the bottom).
			^CF0,30,
			^FO50,220^FH^FD<?php echo e(str_replace('~','_7e',$item['description'])); ?>^FS
			^CF0,30,
			^FO50,250^FH^FD<?php echo e(str_replace('~','_7e',$item['colour'])); ?>^FS
		^XZ
		<br/>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>