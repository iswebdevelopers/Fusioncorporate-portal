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
		$font_1 = ceil(($height/100) * 15);
		$font_2 = ceil(($height/100) * 7);

		//count
		$count = 1;
	?>
	@if(!empty($data)) 		
		@foreach ($data as $item)
			@if($count == 1)
				^XA
			@endif
			@for ($i=1; $i <= $item['quantity']; $i++)
					^FX Top section.
					^CF0,{{$font_1}}
					^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top}}^FD{{$item['stockroomlocator']}}^FS

					^FX Second.
					^CF0,{{$font_2}}
					^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 2.5}}^FDSize:{{$item['size']}}^FS
					^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 3.3}}^FDitem: {{$item['item']}}^FS

					^FX Third section with barcode.
					^BY2,2,150
					^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 4}}^BE^FD{{$item['barcode']}}^FS

					^FX Fourth section (the two boxes on the bottom).
					^CF0,{{$font_2}},
					^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 7}}^FH^FD{{str_replace('~','_7e',$item['description'])}}^FS
					^CF0,{{$font_2}},
					^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 8}}^FH^FD{{str_replace('~','_7e',$item['colour'])}}^FS
				
				@if(($count < $label_per_row) and ($count < $item['quantity']))
					<?php $count++; ?>
				@elseif (($count >= $label_per_row) || ($count <= $item['quantity'])) 
					<?php $count = 1; ?>
				^XZ
				<br/>
				@endif
			@endfor
		@endforeach
	@endif
@endif	