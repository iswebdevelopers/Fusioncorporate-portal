@if(!empty($settings))
	<?php
		//convert the width and height to dots/mm
		$width = ceil(($settings['width']/$settings['count']) * $settings['density']);
		$height = ceil($settings['height'] * $settings['density']);
		$label_per_row = $settings['count'];

		//margin
		$margin_left = ceil(($width/100) * 11);  
		$margin_top = ceil(($height/100) * 6);

		//fontsizes
		$font_1 = ceil(($height/100) * 5);
		$font_2 = ceil(($height/100) * 4);

		//count
		$count = 1;
	?>
	@if(!empty($data))
		@foreach ($data as $carton)
			@foreach ($carton['carton_details'] as $details)
				^XA
					^FX Top section.
					^CF0,{{$font_1}}
					^FO{{$margin_left + ($count * $width)}},{{$margin_top}}^FDOrder No: {{$carton['order_number']}}^FS
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 2}}^FDStyle No: {{$carton['style']}}^FS
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 3}}^FDSize: {{$carton['item_size']}}^FS
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 4}}^FH^FDColour: {{str_replace('~',' _7e ',$carton['colour'])}}^FS
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 5}}^FDQty: {{$carton['pick_location']}}^FS

					^FX Second.
					^CF0,{{$font_2}}
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 6.5}}^FDItem No  {{$carton['item']}}^FS
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 7}}^FH^FDDescription   {{str_replace('~',' _7e ',$carton['description'])}}^FS

					^FX Third section with barcode.
					^BY3,2
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 8}}^BCN,{{$margin_top * 3}},N,N,Y
					^FD{{$details['pibarcode']}}^FS
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 11.2}}
					^A0N,{{$font_1}},{{$font_1 - 10}}
					^FD{{$details['pinumber']}}^FS

					^FX Fourth section (the two boxes on the bottom).
					^BY2,2
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 12.2}}^BCN,{{$margin_top * 3}},N,N,Y
					^FD{{$details['barcode']}}^FS
					^FO{{$margin_left + ($count * $width)}},{{$margin_top * 15.4}}
					^A0N,{{$font_1}},{{$font_1 - 10}}
					^FD{{$details['number']}}^FS
				^XZ
				@if($count < $label_per_row)
				<?php $count++; ?>
				@elseif ($count >= $label_per_row) 
				<?php $count = 1; ?>
				<br/>
				@endif
			@endforeach	
		@endforeach
		@include('labels.templates.mixedcarton')	
	@endif
@endif	