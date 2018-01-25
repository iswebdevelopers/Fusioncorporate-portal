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
{{$start}}
^XA
^FX Top section.
^CF0,{{$font_1}}
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top}}^FDOrder No:1212123^FS
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 2}}^FDStyle No: 121121212^FS
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 3}}^FDSize: 37^FS
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 4}}^FH^FDColour: {{str_replace('~',' _7e ',"BLK ~ Black Multi")}}^FS
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 5}}^FDQty: 1^FS

^FX Second.
^CF0,{{$font_2}}
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 6.5}}^FDItem No  121121212^FS
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 7.5}}^FH^FDDescription   {{str_replace('~',' _7e ',"BRE:BLK ~ Black Multi")}}^FS

^FX Third section with barcode.
^BY2,2
^FO{{$barcodemargin_left + (($count - 1) * $width)}},{{$margin_top * 8.5}}^BCN,{{$margin_top * 3}},N,N,Y
^FD400121212302121121212301^FS
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 11.7}}
^A0N,{{$font_1}},{{$font_1 - 10}}
^FD(400) 1212123 (02) 121121212 (30) 1^FS

^FX Fourth section (the two boxes on the bottom).
^BY2,2
^FO{{$barcodemargin_left + (($count - 1) * $width)}},{{$margin_top * 12.7}}^BCN,{{$margin_top * 3}},N,N,Y
^FD00432562790123415689^FS
^FO{{$margin_left + (($count - 1) * $width)}},{{$margin_top * 15.9}}
^A0N,{{$font_1}},{{$font_1 - 10}}
^FD(00) 432562790123415689^FS
^XZ
{{$end}}