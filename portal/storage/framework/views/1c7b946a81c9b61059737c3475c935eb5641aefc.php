<?php if(!empty($settings)): ?>
	<?php
		//convert the width and height to dots/mm
		$width = ceil(($settings['width']/$settings['count']) * $settings['density']);
		$height = ceil($settings['height'] * $settings['density']);
		$label_per_row = $settings['count'];

		//margin
		$margin_left = ceil(($width/100) * 9);  
		$margin_top = ceil(($height/100) * 6);

		if ($settings['density'] == 6){
			$barcodemargin_left = 10;
		} else {
			$barcodemargin_left = $margin_left;
		}

		//fontsizes
		$font_1 = ceil(($height/100) * 4);
		$font_2 = ceil(($height/100) * 3);

		//count
		$count = 1;

		if(isset($settings['passthroughmode']) and ($settings['passthroughmode'] == 'on')) {
			$start = '${';
			$end = '}$';
		} else{
			$start = '';
			$end = '';
		}
	?>
	<?php if(!empty($carton)): ?>
		<?php echo e($start); ?>

		<?php if(($label_per_row == 1) and $pagebreak): ?> 
			^XA
			^FX Top section.
			^CF0,<?php echo e($font_1); ?>

			^FO<?php echo e($margin_left + (($label_per_row - 1) * $width)); ?>,<?php echo e($margin_top *4); ?>^FDOrder No^FS
			^FO<?php echo e($margin_left + (($label_per_row - 1) * $width)); ?>,<?php echo e($margin_top *5); ?>^FD<?php echo e($carton['order_number']); ?>

			^XZ
		<?php endif; ?>
		<?php $__currentLoopData = $carton['carton_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php $label_count = count($carton['carton_details']); ?>
			<?php if($count == 1): ?>
				^XA
			<?php endif; ?>
				^FX Top section.
				^CF0,<?php echo e($font_1); ?>

				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top); ?>^FDOrder No: <?php echo e($carton['order_number']); ?>^FS
				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 2); ?>^FDStyle No: <?php echo e($carton['style']); ?>^FS
				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 3); ?>^FDSize: <?php echo e($carton['item_size']); ?>^FS
				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 4); ?>^FH^FDColour: <?php echo e(str_replace('~',' _7e ',$carton['colour'])); ?>^FS
				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 5); ?>^FDQty: <?php echo e($carton['pick_location']); ?>^FS

				^FX Second.
				^CF0,<?php echo e($font_2); ?>

				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 6.5); ?>^FDItem No  <?php echo e($carton['item']); ?>^FS
				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 7.5); ?>^FH^FDDescription   <?php echo e(str_replace('~',' _7e ',$carton['description'])); ?>^FS

				^FX Third section with barcode.
				^BY2,2
				^FO<?php echo e($barcodemargin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 8.5); ?>^BCN,<?php echo e($margin_top * 3); ?>,N,N,Y
				^FD<?php echo e($details['pibarcode']); ?>^FS
				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 11.7); ?>

				^A0N,<?php echo e($font_1); ?>,<?php echo e($font_1 - 20); ?>

				^FD<?php echo e($details['pinumber']); ?>^FS

				^FX Fourth section (the two boxes on the bottom).
				^BY2,2
				^FO<?php echo e($barcodemargin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 12.7); ?>^BCN,<?php echo e($margin_top * 3); ?>,N,N,Y
				^FD<?php echo e($details['barcode']); ?>^FS
				^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 15.9); ?>

				^A0N,<?php echo e($font_1); ?>,<?php echo e($font_1 - 10); ?>

				^FD<?php echo e($details['number']); ?>^FS
			
			<?php if($key == ($label_count - 1)): ?>
				^XZ
			<?php elseif(($count >= $label_per_row) || ($key == ($label_count - 1))): ?>
			<?php $count = 1; ?>
			^XZ
			<br/>
			<?php elseif($count < $label_per_row): ?>
				<?php $count++; ?>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($end); ?>	
	<?php endif; ?>
<?php endif; ?>	