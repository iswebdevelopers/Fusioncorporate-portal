<?php 
	//convert the width and height to dots/mm
	$width = ceil(($settings['width']/$settings['count']) * $settings['density']);
	$height = ceil($settings['height'] * $settings['density']);
	$label_per_row = $settings['count'];

	//margin
	$margin_left = ceil(($width/100) * 11);  
	$margin_top = ceil(($height/100) * 10);

	//fontsizes
	$font_1 = ceil(($height/100) * 11);
	$font_2 = ceil(($height/100) * 8);


	//count
	$count = 1;
	$label_no = 1;
	
	$barcode = '^BY'. ceil($height/200).','.ceil($height/300).','.ceil($height/4);

	if(isset($settings['passthroughmode']) and ($settings['passthroughmode'] == 'on')) {
		$start = '${';
		$end = '}$';
	} else{
		$start = '';
		$end = '';
	}
?>
{{$start}}
^XA
^FX Top section.
^CF0,{{$font_1}}
^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top}}^FD121121212^FS
^FX Second.
^CF0,{{$font_1}}
^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 2}}^FDSize:37^FS
^FX Third section with barcode.
{{$barcode}}
^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 3.5}}^BUN^FD4005245256398^FS
^FX Fourth section (the two boxes on the bottom).
^CF0,{{$font_2}},
^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 7}}^FH^FD{{str_replace('~','_7e',"BRE")}}^FS
^CF0,{{$font_2}},
^FO{{$margin_left + (($label_no - 1) * $width)}},{{$margin_top * 8}}^FH^FD{{str_replace('~','_7e',"BLK ~ Black Multi")}}^FS
^XZ
{{$end}}