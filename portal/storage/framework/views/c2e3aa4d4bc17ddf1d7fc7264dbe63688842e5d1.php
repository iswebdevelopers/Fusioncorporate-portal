<?php if(!empty($settings)): ?>
	<?php 
		//convert the width and height to dots/mm
		$width = ceil(($settings['width']/$settings['count']) * $settings['density']);
		$height = ceil($settings['height'] * $settings['density']);
		$label_per_row = $settings['count'];

		//margin
		$margin_left = ceil(($width/100) * 10);  
		$margin_top = ceil(($height/100) * 10);

		//fontsizes
		$font_1 = ceil(($height/100) * 11);
		$font_2 = ceil(($height/100) * 6);

		$barcode = '^BY'. ceil($height/200).','.ceil($height/300).','.ceil($height/5);

		if(isset($settings['passthroughmode']) and ($settings['passthroughmode'] == 'on')) {
			$start = '${';
			$end = '}$';
		} else{
			$start = '';
			$end = '';
		}

	?>
	<?php if(!empty($sticky)): ?>
		<?php echo e($start); ?>

		<?php $total = count($sticky['packs']);?>
		<?php for($i=1; $i <= $sticky['quantity']; $i++): ?>
			<?php $label_no = 1; $count = 1; ?>
			^XA
			^FX Top section.
			^CF0,<?php echo e($font_1); ?>

			^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top); ?>^FD<?php echo e($sticky['order_number']); ?>^FS
			^FX Second.
			^CF0,<?php echo e($font_1); ?>

			^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top * 2.5); ?>^FDPACK:<?php echo e($sticky['pack_type']); ?>^FS
			^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top * 4); ?>^FD<?php echo e($sticky['pack_number']); ?>^FS
				<?php $label_no++; ?>
			<?php $__currentLoopData = $sticky['packs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $pack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if(($label_no - 1) % $label_per_row == 0): ?> 
					^XZ
					^XA
					<?php $label_no = 1;?>
				<?php endif; ?>
				^FX Top section.
				^CF0,<?php echo e($font_1); ?>

				^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top); ?>^FD<?php echo e($item); ?>^FS

				^FX Second.
				^CF0,<?php echo e($font_2); ?>

				^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top * 2); ?>^FDSize:<?php echo e($pack['item_size']); ?>^FS
				^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top * 2.5); ?>^FD<?php echo e($pack['stockroomlocator']); ?>^FS

				^FX Third section with barcode.
				<?php echo e($barcode); ?>

				^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top * 3.5); ?>^BE^FD<?php echo e($pack['barcode']); ?>^FS

				^FX Fourth section (the two boxes on the bottom).
				^CF0,<?php echo e($font_2); ?>,
				^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top * 6.5); ?>^FH^FD<?php echo e(str_replace('~','_7e',$pack['description'])); ?>^FS
				^CF0,<?php echo e($font_2); ?>,
				^FO<?php echo e($margin_left + (($label_no - 1) * $width)); ?>,<?php echo e($margin_top * 7); ?>^FH^FD<?php echo e(str_replace('~','_7e',$pack['colour'])); ?>^FS
				<?php if($count == $total): ?>
					^XZ
				<?php endif; ?>
				<?php if($count < $total): ?>
					<?php $label_no++; ?>
					<?php $count++; ?>
				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endfor; ?>
		<?php echo e($end); ?>

	<?php endif; ?>
<?php endif; ?>	