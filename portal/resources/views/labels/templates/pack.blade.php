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

		$barcode = '^BY'. ceil($height/200).','.ceil($height/300).','.ceil($height/5);

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
		<?php $total = count($sticky['packs']);?>
		@for ($i=1; $i <= $sticky['quantity']; $i++)
			<?php $label_no = 1; $count = 1; ?>
			^XA
			^FX Top section.
			^CF0,{{$font_1}}
			^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top}}^FD{{$sticky['order_number']}}^FS
			^FX Second.
			^CF0,{{$font_1}}
			^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 2.5}}^FDPACK:{{$sticky['pack_type']}}^FS
			^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 4}}^FD{{$sticky['pack_number']}}^FS
				<?php $label_no++; ?>
			@foreach ($sticky['packs'] as $item => $pack)
				@if (($label_no - 1) % $label_per_row == 0) 
					^XZ
					^XA
					<?php $label_no = 1;?>
				@endif
				^FX Top section.
				^CF0,{{$font_1}}
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top}}^FD{{$item}}^FS

				^FX Second.
				^CF0,{{$font_2}}
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 2}}^FDSize:{{$pack['item_size']}}^FS
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 2.5}}^FD{{$pack['stockroomlocator']}}^FS

				^FX Third section with barcode.
				{{$barcode}}
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 3.5}}^BE^FD{{$pack['barcode']}}^FS

				^FX Fourth section (the two boxes on the bottom).
				^CF0,{{$font_2}},
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 6.5}}^FH^FD{{str_replace('~','_7e',$pack['description'])}}^FS
				^CF0,{{$font_2}},
				^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 7}}^FH^FD{{str_replace('~','_7e',$pack['colour'])}}^FS
				@if ($count == $total)
					^XZ
				@endif
				@if($count < $total)
					<?php $label_no++; ?>
					<?php $count++; ?>
				@endif
			@endforeach
		@endfor
		{{$end}}
	@endif
@endif	