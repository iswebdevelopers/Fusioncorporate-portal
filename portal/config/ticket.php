<?php

return [
	'filename' => 'Created By Portal',
	'reprint' => 'N',
	'supplier_trait' => '9006',
	'mixed' => [
		'quantity' => '5'
	],
	'request_default' => [
		'print_online_ind' => 'Y',
		'multi_units' => '0',
		'multi_unit_retail' => '0'
	],
	'type' => [
		'sticky' => 'STCK',
		'carton' => 'CTRN'
	],
	'process' => [
		'sticky' => 'sticky',
		'simplepack' => 'sticky',
		'pack' => 'sticky',
		'item' => 'sticky'
	],
	'templates' => [
		'cartonpack' => 'cartonpack',
		'cartonloose' => 'cartonloose',
		'sticky' => 'sticky',
		'simplepack' => 'stickypack',
		'pack' => 'stickypack'
	],
	'barcodetype' => [
		'upca' => '^BUN',
		'ean13' => '^BEN',
		'code128' => '^BCN'
	]
];
