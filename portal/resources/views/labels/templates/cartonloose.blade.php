@if(!empty($settings))
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
	@if(!empty($carton))
		{{$start}}
		@if(($label_per_row == 1) and $pagebreak) 
			^XA
			^FX Top section.
			^CF0,{{$font_1}}
			^FO{{$margin_left + (($label_per_row - 1) * $width)}},{{$margin_top *4}}^FDOrder No^FS
			^FO{{$margin_left + (($label_per_row - 1) * $width)}},{{$margin_top *5}}^FD{{$carton['order_number']}}
			^XZ
		@endif
		@foreach ($carton['carton_details'] as $key => $details)
			<?php $label_count = count($carton['carton_details']); ?>
			@if($count == 1)
				^XA
			@endif
				^FX Top section.
				^CF0,{{$font_1}}
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top}}^FDOrder No: {{$carton['order_number']}}^FS
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 2}}^FDStyle No: {{$carton['style']}}^FS
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 3}}^FDSize: {{$carton['item_size']}}^FS
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 4}}^FH^FDColour: {{str_replace('~',' _7e ',$carton['colour'])}}^FS
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 5}}^FDQty: {{$carton['pick_location']}}^FS

				^FX Second.
				^CF0,{{$font_2}}
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 6.5}}^FDItem No  {{$carton['item']}}^FS
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 7.5}}^FH^FDDescription   {{str_replace('~',' _7e ',$carton['description'])}}^FS

				^FX Third section with barcode.
				^BY2,2
				^FO{{$barcodemargin_left + (($count - 1) * $width)}},{{$margin_top * 8.5}}^BCN,{{$margin_top * 3}},N,N,Y
				^FD{{$details['pibarcode']}}^FS
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 11.7}}
				^A0N,{{$font_1}},{{$font_1 - 10}}
				^FD{{$details['pinumber']}}^FS

				^FX Fourth section (the two boxes on the bottom).
				^BY2,2
				^FO{{$barcodemargin_left + (($count - 1) * $width)}},{{$margin_top * 12.7}}^BCN,{{$margin_top * 3}},N,N,Y
				^FD{{$details['barcode']}}^FS
				^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 15.9}}
				^A0N,{{$font_1}},{{$font_1 - 10}}
				^FD{{$details['number']}}^FS
			
			@if($key == ($label_count - 1))
				^XZ
			@elseif (($count >= $label_per_row) || ($key == ($label_count - 1)))
			<?php $count = 1; ?>
			^XZ
			<br/>
			@elseif ($count < $label_per_row)
				<?php $count++; ?>
			@endif
		@endforeach
		{{$end}}	
	@endif
@endif	