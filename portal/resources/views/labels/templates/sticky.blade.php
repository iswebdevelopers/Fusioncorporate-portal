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
	?>
	@if(!empty($data))
		<?php $total = array_sum(array_column($data, 'quantity'));?> 		
		@foreach ($data as $key => $item)
			@for ($i=1; $i <= $item['quantity']; $i++)
				@if($count == 1)
					^XA
				@endif
					^FX Top section.
					^CF0,{{$font_1}}
					^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top}}^FD{{$item['item']}}^FS

					^FX Second.
					^CF0,{{$font_2}}
					^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 2.5}}^FDSize:{{$item['item_size']}}^FS
					^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 3.3}}^FD{{$item['stockroomlocator']}}^FS

					^FX Third section with barcode.
					^BY2,2,150
					^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 4}}^BE^FD{{$item['barcode']}}^FS

					^FX Fourth section (the two boxes on the bottom).
					^CF0,{{$font_2}},
					^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 7}}^FH^FD{{str_replace('~','_7e',$item['description'])}}^FS
					^CF0,{{$font_2}},
					^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 8}}^FH^FD{{str_replace('~','_7e',$item['colour'])}}^FS
				<?php $label_no++; ?>	
				@if ($count == $total)
					^XZ
				@elseif ($count % $label_per_row == 0) 
					^XZ
					^XA
					<?php $label_no = 1; ?>
				@endif
				@if($count < $total)
					<?php $count++; ?>
				@endif	
			@endfor
		@endforeach
	@endif
@endif	