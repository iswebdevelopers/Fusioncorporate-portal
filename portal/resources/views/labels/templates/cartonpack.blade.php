
@if(!empty($settings))
	<?php
		//convert the width and height to dots/mm
		$width = ceil(($settings['width']/$settings['count']) * $settings['density']);
		$height = ceil($settings['height'] * $settings['density']);
		$label_per_row = $settings['count'];

		//margin
		$margin_left = ceil(($width/100) * 9);  
		$margin_top = ceil(($height/100) * 6);
		$pack_margin_left = ceil(($width/100) * 82);
		//fontsizes
		$font_1 = ceil(($height/100) * 5);
		$font_2 = ceil(($height/100) * 3);
		$font_3 = ceil(($height/100) * 22);

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
		@foreach ($carton['carton_details'] as $key =>  $details)
			<?php $label_count = count($carton['carton_details']); ?>
			@if($count == 1)
				^XA
			@endif
			^FX Top section.
			^CF0,{{$font_1}}
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top}}^FDOrder No: {{$carton['order_number']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 2}}^FDStyle No:{{$carton['style']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 3}}^FDPack Item:{{$carton['item']}}^FS
			^CF0,{{$font_3}}
			^FO{{$pack_margin_left}},{{$margin_top}}^FD{{$carton['pack_type']}}^FS

			^FX Second.
			^CF0,{{$font_2}}
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 4}}^FH^FDDescription   {{$carton['description']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 4.6}}^FDGroup  {{$carton['group_name']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 5.2}}^FDDept  {{$carton['department_name']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 5.8}}^FDClass  {{$carton['class_name']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 6.4}}^FDSubClass  {{$carton['sub_class_name']}}^FS

			^FX Third section with barcode.
			^BY2,2
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 7.5}}^BCN,{{$margin_top * 3}},N,N,Y
			^FD{{$details['pibarcode']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 10.7}}
			^A0N,{{$font_1}},{{$font_1 - 20}}
			^FD{{$details['pinumber']}}^FS

			^FX Fourth section (the two boxes on the bottom).
			^BY2,2
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 11.7}}^BCN,{{$margin_top * 3}},N,N,Y
			^FD{{$details['barcode']}}^FS
			^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 15}}
			^A0N,{{$font_1}},{{$font_1 - 20}}
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