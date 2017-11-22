<!-- mixed carton print -->
	@for ($i = 1; $i <= $mixed; $i++)
		^XA
				^FX Top section.
				^CF0,100
				^FO90,300^FD************^FS
				^FO90,400^FDMixed^FS
				^FO90,500^FDOr^FS
				^FO90,600^FH^FDIncomplete^FS
				^FO90,700^FD************^FS
			^XZ
			<br/>
	@endfor