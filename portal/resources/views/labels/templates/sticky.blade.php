@if(!empty($settings))
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

		//count
		$count = 1;
		$label_no = 1;
		
		$barcode = '^BY'. ($settings['density']/6).','.($settings['density']/6).','.($settings['density']*7);

		if(isset($settings['passthroughmode']) and ($settings['passthroughmode'] == 'on')) {
			$start = '${';
			$end = '}$';
		} else{
			$start = '';
			$end = '';
		}
	?>
	@if(!empty($sticky))
		{{$start}}
		<?php $total = $sticky['quantity'];?> 		
		@if($label_no = 1)
			^XA
			^FX Top section.
			^CF0,{{$font_1}}
			^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top}}^FD{{$sticky['order_number']}}^FS
		@endif
		@for ($i=1; $i <= $sticky['quantity']; $i++)
				@if ($count % $label_per_row == 0)
					^XZ
					^XA
					<?php $label_no = 1; ?>
				@endif
				^FX Top section.
				^CF0,{{$font_1}}
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top}}^FD{{$sticky['item']}}^FS

				^FX Second.
				^CF0,{{$font_2}}
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 2.5}}^FDSize:{{$sticky['item_size']}}^FS
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 3.3}}^FD{{$sticky['stockroomlocator']}}^FS

				^FX Third section with barcode.
				{{$barcode}}
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 4}}^BE^FD{{$sticky['barcode']}}^FS

				^FX Fourth section (the two boxes on the bottom).
				^CF0,{{$font_2}},
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 7.1}}^FH^FD{{str_replace('~','_7e',$sticky['description'])}}^FS
				^CF0,{{$font_2}},
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 8}}^FH^FD{{str_replace('~','_7e',$sticky['colour'])}}^FS
			@if ($count == $total)
				^XZ
			@endif
			@if($count < $total)
				<?php $label_no++; ?>
				<?php $count++; ?>
			@endif	
		@endfor
		{{$end}}
	@endif
@endif	