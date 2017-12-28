@if(!empty($settings))
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

		//count
		$count = 1;
		$label_count = $quantity;
	?>
	@for($i=1; $i <= $label_count; $i++)
		<!-- mixed carton print -->
		@if($count == 1)
			^XA
		@endif
			^FX Top section.
			^CF0,{{$font_1}}
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 2}}^FD************^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 3}}^FDMixed^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 4}}^FDOr^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 5}}^FH^FDIncomplete^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 6}}^FD************^FS
		@if ($i == $label_count)
			^XZ
		@elseif (($count >= $label_per_row) || ($i == $label_count))
			<?php $count = 1; ?>
			^XZ
			<br/>
		@elseif ($count < $label_per_row)
			<?php $count++; ?>	
		@endif
	@endfor
@endif