
@if(!empty($settings))
	<?php
		//convert the width and height to dots/mm
		$width = ceil(($settings['width']/$settings['count']) * $settings['density']);
		$height = ceil($settings['height'] * $settings['density']);
		$label_per_row = $settings['count'];

		//margin
		$margin_left = ceil(($width/100) * 11);  
		$margin_top = ceil(($height/100) * 6);
		$pack_margin_left = ceil(($width/100) * 60);
		//fontsizes
		$font_1 = ceil(($height/100) * 5);
		$font_2 = ceil(($height/100) * 4);
		$font_3 = ceil(($height/100) * 20);

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
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 2}}^FDStyle No:{{$carton['style']}}^FS
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 3}}^FDPack Item:{{$carton['item']}}^FS
				^CF0,{{$font_3}}
				^FO{{$pack_margin_left}},{{$margin_top}}^FD{{$carton['pack_type']}}^FS

				^FX Second.
				^CF0,{{$font_2}}
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 4}}^FH^FDDescription   {{$carton['description']}}^FS
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 4.5}}^FDGroup  {{$carton['group_name']}}^FS
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 5.5}}^FDDept  {{$carton['department_name']}}^FS
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 6}}^FDClass  {{$carton['class_name']}}^FS
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 6.5}}^FDSubClass  {{$carton['sub_class_name']}}^FS

				^FX Third section with barcode.
				^BY2,2
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 7.5}}^BCN,{{$margin_top * 3}},N,N,Y
				^FD{{$details['pibarcode']}}^FS
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 10.2}}
				^A0N,{{$font_1}},{{$font_1 - 10}}
				^FD{{$details['pinumber']}}^FS

				^FX Fourth section (the two boxes on the bottom).
				^BY2,2
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 11.2}}^BCN,{{$margin_top * 3}},N,N,Y
				^FD{{$details['barcode']}}^FS
				^FO{{$margin_left + ($count * $width)}},{{$margin_top * 14.2}}
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
	@endif
@endif	