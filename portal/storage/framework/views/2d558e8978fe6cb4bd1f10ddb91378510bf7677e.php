<?php if(!empty($settings)): ?>
	<?php
		//convert the width and height to dots/mm
		$width = ceil(($settings['width']/$settings['count']) * $settings['density']);
		$height = ceil($settings['height'] * $settings['density']);
		$label_per_row = $settings['count'];

		//margin
		$margin_left = ceil(($width/100) * 11);  
		$margin_top = ceil(($height/100) * 10);

		//fontsizes
		$font_1 = ceil(($height/100) * 10);
		$font_2 = ceil(($height/100) * 3);
		$font_3 = ceil(($height/100) * 22);

		if(isset($settings['passthroughmode']) and ($settings['passthroughmode'] == 'on')) {
			$start = '${';
			$end = '}$';
		} else{
			$start = '';
			$end = '';
		}

		//count
		$count = 1;
		$label_count = $quantity;
	?>
	<?php echo e($start); ?>

	<?php for($i=1; $i <= $label_count; $i++): ?>
		<!-- mixed carton print -->
		<?php if($count == 1): ?>
			^XA
		<?php endif; ?>
			^FX Top section.
			^CF0,<?php echo e($font_1); ?>

			^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 2); ?>^FD************^FS
			^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 3); ?>^FDMixed^FS
			^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 4); ?>^FDOr^FS
			^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 5); ?>^FH^FDIncomplete^FS
			^FO<?php echo e($margin_left + (($count - 1) * $width)); ?>,<?php echo e($margin_top * 6); ?>^FD************^FS
		<?php if($i == $label_count): ?>
			^XZ
		<?php elseif(($count >= $label_per_row) || ($i == $label_count)): ?>
			<?php $count = 1; ?>
			^XZ
			<br/>
		<?php elseif($count < $label_per_row): ?>
			<?php $count++; ?>	
		<?php endif; ?>
	<?php endfor; ?>
	<?php echo e($end); ?>

<?php endif; ?>